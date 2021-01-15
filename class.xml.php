<?php

	class XML {
	
		var $SQLquery;
		var $userSQLquery;
		//Ashok: Temp
		var $userActivePlan = true;//false;
		
		//constructor
		public function XML() {
			$this->SQLquery = new DbConnector();
			$this->userSQLquery = new DbConnector("user");
		}
		
		public function export($user_id, $exports, $category_id) {
			header("Location: ".dirname($_SERVER["SCRIPT_URI"])."/export-xls.php?user_id=".$user_id."&exports=".$exports."&category_id=".$category_id);
		}
		
		public function loadDataXLS($user_id, $file) {
			require_once dirname(__FILE__) . '/SystemComponent.php';
			require_once dirname(__FILE__) . '/extentions/Classes/PHPExcel.php';
			require_once dirname(__FILE__) . '/extentions/Classes/PHPExcel/IOFactory.php';
			require_once dirname(__FILE__) . '/extentions/Classes/PHPExcel/Cell.php';
			
			$settings = SystemComponent::getSettings();
			$folder = $settings['upfolderserver'] . $user_id;
			$file =  $folder . "/" . $file;
			
			// Create new PHPExcel object
			$objPHPExcel = new PHPExcel();
			
			//=== set object reader
			$objectReader = PHPExcel_IOFactory::createReader('Excel5');
			$objectReader->setReadDataOnly(true);
			
			if ($objectReader->canRead($file)) {
				$objPHPExcel = $objectReader->load($file);
				$data = "<sheets>";
				$i = 0;
				$imax = $objPHPExcel->getSheetCount();
				while ($i < $imax) {
					$worksheet = $objPHPExcel->getActiveSheet();
					$rmax = $worksheet->getHighestDataRow();
					$cmax = PHPExcel_Cell::columnIndexFromString($worksheet->getHighestDataColumn());
					
					$data .= "<sheet>";
					$data .= "<label>".$worksheet->getTitle()."</label>";
					$data .= "<rows>".$rmax."</rows>";
					$data .= "<column>".$cmax."</column>";
					$data .= "<data>";
					$r = 1;
					
					while ($r <= $rmax) {
						$c = 0;
						$data .= "<r>";
						while ($c < $cmax) {
							 $data .= "<c>".$this->SetCDATA($worksheet->getCellByColumnAndRow($c, $r)->getValue())."</c>";
							$c++;	
						}
						$data .= "</r>";
						$r++;	
					}
					
					$data .= "</data>";
					$data .= "</sheet>";
					$i++;	
				}
				$data .= "</sheets>";
			} else {
				// cannot read the file
				$data = "<sheets></sheets>";
			}
			return $data;
		}
		
		//set CDATA
		public static function SetCDATA($content) {
			$output = "<![CDATA[".$content."]]>";
			return $output;
		}
		
		public function getData($userID) {
			return $this->reqeustTag($this->getUserData($userID), 1);
		}
		
		public function login($email, $pass) {
			$user = get_user_by( 'login', $email );
			if (!$user) {
				$user = get_user_by( 'email', $email );
			}
			
			if ($user && wp_check_password( $pass, $user->data->user_pass, $user->ID) ) {
				if ( !is_user_logged_in() ) {
					$creds = array();
					$creds['user_login'] = $user->user_login;
					$creds['user_password'] = $pass;
					$creds['remember'] = true;
					$user = wp_signon( $creds, false );
					if ( is_wp_error($user) ) {
						echo $user->get_error_message();
					}
				}
				$return = $this->reqeustTag($this->getUserData($user->ID), 1);
			} else {
				$return = $this->reqeustTag("Email or Password do not match.", 0);
			}
			return $return;
		}
		
		public function logout() {
			wp_logout();
			return $this->reqeustTag("", 1);
		}
		
		
		private function getUserInfo($user_id) {
			$result = $this->userSQLquery->query("SELECT * FROM wp_users WHERE ID=".$user_id);
			
			$num_rows = $this->userSQLquery->getNumRows($result);
			$return="";
			if ($num_rows != 0) {
				$return .= "<user>";
				while ($row = $this->userSQLquery->fetchObject($result)) {
					$return .= "<id>".$row->ID."</id>";
					$return .= "<login>".$row->user_login."</login>";
					$return .= "<nicename>".$row->user_nicename."</nicename>";
					$return .= "<email>".$row->user_email."</email>";
					$return .= "<registered>".$row->user_registered."</registered>";
					$return .= "<displayName>".$row->display_name."</displayName>";
					$return .= $this->order($row->ID);
				}
				$return .= "</user>";
			} else {
				$return .= "<user />";
			}
			
			return $return;
		}
		
		public function getDebug($user_id) {
			$result = $this->userSQLquery->query("SELECT
												wp_postmeta.post_id as pid,
												wp_postmeta.meta_value,
												wp_woocommerce_order_items.order_item_id,
												wp_woocommerce_order_items.order_item_name,
												wp_woocommerce_order_itemmeta.meta_value As product_id
												FROM wp_postmeta

												join wp_woocommerce_order_items on wp_postmeta.post_id = wp_woocommerce_order_items.order_id
												join wp_woocommerce_order_itemmeta on wp_woocommerce_order_items.order_item_id = wp_woocommerce_order_itemmeta.order_item_id

												WHERE wp_postmeta.meta_value = '".$user_id."'
												AND wp_woocommerce_order_itemmeta.meta_key = '_product_id'
												AND wp_postmeta.meta_key = '_customer_user'
												ORDER BY pid DESC LIMIT 3;");
			
			$num_rows = $this->userSQLquery->getNumRows($result);
			$return.= "<q>".$this->userSQLquery->getQuery()."</q>";
			//$today = getdate();
			$today = date('Y-m-d H:i:s');
			$today_seconds = strtotime((string)$today);
			$i = 0;
			$active = false;
			
			if ($num_rows != 0) {
				while ($row = $this->userSQLquery->fetchObject($result)) {
					$paid_date =  $this->getWPpostmeta("_paid_date", $row->pid);
					
					if ($paid_date === NULL) {
						$paid_date =  $this->getWPpostmeta("_completed_date", $row->pid);
					}
					$paid_seconds = strtotime($paid_date);
					if ($paid_date === NULL) {
						$paid_date = $today_seconds;
						$status = "expire";
						$days_left = 0;
					} else {
						$subscription_period = $this->getWPpostmeta("_subscription_period", $row->product_id);
						
						
						switch ($subscription_period) {
							case "month":

								$endOfSubscription = date('Y-m-d H:i:s', strtotime( "+1 month", strtotime($paid_date)));
								$endOfSubscription_seconds = strtotime($endOfSubscription);
							break;
							case "year":
								$endOfSubscription = date('Y-m-d H:i:s', strtotime( "+1 year", strtotime($paid_date)));
								$endOfSubscription_seconds = strtotime($endOfSubscription);
							break;
						}
						
						
						$trial_type = $this->getWPpostmeta("_subscription_trial_period", $row->product_id);
						$trial_duration = $this->getWPpostmeta("_subscription_trial_length", $row->product_id);
						
						$endOfTrial = date('Y-m-d H:i:s', strtotime( "+".$trial_duration." ".$trial_type, strtotime($paid_date)));
						$endOfTrial_seconds = strtotime($endOfSubscription);
						
						$days_left = ($endOfSubscription_seconds - $today_seconds) / (24 * 3600);
						$trial_left = ($endOfTrial_seconds - $today_seconds) / (24 * 3600);
						
						if ($days_left < 0) {
							$status = "expire";
							$active = false;
							$days_left = 0;
						} else {
							$active = true;
							$status = "active";
						}
						
					}

					$orders[] = array(	"postID"				=> $row->pid,
										"status"				=> $status,
										"orderItemID"			=> $row->order_item_id,
										"orderItemName"			=> $row->order_item_name,
										"maxItem"				=> $this->getWPpostmeta("max_items", $row->product_id),
										"dayEndSubscription"	=> $endOfSubscription,
										"daysLeftSubscription"	=> ceil($days_left),
										"daysLeftTrial"			=> ceil($trial_left),
										"paidDate"				=> $paid_date,
										"trialDate"				=> $endOfTrial,
										"isTrial"				=> ($trial_left > 0),
										"productID"				=> $row->product_id);
				}
			}
			
			$return.= "<trace>";
			$o = 0;
			$orders_max = count($orders);
			while ($o < $orders_max) {
				$return.= "<order>";
				$return.= "<postID>".$orders[$o]["postID"]."</postID>";
				$return.= "<status>".$orders[$o]["status"]."</status>";
				$return.= "<orderItemID>".$orders[$o]["orderItemID"]."</orderItemID>";
				$return.= "<orderItemName>".$orders[$o]["orderItemName"]."</orderItemName>";
				$return.= "<maxItem>".$orders[$o]["maxItem"]."</maxItem>";
				$return.= "<dayEndSubscription>".$orders[$o]["dayEndSubscription"]."</dayEndSubscription>";
				$return.= "<daysLeftSubscription>".$orders[$o]["daysLeftSubscription"]."</daysLeftSubscription>";
				$return.= "<daysLeftTrial>".$orders[$o]["daysLeftTrial"]."</daysLeftTrial>";
				$return.= "<paidDate>".$orders[$o]["paidDate"]."</paidDate>";
				$return.= "<trialDate>".$orders[$o]["trialDate"]."</trialDate>";
				$return.= "<isTrial>".$orders[$o]["isTrial"]."</isTrial>";
				$return.= "<productID>".$orders[$o]["productID"]."</productID>";
				$return.= "</order>";
				$o++;
			}
			$return.= "</trace>";
			
			// removing the expired packages;
			$o = 0;
			$orders_max = count($orders);
			while ($o < $orders_max) {
				if ($orders[$o]["status"] == "active") {
					$out[] = $orders[$o];
				}
				$o++;
			}
			
			$orders = $out;
			// removing get larger package and last to expire;
			$selected = -1;
			$maxItem = 0;
			$dayEndSubscription = 0;
			$o = 0;
			$orders_max = count($orders);
			while ($o < $orders_max) {
				if ($orders[$o]["maxItem"] > $maxItem) {
					$maxItem = $orders[$o]["maxItem"];
					$dayEndSubscription = strtotime($orders[$o]["dayEndSubscription"]);
					$selected = $o;
				} else if (($orders[$o]["maxItem"] == $maxItem) AND (strtotime($orders[$o]["dayEndSubscription"]) > $dayEndSubscription)) {
					$dayEndSubscription = strtotime($orders[$o]["dayEndSubscription"]);
					$selected = $o;
				}
				$o++;
			}
			
			if ($selected != -1) {
				$theOne[0] = $orders[$selected];
				$this->userActivePlan = false;
			}
			
			
			$o = 0;
			$orders_max = count($theOne);
			if ($orders_max == 0) {
				$return .= "<order/>";
			} else {
				while ($o < $orders_max) {
					$this->userActivePlan = true;
					$return .= "<order>";
					$return .= "<postID>".$theOne[$o]["postID"]."</postID>";
					$return .= "<status>".$theOne[$o]["status"]."</status>";
					$return .= "<orderItemID>".$theOne[$o]["orderItemID"]."</orderItemID>";
					$return .= "<orderItemName>".$theOne[$o]["orderItemName"]."</orderItemName>";
					$return .= "<maxItem>".$theOne[$o]["maxItem"]."</maxItem>";
					$return .= "<dayEndSubscription>".$theOne[$o]["dayEndSubscription"]."</dayEndSubscription>";
					$return .= "<daysLeftSubscription>".$theOne[$o]["daysLeftSubscription"]."</daysLeftSubscription>";
					$return .= "<daysLeftTrial>".$theOne[$o]["daysLeftTrial"]."</daysLeftTrial>";
					$return .= "<paidDate>".$theOne[$o]["paidDate"]."</paidDate>";
					$return .= "<trialDate>".$theOne[$o]["trialDate"]."</trialDate>";
					$return .= "<isTrial>".$theOne[$o]["isTrial"]."</isTrial>";
					$return .= "<productID>".$theOne[$o]["productID"]."</productID>";
					$return .= "</order>";
					$o++;
				}
			}
			return $return;
		}
		
		
		public function order($user_id) {
			/*
			$result = $this->userSQLquery->query("SELECT
												wp_postmeta.post_id as pid,
												wp_postmeta.meta_value,
												wp_woocommerce_order_items.order_item_id,
												wp_woocommerce_order_items.order_item_name,
												wp_woocommerce_order_itemmeta.meta_value As product_id
												FROM wp_postmeta

												join wp_woocommerce_order_items on wp_postmeta.post_id = wp_woocommerce_order_items.order_id
												join wp_woocommerce_order_itemmeta on wp_woocommerce_order_items.order_item_id = wp_woocommerce_order_itemmeta.order_item_id

												WHERE wp_postmeta.meta_value = '".$user_id."'
												AND wp_woocommerce_order_itemmeta.meta_key = '_product_id'
												AND wp_postmeta.meta_key = '_customer_user';");
			
			$num_rows = $this->userSQLquery->getNumRows($result);
			$return.= "<q>".$this->userSQLquery->getQuery()."</q>";
			//$today = getdate();
			$today = date('Y-m-d H:i:s');
			$today_seconds = strtotime((string)$today);
			$i = 0;
			$active = false;
			
			if ($num_rows != 0) {
				while ($row = $this->userSQLquery->fetchObject($result)) {
					$paid_date =  $this->getWPpostmeta("_paid_date", $row->pid);
					
					if ($paid_date === NULL) {
						$paid_date =  $this->getWPpostmeta("_completed_date", $row->pid);
					}
					$paid_seconds = strtotime($paid_date);
					if ($paid_date === NULL) {
						$paid_date = $today_seconds;
						$status = "expire";
						$days_left = 0;
					} else {
						$subscription_period = $this->getWPpostmeta("_subscription_period", $row->product_id);
						
						
						switch ($subscription_period) {
							case "month":

								$endOfSubscription = date('Y-m-d H:i:s', strtotime( "+1 month", strtotime($paid_date)));
								$endOfSubscription_seconds = strtotime($endOfSubscription);
							break;
							case "year":
								$endOfSubscription = date('Y-m-d H:i:s', strtotime( "+1 year", strtotime($paid_date)));
								$endOfSubscription_seconds = strtotime($endOfSubscription);
							break;
						}
						
						
						$trial_type = $this->getWPpostmeta("_subscription_trial_period", $row->product_id);
						$trial_duration = $this->getWPpostmeta("_subscription_trial_length", $row->product_id);
						
						$endOfTrial = date('Y-m-d H:i:s', strtotime( "+".$trial_duration." ".$trial_type, strtotime($paid_date)));
						$endOfTrial_seconds = strtotime($endOfSubscription);
						
						$days_left = ($endOfSubscription_seconds - $today_seconds) / (24 * 3600);
						$trial_left = ($endOfTrial_seconds - $today_seconds) / (24 * 3600);
						
						if ($days_left < 0) {
							$status = "expire";
							$active = false;
							$days_left = 0;
						} else {
							$active = true;
							$status = "active";
						}
						
					}

					$orders[] = array(	"postID"				=> $row->pid,
										"status"				=> $status,
										"orderItemID"			=> $row->order_item_id,
										"orderItemName"			=> $row->order_item_name,
										"maxItem"				=> $this->getWPpostmeta("max_items", $row->product_id),
										"dayEndSubscription"	=> $endOfSubscription,
										"daysLeftSubscription"	=> ceil($days_left),
										"daysLeftTrial"			=> ceil($trial_left),
										"paidDate"				=> $paid_date,
										"trialDate"				=> $endOfTrial,
										"isTrial"				=> ($trial_left > 0),
										"productID"				=> $row->product_id);
				}
			}
			*/
			
			
			/*
			$return.= "<trace>";
			$o = 0;
			$orders_max = count($orders);
			while ($o < $orders_max) {
				$return.= "<order>";
				$return.= "<postID>".$orders[$o]["postID"]."</postID>";
				$return.= "<status>".$orders[$o]["status"]."</status>";
				$return.= "<orderItemID>".$orders[$o]["orderItemID"]."</orderItemID>";
				$return.= "<orderItemName>".$orders[$o]["orderItemName"]."</orderItemName>";
				$return.= "<maxItem>".$orders[$o]["maxItem"]."</maxItem>";
				$return.= "<dayEndSubscription>".$orders[$o]["dayEndSubscription"]."</dayEndSubscription>";
				$return.= "<daysLeftSubscription>".$orders[$o]["daysLeftSubscription"]."</daysLeftSubscription>";
				$return.= "<daysLeftTrial>".$orders[$o]["daysLeftTrial"]."</daysLeftTrial>";
				$return.= "<paidDate>".$orders[$o]["paidDate"]."</paidDate>";
				$return.= "<trialDate>".$orders[$o]["trialDate"]."</trialDate>";
				$return.= "<isTrial>".$orders[$o]["isTrial"]."</isTrial>";
				$return.= "<productID>".$orders[$o]["productID"]."</productID>";
				$return.= "</order>";
				$o++;
			}
			$return.= "</trace>";
			*/
			
			
			/*
			Good!
			// removing the expired packages;
			$o = 0;
			$orders_max = count($orders);
			while ($o < $orders_max) {
				if ($orders[$o]["status"] == "active") {
					$out[] = $orders[$o];
				}
				$o++;
			}
			
			$orders = $out;
			// removing get larger package and last to expire;
			$selected = -1;
			$maxItem = 0;
			$dayEndSubscription = 0;
			$o = 0;
			$orders_max = count($orders);
			while ($o < $orders_max) {
				if ($orders[$o]["maxItem"] > $maxItem) {
					$maxItem = $orders[$o]["maxItem"];
					$dayEndSubscription = strtotime($orders[$o]["dayEndSubscription"]);
					$selected = $o;
				} else if (($orders[$o]["maxItem"] == $maxItem) AND (strtotime($orders[$o]["dayEndSubscription"]) > $dayEndSubscription)) {
					$dayEndSubscription = strtotime($orders[$o]["dayEndSubscription"]);
					$selected = $o;
				}
				$o++;
			}
			
			if ($selected != -1) {
				$theOne[0] = $orders[$selected];
				$this->userActivePlan = false;
			}
			
			
			$o = 0;
			$orders_max = count($theOne);
			if ($orders_max == 0) {
				$return .= "<order/>";
			} else {
				while ($o < $orders_max) {
					$this->userActivePlan = true;
					$return .= "<order>";
					$return .= "<postID>".$theOne[$o]["postID"]."</postID>";
					$return .= "<status>".$theOne[$o]["status"]."</status>";
					$return .= "<orderItemID>".$theOne[$o]["orderItemID"]."</orderItemID>";
					$return .= "<orderItemName>".$theOne[$o]["orderItemName"]."</orderItemName>";
					$return .= "<maxItem>".$theOne[$o]["maxItem"]."</maxItem>";
					$return .= "<dayEndSubscription>".$theOne[$o]["dayEndSubscription"]."</dayEndSubscription>";
					$return .= "<daysLeftSubscription>".$theOne[$o]["daysLeftSubscription"]."</daysLeftSubscription>";
					$return .= "<daysLeftTrial>".$theOne[$o]["daysLeftTrial"]."</daysLeftTrial>";
					$return .= "<paidDate>".$theOne[$o]["paidDate"]."</paidDate>";
					$return .= "<trialDate>".$theOne[$o]["trialDate"]."</trialDate>";
					$return .= "<isTrial>".$theOne[$o]["isTrial"]."</isTrial>";
					$return .= "<productID>".$theOne[$o]["productID"]."</productID>";
					$return .= "</order>";
					$o++;
				}
			}
			*/
			/// added 
			
			$this->userActivePlan = true;
			$return = "<order>";
			$return .= "<postID>1</postID>";
			$return .= "<status>active</status>";
			$return .= "<orderItemID>1</orderItemID>";
			$return .= "<orderItemName>1</orderItemName>";
			$return .= "<maxItem>0</maxItem>";
			$return .= "<dayEndSubscription>1</dayEndSubscription>";
			$return .= "<daysLeftSubscription>1</daysLeftSubscription>";
			$return .= "<daysLeftTrial>1</daysLeftTrial>";
			$return .= "<paidDate>1</paidDate>";
			$return .= "<trialDate>1</trialDate>";
			$return .= "<isTrial>1</isTrial>";
			$return .= "<productID>1</productID>";
			$return .= "</order>";
			return $return;
		}
		
		private function getWPpostmeta($key, $pid) {
			$result = $this->userSQLquery->query("SELECT meta_value from wp_postmeta WHERE wp_postmeta.meta_key = '$key' AND wp_postmeta.post_id = $pid");
			//echo "<qq>".$this->userSQLquery->getQuery()."</qq>";
			$num_rows = $this->userSQLquery->getNumRows($result);
			while ($row = $this->userSQLquery->fetchObject($result)) {
				return $row->meta_value;
			}
			return NULL;
			//return $this->userSQLquery->getQuery();
		}
		
		public function fonts() {
			$result = $this->SQLquery->query("SELECT * FROM fonts");
			
			$num_rows = $this->SQLquery->getNumRows($result);
			
			if ($num_rows != 0) {
				$return .= '<fonts>';
				while ($row = $this->SQLquery->fetchObject($result)) {
					$return .= "<font>";
					$return .= '<id>'.$this->SetCDATA($row->id).'</id>';
					$return .= '<label>'.$this->SetCDATA($row->label).'</label>';
					$return .= '<url>'.$this->SetCDATA($row->url).'</url>';
					$return .= '<charset>'.$this->SetCDATA($row->charsett).'</charset>';
					$return .= '<family>'.$this->SetCDATA($row->family).'</family>';
					$return .= '<default>'.$this->SetCDATA($row->defaultt).'</default>';
					$return .= "</font>";
				}
				$return .= '</fonts>';
			}
			else {
				$return = '<fonts />';
			}
			return $return;
		}
		
		//Ashok: 27-01-2020
		public function getItemStyleData($item_id){
			$return="";
			$return .= $this->getItemStyle($item_id);
			return $return;			
		}
		
		////////////////// private functions
		
		private function getUserData($userID) {
			$return="";
			$return .= $this->getUserInfo($userID);
			if ($this->userActivePlan) {
				$return .= $this->getCollections($userID);
				$return .= $this->getTemplates($userID);
				$return .= $this->getPrintQueue($userID);
			}
			return $return;
		}
		
		private function getCollections($user_id) {
			$result = $this->SQLquery->query("SELECT * FROM collections WHERE user_id=$user_id");
			
			$num_rows = $this->SQLquery->getNumRows($result);
			$return='';
			if ($num_rows != 0) {
				$return .= '<collections>';
				while ($row = $this->SQLquery->fetchObject($result)) {
					$return .= "<c>";
					$return .= '<label id="'.$row->id.'">'.$this->SetCDATA($row->label).'</label>';
					$return .= $this->getCategories($row->id);
					$return .= "</c>";
				}
				$return .= '</collections>';
			}
			else {
				$return = '<collections />';
			}
			return $return;
		}
		
		private function getCategories($collection_id) {
			$result = $this->SQLquery->query("SELECT * FROM categories WHERE collection_id=$collection_id");
			
			$num_rows = $this->SQLquery->getNumRows($result);
			$return="";
			if ($num_rows != 0) {
				$return .= '<categories>';
				while ($row = $this->SQLquery->fetchObject($result)) {
					$return .= "<c>";
					$return .= '<label id="'.$row->id.'">'.$this->SetCDATA($row->label).'</label>';
					$return .= $this->getCategoryProperties($row->id);
					$return .= $this->getCategoryStyle($row->id);
					$return .= $this->getItems($row->id);
					$return .= "</c>";
					
				}
				$return .= '</categories>';
			}
			else {
				$return = '<categories />';
			}
			return $return;
		}
		
		private function getCategoryStyle($category_id) {
			$result = $this->SQLquery->query("SELECT * FROM styleCategory WHERE category_id=$category_id");
			$num_rows = $this->SQLquery->getNumRows($result);
			$return="";
			if ($num_rows != 0) {
				$return .= '<styles>';
				
				while ($row = $this->SQLquery->fetchObject($result)) {
					$return .= "<s>";
					$return .= "<id>".$row->id."</id>";
					$return .= "<templateID>".$row->template_id."</templateID>";
					$return .= "<style>".$this->SetCDATA($row->style)."</style>";
					$return .= "</s>";
				}
				$return .= '</styles>';
			}
			else {
				$return = '<styles />';
			}
			return $return;
		}
			
		private function getCategoryProperties($category_id) {
			$result = $this->SQLquery->query("SELECT * FROM categoriesProperties WHERE category_id=$category_id");
			
			$num_rows = $this->SQLquery->getNumRows($result);
			$return="";
			if ($num_rows != 0) {
				$return .= '<properties>';
				
				while ($row = $this->SQLquery->fetchObject($result)) {
					$return .= "<p>";
					$return .= '<label id="'.$row->id.'">'.$this->SetCDATA($row->label).'</label>';
					$return .= '<type>'.$row->type.'</type>';
					$return .= '<default>'.$this->SetCDATA($row->defaultt).'</default>';
					switch ($row->type) {
						case "list":
							$return .= $this->getTypeListItems($row->id);
						break;
						case "imglist":
							$return .= $this->getTypeImageListItems($row->id);
						break;
					}
					$return .= "</p>";
					
				}
				$return .= '</properties>';
			}
			else {
				$return = '<properties />';
			}
			return $return;
		}
		
		
		private function getTypeImageListItems($prop_id) {
			$result = $this->SQLquery->query("SELECT * FROM spTypeImageListItem WHERE prop_id=$prop_id");
			
			$num_rows = $this->SQLquery->getNumRows($result);
			$return="";
			if ($num_rows != 0) {
				$return .= '<list>';
				
				while ($row = $this->SQLquery->fetchObject($result)) {
					$return .= '<item id="'.$row->id.'">';
					$return .= '<label >'.$this->SetCDATA($row->label).'</label>';
					$return .= '<value>'.$this->SetCDATA($row->value).'</value>';
					$return .= '</item>';
				}
				$return .= '</list>';
			}
			else {
				$return = '<list />';
			}
			return $return;
		}
		
		private function getTypeListItems($prop_id) {
			$result = $this->SQLquery->query("SELECT * FROM spTypeListItem WHERE prop_id=$prop_id");
			
			$num_rows = $this->SQLquery->getNumRows($result);
			$return="";
			if ($num_rows != 0) {
				$return .= '<list>';
				
				while ($row = $this->SQLquery->fetchObject($result)) {
					$return .= '<label id="'.$row->id.'">'.$this->SetCDATA($row->label).'</label>';
					
				}
				$return .= '</list>';
			}
			else {
				$return = '<list />';
			}
			return $return;
		}
		
		private function getSpecialDataFromItem($item_id, $table, $tag) {
			$result = $this->SQLquery->query("SELECT * FROM $table WHERE item_id=$item_id");
			
			$num_rows = $this->SQLquery->getNumRows($result);
			
			$return = '';
			
			while ($row = $this->SQLquery->fetchObject($result)) {
				switch ($tag) {
					case "imgbool":
						$return .= '<v id="'.$row->id.'" prop_id="'.$row->prop_id.'" type="'.$tag.'" selected="'.$row->bool.'">'.$this->SetCDATA($row->value).'</v>';
					break;
					default:
						$return .= '<v id="'.$row->id.'" prop_id="'.$row->prop_id.'" type="'.$tag.'">'.$this->SetCDATA($row->value).'</v>';
					break;
				}
				
			}
			return $return;
			
		}
		
		private function getItems($category_id) {
			$result = $this->SQLquery->query("SELECT * FROM items WHERE category_id=$category_id");
			
			$num_rows = $this->SQLquery->getNumRows($result);
			$return="";
			if ($num_rows != 0) {
				$return .= '<items>';
				while ($row = $this->SQLquery->fetchObject($result)) {
					$return .= "<i>";
					$return .= '<id>'.$row->id.'</id>';
					if ($row->label != "") {
						$return .= '<label>'.$this->SetCDATA($row->label).'</label>';
					}
					if ($row->description != "") {
						$return .= '<description>'.$this->SetCDATA($row->description).'</description>';
					}
					if ($row->img_path != "") {
						$return .= '<img_path>'.$this->SetCDATA($row->img_path).'</img_path>';
					}
					if ($row->price != "") {
						$return .= '<price>'.$this->SetCDATA($row->price).'</price>';
					}
					if ($row->tags != "") {
						$return .= '<tags>'.$this->SetCDATA($row->tags).'</tags>';
					}
					$tpl_id = (int)$row->template_id;
					if ($tpl_id != 0) {
						$return .= '<templateID>'.$tpl_id.'</templateID>';
					}
					$return .= '<values>';
					$return .= $this->getSpecialDataFromItem($row->id, "spTypeBoolean", "bool");
					$return .= $this->getSpecialDataFromItem($row->id, "spTypeImage", "img");
					$return .= $this->getSpecialDataFromItem($row->id, "spTypeImageBoolean", "imgbool");
					$return .= $this->getSpecialDataFromItem($row->id, "spTypeList", "list");
					$return .= $this->getSpecialDataFromItem($row->id, "spTypeNumber", "number");
					$return .= $this->getSpecialDataFromItem($row->id, "spTypeText", "text");
					$return .= $this->getSpecialDataFromItem($row->id, "spTypeImageList", "imglist");
					$return .= '</values>';
					$return .= $this->getItemStyle($row->id);
					
					$return .= "</i>";
				}
				$return .= '</items>';
			}
			else {
				$return = '<items />';
			}
			return $return;
		}
		
		private function getItemStyle($item_id) {
			$result = $this->SQLquery->query("SELECT * FROM styleItem WHERE item_id=$item_id");
			
			$num_rows = $this->SQLquery->getNumRows($result);
			$return="";
			if ($num_rows != 0) {
				$return .= '<styles>';
			
				while ($row = $this->SQLquery->fetchObject($result)) {
					$return .= '<s>';
					$return .= '<id>'.$row->id.'</id>';
					$return .= '<label>'.$this->SetCDATA($row->label).'</label>';
					$return .= '<description>'.$this->SetCDATA($row->description).'</description>';
					$return .= '<price>'.$this->SetCDATA($row->price).'</price>';
					$return .= "<imgRect>".$row->img_rect."</imgRect>";
					$return .= "<templateID>".$row->template_id."</templateID>";
					$return .= $this->getItemStyleSpecial($row->id);
					$return .= '</s>';
				}
				
				$return .= '</styles>';
			}
			else {
				$return = '<styles />';
			}
			return $return;
		}
		
		
		private function getItemStyleSpecial($styleItem_id) {
			$result = $this->SQLquery->query("SELECT * FROM styleSpType WHERE styleItem_id=$styleItem_id");
			$return="";
			while ($row = $this->SQLquery->fetchObject($result)) {
				$return .= "<sp id='".$row->id."' type='".$row->spType_type."' prop_id='".$row->spType_id."'>".$this->SetCDATA($row->style)."</sp>";
			}
			return $return;
		}
		
		
		private function getTemplates($user_id) {
			$result = $this->SQLquery->query("SELECT * FROM templates WHERE user_id=$user_id");
			
			$num_rows = $this->SQLquery->getNumRows($result);
			$return="";
			if ($num_rows != 0) {
				$return .= '<templates>';
			
				while ($row = $this->SQLquery->fetchObject($result)) {
					$return .= '
						<item>
							<id>'.$row->id.'</id>
							<label>'.$this->SetCDATA($row->label).'</label>
							<description>'.$this->SetCDATA($row->description).'</description>
							<width>'.$row->width.'</width>
							<height>'.$row->height.'</height>
							<stroke>'.$row->stroke.'</stroke>
							<strokeColor>'.$row->strokeColor.'</strokeColor>
							<bkgColor>'.$row->bkgColor.'</bkgColor>
							<image>'.$row->image.'</image>
							<imageStyle>'.$row->imageStyle.'</imageStyle>
							<imgRect>'.$row->img_rect.'</imgRect>
					</item>';
				}
				$return .= '</templates>';
			}
			else {
				$return = '<templates />';
			}
			return $return;
		}
		
		private function getPrintQueue($user_id) {
		    $result = $this->SQLquery->query("SELECT * FROM tblPrintQueue WHERE UserID=$user_id");
		    
		    $num_rows = $this->SQLquery->getNumRows($result);
		    $return="";
		    if ($num_rows != 0) {
		        $return .= '<PrintQueue>';
		        
		        while ($row = $this->SQLquery->fetchObject($result)) {
		            $return .= '
						<item>
							<SrNo>'.$row->SrNo.'</SrNo>
							<ItemID>'.$row->ItemID.'</ItemID>
							<TemplateID>'.$row->TemplateID.'</TemplateID>
							<NoOfCopy>'.$row->NoOfCopy.'</NoOfCopy>							
					</item>';
		        }
		        $return .= '</PrintQueue>';
		    }
		    else {
		        $return = '<PrintQueue />';
		    }
		    return $return;
		}
		
		private function reqeustTag($text, $flag) {
			return "<request flag='".$flag."'>".$text."</request>";
		}
		
	}
?>
<?
	class Request {
	
		var $SQLquery;
		
		//constructor
		public function Request() {
			$this->SQLquery = new DbConnector();
		}
		
		
		
		public function register($name, $email, $password) {
			$query = $this->SQLquery->query("SELECT propertyEditid FROM users WHERE email = '$email';");
			$num_rows = $this->SQLquery->getNumRows($query);
			if ($num_rows > 0) {
				return $this->reqeustTag("Email ".$email." exist in database.", 0);
			} else {
				$query = $this->SQLquery->query("INSERT INTO users (id, email, password, name) VALUES (NULL, '$email', '".md5(password)."', '$name');");
				$ID = $this->SQLquery->lastAddedID();
				$return = "<id>".$ID."</id>";
				return $this->reqeustTag($return, 1);
			}
		}
		
		
		
		
		
		
		
		
		
		/*//////////////////////////////////////////////////////////////////
		
		
		//////////////////////////////////////////////////////////////////*/
		
		public function updateImageCrop($user_id, $item_id, $template_id, $rect) {
			$rect = stripslashes($rect);
			$getTemplate = $this->SQLquery->query("SELECT id FROM styleItem WHERE item_id= '$item_id' AND template_id = '$template_id';");
			$return .= "<q>".$this->SQLquery->getQuery()."</q>";
			$num_rows = $this->SQLquery->getNumRows($getTemplate);
			
			if ($num_rows == 0) {
				// insert
				$this->SQLquery->query("INSERT INTO styleItem (id, label, description, price, img_rect, item_id, template_id) VALUES (NULL, NULL, NULL, NULL, '$rect', '$item_id', '$template_id');");
			} else {
				// update
				while ($row = $this->SQLquery->fetchObject($getTemplate)) {
					$this->SQLquery->query("UPDATE styleItem SET img_rect = '$rect' WHERE id =".$row->id.";");
				}
			}
			$return .= "<q>".$this->SQLquery->getQuery()."</q>";
			
			return $this->reqeustTag($return, 1);
		}
		
		public function updateDefaultStyle($category_id, $tpl_id, $style) {
			$getTemplate = $this->SQLquery->query("SELECT id FROM styleCategory WHERE category_id= '$category_id' AND template_id = '$tpl_id';");
			$num_rows = $this->SQLquery->getNumRows($getTemplate);
			
			if ($num_rows == 0) {
				// insert
				$this->SQLquery->query("INSERT INTO styleCategory (id, category_id, template_id, style) VALUES (NULL, '$category_id', '$tpl_id', '".stripslashes($style)."');");
			} else {
				// update
				while ($row = $this->SQLquery->fetchObject($getTemplate)) {
					$this->SQLquery->query("UPDATE styleCategory SET category_id = '$category_id',template_id = '$tpl_id',style = '".stripslashes($style)."' WHERE id =".$row->id.";");
				}
			}
			$return .= "<q>".$this->SQLquery->getQuery()."</q>";
				
				
			return $this->reqeustTag($return, 1);
			
			
			
			$result = $this->SQLquery->query("UPDATE categories SET temaplate_id = ".$this->isNULLNumber($tpl_id).",style = ".$this->isNULL($style)." WHERE id=$category_id;");
			$return .= "<q>".$this->SQLquery->getQuery()."</q>";
			return $this->reqeustTag($return, 1);
		}
		
		public function imageUpdate($user_id, $item_id, $image) {
			$this->SQLquery->query("UPDATE items SET img_path = '".$image."' WHERE id =".$item_id.";");
			$return .= "<q>".$this->SQLquery->getQuery()."</q>";
			
			return $this->reqeustTag($return, 1);
		}
		
		public function previewEditorUpdate($user_id, $item_id, $style, $clear, $image) {
			if ($image != "") {
				// new image, update link;
				$this->SQLquery->query("UPDATE items SET img_path = '".$image."' WHERE id =".$item_id.";");
				$return .= "<q>".$this->SQLquery->getQuery()."</q>";
			}			
		
		
			$jsonStyle = json_decode(stripslashes($style), true);
			$tpl_id = $jsonStyle["templateID"];
			
			$getTemplate = $this->SQLquery->query("SELECT id FROM styleItem WHERE template_id='".$tpl_id."' AND item_id='".$item_id."';");
			$return .= "<q>".$this->SQLquery->getQuery()."</q>";
			$num_rows = $this->SQLquery->getNumRows($getTemplate);
			
			$jsonStyle = json_decode(stripslashes($style), true);
			
			$i = 0;
			$imax = count($jsonStyle["propStyles"]);
			if ($jsonStyle["imgRect"] == "") {
				$image = "NULL";
			} else {
				$image = $this->isNULL(stripslashes(json_encode($jsonStyle["imgRect"])));
			}
			
			if ($num_rows == 0 && $clear != 1) {
				// insert
				$this->SQLquery->query("INSERT INTO styleItem (id, label, description, price, img_rect, item_id, template_id) VALUES (NULL, ".$this->isNULL(json_encode($jsonStyle["label"])).", ".$this->isNULL(json_encode($jsonStyle["description"])).", ".$this->isNULL(json_encode($jsonStyle["price"])).", ".$image.", '$item_id', '$tpl_id');");
				$return .= "<q>".$this->SQLquery->getQuery()."</q>";
				$ID = $this->SQLquery->lastAddedID();
				$return .= "<id>".$ID."</id>";
				
				while ($i < $imax) {
					$propID = $jsonStyle["propStyles"][$i]["prop_id"];
					$propType = $jsonStyle["propStyles"][$i]["prop_type"];
					$this->SQLquery->query("INSERT INTO styleSpType (id, styleItem_id, spType_id, spType_type, style) VALUES (NULL, '$ID', '".$propID."', '".$propType."', '".json_encode($jsonStyle["propStyles"][$i])."');");
					$return .= "<q>".$this->SQLquery->getQuery()."</q>";
					$return .= "<styleSpType id='".$this->SQLquery->lastAddedID()."' prop_id='".$propID."' type_id='".$propType."' />";
					$i++;
				}

			} else {
				while ($row = $this->SQLquery->fetchObject($getTemplate)) {
					$ID = $row->id;
				}
				if ($clear == 1) {
					// delete
					$this->SQLquery->query("DELETE FROM styleSpType WHERE styleItem_id = $ID;");
					$return .= "<q>".$this->SQLquery->getQuery()."</q>";
					$this->SQLquery->query("DELETE FROM styleItem WHERE id = $ID;");
					$return .= "<q>".$this->SQLquery->getQuery()."</q>";
					
				} else {
					// update
					$this->SQLquery->query("UPDATE styleItem SET label = ".$this->isNULL(json_encode($jsonStyle["label"])).", description = ".$this->isNULL(json_encode($jsonStyle["description"])).", price = ".$this->isNULL(json_encode($jsonStyle["price"])).", img_rect = ".$image." WHERE id =$ID;");
					$return .= "<q>".$this->SQLquery->getQuery()."</q>";
					
					
					$idToBeDeleted = array();
					$idsToBeNotAdded = array();
					
					$getItemTypes = $this->SQLquery->query("SELECT * FROM styleSpType WHERE styleItem_id=".$ID.";");
					while ($row = $this->SQLquery->fetchObject($getItemTypes)) {
						$return .= "<update>".$row->spType_id."</update>";
						$foundIndex = $this->findProperyStyle($jsonStyle["propStyles"], $row->spType_id, $row->spType_type);
						if ($foundIndex == -1) {
							$idToBeDeleted[] = $row->id;
							$return .= "<nof>".$row->id."   ".$row->spType_id."   ".$row->spType_type."</nof>";
						} else {
							$this->SQLquery->query("UPDATE styleSpType SET style = '".json_encode($jsonStyle["propStyles"][$foundIndex])."' WHERE id =".$row->id.";");
							$return .= "<q>".$this->SQLquery->getQuery()."</q>";
							
							// remove the usd from array;
							
							$idsToBeNotAdded[] = $jsonStyle["propStyles"][$foundIndex]["id"];
							$return .= "<doNotAddID>".$jsonStyle["propStyles"][$foundIndex]["id"]."</doNotAddID>";
							
							$return .= "<cut>".count($jsonStyle["propStyles"])." to ";
							
							array_splice($jsonStyle["propStyles"], $foundIndex, 1);
							$return .= count($jsonStyle["propStyles"])."</cut>";
						}
					}
					
					// add properties that was added;
					$i = 0;
					$jmax = count($idsToBeNotAdded);
					$imax = count($jsonStyle["propStyles"]);
					$return .= "<idsToBeNotAdded count='".$jmax."'>".$idsToBeNotAdded."</idsToBeNotAdded>";
					$return .= "<propStyles count='".$imax."'>"."</propStyles>";
					
					
					while ($i < $imax) {
						$flag = true;
						/*
						$styleID = $jsonStyle["propStyles"][$i]["id"];
						$j = 0;
						while ($j < $jmax) {
							if ($idsToBeNotAdded[$j] == $styleID) {
								$flag = false;
								break;
							}
						}
						*/
						if ($flag) {
							$propID = $jsonStyle["propStyles"][$i]["prop_id"];
							$propType = $jsonStyle["propStyles"][$i]["prop_type"];
							$this->SQLquery->query("INSERT INTO styleSpType (id, styleItem_id, spType_id, spType_type, style) VALUES (NULL, '$ID', '".$propID."', '".$propType."', '".json_encode($jsonStyle["propStyles"][$i])."');");
							$return .= "<q>".$this->SQLquery->getQuery()."</q>";
							$return .= "<styleSpType id='".$this->SQLquery->lastAddedID()."' prop_id='".$propID."' type_id='".$propType."' />";
						}
						$return .= "<addLoop>".$i."</addLoop>";
						$i++;
					}
				}
			}
			
			return $this->reqeustTag($return, 1);
		}
		
		private function findProperyStyle($propStyles, $prop_id, $prop_type) {
			$i = 0;
			$imax = count($propStyles);
			while ($i < $imax) {
				if ($propStyles[$i]["prop_id"] == $prop_id && $propStyles[$i]["prop_type"] == $prop_type) {
					return $i;
				}
				$i++;
			}
			return -1;
		}
		
		
		/*//////////////////////////////////////////////////////////////////
		
		CATEGORY
		
		//////////////////////////////////////////////////////////////////*/
		
		public function categoryEdit($user_id, $id, $label) {
			$result = $this->SQLquery->query("UPDATE categories SET label = '$label' WHERE id =$id;");
			
			return $this->reqeustTag("", 1);
		}
		
		public function categoryAdd($user_id, $collection_id, $label) {
			$result = $this->SQLquery->query("INSERT INTO categories (id, label, collection_id) VALUES (NULL, '$label', '$collection_id');");
			$collectionID = $this->SQLquery->lastAddedID();
			
			return $this->reqeustTag("<id>".$collectionID."</id>", 1);
		}
		
		public function categoryDelete($user_id, $id) {
			$result = $this->SQLquery->query("SELECT id FROM items WHERE category_id = $id");
			
			$num_rows = $this->SQLquery->getNumRows($result);
			
			if ($num_rows != 0) {
				while ($row = $this->SQLquery->fetchObject($result)) {
					$itemID = $row->id;
					
					/////////////////////////////
					
					// delete styleSpType
					
					$result2 = $this->SQLquery->query("SELECT id FROM styleItem WHERE item_id = $itemID");
					
					$num_rows2 = $this->SQLquery->getNumRows($result2);
					
					if ($num_rows2 != 0) {
						while ($row2 = $this->SQLquery->fetchObject($result2)) {
							$styleItemID = $row2->id;
							$this->SQLquery->query("DELETE FROM styleSpType WHERE styleItem_id = $styleItemID;");
						}
					}
					
					// delete styleItem
					
					$this->SQLquery->query("DELETE FROM styleItem WHERE item_id = $itemID;");
					
					//////////////////////////
					
					$this->SQLquery->query("DELETE FROM spTypeBoolean WHERE item_id = $itemID;");
					$this->SQLquery->query("DELETE FROM spTypeImage WHERE item_id = $itemID;");
					$this->SQLquery->query("DELETE FROM spTypeImageBoolean WHERE item_id = $itemID;");
					$this->SQLquery->query("DELETE FROM spTypeNumber WHERE item_id = $itemID;");
					$this->SQLquery->query("DELETE FROM spTypeText WHERE item_id = $itemID;");
					
					// delete spTypeImageListItem
					$result2 = $this->SQLquery->query("SELECT prop_id FROM spTypeImageList WHERE item_id = $itemID;");
					
					// collect ids
					$num_rows2 = $this->SQLquery->getNumRows($result2);
					$deleteID = array();
					if ($num_rows2 != 0) {
						while ($row2 = $this->SQLquery->fetchObject($result2)) {
							$deleteID[] = $row2->prop_id;
						}
					}
					
					$this->SQLquery->query("DELETE FROM spTypeImageList WHERE item_id = $itemID;");
					
					$i = 0;
					$imax = count($deleteID);
					while ($i < $imax) {
						$this->SQLquery->query("DELETE FROM spTypeImageListItem WHERE prop_id = ".$deleteID[$i].";");
						$i++;
					}
					
					// delete spTypeListItem
					
					$result2 = $this->SQLquery->query("SELECT prop_id FROM spTypeList WHERE item_id = $itemID;");
					
					$num_rows2 = $this->SQLquery->getNumRows($result2);
					
					if ($num_rows2 != 0) {
						while ($row2 = $this->SQLquery->fetchObject($result2)) {
							$prop_id = $row2->prop_id;
							$this->SQLquery->query("DELETE FROM spTypeListItem WHERE styleItem_id = $prop_id;");
						}
					}
					
					$this->SQLquery->query("DELETE FROM spTypeList WHERE item_id = $itemID;");
					
					
					// styleSpType
				}
			}
			 
			$result = $this->SQLquery->query("DELETE FROM items WHERE category_id = $id;");
			
			$result = $this->SQLquery->query("DELETE FROM styleCategory WHERE category_id = $id;");
			
			// remove spTypeListItem
			// 
			$result = $this->SQLquery->query("DELETE FROM spTypeListItem WHERE prop_id IN (SELECT id FROM categoriesProperties WHERE category_id = $id);");
			
			$result = $this->SQLquery->query("DELETE FROM spTypeImageListItem WHERE prop_id IN (SELECT id FROM categoriesProperties WHERE category_id = $id);");
			
			$result = $this->SQLquery->query("DELETE FROM categoriesProperties WHERE category_id = $id;");
			
			$result = $this->SQLquery->query("DELETE FROM categories WHERE id = $id;");
			
			
			return $this->reqeustTag("<action>deleted</action>", 1);
		}
		
		
		/*//////////////////////////////////////////////////////////////////
		
		COLLECTION
		
		//////////////////////////////////////////////////////////////////*/
		
		public function collectionEdit($user_id, $id, $label) {
			$result = $this->SQLquery->query("UPDATE collections SET label = '$label' WHERE id =$id;");
			
			return $this->reqeustTag("", 1);
		}
		
		public function collectionAdd($user_id, $label) {
			$result = $this->SQLquery->query("INSERT INTO collections (id, label, user_id) VALUES (NULL, '$label', '$user_id');");
			$collectionID = $this->SQLquery->lastAddedID();
			
			return $this->reqeustTag("<id>".$collectionID."</id>", 1);
		}
		
		public function collectionDelete($user_id, $id) {
			$result = $this->SQLquery->query("SELECT id FROM categories WHERE collection_id = $id");
			$return = "<q>".$this->SQLquery->getQuery()."</q>";
			
			$num_rows = $this->SQLquery->getNumRows($result);
			
			if ($num_rows != 0) {
				while ($row = $this->SQLquery->fetchObject($result)) {
					$return .= $this->categoryDelete($user_id, $row->id);
				}
			}
			
			$this->SQLquery->query("DELETE FROM collections WHERE id = $id;");
			$return .= "<q>".$this->SQLquery->getQuery()."</q>";
			return $this->reqeustTag($return, 1);
		}
		
		/*//////////////////////////////////////////////////////////////////
		
		PROPERTY
		
		//////////////////////////////////////////////////////////////////*/
		
		public function propertyAdd($user_id, $category_id, $type, $label, $default, $value2) {
			/// add property in categories;
			$return = "";
			$result = $this->SQLquery->query("INSERT INTO categoriesProperties (id, category_id, label, defaultt, type) VALUES (NULL, '$category_id', '$label', '$default', '$type');");
			$return .= "<q>".$this->SQLquery->getQuery()."</q>";
			$prop_id = $this->SQLquery->lastAddedID();
			switch ($type) {
				
				//// LIST
				
				case "list":
					$jsonValues = json_decode(stripslashes($value2), true);
					$imax = count($jsonValues);
					$return .= "<list>";
					$defaultt = 0;
					$i = 0;
					while ($i < $imax) {
						$listItem = $this->SQLquery->query("INSERT INTO spTypeListItem (id, label, prop_id) VALUES (NULL, '".$jsonValues[$i]['label']."', '$prop_id');");
						$return .= "<q>".$this->SQLquery->getQuery()."</q>";
						$id = $this->SQLquery->lastAddedID();
						$return .= "<item id='".$id."' oldid='".$jsonValues[$i]['id']."' />";
						if ((int)$default == (int)$jsonValues[$i]['id']) {
							$default = $jsonValues[$i]['id'];
							/// update item with defalt value
							$result = $this->SQLquery->query("UPDATE categoriesProperties SET defaultt = '$id' WHERE id=$prop_id;");
							$return .= "<updated />";
							$return .= "<q>".$this->SQLquery->getQuery()."</q>";
						}
						$i++;
					}
					$return .= "</list>";
				break;
				
				/// IMAGE LIST
				
				case "imglist":
					$jsonValues = json_decode(stripslashes($value2), true);
					$imax = count($jsonValues);
					$return .= "<list>";
					$defaultt = 0;
					$i = 0;
					while ($i < $imax) { 	
						$listItem = $this->SQLquery->query("INSERT INTO spTypeImageListItem (id, label, prop_id, value) VALUES (NULL, '".$jsonValues[$i]['label']."', '$prop_id', '".$jsonValues[$i]['value']."');");
						$return .= "<q>".$this->SQLquery->getQuery()."</q>";
						$id = $this->SQLquery->lastAddedID();
						$return .= "<item id='".$id."' oldid='".$jsonValues[$i]['id']."' />";
						if ((int)$default == (int)$jsonValues[$i]['id']) {
							$default = $jsonValues[$i]['id'];
							/// update item with defalt value
							$result = $this->SQLquery->query("UPDATE categoriesProperties SET defaultt = '$id' WHERE id=$prop_id;");
							$return .= "<updated />";
							$return .= "<q>".$this->SQLquery->getQuery()."</q>";
						}
						$i++;
					}
					$return .= "</list>";
				break;
			}
			/*
			/// add this property as value for all items;
			$itemIDresult = $this->SQLquery->query("SELECT id FROM items WHERE category_id=$category_id");
			$num_rows = $this->SQLquery->getNumRows($itemIDresult);
			if ($num_rows != 0) {
				$return .= '<items>';
				while ($row = $this->SQLquery->fetchObject($itemIDresult)) {
					$addResult = $this->valueAdd($type, $prop_id, $row->id ,$default, $value2);
					$return .=  "<v id= '".$addResult[0]."' item_id='".$row->id."' />";
					$return .=  "<q>".$addResult[1]."</q>";
				}
				$return .= '</items>';
			}
			*/
			return $this->reqeustTag("<id>".$prop_id."</id>".$return, 1);
		}
		
		public function propertyEdit($user_id, $id, $type, $label, $default, $value2) {
			$return .= "<user_id>".$user_id."</user_id>";
			$return .= "<id>".$id."</id>";
			$return .= "<type>".$type."</type>";
			$return .= "<label>".$label."</label>";
			$return .= "<default>".$default."</default>";
			$return .= "<value2>".$value2."</value2>";
			//remove from categories sheme;
			$result = $this->SQLquery->query("UPDATE categoriesProperties SET label = '".$label."', defaultt = '".$default."' WHERE id =".$id.";");
			$return .= "<q>UPDATE categoriesProperties SET label = '".$label."', defaultt = '".$default."' WHERE id =".$id.";</q>";
			if ($type == "list") {
				// get all IDs that are old:
				$oldIds = array();
				$result = $this->SQLquery->query("SELECT id FROM spTypeListItem WHERE prop_id=$id;");
				$return .= "<oldids>";
				while ($row = $this->SQLquery->fetchObject($result)) {
					$oldIds[] = $row->id;
					$return .= $row->id.", ";
				}
				$return .= "</oldids>";
			
				// now lets see what happen:
				$jsonValues = json_decode(stripslashes($value2), true);
				$imax = count($jsonValues);
				$return .= "<list>";
				$defaultt = 0;
				$i = 0;
				while ($i < $imax) {
					$list_item_id = $jsonValues[$i]['id'];
					if ($list_item_id > 0) {
						// update
						$listItem = $this->SQLquery->query("UPDATE spTypeListItem SET label = '".$jsonValues[$i]['label']."' WHERE id=$list_item_id;");
						$return .= "<updated oldid='".$list_item_id."' />";
					} else {
						// insert
						$listItem = $this->SQLquery->query("INSERT INTO spTypeListItem (id, label, prop_id) VALUES (NULL, '".$jsonValues[$i]['label']."', '$id');");
						$real_id = $this->SQLquery->lastAddedID();
						$return .= "<item id='".$real_id."' oldid='".$list_item_id."' />";
						
						// if new insert is a new default
						if ((int)$default == (int)$list_item_id) {
							$default = $jsonValues[$i]['id'];
							/// update item with defalt value
							$result = $this->SQLquery->query("UPDATE categoriesProperties SET default = '$real_id' WHERE id=$id;");
							$return .= "<updated />";
						}
					}
					
					/////////// remove id from old array;
					$jmax = count($oldIds);
					$j = 0;
					while ($j < $jmax) {
						if ((int)$oldIds[$j] == $list_item_id) {
							unset($oldIds[$j]);
							$return .= "<remove id='".$list_item_id."' />";
							break;
						}
						$j++;
					}
					
					$i++;
				}
				
				// now all properties are update or added, lets see if we need to delete any
				$oldIds = array_values($oldIds);
				$i = 0;
				$imax  = count($oldIds);
				while ($i < $imax) {
					$result = $this->SQLquery->query("DELETE FROM spTypeListItem WHERE id = ".$oldIds[$i].";");
					$return .= "<q>DELETE FROM spTypeListItem WHERE id = ".$oldIds[$i].";</q>";
					$i++;
				}
				/// delete: $list_item_id
				
				$return .= "</list>";
			} else if ($type == "imglist") {
				// get all IDs that are old:
				$oldIds = array();
				$result = $this->SQLquery->query("SELECT id FROM spTypeImageListItem WHERE prop_id=$id;");
				$return .= "<oldids>";
				while ($row = $this->SQLquery->fetchObject($result)) {
					$oldIds[] = $row->id;
					$return .= $row->id.", ";
				}
				$return .= "</oldids>";
			
				// now lets see what happen:
				$jsonValues = json_decode(stripslashes($value2), true);
				$imax = count($jsonValues);
				$return .= "<list>";
				$defaultt = 0;
				$i = 0;
				while ($i < $imax) {
					$list_item_id = $jsonValues[$i]['id'];
					if ($list_item_id > 0) {
						// update
						$listItem = $this->SQLquery->query("UPDATE spTypeImageListItem SET label = '".$jsonValues[$i]['label']."', value = '".$jsonValues[$i]['value']."' WHERE id=$list_item_id;");
						$return .= "<updated oldid='".$list_item_id."' />";
					} else {
						// insert
						$listItem = $this->SQLquery->query("INSERT INTO spTypeImageListItem (id, label, prop_id, value) VALUES (NULL, '".$jsonValues[$i]['label']."', '$id', '".$jsonValues[$i]['value']."');");
						$return .= "<q>". $this->SQLquery->getQuery()."</q>";
						$real_id = $this->SQLquery->lastAddedID();
						$return .= "<item id='".$real_id."' oldid='".$list_item_id."' />";
						
						// if new insert is a new default
						if ((int)$default == (int)$list_item_id) {
							$default = $jsonValues[$i]['id'];
							/// update item with defalt value
							$result = $this->SQLquery->query("UPDATE categoriesProperties SET default = '$real_id' WHERE id=$id;");
							$return .= "<updated />";
						}
					}
					
					/////////// remove id from old array;
					$jmax = count($oldIds);
					$j = 0;
					while ($j < $jmax) {
						if ((int)$oldIds[$j] == $list_item_id) {
							unset($oldIds[$j]);
							$return .= "<remove id='".$list_item_id."' />";
							break;
						}
						$j++;
					}
					
					$i++;
				}
				
				// now all properties are update or added, lets see if we need to delete any
				$i = 0;
				$imax  = count($oldIds);
				$oldIds = array_values($oldIds);
				$return .= "<imax>".$imax."</imax>";
				while ($i < $imax) {
					$result = $this->SQLquery->query("DELETE FROM spTypeImageListItem WHERE id = ".$oldIds[$i].";");
					$return .= "<q>". $this->SQLquery->getQuery()."</q>";
					$return .= "<oldIds>". $oldIds[$i]."</oldIds>";
					$i++;
				}
				/// delete: $list_item_id
				
				$return .= "</list>";
			}
			
			return $this->reqeustTag($return, 1);
		}
		
		
		public function propertyDelete($user_id, $id, $type) {
			//remove from categories sheme;
			if ($type == "list") {
				$result = $this->SQLquery->query("DELETE FROM spTypeListItem WHERE prop_id = $id;");
			} else if ($type == "imglist") {
				$result = $this->SQLquery->query("DELETE FROM spTypeImageListItem WHERE prop_id = $id;");
			}
			
			$table = $this->getTableFromType($type);
			// remove from item properties;
			$result = $this->SQLquery->query("DELETE FROM $table WHERE prop_id = $id");
			
			$result = $this->SQLquery->query("DELETE FROM categoriesProperties WHERE id = $id;");
			
			
			return $this->reqeustTag("", 1);
		}
		
		
		
		/*//////////////////////////////////////////////////////////////////
		
		ITEM
		
		//////////////////////////////////////////////////////////////////*/
		
		public function itemDelete($user_id, $id) {
			//remove from sp types
			$this->valueDelete("bool", $id);
			$this->valueDelete("img", $id);
			$this->valueDelete("imgbool", $id);
			$this->valueDelete("imglist", $id);
			$this->valueDelete("list", $id);
			$this->valueDelete("number", $id);
			$this->valueDelete("text", $id);
			
			//delete Style
			$result = $this->SQLquery->query("SELECT id FROM styleItem WHERE item_id = $id;");
			while ($row = $this->SQLquery->fetchObject($result)) {
				$this->SQLquery->query("DELETE FROM styleSpType WHERE styleItem_id = ".$row->id);
				$this->SQLquery->query("DELETE FROM styleItem WHERE id = ".$row->id);
			}
			
			$result = $this->SQLquery->query("DELETE FROM items WHERE id = $id;");
			
			return $this->reqeustTag("", 1);
		}
		
		public function itemAdd($user_id, $label, $description, $image, $price, $tags, $values, $catid, $tplID) {
			$tplID =  $this->isNULLNumber($tplID);
			//update from item;
			$result = $this->SQLquery->query("INSERT INTO items (id, label, category_id, description, img_path, price, tags, template_id) VALUES (NULL, '$label', '$catid', '$description', '$image', '$price', '$tags', $tplID);");
			$itemID = $this->SQLquery->lastAddedID();
			$jsonValues = json_decode(stripslashes($values), true);
			$out = "<id>".$itemID."</id>";
			
			$i = 0;
			$imax = count($jsonValues);
			while ($i < $imax) {
				$addResult = $this->valueAdd($jsonValues[$i]['type'], $jsonValues[$i]['propID'], $itemID, $jsonValues[$i]['value'], $jsonValues[$i]['value2']);
				$out .= "<v id= '".$addResult[0]."' propID='".$jsonValues[$i]['propID']."' />";
				$out .=  "<q>".$addResult[1]."</q>";
				$i++;
			}
			
			return $this->reqeustTag($out, 1);
		}
		
		
		
		public function itemUpdate($user_id, $id, $label, $description, $image, $price, $tags, $values, $catid, $tplID) {
			$tplID =  $this->isNULLNumber($tplID);
			//update from item;
			$return = "";
			$result = $this->SQLquery->query("UPDATE items SET label = '$label', category_id = '$catid', description = '$description', img_path = '$image', price = '$price', tags = '$tags', template_id = $tplID WHERE id =$id;");
			$jsonValues = json_decode(stripslashes($values), true);
			
			$i = 0;
			$imax = count($jsonValues);
			while ($i < $imax) {
				if ($jsonValues[$i]['id'] < 0) {
					/// just in case there is already is ID, so no doble occure;
					
					$table = $this->getTableFromType($jsonValues[$i]['type']);
					//$return .= "<q>table ".$table."</q>";
					
					if ($table == "spTypeImageList") {
						// item in drop down image;
						$result2 = $this->SQLquery->query("SELECT id FROM spTypeImageList WHERE prop_id='".$jsonValues[$i]['propID']."' AND item_id = '".$id."';");
						//$return .= "<q>".$this->SQLquery->getQuery()."</q>";
						
						$num_rows = $this->SQLquery->getNumRows($result2);
						//$return .= "<q>num result ".$num_rows."</q>";
						if ($num_rows == 0) {
							// really we do not have it;
							
							$addResult = $this->valueAdd($jsonValues[$i]['type'], $jsonValues[$i]['propID'], $id, $jsonValues[$i]['value'], $jsonValues[$i]['value2']);
							$return .= "<id>".$addResult[0]."</id>";
						//	$return .=  "<q>".$addResult[1]."</q>";
						} else {
							// ok update it, even if is 0 and return value;
							while ($row = $this->SQLquery->fetchObject($result2)) {
								$this->valueUpdate($jsonValues[$i]['type'], $row->id, $jsonValues[$i]['value'], $jsonValues[$i]['value2']);
							}
							$return = "<id>".$row->id."</id>";
						}
					} else {
						// something else
						$cherkResult = $this->SQLquery->query("SELECT id from $table WHERE prop_id='".$jsonValues[$i]['propID']."' AND item_id = '".$id."';");
						$ch_rows = $this->SQLquery->getNumRows($cherkResult);
						
						if ($ch_rows == 0) {
							$addResult = $this->valueAdd($jsonValues[$i]['type'], $jsonValues[$i]['propID'], $id, $jsonValues[$i]['value'], $jsonValues[$i]['value2']);
							$return .= "<id_".$jsonValues[$i]['type']."_".$jsonValues[$i]['propID'].">".$addResult[0]."</id_".$jsonValues[$i]['type']."_".$jsonValues[$i]['propID'].">";
						//	$return .=  "<q>".$addResult[1]."</q>";
						} else {
							while ($row3 = $this->SQLquery->fetchObject($cherkResult)) {
								$this->valueUpdate($jsonValues[$i]['type'], $row3->id, $jsonValues[$i]['value'], $jsonValues[$i]['value2']);
							}
						}
					}
				} else {
					// check to be sure if first there is no prop like this before;
					
					
					
					
					$this->valueUpdate($jsonValues[$i]['type'], $jsonValues[$i]['id'], $jsonValues[$i]['value'], $jsonValues[$i]['value2']);
				}
				
				//$return .= "<q>".$this->SQLquery->getQuery()."</q>";
				$i++;
			}
			
			return $this->reqeustTag($return, 1);
		}
		
		/*//////////////////////////////////////////////////////////////////
		
		ITEM VALUES
		
		//////////////////////////////////////////////////////////////////*/
		
		private function valueUpdate($type, $id, $value, $value2) {
			$table = $this->getTableFromType($type);
			
			switch ($type) {
				case "imgbool":
					$this->SQLquery->query("UPDATE $table SET value = '$value', bool='$value2' WHERE id =$id;");
				break;
				default:
					$this->SQLquery->query("UPDATE $table SET value = '$value' WHERE id =$id;");
				break;
			}
			
		}
		
		private function valueAdd($type, $prop_id, $itemID, $value, $value2) {
			$table = $this->getTableFromType($type);
			switch ($type) {
				case "imgbool":
					$this->SQLquery->query("INSERT INTO ".$table." (id, prop_id, item_id, value, bool) VALUES (NULL, '$prop_id', '$itemID', '$value', '$value2');");
				break;
				default:
					$this->SQLquery->query("INSERT INTO $table (id, prop_id, item_id, value) VALUES (NULL, '$prop_id', '$itemID', '$value');");
				break;
			}
			return array($this->SQLquery->lastAddedID(), $this->SQLquery->getQuery());
		}
		
		private function valueDelete($type, $itemID) {
			$table = $this->getTableFromType($type);
			$this->SQLquery->query("DELETE FROM $table WHERE item_id = $itemID;");
		}
		
		private function getTableFromType($type) {
			switch ($type) {
				case "bool":
					$table = "spTypeBoolean";
				break;
				case "img":
					$table = "spTypeImage";
				break;
				case "imgbool":
					$table = "spTypeImageBoolean";
				break;
				case "list":
					$table = "spTypeList";
				break;
				case "number":
					$table = "spTypeNumber";
				break;
				case "text":
					$table = "spTypeText";
				break;
				case "imglist":
					$table = " spTypeImageList";
				break;
			}
			return $table;
		}
		
		
		
		/*//////////////////////////////////////////////////////////////////
		
		TEMPLATE
		
		//////////////////////////////////////////////////////////////////*/
		
		public function templateDelete($user_id, $id) {
			$result = $this->SQLquery->query("DELETE FROM  styleCategory WHERE template_id = $id;");
			
			//delete Style
			$result = $this->SQLquery->query("SELECT id FROM styleItem WHERE template_id = $id;");
			while ($row = $this->SQLquery->fetchObject($result)) {
				$this->SQLquery->query("DELETE FROM styleSpType WHERE styleItem_id = ".$row->id);
				$this->SQLquery->query("DELETE FROM styleItem WHERE id = ".$row->id);
			}
			
			$result = $this->SQLquery->query("DELETE FROM templates WHERE id = $id;");
			$return .= "<q>".$this->SQLquery->getQuery()."</q>";
			
			return $this->reqeustTag($return, 1);
		}
		
		public function templateAdd($user_id, $label, $description, $width, $height, $stroke, $strokeColor, $bkgColor, $image, $style, $imgRect) {
			$imgRect = $this->isNULL($imgRect);
			$style = $this->isNULL($style);
			$image = $this->isNULL($image);
			$result = $this->SQLquery->query("INSERT INTO templates (id, label, description, user_id, width, height, stroke, strokeColor, bkgColor, image, imageStyle, img_rect) VALUES (NULL, '$label', '$description', '$user_id', '$width', '$height', '$stroke', '$strokeColor', '$bkgColor', $image, $style, $imgRect);");
			$templateID = $this->SQLquery->lastAddedID();
			$return .= "<q>".$this->SQLquery->getQuery()."</q>";
			
			return $this->reqeustTag("<id>".$templateID."</id>".$return, 1);
		}
		
		public function templateUpdate($user_id, $label, $description, $width, $height, $id, $stroke, $strokeColor, $bkgColor, $image, $style, $imgRect) {
			$imgRect = $this->isNULL($imgRect);
			$style = $this->isNULL($style);
			$image = $this->isNULL($image);
			$result = $this->SQLquery->query("UPDATE templates SET label = '$label',description = '$description',user_id = '$user_id',width = '$width',height = '$height',stroke = '$stroke',strokeColor = '$strokeColor',bkgColor = '$bkgColor',image = $image, imageStyle = $style, img_rect = $imgRect WHERE templates.id =$id;");
			$return .= "<q>".$this->SQLquery->getQuery()."</q>";
			
			return $this->reqeustTag("".$return, 1);
		}
		
		/*//////////////////////////////////////////////////////////////////
		
		Print Queue
		
		//////////////////////////////////////////////////////////////////*/
		public function printQueueAdd($user_id, $item_id, $TemplateID, $NoOfCopy) {
		    $result = $this->SQLquery->query("INSERT INTO tblPrintQueue (SrNo, UserID, ItemID, TemplateID, NoOfCopy) VALUES (NULL, '$user_id', '$item_id', '$TemplateID', '$NoOfCopy');");
		    $PQID = $this->SQLquery->lastAddedID();
		    $return .= "<q>".$this->SQLquery->getQuery()."</q>";
		    
		    return $this->reqeustTag("<id>".$PQID."</id>".$return, 1);
		}
		
		public function printQueueDelete($user_id, $id, $clearAll) {
		    if($clearAll == 1){
		        $result = $this->SQLquery->query("DELETE FROM tblPrintQueue WHERE UserID = $user_id;");
		    }
		    else{
		          $result = $this->SQLquery->query("DELETE FROM tblPrintQueue WHERE ItemID = $id;");	    
		    }
		    $return .= "<q>".$this->SQLquery->getQuery()."</q>";
		    
		    return $this->reqeustTag($return, 1);
		}
		///
		private function isNULL($value) {
			if ($value == "" || $value == "null") {
				return "NULL";
			}
			return "'".$value."'";
		}
		
		private function isNULLNumber($value) {
			if ($value == "-1" || $value == "" || $value == "0") {
				return "NULL";
			}
			return "'".$value."'";
		}
		
		private function reqeustTag($text, $flag) {
			return "<request flag='".$flag."'>".$text."</request>";
		}
	}
?>
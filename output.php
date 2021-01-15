<?php

	ini_set('memory_limit', '256M');
	ini_set('max_execution_time', 600);
	ini_set('max_input_time', 600);
	error_reporting(E_ALL);
	
	ini_set('display_errors', TRUE);
	ini_set('display_startup_errors', TRUE);
	date_default_timezone_set('Europe/London');
	
	//define('ABSPATH', dirname(__FILE__) . '/../../');
	//require_once(ABSPATH . 'wp-config.php');
	require_once('DbConnector.php');
		
	if (isset($_POST['action'])) {
		$var_list = $_POST;
	} else if (isset($_GET['action'])) {
		$var_list = $_GET;
	}
	
	if ($var_list['action'] == "get") {		
		getdata($var_list);
	} elseif ($var_list['action'] == "set") {
		setdata($var_list);
	}
	
	function getdata($var_list) {
		$starttime = explode(' ', microtime());
		$starttime = $starttime[1] + $starttime[0];
		
		header ("Content-Type:text/xml");		
		require_once('class.xml.php');
		
		$return = "<?xml version='1.0' encoding='UTF-8'?>";
		$return .= '<data>';
		
		///////////////////////////////GET////////////////////////////////
		
		$xmlObj = new XML();
		switch ($var_list['method']) {
			case "debug":
				$return .= $xmlObj->getDebug($var_list['user_id']);
			break;
			case "data":
				$return .= $xmlObj->getData($var_list['user_id']);
			break;
			case "login":
				$return .= $xmlObj->login($var_list['email'], $var_list['pass']);
			break;
			case "login":
				$return .= $xmlObj->login($var_list['email'], $var_list['pass']);
			break;
			case "logout":
				$return .= $xmlObj->logout();
			break;
			case "fonts":
				$return .= $xmlObj->fonts();
			break;
			case "export":
				$return .= $xmlObj->export($var_list['user_id'], $var_list['exports'], $var_list['category_id']);
			break;
			case "loadDataFromXLS":
				$return .= $xmlObj->loadDataXLS($var_list['user_id'], $var_list['file']);
			break;
			//Ashok: 27-01-2020
			case "ItemStyle":
				$return .= $xmlObj->getItemStyleData($var_list['item_id']);
			break;
		}		
		
		$mtime = explode(' ', microtime());
		$totaltime = $mtime[0] + $mtime[1] - $starttime;
		$return .= '<loaded>XML generated in '.$totaltime.' seconds.</loaded>';
		$return .= '</data>';
		echo $return;
		
	}
	
	function setdata($var_list) {
		$starttime = explode(' ', microtime());
		$starttime = $starttime[1] + $starttime[0];
		
		header ("Content-Type:text/xml");
		require_once('class.request.php');
		
		$return = "<?xml version='1.0' encoding='UTF-8'?>";
		$return .= '<data>';
		
		///////////////////////////////SET////////////////////////////////
		
		$requestObj = new Request();
		switch ($var_list['method']) {
		
		
			/// REGISTER
			
			case "register":
				$return .= $requestObj->register($var_list['name'], $var_list['email'], $var_list['password']);
			break;
			
		
		
			/// CATEGORIES
			
			case "categoryAdd":
				$return .= $requestObj->categoryAdd($var_list['user_id'], $var_list['collection_id'], $var_list['label']);
			break;
			
			case "categoryDelete":
				$return .= $requestObj->categoryDelete($var_list['user_id'], $var_list['id']);
			break;
			
			case "categoryEdit":
				$return .= $requestObj->categoryEdit($var_list['user_id'], $var_list['id'], $var_list['label']);
			break;
			
			/// COLLECTION
			
			case "collectionAdd":
				$return .= $requestObj->collectionAdd($var_list['user_id'], $var_list['label']);
			break;
			
			case "collectionDelete":
				$return .= $requestObj->collectionDelete($var_list['user_id'], $var_list['id']);
			break;
			
			case "collectionEdit":
				$return .= $requestObj->collectionEdit($var_list['user_id'], $var_list['id'], $var_list['label']);
			break;
			
			/// PROPERTY
			
			case "propertyEdit":
				$return .= $requestObj->propertyEdit($var_list['user_id'], $var_list['id'], $var_list['type'], $var_list['label'], $var_list['default'], $var_list['value2']);
			break;
			case "propertyAdd":
				$return .= $requestObj->propertyAdd($var_list['user_id'], $var_list['categoryID'], $var_list['type'], $var_list['label'], $var_list['default'], $var_list['value2']);
			break;
			
			case "propertyDelete":
				$return .= $requestObj->propertyDelete($var_list['user_id'], $var_list['id'], $var_list['type']);
			break;
			
			/// ITEM
			
			case "itemAdd":
				$return .= $requestObj->itemAdd($var_list['user_id'], $var_list['label'], $var_list['description'], $var_list['image'], $var_list['price'], $var_list['tags'], $var_list['values'], $var_list['catid'], $var_list['templateID']);
			break;
		
			case "itemDelete":
				$return .= $requestObj->itemDelete($var_list['user_id'], $var_list['id']);
			break;
			
			case "itemUpdate":
				$return .= $requestObj->itemUpdate($var_list['user_id'], $var_list['id'], $var_list['label'], $var_list['description'], $var_list['image'], $var_list['price'], $var_list['tags'], $var_list['values'], $var_list['catid'], $var_list['templateID']);
			break;

			
			/// TEMPLATE
		
			case "templateDelete":
				$return .= $requestObj->templateDelete($var_list['user_id'], $var_list['id']);
			break;
			
			case "templateAdd":
				$return .= $requestObj->templateAdd($var_list['user_id'], $var_list['label'], $var_list['description'], $var_list['width'], $var_list['height'], $var_list['stroke'], $var_list['strokeColor'], $var_list['bkgColor'], $var_list['image'], $var_list['style'], $var_list['imgRect']);
			break;
			
			case "templateUpdate":
				$return .= $requestObj->templateUpdate($var_list['user_id'], $var_list['label'], $var_list['description'], $var_list['width'], $var_list['height'], $var_list['id'], $var_list['stroke'], $var_list['strokeColor'], $var_list['bkgColor'], $var_list['image'], $var_list['style'], $var_list['imgRect']);
			
				
			break;
			
			//////////
			
			case "updateImageCrop":
				$return .= $requestObj->updateImageCrop($var_list['user_id'], $var_list['item_id'], $var_list['template_id'], $var_list['rect']);
			break;
			
			case "imageUpdate":
				$return .= $requestObj->imageUpdate($var_list['user_id'], $var_list['item_id'], $var_list['image']);
			break;
			
			case "previewEditorUpdate":
				$return .= $requestObj->previewEditorUpdate($var_list['user_id'], $var_list['item_id'], $var_list['style'], $var_list['clear'], $var_list['image']);
			break;
			
			case "updateDefaultStyle":
				$return .= $requestObj->updateDefaultStyle($var_list['category_id'], $var_list['tpl_id'], $var_list['style']);
			break;
			
			/// Print Queue
			case "printQueueAdd":
			    $return .= $requestObj->printQueueAdd($var_list['user_id'], $var_list['item_id'], $var_list['TemplateID'], $var_list['NoOfCopy']);
			    break;
			case "printQueueDelete":
			    $return .= $requestObj->printQueueDelete($var_list['user_id'], $var_list['id'], $var_list['clearAll']);
			
		}
		
		$mtime = explode(' ', microtime());
		$totaltime = $mtime[0] + $mtime[1] - $starttime;
		$return .= '<loaded>XML generated in '.$totaltime.' seconds.</loaded>';
		$return .= '</data>';
		echo $return;
	}
?>

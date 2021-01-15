<?php
session_start();
require_once('connection.php');

if(isset($_REQUEST['action'])){
    $action = $_REQUEST['action'];
}else if(isset($_GET['action'])){
    $action = $_GET['action'];
}else if(isset($_POST['action'])){
    $action = $_POST['action'];
}else{
    $action = "NONE";
}

switch($action){	
/// CATEGORIES
	case 'getCatagoryData':
		getCatagoryData();
	break;
	case 'add_catag_data':
		add_catag_data();
	break;
	case 'feedCatagEdit_pepr':
		feedCatagEdit_pepr();
	break;
	case 'edit_catag_data':
		edit_catag_data();
	break;
	case 'deleCatagData':
		deleCatagData();
	break;
	/// COLLECTION
	case 'getCollectionData':
		getCollectionData();
	break;
	case 'feedCollectionEdit_pepr':
		feedCollectionEdit_pepr();
	break;
	case 'multiCollecdelete':
		multiCollecdelete();
	break;
	case 'getAllColpt':
		getAllColpt();
	break;
// case 'getAllCats':
// getAllCats();
// break;
	
/// PROPERTY


/// ITEM
//Ashok: Add and Edit items 
case 'add_item_dash':
  		add_item_dash();
  break;
  //Not in use
  case 'edit_item_dash':
  		edit_item_dash();
  break;
  case 'deleteItem':
  		deleteItem();
  break;
  case 'getItmData':
	getItmData();
break;
case 'feedItemEdit':
	feedItemEdit();
break;
case 'duplicateItemData':
	duplicateItemData();
break;
/// TEMPLATE
  case 'tmpaddFrom':
  		tmpaddFrom();
  break;
  case 'tmpaddFrom_pepr':
  		tmpaddFrom_pepr();
  break;
  case 'deleteTemplate':
  		deleteTemplate();
  break;
 case 'tmpeditFrom':
  		tmpeditFrom();
  break;
  case 'tmpeditFrom_pepr':
  		tmpeditFrom_pepr();
  break;
  case 'getTpmletData':
	getTpmletData();
break;
case 'feedTemplsEdit':
	feedTemplsEdit();
break;
case 'feedTemplsEdit_pepr':
	feedTemplsEdit_pepr();
break;
case 'deleteTempData':
	deleteTempData();
break;
case 'deleteTempData_pepr':
	deleteTempData_pepr();
break;
case 'getTeplateSelectbox':
	getTeplateSelectbox();
break;

/// Print Queue  
  case 'defaulttblprintqueue':
  		defaulttblprintqueue();
  break;
  case 'doubleClickadd':
  //Ashok: Added parameters
  		doubleClickadd($_REQUEST['val']);
  break;
  case 'multiItemprint':
  		multiItemprint();
  break;
  case 'add_col_lbl':
  		add_col_lbl();
  break;
  case 'coll_input_edit':
  		coll_input_edit();
  break;
  case 'deletecollectionItem':
  		deletecollectionItem();
  break;
  
  case 'deletePrintList':
  		deletePrintList();
  break;
  case 'multiPrintdelete':
  		multiPrintdelete();
  break;
 
  case 'getTblprintData':
  		getTblprintData();
  break;
    
  case 'getSizeSelectbox':
  		getSizeSelectbox();
  break;
  case 'getTemPreview':
  		getTemPreview();
  break;
  case 'multiDbitmdelete':
  		multiDbitmdelete();
  break;
  case 'getTpmletDataDb':
  		getTpmletDataDb();
  break;
  case 'getTpmletDataDbPaper':
  		getTpmletDataDbPaper();
  break;
 
  case 'getadditmCats':
  		getadditmCats();
  break;
  case 'getCatDataSetProp':
  		getCatDataSetProp();
  break;
  case 'add_catag_proptyp':
  		add_catag_proptyp();
  break;
  case 'getCatDataPropOpts':
  		getCatDataPropOpts();
  break;
  case 'delCatDataPropOpts':
  		delCatDataPropOpts();
  break;
  case 'getCatDataEditProp':
  		getCatDataEditProp();
  break;
  case 'updtOptedititmse':
  		updtOptedititmse();
  break;
  case 'setListItems':
  		setListItems();
  break;
  case 'remoCatopts':
  		remoCatopts();
  break;
  case 'getCatDataEditlstitm':
  		getCatDataEditlstitm();
  break;
  case 'saveIcoDropdn':
  		saveIcoDropdn();
  break;
  case 'deldrpoptimg':
  		deldrpoptimg();
  break;
  case 'deldrpopts':
  		deldrpopts();
  break;
  case 'saveIcochkbx':
  		saveIcochkbx();
  break;
  case 'fetchAddItmProperties':
  		fetchAddItmProperties();
  break;
  case 'getAddItmProperties':
  		getAddItmProperties();
  break;
  case 'getLoadItemData':
  		getLoadItemData();
  break;
  case 'checknewitemstate':
  		checknewitemstate();
  break;
  case 'edittblprintqueue':
  		edittblprintqueue();
  break;
  case 'editstyleitem':
  		editstyleitem();
  break;
//Ashok: 04-12-2019
	case 'imageUpdate':
		imageUpdate();
	break;
	case 'imageCropUpdate':
		imageCropUpdate();
	break;
//Ashok: 10/12/2019 Fonts
	case 'getfonts':
		getfonts();
	break;
	case 'getfont':
		//Ashok: Added parameters
		getfont($_REQUEST['fontId']);
	break;
}
//Ashok: 04-12-2019
function imageUpdate() {
	//try{
		$cons= new Mysql();
		$getRes= $cons-> dbConnect();
		//$user_id =$_SESSION['main']['id'];
		$item_id=$_REQUEST['item_id'];
		$printid=$_REQUEST['prev_id'];
		$image=$_REQUEST['img_path'];
		$imgrect=$_REQUEST['img_rect'];

		$data=array(
			'img_path'=>$image,
			'img_rect'=>$imgrect
		);		
		$result=$cons->updtData('tblprintqueue', $data, 'id', '=', $printid);
		$data=array(
			'img_path'=>$image,			
		);
		$result=$cons->updtData('items', $data, 'id', '=', $item_id);
		echo 1;
	//}
	//catch(err){}
}
//Ashok: 04-12-2019
function imageCropUpdate() {
	//try{
		$cons= new Mysql();
		$getRes= $cons-> dbConnect();
		$printid=$_REQUEST['prev_id'];
		$imgcrop=$_REQUEST['img_crop'];
		$imgrect=$_REQUEST['img_rect'];

		$data=array(
			'img_crop'=>$imgcrop,
			'img_rect'=>$imgrect
		);
		$result=$cons->updtData('tblprintqueue', $data, 'id', '=', $printid);

		echo 11;
	//}
	//catch(err){}
}

function check_type($data){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$sql='SELECT type FROM categoriesproperties WHERE id='.$data;
	$result = mysqli_query($getRes,$sql);
	$value = mysqli_fetch_object($result);
	return $value;
}

function check_edit_avail($tble,$proid,$itmid){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();
	$sql="SELECT * FROM ".$tble." WHERE prop_id=".$proid." AND item_id=".$itmid;
	$result = mysqli_query($getRes,$sql);
	if(mysqli_num_rows($result)>0){
		return false;
	}else{
		return true;
	}
}
//Ashok: Add and Edit items 
function add_item_dash(){

	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$postdata=$_REQUEST['add_itm'];
	$dataNewitm=array();
	$state="";
	$edititmno=0;

	foreach($postdata['default'] as $key=>$value){

		if($key=='lbl'){$dataNewitm['label'] = $value;}
		if($key=='catagdrp'){$dataNewitm['category_id'] = $value;}
		if($key=='desc'){$dataNewitm['description'] = $value;}
		if($key=='pric'){$dataNewitm['price'] = $value;}
		if($key=='tags'){$dataNewitm['tags'] = $value;}
		if($key=='deftemp'){$dataNewitm['template_id'] = $value;}

		if($state=="" && $key=='itm_hid' && $value=='newitem'){
			$state="newitm";
		}else if($state=="" && $key=='itm_hid' && $value=='edititm'){
			$state="edititm";
		}

		if($key=='itm_editid'){
			$edititmno=$value;
		}

	}

	if($state=='newitm'){

		$results=$cons->insertData('items', $dataNewitm);

		if ($_FILES['add_itm_defimg']['size'] != 0){

			$type=$_FILES['add_itm_defimg']["type"];
		    $size=$_FILES['add_itm_defimg']["size"];
		    $tmpname=$_FILES['add_itm_defimg']['tmp_name'];
		    $name=$_FILES['add_itm_defimg']['name'];

			$ext = substr($name,strrpos($name,"."));
		    $new_name = 'item_'.rand(0,microtime(true)).md5(time()).$ext;
		    $folder_path = "../upload_images/items";
			$fpath = $folder_path."/".$new_name;

			$data=array(
				'img_path'=>$new_name
			);

			$resultup=$cons->updtData('items', $data, 'id', '=', $results);
			if($resultup){
				move_uploaded_file($tmpname,$fpath);
		    	echo 1;
			}

		}

		$dataNewsubitm=array();

		if($results){

			if(isset($postdata['past'])){

				foreach($postdata['past'] as $key=>$value){
					$type=check_type($key);

					if($type->type=='text' || $type->type=='number'){
						$dataNewsubitm['prop_id'] = $key;
						$dataNewsubitm['item_id'] = $results;
						$dataNewsubitm['value'] = $value;
					}

					if($type->type=='text'){
					 	$result=$cons->insertData('sptypetext', $dataNewsubitm);
					 	$dataNewsubitm=array();
					}else if($type->type=='number'){
					 	$result=$cons->insertData('sptypenumber', $dataNewsubitm);
					 	$dataNewsubitm=array();
					}
				}

			}

			if(isset($_FILES['add_itm_pastimg'])){

				foreach($_FILES['add_itm_pastimg']['name'] as $key=>$value){
					$id_prop=$key;

					if ($_FILES['add_itm_pastimg']['size'][$key] != 0){

						$type=$_FILES['add_itm_pastimg']["type"][$key];
					    $size=$_FILES['add_itm_pastimg']["size"][$key];
					    $tmpname=$_FILES['add_itm_pastimg']['tmp_name'][$key];
					    $name=$_FILES['add_itm_pastimg']['name'][$key];

						$ext = substr($name,strrpos($name,"."));
					    $new_name = 'item_'.rand(0,microtime(true)).md5(time()).$ext;
					    $folder_path = "../upload_images/items";
						$fpath = $folder_path."/".$new_name;

						$data=array(
							'prop_id' => $id_prop,
							'item_id' => $results,
							'value' => $new_name
						);

						$resultup=$cons->insertData('sptypeimage', $data);
						if($resultup){
							move_uploaded_file($tmpname,$fpath);
					    	echo 1;
						}

					}

				}

			}

			if(isset($_REQUEST['add_itm_pastchkhid'])){

				$chkli=$_REQUEST['add_itm_pastchkhid'];
				foreach ($chkli as $key => $value) {
					$propid=$key;
					if(isset($_REQUEST['add_itm_pastchkhid'][$key]) && isset($_REQUEST['add_itm_pastchk'][$key])){
						$arr=array(
							'prop_id' => $propid,
							'item_id' => $results,
							'value' => '1'
						);
					}else{
						$arr=array(
							'prop_id' => $propid,
							'item_id' => $results,
							'value' => '0'
						);
					}

					$resultch=$cons->insertData('sptypeboolean', $arr);
					if($resultch){
				    	echo 1;
					}
				}

			}

			if(isset($_FILES['add_itm_icochk'])){

				foreach($_FILES['add_itm_icochk']['name'] as $key=>$value){
					$id_prop=$key;

					if ($_FILES['add_itm_icochk']['size'][$key] != 0){
						$type=$_FILES['add_itm_icochk']["type"][$key];
					    $size=$_FILES['add_itm_icochk']["size"][$key];
					    $tmpname=$_FILES['add_itm_icochk']['tmp_name'][$key];
					    $name=$_FILES['add_itm_icochk']['name'][$key];

						$ext = substr($name,strrpos($name,"."));
					    $new_name = 'item_'.rand(0,microtime(true)).md5(time()).$ext;
					    $folder_path = "../upload_images/items";
						$fpath = $folder_path."/".$new_name;
					}

						$bool=0;

						if(isset($_REQUEST['add_itm_icochkbx'][$key]) && isset($_REQUEST['add_itm_icochkbxhid'][$key])){
							$bool=1;
						}else{
							$bool=0;
						}

						if($_FILES['add_itm_icochk']['size'][$key] != 0){
							$data=array(
								'prop_id' => $id_prop,
								'item_id' => $results,
								'value' => $new_name,
								'bool' => $bool
							);
						}else{
							$data=array(
								'prop_id' => $id_prop,
								'item_id' => $results,
								'value' => 'default.png',
								'bool' => $bool
							);
						}

						$resultup=$cons->insertData('sptypeimageboolean', $data);

						if($resultup && $_FILES['add_itm_icochk']['size'][$key] != 0){
							move_uploaded_file($tmpname,$fpath);
						}
					    echo 1;
				}

			}

			if(isset($_REQUEST['add_itm_icolist'])){

				foreach($_REQUEST['add_itm_icolist'] as $key=>$value){
					$propid=$key;
					$value=$value;

					$data=array(
						'prop_id' => $propid,
						'item_id' => $results,
						'value' => $value
					);

					$resultch=$cons->insertData('sptypeimagelist', $data);
					if($resultch){
				    	echo 1;
					}
				}

			}

			if(isset($_REQUEST['add_itm_lispa'])){

				foreach($_REQUEST['add_itm_lispa'] as $key=>$value){
					$propid=$key;
					$value=$value;

					$data=array(
						'prop_id' => $propid,
						'item_id' => $results,
						'value' => $value
					);

					$resultch=$cons->insertData('sptypelist', $data);
					if($resultch){
				    	echo 1;
					}
				}

			}

		}

	}else if($state=="edititm"){
		$results=$cons->updtData('items', $dataNewitm, 'id', '=', $edititmno);

		if ($_FILES['add_itm_defimg']['size'] != 0){

			$type=$_FILES['add_itm_defimg']["type"];
		    $size=$_FILES['add_itm_defimg']["size"];
		    $tmpname=$_FILES['add_itm_defimg']['tmp_name'];
		    $name=$_FILES['add_itm_defimg']['name'];

			$ext = substr($name,strrpos($name,"."));
		    $new_name = 'item_'.rand(0,microtime(true)).md5(time()).$ext;
		    $folder_path = "../upload_images/items";
			$fpath = $folder_path."/".$new_name;

			$data=array(
				'img_path'=>$new_name
			);

			$resultup=$cons->updtData('items', $data, 'id', '=', $edititmno);
			if($resultup){
				move_uploaded_file($tmpname,$fpath);
		    	echo 1;
			}

		}

		if($results){
			$dataNewsubitm=array();

			if(isset($postdata['past'])){

				foreach($postdata['past'] as $key=>$value){
					$type=check_type($key);

					if($type->type=='text'){
						if(check_edit_avail('sptypetext',$key, $edititmno)){

							$dataNewsubitm['prop_id'] = $key;
							$dataNewsubitm['item_id'] = $edititmno;
							$dataNewsubitm['value'] = $value;

							$result=$cons->insertData('sptypetext', $dataNewsubitm);
							$dataNewsubitm=array();
						}else{
							$sql="UPDATE sptypetext SET value='".$value."' WHERE item_id=".$edititmno." AND prop_id=".$key;
					 		$result=mysqli_query($getRes,$sql) or die("Delete Query Error".mysql_error());
							if($result>0){
							echo 1;
							}
						}

					}else if($type->type=='number'){
						if(check_edit_avail('sptypenumber',$key, $edititmno)){
							$dataNewsubitm['prop_id'] = $key;
							$dataNewsubitm['item_id'] = $edititmno;
							$dataNewsubitm['value'] = $value;

							$result=$cons->insertData('sptypenumber', $dataNewsubitm);
							$dataNewsubitm=array();
						}else{
							$sql="UPDATE sptypenumber SET value='".$value."' WHERE item_id=".$edititmno." AND prop_id=".$key;
					 		$result=mysqli_query($getRes,$sql) or die("Delete Query Error".mysql_error());
							if($result>0){
								echo 1;
							}
						}
					}
				}

			}

			if(isset($_REQUEST['add_itm_lispa'])){

				foreach($_REQUEST['add_itm_lispa'] as $key=>$value){
					$propid=$key;
					$value=$value;

					if(check_edit_avail('sptypelist',$key, $edititmno)){

						$data=array(
							'prop_id' => $propid,
							'item_id' => $edititmno,
							'value' => $value
						);

						$resultch=$cons->insertData('sptypelist', $data);

					}else{
						$sql="UPDATE sptypelist SET value='".$value."' WHERE item_id=".$edititmno." AND prop_id=".$key;
			 			$result=mysqli_query($getRes,$sql) or die("Delete Query Error".mysql_error());
						if($result>0){
							echo 1;
						}
					}
				}
			}

			if(isset($_REQUEST['add_itm_icolist'])){

				foreach($_REQUEST['add_itm_icolist'] as $key=>$value){
					$propid=$key;
					$value=$value;

					if(check_edit_avail('sptypeimagelist',$key, $edititmno)){

						$data=array(
							'prop_id' => $propid,
							'item_id' => $edititmno,
							'value' => $value
						);

						$resultch=$cons->insertData('sptypeimagelist', $data);

					}else{
						$sql="UPDATE sptypeimagelist SET value='".$value."' WHERE item_id=".$edititmno." AND prop_id=".$key;
			 			$result=mysqli_query($getRes,$sql) or die("Delete Query Error".mysql_error());
						if($result>0){
							echo 1;
						}
					}

				}

			}

			if(isset($_REQUEST['add_itm_pastchkhid'])){

				$chkli=$_REQUEST['add_itm_pastchkhid'];
				foreach ($chkli as $key => $value) {
					$propid=$key;

					if(check_edit_avail('sptypeboolean',$key, $edititmno)){
						if(isset($_REQUEST['add_itm_pastchkhid'][$key]) && isset($_REQUEST['add_itm_pastchk'][$key])){
							$arr=array(
								'prop_id' => $propid,
								'item_id' => $edititmno,
								'value' => '1'
							);
						}else{
							$arr=array(
								'prop_id' => $propid,
								'item_id' => $edititmno,
								'value' => '0'
							);
						}

						$resultch=$cons->insertData('sptypeboolean', $arr);

					}else{

						if(isset($_REQUEST['add_itm_pastchkhid'][$key]) && isset($_REQUEST['add_itm_pastchk'][$key])){
							$sql="UPDATE sptypeboolean SET value=1 WHERE item_id=".$edititmno." AND prop_id=".$key;

						}else{
							$sql="UPDATE sptypeboolean SET value=0 WHERE item_id=".$edititmno." AND prop_id=".$key;
						}


			 			$result=mysqli_query($getRes,$sql) or die("Delete Query Error".mysql_error());
						if($result>0){
							echo 1;
						}
					}

				}

			}

			if(isset($_FILES['add_itm_icochk'])){

				foreach($_FILES['add_itm_icochk']['name'] as $key=>$value){
					$id_prop=$key;

					if ($_FILES['add_itm_icochk']['size'][$key] != 0){
						$type=$_FILES['add_itm_icochk']["type"][$key];
					    $size=$_FILES['add_itm_icochk']["size"][$key];
					    $tmpname=$_FILES['add_itm_icochk']['tmp_name'][$key];
					    $name=$_FILES['add_itm_icochk']['name'][$key];

						$ext = substr($name,strrpos($name,"."));
					    $new_name = 'item_'.rand(0,microtime(true)).md5(time()).$ext;
					    $folder_path = "../upload_images/items";
						$fpath = $folder_path."/".$new_name;
					}

					if(check_edit_avail('sptypeimageboolean',$key, $edititmno)){
						$bool=0;

						if(isset($_REQUEST['add_itm_icochkbx'][$key]) && isset($_REQUEST['add_itm_icochkbxhid'][$key])){
							$bool=1;
						}else{
							$bool=0;
						}

						if($_FILES['add_itm_icochk']['size'][$key] != 0){
							$data=array(
								'prop_id' => $id_prop,
								'item_id' => $results,
								'value' => $new_name,
								'bool' => $bool
							);
						}else{
							$data=array(
								'prop_id' => $id_prop,
								'item_id' => $results,
								'value' => 'default.png',
								'bool' => $bool
							);
						}

						$resultup=$cons->insertData('sptypeimageboolean', $data);

						if($resultup && $_FILES['add_itm_icochk']['size'][$key] != 0){
							move_uploaded_file($tmpname,$fpath);
						}
						echo 1;

					}else{

						$bool=0;
						if(isset($_REQUEST['add_itm_icochkbx'][$key]) && isset($_REQUEST['add_itm_icochkbxhid'][$key])){
							$bool=1;
						}else{
							$bool=0;
						}

						$filenm="";
						if($_FILES['add_itm_icochk']['size'][$key] != 0){
							$sql="UPDATE sptypeimageboolean SET value=".$new_name.", bool=".$bool." WHERE item_id=".$edititmno." AND prop_id=".$key;
						}else{
							$sql="UPDATE sptypeimageboolean SET bool=".$bool." WHERE item_id=".$edititmno." AND prop_id=".$key;
						}

			 			$result=mysqli_query($getRes,$sql) or die("Delete Query Error".mysql_error());
						if($result>0){
							echo 1;
						}
					}

				}

			}

			if(isset($_FILES['add_itm_pastimg'])){

				foreach($_FILES['add_itm_pastimg']['name'] as $key=>$value){
					$id_prop=$key;

					if ($_FILES['add_itm_pastimg']['size'][$key] != 0){

						$type=$_FILES['add_itm_pastimg']["type"][$key];
					    $size=$_FILES['add_itm_pastimg']["size"][$key];
					    $tmpname=$_FILES['add_itm_pastimg']['tmp_name'][$key];
					    $name=$_FILES['add_itm_pastimg']['name'][$key];

						$ext = substr($name,strrpos($name,"."));
					    $new_name = 'item_'.rand(0,microtime(true)).md5(time()).$ext;
					    $folder_path = "../upload_images/items";
						$fpath = $folder_path."/".$new_name;

						if(check_edit_avail('sptypeimage',$key, $edititmno)){
							$data=array(
								'prop_id' => $id_prop,
								'item_id' => $edititmno,
								'value' => $new_name
							);

							$resultup=$cons->insertData('sptypeimage', $data);
							if($resultup){
								move_uploaded_file($tmpname,$fpath);
						    	echo 1;
							}
						}else{
							$sql="UPDATE sptypeimage SET value='".$value."' WHERE item_id=".$edititmno." AND prop_id=".$key;
			 				$result=mysqli_query($getRes,$sql) or die("Delete Query Error".mysql_error());
							if($result>0){
								echo 1;
							}
						}

					}

				}

			}

		}

	}

	//$getType=check_type(14);

	//Properties

	//foreach($postdata['past'] as $key=>$value){
		//var_dump($key." m ". $value);
	//}



	// $add_itm_lbl=$_REQUEST['add_itm_lbl'];
	// $add_itm_desc=$_REQUEST['add_itm_desc'];
	// $add_itm_pric=$_REQUEST['add_itm_pric'];
	// $add_itm_tags=$_REQUEST['add_itm_tags'];
	// $add_itm_deftemp=$_REQUEST['add_itm_deftemp'];
	// $add_itm_scinm=$_REQUEST['add_itm_scinm'];
	// $add_itm_carelvl=$_REQUEST['add_itm_carelvl'];
	// $add_itm_siz=$_REQUEST['add_itm_siz'];
	// $add_itm_orig=$_REQUEST['add_itm_orig'];
	// $add_itm_stppri=$_REQUEST['add_itm_stppri'];
	// $add_itm_flw=$_REQUEST['add_itm_flw'];
	// $add_itm_lght=$_REQUEST['add_itm_lght'];

	// date_default_timezone_set('Asia/Kolkata');
	// $date=date('Y-m-d');

	// $type=$_FILES["add_itm_img"]["type"];
 //    $size=$_FILES["add_itm_img"]["size"];
 //    $tmpname=$_FILES['add_itm_img']['tmp_name'];
 //    $name=$_FILES['add_itm_img']['name'];

 //    $allowed_ext=array(
 //        'gif',
 //        'jpg',
 //        'jpeg',
 //        'png',
 //  	);

 //  	$t = explode('.',basename($_FILES['add_itm_img']['name']));
 //  	$extt = strtolower(array_pop($t));

 //  	if (!in_array($extt, $allowed_ext))
	// {
	//   echo 3;
	// }
	// else{
	// 	$ext = substr($name,strrpos($name,"."));
 //    	$new_name = 'item_'.time().$ext;
 //    	$folder_path = "../upload_images/items";

 //    	$data=array(
	// 		'label'=>$add_itm_lbl,
	// 		'description'=>$add_itm_desc,
	// 		'default_temp'=>$add_itm_deftemp,
	// 		'scientific_name'=>$add_itm_scinm,
	// 		'care_level'=>$add_itm_carelvl,
	// 		'size'=>$add_itm_siz,
	// 		'original'=>$add_itm_orig,
	// 		'setup_price'=>$add_itm_stppri,
	// 		'flowers'=>$add_itm_flw,
	// 		'light'=>$add_itm_lght,
	// 		'price'=>$add_itm_pric,
	// 		'tags'=>$add_itm_tags,
	// 		'img_path'=>$new_name,
	// 		'added_date'=>$date
	// 	);

	// 	$result=$cons->insertData('items', $data);
	// 	$fpath = $folder_path."/".$new_name;
 //        move_uploaded_file($tmpname,$fpath);
	// 	//var_dump($data);
	// 	echo 1;
	// }
}
//Ashok: Not in use
function edit_item_dash(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$edit_itm_lbl=$_REQUEST['edit_itm_lbl'];
	$edit_itm_desc=$_REQUEST['edit_itm_desc'];
	$edit_itm_pric=$_REQUEST['edit_itm_pric'];
	$edit_itm_tags=$_REQUEST['edit_itm_tags'];
	$edit_itm_deftemp=$_REQUEST['edit_itm_deftemp'];
	$edit_itm_scinm=$_REQUEST['edit_itm_scinm'];
	$edit_itm_carelvl=$_REQUEST['edit_itm_carelvl'];
	$edit_itm_siz=$_REQUEST['edit_itm_siz'];
	$edit_itm_orig=$_REQUEST['edit_itm_orig'];
	$edit_itm_stppri=$_REQUEST['edit_itm_stppri'];
	$edit_itm_flw=$_REQUEST['edit_itm_flw'];
	$edit_itm_lght=$_REQUEST['edit_itm_lght'];
	$id=$_REQUEST['id'];


	if(!empty($_FILES["edit_itm_img"]['name'])){
		$type=$_FILES["edit_itm_img"]["type"];
	    $size=$_FILES["edit_itm_img"]["size"];
	    $tmpname=$_FILES['edit_itm_img']['tmp_name'];
	    $name=$_FILES['edit_itm_img']['name'];

	    $allowed_ext=array(
	        'gif',
	        'jpg',
	        'jpeg',
	        'png',
	  	);

	  	$t = explode('.',basename($_FILES['edit_itm_img']['name']));
  		$extt = strtolower(array_pop($t));

  		if (!in_array($extt, $allowed_ext))
		{
		  echo 3;
		}
		else{
			$ext = substr($name,strrpos($name,"."));
	    	$new_name = 'item_'.time().$ext;
	    	$folder_path = "../upload_images/items";

	    	$data=array(
				'label'=>$edit_itm_lbl,
				'description'=>$edit_itm_desc,
				'default_temp'=>$edit_itm_deftemp,
				'scientific_name'=>$edit_itm_scinm,
				'care_level'=>$edit_itm_carelvl,
				'size'=>$edit_itm_siz,
				'original'=>$edit_itm_orig,
				'setup_price'=>$edit_itm_stppri,
				'flowers'=>$edit_itm_flw,
				'light'=>$edit_itm_lght,
				'price'=>$edit_itm_pric,
				'tags'=>$edit_itm_tags,
				'img_path'=>$new_name
			);

			$result=$cons->updtData('items', $data, 'id', '=', $id);
			$fpath = $folder_path."/".$new_name;
	        move_uploaded_file($tmpname,$fpath);
			//var_dump($data);
			echo 1;
		}
	}
	else{
		$data=array(
				'label'=>$edit_itm_lbl,
				'description'=>$edit_itm_desc,
				'default_temp'=>$edit_itm_deftemp,
				'scientific_name'=>$edit_itm_scinm,
				'care_level'=>$edit_itm_carelvl,
				'size'=>$edit_itm_siz,
				'original'=>$edit_itm_orig,
				'setup_price'=>$edit_itm_stppri,
				'flowers'=>$edit_itm_flw,
				'light'=>$edit_itm_lght,
				'price'=>$edit_itm_pric,
				'tags'=>$edit_itm_tags
		);

		$result=$cons->updtData('items', $data, 'id', '=', $id);
		echo 1;
	}
}

function deleteItem(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$val=$_REQUEST['val'];
	$sql="DELETE FROM items WHERE id=".$val;
	$result=mysqli_query($getRes,$sql) or die("Delete Query Error".mysql_error());

	if($result>0){
		echo 1;
	}
}

function deletecollectionItem(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$val=$_REQUEST['val'];
	$sql="DELETE FROM collections WHERE id=".$val;
	$result=mysqli_query($getRes,$sql) or die("Delete Query Error".mysqli_error($getRes));

	if($result>0){
		$templates='SELECT * FROM collections WHERE user_id='.$_SESSION['main']['id'];
	    $qry=mysqli_query($getRes,$templates);
	    $se='<option value="">Select Collection</option>';
	    foreach ($qry as $tmp) {
	     $se.='<option value="'.$tmp['id'].'">'.$tmp['label'].'</option>';
	    }

		echo json_encode($se);
	}
}

function defaulttblprintqueue(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();
	
	$sql = "SELECT * FROM tblprintqueuedefault";
	$result = mysqli_query($getRes,$sql);
	$row = mysqli_fetch_array($result);
	$row_count = mysqli_num_rows($result);
	
	$labels_text 	   = $_REQUEST['labels-text'];
	$labels_value 	   = $_REQUEST['labels-value'];
	$description_text  = $_REQUEST['description-text'];
	$description_value = $_REQUEST['description-value'];
	$prices_text 	   = $_REQUEST['prices-text'];
	$prices_value 	   = $_REQUEST['prices-value'];
	$tags_text 	  	   = $_REQUEST['tags-text'];
	$tags_value 	   = $_REQUEST['tags-value'];
	$imgdiv_value 	   = $_REQUEST['imgdiv'];

	/* Label Value */
	$array_labels 		  = array();
	$array_labels['text'] = $labels_text;
	$lines_label		  = explode("; ", $labels_value);

	foreach ( $lines_label as $line ) {
		list( $key, $value ) = explode( ": ", $line );
		if( $key == 'word-break' || $key == 'position' || $key == 'cursor' || $key == 'z-index' ){
			continue;
		}
		if( $key == 'left' ){
			$key = 'x';
		}
		if( $key == 'top' ){
			$key = 'y';
		}
		if( $key == 'font-size' ){
			$key = 'textSize';
		}
		if( $key == 'text-align' ){
			$key = 'textAlign';
		}
		if( $key == 'opacity' ){
			$key = 'backgroundAlpha';
		}
		if( $key == 'background-color' ){
			$key = 'backgroundColor';
		}
		if( $key == 'color' ){
			$key = 'textColor';
		}
		if( $key == 'font-family' ){
			$key = 'font-family';
		}
		$array_labels[$key] = chop( $value, 'px');
	}
	$label = json_encode($array_labels);

	/* Description value */
	$array_description 		   = array();
	$array_description['text'] = $description_text;
	$lines_description  	   = explode("; ", $description_value);

	foreach ( $lines_description as $line ) {
		list( $key, $value ) = explode( ": ", $line );
		if( $key == 'word-break' || $key == 'position' || $key == 'cursor' || $key == 'z-index' ){
			continue;
		}
		if( $key == 'left' ){
			$key = 'x';
		}
		if( $key == 'top' ){
			$key = 'y';
		}
		if( $key == 'font-size' ){
			$key = 'textSize';
		}
		if( $key == 'text-align' ){
			$key = 'textAlign';
		}
		if( $key == 'opacity' ){
			$key = 'backgroundAlpha';
		}
		if( $key == 'background-color' ){
			$key = 'backgroundColor';
		}
		if( $key == 'color' ){
			$key = 'textColor';
		}
		if( $key == 'font-family' ){
			$key = 'font-family';
		}
		$array_description[$key] = chop( $value, 'px');
	}
	$description = json_encode( $array_description );
	
	/*Prices value*/
	$array_prices 		  = array();
	$array_prices['text'] = $prices_text;
	$lines_prices    	  = explode("; ", $prices_value);
	foreach ( $lines_prices as $line ) {
		list( $key, $value ) = explode( ": ", $line );
		if( $key == 'word-break' || $key == 'position' || $key == 'cursor' || $key == 'z-index' ){
			continue;
		}
		if( $key == 'left' ){
			$key = 'x';
		}
		if( $key == 'top' ){
			$key = 'y';
		}
		if( $key == 'font-size' ){
			$key = 'textSize';
		}
		if( $key == 'text-align' ){
			$key = 'textAlign';
		}
		if( $key == 'opacity' ){
			$key = 'backgroundAlpha';
		}
		if( $key == 'background-color' ){
			$key = 'backgroundColor';
		}
		if( $key == 'color' ){
			$key = 'textColor';
		}
		if( $key == 'font-family' ){
			$key = 'font-family';
		}
		$array_prices[$key] = chop( $value, 'px');
	}
	$prices = json_encode( $array_prices );

	/*Tags value*/
	$array_tags 		= array();
	$array_tags['text'] = $tags_text;
	$lines_tags    		= explode("; ", $tags_value);
	foreach ( $lines_tags as $line ) {
		list( $key, $value ) = explode( ": ", $line );
		if( $key == 'word-break' || $key == 'position' || $key == 'cursor' || $key == 'z-index' ){
			continue;
		}
		if( $key == 'left' ){
			$key = 'x';
		}
		if( $key == 'top' ){
			$key = 'y';
		}
		if( $key == 'font-size' ){
			$key = 'textSize';
		}
		if( $key == 'text-align' ){
			$key = 'textAlign';
		}
		if( $key == 'opacity' ){
			$key = 'backgroundAlpha';
		}
		if( $key == 'background-color' ){
			$key = 'backgroundColor';
		}
		if( $key == 'color' ){
			$key = 'textColor';
		}
		if( $key == 'font-family' ){
			$key = 'font-family';
		}
		$array_tags[$key] = chop( $value, 'px');
	}
	$tags = json_encode( $array_tags );
	$array_imgdiv		= array();
	$lines_imgdiv  		= explode("; ", $imgdiv_value);
	foreach ( $lines_imgdiv as $line ) {
		list( $key, $value ) = explode( ": ", $line );
		$array_imgdiv[$key] = chop( $value, 'px');
	}
	$imgdiv = json_encode( $array_imgdiv );
	$data = array(
				'label' 		=> $label,
				'description' 	=> $description,
				'price'			=> $prices,
				'tags'			=> $tags,
				'imgdiv'		=> $imgdiv,
			);
	if( $row_count > 0 ) {
		$result = $cons->updtData( 'tblprintqueuedefault', $data, 'id', '=', $row['id'] );
		echo 1;
		
	} else {
		$result = $cons->insertData('tblprintqueuedefault', $data);
		echo 1;
	}
}
//Ashok: Add selected items to the print list
function doubleClickadd($itemid){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();
	if(isNULL($itemid) !="NULL"){
		$val=$itemid;
	}else{
		$val=$_REQUEST['val'];	
	}
	
	$records=$cons->selectWhere('items','id','=',$val,'int');
	$count_rec=$cons->countWhere('tblprintqueue','itm_id','=',$val,'int');

	date_default_timezone_set('Asia/Kolkata');
	$date=date('Y-m-d');

	if($count_rec<=0){

		$label=$records['label'];
		$description=$records['description'];
		$price=$records['price'];
		$img_path=$records['img_path'];
		$tags=$records['tags'];
		$added_date=$date;
//Ashok: Uncommented 05-12-2019 notwork
		// $data=array(
		// 	'label'=>$label,
		// 	'description'=>$description,
		// 	'price'=>$price,
		// 	'img_path'=>$img_path,
		// 	'tags'=>$tags,
		// 	'added_date'=>$added_date,
		// 	'itm_id'=> $val,
		// 	'NoOfCopy'=>1
		// );
		//Ashok: 08-12-2019 Default value seeting for first time adding to print list
				$data = array(
				'label'=>'{"text":"'.$label.'","x":10,"textAlign":"left","y":10,"textSize":18,"backgroundColor":"rgb(200, 200, 200)","width":184.85,"isPrefix":false,"backgroundAlpha":1,"textColor":"rgb(255, 255, 255)","prop_type":"label_bubble","height":35,"value_id":0,"isVisible":true,"prop_id":0,"fontID":0,"font-family":"sans"}',

				'description'=>'{"text":"'.$description.'","x":10,"textAlign":"left","y":40,"textSize":18,"backgroundColor":"rgb(200, 200, 200)","width":184.85,"isPrefix":false,"backgroundAlpha":1,"textColor":"rgb(255, 255, 255)","prop_type":"label_bubble","height":35,"value_id":0,"isVisible":true,"prop_id":0,"fontID":0,"font-family":"sans"}',

				'price'=>'{"text":"'.$price.'","x":10,"textAlign":"left","y":70,"textSize":18,"backgroundColor":"rgb(200, 200, 200)","width":184.85,"isPrefix":false,"backgroundAlpha":1,"textColor":"rgb(255, 255, 255)","prop_type":"label_bubble","height":35,"value_id":0,"isVisible":true,"prop_id":0,"fontID":0,"font-family":"sans"}',

				'img_path'=> $img_path,
				'img_rect'=>'{"x":0,"y":0,"width":0,"height":0,"rotate":0,"scaleX":1,"scaleY":1}',
				'img_crop'=>'',
				'imgdiv'=>'{"width":"0","height":"0","border-color":"rgb(255, 255, 255);"}',
				//'lblvisible'=>"labels,description,prices,tags",
				'tags'=>'{"text":"'.$tags.'","x":10,"textAlign":"left","y":100,"textSize":18,"backgroundColor":"rgb(200, 200, 200)","width":184.85,"isPrefix":false,"backgroundAlpha":1,"textColor":"rgb(255, 255, 255)","prop_type":"label_bubble","height":35,"value_id":0,"isVisible":true,"prop_id":0,"fontID":0,"font-family":"sans"}',

				'added_date'=>$added_date,
				'itm_id'=>$val,
				'NoOfCopy'=>1
			);
//Ashok: commented 08-12-2019 work
		/* $sql = "SELECT * FROM tblprintqueuedefault";
		$result = mysqli_query($getRes,$sql);
		$row = mysqli_fetch_array($result);
		$row_count = mysqli_num_rows($result);
		if( $row_count > 0 ) {
			$label_array 	   = json_decode($row['label'], true);
			$description_array = json_decode($row['description'], true);
			$price_array 	   = json_decode($row['price'], true);
			$tags_array 	   = json_decode($row['tags'], true);
			$data = array(
				'label'=>'{"text":"'.$label.'","x":'.$label_array['x'].',"textAlign":"'.$label_array['textAlign'].'","y":'.$label_array['y'].',"textSize":'.$label_array['textSize'].',"backgroundColor":"'.$label_array['backgroundColor'].'","width":'.$label_array['width'].',"isPrefix":false,"backgroundAlpha":'.$label_array['backgroundAlpha'].',"textColor":"'.$label_array['textColor'].'","prop_type":"label_bubble","height":'.$label_array['height'].',"value_id":0,"isVisible":true,"prop_id":0,"fontID":0,"font-family":"'.$label_array['font-family'].'"}',

				'description'=>'{"text":"'.$description.'","x":'.$description_array['x'].',"backgroundColor":"'.$description_array['backgroundColor'].'","y":'.$description_array['y'].',"textAlign":"'.$description_array['textAlign'].'","textSize":'.$description_array['textSize'].',"prop_type":"description_bubble","prop_id":0,"value_id":0,"isVisible":true,"isPrefix":false,"width":'.$description_array['width'].',"textColor":"'.$description_array['textColor'].'","height":'.$description_array['height'].',"fontID":0,"backgroundAlpha":'.$description_array['backgroundAlpha'].',"font-family":"'.$description_array['font-family'].'"}',

				'price'=>'{"text":"'.$price.'","x":'.$price_array['x'].',"textAlign":"'.$price_array['textAlign'].'","y":'.$price_array['y'].',"textSize":'.$price_array['textSize'].',"backgroundColor":"'.$price_array['backgroundColor'].'","width":'.$price_array['width'].',"isPrefix":false,"backgroundAlpha":'.$price_array['backgroundAlpha'].',"textColor":"'.$price_array['textColor'].'","prop_type":"price_bubble","height":'.$price_array['height'].',"value_id":0,"isVisible":true,"prop_id":0,"fontID":0,"font-family":"'.$price_array['font-family'].'"}',

				'img_path' => $img_path,
				'img_rect'=>'',
				'img_crop'=>'',
				'imgdiv'   => $row['imgdiv'],
				'lblvisible'=>"labels,description,prices,tags",
				'tags'=>'{"text":"'.$tags.'","x":'.$tags_array['x'].',"textAlign":"'.$tags_array['textAlign'].'","y":'.$tags_array['y'].',"textSize":'.$tags_array['textSize'].',"backgroundColor":"'.$tags_array['backgroundColor'].'","width":'.$tags_array['width'].',"isPrefix":false,"backgroundAlpha":'.$tags_array['backgroundAlpha'].',"textColor":"'.$tags_array['textColor'].'","prop_type":"label_bubble","height":'.$tags_array['height'].',"value_id":0,"isVisible":true,"prop_id":0,"fontID":2,"font-family":"'.$tags_array['font-family'].'"}',

				'added_date'=>$added_date,
				'itm_id'=> $val,
				'NoOfCopy'=>1
			);*/
		/* } else {
			$data = array(
				'label'=>'{"text":"'.$label.'","x":10,"textAlign":"left","align":6,"y":0,"textSize":24,"backgroundColor":16777215,"width":184.85,"isPrefix":false,"backgroundAlpha":0.8,"item_id":2721,"textColor":0,"prop_type":"label_bubble","height":37.2,"value_id":0,"isVisible":true,"prop_id":0,"fontID":0}',

				'description'=>'{"text":"'.$description.'","x":247,"backgroundColor":16777215,"item_id":2651,"y":229,"backgroundY":0,"align":12,"textAlign":"left","textSize":14,"prop_type":"description_bubble","prop_id":0,"value_id":0,"isVisible":true,"isPrefix":false,"width":283.1,"textColor":0,"height":104.8,"textHeight":104.8,"backgroundX":0,"textWidth":283.1,"fontID":0,"backgroundAlpha":0.8}',

				'price'=>'{"text":"'.$price.'","x":326,"textAlign":"left","align":12,"y":180,"textSize":18,"backgroundColor":16777215,"width":222.75,"isPrefix":false,"backgroundAlpha":0.8,"item_id":2642,"textColor":4,"prop_type":"price_bubble","height":30.4,"value_id":0,"isVisible":true,"prop_id":0,"fontID":0}',

				'img_path'=>$img_path,
				'lblvisible'=>"labels,description,prices,tags",
				'tags'=>'{"text":"'.$tags.'","x":10,"textAlign":"left","align":6,"y":40,"textSize":20,"backgroundColor":16777215,"width":191.9,"isPrefix":false,"backgroundAlpha":0.8,"item_id":2627,"textColor":0,"prop_type":"label_bubble","height":38.3,"value_id":0,"isVisible":true,"prop_id":0,"fontID":2}',

				'added_date'=>$added_date,
				'itm_id'=> $val,
				'NoOfCopy'=>1
			);
		}*/
		$result=$cons->insertData('tblprintqueue', $data); 

	}else{
		$records=$cons->selectWhere('tblprintqueue','itm_id','=',$val,'int');
		$records['NoOfCopy']=$records['NoOfCopy']+=1;
		$uparr=array('NoOfCopy'=>$records['NoOfCopy']);
		$results=$cons->updtData('tblprintqueue', $uparr, 'itm_id', '=', $val);
	}

		/* $sql = "SELECT
		items.template_id,
		tblprintqueue.id,
		tblprintqueue.itm_id,
		tblprintqueue.label,
		tblprintqueue.description,
		tblprintqueue.img_path,
		tblprintqueue.price,
		tblprintqueue.tags,
		tblprintqueue.NoOfCopy,
		tblprintqueue.added_date,
		templates.label as tem_lbl
		FROM
		items
		INNER JOIN tblprintqueue ON items.id = tblprintqueue.itm_id
		INNER JOIN templates ON templates.id = items.template_id";

		$result_print=mysqli_query($getRes,$sql) or die("Delete Query Error".mysql_error());

		$n="";
		while ($row = mysqli_fetch_assoc($result_print)) {
		  $n.= '{
		  "id":"'.$row['id'].'",
		  "label":"'.json_decode($row['label'])->text.'",
		  "default_template":"'.$row['tem_lbl'].'",
		  "NoOfCopy":"'.$row['NoOfCopy'].'"
		  },';
		}

		$str='{"data" :['.rtrim($n,",").']}';
		echo $str; */
}

function getTblprintData(){
	$cons= new Mysql();
	$getRes= $cons->dbConnect();

	$sql = "SELECT
	tblprintqueue.id,
	tblprintqueue.itm_id,
	tblprintqueue.label,
	tblprintqueue.description,
	tblprintqueue.img_path,
	tblprintqueue.price,
	tblprintqueue.tags,
	tblprintqueue.NoOfCopy,
	tblprintqueue.added_date,
	templates.label as tem_lbl,
	templates.id as templ_id,
	items.category_id as item_cat_id
 	FROM
	items
	INNER JOIN tblprintqueue ON items.id = tblprintqueue.itm_id
	INNER JOIN templates ON templates.id = items.template_id order by tblprintqueue.id ASC ";//where 1= 0 temp for 0 recods

		$result_print=mysqli_query($getRes,$sql) or die("Delete Query Error".mysql_error());

		$n=""; $chk=''; $action='';
		
		while ($row = mysqli_fetch_assoc($result_print)) {
		  $chk="<div class='checkbox checkbox-primary'><input id='checkbox".$row['id']."' value='".$row['id']."' name='printcheck' type='checkbox' class='prin-chk'><label for='checkbox".$row['id']."'></label></div>";

		  $action="<a data-toggle='modal' data-target='#itemsdbmodel-index' class='itm_edit_val' data-val=".$row['itm_id']." data-lblnm='".json_decode($row['label'])->text."'><i class='fa fa-edit edit' data-placement='bottom' data-toggle='tooltip' title='Edit'></i></a><a class='de-print-rec' data-del-id='".$row['id']."'><i class='fa fa-times-circle-o delete delete-print-ls' data-placement='bottom' data-toggle='tooltip' title='Delete'></i></a>";
		  /*$action="<a class='prev-print-rec' data-prev-id='".$row['id']."'><i class='fa fa-eye' data-placement='bottom' data-toggle='tooltip' title='Preview'></i></a><i class='fa fa-edit edit' data-placement='bottom' data-toggle='tooltip' title='Edit'></i><a class='de-print-rec' data-del-id='".$row['id']."'><i class='fa fa-times-circle-o delete delete-print-ls' data-placement='bottom' data-toggle='tooltip' title='Delete'></i></a>";*/
		 $noc="<input type='number' value='".$row['NoOfCopy']."' min='1' style='width: 50px;'>";
//$row['NoOfCopy']
		  $n.= '{
		  "id":"'.$chk.'",
		  "label":"'.json_decode($row['label'])->text.'",
		  "default_template":"'.$row['tem_lbl'].'",
		  "NoOfCopy":"'.$noc.'",
		  "action":"'.$action.'",
		  "item_id":"'.$row['itm_id'].'",
		  "rowid":"'.$row['id'].'",
		  "templ_id":"'.$row['templ_id'].'",
		  "cat_id":"'.$row['item_cat_id'].'"
		  },';
		}
		$str='{"data" :['.rtrim($n,",").']}';
		echo $str;
}

function getTpmletData(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$sql = "SELECT * FROM templates WHERE user_id=".$_SESSION['main']['id'];
		$result_print=mysqli_query($getRes,$sql) or die("Delete Query Error".mysql_error());

		$n=""; $action='';
		while ($row = mysqli_fetch_assoc($result_print)) {
		  $action="<a data-toggle='modal' data-target='#dbmodel-template' class='data-templ-edi' data-templ-edi='".$row['id']."'><i class='fa fa-edit edit' data-placement='bottom' data-toggle='tooltip' title='Edit'></i></a><a class='edit-print-rec delete-temp-data' data-templ-del='".$row['id']."'><i class='fa fa-times-circle-o delete delete-print-ls' data-placement='bottom' data-toggle='tooltip' title='Delete'></i></a>";

		  $diam=$row['width']."&ldquo; X ".$row['height']."&ldquo;";
//Ashok: 27-11-2019 added templ_id
		  $n.= '{
		  "label":"'.$row['label'].'",
		  "size":"'.$diam.'",
		  "action":"'.$action.'",
		  "templ_id":"'.$row['id'].'"
		  },';
		}

		$str='{"data" :['.rtrim($n,",").']}';
		echo $str;
}

function getCollectionData(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

		//$sql = "SELECT * FROM collections";
		$sql ="SELECT
				collections.label,
				collections.id,
				count(categories.id) as countd,
				collections.user_id
				FROM
				categories
				INNER JOIN collections ON collections.id = categories.collection_id AND collections.user_id=".$_SESSION['main']['id']." GROUP BY collections.label";
				//Ashok: 28-11-2019 Changed query from(RIGHT JOIN collections ON collections.id = categories.collection_id)

		$result_print=mysqli_query($getRes,$sql) or die("Delete Query Error".mysql_error());

		$n=""; $action='';
		while ($row = mysqli_fetch_assoc($result_print)) {
		  $hid_v="<div class='checkbox checkbox-primary'><input type='hidden' value='".$row['id']."' class='itm-hid-id-coll'><input id='checkbox".$row['id']."' value='".$row['id']."' name='db-chk' class='db-chk' type='checkbox'><label for='checkbox".$row['id']."'></label></div>";


		  $action="<a data-toggle='modal' data-target='#dbEditmodel' class='collect-get-dat' data-colle-edi='".$row['id']."'><i class='fa fa-edit edit' data-placement='bottom' data-toggle='tooltip' title='' data-original-title='Edit'></i></a><a data-toggle='modal' data-target='#dbdeletemodel' class='edit-coll-rec delete-coll-data' data-colle-del='".$row['id']."'><i class='fa fa-times-circle-o delete' data-placement='bottom' data-toggle='tooltip' title='' data-original-title='Delete'></i></a>";

		  $chkCoun="";
		  if($row['countd']!=NULL){
		  	$chkCoun=$row['countd'];
		  }else{
		  	$chkCoun='0';
		  }

		  $n.= '{
		  "chk":"'.$hid_v.'",
		  "label":"'.$row['label'].'",
		  "collections":"'.$chkCoun.'",
		  "action":"'.$action.'"
		  },';
		}

		$str='{"data" :['.rtrim($n,",").']}';
		echo $str;
}

//get catagories to table
function getCatagoryData(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$vals=$_GET['datas'];

		if($vals==-1){
			$sql = "SELECT
				categories.id as catid,
				categories.label as catlbl,
				collections.id as collid,
				collections.label as colllbl
				FROM
				categories
				INNER JOIN collections ON collections.id = categories.collection_id AND collections.user_id=".$_SESSION['main']['id'];
		}else{
			$sql = "SELECT
				categories.id as catid,
				categories.label as catlbl,
				collections.id as collid,
				collections.label as colllbl
				FROM
				categories
				INNER JOIN collections ON collections.id = categories.collection_id WHERE collections.id=$vals";
		}

		$result_print=mysqli_query($getRes,$sql) or die("Delete Query Error".mysql_error());

		$n=""; $action='';
		while ($row = mysqli_fetch_assoc($result_print)) {
		  $hid_v="<div class='checkbox checkbox-primary'><input type='hidden' value='".$row['catid']."' class='itm-hid-id-cata'><input id='checkbox".$row['catid']."' value='".$row['catid']."' name='dbcat-chk' class='dbcat-chk' type='checkbox'><label for='checkbox".$row['catid']."'></label></div>";


		  $action="<a data-toggle='modal' data-target='#dbcatEditmodel' class='cat-get-dat' data-cat-edi='".$row['catid']."'><i class='fa fa-edit edit' data-placement='bottom' data-toggle='tooltip' title='' data-original-title='Edit'></i></a><a data-toggle='modal' data-target='#dbcatdeletemodel' class='edit-coll-rec delete-cat-data' data-cat-del='".$row['catid']."'><i class='fa fa-times-circle-o delete' data-placement='bottom' data-toggle='tooltip' title='' data-original-title='Delete'></i></a>";

		  $n.= '{
		  "chk":"'.$hid_v.'",
		  "label":"'.$row['catlbl'].'",
		  "Items":"0",
		  "action":"'.$action.'"
		  },';
		}

		$str='{"data" :['.rtrim($n,",").']}';
		echo $str;
}

function getTpmletDataDb(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$sql = "SELECT * FROM templates WHERE user_id=".$_SESSION['main']['id'];
		$result_print=mysqli_query($getRes,$sql) or die("Delete Query Error".mysql_error());

		$n=""; $action='';
		while ($row = mysqli_fetch_assoc($result_print)) {
		  $action="<a data-toggle='modal' data-target='#dbmodel-template' class='data-templ-edi' data-templ-edi='".$row['id']."'><i class='fa fa-edit edit' data-placement='bottom' data-toggle='tooltip' title='Edit'></i></a><a class='edit-print-rec delete-temp-data'data-templ-del='".$row['id']."'><i class='fa fa-times-circle-o delete delete-print-ls' data-placement='bottom' data-toggle='tooltip' title='Delete'></i></a>";

		  $diam=$row['width']."&ldquo; X ".$row['height']."&ldquo;";

		  $n.= '{
		  "label":"'.$row['label'].'",
		  "description":"'.trim($row['description']).'",
		  "size":"'.$diam.'",
		  "action":"'.$action.'"
		  },';
		}

		$str='{"data" :['.rtrim($n,",").']}';
		echo $str;
}

function getTpmletDataDbPaper(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$sql = "SELECT * FROM papertemplates WHERE user_id=".$_SESSION['main']['id'];
		$result_print=mysqli_query($getRes,$sql) or die("Delete Query Error".mysql_error());

		$n=""; $action='';
		while ($row = mysqli_fetch_assoc($result_print)) {
		  $action="<a data-toggle='modal' data-target='#dbmodel-template-pepr' class='data-templ-edi-pepr' data-templ-edi-pepr='".$row['id']."'><i class='fa fa-edit edit' data-placement='bottom' data-toggle='tooltip' title='Edit'></i></a><a class='edit-print-rec delete-temp-data-pepr'data-templ-del-pepr='".$row['id']."'><i class='fa fa-times-circle-o delete delete-print-ls' data-placement='bottom' data-toggle='tooltip' title='Delete'></i></a>";

		  $diam=$row['width']."&ldquo; X ".$row['height']."&ldquo;";

		  $n.= '{
		  "label":"'.$row['label'].'",
		  "description":"'.trim($row['description']).'",
		  "size":"'.$diam.'",
		  "action":"'.$action.'"
		  },';
		}

		$str='{"data" :['.rtrim($n,",").']}';
		echo $str;
}

function getItmData(){

	$cons= new Mysql();
	$getRes= $cons->dbConnect();

	if(isset($_REQUEST['datas']) && $_REQUEST['datas']!=-11){
		$sqls = "SELECT
			categories.label as catlbl,
			items.label,
			items.description,
			items.img_path,
			items.price,
			items.tags,
			items.template_id,
			items.id,
			items.category_id
			FROM 
			items 
			INNER JOIN categories ON categories.id = items.category_id 
			INNER JOIN collections on collections.ID = categories.collection_id AND collections.user_id=".$_SESSION['main']['id']." WHERE items.category_id=".$_REQUEST['datas']." ORDER BY items.id DESC LIMIT 5";
	}else if(!isset($_REQUEST['datas']) || (isset($_REQUEST['datas']) && $_REQUEST['datas']==-11)){
		$sqls = "SELECT
			categories.label as catlbl,
			items.label,
			items.description,
			items.img_path,
			items.price,
			items.tags,
			items.template_id,
			items.id,
			items.category_id
			FROM 
			items 
			INNER JOIN categories ON categories.id = items.category_id INNER JOIN collections on collections.ID = categories.collection_id AND collections.user_id=". $_SESSION['main']['id']." ORDER BY items.id DESC LIMIT 5";			
	}
	
	$result_items=mysqli_query($getRes,$sqls) or die("getItmData Query Error".mysql_error());
	
	$n=""; $hid_v=""; $act_it="";

	while ($rows = mysqli_fetch_assoc($result_items)) {
		$hid_v="<div class='checkbox checkbox-primary'><input type='hidden' value='".$rows['id']."' class='itm-hid-id'><input id='checkbox".$rows['id']."' value='".$rows['id']."' name='itemcheck' type='checkbox'><label for='checkbox".$rows['id']."'></label></div>";

		$act_it="<a data-toggle='modal' data-target='#itemsdbmodel-index' class='itm_edit_val' data-val=".$rows['id']." data-lblnm='".$rows['label']."'><i class='fa fa-edit edit' data-placement='bottom' data-toggle='tooltip' title='Edit'></i></a><a class='dup-itm-data' data-dup-val=".$rows['id']."><i class='fa fa-copy duplicate' data-placement='bottom' data-toggle='tooltip' title='Duplicate'></i></a><a class='dlete-itm-dat' data-dlete-val=".$rows['id']."><i class='fa fa-times-circle-o delete' data-placement='bottom' data-toggle='tooltip' title='Delete'></i></a>";


		$sql="SELECT id,category_id FROM items WHERE category_id=".$rows['category_id']." LIMIT 5";
        $qry=mysqli_query($getRes,$sql);

        $pas="";
        $passno="";

        while($row = mysqli_fetch_assoc($qry)){

            //got the catagory id from the item table. now going to get the catagorie property names
            $sqlcatprop="SELECT id, label, type FROM categoriesproperties WHERE category_id=".$row['category_id']." ORDER BY id ASC LIMIT 5;";

            $qrycatdata=mysqli_query($getRes,$sqlcatprop);

            while($rowcatdata=mysqli_fetch_assoc($qrycatdata)){
                //got the catagory name and the type (imglist) cand the catagory id
                if($rowcatdata['type']=="imglist"){
                    //get the user selected list item value
                    $sqlimglst="SELECT
                                value
                                FROM
                                sptypeimagelist
                                WHERE
                                prop_id = ".$rowcatdata['id']." AND
                                item_id =".$row['id'];

                    $qryimglst_val=mysqli_query($getRes,$sqlimglst);
                    $rowimglst_val = mysqli_fetch_assoc($qryimglst_val);
                    if(!empty($rowimglst_val)){
                    	$qryimglsts="SELECT
                            label
                            FROM
                            sptypeimagelistitem
                            WHERE
                            prop_id = ".$rowcatdata['id']." AND
                            id =".$rowimglst_val['value'];

	                    $qryimglst_vals=mysqli_query($getRes,$qryimglsts);
	                    $rowimglst_vals = mysqli_fetch_assoc($qryimglst_vals);

	                    //labels of the user selected image list option
	                    //echo $rowcatdata['label']." ".$rowimglst_vals['label']."<br/>";
	                    $pas.='"'.$rowcatdata['label'].'":"'.$rowimglst_vals['label'].'",';
                    }else{
                    	$pas.='"'.$rowcatdata['label'].'":"-",';
                    }

                }else if($rowcatdata['type']=="list"){
                    //get the user selected list item value
                    $sqllst="SELECT
                                value
                                FROM
                                sptypelist
                                WHERE
                                prop_id = ".$rowcatdata['id']." AND
                                item_id =".$row['id'];

                    $qrylst_val=mysqli_query($getRes,$sqllst);
                    $rowlst_val = mysqli_fetch_assoc($qrylst_val);
                    if(!empty($rowlst_val)){
                    	$qryimglsts="SELECT
                            label
                            FROM
                            sptypelistitem
                            WHERE
                            prop_id = ".$rowcatdata['id']." AND
                            id =".$rowlst_val['value'];

	                    $qrylst_vals=mysqli_query($getRes,$qryimglsts);
	                    $rowlst_vals = mysqli_fetch_assoc($qrylst_vals);

	                    //labels of the user selected image list option
	                    //echo $rowcatdata['label']." ".$rowlst_vals['label']."<br/>";
	                    $pas.='"'.$rowcatdata['label'].'":"'.$rowlst_vals['label'].'",';
                    }else{
                    	$pas.='"'.$rowcatdata['label'].'":"-",';
                    }

                }else if($rowcatdata['type']=="text"){

                    $sqltxt="SELECT
                            value
                            FROM
                            sptypetext
                            WHERE
                            prop_id = ".$rowcatdata['id']." AND
                            item_id =".$row['id'];

                    $qrytxt_val=mysqli_query($getRes,$sqltxt);
                    $rowtxt_val = mysqli_fetch_assoc($qrytxt_val);

                    //echo $rowcatdata['label']." ".$rowtxt_val['value']."<br/>";
                    $pas.='"'.$rowcatdata['label'].'":"'.$rowtxt_val['value'].'",';

                }else if($rowcatdata['type']=="number"){

                    $sqlnum="SELECT
                            value
                            FROM
                            sptypenumber
                            WHERE
                            prop_id = ".$rowcatdata['id']." AND
                            item_id =".$row['id'];

                    $qrynum_val=mysqli_query($getRes,$sqlnum);
                    $rownum_val = mysqli_fetch_assoc($qrynum_val);

                    //echo $rowcatdata['label']." ".$rownum_val['value']."<br/>";
                    $pas.='"'.$rowcatdata['label'].'":"'.$rownum_val['value'].'",';

                }else if($rowcatdata['type']=="img"){

                    $sqlimg="SELECT
                            value
                            FROM
                            sptypeimage
                            WHERE
                            prop_id = ".$rowcatdata['id']." AND
                            item_id =".$row['id'];

                    $qryimg_val=mysqli_query($getRes,$sqlimg);
                    $rowimg_val = mysqli_fetch_assoc($qryimg_val);

                    //echo $rowcatdata['label']." ".$rowimg_val['value']."<br/>";
                    $pas.='"'.$rowcatdata['label'].'":"'.$rowimg_val['value'].'",';

                }else if($rowcatdata['type']=="bool"){

                    $sqlbool="SELECT
                            value
                            FROM
                            sptypeboolean
                            WHERE
                            prop_id = ".$rowcatdata['id']." AND
                            item_id =".$row['id'];

                    $qrybool_val=mysqli_query($getRes,$sqlbool);
                    $rowbool_val = mysqli_fetch_assoc($qrybool_val);

                    //echo $rowcatdata['label']." ".$rowbool_val['value']."<br/>";
                    $pas.='"'.$rowcatdata['label'].'":"'.$rowbool_val['value'].'",';

                }else if($rowcatdata['type']=="imgbool"){

                    $sqlimgbool="SELECT
                            bool
                            FROM
                            sptypeimageboolean
                            WHERE
                            prop_id = ".$rowcatdata['id']." AND
                            item_id =".$row['id'];

                    $qryimgbool_val=mysqli_query($getRes,$sqlimgbool);
                    $rowimgbool_val = mysqli_fetch_assoc($qryimgbool_val);

                    //echo $rowcatdata['label']." ".$rowimgbool_val['bool']."<br/>";
                    $pas.='"'.$rowcatdata['label'].'":"'.$rowimgbool_val['bool'].'",';

                }

            }

            $sqlnocat="SELECT label FROM categoriesproperties WHERE category_id!=".$row['category_id'];
            $qrynocatdata=mysqli_query($getRes,$sqlnocat);

            while($rownocatdata=mysqli_fetch_assoc($qrynocatdata)){
            	$passno.='"'.$rownocatdata['label'].'":"-",';
            }

        }

     	$n.= '{
		  "id":"'.$hid_v.'",
		  "label":"'.$rows['label'].'",
		  "description":"'.$rows['description'].'",
		  "price":"'.$rows['price'].'",
		  "catagory":"'.$rows['catlbl'].'",
		  "action":"'.$act_it.'",
		  "default_temp":"'.$rows['template_id'].'",
		  "default_image":"'.$rows['img_path'].'",
		  '.rtrim($pas.$passno,",").'
		},';

	}

	$str='{"data" :['.rtrim($n,",").']}';
	echo $str;

}

function check_table($tablenm,$itemid){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();
	$sql="SELECT * FROM ".$tablenm." WHERE item_id=".$itemid;
	$query=mysqli_query($getRes,$sql);
	if(mysqli_num_rows($query)>0){
		return true;
	}else{
		return false;
	}
}

function insertDupitems($tablenm,$itemid,$oldid){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	if($tablenm=="sptypeimageboolean"){
		$sql="INSERT INTO ".$tablenm." (prop_id,item_id,value,bool) SELECT prop_id,".$itemid.",value,bool FROM ".$tablenm." WHERE item_id=".$oldid;
	}else{
		$sql="INSERT INTO ".$tablenm." (prop_id,item_id,value) SELECT prop_id,".$itemid.",value FROM ".$tablenm." WHERE item_id=".$oldid;
	}



	$query=mysqli_query($getRes,$sql);
	if($query){
		return true;
	}else{
		return false;
	}
}

function duplicateItemData(){

	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$val=$_REQUEST['val'];

	$sql="INSERT INTO items (label,category_id,description,img_path,price,tags,template_id)
	SELECT label,category_id,description,img_path,price,tags,template_id
	FROM items
	WHERE id =".$val;

	$qry=mysqli_query($getRes,$sql);

	if($qry){
	$newitemid=mysqli_insert_id($getRes);

		//check property tables and add new item properties
		if(check_table('sptypetext',$val)){
			insertDupitems('sptypetext',$newitemid,$val);
		}
		if(check_table('sptypenumber',$val)){
			insertDupitems('sptypenumber',$newitemid,$val);
		}
		if(check_table('sptypeimage',$val)){
			insertDupitems('sptypeimage',$newitemid,$val);
		}
		if(check_table('sptypeboolean',$val)){
			insertDupitems('sptypeboolean',$newitemid,$val);
		}
		if(check_table('sptypeimageboolean',$val)){
			insertDupitems('sptypeimageboolean',$newitemid,$val);
		}
		if(check_table('sptypeimagelist',$val)){
			insertDupitems('sptypeimagelist',$newitemid,$val);
		}
		if(check_table('sptypelist',$val)){
			insertDupitems('sptypelist',$newitemid,$val);
		}

	}
}

function feedItemEdit(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$val=$_REQUEST['val'];
	$records=$cons->selectWhere('items','id','=',$val,'int');
	echo json_encode($records);
}

function feedCollectionEdit_pepr(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$val=$_REQUEST['val'];
	$records=$cons->selectWhere('collections','id','=',$val,'int');
	echo json_encode($records);
}

function feedCatagEdit_pepr(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$val=$_REQUEST['val'];
	$records=$cons->selectWhere('categories','id','=',$val,'int');
	echo json_encode($records);
}

function feedTemplsEdit(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$val=$_REQUEST['val'];
	$records=$cons->selectWhere('templates','id','=',$val,'int');
	echo json_encode($records);
}

function feedTemplsEdit_pepr(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$val=$_REQUEST['val'];
	$records=$cons->selectWhere('papertemplates','id','=',$val,'int');
	echo json_encode($records);
}
//Ashok: Function to add multiple items checked to the print list
function multiItemprint(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$jsonstring = stripslashes(str_replace('\"', '"', $_POST['feild']));
  	$feild = json_decode($jsonstring);

  	foreach ($feild as $value) {
		//Ashok: 08-12-2019 same as double click function
	// $records=$cons->selectWhere('items','id','=',$value,'int');

		doubleClickadd($value);
		// date_default_timezone_set('Asia/Kolkata');
		// $date=date('Y-m-d');

			// $label=$records['label'];
			// $description=$records['description'];
			// $price=$records['price'];
			// $img_path=$records['img_path'];
			// $tags=$records['tags'];
			//$default_temp=$records['default_temp'];
			//$scientific_name=$records['scientific_name'];
			//$care_level=$records['care_level'];
			//$size=$records['size'];
			//$original=$records['original'];
			// $added_date=$date;
//Ashok:commented 
			// $data=array(
				// 'label'=>$label,
				// 'description'=>$description,
				// 'price'=>$price,
				// 'image_path'=>$img_path,
				// 'tags'=>$tags,
				// 'default_template'=>$default_temp,
				// 'scientific_name'=>$scientific_name,
				// 'care_level'=>$care_level,
				// 'size'=>$size,
				// 'origin'=>$original,
				// 'NoOfCopy'=>'',
				// 'label_border'=>'',
				// 'image_rect'=>'',
				// 'added_date'=>$added_date
			// );
			
			// $result=$cons->insertData('tblprintqueue', $data);
			// var_dump($result);
	}
	$sql = "SELECT
		items.template_id,
		tblprintqueue.id,
		tblprintqueue.itm_id,
		tblprintqueue.label,
		tblprintqueue.description,
		tblprintqueue.img_path,
		tblprintqueue.price,
		tblprintqueue.tags,
		tblprintqueue.NoOfCopy,
		tblprintqueue.added_date,
		templates.label as tem_lbl
		FROM 
		items 
		INNER JOIN tblprintqueue ON items.id = tblprintqueue.itm_id 
		INNER JOIN templates ON templates.id = items.template_id";

		$result_print=mysqli_query($getRes,$sql) or die("Multi Select Item for Print List Query Error".mysql_error());

		$n="";
		while ($row = mysqli_fetch_assoc($result_print)) {
		  $n.= '{
		  "id":"'.$row['id'].'",
		  "label":"'.json_decode($row['label'])->text.'",
		  "default_template":"'.$row['tem_lbl'].'",
		  "NoOfCopy":"'.$row['NoOfCopy'].'"
		  },';
		}

		$str='{"data" :['.rtrim($n,",").']}';
		//echo $str;
echo 1;
}

function add_col_lbl(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$label=$_REQUEST['val'];

	$user_id=$_SESSION['main']['id'];

	$data=array(
		'label'=>$label,
		'user_id'=>$user_id
	);

	$result=$cons->insertData('collections', $data);

	$templates='SELECT * FROM collections WHERE user_id='.$_SESSION['main']['id'];
    $qry=mysqli_query($getRes,$templates);
    $se='<option value="-1">Select Collection</option>';
    foreach ($qry as $tmp) {
     $se.='<option value="'.$tmp['id'].'">'.$tmp['label'].'</option>';
    }

	echo json_encode($se);
}


function coll_input_edit(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	 $label=$_REQUEST['modal-coll-input-edit'];
	 $id=$_REQUEST['hid_val_edit_lbl'];

	 $data=array(
	 	'label'=>$label
	 );

	$result=$cons->updtData('collections', $data, 'id', '=', $id);
	echo 1;
}

function tmpaddFrom_pepr(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$tlabel=$_REQUEST['tlabel-pepr'];
	$tdescription=$_REQUEST['tdescription-pepr'];
	$twidth=$_REQUEST['twidth-pepr'];
	$theiht=$_REQUEST['theiht-pepr'];
	$bclor=$_REQUEST['bclor-pepr'];
	$ocolor=$_REQUEST['ocolor-pepr'];
	$osize=$_REQUEST['osize-pepr'];

	date_default_timezone_set('Asia/Kolkata');
	$date=date('Y-m-d');

	$type=$_FILES["tmpImage-pepr"]["type"];
    $size=$_FILES["tmpImage-pepr"]["size"];
    $tmpname=$_FILES['tmpImage-pepr']['tmp_name'];
    $name=$_FILES['tmpImage-pepr']['name'];

    $allowed_ext=array(
        'gif',
        'jpg',
        'jpeg',
        'png',
  	);

  	$t = explode('.',basename($_FILES['tmpImage-pepr']['name']));
  	$extt = strtolower(array_pop($t));

  	if (!in_array($extt, $allowed_ext))
	{
	  echo 3;
	}
	else{
		$ext = substr($name,strrpos($name,"."));
    	$new_name = 'paper_templates_'.time().$ext;
    	$folder_path = "../upload_images/paper_templates";
    	$uid=$_SESSION['main']['id'];

    	$data=array(
			'label'=>$tlabel,
			'description'=>$tdescription,
			'user_id'=>$uid,
			'width'=>$twidth,
			'height'=>$theiht,
			'stroke'=>$osize,
			'strokeColor'=>$ocolor,
			'bkgColor'=>$bclor,
			'image'=>$new_name,
			'added_date'=>$date
		);

		$result=$cons->insertData('papertemplates', $data);
		$fpath = $folder_path."/".$new_name;
        move_uploaded_file($tmpname,$fpath);
		echo 1;
	}
}

function tmpaddFrom(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$tlabel=$_REQUEST['tlabel'];
	$tdescription=$_REQUEST['tdescription'];
	$twidth=$_REQUEST['twidth'];
	$theiht=$_REQUEST['theiht'];
	$bclor=$_REQUEST['bclor'];
	$ocolor=$_REQUEST['ocolor'];
	$osize=$_REQUEST['osize'];

	date_default_timezone_set('Asia/Kolkata');
	$date=date('Y-m-d');

	$type=$_FILES["tmpImage"]["type"];
    $size=$_FILES["tmpImage"]["size"];
    $tmpname=$_FILES['tmpImage']['tmp_name'];
    $name=$_FILES['tmpImage']['name'];

    $allowed_ext=array(
        'gif',
        'jpg',
        'jpeg',
        'png',
  	);

  	$t = explode('.',basename($_FILES['tmpImage']['name']));
  	$extt = strtolower(array_pop($t));

  	if (!in_array($extt, $allowed_ext))
	{
	  echo 3;
	}
	else{
		$ext = substr($name,strrpos($name,"."));
    	$new_name = 'templates_'.time().$ext;
    	$folder_path = "../upload_images/templates";
    	$uid=$_SESSION['main']['id'];

    	$data=array(
			'label'=>$tlabel,
			'description'=>$tdescription,
			'user_id'=>$uid,
			'width'=>$twidth,
			'height'=>$theiht,
			'stroke'=>$osize,
			'strokeColor'=>$ocolor,
			'bkgColor'=>$bclor,
			'image'=>$new_name,
			'added_date'=>$date
		);

		$result=$cons->insertData('templates', $data);
		$fpath = $folder_path."/".$new_name;
        move_uploaded_file($tmpname,$fpath);
		echo 1;
	}
}


function deleteTempData(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$val=$_REQUEST['val'];
	$sql="DELETE FROM templates WHERE id=".$val;
	$result=mysqli_query($getRes,$sql) or die("Delete Query Error".mysql_error());

	if($result>0){
		echo 1;
	}
}

function deleteTempData_pepr(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$val=$_REQUEST['val'];
	$sql="DELETE FROM papertemplates WHERE id=".$val;
	$result=mysqli_query($getRes,$sql) or die("Delete Query Error".mysql_error());

	if($result>0){
		echo 1;
	}
}


function deletePrintList(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$val=$_REQUEST['val'];
	$sql="DELETE FROM tblprintqueue WHERE ID=".$val;
	$result=mysqli_query($getRes,$sql) or die("Delete Query Error".mysql_error());

	if($result>0){
		echo 1;
	}
}

function multiPrintdelete(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$jsonstring = stripslashes(str_replace('\"', '"', $_POST['feild']));
  	$feild = json_decode($jsonstring);

  	//var_dump($feild);

  	foreach ($feild as $value) {
		$sql="DELETE FROM tblprintqueue WHERE ID=".$value;
		$result=mysqli_query($getRes,$sql) or die("Delete Query Error".mysql_error());

	}
	echo 1;

}

function multiCollecdelete(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$jsonstring = stripslashes(str_replace('\"', '"', $_REQUEST['feild']));
  	$feild = json_decode($jsonstring);

  	foreach ($feild as $value) {
		$sql="DELETE FROM collections WHERE ID=".$value;
		$result=mysqli_query($getRes,$sql) or die("Delete Query Error".mysql_error());
	}

	$templates='SELECT * FROM collections WHERE user_id='.$_SESSION['main']['id'];
    $qry=mysqli_query($getRes,$templates);
    $se='<option value="-1">Select Collection</option>';
    foreach ($qry as $tmp) {
     $se.='<option value="'.$tmp['id'].'">'.$tmp['label'].'</option>';
    }

	echo json_encode($se);

}

function multiDbitmdelete(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$jsonstring = stripslashes(str_replace('\"', '"', $_POST['feild']));
  	$feild = json_decode($jsonstring);

  	//var_dump($feild);

  	foreach ($feild as $value) {
		$sql="DELETE FROM items WHERE ID=".$value;
		$result=mysqli_query($getRes,$sql) or die("Delete Query Error".mysql_error());

	}
	echo 1;

}

function tmpeditFrom(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$telabel=$_REQUEST['tmplabel'];
	$tedescription=$_REQUEST['tmpdescription'];
	$tewidth=$_REQUEST['tmpwidth'];
	$teheiht=$_REQUEST['tmpheiht'];
	$ebclor=$_REQUEST['tmpbclor'];
	$eocolor=$_REQUEST['tmpocolor'];
	$eosize=$_REQUEST['tmposize'];
	$id=$_REQUEST['eid'];

	if(!empty($_FILES["etmpImage"]['name'])){
		$type=$_FILES["etmpImage"]["type"];
	    $size=$_FILES["etmpImage"]["size"];
	    $tmpname=$_FILES['etmpImage']['tmp_name'];
	    $name=$_FILES['etmpImage']['name'];

	    $allowed_ext=array(
	        'gif',
	        'jpg',
	        'jpeg',
	        'png',
	  	);

	  	$t = explode('.',basename($_FILES['etmpImage']['name']));
  		$extt = strtolower(array_pop($t));

  		if (!in_array($extt, $allowed_ext))
		{
		  echo 3;
		}
		else{
			$ext = substr($name,strrpos($name,"."));
	    	$new_name = 'templates'.time().$ext;
	    	$folder_path = "../upload_images/templates";

	    	$data=array(
				'label'=>$telabel,
				'description'=>$tedescription,
				'width'=>$tewidth,
				'height'=>$teheiht,
				'stroke'=>$eosize,
				'strokeColor'=>$eocolor,
				'bkgColor'=>$ebclor,
				'image'=>$new_name
			);

			$result=$cons->updtData('templates', $data, 'id', '=', $id);
			$fpath = $folder_path."/".$new_name;
	        move_uploaded_file($tmpname,$fpath);
			echo 1;
		}
	}
	else{
		$data=array(
				'label'=>$telabel,
				'description'=>$tedescription,
				'width'=>$tewidth,
				'height'=>$teheiht,
				'stroke'=>$eosize,
				'strokeColor'=>$eocolor,
				'bkgColor'=>$ebclor
		);

		$result=$cons->updtData('templates', $data, 'id', '=', $id);
		echo 1;
	}
}

function tmpeditFrom_pepr(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$telabel=$_REQUEST['tmplabel-pepr'];
	$tedescription=$_REQUEST['tmpdescription-pepr'];
	$tewidth=$_REQUEST['tmpwidth-pepr'];
	$teheiht=$_REQUEST['tmpheiht-pepr'];
	$ebclor=$_REQUEST['tmpbclor-pepr'];
	$eocolor=$_REQUEST['tmpocolor-pepr'];
	$eosize=$_REQUEST['tmposize-pepr'];
	$id=$_REQUEST['eid-pepr'];

	if(!empty($_FILES["tmptmpImage-pepr"]['name'])){
		$type=$_FILES["tmptmpImage-pepr"]["type"];
	    $size=$_FILES["tmptmpImage-pepr"]["size"];
	    $tmpname=$_FILES['tmptmpImage-pepr']['tmp_name'];
	    $name=$_FILES['tmptmpImage-pepr']['name'];

	    $allowed_ext=array(
	        'gif',
	        'jpg',
	        'jpeg',
	        'png',
	  	);

	  	$t = explode('.',basename($_FILES['tmptmpImage-pepr']['name']));
  		$extt = strtolower(array_pop($t));

  		if (!in_array($extt, $allowed_ext))
		{
		  echo 3;
		}
		else{
			$ext = substr($name,strrpos($name,"."));
	    	$new_name = 'templates'.time().$ext;
	    	$folder_path = "../upload_images/templates";

	    	$data=array(
				'label'=>$telabel,
				'description'=>$tedescription,
				'width'=>$tewidth,
				'height'=>$teheiht,
				'stroke'=>$eosize,
				'strokeColor'=>$eocolor,
				'bkgColor'=>$ebclor,
				'image'=>$new_name
			);

			$result=$cons->updtData('papertemplates', $data, 'id', '=', $id);
			$fpath = $folder_path."/".$new_name;
	        move_uploaded_file($tmpname,$fpath);
			echo 1;
		}
	}
	else{
		$data=array(
				'label'=>$telabel,
				'description'=>$tedescription,
				'width'=>$tewidth,
				'height'=>$teheiht,
				'stroke'=>$eosize,
				'strokeColor'=>$eocolor,
				'bkgColor'=>$ebclor
		);

		$result=$cons->updtData('papertemplates', $data, 'id', '=', $id);
		echo 1;
	}
}

function getTeplateSelectbox(){
	 $cons= new Mysql();
     $getRes= $cons-> dbConnect();

     $templates='SELECT * FROM templates GROUP BY label';
     $qry=mysqli_query($getRes,$templates);
     $se='<option value="0">Select Template</option>';
     foreach ($qry as $tmp) {
     	$se.='<option value="'.$tmp['id'].'">'.$tmp['label'].'</option>';
     }

     echo $se;
}

function getSizeSelectbox(){
	 $cons= new Mysql();
     $getRes= $cons-> dbConnect();

     $templates='SELECT * FROM templates GROUP BY width';
     $qry=mysqli_query($getRes,$templates);
     $se='<option value="0">Select Size</option>';
     foreach ($qry as $tmp) {
     	$ss=$tmp['width'].' X '.$tmp['height'];
     	$se.='<option value="'.$ss.'">'.$ss.'</option>';
     }

     echo $se;
}

function getTemPreview(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$telabel=$_REQUEST['val'];
	$nextid=$_REQUEST['nextid'];
	$previd=$_REQUEST['previd'];

	$sql="SELECT
	tblprintqueue.id,
	tblprintqueue.itm_id,
	tblprintqueue.label,
	tblprintqueue.description,
	tblprintqueue.img_path,
	tblprintqueue.img_rect,
	tblprintqueue.img_crop,
	tblprintqueue.price,
	tblprintqueue.tags,
	tblprintqueue.imgdiv,	
	tblprintqueue.NoOfCopy,
	tblprintqueue.added_date,
	templates.width,
	templates.height
	FROM
	tblprintqueue
	INNER JOIN items ON tblprintqueue.itm_id = items.id
	INNER JOIN templates ON items.template_id = templates.id
	WHERE
	tblprintqueue.id=".$telabel;
//tblprintqueue.lblvisible,
	$result=mysqli_query($getRes,$sql) or die("Delete Query Error".mysql_error());
	$row = mysqli_fetch_assoc($result);
	//echo json_encode($row);
	//Ashok: 06/12/2019 Commented foolowing code and uncommented aboveline
	/* next */
	// $sql_next = "SELECT tblprintqueue.id as next_id FROM tblprintqueue WHERE tblprintqueue.id = ( select min( tblprintqueue.id ) from tblprintqueue where tblprintqueue.id > ".$telabel.")";
	// $result_next = mysqli_query( $getRes, $sql_next ) or die("Delete Query Error".mysqli_error());
	// $row_next_count = mysqli_num_rows($result_next); 
	
	// if( $row_next_count == 1 ) {
	// 	$row_next = mysqli_fetch_assoc( $result_next );
	// } else {
	// 	$row_next = array('next_id'=>'');
	// }
	
	// /* prev */
	// $sql_prev = "SELECT tblprintqueue.id as prev_id FROM tblprintqueue where tblprintqueue.id = (select max( tblprintqueue.id ) from tblprintqueue where tblprintqueue.id < ".$telabel.")";
	
	// $result_prev = mysqli_query( $getRes, $sql_prev  ) or die("Delete Query Error".mysqli_error());
	// $row_prev_count = mysqli_num_rows($result_prev);
    // if( $row_prev_count == 1 ) {
	// 	$row_prev = mysqli_fetch_assoc( $result_prev );
	// } else {
	// 	$row_prev = array('prev_id'=>'');
	// }
	
	//Ashok: Added
	if($nextid=='' || isNULL($nextid)=='NULL'){
		$row_next = array('next_id'=>'');
	} else{
		$row_next = array('next_id'=>$nextid);
	}
	if($previd=='' || isNULL($previd)=='NULL'){
		$row_prev = array('prev_id'=>'');
	} else{
		$row_prev = array('prev_id'=>$previd);
	}
	$data_merge = array_merge( $row, $row_next, $row_prev );
	
	echo json_encode( $data_merge );
}

function getAllColpt(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$templates='SELECT * FROM collections WHERE collections.user_id='.$_SESSION['main']['id'];
    $qry=mysqli_query($getRes,$templates);
    $se='<option value="-1">Select Collection</option>';
    foreach ($qry as $tmp) {
     $se.='<option value="'.$tmp['id'].'">'.$tmp['label'].'</option>';
    }

	echo json_encode($se);
}

// function getAllCats(){
// 	$cons= new Mysql();
// 	$getRes= $cons-> dbConnect();

// 	$templates='SELECT * FROM categories';
//     $qry=mysqli_query($getRes,$templates);
//     $se='<option value="-1">Select Catagories</option>';
//     foreach ($qry as $tmp) {
//      $se.='<option value="'.$tmp['id'].'">'.$tmp['label'].'</option>';
//     }

// 	echo json_encode($se);
// }

function add_catag_data(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$val = $_REQUEST['val'];
	$opt = $_REQUEST['opt'];

	$data=array(
		'label'=>$val,
		'collection_id'=>$opt
	);

	$result=$cons->insertData('categories', $data);

	$templates='SELECT * FROM categories';
    $qry=mysqli_query($getRes,$templates);
    $se='<option value="-1">Select Categories</option>';
    foreach ($qry as $tmp) {
     $se.='<option value="'.$tmp['id'].'">'.$tmp['label'].'</option>';
    }
	echo json_encode($se);
}

function edit_catag_data(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$val = $_REQUEST['val'];
	$opt = $_REQUEST['opt'];
	$id = $_REQUEST['id'];

	$data=array(
		'label'=>$val,
		'collection_id'=>$opt
	);

	$result=$cons->updtData('categories', $data, 'id', '=', $id);

	$templates='SELECT * FROM categories';
    $qry=mysqli_query($getRes,$templates);
    $se='<option value="-1">Select Categories</option>';
    foreach ($qry as $tmp) {
     $se.='<option value="'.$tmp['id'].'">'.$tmp['label'].'</option>';
    }

	echo json_encode($se);
}

function deleCatagData(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$val=$_REQUEST['val'];
	$sql="DELETE FROM categories WHERE id=".$val;
	$result=mysqli_query($getRes,$sql) or die("Delete Query Error".mysql_error());

	if($result>0){
		$templates='SELECT * FROM categories';
	    $qry=mysqli_query($getRes,$templates);
	    $se='<option value="-1">Select Categories</option>';
	    foreach ($qry as $tmp) {
	     $se.='<option value="'.$tmp['id'].'">'.$tmp['label'].'</option>';
	    }
		echo json_encode($se);
	}
}

function getadditmCats(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$telabel=$_REQUEST['val'];

	$sql="SELECT * FROM categories WHERE collection_id=".$telabel;
	$qry=mysqli_query($getRes,$sql);
    $se='<option value="-1">Select Categories</option><option value="-11">Select All Items</option>';
    foreach ($qry as $tmp) {
     $se.='<option value="'.$tmp['id'].'">'.$tmp['label'].'</option>';
    }

	echo json_encode($se);
}

//Get Item Properties
function fetchAddItmProperties(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$catid=$_REQUEST['vall'];
	$modeInsert=$_REQUEST['mode'];

	if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit"){
		$item_id=$_REQUEST['itm_id'];
	}
	//get properties
	$sql="SELECT
			categoriesproperties.id,
			categoriesproperties.category_id,
			categoriesproperties.label,
			categoriesproperties.defaultt,
			categoriesproperties.type
			FROM
			categoriesproperties
			WHERE
			categoriesproperties.category_id = ".$catid."
			;";
			$qry=mysqli_query($getRes,$sql);

	$n="";
	$lstj="";
	$lstImj="";

	while($row = mysqli_fetch_assoc($qry)) {
		//Ashok: 06/12/2019 Changed if else to switch case
		switch($row['type']){
			case 'imglist':
				if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit"){
					$item_id=$_REQUEST['itm_id'];
					$getimgitmsql="SELECT * FROM sptypeimagelist WHERE item_id=".$item_id." AND prop_id=".$row['id'];
					$qrygetimgitm=mysqli_query($getRes,$getimgitmsql);
					$getitemval=mysqli_fetch_assoc($qrygetimgitm);
					$imgitm=$getitemval['value'];
				}
	
				$sqllsim="SELECT *
				FROM
				sptypeimagelistitem
				WHERE
				prop_id = ".$row['id']."
				;";
	
				$qrylsim=mysqli_query($getRes,$sqllsim);
				while($rowlsim = mysqli_fetch_assoc($qrylsim)) {
					print_r($rowlsim);
					if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="add"){
						if($row['defaultt']==$rowlsim['id']){
							$lstImj.="upload_images/icon_drp_images/".trim($rowlsim["value"]);
						}
					}else if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit"){
						if(empty($getitemval)){
							if($row['defaultt']==$rowlsim['id']){
								$lstImj.="upload_images/icon_drp_images/".trim($rowlsim["value"]);
							}
						}
	
					}
				}
	
				$n.= '{"id": "'.$row['id'].'","category_id": "'.$row['category_id'].'", "label": "'.$row['label'].'", "defaultt": "'.$lstImj.'", "type": "'.$row['type'].'"},';
				$lstImj="";
			break;

			case'list':
				if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit"){
					$item_id=$_REQUEST['itm_id'];
					$getimgitmsql="SELECT * FROM sptypelist WHERE item_id=".$item_id." AND prop_id=".$row['id'];
					$qrygetimgitm=mysqli_query($getRes,$getimgitmsql);
					$getitemval=mysqli_fetch_assoc($qrygetimgitm);
					$imgitm=$getitemval['value'];
				}
	
				$sqlls="SELECT *
				FROM
				sptypelistitem
				WHERE
				prop_id = ".$row['id']."
				;";
				$qryls=mysqli_query($getRes,$sqlls);
				while($rowls = mysqli_fetch_assoc($qryls)) {
					if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="add"){
						if($row['defaultt']==$rowls['id'])
							$lstj.="<option value='".trim($rowls["id"])."' selected='selected'>".trim($rowls["label"])."</option>";
						else
							$lstj.="<option value='".trim($rowls["id"])."'>".trim($rowls["label"])."</option>";
	
					}else if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit"){
						if(empty($getitemval)){
							if($row['defaultt']==$rowls['id'])
								$lstj.="<option value='".trim($rowls["id"])."' selected='selected'>".trim($rowls["label"])."</option>";
							else
								$lstj.="<option value='".trim($rowls["id"])."'>".trim($rowls["label"])."</option>";
						}else{
							if($imgitm==$rowls['id'])
								$lstj.="<option value='".trim($rowls["id"])."' selected='selected'>".trim($rowls["label"])."</option>";
							else
								$lstj.="<option value='".trim($rowls["id"])."'>".trim($rowls["label"])."</option>";
						}
					}
	
				}
	
				$n.= '{"id": "'.$row['id'].'","category_id": "'.$row['category_id'].'", "label": "'.$row['label'].'", "defaultt": "'.$lstj.'", "type": "'.$row['type'].'"},';
				$lstj="";
			break;
			case 'text':
				if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit")
				{
					$item_id=$_REQUEST['itm_id'];
					$getimgitmsql="SELECT * FROM sptypetext WHERE item_id=".$item_id." AND prop_id=".$row['id'];
					$qrygetimgitm=mysqli_query($getRes,$getimgitmsql);
					$getitemval=mysqli_fetch_assoc($qrygetimgitm);
					if(empty($getitemval)){
						$n.= '{"id": "'.$row['id'].'","category_id": "'.$row['category_id'].'", "label": "'.$row['label'].'", "defaultt": "'.$row['defaultt'].'", "type": "'.$row['type'].'"},';
					}else{
						$imgtxt=$getitemval['value'];
						$n.= '{"id": "'.$row['id'].'","category_id": "'.$row['category_id'].'", "label": "'.$row['label'].'", "defaultt": "'.$imgtxt.'", "type": "'.$row['type'].'"},';
					}
				}
			break;
			case 'img':
				if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit")
				{
					$item_id=$_REQUEST['itm_id'];
					$getimgitmsql="SELECT * FROM sptypeimage WHERE item_id=".$item_id." AND prop_id=".$row['id'];
					$qrygetimgitm=mysqli_query($getRes,$getimgitmsql);
					$getitemval=mysqli_fetch_assoc($qrygetimgitm);
					if(empty($getitemval)){
						$n.= '{"id": "'.$row['id'].'","category_id": "'.$row['category_id'].'", "label": "'.$row['label'].'", "defaultt": "'.$row['defaultt'].'", "type": "'.$row['type'].'"},';
					}else{
						$imgpro=$getitemval['value'];
						$n.= '{"id": "'.$row['id'].'","category_id": "'.$row['category_id'].'", "label": "'.$row['label'].'", "defaultt": "'.$imgpro.'", "type": "'.$row['type'].'"},';
					}
				}
			break;
			case 'number':
				if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit")
				{
					$item_id=$_REQUEST['itm_id'];
								$getimgitmsql="SELECT * FROM sptypenumber WHERE item_id=".$item_id." AND prop_id=".$row['id'];
								$qrygetimgitm=mysqli_query($getRes,$getimgitmsql);
								$getitemval=mysqli_fetch_assoc($qrygetimgitm);
								if(empty($getitemval)){
									$n.= '{"id": "'.$row['id'].'","category_id": "'.$row['category_id'].'", "label": "'.$row['label'].'", "defaultt": "'.$row['defaultt'].'", "type": "'.$row['type'].'"},';
								}else{
									$numpro=$getitemval['value'];
									$n.= '{"id": "'.$row['id'].'","category_id": "'.$row['category_id'].'", "label": "'.$row['label'].'", "defaultt": "'.$numpro.'", "type": "'.$row['type'].'"},';
								}
				}
			break;
			case 'bool':
				if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit")
				{
					$item_id=$_REQUEST['itm_id'];
								$getimgitmsql="SELECT * FROM sptypeboolean WHERE item_id=".$item_id." AND prop_id=".$row['id'];
								$qrygetimgitm=mysqli_query($getRes,$getimgitmsql);
								$getitemval=mysqli_fetch_assoc($qrygetimgitm);
								if(empty($getitemval)){
									$n.= '{"id": "'.$row['id'].'","category_id": "'.$row['category_id'].'", "label": "'.$row['label'].'", "defaultt": "'.$row['defaultt'].'", "type": "'.$row['type'].'"},';
								}else{
									$boolpro=$getitemval['value'];
									$n.= '{"id": "'.$row['id'].'","category_id": "'.$row['category_id'].'", "label": "'.$row['label'].'", "defaultt": "'.$boolpro.'", "type": "'.$row['type'].'"},';
								}
				}
			break;
			case 'imgbool':
				if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit")
				{
					$item_id=$_REQUEST['itm_id'];
								$getimgitmsql="SELECT * FROM sptypeimageboolean WHERE item_id=".$item_id." AND prop_id=".$row['id'];
								$qrygetimgitm=mysqli_query($getRes,$getimgitmsql);
								$getitemval=mysqli_fetch_assoc($qrygetimgitm);
								if(empty($getitemval)){
									$n.= '{"id": "'.$row['id'].'","category_id": "'.$row['category_id'].'", "label": "'.$row['label'].'", "defaultt": "'.$row['defaultt'].'", "type": "'.$row['type'].'"}, "bool": "'.$row['bool'].'"},';
								}else{
									$imgboolpro=$getitemval['value'];
									$n.= '{"id": "'.$row['id'].'","category_id": "'.$row['category_id'].'", "label": "'.$row['label'].'", "defaultt": "'.$imgboolpro.'", "type": "'.$row['type'].'", "bool": "'.$getitemval['bool'].'"},';
								}

				}
			break;
			default:
			if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="add"){
				$n.= '{"id": "'.$row['id'].'","category_id": "'.$row['category_id'].'", "label": "'.$row['label'].'", "defaultt": "'.$row['defaultt'].'", "type": "'.$row['type'].'"},';

			}
		break;
		}
	}

	$str='{"datal" :['.rtrim($n,",").']}';	
	echo $str;
	//{"data2" :[{"text":"10","x":80,"isVisible":true,"y":100,"value_id":1,"backgroundColor":16777215,"textAlign":"left","prop_id":154,"prop_type":"number","isPrefix":false,"textColor":0,"fontID":0,"textSize":14,"height":25.8,"backgroundAlpha":0.8,"item_id":36,"width":48.65,"align":0}]}
}
//comm
function getAddItmProperties(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$catid=$_REQUEST['vall'];
	$modeInsert=$_REQUEST['mode'];

	if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit"){
		$item_id=$_REQUEST['itm_id'];
	}
	//get properties
	$sql="SELECT
			categoriesproperties.id,
			categoriesproperties.category_id,
			categoriesproperties.label,
			categoriesproperties.defaultt,
			categoriesproperties.type
			FROM
			categoriesproperties
			WHERE
			categoriesproperties.category_id = ".$catid."
			;";
			$qry=mysqli_query($getRes,$sql);

	$n="";
	$lstj="";
	$lstImj="";

	while($row = mysqli_fetch_assoc($qry)) {
		//Ashok: Changed if else to switch case
		switch($row['type']){
			case 'imglist':
				if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit"){
					$item_id=$_REQUEST['itm_id'];
					$getimgitmsql="SELECT * FROM sptypeimagelist WHERE item_id=".$item_id." AND prop_id=".$row['id'];
					$qrygetimgitm=mysqli_query($getRes,$getimgitmsql);
					$getitemval=mysqli_fetch_assoc($qrygetimgitm);
					$imgitm=$getitemval['value'];
				}
	
				$sqllsim="SELECT *
				FROM
				sptypeimagelistitem
				WHERE
				prop_id = ".$row['id']."
				;";
	
				$qrylsim=mysqli_query($getRes,$sqllsim);
				while($rowlsim = mysqli_fetch_assoc($qrylsim)) {
					if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="add"){
						if($row['defaultt']==$rowlsim['id']){
						$lstImj.="<option value='".trim($rowlsim["id"])."' selected='selected' data-image='upload_images/icon_drp_images/".trim($rowlsim["value"])."'>".trim($rowlsim['label'])."</option>";
						}else{
							$lstImj.="<option value='".trim($rowlsim["id"])."' data-image='upload_images/icon_drp_images/".trim($rowlsim["value"])."'>".trim($rowlsim['label'])."</option>";
						}
					}else if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit"){
						if(empty($getitemval)){
							if($row['defaultt']==$rowlsim['id']){
								$lstImj.="<option value='".trim($rowlsim["id"])."' selected='selected' data-image='upload_images/icon_drp_images/".trim($rowlsim["value"])."'>".trim($rowlsim['label'])."</option>";
							}else{
								$lstImj.="<option value='".trim($rowlsim["id"])."' data-image='upload_images/icon_drp_images/".trim($rowlsim["value"])."'>".trim($rowlsim['label'])."</option>";
							}
						}else{
							if($imgitm==$rowlsim['id']){
								$lstImj.="<option value='".trim($rowlsim["id"])."' selected='selected' data-image='upload_images/icon_drp_images/".trim($rowlsim["value"])."'>".trim($rowlsim['label'])."</option>";
							}else{
								$lstImj.="<option value='".trim($rowlsim["id"])."' data-image='upload_images/icon_drp_images/".trim($rowlsim["value"])."'>".trim($rowlsim['label'])."</option>";
							}
						}
	
					}
				}
	
				$n.= '{"id": "'.$row['id'].'","category_id": "'.$row['category_id'].'", "label": "'.$row['label'].'", "defaultt": "'.$lstImj.'", "type": "'.$row['type'].'"},';
				$lstImj="";
			break;

			case'list':
				if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit"){
					$item_id=$_REQUEST['itm_id'];
					$getimgitmsql="SELECT * FROM sptypelist WHERE item_id=".$item_id." AND prop_id=".$row['id'];
					$qrygetimgitm=mysqli_query($getRes,$getimgitmsql);
					$getitemval=mysqli_fetch_assoc($qrygetimgitm);
					$imgitm=$getitemval['value'];
				}
	
				$sqlls="SELECT *
				FROM
				sptypelistitem
				WHERE
				prop_id = ".$row['id']."
				;";
				$qryls=mysqli_query($getRes,$sqlls);
				while($rowls = mysqli_fetch_assoc($qryls)) {
					if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="add"){
						if($row['defaultt']==$rowls['id'])
							$lstj.="<option value='".trim($rowls["id"])."' selected='selected'>".trim($rowls["label"])."</option>";
						else
							$lstj.="<option value='".trim($rowls["id"])."'>".trim($rowls["label"])."</option>";
	
					}else if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit"){
						if(empty($getitemval)){
							if($row['defaultt']==$rowls['id'])
								$lstj.="<option value='".trim($rowls["id"])."' selected='selected'>".trim($rowls["label"])."</option>";
							else
								$lstj.="<option value='".trim($rowls["id"])."'>".trim($rowls["label"])."</option>";
						}else{
							if($imgitm==$rowls['id'])
								$lstj.="<option value='".trim($rowls["id"])."' selected='selected'>".trim($rowls["label"])."</option>";
							else
								$lstj.="<option value='".trim($rowls["id"])."'>".trim($rowls["label"])."</option>";
						}
					}
	
				}
	
				$n.= '{"id": "'.$row['id'].'","category_id": "'.$row['category_id'].'", "label": "'.$row['label'].'", "defaultt": "'.$lstj.'", "type": "'.$row['type'].'"},';
				$lstj="";
			break;
			case 'text':
				if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit")
				{
					$item_id=$_REQUEST['itm_id'];
					$getimgitmsql="SELECT * FROM sptypetext WHERE item_id=".$item_id." AND prop_id=".$row['id'];
					$qrygetimgitm=mysqli_query($getRes,$getimgitmsql);
					$getitemval=mysqli_fetch_assoc($qrygetimgitm);
					if(empty($getitemval)){
						$n.= '{"id": "'.$row['id'].'","category_id": "'.$row['category_id'].'", "label": "'.$row['label'].'", "defaultt": "'.$row['defaultt'].'", "type": "'.$row['type'].'"},';
					}else{
						$imgtxt=$getitemval['value'];
						$n.= '{"id": "'.$row['id'].'","category_id": "'.$row['category_id'].'", "label": "'.$row['label'].'", "defaultt": "'.$imgtxt.'", "type": "'.$row['type'].'"},';
					}
				}
			break;
			case 'img':
				if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit")
				{
					$item_id=$_REQUEST['itm_id'];
					$getimgitmsql="SELECT * FROM sptypeimage WHERE item_id=".$item_id." AND prop_id=".$row['id'];
					$qrygetimgitm=mysqli_query($getRes,$getimgitmsql);
					$getitemval=mysqli_fetch_assoc($qrygetimgitm);
					if(empty($getitemval)){
						$n.= '{"id": "'.$row['id'].'","category_id": "'.$row['category_id'].'", "label": "'.$row['label'].'", "defaultt": "'.$row['defaultt'].'", "type": "'.$row['type'].'"},';
					}else{
						$imgpro=$getitemval['value'];
						$n.= '{"id": "'.$row['id'].'","category_id": "'.$row['category_id'].'", "label": "'.$row['label'].'", "defaultt": "'.$imgpro.'", "type": "'.$row['type'].'"},';
					}
				}
			break;
			case 'number':
				if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit")
				{
					$item_id=$_REQUEST['itm_id'];
								$getimgitmsql="SELECT * FROM sptypenumber WHERE item_id=".$item_id." AND prop_id=".$row['id'];
								$qrygetimgitm=mysqli_query($getRes,$getimgitmsql);
								$getitemval=mysqli_fetch_assoc($qrygetimgitm);
								if(empty($getitemval)){
									$n.= '{"id": "'.$row['id'].'","category_id": "'.$row['category_id'].'", "label": "'.$row['label'].'", "defaultt": "'.$row['defaultt'].'", "type": "'.$row['type'].'"},';
								}else{
									$numpro=$getitemval['value'];
									$n.= '{"id": "'.$row['id'].'","category_id": "'.$row['category_id'].'", "label": "'.$row['label'].'", "defaultt": "'.$numpro.'", "type": "'.$row['type'].'"},';
								}
				}
			break;
			case 'bool':
				if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit")
				{
					$item_id=$_REQUEST['itm_id'];
								$getimgitmsql="SELECT * FROM sptypeboolean WHERE item_id=".$item_id." AND prop_id=".$row['id'];
								$qrygetimgitm=mysqli_query($getRes,$getimgitmsql);
								$getitemval=mysqli_fetch_assoc($qrygetimgitm);
								if(empty($getitemval)){
									$n.= '{"id": "'.$row['id'].'","category_id": "'.$row['category_id'].'", "label": "'.$row['label'].'", "defaultt": "'.$row['defaultt'].'", "type": "'.$row['type'].'"},';
								}else{
									$boolpro=$getitemval['value'];
									$n.= '{"id": "'.$row['id'].'","category_id": "'.$row['category_id'].'", "label": "'.$row['label'].'", "defaultt": "'.$boolpro.'", "type": "'.$row['type'].'"},';
								}
				}
			break;
			case 'imgbool':
				if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="edit")
				{
					$item_id=$_REQUEST['itm_id'];
								$getimgitmsql="SELECT * FROM sptypeimageboolean WHERE item_id=".$item_id." AND prop_id=".$row['id'];
								$qrygetimgitm=mysqli_query($getRes,$getimgitmsql);
								$getitemval=mysqli_fetch_assoc($qrygetimgitm);
								if(empty($getitemval)){
									$n.= '{"id": "'.$row['id'].'","category_id": "'.$row['category_id'].'", "label": "'.$row['label'].'", "defaultt": "'.$row['defaultt'].'", "type": "'.$row['type'].'"}, "bool": "'.$row['bool'].'"},';
								}else{
									$imgboolpro=$getitemval['value'];
									$n.= '{"id": "'.$row['id'].'","category_id": "'.$row['category_id'].'", "label": "'.$row['label'].'", "defaultt": "'.$imgboolpro.'", "type": "'.$row['type'].'", "bool": "'.$getitemval['bool'].'"},';
								}

				}
			break;
			default:
			if(isset($_REQUEST['mode']) && $_REQUEST['mode']=="add"){
				$n.= '{"id": "'.$row['id'].'","category_id": "'.$row['category_id'].'", "label": "'.$row['label'].'", "defaultt": "'.$row['defaultt'].'", "type": "'.$row['type'].'"},';

			}
		break;
		}
		

	}

	$str='{"datal" :['.rtrim($n,",").']}';
	echo $str;
}

function getCatDataSetProp(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$telabel=$_REQUEST['val'];

	$sql="SELECT * FROM categories WHERE id=".$telabel;
	$qry=mysqli_query($getRes,$sql);
    $row = mysqli_fetch_assoc($qry);
	echo json_encode($row);
}

function add_catag_proptyp(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$drp=$_REQUEST['drp-opt'];
	$lbl=$_REQUEST['lbl-txt'];
	$cat=$_REQUEST['cat-id'];

	if($drp=="list"){
		 $list_itm_arr=$_REQUEST['list-data-itm'];
		 $lst=$_REQUEST['lst'];

		$data=array(
			'category_id'=>$cat,
			'label'=>$lbl,
			'type'=>$drp
		);

		$result=$cons->insertData('categoriesproperties', $data);

		if($result){
			foreach($list_itm_arr as $key=>$val){
				if($key==$lst){
					$data=array(
						'label'=>$val,
						'prop_id'=>$result
					);
					$result_itm=$cons->insertData('sptypelistitem', $data);

					//Default Value Set
					$data=array(
						'defaultt'=>$result_itm
					);
	 				$cons->updtData('categoriesproperties', $data, 'id', '=', $result);
				}else{

					//Add List Items
					$data=array(
						'label'=>$val,
						'prop_id'=>$result
					);
					$result_itm=$cons->insertData('sptypelistitem', $data);
				}

			}
			$cons-> setItemTsess('updateItem',1);
			echo 1;
		}

	}else if($drp=="img"){

		if ($_FILES['file-optadd']['size'] != 0){

			$type=$_FILES["file-optadd"]["type"];
		    $size=$_FILES["file-optadd"]["size"];
		    $tmpname=$_FILES['file-optadd']['tmp_name'];
		    $name=$_FILES['file-optadd']['name'];

		  	//$t = explode('.',basename($_FILES['chk-file-icochk']['name']));
		  	//$extt = strtolower(array_pop($t));
			$ext = substr($name,strrpos($name,"."));
		    //$new_name = 'chkitem_'.time().$ext;
		    $new_name = 'imgtyp_'.rand(0,microtime(true)).md5(time()).$ext;
		    $folder_path = "../upload_images/image_type";
			$fpath = $folder_path."/".$new_name;

			$data=array(
				'category_id'=>$cat,
				'label'=>$lbl,
				'defaultt'=>$new_name,
				'type'=>$drp
			);

			$result=$cons->insertData('categoriesproperties', $data);
			if($result){
				move_uploaded_file($tmpname,$fpath);
				$cons-> setItemTsess('updateItem',1);
		    	echo 1;
			}

		}

	}else if($drp=="text" || $drp=="number"){

		if($drp=="text"){
			$txt=$_REQUEST['txt'];

			$data=array(
				'category_id'=>$cat,
				'label'=>$lbl,
				'defaultt'=>$txt,
				'type'=>$drp
			);

			$result=$cons->insertData('categoriesproperties', $data);
			$cons-> setItemTsess('updateItem',1);
			echo 1;

		}if($drp=="number"){
			$number=$_REQUEST['num'];

			$data=array(
				'category_id'=>$cat,
				'label'=>$lbl,
				'defaultt'=>$number,
				'type'=>$drp
			);

			$result=$cons->insertData('categoriesproperties', $data);
			$cons-> setItemTsess('updateItem',1);
			echo 1;

		}
		// else if($drp=="img"){



		// }
	}else if($drp=="bool"){

		$def="";
		if(isset($_REQUEST['bool-chk'])){
			$def=1;
		}else{
			$def=0;
		}

		$data=array(
			'category_id'=>$cat,
			'label'=>$lbl,
			'defaultt'=>$def,
			'type'=>$drp
		);

		$result=$cons->insertData('categoriesproperties', $data);
		$cons-> setItemTsess('updateItem',1);
		echo 1;

	}else if($drp=="imgbool"){

		if ($_FILES['chk-file-icochk']['size'] != 0){

			$type=$_FILES["chk-file-icochk"]["type"];
		    $size=$_FILES["chk-file-icochk"]["size"];
		    $tmpname=$_FILES['chk-file-icochk']['tmp_name'];
		    $name=$_FILES['chk-file-icochk']['name'];

		  	//$t = explode('.',basename($_FILES['chk-file-icochk']['name']));
		  	//$extt = strtolower(array_pop($t));
			$ext = substr($name,strrpos($name,"."));
		    //$new_name = 'chkitem_'.time().$ext;
		    $new_name = 'chkitem_'.rand(0,microtime(true)).md5(time()).$ext;
		    $folder_path = "../upload_images/icon_chk_box";
			$fpath = $folder_path."/".$new_name;

			$data=array(
				'category_id'=>$cat,
				'label'=>$lbl,
				'defaultt'=>$new_name,
				'type'=>$drp
			);

			$result=$cons->insertData('categoriesproperties', $data);
			if($result){
				move_uploaded_file($tmpname,$fpath);
				$cons-> setItemTsess('updateItem',1);
		    	echo 1;
			}

		}

	}else if($drp=="imglist"){

		$cat_def=$_REQUEST['img-lst'];

		$data=array(
			'category_id'=>$cat,
			'label'=>$lbl,
			'defaultt'=>"",
			'type'=>$drp
		);

		$results=$cons->insertData('categoriesproperties', $data);

		if(isset($_POST["drp-txtbx-new"])){

			$number = count($_POST["drp-txtbx-new"]);

			if($number >= 1){
				foreach ($_POST["drp-txtbx-new"] as $key => $value){
					$autid= $key;
					$bxid= $value;

					if ($_FILES['icodrp-file-new']['size'][$autid] != 0){//image set

						$type=$_FILES["icodrp-file-new"]["type"][$autid];
					    $size=$_FILES["icodrp-file-new"]["size"][$autid];
					    $tmpname=$_FILES['icodrp-file-new']['tmp_name'][$autid];
					    $name=$_FILES['icodrp-file-new']['name'][$autid];

					  	//$t = explode('.',basename($_FILES['icodrp-file-new']['name'][$autid]));
					  	//$extt = strtolower(array_pop($t));
						$ext = substr($name,strrpos($name,"."));
						$new_name = 'lstitem_'.rand(0,microtime(true)).md5(time()+$autid).$ext;
					    //$new_name = 'lstitem_'.time().$ext;
					    $folder_path = "../upload_images/icon_drp_images";
						$fpath = $folder_path."/".$new_name;

						if($autid==$cat_def){
							$data=array(
								'label'=>$bxid,
								'prop_id'=>$results,
								'value'=>$new_name
							);
							$resultD=$cons->insertData('sptypeimagelistitem', $data);

							//Default Value Set
							$data=array(
								'defaultt'=>$resultD
							);
			 				$cons->updtData('categoriesproperties', $data, 'id', '=', $results);

	 					}else{
							$data=array(
								'label'=>$bxid,
								'prop_id'=>$results,
								'value'=>$new_name
							);
							$result=$cons->insertData('sptypeimagelistitem', $data);
	 					}

					    move_uploaded_file($tmpname,$fpath);
					    //echo 1;

					}else{ //No image set

						if($autid==$cat_def){
							$data=array(
								'label'=>$bxid,
								'prop_id'=>$results,
								'value'=>'a.png'
							);

							$resultD=$cons->insertData('sptypeimagelistitem', $data);

							//Default Value Set
							$data=array(
								'defaultt'=>$resultD
							);
			 				$cons->updtData('categoriesproperties', $data, 'id', '=', $results);

	 					}else{
							$data=array(
								'label'=>$bxid,
								'prop_id'=>$results,
								'value'=>'a.png'
							);
							$result=$cons->insertData('sptypeimagelistitem', $data);
	 					}

					}
				}
				$cons-> setItemTsess('updateItem',1);
				echo 1;
			}
		}
	}

	// if($drp=="list"){1966

	// 	$add=$_REQUEST['add'];
	// 	$chldmodal=$_REQUEST['chldmodal'];
	// 	$cat_id=$_REQUEST['cat_id'];

	// 	$data=array(
	// 		'category_id'=>$cat_id,
	// 		'label'=>$add,
	// 		'defaultt'=>$chldmodal,
	// 		'type'=>$drp
	// 	);

	// 	$result=$cons->insertData('categoriesproperties', $data);
	// 	//if not default value empty
	// 	if(!empty($chldmodal)){

	// 		if($result){
	// 			$data=array(
	// 				'label'=>$add,
	// 				'prop_id'=>$result
	// 			);
	// 			$result_itm=$cons->insertData('sptypelistitem', $data);
	// 			if($result_itm){
	// 				$data=array(
	// 					'defaultt'=>$result_itm
	// 				);
	// 				$result_upd=$cons->updtData('categoriesproperties', $data, 'id', '=', $result);
	// 				echo 1;
	// 			}
	// 		}

	// 	}else{
	// 		if($result){
	// 			$data=array(
	// 				'label'=>"Not Set",
	// 				'prop_id'=>$result
	// 			);
	// 			$result_itm=$cons->insertData('sptypelistitem', $data);
	// 			echo 1;
	// 		}
	// 	}


	// }else if($drp=="imglist"){

	// 	$add=$_REQUEST['add'];
	// 	$chldmodal=$_REQUEST['chldmodal'];
	// 	$cat_id=$_REQUEST['cat_id'];

	// 	$data=array(
	// 		'category_id'=>$cat_id,
	// 		'label'=>$add,
	// 		'defaultt'=>$chldmodal,
	// 		'type'=>$drp
	// 	);

	// 	$result=$cons->insertData('categoriesproperties', $data);

	// 	if(!empty($chldmodal)){

	// 		if($result){
	// 			$data=array(
	// 				'label'=>$chldmodal,
	// 				'prop_id'=>$result,
	// 				'value'=>'a.png'
	// 			);
	// 			$result_itm=$cons->insertData('sptypeimagelistitem', $data);
	// 			if($result_itm){
	// 				$data=array(
	// 					'defaultt'=>$result_itm
	// 				);
	// 				$result_upd=$cons->updtData('categoriesproperties', $data, 'id', '=', $result);
	// 				echo 1;
	// 			}
	// 		}

	// 	}else{
	// 		if($result){
	// 			$data=array(
	// 				'label'=>"Not Set",
	// 				'prop_id'=>$result,
	// 				'value'=>'a.png'
	// 			);
	// 			$result_itm=$cons->insertData('sptypeimagelistitem', $data);
	// 			echo 1;
	// 		}
	// 	}
	// }else{
	// 	$add=$_REQUEST['add'];
	// 	$chldmodal=$_REQUEST['chldmodal'];
	// 	$cat_id=$_REQUEST['cat_id'];

	// 	$data=array(
	// 		'category_id'=>$cat_id,
	// 		'label'=>$add,
	// 		'defaultt'=>$chldmodal,
	// 		'type'=>$drp
	// 	);

	// 	$result=$cons->insertData('categoriesproperties', $data);
	// 	echo 1;
	// }
}

function getCatDataPropOpts(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$telabel=$_REQUEST['val'];

	$sql="SELECT * FROM categoriesproperties WHERE category_id=".$telabel;
	$qry=mysqli_query($getRes,$sql);

	$n="";
	while($row = mysqli_fetch_assoc($qry)) {
		$n.= '{"id": "'.$row['id'].'","category_id": "'.$row['category_id'].'", "label": "'.$row['label'].'", "defaultt": "'.$row['defaultt'].'", "type": "'.$row['type'].'"},';
	}

	$str='{"datas" :['.rtrim($n,",").']}';
	echo $str;

}

function delCatDataPropOpts(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$telabel=$_REQUEST['val'];
	$op=$_REQUEST['op'];

	//delete list property as well as option values
	if($op=='list'){
		$sql="DELETE FROM categoriesproperties WHERE id=".$telabel;
		$result=mysqli_query($getRes,$sql) or die("Delete Query Error".mysqli_error());

		if($result>0){
			$sqlt="DELETE FROM sptypelistitem WHERE prop_id=".$telabel;
			$resultt=mysqli_query($getRes,$sqlt) or die("Delete Query Error".mysqli_error());
		}
		echo 1;
	}else if($op=='imglist'){
		$sql="DELETE FROM categoriesproperties WHERE id=".$telabel;
		$result=mysqli_query($getRes,$sql) or die("Delete Query Error".mysqli_error());

		if($result>0){
			$sqlt="DELETE FROM sptypeimagelistitem WHERE prop_id=".$telabel;
			$resultt=mysqli_query($getRes,$sqlt) or die("Delete Query Error".mysqli_error());
		}
		echo 1;
	}else{
		$sql="DELETE FROM categoriesproperties WHERE id=".$telabel;
		$result=mysqli_query($getRes,$sql) or die("Delete Query Error".mysqli_error());

		if($result>0){
			echo 1;
		}
	}
}

function getCatDataEditProp(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$telabel=$_REQUEST['val'];

	$sql = "SELECT * FROM categoriesproperties WHERE id=".$telabel;
	$qry = mysqli_query($getRes,$sql);
    $row = mysqli_fetch_assoc($qry);

    if($row['type']=='list'){

    		$sqls="SELECT
			sptypelistitem.id as spids,
			sptypelistitem.label as splbl,
			categoriesproperties.type as type,
			categoriesproperties.label as proplbl,
			categoriesproperties.id as catproid,
			categoriesproperties.defaultt as defa
			FROM
			categoriesproperties
			INNER JOIN sptypelistitem ON categoriesproperties.id = sptypelistitem.prop_id
			WHERE
			categoriesproperties.id = ".$telabel."
			ORDER BY
			sptypelistitem.id ASC;";

			$qrys=mysqli_query($getRes,$sqls);

    		$n="";
			while($rows = mysqli_fetch_assoc($qrys)) {
				$n.= '{"spids": "'.$rows['spids'].'","splbl": "'.$rows['splbl'].'", "type": "'.$rows['type'].'", "proplbl": "'.$rows['proplbl'].'", "catproid": "'.$rows['catproid'].'", "defa": "'.$rows['defa'].'"},';
			}

			$str='{"datas" :['.rtrim($n,",").']}';
			echo $str;

    }else{
    	$sql="SELECT * FROM categoriesproperties WHERE id=".$telabel;
		$qry=mysqli_query($getRes,$sql);
    	$row = mysqli_fetch_assoc($qry);
		echo json_encode($row);
    }
}

function getCatDataEditlstitm(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$telabel=$_REQUEST['val'];

	$sqls="SELECT
	sptypeimagelistitem.id as spids,
	sptypeimagelistitem.label as splbl,
	categoriesproperties.type as type,
	categoriesproperties.label as proplbl,
	categoriesproperties.id as catproid,
	categoriesproperties.defaultt as defv,
	sptypeimagelistitem.value as imgpath
	FROM
	categoriesproperties
	INNER JOIN sptypeimagelistitem ON categoriesproperties.id = sptypeimagelistitem.prop_id
	WHERE
	categoriesproperties.id = ".$telabel."
	ORDER BY
	sptypeimagelistitem.id ASC;";

	$qrys=mysqli_query($getRes,$sqls);

	$n="";
	while($rows = mysqli_fetch_assoc($qrys)) {
		$n.= '{"spids": "'.$rows['spids'].'","splbl": "'.$rows['splbl'].'", "type": "'.$rows['type'].'", "proplbl": "'.$rows['proplbl'].'", "catproid": "'.$rows['catproid'].'", "defv": "'.$rows['defv'].'", "imgpath": "'.$rows['imgpath'].'"},';
	}

	$str='{"datas" :['.rtrim($n,",").']}';
	echo $str;
}

function updtOptedititmse(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$hid_id=$_REQUEST['hid_id'];
	$lbl_v=$_REQUEST['lbl_v'];
	if($_REQUEST['typ_v']=="text" || $_REQUEST['typ_v']=="number"){

		$def_v=$_REQUEST['def_v'];

		$data=array(
			'label'=>$lbl_v,
			'defaultt'=>$def_v
		);

		$result=$cons->updtData('categoriesproperties', $data, 'id', '=', $hid_id);
		$cons-> setItemTsess('updateItem',1);
		echo 1;

	}else if($_REQUEST['typ_v']=="img"){

		if ($_FILES['file-opt']['size'] != 0){

			$type=$_FILES["file-opt"]["type"];
		    $size=$_FILES["file-opt"]["size"];
		    $tmpname=$_FILES['file-opt']['tmp_name'];
		    $name=$_FILES['file-opt']['name'];

		  	//$t = explode('.',basename($_FILES['chk-file-icochk']['name']));
		  	//$extt = strtolower(array_pop($t));
			$ext = substr($name,strrpos($name,"."));
		    //$new_name = 'chkitem_'.time().$ext;
		    $new_name = 'imgtyp_'.rand(0,microtime(true)).md5(time()).$ext;
		    $folder_path = "../upload_images/image_type";
			$fpath = $folder_path."/".$new_name;

			$data=array(
				'label'=>$lbl_v,
				'defaultt'=>$new_name
			);

			$result=$cons->updtData('categoriesproperties', $data, 'id', '=', $hid_id);
			if($result){
				move_uploaded_file($tmpname,$fpath);
				$cons-> setItemTsess('updateItem',1);
		    	echo 1;
			}

		}else{
			$data=array(
				'label'=>$lbl_v
			);

			$result=$cons->updtData('categoriesproperties', $data, 'id', '=', $hid_id);
			if($result){
				$cons-> setItemTsess('updateItem',1);
		    	echo 1;
			}
		}

	}else if($_REQUEST['typ_v']=="bool"){

		$def_v=$_REQUEST['def_v'];
		$def="";
		if(isset($_REQUEST['bool-chk'])){
			$def=1;
		}else{
			$def=0;
		}

		$data=array(
			'label'=>$lbl_v,
			'defaultt'=>$def_v
		);

		$result=$cons->updtData('categoriesproperties', $data, 'id', '=', $hid_id);
		$cons-> setItemTsess('updateItem',1);
		echo 1;
	}
}

function setListItems(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$arr=$_POST['list-data-exis'];
	$catagory_id=$_POST['prop-chlddbmodel-listitm-hid'];
	$catlbl=$_POST['pcatmodal-lbl-input-edit-add-listitm'];
	$opt_edit_lst=$_POST['opt-edit-lst'];

	$datad=array(
		'label'=>$catlbl
	);

	$result=$cons->updtData('categoriesproperties', $datad, 'id', '=', $catagory_id);

	foreach ($arr as $key => $value){
		if($key==$opt_edit_lst){
			$data=array(
				'label'=>$value
			);
			$results=$cons->updtData('sptypelistitem', $data, 'id', '=', $key);

			//Default Value Set
			$datas=array(
				'defaultt'=>$key
			);
			$cons->updtData('categoriesproperties', $datas, 'id', '=', $catagory_id);
		}else{
			$data=array(
				'label'=>$value
			);
			$result=$cons->updtData('sptypelistitem', $data, 'id', '=', $key);
		}
	}

	if(isset($_POST['list-data-itm'])){
		$arrnew=$_POST['list-data-itm'];
		foreach($arrnew as $key=>$value){
			if($key==$opt_edit_lst){
				$data=array(
					'label'=>$value,
					'prop_id'=>$catagory_id
				);
				$result=$cons->insertData('sptypelistitem', $data);

				//Default Value Set
				$datas=array(
					'defaultt'=>$result
				);
				$cons->updtData('categoriesproperties', $datas, 'id', '=', $catagory_id);

			}else{
				$data=array(
					'label'=>$value,
					'prop_id'=>$catagory_id
				);
				$result=$cons->insertData('sptypelistitem', $data);
			}
		}
	}

}

function remoCatopts(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$val= $_REQUEST['val'];
	$sql="DELETE FROM sptypelistitem WHERE id=".$val;
	$result=mysqli_query($getRes,$sql) or die("Delete Query Error".mysql_error());

	if($result>0){
		echo 1;
	}
}

function saveIcoDropdn(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	//update Llabel
	$lblv=$_REQUEST['pcatmodal-lbl-input-edit-add-icodrp'];
	$catid=$_REQUEST['prop-chlddbmodel-icodrp-hid'];
	$deff=$_REQUEST['chldmodal-lbl-input-edit-icodrp-select'];

	$arrl=array(
		"label"=>$lblv,
		"defaultt"=>$deff
	);

	$result=$cons->updtData('categoriesproperties', $arrl, 'id', '=', $catid);

	//new items adding
	if(isset($_POST["drp-txtbx"])){

		$deff=$_REQUEST['chldmodal-lbl-input-edit-icodrp-select'];
		$lblv=$_REQUEST['pcatmodal-lbl-input-edit-add-icodrp'];
		$catid=$_REQUEST['prop-chlddbmodel-icodrp-hid'];
		$update = count($_POST["drp-txtbx"]);

		if($update >= 1){

			foreach ($_POST["drp-txtbx"] as $key => $value){
				$catidU= $key;
				$txtbxv= $value;

				$arrU=array(
					"label"=>$txtbxv
				);

				$result=$cons->updtData('sptypeimagelistitem', $arrU, 'id', '=', $catidU);

				if($key==$deff){
					$arrl=array(
						"defaultt"=>$key
					);

					$cons->updtData('categoriesproperties', $arrl, 'id', '=', $catid);
				}

				if ($_FILES['icodrp-file']['size'][$key] != 0){

					$type=$_FILES["icodrp-file"]["type"][$key];
				    $size=$_FILES["icodrp-file"]["size"][$key];
				    $tmpname=$_FILES['icodrp-file']['tmp_name'][$key];
				    $name=$_FILES['icodrp-file']['name'][$key];

				  	//$t = explode('.',basename($_FILES['icodrp-file']['name'][$key]));
				  	//$extt = strtolower(array_pop($t));
					$ext = substr($name,strrpos($name,"."));
					$new_name = 'lstitem_'.rand(0,microtime(true)).md5(time()+$key).$ext;
				    //$new_name = 'lstitem_'.time().$ext;

				    $folder_path = "../upload_images/icon_drp_images";
					$fpath = $folder_path."/".$new_name;

					$arrIm=array(
						'value'=>$new_name
					);

					$results=$cons->updtData('sptypeimagelistitem', $arrIm, 'id', '=', $catidU);

					move_uploaded_file($tmpname,$fpath);
				}else{

					$arrIm=array(
						'label'=>$txtbxv
					);

					$resultT=$cons->updtData('sptypeimagelistitem', $arrIm, 'id', '=', $catidU);

					// if($key==$deff){
					// 	$arrl=array(
					// 		"defaultt"=>$resultT
					// 	);

					// 	$cons->updtData('categoriesproperties', $arrl, 'id', '=', $catid);
					// }
				}
			}
		}
	}

	if(isset($_POST["drp-txtbx-new"])){

		$deff=$_REQUEST['chldmodal-lbl-input-edit-icodrp-select'];
		$lblv=$_REQUEST['pcatmodal-lbl-input-edit-add-icodrp'];
		$catid=$_REQUEST['prop-chlddbmodel-icodrp-hid'];
		$number = count($_POST["drp-txtbx-new"]);

		if($number >= 1){
			foreach ($_POST["drp-txtbx-new"] as $key => $value){
				$autid= $key;
				$bxid= $value;

				if ($_FILES['icodrp-file-new']['size'][$autid] != 0){

					$type=$_FILES["icodrp-file-new"]["type"][$autid];
				    $size=$_FILES["icodrp-file-new"]["size"][$autid];
				    $tmpname=$_FILES['icodrp-file-new']['tmp_name'][$autid];
				    $name=$_FILES['icodrp-file-new']['name'][$autid];

				  	//$t = explode('.',basename($_FILES['icodrp-file-new']['name'][$autid]));
				  	//$extt = strtolower(array_pop($t));
					$ext = substr($name,strrpos($name,"."));
					$new_name = 'lstitem_'.rand(0,microtime(true)).md5(time()+$autid).$ext;
				    //$new_name = 'lstitem_'.time().$ext;
				    $folder_path = "../upload_images/icon_drp_images";
					$fpath = $folder_path."/".$new_name;

					$data=array(
						'label'=>$bxid,
						'prop_id'=>$catid,
						'value'=>$new_name
					);
					$resultW=$cons->insertData('sptypeimagelistitem', $data);

					if($key==$deff){
						$arrl=array(
							"defaultt"=>$resultW
						);

						$cons->updtData('categoriesproperties', $arrl, 'id', '=', $catid);
					}

				    move_uploaded_file($tmpname,$fpath);
				    echo 1;
				}else{

					$arrIm=array(
						'label'=>$bxid,
						'prop_id'=>$catid,
						'value'=>'a.png'
					);

					$resultS=$cons->insertData('sptypeimagelistitem', $arrIm);

					if($key==$deff){
						$arrl=array(
							"defaultt"=>$resultS
						);

						$cons->updtData('categoriesproperties', $arrl, 'id', '=', $catid);
					}
				}
			}
		}
	}
	$cons-> setItemTsess('updateItem',1);
}

function deldrpoptimg(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$val= $_REQUEST['hid'];
	$arrIm=array(
		'value'=>"a.png"
	);

	$result=$cons->updtData('sptypeimagelistitem', $arrIm, 'id', '=', $val);

	if($result>0){
		echo 1;
	}
}

function deldrpopts(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$val= $_REQUEST['hid'];
	$sql="DELETE FROM sptypeimagelistitem WHERE id=".$val;
	$result=mysqli_query($getRes,$sql) or die("Delete Query Error".mysql_error());

	if($result>0){
		echo 1;
	}
}

function saveIcochkbx(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$catid=$_REQUEST['prop-chlddbmodel-icochk-hid'];
	$lblnm=$_REQUEST['pcatmodal-lbl-input-edit-add-icochk'];

	if ($_FILES['chk-file']['size'] != 0){

		$type=$_FILES["chk-file"]["type"];
	    $size=$_FILES["chk-file"]["size"];
	    $tmpname=$_FILES['chk-file']['tmp_name'];
	    $name=$_FILES['chk-file']['name'];

	  	//$t = explode('.',basename($_FILES['chk-file']['name']));
	  	//$extt = strtolower(array_pop($t));
		$ext = substr($name,strrpos($name,"."));
		$new_name = 'chkitem_'.rand(0,microtime(true)).md5(time()).$ext;
	    //$new_name = 'chkitem_'.time().$ext;
	    $folder_path = "../upload_images/icon_chk_box";
		$fpath = $folder_path."/".$new_name;

		$data=array(
			'label'=>$lblnm,
			'defaultt'=>$new_name
		);

		$result=$cons->updtData('categoriesproperties', $data, 'id', '=', $catid);
	    move_uploaded_file($tmpname,$fpath);
	    echo 1;
	}else{
		$data=array(
			'label'=>$lblnm
		);
		$result=$cons->updtData('categoriesproperties', $data, 'id', '=', $catid);
		echo 1;
	}

}

function getLoadItemData(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$itmid=$_REQUEST['val'];

	$sqlf="SELECT category_id FROM items WHERE id=".$itmid;
	$res=mysqli_query($getRes,$sqlf);
	$row=mysqli_fetch_assoc($res);

	$sqll="SELECT
		categories.id as catid,
		items.label as itmlbl,
		collections.id as colid,
		items.description,
		items.price,
		items.tags,
		items.img_path,
		items.template_id
		FROM
		items
		INNER JOIN categories ON items.category_id = categories.id
		INNER JOIN collections ON categories.collection_id = collections.id
		WHERE
		items.category_id = ".$row['category_id']." AND
		items.id =".$itmid;

	$resl=mysqli_query($getRes,$sqll);
	$rowl=mysqli_fetch_assoc($resl);
	echo json_encode($rowl);
}

function checknewitemstate(){
	$cons= new Mysql();
	$chkst=(int)$cons->getItemTsess('updateItem');
	if($chkst==1){
		echo 1;
	}else{
		echo 0;
	}
}

function edittblprintqueue(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$tblprint_id = $_REQUEST['tblprint-id'];

	$labels_text 	   = $_REQUEST['labels-text'];
	$labels_value 	   = $_REQUEST['labels-value'];

	$description_text  = $_REQUEST['description-text'];
	$description_value = $_REQUEST['description-value'];

	$prices_text 	   = $_REQUEST['prices-text'];
	$prices_value 	   = $_REQUEST['prices-value'];
	
	$tags_text 	  	   = $_REQUEST['tags-text'];
	$tags_value 	   = $_REQUEST['tags-value'];
	
	$imgdiv_value 	   = $_REQUEST['imgdiv'];
	
	$label_list 	   = $_REQUEST['label-list'];

	$img_name		   = $_REQUEST['img-name'];
	
	/* Label Value */
	$array_labels 		  = array();
	$array_labels['text'] = $labels_text;
	$lines_label		  = explode("; ", $labels_value);

	foreach ( $lines_label as $line ) {
		list( $key, $value ) = explode( ": ", $line );

		if( $key == 'word-break' || $key == 'position' || $key == 'cursor' || $key == 'z-index' ){
			continue;
		}
		if( $key == 'left' ){
			$key = 'x';
		}
		if( $key == 'top' ){
			$key = 'y';
		}
		if( $key == 'font-size' ){
			$key = 'textSize';
		}
		if( $key == 'text-align' ){
			$key = 'textAlign';
		}
		if( $key == 'opacity' ){
			$key = 'backgroundAlpha';
		}
		if( $key == 'background-color' ){
			$key = 'backgroundColor';
		}
		if( $key == 'color' ){
			$key = 'textColor';
		}
		//if( $key == 'font-family' ){
		//	$key = 'font-family';
		//}
		//Ashok: Added 14-12-2019
		if( $key == 'display' ){
			$key = 'isVisible';
			if($value=="block"){
				$value="true";
			}else{
				$value="false";
			}
		}
		$array_labels[$key] = chop( $value, 'px');
	}
	$label = json_encode($array_labels);
	

	/* Description value */
	$array_description 		   = array();
	$array_description['text'] = $description_text;
	$lines_description  	   = explode("; ", $description_value);

	foreach ( $lines_description as $line ) {
		list( $key, $value ) = explode( ": ", $line );

		if( $key == 'word-break' || $key == 'position' || $key == 'cursor' || $key == 'z-index' ){
			continue;
		}
		if( $key == 'left' ){
			$key = 'x';
		}
		if( $key == 'top' ){
			$key = 'y';
		}
		if( $key == 'font-size' ){
			$key = 'textSize';
		}
		if( $key == 'text-align' ){
			$key = 'textAlign';
		}
		if( $key == 'opacity' ){
			$key = 'backgroundAlpha';
		}
		if( $key == 'background-color' ){
			$key = 'backgroundColor';
		}
		if( $key == 'color' ){
			$key = 'textColor';
		}
		if( $key == 'font-family' ){
			$key = 'font-family';
		}
				//Ashok: Added 14-12-2019
				if( $key == 'display' ){
					$key = 'isVisible';
					if($value=="block"){
						$value="true";
					}else{
						$value="false";
					}
				}
		$array_description[$key] = chop( $value, 'px');
	}
	$description = json_encode( $array_description );

	/*Prices value*/
	$array_prices 		  = array();
	$array_prices['text'] = $prices_text;
	$lines_prices    	  = explode("; ", $prices_value);

	foreach ( $lines_prices as $line ) {
		list( $key, $value ) = explode( ": ", $line );

		if( $key == 'word-break' || $key == 'position' || $key == 'cursor' || $key == 'z-index' ){
			continue;
		}
		if( $key == 'left' ){
			$key = 'x';
		}
		if( $key == 'top' ){
			$key = 'y';
		}
		if( $key == 'font-size' ){
			$key = 'textSize';
		}
		if( $key == 'text-align' ){
			$key = 'textAlign';
		}
		if( $key == 'opacity' ){
			$key = 'backgroundAlpha';
		}
		if( $key == 'background-color' ){
			$key = 'backgroundColor';
		}
		if( $key == 'color' ){
			$key = 'textColor';
		}
		if( $key == 'font-family' ){
			$key = 'font-family';
		}
				//Ashok: Added 14-12-2019
				if( $key == 'display' ){
					$key = 'isVisible';
					if($value=="block"){
						$value="true";
					}else{
						$value="false";
					}
				}
		$array_prices[$key] = chop( $value, 'px');
	}
	$prices = json_encode( $array_prices );


	/*Tags value*/
	$array_tags 		= array();
	$array_tags['text'] = $tags_text;
	$lines_tags    		= explode("; ", $tags_value);

	foreach ( $lines_tags as $line ) {
		list( $key, $value ) = explode( ": ", $line );

		if( $key == 'word-break' || $key == 'position' || $key == 'cursor' || $key == 'z-index' ){
			continue;
		}
		if( $key == 'left' ){
			$key = 'x';
		}
		if( $key == 'top' ){
			$key = 'y';
		}
		if( $key == 'font-size' ){
			$key = 'textSize';
		}
		if( $key == 'text-align' ){
			$key = 'textAlign';
		}
		if( $key == 'opacity' ){
			$key = 'backgroundAlpha';
		}
		if( $key == 'background-color' ){
			$key = 'backgroundColor';
		}
		if( $key == 'color' ){
			$key = 'textColor';
		}
		if( $key == 'font-family' ){
			$key = 'font-family';
		}
				//Ashok: Added 14-12-2019
				if( $key == 'display' ){
					$key = 'isVisible';
					if($value=="block"){
						$value="true";
					}else{
						$value="false";
					}
				}
		$array_tags[$key] = chop( $value, 'px');
	}
	$tags = json_encode( $array_tags );

	/* imgdiv */
	$array_imgdiv		= array();
	$lines_imgdiv  		= explode("; ", $imgdiv_value);

	foreach ( $lines_imgdiv as $line ) {
		list( $key, $value ) = explode( ": ", $line );		
		$array_imgdiv[$key] = chop( $value, 'px');
	}
	$imgdiv = json_encode( $array_imgdiv );
	
	if( $_REQUEST['img-name']  != ''  &&  $_REQUEST['img-name'] != 'undefined' ){
			
		if( $img_name == 'cropimage.jpg' ){
			$img_name = time() . '.jpg';
			rename( "../upload_images/items/cropimage.jpg","../upload_images/items/".$img_name );		
		}
		$data=array(
			'label' 		=> $label,
			'description' 	=> $description,
			'price'			=> $prices,
			'tags'			=> $tags,
			'imgdiv'		=> $imgdiv,
			//'lblvisible'	=> $label_list,
			'img_path' 		=> $img_name,
		);
	} else {		
		$data=array(
			'label' 		=> $label,
			'description' 	=> $description,
			'price'			=> $prices,
			'tags'			=> $tags,
			'imgdiv'		=> $imgdiv,
			//'lblvisible'	=> $label_list,			
		);
	}
	$result = $cons->updtData( 'tblprintqueue', $data, 'id', '=', $tblprint_id );
	echo 1;
}

//Ashok: This should be print que style storing and retriving
function editstyleitem(){
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$tblprint_id = $_REQUEST['tblprint-id'];
	$tblitem_id = $_REQUEST['tblitem-id'];
	
	$labels_text 	   = $_REQUEST['labels-text'];
	$labels_value 	   = $_REQUEST['labels-value'];

	$description_text  = $_REQUEST['description-text'];
	$description_value = $_REQUEST['description-value'];

	$prices_text 	   = $_REQUEST['prices-text'];
	$prices_value 	   = $_REQUEST['prices-value'];
	
	$tags_text 	  	   = $_REQUEST['tags-text'];
	$tags_value 	   = $_REQUEST['tags-value'];
	
	$imgdiv_value 	   = $_REQUEST['imgdiv'];
	
	$label_list 	   = $_REQUEST['label-list'];
	$img_name		   = $_REQUEST['img-name'];
	
	$tbltemp_id		   = $_REQUEST['tbltemp-id'];
	
	/* Label Value */
	$array_labels 		  = array();
	$array_labels['text'] = $labels_text;
	$lines_label		  = explode("; ", $labels_value);

	foreach ( $lines_label as $line ) {
		list( $key, $value ) = explode( ": ", $line );

		if( $key == 'word-break' || $key == 'position' || $key == 'cursor' || $key == 'z-index' ){
			continue;
		}
		/* if( $key == 'left' ){
			$key = 'x';
		}
		if( $key == 'top' ){
			$key = 'y';
		}
		if( $key == 'font-size' ){
			$key = 'textSize';
		}
		if( $key == 'text-align' ){
			$key = 'textAlign';
		}
		if( $key == 'opacity' ){
			$key = 'backgroundAlpha';
		}
		if( $key == 'background-color' ){
			$key = 'backgroundColor';
		}
		if( $key == 'color' ){
			$key = 'textColor';
		}
		if( $key == 'font-family' ){
			$key = 'font-family';			
		} */
		$key=getKey($key);
		//Ashok: Added 14-12-2019
		if( $key == 'isVisible' ){
			//$key = 'isVisible';
			if($value=="block"){
				$value="true";
			}else{
				$value="false";
			}
		}
		$array_labels[$key] = chop( $value, 'px');
	}
	$label = json_encode($array_labels);


	/* Description value */
	$array_description 		   = array();
	$array_description['text'] = $description_text;
	$lines_description  	   = explode("; ", $description_value);

	foreach ( $lines_description as $line ) {
		list( $key, $value ) = explode( ": ", $line );

		if( $key == 'word-break' || $key == 'position' || $key == 'cursor' || $key == 'z-index' ){
			continue;
		}
		/* if( $key == 'left' ){
			$key = 'x';
		}
		if( $key == 'top' ){
			$key = 'y';
		}
		if( $key == 'font-size' ){
			$key = 'textSize';
		}
		if( $key == 'text-align' ){
			$key = 'textAlign';
		}
		if( $key == 'opacity' ){
			$key = 'backgroundAlpha';
		}
		if( $key == 'background-color' ){
			$key = 'backgroundColor';
		}
		if( $key == 'color' ){
			$key = 'textColor';
		}
		if( $key == 'font-family' ){
			$key = 'font-family';
		} */
		$key=getKey($key);
		//Ashok: Added 14-12-2019
		if( $key == 'isVisible' ){
			//$key = 'isVisible';
			if($value=="block"){
				$value="true";
			}else{
				$value="false";
			}
		}
		$array_description[$key] = chop( $value, 'px');
	}
	$description = json_encode( $array_description );

	/*Prices value*/
	$array_prices 		  = array();
	$array_prices['text'] = $prices_text;
	$lines_prices    	  = explode("; ", $prices_value);

	foreach ( $lines_prices as $line ) {
		list( $key, $value ) = explode( ": ", $line );

		if( $key == 'word-break' || $key == 'position' || $key == 'cursor' || $key == 'z-index' ){
			continue;
		}
		// if( $key == 'left' ){
		// 	$key = 'x';
		// }
		// if( $key == 'top' ){
		// 	$key = 'y';
		// }
		// if( $key == 'font-size' ){
		// 	$key = 'textSize';
		// }
		// if( $key == 'text-align' ){
		// 	$key = 'textAlign';
		// }
		// if( $key == 'opacity' ){
		// 	$key = 'backgroundAlpha';
		// }
		// if( $key == 'background-color' ){
		// 	$key = 'backgroundColor';
		// }
		// if( $key == 'color' ){
		// 	$key = 'textColor';
		// }
		// if( $key == 'font-family' ){
		// 	$key = 'font-family';
		// }
		$key=getKey($key);
		//Ashok: Added 14-12-2019
		if( $key == 'isVisible' ){
			//$key = 'isVisible';
			if($value=="block"){
				$value="true";
			}else{
				$value="false";
			}
		}
		$array_prices[$key] = chop( $value, 'px');
	}
	$prices = json_encode( $array_prices );


	/*Tags value*/
	$array_tags 		= array();
	$array_tags['text'] = $tags_text;
	$lines_tags    		= explode("; ", $tags_value);

	foreach ( $lines_tags as $line ) {
		list( $key, $value ) = explode( ": ", $line );

		if( $key == 'word-break' || $key == 'position' || $key == 'cursor' || $key == 'z-index' ){
			continue;
		}
	/* 	if( $key == 'left' ){
			$key = 'x';
		}
		if( $key == 'top' ){
			$key = 'y';
		}
		if( $key == 'font-size' ){
			$key = 'textSize';
		}
		if( $key == 'text-align' ){
			$key = 'textAlign';
		}
		if( $key == 'opacity' ){
			$key = 'backgroundAlpha';
		}
		if( $key == 'background-color' ){
			$key = 'backgroundColor';
		}
		if( $key == 'color' ){
			$key = 'textColor';
		}
		if( $key == 'font-family' ){
			$key = 'font-family';
		} */
		$key=getKey($key);
		//Ashok: Added 14-12-2019
		if( $key == 'isVisible' ){
			//$key = 'isVisible';
			if($value=="block"){
				$value="true";
			}else{
				$value="false";
			}
		}
		$array_tags[$key] = chop( $value, 'px');
	}
	$tags = json_encode( $array_tags );

	/* imgdiv */
	$array_imgdiv		= array();
	$lines_imgdiv  		= explode("; ", $imgdiv_value);

	foreach ( $lines_imgdiv as $line ) {
		list( $key, $value ) = explode( ": ", $line );		
		$array_imgdiv[$key] = chop( $value, 'px');
	}
	$imgdiv = json_encode( $array_imgdiv );
	
	/*label list */
	$label_list_array = explode(",", $label_list);
	$label_list       = json_encode( $label_list_array );
	
	$select_tag =  $cons->selectWhere( 'styleitem', 'item_id','=',$tblitem_id,'int' );
	
	if ( empty( $select_tag ) || !isset( $select_tag ) ) {
		$data=array(
			'label' 	  => $label.$imgdiv.$label_list,
			'description' => $description.$imgdiv.$label_list,
			'price'		  => $prices.$imgdiv.$label_list,
			'img_rect' 	  => $img_name,
			'item_id'	  => $tblitem_id,
			'template_id' => $tbltemp_id,
		);
		$result = $cons->insertData( 'styleitem', $data );
		echo 1;
	} else {		
		$data = array(
			'label' 	  => $label.$imgdiv.$label_list,
			'description' => $description.$imgdiv.$label_list,
			'price'		  => $prices.$imgdiv.$label_list,
			'img_rect' 	  => $img_name,
			'template_id' => $tbltemp_id,
		);		
		$result = $cons->updtData( 'styleitem', $data, 'item_id', '=', $tblitem_id );
		echo 1;
	}	
}
function isNULL($value) {
	if ($value == "" || $value == "null") {
		return "NULL";
	}
}
//Ashok: 10/12/2019 Added 
function getfonts() {
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$templates='SELECT * FROM fonts';
    $qry=mysqli_query($getRes,$templates);
    $se='<option value="-1">Select Font</option>';
    foreach ($qry as $tmp) {
     $se.='<option value="'.$tmp['id'].'">'.$tmp['label'].'</option>';
    }
	echo json_encode($se);
}
function getfont($fontId) {
	$cons= new Mysql();
	$getRes= $cons-> dbConnect();

	$font='SELECT * FROM fonts WHERE id='.$fontId;
	$qry=mysqli_query($getRes,$font);    
	$se='';
    foreach ($qry as $tmp) {
     $se=$tmp['label'];
    }
	echo json_encode($se);
}
//Ashok: 04-02-2020 convert html tag to db compitible tags or db to html
function getKey($key){
	$val ='';

	switch($key){	
			case 'left':
				$val='x';
			break;
			case 'x':
				$val='left';
			break;
			case 'top':
				$val='y';
			break;
			case 'y':
				$val='top';
			break;

			case 'font-size':
				$val='textSize';
			break;
			case 'textSize':
				$val='font-size';
			break;
			case 'text-align':
				$val='textAlign';
			break;
			case 'textAlign':
				$val='text-align';
			break;
			case 'color':
				$val='textColor';
			break;
			case 'textColor':
				$val='color';
			break;
			case 'textWidth':
				$val='textWidth';
			break;
			case 'textHeight':
				$val='textHeight';
			break;

			case 'opacity':
				$val='backgroundAlpha';
			break;
			case 'backgroundAlpha':
				$val='opacity';
			break;
			case 'background-color':
				$val='backgroundColor';
			break;
			case 'backgroundColor':
				$val='background-color';
			break;
			case 'backgroundX':
				$val='backgroundX';
			break;
			case 'backgroundY':
				$val='backgroundY';
			break;

			case 'isPrefix':
				$val='isPrefix';
			break;			
			case 'display':
				$val='isVisible';
			break;
			case 'isVisible':
				$val='display';
			break;
			default:
			//align, fontID, item_id, value_id
			$val=$key;
		}
		
	return $val;
}
?>
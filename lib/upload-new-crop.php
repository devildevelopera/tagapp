<?php
//upload.php
if( isset( $_POST["image"] ) ) {
	$data = $_POST["image"];
	$previd =$_POST["prevId"];
	$image_crop = explode("/", $data);
	$image_array_1 = explode(";", $data);
	$image_array_2 = explode(",", $image_array_1[1]);

	$data = base64_decode($image_array_2[1]);
	$imageName = $previd . '_crop.jpg';
	file_put_contents( '../upload_images/items_crop/'.$imageName, $data );

	echo $imageName;
}
?>
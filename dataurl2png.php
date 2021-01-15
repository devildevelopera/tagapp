<?php
	// $_POST
	// echo '<pre>'; print_r($_POST); echo '</pre>';
	$data = $_POST['dataUrl'];

	list($type, $data) = explode(';', $data);
	list(, $data)      = explode(',', $data);
	$data = base64_decode($data);

	$imgName = 'print_imgs/'.$_POST['currId'].'_print_image.png';
	file_put_contents($imgName, $data);
?>
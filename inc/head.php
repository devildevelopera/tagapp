<?php
    session_start(); 
?>
<?php
    //Hitesh Commented to bypas login page
    if(!isset($_SESSION['main'])){
        header("Location: ../tagapp/index.php");
    }
    require_once('lib/connection.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="Tag Web Application">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>Tag Web Application</title>

        <link href="assets/plugins/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">
        <!--link href='https://fonts.googleapis.com/css?family=Merienda+One|Aldrich|Nothing+You+Could+Do|Crete+Round|Karla:400,700|Original+Surfer|Salsa|Marmelad|Averia+Sans+Libre:700|Righteous|Sancreek|Alegreya+SC:900' rel='stylesheet' type='text/css'-->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
        <link href="assets/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/responsive.dataTables.min.css" rel="stylesheet" type="text/css">       
        <link href="assets/css/colorpicker.css" rel="stylesheet" type="text/css"> 
        <link href="assets/css/layout.css" rel="stylesheet" type="text/css">
        <link href="assets/css/jAlert.css" rel="stylesheet" type="text/css">  
        <link href="assets/css/jquery-ui.css" rel="stylesheet">
        <link href="assets/css/fontselect-alternate.css" rel="stylesheet">
        <link href="assets/css/pretty-checkbox.min.css" rel="stylesheet">
        <link href="assets/css/croppie.css" rel="stylesheet">
        <link href="assets/css/dd.css" rel="stylesheet">
		<link href="assets/css/jquery.Jcrop.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/cropper.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/cropper-main.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" href="assets/css/app.css">
        
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/jquery.min.js"></script>        

    </head>
    <body>

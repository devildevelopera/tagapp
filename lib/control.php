<?php
session_start();
require_once('connection.php');

/*Login Form Codes*/
if(isset($_REQUEST['user_name']) && isset($_REQUEST['password'])){

	$textuname=$_REQUEST['user_name'];
	$textpass=$_REQUEST['password'];

	$cons= new Mysql();
	$getRes= $cons->dbConnect();

	if(isset($textuname) && isset($textpass) && (empty($textuname) || empty($textpass))){
		echo "Please fill Username &amp; Password!";
	}else if(isset($textuname) && $cons->validate_field('/^[a-zA-z\.\d\_]+\@[a-zA-Z\d\-\.]+\.[a-zA-Z]{2,4}$/',$textuname)==true){
		
		$getEmail=$cons->countWhere('users','email','=',$textuname,'char');
		if($getEmail <= 0){
			echo "Missmatching Username or Password";
		}else{
			$getPass=$cons->countWhere('users','password','=',md5($textpass),'char');

			if($getPass<=0){
				echo "Missmatching Username or Password";
			}else{
				$getuserId=$cons->selectWhere('users','email','=',$textuname,'char');
				$_SESSION['main']['email']=$getuserId['email'];
				$_SESSION['main']['name']=$getuserId['name'];
				$_SESSION['main']['id']=$getuserId['id'];
				echo "<script>window.location.href='./dashboard.php'</script>";
			}
		}
		
	}else{
		echo "Wrong Email Address";
	}

}else{
	header("Location: ../index.php");
}	
?>
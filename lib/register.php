<?php
session_start();
require_once('connection.php');

/*Register Form Codes*/
if(isset($_REQUEST['user_email']) && isset($_REQUEST['user_name']) && isset($_REQUEST['password'])){

	$textuemail=$_REQUEST['user_email'];
	$textuname=$_REQUEST['user_name'];
	$textpass=$_REQUEST['password'];

	$cons= new Mysql();
	$getRes= $cons->dbConnect();
    $testQry = 'select * from users';
	if(isset($textuemail) && isset($textuname) && isset($textpass) && (empty($textuemail) || empty($textuname) || empty($textpass))){
		echo "Please fill Email &amp; Username &amp; Password!";
	}else if(isset($textuemail) && $cons->validate_field('/^[a-zA-z\.\d\_]+\@[a-zA-Z\d\-\.]+\.[a-zA-Z]{2,4}$/',$textuemail)==true){
		
        $getEmail=$cons->countWhere('users','email','=',$textuemail,'char');
		if($getEmail > 0){
			echo "The email already exists";
		}else{
            $newUser=array();
            $newUser['email'] = $textuemail;
            $newUser['name'] = $textuname;
            $newUser['password'] = md5($textpass);
            
            $results = $cons->insertData('users', $newUser);
            if($results) {
                $getuserId=$cons->selectWhere('users','email','=',$textuemail,'char');
                $_SESSION['main']['email']=$getuserId['email'];
                $_SESSION['main']['name']=$getuserId['name'];
                $_SESSION['main']['id']=$getuserId['id'];
                echo "<script>window.location.href='./dashboard.php'</script>";
            } else {
                echo 'Register failed';
            };
		}
		
	}else{
		echo "Wrong Email Address";
	}

}else{
	header("Location: ../register.php");
}	
?>
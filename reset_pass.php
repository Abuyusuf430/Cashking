<?php
include 'db.php';
if(isset($_REQUEST['rest_pass'])){
	$email=$_REQUEST['email'];
	$new_pass=$_REQUEST['pass'];
	$query="UPDATE users set password='$new_pass' WHERE email='$email'";
	$res=mysqli_query($link,$query);
	if($res){
		$response['status']=True;
		$response['message']='Password Updated !';

	}
	else{
		$response['status']=False;
		$response['message']='Password Not Updated !';
	}
    echo json_encode($response);
}

?>
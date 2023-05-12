<?php
include 'db.php';


    $res=mysqli_query($link,"SELECT * FROM license WHERE id='1'");
	$num=mysqli_num_rows($res);
	if($num>=1){
    	$row=mysqli_fetch_array($res);
		$package_name=$row['package_name'];
		$license=$row['license'];
		if ($package_name == '0' || $license == '0') {
		    header("location: key.php");
		} else {
		    $user = $package_name;
$code = $license;
$url = 'http://hdcbbackground.com/Verification/verify.php?package_name='.$user.'&verification_code='.$code;

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_HTTPHEADER => array(
      'User-Agent:PostmanRuntime/7.28.4'
      ),
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$d = curl_exec($curl);
if (curl_errno($curl)) { 
  echo curl_error($curl); 
}

$d = json_decode($d, true);
 if($d['status'] == 'true')
 {
     $c=$_POST['code'];
     $u=$_POST['user'];
     $is_blocked = $d['is_blocked'];
     $msg = $d['message'];
     $key = "UPDATE license SET license= '$code',package_name= '$user',is_blocked='$is_blocked' WHERE id='1'";
     $db = mysqli_query($link,$key);
 }else{
      header("location: key.php");
     }
}
}else {
        header("location: key.php");
    }



?>

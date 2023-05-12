<?php
include 'session.php';
include 'db.php';?>
<?php 

$msg="yeah buddy";

if($_POST['user'] && $_POST['code'])
{

$user = $_POST['user'];
$code = $_POST['code'];

$post = [
    'package_name' => $user,
    'verification_code' => $code,
];

$url = 'http://localhost/phpscript/const.js'.$user.'&verification_code='.$code;

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
     header('Location: index.php');
     exit();
 }else
 {
      $msg = $d['message'];
 }

//print_r(array_values($d));



}

?>
<?php include 'inc/head.php';?>
<body class="crm_body_bg">

<section class="main_content dashboard_part large_header_bg" style="padding: 0;">

<div class="main_content_iner ">
<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-12">
<div class="dashboard_header mb_50">
<div class="row">
<div class="col-lg-6">
<div class="dashboard_header_title">
<h3>Activation</h3>
</div>
</div>

</div>
</div>
</div>
<div class="col-lg-12">
<div class="white_box mb_30">
<div class="row justify-content-center">
<div class="col-lg-6">

<div class="modal-content cs_modal">
<div class="modal-header justify-content-center theme_bg_1">
<h5 class="modal-title text_white">Code Activation</h5>
</div>
<div class="modal-body">

<div class="text-center text-muted mb-4">
  <small>
<?php if(!$msg==""){
      echo "<div class='alert alert-warning' role='alert'>
        <span class='alert-icon'><i class='ni ni-like-2'></i></span>
        <span class='alert-text'><strong>Warning!</strong> $msg</span>
    </div>";
    }
    ?>
</small>
</div>

<form role="form" action="" method="post">
<div class="form-group">
<input class="form-control" placeholder="Package name" name="user" type="text">
</div>
<div class="form-group">
<input class="form-control" placeholder="Key" name="code" type="text">
</div>
<button type="submit"class="btn_1 full_width text-center">Activate</button>

</form>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</section>

<script src="js/jquery-3.4.1.min.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/metisMenu.js"></script>

<script src="vendors/scroll/perfect-scrollbar.min.js"></script>
<script src="vendors/scroll/scrollable-custom.js"></script>

<script src="js/custom.js"></script>

</body>
</html>





<?php $sql = mysqli_query($link,"SELECT * FROM tbl_admin ");
$res = mysqli_fetch_assoc($sql);
 ?>
<nav class="sidebar">
<div class="logo d-flex justify-content-between">
<a class="large_logo" href="/"><img style="width: 20%;" src="<?php echo $res['profile']; ?>" alt=""></a>
<div class="sidebar_close_icon d-lg-none">
<i class="ti-close"></i>
</div>
</div>

<ul id="sidebar_menu">

<li>
<a href="index.php" aria-expanded="false">
<div class="nav_icon_small">
<img src="img/menu-icon/dashboard.svg" alt="">
</div>
<div class="nav_title">
<span>Dashboard</span>
</div>
</a>
</li>

<li>
<a href="users.php" aria-expanded="false">
<div class="nav_icon_small">
<i class="fa-solid fa-user-group"></i>
</div>
<div class="nav_title">
<span>Users</span>
</div>
</a>
</li>


<li>
<a href="game.php" aria-expanded="false">
<div class="nav_icon_small">
<i class="fa-solid fa-gamepad"></i>
</div>
<div class="nav_title">
<span>Add Games</span>
</div>
</a>
</li>


<li>
<a href="redeem-request.php" aria-expanded="false">
<div class="nav_icon_small">
<i class="fa-solid fa-money-bill-wave"></i>
</div>
<div class="nav_title">
<span>Redeem Request</span>
</div>
</a>
</li>

<li>
<a href="redeem.php" aria-expanded="false">
<div class="nav_icon_small">
<i class="fa-solid fa-money-bills"></i>
</div>
<div class="nav_title">
<span>Redeem</span>
</div>
</a>
</li>

<li>
<a href="notification.php" aria-expanded="false">
<div class="nav_icon_small">
<img src="img/icon/bell.svg" alt="">
</div>
<div class="nav_title">
<span>Notification</span>
</div>
</a>
</li>

<li>
<a href="refer-task.php" aria-expanded="false">
<div class="nav_icon_small">
<img src="img/menu-icon/4.svg" alt="">
</div>
<div class="nav_title">
<span>Refer Task</span>
</div>
</a>
</li>

<li>
<a href="apps_settings.php" aria-expanded="false">
<div class="nav_icon_small">
<i class="fa-thin fa-mobile" style="color: #546990;"></i>
</div>
<div class="nav_title">
<span>App Install</span>
</div>
</a>
</li>

<li>
<a href="visit_settings.php" aria-expanded="false">
<div class="nav_icon_small">
<i class="fa-solid fa-globe" style="color: #546990;"></i>
</div>
<div class="nav_title">
<span>Visit Website</span>
</div>
</a>
</li>

<li>
<a href="profile.php" aria-expanded="false">
<div class="nav_icon_small">
<i class="ti-user" style="color: #546990;"></i>
</div>
<div class="nav_title">
<span>Profile</span>
</div>
</a>
</li>

<li>
<a href="settings.php" aria-expanded="false">
<div class="nav_icon_small">
<img src="img/menu-icon/15.svg" alt="">
</div>
<div class="nav_title">
<span>Setting</span>
</div>
</a>
</li>

<!-- <h4 class="menu-text"><span>.</span> <i class="fas fa-ellipsis-h"></i> </h4> -->

<!--<li class="">
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<img src="img/menu-icon/16.svg" alt="">
</div>
<div class="nav_title">
<span>Pages</span>
</div>
</a>
<ul>
<li><a href="login.html">Login</a></li>
<li><a href="resister.html">Register</a></li>
<li><a href="error_400.html">Error 404</a></li>
<li><a href="error_500.html">Error 500</a></li>
<li><a href="forgot_pass.html">Forgot Password</a></li>
<li><a href="gallery.html">Gallery</a></li>
</ul>
</li>-->


</ul>
</nav>

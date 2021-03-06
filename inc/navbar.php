<!-- Image and text -->
<nav class="navbar navbar-expand-lg navbar-dark top">
<div class="container">
      <div class="logo-frame">
        <a class="" href="index.php"><img src="assets/images/logo.png"></a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="flex-row ml-auto">
                <ul class="navbar-nav mobile-nav text-lg-right text-md-left text-center">
                  <li class="nav-item">
                    <a href="register.php">
                      <i class="fa fa-user red" aria-hidden="true"></i><font class="white">สมัครสมาชิก</font>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="login.php">
                      <i class="fa fa-sign-out red" aria-hidden="true"></i><font class="white">เข้าสู่ระบบ</font>
                    </a>
                  </li>
                  <li class="nav-item phone">
                      <i class="fa fa-phone red" aria-hidden="true"></i><font class="white">02-214-0942, 089-681-4586</font>
                  </li>
                </ul>
                <ul class="navbar-nav">
                  <form class="form-inline ml-lg-auto">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <button class="btn search-btn" type="button"><i class="fa fa-search red" aria-hidden="true"></i></button>
                        </div>
                        <input type="text" class="form-control search-form" placeholder="Search" aria-label="" aria-describedby="basic-addon1">
                    </div>
                  </form>
                </ul>
                <!-- collapse nav -->
                <ul class="navbar-nav d-lg-none d-block mobile-nav text-md-left text-center">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php"><font class="white">หน้าหลัก</font></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="aboutus.php"><font class="white">เกี่ยวกับเรา</font></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="course.php"><font class="white">คอร์สเรียน</font></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contactus.php"><font class="white">ติดต่อเรา</font></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="mycourse.php"><i class="fa fa-book red" aria-hidden="true"></i><font class="white">คอร์สเรียนที่รอชำระเงิน(1)</font></a>
                    </li>
                </ul>
        </div>
      </div>
</div>
</nav>
<nav class="navbar navbar-expand-lg bottom d-lg-block d-none" role="navigator">
  <div class="container">
    <?php $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']; ?>
    <ul class="navbar-nav desktop-nav mr-auto">
      <li class="nav-item ml-0">
        <a class="nav-link <?php if($actual_link == "http://localhost/biooui/index.php" || $actual_link == "http://localhost/biooui/index.php") echo "active"; else ""; ?>" href="index.php"><font class="red">หน้าหลัก</font></a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($actual_link == "http://localhost/biooui/aboutus.php" || $actual_link == "http://localhost/biooui/aboutus.php") echo "active"; else ""; ?>" href="aboutus.php"><font class="red">เกี่ยวกับเรา</font></a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($actual_link == "http://localhost/biooui/course.php" || $actual_link == "http://localhost/biooui/course.php") echo "active"; else ""; ?>" href="course.php"><font class="red">คอร์สเรียน</font></a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($actual_link == "http://localhost/biooui/contactus.php" || $actual_link == "http://localhost/biooui/contactus.php") echo "active"; else ""; ?>" href="contactus.php"><font class="red">ติดต่อเรา</font></a>
      </li>
    </ul>

    <ul class="navbar-nav desktop-nav2 ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="mycourse.php"><i class="fa fa-book red" aria-hidden="true"></i><font class="red">คอร์สเรียนที่รอชำระเงิน(1)</font></a>
      </li>
    </ul>
  </div>
</nav>

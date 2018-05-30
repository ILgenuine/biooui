<!doctype html>
<html lang="en">
  <head>
  	<!-- START HEADER -->
    <?php include_once('inc/header.php'); ?>
    <!-- END HEADER -->
  </head>

  <body>
	<!-- START NAVBAR -->
    <?php include_once('inc/navbar.php'); ?>
    <!-- END NAVBAR -->


    <!-- START CONTENT -->

    <div class="wrapper">
      <div class="container">
        <div class="row login-all-auto">
          <div class="col-xl-4 col-lg-4 col-12">
            
            <div class="login-line-text">
              <h1 class="login-font-head">
                <i class="fa fa-sign-in" aria-hidden="true"></i> <font class="text-white">เข้าสู่ระบบ</font>
              </h1>
              <font class="text-white">กรอกชื่อผู้ใช้และรหัสผ่านเพื่อเข้าสู่ระบบ</font>
            </div>


          </div>
          <div class="col-xl-6 col-lg-7 col-12">
            <form class="login-from-top">
              <div class="form-group mb-3">
                <label class="text-white">ชื่อผู้ใช้</label>
                <input type="text" class="form-control">
              </div>
              <div class="form-group mb-3">
                <label class="text-white">รหัสผ่าน</label>
                <input type="password" class="form-control">
              </div>
            </form>


            <div class="row login-mt-40px ">
              <div class="col-sm-4 col-12 login-sm-link">
                <a href="#" class="login-bnt" role="button"><font class="text-white">เข้าสู่ระบบ</font></a>
              </div>
              <div class="col-sm-4 col-12 login-sm-link">
                <a href="#" class="login-bnt" role="button"><i class="fa fa-user" aria-hidden="true"></i> <font class="text-white">สมัครสมาชิก</font></a>
              </div>
              <div class="col-sm-4 col-12 login-sm-link">
                <a href="#" class="login-bnt" role="button"><i class="fa fa-key" aria-hidden="true"></i> <font class="text-white">ลืมรหัสผ่าน</font></a>
              </div>
            </div>

          </div>
          <div class="col-xl-2 col-lg-1 col-12"></div>
        </div>
      </div>
    </div>

    <!-- END CONTENT -->


    <!-- START FOOTER -->
    <?php include_once('inc/footer.php'); ?>
    <!-- END FOOTER -->

    <!-- START FOOTER SCRIPT -->
    <?php include_once('inc/footer-script.php'); ?>
    <!-- END FOOOTER SCRIPT -->


  </body>
</html>

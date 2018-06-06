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


        <div class="row py-5">
          <div class="col-12 login-text-center-414">
            <h1 class="login-font-head">
              <i class="fa fa-sign-in" aria-hidden="true"></i> <font class="text-white">เข้าสู่ระบบ</font>
            </h1>
            <p class="text-white payment-font-16" style="letter-spacing: 1px;">กรอกชื่อผู้ใช้และรหัสผ่านเพื่อเข้าสู่ระบบ</p>
          </div>
        </div>


        <div class="row">
          <div class="col-12">
            <form class="register-from-size">
                <div class="form-group">
                  <label class="text-white register-label">ชื่อผู้ใช้</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label class="text-white register-label">รหัสผ่าน</label>
                  <input type="password" class="form-control">
                </div>

                <div class="form-group">
                  <div class="row login-mt-40px ">
                    <button class="btn login-bnt" role="button">
                      <font class="text-white">เข้าสู่ระบบ</font>
                    </button>
                    <button class="btn bnt-register-forget">
                      <i class="fa fa-user" aria-hidden="true"></i> <font class="text-white">สมัครสมาชิก</font>
                    </button>
                    <button class="btn bnt-register-forget">
                      <i class="fa fa-key" aria-hidden="true"></i> <font class="text-white">ลืมรหัสผ่าน</font>
                    </button>
                  </div>
                </div>
            </form>
          </div>
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

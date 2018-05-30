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
             <i class="fa fa-user" aria-hidden="true"></i> <font class="text-white">สมัครสมาชิก</font>
            </h1>
            <p class="text-white" style="letter-spacing: 1px;">กรอกข้อมูลให้ครบทุกช่อง เพื่อใช้ในการติดต่อยืนยันการสมัครสมาชิก</p>
          </div>
        </div>


        <div class="row">
          <div class="col-12">
            <form class="register-from-size">
                <div class="form-group">
                  <label class="text-white register-label">ชื่อ</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label class="text-white register-label">อีเมล</label>
                  <input type="email" class="form-control">
                </div>
                <div class="form-group">
                  <label class="text-white register-label">เบอร์โทรศํพท์</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label class="text-white register-label">รหัสผ่าน</label>
                  <input type="password" class="form-control">
                </div>
                <div class="form-group">
                  <label class="text-white register-label">ยืนยันรหัสผ่าน</label>
                  <input type="password" class="form-control">
                </div>
                <div class="form-group">
                  <button type="button" class="btn register-bnt">สมัครสมาชิก</button>
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

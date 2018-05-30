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
             <i class="fa fa-th-large" aria-hidden="true"></i> <font class="text-white">ยินดีต้อนรับ คุณสมชาย ขยันเรียน</font>
            </h1>
          </div>
        </div>


        <div class="row">
          <div class="col-sm-5 col-12">
            <div class="profile-font22">
              <div class="mb-2">
                <a href="#" class="text-white"><i class="fa fa-user red" aria-hidden="true"></i> <font>ประวัติส่วนตัว</font></a>
              </div>
              <div class="mb-2">
                <a href="#" class="text-white"><i class="fa fa-book red" aria-hidden="true"></i> <font>คอร์สเรียนของฉัน</font></a>
              </div>
              <div class="mb-2">
                <a href="#" class="text-white"><i class="fa fa-clock-o red" aria-hidden="true"></i> <font>ประวัติการชำระเงิน</font></a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-12">
            <form class="px-3">
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
                <div class="form-group profile-bntcenter-414">
                  <button type="button" class="btn register-bnt">ยืนยันแก้ไข</button>
                </div>
            </form>
          </div>
          <div class="col-sm-1 col-12"></div>
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

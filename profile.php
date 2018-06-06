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

        <div class="row">
          <div class="col-12 text-lg-left text-center" style="margin-top: 80px;margin-bottom: 40px;">
            <h1 class="login-font-head">
             <i class="fa fa-th-large" aria-hidden="true"></i> <font class="text-white">ยินดีต้อนรับ คุณสมชาย ขยันเรียน</font>
            </h1>
          </div>
        </div>


        <div class="row mb-5">
          <div class="col-md-4 col-12">
            <div class="profile-font22">
              <div class="mb-2 text-md-left text-center">
                <a href="profile.php" class="text-menu"><i class="fa fa-user red" aria-hidden="true"></i> <font>ประวัติส่วนตัว</font></a>
              </div>
              <div class="mb-2 text-md-left text-center">
                <a href="mycourse.php" class="text-menu"><i class="fa fa-book red" aria-hidden="true"></i> <font>คอร์สเรียนของฉัน</font></a>
              </div>
              <div class="mb-2 text-md-left text-center">
                <a href="payment-history.php" class="text-menu"><i class="fa fa-clock-o red" aria-hidden="true"></i> <font>ประวัติการชำระเงิน</font></a>
              </div>
            </div>
          </div>



          <div class="col-md-8 col-12">
            <form>
              <div class="form-group">
                <label class="text-white profile-mb-0">ชื่อ</label>
                <input type="text" class="form-control profile-from-size-auto">
              </div>
            </form> 
            <form>
              <div class="form-group">
                <label class="text-white profile-mb-0">อีเมล</label>
                <input type="email" class="form-control profile-from-size-auto">
              </div>
            </form> 
            <form>
              <div class="form-group">
                <label class="text-white profile-mb-0">เบอร์โทรศํพท์</label>
                <input type="text" class="form-control profile-from-size-auto">
              </div>
            </form> 
            <form>
              <div class="form-group">
                <label class="text-white profile-mb-0">รหัสผ่าน</label>
                <input type="password" class="form-control profile-from-size-auto">
              </div>
            </form> 
            <form>
              <div class="form-group">
                <label class="text-white profile-mb-0">ยืนยันรหัสผ่าน</label>
                <input type="password" class="form-control profile-from-size-auto">
              </div>
            </form> 
            <form class="text-md-left text-center">
              <button type="button" class="btn profile-bnt-size register-bnt my-3">ยืนยันแก้ไข</button>              
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

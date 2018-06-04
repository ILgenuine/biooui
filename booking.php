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

            <div class="row py-3">
              <div class="col-12 login-text-center-414">
                <h1 class="login-font-head">
                 <i class="fa fa-clock-o red" aria-hidden="true"></i> <font class="text-white">จองเวลาเรียน</font>
                </h1>
              </div>

              <div class="col-md-8 col-12">
               
                  <h5 class="text-white booking-text-top">เรียนรู้โลก Biology เบื้องต้นสำหรับ ม.4</h5>
                
              </div>
              <div class="col-md-4 col-12">
                <button type="button" class="btn booking-bnt-size register-bnt">ยืนยันเวลาจอง <i class="fa fa-share" aria-hidden="true"></i></button>
              </div>
            </div>



              <div class="row">
                <div class="col-12">
<!--                   <h5 class="text-white">เวลาที่เลือกจอง</h5>
                  <div class="form-inline">
                    <div class="btn-group mb-3 booking-bntgrou-right" role="group" aria-label="Basic example">
                      <button type="button" class="btn" style="background-color: #bb2d23"><i class="fa fa-times text-white" aria-hidden="true"></i></button>
                      <button type="button" class="btn register-bnt mycourse-bnt-group">12/06/2561 10.00 - 12.00</button>
                    </div>
                    <div class="btn-group mb-3 booking-bntgrou-right" role="group" aria-label="Basic example">
                      <button type="button" class="btn" style="background-color: #bb2d23"><i class="fa fa-times text-white" aria-hidden="true"></i></button>
                      <button type="button" class="btn register-bnt mycourse-bnt-group">12/06/2561 10.00 - 12.00</button>
                    </div>
                  </div> -->
                </div>


                <div class="col-12">
                  <div class="card booking-border-card">
                    <div class="card-header booking-card-header">
                      <div class="mt-3">
                         <button type="button" class="btn booking-bnt-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                         <button type="button" class="btn booking-bnt-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>

                          <button type="button" class="btn booking-bnt-today">Today</button>
                      </div>
                    </div>
                    <div class="card-body">
                      <table style="width: 100%;">
                        <thead >
                          <tr>
                            <th width="7%"></th>
                            <th width="13.285%" class="text-center">Sun 11/3</th>
                            <th width="13.285%" class="text-center">Mon 12/3</th>
                            <th width="13.285%" class="text-center">Tue 13/3</th>
                            <th width="13.285%" class="text-center">Wed 14/3</th>
                            <th width="13.285%" class="text-center">Thu 15/3</th>
                            <th width="13.285%" class="text-center">Fri 16/3</th>
                            <th width="13.285%" class="text-center">Sat 17/3</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td height="55px" class="text-center">all-day</td>
                            <td height="55px" class="text-center"></td>
                            <td height="55px" class="text-center"></td>
                            <td height="55px" class="text-center"></td>
                            <td height="55px" class="text-center"></td>
                            <td height="55px" class="text-center"></td>
                            <td height="55px" class="text-center"></td>
                            <td height="55px" class="text-center"></td>
                          </tr>

                          <tr>
                            <td height="30px" class="text-center booking-border-bottomdot">8.00</td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                          </tr>
                          <tr>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                          </tr>

                          <tr>
                            <td height="30px" class="text-center booking-border-bottomdot">9.00</td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                          </tr>
                          <tr>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                          </tr>

                          <tr>
                            <td height="30px" class="text-center booking-border-bottomdot">10.00</td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                          </tr>
                          <tr>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                          </tr>

                          <tr>
                            <td height="30px" class="text-center booking-border-bottomdot">11.00</td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                          </tr>
                          <tr>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                          </tr>

                          <tr>
                            <td height="30px" class="text-center booking-border-bottomdot">12.00</td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                          </tr>
                          <tr>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                          </tr>

                          <tr>
                            <td height="30px" class="text-center booking-border-bottomdot">13.00</td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                          </tr>
                          <tr>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                          </tr>

                          <tr>
                            <td height="30px" class="text-center booking-border-bottomdot">14.00</td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                          </tr>
                          <tr>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                          </tr>

                          <tr>
                            <td height="30px" class="text-center booking-border-bottomdot">15.00</td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                          </tr>
                          <tr>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                          </tr>

                          <tr>
                            <td height="30px" class="text-center booking-border-bottomdot">16.00</td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                          </tr>
                          <tr>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                          </tr>

                          <tr>
                            <td height="30px" class="text-center booking-border-bottomdot">17.00</td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                          </tr>
                          <tr>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                          </tr>

                          <tr>
                            <td height="30px" class="text-center booking-border-bottomdot">18.00</td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                          </tr>
                          <tr>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                          </tr>


                          <tr>
                            <td height="30px" class="text-center booking-border-bottomdot">19.00</td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                            <td height="30px" class="text-center booking-border-bottomdot"></td>
                          </tr>
                          <tr>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                            <td height="30px" class="text-center booking-border-topdot"></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
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

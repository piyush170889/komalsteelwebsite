<!DOCTYPE html>
<?php include ('header.php');?>
      <!-- LIGHT SECTION -->
      <!--<section class="lightSection clearfix pageHeader">
        <div class="container">
          <div class="row">
            <div class="col-xs-6">
              <div class="page-title">
                <h2>payment method</h2>
              </div>
            </div>
            <div class="col-xs-6">
              <ol class="breadcrumb pull-right">
                <li>
                  <a href="index.php">Home</a>
                </li>
                <li class="active">payment method</li>
              </ol>
            </div>
          </div>
        </div>
      </section>-->
      
      <!-- MAIN CONTENT SECTION -->
      <section class="mainContent clearfix stepsWrapper">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="innerWrapper clearfix stepsPage">
                <div class="row progress-wizard" style="border-bottom:0;">

                  <div class="col-xs-3 progress-wizard-step complete fullBar">
                    <div class="text-center progress-wizard-stepnum">Billing &amp; Shipping Address</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="checkout-step-1.php" class="progress-wizard-dot"></a>
                  </div>

                  <div class="col-xs-3 progress-wizard-step complete fullBar">
                    <div class="text-center progress-wizard-stepnum">Shipping Method</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="checkout-step-2.php" class="progress-wizard-dot"></a>
                  </div>

                  <div class="col-xs-3 progress-wizard-step active">
                    <div class="text-center progress-wizard-stepnum">Payment Method</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="checkout-step-3.php" class="progress-wizard-dot"></a>
                  </div>

                  <div class="col-xs-3 progress-wizard-step disabled">
                    <div class="text-center progress-wizard-stepnum">Review</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="checkout-step-4.php" class="progress-wizard-dot"></a>
                  </div>
                </div>
                
                <form action="#" class="row" method="POST" role="form">
                  <div class="col-xs-12">
                    <div class="page-header">
                      <h4>Payment Information</h4>
                    </div>
                  </div>
                  <div class="form-group col-sm-4 col-xs-12">
                    <label for="">Payment By</label>
                    <span class="step-drop">
                      <select name="guiest_id3" id="guiest_id3" class="select-drop">
                        <option value="0">Credit Card</option>
                        <option value="1">Credit Card 1</option>
                        <option value="2">Credit Card 2</option>
                        <option value="3">Credit Card 3</option>            
                      </select>
                    </span>
                  </div>
                  <div class="form-group col-sm-4 col-xs-12">
                    <label for="">Card type</label>
                    <span class="step-drop">
                      <select name="guiest_id3" id="guiest_id3" class="select-drop">
                        <option value="0">Visa Card</option>
                        <option value="1">Visa Card 1</option>
                        <option value="2">Visa Card 2</option>
                        <option value="3">Visa Card 3</option>            
                      </select>
                    </span>
                  </div>
                  <div class="form-group col-sm-4 col-xs-12">
                    <label for="">Card Number</label>
                    <input type="password" class="form-control" id="">
                  </div>
                  <div class="form-group col-sm-4 col-xs-12">
                    <label for="">Expiration Date</label>
                    <div class="row">
                      <div class="col-xs-6">
                        <span class="step-drop">
                          <select name="guiest_id3" id="guiest_id3" class="select-drop">
                            <option value="0">month</option>
                            <option value="1">month 1</option>
                            <option value="2">month 2</option>
                            <option value="3">month 3</option>            
                          </select>
                        </span>
                      </div>
                      <div class="col-xs-6">
                        <span class="step-drop">
                          <select name="guiest_id3" id="guiest_id3" class="select-drop">
                            <option value="0">2016</option>
                            <option value="1">2017</option>
                            <option value="2">2018</option>
                            <option value="3">2019</option>            
                          </select>
                        </span>
                      </div>
                    </div> 
                  </div>
                  <div class="form-group col-sm-4 col-xs-12">
                    <label for="">CV Code</label>
                    <input type="text" class="form-control" id="">
                  </div>
                  <div class="col-xs-12">
                    <div class="well well-lg clearfix">
                      <ul class="pager">
                      <li class="previous"><a href="checkout-step-2.php">back</a></li>
                        <li class="next"><a href="checkout-step-4.php">Continue</a></li>
                      </ul>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!-- FOOTER -->
      <?php include ('footer.php');?>

  </body>

<!-- Mirrored from themes.iamabdus.com/bigbag/1.0/checkout-step-3.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Jul 2016 10:31:57 GMT -->
</html>
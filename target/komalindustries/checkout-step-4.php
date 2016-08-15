<!DOCTYPE html>
<?php include ('header.php');?>
      
      <!-- LIGHT SECTION -->
      <section class="lightSection clearfix pageHeader">
        <div class="container">
          <div class="row">
            <div class="col-xs-6">
              <div class="page-title">
                <h2>review</h2>
              </div>
            </div>
            <div class="col-xs-6">
              <ol class="breadcrumb pull-right">
                <li>
                  <a href="index.php">Home</a>
                </li>
                <li class="active">review</li>
              </ol>
            </div>
          </div>
        </div>
      </section>
      
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
                    <div class="text-center progress-wizard-stepnum">Finalizing Order</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="#" class="progress-wizard-dot"></a>
                  </div>

                  <div class="col-xs-3 progress-wizard-step complete fullBar">
                    <div class="text-center progress-wizard-stepnum">Finalize Order</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="#" class="progress-wizard-dot"></a>
                  </div>

                  <div class="col-xs-3 progress-wizard-step complete">
                    <div class="text-center progress-wizard-stepnum">Review Order</div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="checkout-step-4.php" class="progress-wizard-dot"></a>
                  </div>
                </div>
                
                <form action="#" class="row" method="POST" role="form">
                  <div class="col-xs-12">
                    <div class="page-header">
                      <h4>order review</h4>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">Billing Address</h4>
                      </div>
                      <div class="panel-body">
                        <address>
                          <strong>Adam Smith</strong><br>
                          9/4 C Babor Road, Mohammad pur, <br>
                          Shyamoli, Dhaka <br>
                          Bangladesh
                        </address>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">Shipping Address</h4>
                      </div>
                      <div class="panel-body">
                        <address>
                          <strong>Adam Smith</strong><br>
                          9/4 C Babor Road, Mohammad pur, <br>
                          Shyamoli, Dhaka <br>
                          Bangladesh
                        </address>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">Payment Method</h4>
                      </div>
                      <div class="panel-body">
                        <address>
                          <span>Credit Card - VISA</span>
                        </address>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">Shipping Method</h4>
                      </div>
                      <div class="panel-body">
                        <address>
                          <span>Post Air Mail</span>
                        </address>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">Order Details</h4>
                      </div>
                      <div class="panel-body">
                        <div class="row">
                          <div class="col-sm-4 col-xs-12">
                            <address>
                              <a href="#">Email: adamsmith@bigbag.com</a> <br>
                              <span>Phone: +884 5452 6432</span>
                            </address>
                          </div>
                          <div class="col-sm-8 col-xs-12">
                            <address>
                              <span>Additional Information: </span><br>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                            </address>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="cartListInner">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th></th>
                          <th>Product Name</th>
                          <th>Size</th>
                          <th>Capacity</th>
                          <th>Unit<br/><small>1 Unit = 10 Piece</small></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="col-xs-3">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <span class="cartImage"><img class="img-responsive" src="img/products/oilcan/redcap.jpg" width="131px" alt="image"></span>
                              </td>
                              <td class="col-xs-3">STAINLESS STEEL OIL CAN (RED CAP)</td>
                          <td class="col-xs-2">Small</td>
						  <td class="col-xs-2">450ML</td>
                          <td class="col-xs-2"><input type="text" placeholder="1"></td>
                            </tr>
                            <tr>
                              <td class="col-xs-3">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <span class="cartImage"><img class="img-responsive" src="img/products/oilcan/redcap.jpg" width="131px" alt="image"></span>
                              </td>
                              <td class="col-xs-3">STAINLESS STEEL OIL CAN (RED CAP)</td>
                          <td class="col-xs-2">Medium</td>
						  <td class="col-xs-2">550ML</td>
                          <td class="col-xs-2"><input type="text" placeholder="1"></td>
                            </tr>
                            <tr>
                              <td class="col-xs-3">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <span class="cartImage"><img class="img-responsive" src="img/products/oilcan/redcap.jpg" width="131px" alt="image"></span>
                              </td>
                              <td class="col-xs-3">STAINLESS STEEL OIL CAN (RED CAP)</td>
                          <td class="col-xs-2">Big</td>
						  <td class="col-xs-2">750ML</td>
                          <td class="col-xs-2"><input type="text" placeholder="1"></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="row totalAmountArea" style="margin-left:0px;">
                        <div class="col-sm-4 col-sm-offset-8 col-xs-12">
                          <ul class="list-unstyled">
                            <li>Number Of Units In Total <span style="color:#3e4095;font-size:18px;">3 Units</span></li>
                            <!--<li>Vat <span>₹ 18.00</span></li>
                            <li>Grand Total <span class="grandTotal">₹ 810.00</span></li>-->
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="well well-lg clearfix">
                      <ul class="pager">
                      <li class="previous"><a href="checkout-step-3.php">Back</a></li>
                        <li class="next"><a href="checkout-complete.php">Confirm</a></li>
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


</html>
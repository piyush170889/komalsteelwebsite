<!DOCTYPE html>

<?php include ('header.php');?>
      <!-- LIGHT SECTION -->
      <!--<section class="lightSection clearfix pageHeader">
        <div class="container">
          <div class="row">
            <div class="col-xs-6">
              <div class="page-title">
                <h2>ALL ORDERS</h2>
              </div>
            </div>
            <div class="col-xs-6">
              <ol class="breadcrumb pull-right">
                <li>
                  <a href="index.php">Home</a>
                </li>
                <li class="active">ALL ORDERS</li>
              </ol>
            </div>
          </div>
        </div>
      </section>-->
      
      <!-- MAIN CONTENT SECTION -->
      <section class="mainContent clearfix userProfile">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="btn-group" role="group" aria-label="...">
                <a href="account-dashboard.php" class="btn btn-default"><i class="fa fa-th" aria-hidden="true"></i>Account Dashboard</a>
                <a href="account-profile.php" class="btn btn-default"><i class="fa fa-user" aria-hidden="true"></i>Profile</a>
                <a href="account-address.php" class="btn btn-default"><i class="fa fa-map-marker" aria-hidden="true"></i>My Address</a>
                <a href="account-all-orders.php" class="btn btn-default active"><i class="fa fa-list" aria-hidden="true"></i>All Orders</a>
                <a href="account-wishlist.php" class="btn btn-default"><i class="fa fa-gift" aria-hidden="true"></i>Wishlist</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div class="innerWrapper">
                <div class="orderBox">
                  <h4>All Orders</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Order ID</th>
                          <th>Date</th>
                          <th>Items</th>
                          <th>Total Price</th>
                          <th>Status</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>#451231</td>
                          <td>Mar 25, 2016</td>
                          <td>2</td>
                          <td>$99.00</td>
                          <td><span class="label label-primary">Processing</span></td>
                          <td><a href="#" class="btn btn-default">View</a></td>
                        </tr>
                        <tr>
                          <td>#451231</td>
                          <td>Mar 25, 2016</td>
                          <td>3</td>
                          <td>$150.00</td>
                          <td><span class="label label-success">Completed</span></td>
                          <td><a href="#" class="btn btn-default">View</a></td>
                        </tr>
                        <tr>
                          <td>#451231</td>
                          <td>Mar 25, 2016</td>
                          <td>3</td>
                          <td>$150.00</td>
                          <td><span class="label label-danger">Canceled</span></td>
                          <td><a href="#" class="btn btn-default">View</a></td>
                        </tr>
                        <tr>
                          <td>#451231</td>
                          <td>Mar 25, 2016</td>
                          <td>2</td>
                          <td>$99.00</td>
                          <td><span class="label label-info">On Hold</span></td>
                          <td><a href="#" class="btn btn-default">View</a></td>
                        </tr>
                        <tr>
                          <td>#451231</td>
                          <td>Mar 25, 2016</td>
                          <td>3</td>
                          <td>$150.00</td>
                          <td><span class="label label-warning">Pending</span></td>
                          <td><a href="#" class="btn btn-default">View</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!-- FOOTER -->
     <?php include ('footer.php');?>

</html>
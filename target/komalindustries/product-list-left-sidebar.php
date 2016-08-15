<!DOCTYPE html>
<?php include  ('header.php');?>
      
      <!-- LIGHT SECTION -->
     <!-- <section class="lightSection clearfix pageHeader">
        <div class="container">
          <div class="row">
            <div class="col-xs-6">
              <div class="page-title">
                <h2>Product List View</h2>
              </div>
            </div>
            <div class="col-xs-6">
              <ol class="breadcrumb pull-right">
                <li>
                  <a href="index.php">Home</a>
                </li>
                <li>
                  <a href="#">shop</a>
                </li>
                <li class="active">Product List Left Sidebar</li>
              </ol>
            </div>
          </div>
        </div>
      </section>-->

      <!-- MAIN CONTENT SECTION -->
      <section class="mainContent clearfix productsContent">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12 sideBar">
              <div class="panel panel-default">
                <div class="panel-heading">Product categories</div>
                <div class="panel-body">
                  <div class="collapse navbar-collapse navbar-ex1-collapse navbar-side-collapse">
                    <ul class="nav navbar-nav side-nav">
                      <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#women">Women <i class="fa fa-plus"></i></a>
                        <ul id="women" class="collapse collapseItem">
                          <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Accessories <span>(6)</span></a></li>
                          <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Bag <span>(6)</span></a></li>
                          <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Cloths <span>(25)</span></a></li>
                          <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Bed &amp; Bath <span>(2)</span></a></li>
                          <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Swimming costume <span>(5)</span></a></li>
                          <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Sport Tops &amp; Shoes <span>(3)</span></a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#men">Men <i class="fa fa-plus"></i></a>
                        <ul id="men" class="collapse collapseItem">
                          <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Accessories <span>(6)</span></a></li>
                          <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Bag <span>(6)</span></a></li>
                          <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Cloths <span>(25)</span></a></li>
                          <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Bed &amp; Bath <span>(2)</span></a></li>
                          <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Swimming costume <span>(5)</span></a></li>
                          <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Sport Tops &amp; Shoes <span>(3)</span></a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#kids">Kids <i class="fa fa-plus"></i></a>
                        <ul id="kids" class="collapse collapseItem">
                          <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Accessories <span>(6)</span></a></li>
                          <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Bag <span>(6)</span></a></li>
                          <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Cloths <span>(25)</span></a></li>
                          <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Bed &amp; Bath <span>(2)</span></a></li>
                          <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Swimming costume <span>(5)</span></a></li>
                          <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Sport Tops &amp; Shoes <span>(3)</span></a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#accessories">Accessories <i class="fa fa-plus"></i></a>
                        <ul id="accessories" class="collapse collapseItem">
                          <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Accessories <span>(6)</span></a></li>
                          <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Bag <span>(6)</span></a></li>
                          <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Cloths <span>(25)</span></a></li>
                          <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Bed &amp; Bath <span>(2)</span></a></li>
                          <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Swimming costume <span>(5)</span></a></li>
                          <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Sport Tops &amp; Shoes <span>(3)</span></a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="panel panel-default priceRange">
                <div class="panel-heading">Filter by Price</div>
                <div class="panel-body clearfix">
                  <div class="price-slider-inner"> 
                    <span class="amount-wrapper">
                      Price:
                      <input type="text" id="price-amount-1" readonly>
                      <strong>-</strong>
                      <input type="text" id="price-amount-2" readonly> 
                    </span>                                            
                    <div id="price-range"></div>  
                  </div>
                  <input class="btn btn-default" type="submit" value="Filter">
                  <!-- <span class="priceLabel">Price: <strong>$12 - $30</strong></span> -->
                </div>
              </div>
              <div class="panel panel-default filterNormal">
                <div class="panel-heading">filter by Color</div>
                <div class="panel-body">
                  <ul class="list-unstyled">
                    <li><a href="#">Black<span>(15)</span></a></li>
                    <li><a href="#">White<span>(10)</span></a></li>
                    <li><a href="#">Red<span>(7)</span></a></li>
                    <li><a href="#">Blue<span>(12)</span></a></li>
                    <li><a href="#">Orange<span>(12)</span></a></li>
                  </ul>
                </div>
              </div>
              <div class="panel panel-default filterNormal">
                <div class="panel-heading">filter by Size</div>
                <div class="panel-body">
                  <ul class="list-unstyled clearfix">
                    <li><a href="#">Small<span>(15)</span></a></li>
                    <li><a href="#">Medium<span>(10)</span></a></li>
                    <li><a href="#">Large<span>(7)</span></a></li>
                    <li><a href="#">Extra Large<span>(12)</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12">
              <div class="row filterArea">
                <div class="col-xs-6">
                  <select name="guiest_id1" id="guiest_id1" class="select-drop">
                    <option value="0">Default sorting</option>
                    <option value="1">Sort by popularity</option>
                    <option value="2">Sort by rating</option>
                    <option value="3">Sort by newness</option>
                    <option value="3">Sort by price</option>           
                  </select>
                </div>
                <div class="col-xs-6">
                  <div class="btn-group pull-right" role="group">
                    <button type="button" class="btn btn-default" onclick="window.location.href='product-grid-left-sidebar.php'"><i class="fa fa-th" aria-hidden="true"></i><span>Grid</span></button>
                    <button type="button" class="btn btn-default active" onclick="window.location.href='product-list-left-sidebar.php'"><i class="fa fa-th-list" aria-hidden="true"></i><span>List</span></button>
                  </div>
                </div>
              </div>
              <div class="row productListSingle">
                <div class="col-xs-12">
                  <div class="media">
                    <div class="media-left">
                      <img class="media-object" src="img/products/products-01.jpg" alt="Image">
                      <span class="maskingImage"><a data-toggle="modal" href="-2.php" class="btn viewBtn">Quick View</a></span>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="single-product.php">Dip Dyed Sweater</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      <h3>$249</h3>
                      <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target=".login-modal"><i class="fa fa-heart" aria-hidden="true"></i></button>
                        <button type="button" class="btn btn-default" onclick="location.href='cart-page.php';"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="media">
                    <div class="media-left">
                      <img class="media-object" src="img/products/products-02.jpg" alt="Image">
                      <span class="maskingImage"><a data-toggle="modal" href="-2.php" class="btn viewBtn">Quick View</a></span>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="single-product.php">Dip Dyed Sweater</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      <h3>$249</h3>
                      <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target=".login-modal"><i class="fa fa-heart" aria-hidden="true"></i></button>
                        <button type="button" class="btn btn-default" onclick="location.href='cart-page.php';"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="media">
                    <div class="media-left">
                      <img class="media-object" src="img/products/products-03.jpg" alt="Image">
                      <span class="maskingImage"><a data-toggle="modal" href="-2.php" class="btn viewBtn">Quick View</a></span>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="single-product.php">Dip Dyed Sweater</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      <h3>$249</h3>
                      <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target=".login-modal"><i class="fa fa-heart" aria-hidden="true"></i></button>
                        <button type="button" class="btn btn-default" onclick="location.href='cart-page.php';"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="media">
                    <div class="media-left">
                      <img class="media-object" src="img/products/products-04.jpg" alt="Image">
                      <span class="maskingImage"><a data-toggle="modal" href="-2.php" class="btn viewBtn">Quick View</a></span>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="single-product.php">Dip Dyed Sweater</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      <h3>$249</h3>
                      <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target=".login-modal"><i class="fa fa-heart" aria-hidden="true"></i></button>
                        <button type="button" class="btn btn-default" onclick="location.href='cart-page.php';"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="media">
                    <div class="media-left">
                      <img class="media-object" src="img/products/products-05.jpg" alt="Image">
                      <span class="maskingImage"><a data-toggle="modal" href="-2.php" class="btn viewBtn">Quick View</a></span>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="single-product.php">Dip Dyed Sweater</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      <h3>$249</h3>
                      <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target=".login-modal"><i class="fa fa-heart" aria-hidden="true"></i></button>
                        <button type="button" class="btn btn-default" onclick="location.href='cart-page.php';"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="media">
                    <div class="media-left">
                      <img class="media-object" src="img/products/products-06.jpg" alt="Image">
                      <span class="maskingImage"><a data-toggle="modal" href="-2.php" class="btn viewBtn">Quick View</a></span>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="single-product.php">Dip Dyed Sweater</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      <h3>$249</h3>
                      <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target=".login-modal"><i class="fa fa-heart" aria-hidden="true"></i></button>
                        <button type="button" class="btn btn-default" onclick="location.href='cart-page.php';"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="media">
                    <div class="media-left">
                      <img class="media-object" src="img/products/products-07.jpg" alt="Image">
                      <span class="maskingImage"><a data-toggle="modal" href="-2.php" class="btn viewBtn">Quick View</a></span>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="single-product.php">Dip Dyed Sweater</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      <h3>$249</h3>
                      <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target=".login-modal"><i class="fa fa-heart" aria-hidden="true"></i></button>
                        <button type="button" class="btn btn-default" onclick="location.href='cart-page.php';"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="media">
                    <div class="media-left">
                      <img class="media-object" src="img/products/products-08.jpg" alt="Image">
                      <span class="maskingImage"><a data-toggle="modal" href="-2.php" class="btn viewBtn">Quick View</a></span>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="single-product.php">Dip Dyed Sweater</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      <h3>$249</h3>
                      <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target=".login-modal"><i class="fa fa-heart" aria-hidden="true"></i></button>
                        <button type="button" class="btn btn-default" onclick="location.href='cart-page.php';"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>  
            </div>
          </div>
        </div>
      </section>

      <!-- LIGHT SECTION -->
      <section class="lightSection clearfix">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="owl-carousel partnersLogoSlider">
                <div class="slide">
                  <div class="partnersLogo clearfix">
                    <img src="img/home/partners/partner-01.png" alt="partner-img">
                  </div>
                </div>  
                <div class="slide">
                  <div class="partnersLogo clearfix">
                    <img src="img/home/partners/partner-02.png" alt="partner-img">
                  </div>
                </div>
                <div class="slide">
                  <div class="partnersLogo clearfix">
                    <img src="img/home/partners/partner-03.png" alt="partner-img">
                  </div>
                </div>
                <div class="slide">
                  <div class="partnersLogo clearfix">
                    <img src="img/home/partners/partner-04.png" alt="partner-img">
                  </div>
                </div>
                <div class="slide">
                  <div class="partnersLogo clearfix">
                    <img src="img/home/partners/partner-05.png" alt="partner-img">
                  </div>
                </div>
                <div class="slide">
                  <div class="partnersLogo clearfix">
                    <img src="img/home/partners/partner-01.png" alt="partner-img">
                  </div>
                </div>  
                <div class="slide">
                  <div class="partnersLogo clearfix">
                    <img src="img/home/partners/partner-02.png" alt="partner-img">
                  </div>
                </div>
                <div class="slide">
                  <div class="partnersLogo clearfix">
                    <img src="img/home/partners/partner-03.png" alt="partner-img">
                  </div>
                </div>
              </div>              
            </div>
          </div>
        </div>
      </section>
      
      <!-- FOOTER -->
      <?php include ('footer.php');?>

  </body>

<!-- Mirrored from themes.iamabdus.com/bigbag/1.0/product-list-left-sidebar.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Jul 2016 10:31:57 GMT -->
</html>
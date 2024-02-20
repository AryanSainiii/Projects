<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kute-themes.com/html/boutique/html/product-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Jul 2021 12:16:36 GMT -->
<head>
    <title>Boutique - eCommerce</title>
    <?php include('common_2/header_lib.php') ?>
</head>
<body>
<div id="box-mobile-menu" class="box-mobile-menu full-height full-width">
    <div class="box-inner">
        <span class="close-menu"><span class="icon pe-7s-close"></span></span>
    </div>
</div>
<div id="header-ontop" class="is-sticky"></div>
<?php include('common_2/header.php') ?>
<div class="container">
  <div class="shop-banner">
        <img src="images/slides/slider-cat2.jpg" alt="">
    </div>
  <div class="breadcrumbs style2">
      <a href="#">Home</a>
      <span>Categories_Leftsidebar</span>
  </div>
  <div class="row">
    <div class="main-content col-sm-12">
      <div class="row">
        <div class="col-sm-4">
          <div class="product-detail-image style2">
          <form action="<?php echo base_url('home/cart_2')?>" method="post">
                <div class="main-image-wapper">
                    <img class="main-image" src="<?php echo base_url();?>includes/home/images/products/<?php echo $product["0"]["image"]?>" alt="">
                </div>
                <div class="thumbnails owl-carousel nav-center-center nav-style3" data-responsive='{"0":{"items":3},"481":{"items":4},"600":{"items":3},"1000":{"items":4}}' data-autoplay="true" data-loop="true" data-items="4" data-dots="false" data-nav="true" data-margin="20">
                    <a data-url="images/products/4_cate2.png" class="active" href="#"><img src="images/products/4_cate2.png" alt=""></a>
                    <a data-url="images/products/4_cate5.png" href="#"><img src="images/products/4_cate5.png" alt=""></a>
                    <a data-url="images/products/4_cate4.png" href="#"><img src="images/products/4_cate4.png" alt=""></a>
                    <a data-url="images/products/4_cate1.png" href="#"><img src="images/products/4_cate1.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="product-details-right style2">
                <h3 class="product-name"><?php echo $product["0"]["product_name"]?></h3>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <span class="count-review">( 2 <span>Reviews</span> )</span>
                </div>
                <span class="price">
                    <ins><?php echo $product["0"]["price"]?></?></ins>
                </span>
                <div class="meta">
                    <span>Only 15 left  3</span>
                    <span>Availalbe: <span class="text-primary">In Stock</span></span>
                </div>
                <div class="short-descript">
                    <?php echo $product["0"]["description"]?>
                </div>
                <div class="select-color">
                  <label>COLOR</label>
                  <div class="inner">
                    <a href="#"><span style="background-color:#736357;"></span></a>
                    <a class="active" href="#"><span style="background-color:#bdb871;"></span></a>
                    <a href="#"><span style="background-color:#f26522;"></span></a>
                    <a href="#"><span style="background-color:#fff799;"></span></a>
                  </div>
                </div>
                <div class="select-size">
                  <label>SIZE OPTIONS</label>
                  <div class="inner">
                      <a href="#"><span>S</span></a>
                      <a class="active" href="#"><span>M</span></a>
                      <a href="#"><span>L</span></a>
                      <a href="#"><span>XL</span></a>
                      <a href="#"><span>XXL</span></a>
                    </div>
                </div>
                <div class="size-chart">
                    <a href="#">SIZE chart</a>
                </div>

                <form class="cart-form" enctype="multipart/form-data" method="post">
                    <div class="quantity">
                        <a href="#">-</a>
                        <input type="text" size="4" class="input-text qty text" title="Qty" value="03" name="quantity">
                        <a href="#">+</a>
                    </div>
                    <input type="hidden" value="1" name="quantity"/>
					<input type="hidden" value="<?php echo $product["0"]["id"]?>" name="productt_id"/>
					<input type="hidden" value="<?php echo $product["0"]["product_name"]?>" name="product_name"/>
					<input type="hidden" value="<?php echo $product["0"]["price"]?>" name="price"/>
					<input type="hidden" value="<?php echo $product["0"]["image"]?>" name="image"/>
                    <button type="submit" class="button button-add-cart" data-quantity="1"  href="<?php echo base_url('home/cart_2')?>">Add to cart</button>
                    <a class="wishlist button" href="#"><i class="fa fa-heart-o"></i></a>
                    <a href="#" class="button compare"><i class="fa fa-exchange"></i></a>
                </form>
                <div class="share">
                    <a href="#"><i class="fa fa-print"></i> Print</a>
                    <a href="#"><i class="fa fa-envelope-o"></i> Send to a friend</a>
                </div> 
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- tab -->
<div class="container">                        
    <div class="tab-details-product style2">
        <ul class="box-tabs nav-tab">
            <li class="active"><a data-toggle="tab" href="#tab-1">DESCRIPTION</a></li>
            <li><a data-toggle="tab" href="#tab-2">ADDITIONAL INFORMATION</a></li>
        </ul>
        <div class="tab-container">
              <div id="tab-1" class="tab-panel active">
                <p>Lorem ipsum dolor sit amet isse potenti sesquam ante aliquet lacusemper elit. Cras neque nulla convallis non comodo.</p>
                <ul>
                    <li>Soft-touch jersey</li>
                    <li>Crew neck </li>
                    <li>Logo print</li>
                    <li>Regular fit - true to size</li>                                                    
                </ul>
                <ul>
                    <li>Machine wash</li>
                    <li>100% Cotton</li>
                    <li>Our model wears a size Medium and is 185.5cm/6'1" tall</li>                                                   
                </ul>
            </div>
            <div id="tab-2" class="tab-panel">
                <p>Quisque sodales sodales lacus pharetra bibendum. Etiam commodo non velit ac rhoncus. Mauris euismod purus sem, ac adipiscing quam laoreet et. Praesent vulputate ornare sem vel scelerisque. Ut dictum augue non erat lacinia, sed lobortis elit gravida. Proin ante massa, ornare accumsan ultricies et, posuere sit amet magna. Praesent dignissim, enim sed malesuada luctus, arcu sapien sodales sapien, ut placerat eros nunc vel est. Donec tristique mi turpis, et sodales nibh gravida eu. Etiam odio risus, porttitor non lacus id, rhoncus tempus tortor. Curabitur tincidunt molestie turpis, ut luctus nibh sollicitudin vel. Sed vel luctus nisi, at mattis metus. Aenean ultricies dolor est, a congue ante dapibus varius. Nulla at auctor nunc. Curabitur accumsan feugiat felis ut pretium. Praesent semper semper nisi, eu cursus augue.</p>
            </div>     
        </div>  
    </div> 
    <div class="product-slide upsell-products">
        <div class="section-title text-center"><h3>UPSELL PRODUCTS</h3> </div>
         <ul class="owl-carousel" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}' data-autoplay="true" data-loop="true" data-items="4" data-dots="false" data-nav="false" data-margin="30">
            <li class="product-item">
                <div class="product-inner">
                    <div class="product-thumb">
                        <a href="#"><img src="images/products/5.jpg" alt=""></a>
                        <div class="gorup-button">
                          <a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
                          <a href="#" class="compare"><i class="fa fa-exchange"></i></a>
                          <a href="#" class="quick-view"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
                        <span class="price">
                            <ins>£85.00</ins>
                            <del>£95.00</del>
                        </span>
                        <a href="#" class="button">ADD TO CART</a>
                    </div>
                </div>
            </li>
            <li class="product-item">
                <div class="product-inner">
                    <div class="product-thumb">
                        <a href="#"><img src="images/products/6.jpg" alt=""></a>
                        <div class="gorup-button">
                          <a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
                          <a href="#" class="compare"><i class="fa fa-exchange"></i></a>
                          <a href="#" class="quick-view"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
                        <span class="price">
                            <ins>£85.00</ins>
                            <del>£95.00</del>
                        </span>
                        <a href="#" class="button">ADD TO CART</a>
                    </div>
                </div>
            </li>
            <li class="product-item">
                <div class="product-inner">
                    <div class="product-thumb">
                        <a href="#"><img src="images/products/7.jpg" alt=""></a>
                        <div class="gorup-button">
                          <a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
                          <a href="#" class="compare"><i class="fa fa-exchange"></i></a>
                          <a href="#" class="quick-view"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
                        <span class="price">
                            <ins>£85.00</ins>
                            <del>£95.00</del>
                        </span>
                        <a href="#" class="button">ADD TO CART</a>
                    </div>
                </div>
            </li>
            <li class="product-item">
                <div class="product-inner">
                    <div class="product-thumb">
                        <a href="#"><img src="images/products/8.jpg" alt=""></a>
                        <div class="gorup-button">
                          <a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
                          <a href="#" class="compare"><i class="fa fa-exchange"></i></a>
                          <a href="#" class="quick-view"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
                        <span class="price">
                            <ins>£85.00</ins>
                            <del>£95.00</del>
                        </span>
                        <a href="#" class="button">ADD TO CART</a>
                    </div>
                </div>
            </li>
        </ul>   
    </div> 
</div> <!--END CONTAINER-->  
<!-- ./tab -->
<div class="margin-top-60 margin-bottom-30">  
    <div class="container">  
        <div class="row">
          <div class="col-sm-12 col-md-4">
              <div class="element-icon style2">
                <div class="icon"><i class="flaticon flaticon-origami28"></i></div>
                <div class="content">
                  <h4 class="title">FREE SHIPPING WORLD WIDE</h4>
                </div>
              </div>
          </div>
          <div class="col-sm-12 col-md-4">
              <div class="element-icon style2">
                <div class="icon"><i class="flaticon flaticon-curvearrows9"></i></div>
                <div class="content">
                  <h4 class="title">MONEY BACK GUARANTEE</h4>
                </div>
              </div>
          </div>
          <div class="col-sm-12 col-md-4">
              <div class="element-icon style2">
                <div class="icon"><i class="flaticon flaticon-headphones54"></i></div>
                <div class="content">
                  <h4 class="title">ONLINE SUPPORT 24/7</h4>
                </div>
              </div>
          </div>
        </div>
    </div>  
</div>
    <?php include('common_2/footer.php') ?>
    <a href="#" class="scroll_top" title="Scroll to Top" style="display: block;"><i class="fa fa-arrow-up"></i></a>
    <?php include('common_2/footer_lib.php') ?>
</body>

<!-- Mirrored from kute-themes.com/html/boutique/html/product-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Jul 2021 12:16:44 GMT -->
</html>
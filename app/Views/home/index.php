<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kute-themes.com/html/boutique/html/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Jul 2021 11:57:15 GMT -->
<head>
    <title>Boutique - eCommerce</title>
	<?php include('common_2/header_lib.php')?>
</head>
<body class="home">
<div id="box-mobile-menu" class="box-mobile-menu full-height full-width">
	<div class="box-inner">
		<span class="close-menu"><span class="icon pe-7s-close"></span></span>
	</div>
</div>
<div id="header-ontop" class="is-sticky"></div>
<?php include('common_2/header.php')?>
<!-- Home slide -->
<div class="home-slide3 owl-carousel nav-style3 nav-center-center" data-animateout="fadeOut" data-animatein="fadeIn" data-items="1" data-nav="true" data-dots="false" data-loop="true" data-autoplay="true">
	<img src="<?php echo base_url(); ?>includes/home/images/slides/8.jpg" alt="">
	<img src="<?php echo base_url(); ?>includes/home/images/slides/27.jpg" alt="">
	<img src="<?php echo base_url(); ?>includes/home/images/slides/28.jpg" alt="">
</div>
<!-- ./Home slide -->
<div class="container">
	<div class="text-border margin-top-30">
		<p>FREE UK DELIVERY + RETURN OVER £85.00 (EXCLUDING HOMEWARE)| FREE UK COLLECT FROM STORE</p>
	</div>
	<div class="margin-top-10">
		<div class="row">
			<div class="col-sm-4 margin-top-30">
				<a class="banner-opacity" href="#"><img src="<?php echo base_url(); ?>includes/home/images/b/8.jpg" alt=""></a>
			</div>
			<div class="col-sm-4 margin-top-30">
				<a class="banner-opacity" href="#"><img src="<?php echo base_url(); ?>includes/home/images/b/9.jpg" alt=""></a>
			</div>
			<div class="col-sm-4 margin-top-30">
				<a class="banner-opacity" href="#"><img src="<?php echo base_url(); ?>includes/home/images/b/10.jpg" alt=""></a>
			</div>
		</div>
	</div>
	<div class="margin-top-60 our-category">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-5">
				<div class="section-title text-center margin-top-40 margin-bottom-30">
					<h3>OUR CATEGORIES</h3>
					<span class="sub-title">Find all items you want by select our featured categories</span>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-7">
				<ul class="category-menu category-carousel pull-left owl-carousel nav-style7 nav-center-center" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="30" data-responsive='{"0":{"items":1},"600":{"items":4},"1000":{"items":4}}'>
					<?php foreach($category_all as $row)
					if($row["parent_id"]==0)
					{
					{?>
					<li>
					<a href="<?php echo base_url('home/dashboard?id='.$row["id"])?>">
					<img src="<?php echo base_url(); ?>includes/home/images/<?php echo $row["image"]?>" alt="">
					<?php echo $row["name"]?>
					</a>
				</li>
				<?php }}
					?>
					
				</ul>
			</div>
		</div>
	</div>
	<div class="margin-top-50">
		<div class="tab-product">
			<ul class="box-tabs nav-tab tab-owl-fade-effect">
				<?php 
				if(isset($sub_category)){
					foreach($sub_category as $row)
				{ 
						?>
                		<li>
							<a data-animated='fadeInUp' href="<?php echo base_url('home/dashboard?sub_cat='.$row["id"])?>"><?php echo $row["name"]?></a>
						</li>
				<?php }}
				else{
					?>
						<li class=""><a data-animated='fadeInUp' data-toggle="tab" href="#tab-1">All Produts</a></li>
				<?php }
				 ?>
            </ul>
            <div class="tab-content">
            	<div class="tab-container">
            		<div id="tab-1" class="tab-panel active">
            			<ul class="tab-list owl-carousel nav-style7 nav-center-center" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="30" data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":4}}'>
							<?php foreach($products as $row)
							{?>
            				<li class="product-item">
								<div class="product-inner">
									<form action="<?php echo base_url('home/cart_2')?>" method="post">
									<div class="product-thumb has-back-image">
										<a href="#"><img name="image" style="height: 130px;width: 100px;margin-left:80px" src="<?php echo base_url(); ?>includes/home/images/products/<?php echo $row["image"]?>" alt=""></a>
										<a class="back-image" href="#"><img src="images/products/2.jpg" alt=""></a>
										<div class="gorup-button">
											<a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
											<a href="#" class="compare"><i class="fa fa-exchange"></i></a>
											<a href="<?php echo base_url('home/product_view/'.$row["id"])?>" class="quick-view"><i class="fa fa-search"></i></a>
										</div>
									</div>
									<div class="product-info">
										<h3 name="product_name" class="product-name"><a href="#" ><?php echo $row["product_name"]?></a></h3>
										<span name="price" class="price">
											<ins><?php echo $row["price"]?></ins>
											<!-- <del>£95.00</del> -->
										</span>
										<input type="hidden" value="1" name="quantity"/>
										<input type="hidden" value="<?php echo $row["id"]?>" name="productt_id"/>
										<input type="hidden" value="<?php echo $row["product_name"]?>" name="product_name"/>
										<input type="hidden" value="<?php echo $row["price"]?>" name="price"/>
										<input type="hidden" value="<?php echo $row["image"]?>" name="image"/>
										<button type="submit" class="button">ADD TO CART</button>
									</div>
									</form>
								</div>
							</li>
							<?php }?>
							
            			</ul>
            		</div>
            		<div id="tab-2" class="tab-panel">
            			<ul class="tab-list owl-carousel nav-style7 nav-center-center" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="30" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
            				<li class="product-item">
								<div class="product-inner">
									<div class="product-thumb has-back-image">
										<a href="#"><img src="<?php echo base_url(); ?>includes/home/images/products/5.jpg" alt=""></a>
										<a class="back-image" href="#"><img src="images/products/6.jpg" alt=""></a>
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
									<div class="product-thumb has-back-image">
										<a href="#"><img src="<?php echo base_url(); ?>includes/home/images/products/6.jpg" alt=""></a>
										<a class="back-image" href="#"><img src="images/products/7.jpg" alt=""></a>
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
									<div class="product-thumb has-back-image">
										<a href="#"><img src="<?php echo base_url(); ?>includes/home/images/products/7.jpg" alt=""></a>
										<a class="back-image" href="#"><img src="images/products/8.jpg" alt=""></a>
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
									<div class="product-thumb has-back-image">
										<a href="#"><img src="<?php echo base_url(); ?>includes/home/images/products/8.jpg" alt=""></a>
										<a class="back-image" href="#"><img src="images/products/9.jpg" alt=""></a>
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
            	</div>
            </div>
		</div>
	</div>
	<div class="margin-top-60 section-lasttest-blog">
		<div class="section-title text-center"><h3>Our BLog</h3></div>
		<div class="lastest-blog owl-carousel nav-center-center nav-style7" data-nav="true" data-dots="false" data-loop="true" data-margin="30" data-responsive='{"0":{"items":1},"600":{"items":1},"1000":{"items":2}}'>
			<div class="item-blog">
				<div class="left">
					<div class="blog-date">
						<span class="day">7</span>
						<span class="month">/SEP</span><br>
						<span class="year">2015</span>
					</div>
					<h3 class="blog-title"><a href="#">We're the best Designers from UK</a></h3>
					<div class="meta">
						<span class="author">John Doe</span>
						<span class="comment"><i class="fa fa-comment"></i> 36 comments</span>
					</div>
				</div>
				<div class="right">
					<a class="banner-border" href="#"><img src="<?php echo base_url(); ?>includes/home/images/blogs/1.jpg" alt=""></a>
				</div>
			</div>
			<div class="item-blog">
				<div class="left">
					<div class="blog-date">
						<span class="day">7</span>
						<span class="month">/SEP</span><br>
						<span class="year">2015</span>
					</div>
					<h3 class="blog-title"><a href="#">We're the best Designers from UK</a></h3>
					<div class="meta">
						<span class="author">John Doe</span>
						<span class="comment"><i class="fa fa-comment"></i> 36 comments</span>
					</div>
				</div>
				<div class="right">
					<a class="banner-border" href="#"><img src="<?php echo base_url(); ?>includes/home/images/blogs/2.jpg" alt=""></a>
				</div>
			</div>
			<div class="item-blog">
				<div class="left">
					<div class="blog-date">
						<span class="day">7</span>
						<span class="month">/SEP</span><br>
						<span class="year">2015</span>
					</div>
					<h3 class="blog-title"><a href="#">We're the best Designers from UK</a></h3>
					<div class="meta">
						<span class="author">John Doe</span>
						<span class="comment"><i class="fa fa-comment"></i> 36 comments</span>
					</div>
				</div>
				<div class="right">
					<a class="banner-border" href="#"><img src="<?php echo base_url(); ?>includes/home/images/blogs/1.jpg" alt=""></a>
				</div>
			</div>
		</div>
	</div>

	<div class="section-brand-slide">
		<div class="brands-slide owl-carousel nav-center-center nav-style7" data-nav="true" data-dots="false" data-loop="true" data-margin="60" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
			<a href="#"><img src="<?php echo base_url(); ?>includes/home/images/brands/brand1.png" alt=""></a>
			<a href="#"><img src="<?php echo base_url(); ?>includes/home/images/brands/brand2.png" alt=""></a>
			<a href="#"><img src="<?php echo base_url(); ?>includes/home/images/brands/brand3.png" alt=""></a>
			<a href="#"><img src="<?php echo base_url(); ?>includes/home/images/brands/brand4.png" alt=""></a>
			<a href="#"><img src="<?php echo base_url(); ?>includes/home/images/brands/brand5.png" alt=""></a>
		</div>
	</div>
	<div class="margin-top-60">
		<div class="row">
			<div class="col-sm-12 col-md-7">
				<div class="video video-lightbox">
					<img src="<?php echo base_url(); ?>includes/home/images/bg_video.png" alt="">
					<div class="overlay"></div>
					<a href="#"  class="link-lightbox button-play" data-videoid="134060140" data-videosite="vimeo"></a>
				</div>
			</div>
			<div class="col-sm-12 col-md-5">
				<div class="newsletter">
                    <div class="section-title text-center"><h3>NEWSLETTER</h3></div>
                    <i class="newsletter-info">Sign up for Our Newsletter &amp; Promotions</i>
                    <form class="form-newsletter">
                      <input type="text" name="newsletter" placeholder="Your email address here..." value="">
                      <span><button class="newsletter-submit" type="submit">SIGNUP</button></span>
                    </form>
                </div>
			</div>
		</div>
	</div>
	<div class="margin-top-60 margin-bottom-30">
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
	<?php include('common_2/footer.php')?>
	<a href="#" class="scroll_top" title="Scroll to Top" style="display: block;"><i class="fa fa-arrow-up"></i></a>
	<?php include('common_2/footer_lib.php')?>
</body>

<!-- Mirrored from kute-themes.com/html/boutique/html/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Jul 2021 11:58:28 GMT -->
</html>
<header id="header" class="header style3">
	<div class="container">
		<div class="main-menu-wapper">
		<div class="row">
			<div class="col-sm-12 col-md-3 logo-wapper">
				<div class="logo">
					<a href="#"><img src="<?php echo base_url(); ?>includes/home/images/logos/1.png" alt=""></a>
				</div>
			</div>
			<div class="col-sm-12 col-md-9 menu-wapper">
				<div class="top-header">
					<span class="mobile-navigation"><i class="fa fa-bars"></i></span>
					<div class="slogan">"Boutique is a reflection of you!"</div>
					<div class="box-control">
						<form  class="box-search">
							<div class="inner">
								<input type="text" class="search" placeholder="Search here...">
								<button class="button-search"><span class="pe-7s-search"></span></button>
							</div>
						</form>
						<div class="mini-cart">
							<a class="cart-link" href="<?php echo base_url('home/cart')?>"><span class="icon pe-7s-cart"></span> <span class="count"><?php echo $rows ?></span></a>
							<div class="show-shopping-cart">
                                <h3 class="title">YOU HAVE <span class="text-primary">(<?php echo $rows?> ITEMS)</span> IN YOUR CART</h3>
                                <ul class="list-product">
                                    <?php foreach($Cart as $row){?>
                                	<li>
                                		<div class="thumb">
                                			<img style="height:100px" src="<?php echo base_url(); ?>includes/home/images/products/<?php echo $row["product_image"]?>" alt="">
                                		</div>
                                		<div class="info">
                                			<h4 class="product-name"><a href="#"><?php echo $row["product_name"]?></a></h4>
                                			<span class="price"><?php echo $row["price"]?> ₹</span>
                                			<a class="remove-item" href="#"><i class="fa fa-close"></i></a>
                                		</div>
                                	</li>
                                    <?php }?>
                                </ul>
                                
                                <div class="group-button">
                                	<a href="#" class="button">Shopping Cart</a>
                                	<a href="#" class="check-out button">CheckOut</a>
                                </div>
    						</div>
						</div>
                        <div class="mini-cart">
                        <?php if(isset($_SESSION['user_name']))
                            {?>
                            <ul class="boutique-nav main-menu clone-main-menu">
                               <li class="menu-item-has-children">
                                <a href="#"><?php echo $_SESSION['user_name'];?></a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">My Account</a></li>
                                    <li><a href="cart.html">My Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="wishlist.html">wishlist</a></li>
                                    <li><a href="<?php echo base_url('home/logout')?>">Logout</a></li>
                                </ul>
                            </li> 
                             <?php }
                            else{ ?>
                            <a href="<?php echo base_url('home/register')?>"><?php echo "Login/Register" ?>
                            </a>
                            <?php }
                              ?>
                        </div>
						<div class="box-settings">
                            <span class="icon pe-7s-config"></span>
                            <div class="settings-wrapper ">
                                <div class="setting-content">
                                    <div class="select-language">
                                        <div class="language-title">Select language</div>
                                        <div class="language-topbar">                                                
                                            <div class="lang-list">
                                                <ul class="clearfix">
                                                    <li class="active"><a href="#"> <img src="images/flag1.png" alt=""> </a></li>
                                                    <li><a href="#"> <img src="images/flag2.png" alt=""></a></li>
                                                    <li><a href="#"> <img src="images/flag3.png" alt=""></a></li>
                                                    <li><a href="#"> <img src="images/flag4.png" alt=""></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="select-currency">
                                        <div class="currency-title">Select currency</div>
                                        <div class="currency-topbar">                                                
                                            <div class="currency-list">
                                                <ul class="clearfix">
                                                    <li><a href="#"><span class="sym"><i class="fa fa-usd"></i></span></a></li>
                                                    <li class="active"><a href="#"><span class="sym"><i class="fa fa-eur"></i></span></a></li>
                                                    <li><a href="#"><span class="sym"><i class="fa fa-gbp"></i></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-option">
                                        <ul>
                                            <li><a href="#"><i class="icon-heart icons"></i><span>Wishlist</span></a></li>
                                            <li><a href="#"><i class="icon-user icons"></i><span> MyAccount</span></a></li>                                               
                                            <li><a href="#"><i class="icon-note icons"></i><span>Checkout</span></a></li>
                                             <li><a href="#"><i class="icon-handbag icons"></i><span>Compare</span></a></li>
                                             <li><a href="#"><i class="icon-lock-open icons"></i><span>Login / Register</span></a></li>
                                        </ul>
                                    </div>
                            	</div>
                        	</div>
						</div>
					</div>
				</div>
				<ul class="boutique-nav main-menu clone-main-menu">                                      
					<li class="active menu-item-has-children item-megamenu">
						<a href="<?php echo base_url('home/dashboard')?>">Home</a>
						<div style="width:500px;" class="sub-menu megamenu">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mega-custom-menu">
                                        <ul>
                                            <li><a href="<?php base_url('home/dashboard')?>">Home Dashboard</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
					</li>
					<li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <span class="arow"></span>
                        <ul class="sub-menu">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="wishlist.html">wishlist</a></li>
                            <li><a href="lookbook.html">Lookbook</a></li>
                            <li><a href="404.html">404 page</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children item-megamenu">
                        <a href="#">Shop</a>
                        <div style="width:820px; background-image:url('images/bg-megamenu.png'); " class="sub-menu megamenu megamenu-bg" >
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="mega-custom-menu">
                                        <h2 class="title">CATEGORIES</h2>
                                        <ul>
                                            <li><a href="category-left-sidebar.html">Left sidebar</a></li>
                                            <li><a href="category-right-sidebar.html">Right sidebar</a></li><li><a href="category-list.html">Category list</a></li>
                                            <li><a href="category-2columns.html">2 columns</a></li>
                                            <li><a href="category-3columns.html">3 columns</a></li>
                                            <li><a href="category-4columns.html">4 columns</a></li>
                                            <li><a href="category-6columns.html">6 columns</a></li>
                                            <li><a href="category2-leftsidebar.html">Categorie Style 2</a></li>
                                            <li><a href="category3-leftsidebar.html">Categorie Style 3</a></li>
                                            <li><a href="category4-leftsidebar.html">Categorie Style 4</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mega-custom-menu">
                                        <h2 class="title">PRODUCT</h2>
                                        <ul>
                                            <li><a href="product-1.html">Product Simple</a></li>
                                            <li><a href="product-2.html">Out of Stock</a></li>
                                            <li><a href="product-3.html">Product Fullwidth</a></li>
                                            <li><a href="product-4.html">Product Left Sidebar</a></li>
                                            <li><a href="product-5.html">External/Affiliate product</a></li>
                                            <li><a href="product-6.html">Grouped product</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
					<li class="menu-item-has-children item-megamenu">
						<a href="#">FEATURES</a>
						<div style="width:1500px;" class="sub-menu megamenu">
							<div class="row">
								<div class="col-sm-6">
									<div class="element-icon">
										<div class="icon"><img src="images/icons/icon-custom.png" alt=""></div>
										<div class="content">
											<h4 class="title">EASY CUSTOMIZE</h4>
										<div class="text"><p>Maecenas sit amet lectus vulputate, tristique mi a, lobortis erat. Nunc quis malesuada urna. Ut in blandit diam. Sed diam sem, imperdiet id enim blandit, vehicula blandit libero.</p></div>
										</div>
									</div>
									<div class="element-icon">
										<div class="icon"><img src="images/icons/icon-color.png" alt=""></div>
										<div class="content">
											<h4 class="title">UNLIMITED COLOR</h4>
										<div class="text"><p>Maecenas sit amet lectus vulputate, tristique mi a, lobortis erat. Nunc quis malesuada urna. Ut in blandit diam. Sed diam sem, imperdiet id enim blandit, vehicula blandit libero.</p></div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="element-icon">
										<div class="icon"><img src="images/icons/icon-responsive.png" alt=""></div>
										<div class="content">
											<h4 class="title">RESPONSIVE DESIGN</h4>
										<div class="text"><p>Maecenas sit amet lectus vulputate, tristique mi a, lobortis erat. Nunc quis malesuada urna. Ut in blandit diam. Sed diam sem, imperdiet id enim blandit, vehicula blandit libero.</p></div>
										</div>
									</div>
									<div class="element-icon">
										<div class="icon"><img src="images/icons/icon-document.png" alt=""></div>
										<div class="content">
											<h4 class="title">EASY DOCUMENT</h4>
										<div class="text"><p>Maecenas sit amet lectus vulputate, tristique mi a, lobortis erat. Nunc quis malesuada urna. Ut in blandit diam. Sed diam sem, imperdiet id enim blandit, vehicula blandit libero.</p></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="menu-item-has-children">
						<a href="blogs.html">BLOG</a>
						<ul class="sub-menu">
							<li><a href="blogs.html">Blog List</a></li>
							<li><a href="blogpost.html">Blog Single</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		</div>
	</div>
</header>
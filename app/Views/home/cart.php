<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kute-themes.com/html/boutique/html/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Jul 2021 12:15:19 GMT -->
<head>
    <title>Boutique - eCommerce</title>
    <?php include('common_2/header_lib.php')?>
</head>
<body>
<div id="box-mobile-menu" class="box-mobile-menu full-height full-width">
	<div class="box-inner">
		<span class="close-menu"><span class="icon pe-7s-close"></span></span>
	</div>
</div>
<div id="header-ontop" class="is-sticky"></div>
    <?php include('common_2/header.php')?>
    <div class="main-container no-sidebar">
        <div class="container">
            <div class="main-content">
                <div class="page-title">
                    <h3>SHOPPING CART</h3>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <table class="shop_table cart">
                            <thead>
                                <tr>
                                    <th colspan="2" class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Qty</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $total = 0;?>
                                <?php foreach($Cart as $row){
                                    $total += $row["total"];
                                    ?>
                                    
                                <tr>
                                    <td class="product-thumbnail"><img style="height:100px;width:100px" src="<?php echo base_url(); ?>includes/home/images/products/<?php echo $row["product_image"]?>" alt="no"></td>
                                    <td class="product-name"><a href="#"><?php echo $row["product_name"]?></a></td>
                                    <td><?php echo $row["price"]?> ₹</td>
                                    <td>
                                    <div class="btn-group">
                                    <button type="button" class="btn btn-success plus" rel="<?php echo $row["id"]?>" id="plus" value="">+</button>
                                    <input class="btn qty" type="text" id="qty<?php echo $row["id"]?>" value="<?php echo $row["quantity"]?>">
                                    <button type="button" class="btn btn-danger minus" rel="<?php echo $row["id"]?>" id="minus<?php echo $row["id"]?>" value="">-</button>
                                    </div>
                                    </td>
                                    <td><?php echo $row["total"]?> ₹</td>
                                    <td class="product-remove"><a href="#"><i class="fa fa-close"></i></a></td>
                                </tr>  
                                <?php }
                                ?> 
                            </tbody>
                            <script>
                                $(document).ready(function(){
                                    $('.plus').click(function(){
                                        id = $(this).attr('rel');
                                        quantity = $('#qty'+id).val();
                                        $('#qty'+id).val(parseInt(quantity)+1);
                                        updated_qty = $('#qty'+id).val();
                                        window.location.href = "<?php echo base_url() ?>home/edit_cart/" + id + "/" + updated_qty;
                                        
                                    })
                                    $('.minus').click(function(){
                                        id = $(this).attr('rel');
                                        quantity = $('#qty'+id).val();
                                        $('#qty'+id).val(parseInt(quantity)-1);
                                        updated_qty = $('#qty'+id).val();
                                        window.location.href = "<?php echo base_url() ?>home/edit_cart/" + id + "/" + updated_qty;
                                    })
                                })
                            </script>
                        </table>
                        <div class="box-coupon">
                            <div class="coupon">
                                <h3 class="coupon-box-title">Coupon</h3>
                                <div class="inner-box">
                                    <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code">
                                    <input type="submit" class="button" name="apply_coupon" value="Apply Coupon">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="box-cart-total">
                            <h2 class="title">Cart Totals</h2>
                            <table>
                                <tr>
                                    <td>Subtotal</td>
                                    <td><span class="price"><?php echo $total?> ₹</span></td>
                                </tr>
                                <tr>
                                    <td>Shipping</td>
                                    <td>
                                        <label><input name="shipping" type="radio">Free Shipping</label>
                                        <label>
                                            <input name="shipping" type="radio">Local Delivery
                                            <span class="price">£50</span>
                                        </label>
                                        <label>
                                            <input name="shipping" type="radio">Flat Rate
                                            <span class="price">£100</span>
                                        </label>
                                        <label>
                                            <input name="shipping" type="radio">International
                                            <span class="price">£150</span>
                                        </label>
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <td>Total</td>
                                    <td><span class="price"><?php echo $total?> ₹</span></td>
                                </tr>
                            </table>
                            
                            <a href="<?php echo base_url('home/checkout')?>" class="button btn-primary medium checkout-button">PROCEED TO CHECKOUT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="margin-top-60">
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
    </div>
	<?php include('common_2/footer.php')?>
	<a href="#" class="scroll_top" title="Scroll to Top" style="display: block;"><i class="fa fa-arrow-up"></i></a>
    <?php include('common_2/footer_lib.php')?>
</body>

<!-- Mirrored from kute-themes.com/html/boutique/html/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Jul 2021 12:15:19 GMT -->
</html>
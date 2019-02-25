<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LeoSìShop - Thanh Toán Đơn Hàng</title>
	<?php require_once("../app/views/layouts/bootstrap.php"); ?>
</head>
<body>
	<div class="payement-main">

		<div class="row">

			<div class="col-md-7" > 

				<div class="payment-left">
					
					<div class="header-payment">
					<h3 class="title-name-shop">LeoSì Shop</h3>
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb" id="payment">
					    <li class="breadcrumb-item"><a href="<?php echo ROOTURL."/cart/index";?>"> Giỏ Hàng</a></li>
					    <li class="breadcrumb-item active" aria-current="page"> Thông tin giao hàng</li>
					  </ol>
					</nav>	
				</div>
				
				<div class="information-payment">
					<h5>Thông tin giao hàng</h5>
					Bạn đã có tài khoản? <a href=""> Đăng nhập</a>

					<form action="<?php echo ROOTURL.'/cart/orderReceived'; ?>" method="POST">

							<div class="customer">
								<input type="text" placeholder="Họ và tên" name="name" id="payment-name"> </br>
								<input type="email" placeholder="email" name="email" id="payment-email">
								<input type="tel" size="10" placeholder="số điện thoại" id="payment-numberphone" name="paymentNumberPhone" > </br>
								<input type="text" placeholder="địa chỉ" name="addressRevice" id="payment-address"> </br>
								( Ví dụ : 235B, Nguyễn Văn Cừ, Phường Nguyễn Cư Trinh, Quận 1, TP.HCM)
							</div>
							<div class="shipping-method">
								<h5>Phương thức vận chuyển</h5>
								<!-- <form> -->
								    <label class="radio-inline">
								      <input type="radio" name="shippingMethod" checked>Giao hàng tận nơi
								    </label>
								<!-- </form> -->
							</div>
							<div class="payment-method">
								<h5>Phương thức thanh toán</h5>
								<!-- <form> -->
								    <label class="radio-inline">
								      <input type="radio" name="paymentMethod" checked>Thanh toán khi giao hàng (COD)
								    </label> </br>	
								   <!--  <label class="radio-inline">
								      <input type="radio" name="paymentMethod">Chuyển khoản qua ngân hàng
								    </label> -->
								<!-- </form> -->
							</div>

						</div>

						<div class="payment-finish">

							<a id="back-cart" href="<?php echo ROOTURL."/cart/index";?>">< Giỏ Hàng</a>

							 <button type="submit" class="btn" id="btnPaymentFinish" name="btnPaymentFinish"> Hoàn tất đơn hàng</button>
						
						</div>
					
					</form>

				<!-- line -->
				<hr class="line-payment-page">

				</div>

			</div>

			<div class="col-md-5" id="payment-left" > 
				<div class="payment-right">
					<div class="payment-product-all">
						<?php
							$numProductPurchase = count($data) - 1; // - priceTotal element

							for($i = 0 ; $i<$numProductPurchase;$i++) { ?>
								<div class="payment-product">

									<img src="<?php echo ROOTIMAGESPATH .'/product/'. $data[$i]['link_images'] ; ?>" alt="" id="product-pictures-payment">	
									
									<h7 id="product-name-payment">
										<?php echo $data[$i]['product_name']; ?>
									</h7> (<?php echo $data[$i]['quantity']; ?>)

									<h7 id="product-price-payment">
										<td class="row-cart"> <?php echo  number_format($data[$i]['priceTotal'], 0, '', ','); ?> đ  </td>
									</h7>

								</div>
						<?php } ?>

					</div>

					<div class="payment-voucher">

						<input type="text" placeholder=" Mã giảm giá" id="payment-voucher">

						<button class="btn" id="btnUseVoucher" name="btnUseVoucher">Sử dụng</button>

					</div>

					<div class="price-provisional">
						<?php $priceProvisional = $data['priceTotalAllProduct'];?>
						<h7 class="payment-price-provisional">
							Tạm tính 
						</h7>
						<h7 id="price-provisional">
							<td class="row-cart"> <?php echo number_format($priceProvisional, 0, '', ','); ?> đ  </td>
						</h7>


					</div>

					<div class="price-all">
						<?php $transportFee = 40000; ?>
						<h7 class="payment-price-provisional">
							Phí vận chuyển
						</h7>
						<h7 id="price-provisional">
							<td class="row-cart"> <?php echo  number_format($transportFee, 0, '', ','); ?> đ  </td>
						</h7>


					</div>
	
					<div class="price-total">
						<?php $priceFinish = $transportFee + $priceProvisional; ?>
						<h7 class="payment-price-provisional">
							Tổng cộng
						</h7>
						<h7 id="price-provisional">
							<td class="row-cart"> <?php echo  number_format($priceFinish, 0, '', ','); ?> đ  </td>
						</h7>


					</div>
					
				</div>
								
			</div>

		</div>

	</div>

</body>
</html>
<?php require_once("../app/views/layouts/header.php"); ?>
<div class="order-recevied">
		<div class="row" id="order-re">

			<div class="col-md-6" >
				<div class="order-detail">
					<h4 id="title-order-detail"> Chi tiết đơn hàng</h4>
				 </div>

				 <div class="product-order-recevied">
				 		<?php 
							 $numProduct = count($data) - 5; //transport_fee,price_total,payment_method,order_day,order_id
						?>
				 	<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">Sản phẩm</th>
					      <th scope="col"> </th>
					    </tr>
					  </thead>
					  <tbody>
						<!-- product -->
						<?php
						for ($i=0; $i < $numProduct ; $i++) { 
						?>
						    <tr>
						      <th scope="row"> <?php echo $data[$i]['product_name'].' x ' . $data[$i]['quantity'] ; ?></th>
						      <td><?php echo  number_format($data[$i]['priceTotal'], 0, '', ','); ?> đ</td>
						    </tr>
				  <?php } ?>
						<!-- transport fee -->
				  			<tr>
						      <th scope="row"> Phí vận chuyển: </th>
						      <td><?php echo  number_format($data['transport_fee'], 0, '', ','); ?> đ</td>
						 	</tr>
						<!-- payment method -->
							<tr>
						      <th scope="row"> Phương thức thanh toán: </th>
						      <td><?php echo $data['payment_method']; ?></td>
						 	</tr>
						 <!-- total price -->
							<tr>
						      <th scope="row"> Tổng cộng: </th>
						      <td><?php echo  number_format($data['price_total'], 0, '', ','); ?> đ</td>
						 	</tr>
					  </tbody>
					</table>
				 </div>
			 </div>
		
			<div class="col-md-6" >
				<div class="order-bill">
					<h6 style="color: green;">Cảm ơn bạn. Đơn hàng của bạn đã được nhận.</h6>
					<li>Mã đơn hàng: <?php echo $data['order_id']; ?></li>
					<li>Ngày: <?php echo $data['order_day']; ?></li>
					<li>Tổng cộng: <?php echo  number_format($data['price_total'], 0, '', ','); ?> đ</li>
					<li>Phương thức thanh toán: <?php echo $data['payment_method']; ?></li>
				 </div>
			 </div>

		</div>

</div>
<?php require_once("../app/views/layouts/footer.php"); ?>
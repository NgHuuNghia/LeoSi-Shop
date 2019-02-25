<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thông Tin Đơn Hàng</title>
	<?php require_once("../app/views/layouts/bootstrap.php"); ?>
</head>
<?php require_once("../app/views/layouts/header.php"); ?>
<div class="order-recevied">
		<div class="row">

			<div class="col-md-6" >
				<div class="order-detail">
					<h4 id="title-order-detail"> Chi tiết đơn hàng</h4>
				 </div>
				 <div class="product-order-recevied">
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
							// $numProduct = count($OrderReceivedData) - 1;
							// echo $numProduct;
							var_dump($OrderReceivedData)
						?>
					    <tr>
					      <th scope="row">1</th>
					      <td>Mark</td>
					    </tr>
					    <tr>
					      <th scope="row">2</th>
					      <td>Jacob</td>
					    </tr>
						<?php ?>
					  </tbody>
					</table>
				 </div>
			 </div>
		
			<div class="col-md-6" >
				<div class="order-bill"> </div>
			 </div>

		</div>

</div>
<?php require_once("../app/views/layouts/footer.php"); ?>
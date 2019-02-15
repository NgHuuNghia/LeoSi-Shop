<?php require_once("../app/views/layouts/header.php"); ?>
<h4 class="title-cart"> GIỎ HÀNG</h4>
<?php if($data == null) {?>
	<div class="notification-pay">
		<h7 class="none-product-purchase">
			Không có sản phẩm nào trong giỏ hàng!
		</h7> </br>	
		<a href="<?php echo ROOTURL.'/product/index'; ?>" class="continue-purchase">
			<i class="fa fa-reply"></i> Tiếp tục mua hàng
		</a>
	</div>
	
	
<?php } else {?>
<div class="list-product-purchase">
	<table class="table table-bordered">
  <thead>
    <tr class = "list-product">
      <th scope="col">Sản phẩm</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Giá tiền</th>
    </tr>
  </thead>
  <tbody>
	<?php
	$numProductPurchase = count($data) - 1; // - priceTotal element

	for($i = 0 ; $i<$numProductPurchase;$i++) { ?>
		<tr>
	    	<td class="row-cart"> 
	    		<div id="product-pictures-purchase">
				<img src="<?php echo ROOTIMAGESPATH .'/product/'. $data[$i]['link_images'] ; ?>" alt="" id="product-pictures-purchase">
			</div>
	    	</td>
	    	<td class="row-cart"> <?php echo $data[$i]['product_name']; ?> </td>
	    	<td class="row-cart">
	    		<div class="quantity-purchase-change">
	    			<input class="form-control" type="number" value="<?php echo $data[$i]['quantity']; ?>" min="1" id="example-number-input-pay" name="quantity"> 
	    			<a href="<?php echo ROOTURL.'/cart/removeProduct/'; echo$data[$i]['product_id'];?>" class="remove-product-purchase"><i class="fa fa-trash"></i></a>
	    		</div>
	    	</td>
	    	<td class="row-cart"> <?php echo  number_format($data[$i]['priceTotal'], 0, '', ','); ?> đ  </td>
    	</tr>
	<?php }
	?>

		    <tr>
		      <td colspan="3" class="title-cart-price">Tổng tiền:</td>
		      <td class="row-cart-price"> <?php echo  number_format($data['priceTotalAllProduct'], 0, '', ','); ?> đ  </td>
		    </tr>

  </tbody>
</table>
<button type="submit" class="btn" id="btn-pay" name="btn-pay">Tiến hành đặt hàng</button>
</div>
<?php }?>
<?php require_once("../app/views/layouts/footer.php"); ?>
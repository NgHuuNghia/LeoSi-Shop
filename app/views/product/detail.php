<?php require_once("../app/views/layouts/header.php"); ?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo ROOTURL; ?>">Trang Chủ</a></li>
    <li class="breadcrumb-item"><a href="<?php echo ROOTURL.'/'.'product'.'/'.$data['category_name']; ?>"><?php echo $data['category_name']; ?></a></li>
    <li class="breadcrumb-item active" aria-current="page"> <?php echo $data['product_name']; ?></li>
  </ol>
</nav>
<section id="productDetail">
	<div class="row">
		<div class="col-md-4">
			<div id="productPictures">
				<img src="<?php echo ROOTIMAGESPATH . $data['link_images'] ; ?>" alt="" id="productPictures">
			</div>
			<div class="row" id="product-feature-images">
				<div class="col-xs-4" id="images-feature" ><img src="<?php echo ROOTIMAGESPATH . $data['link_images'] ; ?>" alt="" id="product-feature-images"></div>
				<div class="col-xs-4" id="images-feature" ><img src="<?php echo ROOTIMAGESPATH . $data['link_images'] ; ?>" alt="" id="product-feature-images"></div>
				<div class="col-xs-4" id="images-feature"><img src="<?php echo ROOTIMAGESPATH . $data['link_images'] ; ?>" alt="" id="product-feature-images"></div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="form-buy">
				<h4><?php echo $data['product_name'];  ?></h4>
				<span style="color : #ff3425" id="price"> <?php echo  number_format($data['price'], 0, '', ','); ?> đ </span> </br>
				<div id="quantity" >Sản phẩm: <span style="color : #ff3425" > <?php if($data['quantity']>=1) echo "Còn hàng"; else echo "Hết hàng"; ?></span> </br></div>
				<div class="form-group">

					<?php 
						$numColumnTableProduct = 8;
						$sizeArrayData = count($data)/2 ;
						if ($numColumnTableProduct != $sizeArrayData) { ?>
					<label id="color">Màu sắc :</label>
					<select class="form-control">
						
						<?php 
							for($i = $numColumnTableProduct ; $i<= count($data)/2 + 1; $i++) {?>

								"<option value="<?php echo $data[$i]['color_name']; ?>"> <?php echo $data[$i]['color_name']; ?> </option>";

								<?php
							}
						}
						?>
					</select>
                    <div class="quantityPurchased">
                     <label id="quantityPurchased">Số lượng :</label>
                   <input class="form-control" type="number" value="1" min="1" id="example-number-input">
                    </div>
                    <button type="button" class="btn "> <i class="fas fa-cart-plus"> </i> THÊM VÀO GIỎ HÀNG</button>
				</div>

			</div>
		</div>
	</div>
	<div class="row">
		<div class="product-description">
			<h4 id="des">CHI TIẾT SẢN PHẨM</h4>
			
			<textarea class="form-control" name ="description" id="exampleFormControlTextarea1" rows="3" disabled="true"><?php  echo addslashes($data['detail']); ?></textarea>
		</div>
	</div>
	<div class="row">
		<div class="product-same">
			<h4 id="same">SẢN PHẨM TƯƠNG TỰ</h4>
			
		</div>
	</div>
</section>
<?php require_once("../app/views/layouts/footer.php"); ?>
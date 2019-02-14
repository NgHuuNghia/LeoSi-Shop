<?php require_once("../app/views/layouts/header.php"); ?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo ROOTURL; ?>">Trang Chủ</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Tìm kiếm: "Kết quả tìm kiếm "<?php echo $_GET['key'];?>" - LeoSìShop"</li>
  </ol>
</nav>
<div class="search-product">
<div class="title-search">
	<h3>TÌM KIẾM</h3>
	<h6 id="title-key">Kết quả tìm kiếm cho "<?php echo $_GET['key'];?>"</h6>
</div>
<section id="result-search-product" class="result-search-product">
		<?php if($data != null) { ?>
			<?php 
				$sizeArrProductData = count($data);
				$sizeArrProduct = $sizeArrProductData;
				$numProductInOneRow = 4;
			?>
			<?php for($i = 0 ; $i<=$sizeArrProduct; $i=$i+$numProductInOneRow) { ?>
			<div class="row">
				<?php for($j = $i,$k=0 ; $j<=$sizeArrProduct,$k<$numProductInOneRow;$j++,$k++) {?>
				<?php if ($j >= $sizeArrProduct) { break;}?>
				<div class="col-xs-4" id="product-search">
		            <img class="img-fluid mx-auto d-block" src="<?php echo ROOTIMAGESPATH.'/product/'.$data[$j]['link_images'];?>" alt="">
		            <div class="card-body">
		              <span><a href="<?php echo ROOTURL."/product/detail/". $data[$j]['product_id'];?>"><?php echo $data[$j]['product_name']?></a></span> </br>
		              <span id="price"><?php echo  number_format($data[$j]['price'], 0, '', ','); ?> đ </span> </br>
		              <div id="buy-product">
		                <span class="buy-product"><a href="<?php echo ROOTURL."/product/detail/". $data[$j]['product_id'];?>">Mua ngay</a></span>
		              </div>
		            </div>  
		    	</div>

				<?php }?>
		    	
			</div>
			<?php } ?>
		<?php } ?>
    
</section>
</div>

<?php require_once("../app/views/layouts/footer.php"); ?>
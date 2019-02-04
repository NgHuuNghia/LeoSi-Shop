<?php require_once("../app/views/layouts/header.php"); ?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo ROOTURL; ?>">Trang Chủ</a></li>
    <li class="breadcrumb-item"><a href="<?php echo ROOTURL.'/product/'; ?>">Danh Mục</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Tất cả sản phẩm </li>
  </ol>
</nav>
<div class="directory">
	<div class="row">
		<div class="col-md-3">
			<div class="product-directory">
				<h6 id="dir">DANH MỤC SẢN PHẨM</h6>
				<div class="dir-list">
					<li id="dir">Tai Nghe</li>
					<li id="dir">Máy Chơi Game</li>
					<li id="dir">Phụ kiện điện thoại</li>
					<li id="dir">Áo In TTG</li>
					<li id="dir">Gaming Gear</li>
				</div>

				<h6 id="product-recent-view">SẢN PHẨM VỪA XEM</h6>
				<?php 
					$sizeArrProduct = count($data);
				?>
				<?php for ($i = 0 ; $i<$sizeArrProduct ; $i++) {?>					<?php if(isset($_SESSION['currentIdProduct']) && $_SESSION['currentIdProduct'] == $data[$i]['product_id'] ) { ?>
						<div class="col-xs-4" id="product-current">
			            <img class="img-fluid mx-auto d-block" src="<?php echo ROOTIMAGESPATH.$data[$i]['link_images'];?>" alt="">
			            <div class="card-body">
			              <span><a href="<?php echo ROOTURL."/product/detail/". $data[$i]['product_id'];?>"><?php echo $data[$i]['product_name']?></a></span> </br>
			              <span id="price"><?php echo  number_format($data[$i]['price'], 0, '', ','); ?> đ </span> </br>
			              <div id="buy-product">
			                <span class="buy-product"><a href="<?php echo ROOTURL."/product/detail/". $data[$i]['product_id'];?>">Mua ngay</a></span>
			              </div>
			            </div>  
	            	</div>
					<?php break;} ?>
				<?php }?>
			</div>
		</div>
		<div class="col-md-9">
			<div class="banner-directory">
				<img src="<?php echo ROOTIMAGESPATH.'/banerdir.png' ?>" alt="" id="baner-dir">
			</div>

			<div class="top-content-directory">
				<div class="sort-product">
					<label for="">Sắp xếp theo:</label>
					<select class="form-dir" name="sort_type" id="select_sort_type">
						<option selected="selected"> Default  </option>
						<option value="new"> Mới Nhất  </option>
						<option value="old"> Cũ nhất </option>
						<option value="price-ascending"> Giá: Tăng dần </option>
						<option value="price-descending"> Giá: Giảm dần </option>
						<option value="a-z"> Tên: A-Z  </option>
						<option value="z-a"> Tên: Z-A  </option>
						<option value="best-selling"> Bán chạy nhất  </option>
					</select>
				</div>
				<div class="pagination">
					<nav aria-label="...">
					  <ul class="pagination">
					    <li class="page-item disabled">
					      <a class="page-link " href="#" tabindex="-1"> < </a>
					    </li>
					    <li class="page-item active"><a class="page-link" href="#">1</a></li>
					    <li class="page-item ">
					      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
					    </li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li>
					    <li class="page-item">
					      <a class="page-link" href="#"> > </a>
					    </li>
					  </ul>
					</nav>
				</div>
			</div>
			
			<div class="product-all">
				<?php 
					$numProductInOneRow = 3;
				?>
				<?php for($i = 0 ; $i<$sizeArrProduct; $i=$i+$numProductInOneRow) { ?>
				<div class="row">
					<?php for($j = $i,$k=0 ; $j<$sizeArrProduct,$k<$numProductInOneRow;$j++,$k++) {?>
					<?php if ($j >= $sizeArrProduct) { break;}?>
					<div class="col-xs-4" id="product-all">
			            <img class="img-fluid mx-auto d-block" src="<?php echo ROOTIMAGESPATH.$data[$j]['link_images'];?>" alt="">
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
				

				<div class="pagination-bottom">
					<nav aria-label="...">
					  <ul class="pagination">
					    <li class="page-item disabled">
					      <a class="page-link " href="#" tabindex="-1"> < </a>
					    </li>
					    <li class="page-item active"><a class="page-link" href="#">1</a></li>
					    <li class="page-item ">
					      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
					    </li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li>
					    <li class="page-item">
					      <a class="page-link" href="#"> > </a>
					    </li>
					  </ul>
					</nav>
				</div>
				
			</div>
		</div>
	</div>
</div>
<!-- jquery -->
<script type="text/javascript">	
	$("#select_sort_type").on("change",function(){
        //Getting Value
         var selectValue = $(this).val();
        //Change view sort
        window.location.href = "<?php echo ROOTURL.'/product/index?sort_by='?>" +selectValue;
    });
</script>
<?php require_once("../app/views/layouts/footer.php"); ?>
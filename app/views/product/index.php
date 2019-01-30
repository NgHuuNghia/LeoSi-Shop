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
				<div class="col-xs-4" id="product-recent-view">
			            <img class="img-fluid mx-auto d-block" src="<?php echo ROOTIMAGESPATH.'tainghe3.jpg'; ?>" alt="">
			            <div class="card-body">
			              <span><a href=""><?php echo 'nghia';?></a></span> </br>
			              <span id="price"><?php echo  number_format(10000, 0, '', ','); ?> đ </span> </br>
			              <div id="buy-product">
			                <span class="buy-product"><a href="">Mua Hàng</a></span>
			              </div>
			            </div>  
	            </div>	

			</div>
		</div>
		<div class="col-md-9">
			<div class="banner-directory">
				<img src="<?php echo ROOTIMAGESPATH.'/banerdir.png' ?>" alt="" id="baner-dir">
			</div>

			<div class="top-content-directory">
				<div class="sort-product">
					<label for="">Sắp xếp theo:</label>
					<select class="form-dir">
						<option value=""> Mới Nhất  </option>
						<option value=""> Cũ nhất </option>
						<option value=""> Giá: Tăng dần </option>
						<option value=""> Giá: Giảm dần </option>
						<option value=""> Tên: A-Z  </option>
						<option value=""> Tên: Z-A  </option>
						<option value=""> Bán chạy nhất  </option>
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
				<div class="row">

					<div class="col-xs-4" id="product-all">
			            <img class="img-fluid mx-auto d-block" src="<?php echo ROOTIMAGESPATH.'tainghe3.jpg'; ?>" alt="">
			            <div class="card-body">
			              <span><a href=""><?php echo 'nghia';?></a></span> </br>
			              <span id="price"><?php echo  number_format(10000, 0, '', ','); ?> đ </span> </br>
			              <div id="buy-product">
			                <span class="buy-product"><a href="">Mua ngay</a></span>
			              </div>
			            </div>  
	            	</div>

	            	<div class="col-xs-4" id="product-all">
			            <img class="img-fluid mx-auto d-block" src="<?php echo ROOTIMAGESPATH.'tainghe3.jpg'; ?>" alt="">
			            <div class="card-body">
			              <span><a href=""><?php echo 'nghia';?></a></span> </br>
			              <span id="price"><?php echo  number_format(10000, 0, '', ','); ?> đ </span> </br>
			              <div id="buy-product">
			                <span class="buy-product"><a href="">Mua ngay</a></span>
			              </div>
			            </div>   
	            	</div>

	            	<div class="col-xs-4" id="product-all">
			            <img class="img-fluid mx-auto d-block" src="<?php echo ROOTIMAGESPATH.'tainghe3.jpg'; ?>" alt="">
			            <div class="card-body">
			              <span><a href=""><?php echo 'nghia';?></a></span> </br>
			              <span id="price"><?php echo  number_format(10000, 0, '', ','); ?> đ </span> </br>
			              <div id="buy-product">
			                <span class="buy-product"><a href="">Mua ngay</a></span>
			              </div>
			            </div>   
	            	</div>
	            	
				</div>

				<div class="row">
					
					<div class="col-xs-4" id="product-all">
			            <img class="img-fluid mx-auto d-block" src="<?php echo ROOTIMAGESPATH.'tainghe3.jpg'; ?>" alt="">
			            <div class="card-body">
			              <span><a href=""><?php echo 'nghia';?></a></span> </br>
			              <span id="price"><?php echo  number_format(10000, 0, '', ','); ?> đ </span> </br>
			              <div id="buy-product">
			                <span class="buy-product"><a href="">Mua ngay</a></span>
			              </div>
			            </div>  
	            	</div>

	            	<div class="col-xs-4" id="product-all">
			            <img class="img-fluid mx-auto d-block" src="<?php echo ROOTIMAGESPATH.'tainghe3.jpg'; ?>" alt="">
			            <div class="card-body">
			              <span><a href=""><?php echo 'nghia';?></a></span> </br>
			              <span id="price"><?php echo  number_format(10000, 0, '', ','); ?> đ </span> </br>
			              <div id="buy-product">
			                <span class="buy-product"><a href="">Mua ngay</a></span>
			              </div>
			            </div>   
	            	</div>
	            	
				</div>
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
<?php require_once("../app/views/layouts/footer.php"); ?>
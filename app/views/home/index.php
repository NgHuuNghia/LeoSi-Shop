<?php require_once("../app/views/layouts/header.php"); ?>
<!-- Baner -->
<section id="baner">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="<?php echo ROOTIMAGESPATH;?>/banner/baner1.png" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="<?php echo ROOTIMAGESPATH;?>/banner/baner2.png" alt="Second slide">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</section>
<!-- category product tops -->
<section id="categoryTops">
	<div class="row" id="category">
		<div class="col-md-4" id="cat">
			<a href="<?php echo ROOTURL."/product/all/phu-kien-dien-thoai";?>"><img src="<?php echo ROOTIMAGESPATH;?>/product/phukien.png" alt="" id="cat"></a>
		</div>
		<div class="col-md-4" id="cat">
      <a href="<?php echo ROOTURL."/product/all/gaming-gear";?>"><img src="<?php echo ROOTIMAGESPATH;?>/product/gear.png" alt="" id="cat"></a>
			
		</div>
		<div class="col-md-4" id="cat">
      <a href="<?php echo ROOTURL."/product/all/may-choi-game";?>"><img src="<?php echo ROOTIMAGESPATH;?>/product/gundam.png" alt="" id="cat"></a>
			
		</div>
	</div>
</section>
<!-- headphone -->
<section id="headphone" class="topPro">
    <!-- title -->
  <div class="clearfix">  
      <a class="title-box-home col-md-2" href="/collections/skull-candy-1">Tai Nghe SkullCandy <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
      <div class="line-title col-md-9"></div>
    </div>
    <div class="wrap-box-center col-sm-12">
    <div class="row">
      <?php 
        $iStart = 0;
        $quantiryProductTop = 4;
        for ( $i = $iStart  ; $i<$quantiryProductTop;$i++ ) { ?>
          <div class="col-xs-3">
            <img class="img-fluid mx-auto d-block" src="<?php echo ROOTIMAGESPATH.'/product/'.$data[$i]['link_images'];?>" alt="">
            <div class="card-body">
              <span><a href="<?php echo ROOTURL."/product/detail/". $data[$i]['product_id'];?>"><?php echo $data[$i]['product_name']?></a></span> </br>
              <span id="price"><?php echo  number_format($data[$i]['price'], 0, '', ','); ?> đ </span> </br>
              <div id="buy-home">
                <span class="buy-home"><a href="<?php echo ROOTURL."/product/detail/". $data[$i]['product_id'];?>">Mua ngay</a></span>
              </div>
              
            </div>
          </div>
      <?php 
        }
        ?>
    
</section>

<!-- Game machine -->
<section id="gameMachine" class="topPro">
    <!-- title -->
  <div class="clearfix">  
      <a class="title-box-home col-md-2" href="/collections/skull-candy-1">MÁY CHƠI GAME <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
      <div class="line-title col-md-9"></div>
    </div>
    <div class="wrap-box-center col-sm-12">
    <div class="row">
      <?php 
        $iStart = 4;
        $quantiryProductTop = 8;
        for ( $i =  $iStart ; $i<$quantiryProductTop;$i++ ) { ?>
          <div class="col-xs-3">
            <img class="img-fluid mx-auto d-block" src="<?php echo ROOTIMAGESPATH.'/product/'.$data[$i]['link_images'];?>" alt="">
            <div class="card-body">
              <span><a href="<?php echo ROOTURL."/product/detail/". $data[$i]['product_id'];?>"><?php echo $data[$i]['product_name']?></a></span> </br>
              <span id="price"><?php echo  number_format($data[$i]['price'], 0, '', ','); ?> đ </span> </br>
              <div id="buy-home">
                <span class="buy-home"><a href="<?php echo ROOTURL."/product/detail/". $data[$i]['product_id'];?>">Mua ngay</a></span>
              </div>
              
            </div>
          </div>
      <?php 
        }
        ?>
    
</section>

<!-- hoodie -->
<section id="hoodie" class="topPro">
    <!-- title -->
  <div class="clearfix">  
      <a class="title-box-home col-md-2" href="/collections/skull-candy-1">ÁO TTG <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
      <div class="line-title col-md-9"></div>
    </div>
    <div class="wrap-box-center col-sm-12">
    <div class="row">
      <?php 
        $iStart = 8;
        $quantiryProductTop = 12;
        for ( $i =  $iStart ; $i<$quantiryProductTop;$i++ ) { ?>
          <div class="col-xs-3">
            <img class="img-fluid mx-auto d-block" src="<?php echo ROOTIMAGESPATH.'/product/'.$data[$i]['link_images'];?>" alt="">
            <div class="card-body">
              <span><a href="<?php echo ROOTURL."/product/detail/". $data[$i]['product_id'];?>"><?php echo $data[$i]['product_name']?></a></span> </br>
              <span id="price"><?php echo  number_format($data[$i]['price'], 0, '', ','); ?> đ </span> </br>
              <div id="buy-home">
                <span class="buy-home"><a href="<?php echo ROOTURL."/product/detail/". $data[$i]['product_id'];?>">Mua ngay</a></span>
              </div>
              
            </div>
          </div>
      <?php 
        }
        ?>
    
</section>

<?php require_once("../app/views/layouts/footer.php"); ?>
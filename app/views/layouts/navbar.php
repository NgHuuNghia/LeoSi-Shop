<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo ROOTURL;?>">LeoSì Shop</a> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="<?php echo ROOTURL;?>">TRANG CHỦ<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?php echo ROOTURL.'/product/index'; ?>">SẢN PHẨM</a>
      <a class="nav-item nav-link" href="<?php echo ROOTURL."/product/all/gaming-gear";?>">GAMING GEAR</a>
      <a class="nav-item nav-link" href="<?php echo ROOTURL."/product/all/may-choi-game";?>">MÁY CHƠI GAME</a>
      <a class="nav-item nav-link" href="<?php echo ROOTURL."/product/all/tai-nghe";?>">TAI NGHE</a>
      <a class="nav-item nav-link" href="<?php echo ROOTURL."/product/all/ao-ttg";?>">ÁO IN TTG</a>
      <a class="nav-item nav-link" href="#">
        <div onclick="clickButtonSearch()">
          <i class="fas fa-search"></i>
        </div>
      </a>
      <a class="nav-item nav-link" href="#">Đăng Nhập</a>
      <a class="nav-item nav-link" href="#"><i class="fas fa-cart-plus"></i></a>
    </div>
  </div>
</nav>
<div id="cd-search">
      <form action="<?php echo ROOTURL . '/product/search'  ?>" class="wrap-search-home">    
          <input type="text" name="key" class="search-input" placeholder="  Tìm kiếm ...">
      </form>
</div>
<!-- jquery -->
<script type="text/javascript"> 
  function clickButtonSearch() {
  var x = document.getElementById("cd-search");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
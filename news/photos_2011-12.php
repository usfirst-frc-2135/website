<?php
$title = 'FRC 2135 - Photos From 2011-12';
set_include_path($_SERVER['DOCUMENT_ROOT']);
require 'inc/header.php';
?>

<div class="container" role="main">

  <!-- Main content area for this page -->

  <div class="row p-2">
    <div class="col-sm-10">
      <h2>Photos From 2011-12</h2>
    </div>
    <div class="col-sm-2">
      <a href="news_photos.php" class="btn btn-primary float-end" role="button">Back</a>
    </div>
  </div>

  <div id="carouselMain" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselMain" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#carouselMain" data-bs-slide-to="1"></li>
      <li data-bs-target="#carouselMain" data-bs-slide-to="2"></li>
      <li data-bs-target="#carouselMain" data-bs-slide-to="3"></li>
      <li data-bs-target="#carouselMain" data-bs-slide-to="4"></li>
      <li data-bs-target="#carouselMain" data-bs-slide-to="5"></li>
      <li data-bs-target="#carouselMain" data-bs-slide-to="6"></li>
      <li data-bs-target="#carouselMain" data-bs-slide-to="7"></li>
      <li data-bs-target="#carouselMain" data-bs-slide-to="8"></li>
      <li data-bs-target="#carouselMain" data-bs-slide-to="9"></li>
      <li data-bs-target="#carouselMain" data-bs-slide-to="10"></li>
      <li data-bs-target="#carouselMain" data-bs-slide-to="11"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active" role="option">
        <img src="/news/img/media/slides/2011_Fall.jpg" class="d-block w-100" data-src="holder.js/1140x500/auto/#555:#333/text:Slide_00" alt="Slide_00">
      </div>
      <div class="carousel-item" role="option">
        <img src="/news/img/media/slides/2011_EWasteDrive.jpg" class="d-block w-100" data-src="holder.js/1140x500/auto/#555:#333/text:Slide_01" alt="Slide_01">
      </div>
      <div class="carousel-item" role="option">
        <img src="/news/img/media/slides/2011_AAUW_outreach.jpg" class="d-block w-100" data-src="holder.js/1140x500/auto/#555:#333/text:Slide_02" alt="Slide_02">
      </div>
      <div class="carousel-item" role="option">
        <img src="/news/img/media/slides/2012_Mo.jpg" class="d-block w-100" data-src="holder.js/1140x500/auto/#555:#333/text:Slide_03" alt="Slide_03">
      </div>
      <div class="carousel-item" role="option">
        <img src="/news/img/media/slides/2012_SacReg_stands.jpg" class="d-block w-100" data-src="holder.js/1140x500/auto/#555:#333/text:Slide_04" alt="Slide_04">
      </div>
      <div class="carousel-item" role="option">
        <img src="/news/img/media/slides/2012_SacReg_Field.jpg" class="d-block w-100" data-src="holder.js/1140x500/auto/#555:#333/text:Slide_05" alt="Slide_05">
      </div>
      <div class="carousel-item" role="option">
        <img src="/news/img/media/slides/2012_SacReg_driver.jpg" class="d-block w-100" data-src="holder.js/1140x500/auto/#555:#333/text:Slide_06" alt="Slide_06">
      </div>
      <div class="carousel-item" role="option">
        <img src="/news/img/media/slides/2012_SacReg_6th_seed.jpg" class="d-block w-100" data-src="holder.js/1140x500/auto/#555:#333/text:Slide_07" alt="Slide_07">
      </div>
      <div class="carousel-item" role="option">
        <img src="/news/img/media/slides/2012_SacReg_team.jpg" class="d-block w-100" data-src="holder.js/1140x500/auto/#555:#333/text:Slide_08" alt="Slide_08">
      </div>
      <div class="carousel-item" role="option">
        <img src="/news/img/media/slides/2012_SVR_Judges.jpg" class="d-block w-100" data-src="holder.js/1140x500/auto/#555:#333/text:Slide_09" alt="Slide_09">
      </div>
      <div class="carousel-item" role="option">
        <img src="/news/img/media/slides/2012_SVR_Woz.jpg" class="d-block w-100" data-src="holder.js/1140x500/auto/#555:#333/text:Slide_10" alt="Slide_10">
      </div>
      <div class="carousel-item" role="option">
        <img src="/news/img/media/slides/2012_SVR_team.jpg" class="d-block w-100" data-src="holder.js/1140x500/auto/#555:#333/text:Slide_11" alt="Slide_11">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselMain" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselMain" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>

  <!-- End of Main content area -->

</div> <!-- /container -->

<?php include 'inc/footer.php'; ?>

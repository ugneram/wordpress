<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />





  <?php wp_head(); ?>
</head>







<body>
  <div class="hero_area">
    <!-- header section strats -->
    <div class="brand_box">
      <a class="navbar-brand" href="index.html">
        <span>
        <?php the_title(); ?></span>
      </a>
    </div>
    <!-- end header section -->

    <!-- slider section -->
<section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="img-box">
              <img src="<?= get_template_directory_uri() . "/assets/images/slider-img.jpg" ?>" alt="">
            </div>
          </div>
          <div class="carousel-item">
            <div class="img-box">
              <img src="<?= get_template_directory_uri() . "/assets/images/slider-img.jpg" ?>" alt="">
            </div>
          </div>
          <div class="carousel-item">
            <div class="img-box">


              <img src="<?= get_template_directory_uri() . "/assets/images/slider-img.jpg" ?>" alt="">
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <!-- end slider section -->
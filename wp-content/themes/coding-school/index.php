<?php
/*
* Template Name: Homepage

*/
get_header(); ?>


</div>

<!-- nav section -->

<section class="nav_section">
  <div class="container">
    <div class="custom_nav2">
      <nav class="navbar navbar-expand custom_nav-container ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex  flex-column flex-lg-row align-items-center">

            <?php

            wp_nav_menu(
              array(
                'menu' => 'primary',
                'container' => '',
                'theme_location' => 'primary',
                'items_wrap' => '<ul id="navbarSupportedContent" class="collapse navbar-collapse d-flex list-unstyled">%3$s</ul>'
              )
            );
            ?>



            <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
            </form>
          </div>
        </div>
      </nav>
    </div>
  </div>
</section>

<!-- end nav section -->



<!-- shop section -->

<section class="shop_section layout_padding">
  <div class="container">
    <div class="box">
      <div class="detail-box">
        <h2>
          Fruit shop
        </h2>
        <p>
          There are many variations of passages of Lorem Ipsum available
        </p>
      </div>
      <div class="img-box">
        <img src="<?= get_template_directory_uri() . "/assets/images/shop.jpg" ?> " alt="">
      </div>
      <div class="btn-box">
        <a href="">
          Buy Now
        </a>
      </div>
    </div>
  </div>
</section>

<!-- end shop section -->

<!-- about section -->

<section class="about_section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 px-0">
        <div class="img-box">
          <img src="<?= get_template_directory_uri() . "/assets/images/about-img.jpg" ?>" alt="">
        </div>
      </div>
      <div class="col-md-5">
        <div class="detail-box">
          <div class="heading_container">
            <hr>
            <h2>
              About Our Fruit Shop
            </h2>
          </div>
          <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour
          </p>
          <a href="">
            Read More
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end about section -->

<!-- fruit section -->

<section class="fruit_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <hr>
      <h2>
        Fresh Fruit
      </h2>
    </div>
  </div>
  <div class="container-fluid">

    <div class="fruit_container">
      <?php
      if (have_posts()) {

        while (have_posts()) {
          the_post();
          get_template_part('template-parts/content', 'archive');
        }
      }
      ?>
    </div>
  </div>
</section>

<!-- end fruit section -->


<!-- client section -->

<section class="client_section layout_padding-bottom">
  <div class="container ">
    <div class="heading_container">
      <h2>
        What Syas Cutomer
      </h2>
      <hr>
    </div>
    <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="client_container layout_padding-top">
            <div class="img-box">
              <img src="<?= get_template_directory_uri() . "/assets/images/client-img.png" ?>" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Jone Mark
              </h5>
              <p>
                <img src="<?= get_template_directory_uri() . "/assets/images/left-quote.png" ?> " alt="">
                <span>
                  Lorem ipsum dolor sit amet,
                </span>
                <img src="<?= get_template_directory_uri() . "/assets/images/right-quote.png" ?>  " alt=""> <br>
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam, quis nostrud exercitation ullamco laboris ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="client_container layout_padding-top">
            <div class="img-box">
              <img src="<?= get_template_directory_uri() . "/assets/images/client-img.png" ?> " alt="">
            </div>
            <div class="detail-box">
              <h5>
                Jone Mark
              </h5>
              <p>
                <img src=" <?= get_template_directory_uri() . "/assets/images/left-quote.png" ?> " alt="">
                <span>
                  Lorem ipsum dolor sit amet,
                </span>
                <img src="<?= get_template_directory_uri() . "/assets/images/right-quote.png" ?>  " alt=""> <br>
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam, quis nostrud exercitation ullamco laboris ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="client_container layout_padding-top">
            <div class="img-box">
              <img src="<?= get_template_directory_uri() . "/assets/images/client-img.png" ?>  " alt="">
            </div>
            <div class="detail-box">
              <h5>
                Jone Mark
              </h5>
              <p>
                <img src="<?= get_template_directory_uri() . "/assets/images/left-quote.png" ?> " alt="">
                <span>
                  Lorem ipsum dolor sit amet,
                </span>
                <img src="<?= get_template_directory_uri() . "/assets/images/right-quote.png" ?>  " alt=""> <br>
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam, quis nostrud exercitation ullamco laboris ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              </p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
        <span class="sr-only">Next</span>
      </a>
    </div>

  </div>
</section>

<!-- end client section -->


<!-- contact section -->
<section class="contact_section layout_padding-bottom">
  <div class="container-fluid">
    <div class="row">
      <div class="offset-lg-2 col-md-10 offset-md-1">
        <div class="heading_container">
          <hr>
          <h2>
            Request A call back
          </h2>
        </div>
      </div>
    </div>

    <div class="layout_padding2-top">
      <div class="row">
        <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
          <form action="">
            <div class="contact_form-container">
              <div>
                <div>
                  <input type="text" placeholder="Full Name" />
                </div>
                <div>
                  <input type="email" placeholder="Email" />
                </div>
                <div>
                  <input type="text" placeholder="Phone Number" />
                </div>
                <div>
                  <input type="text" class="message_input" placeholder="Message" />
                </div>
                <div>
                  <button type="submit">
                    Send
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end contact section -->













<?php get_footer(); ?>
  
    <!-- info section -->

    <section class="info_section layout_padding">
    <div class="container">
      <div class="info_logo">
        <h2>
          NiNom
        </h2>
      </div>
      <div class="info_contact">
        <div class="row">
          <div class="col-md-4">
            <a href="">
              <img src="<?= get_template_directory_uri() . "/assets/images/location.png" ?>  " alt="">
              <span>
                Passages of Lorem Ipsum available
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src=" <?= get_template_directory_uri() . "/assets/images/call.png" ?> " alt="">
              <span>
                Call : +012334567890
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src=" <?= get_template_directory_uri() . "/assets/images/mail.png" ?> " alt="">
              <span>
                demo@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-9">
          <div class="info_form">
            <form action="">
              <input type="text" placeholder="Enter your email">
              <button>
                subscribe
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="info_social">
            <div>
              <a href="">
                <img src="<?= get_template_directory_uri() . "/assets/images/facebook-logo-button.png" ?> " alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="<?= get_template_directory_uri() . "/assets/images/twitter-logo-button.png " ?>" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="<?= get_template_directory_uri() . "/assets/images/linkedin.png" ?>" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="<?= get_template_directory_uri() . "/assets/images/instagram.png" ?>" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>


<?php
dynamic_sidebar('sidebar-1');
?>


  </section>

  <!-- end info section -->
  
  <!-- footer section -->
  <section class="container-fluid footer_section ">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved. Design by
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <?php wp_footer(); ?>
</body>

</html>
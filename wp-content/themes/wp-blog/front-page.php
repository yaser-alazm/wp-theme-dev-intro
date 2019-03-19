<?php get_header() ?>

<?php if(true === get_theme_mod('enable_heading')): ?>
  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5"><?php echo get_theme_mod('heading_text', 'Heading Title Text') ?></h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <p class="lead"><?php echo get_theme_mod('heading_desc', 'This is a description fot the heading section, This is a description fot the heading section, This is a description fot the heading section, This is a description fot the heading section') ?></p>
        </div>
      </div>
      <?php if(true === get_theme_mod('enable_button')): ?>
        <div class="masthead-btn">
          <a href="<?php echo get_theme_mod(
            'button_link', 'http://yaser-alazm.com') ?>" class="btn btn-primary"><?php echo get_theme_mod('button_text', 'Button Title') ?></a>
        </div>
      <?php endif; ?>
    </div>
  </header>
<?php endif; ?>

<?php if(true === get_theme_mod('enable_features')): ?>
  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="fa <?php echo get_theme_mod('f1_icon', 'fa-facebook'); ?> m-auto text-primary"></i>
            </div>
            <h3><?php echo get_theme_mod('f1_text', 'Feature 1 Title') ?></h3>
            <p class="lead mb-0"><?php echo get_theme_mod('f1_desc', 'This is a description fot the heading section, This is a description fot the heading section') ?></p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-primary"></i>
            </div>
            <h3>Bootstrap 4 Ready</h3>
            <p class="lead mb-0">Featuring the latest build of the new Bootstrap 4 framework!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <h3>Easy to Use</h3>
            <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
  <!-- Image Showcases -->
  <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-1.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Fully Responsive Design</h2>
          <p class="lead mb-0">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Updated For Bootstrap 4</h2>
          <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 4 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 4!</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-3.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Easy to Use &amp; Customize</h2>
          <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials text-center bg-light">
    <div class="container">
      <h2 class="mb-5">What people are saying...</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="">
            <h5>Margaret E.</h5>
            <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
            <h5>Fred S.</h5>
            <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
            <h5>Sarah W.</h5>
            <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="call-to-action text-white text-center">
    <div class="mx-auto">
      <h2 class="mb-4">Ready to get started? Sign up now!</h2>
    </div>
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 d-flex justify-content-center align-items-center">
            <?php
              wp_nav_menu(array(
                'theme_location'  => 'social',
                'container_class' => 'social-menu',
                'menu_class'  =>  'list-unstyled'
              ))
            ?>
        </div>
        <div class="col-md-8 mx-auto">
            <?php if(is_active_sidebar('contact')): ?>
              <?php dynamic_sidebar('contact'); ?>
            <?php else: ?>
                <p class="lead">(You need to setup a contact form)</p>
                <p class="lead">If you havn't created a form yet, go to dashboard->contact and create a new one (press add new at the top left)</p>
                <p class="lead">After creating a form and copy the form shortcode, from your dashboard go to Appearance->Widgets and add a text widget into "Contact Form" sidebar.</p>
                <p class="lead">In the text widget paste the shortcode you aleady copied from your form and click save. Then you ready to go. </p>
            <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

</body>

<?php get_footer() ?>

</html>

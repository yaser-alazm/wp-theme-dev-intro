<!-- Masthead -->
<header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5"><?php echo get_theme_mod('heading_text', 'Heading Title Text') ?></h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <h3><?php echo get_theme_mod('heading_desc', 'This is a description fot the heading section, This is a description fot the heading section, This is a description fot the heading section, This is a description fot the heading section') ?></h3>
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
<?php get_header() ?>

<?php if(true === get_theme_mod('enable_heading')): ?>
  <?php get_template_part('content/content-masthead') ?>
<?php endif; ?>

<?php if(true === get_theme_mod('enable_features')): ?>
  <?php get_template_part('content/content-features') ?>
<?php endif; ?>

<?php if(true === get_theme_mod('enable_showcase')): ?>
  <?php get_template_part('content/content-showcase') ?>
<?php endif; ?>

<?php if(true === get_theme_mod('enable_testimonials')): ?>
  <?php get_template_part('content/content-testimonials') ?>
<?php endif; ?>

<?php if(true === get_theme_mod('enable_calltoaction')): ?>
  <?php get_template_part('content/content-calltoaction') ?>
<?php endif; ?>

</body>

<?php get_footer() ?>

</html>

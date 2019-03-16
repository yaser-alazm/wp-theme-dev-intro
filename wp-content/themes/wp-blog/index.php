<?php get_header(); ?>

<?php
    // custom query for featured-post category post
    $featured_post = new WP_Query(array(
        'category_name' => 'featured-post',
        'posts_per_page' => 1
    ))
?>

<?php
// custom query for design category post
    $design_post = new WP_Query(array(
        'category_name' => 'design',
        'posts_per_page' => 1
    ))
?>

<?php
    // custom query for world category post
    $world_post = new WP_Query(array(
        'category_name' => 'world',
        'posts_per_page' => 1
    ))
?>

  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <?php if($featured_post->have_posts()) : ?>
      <?php while($featured_post->have_posts()): $featured_post->the_post() ?>
        <?php get_template_part('content/content-cat-featured') ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <?php if($world_post->have_posts()) : ?>
        <?php while($world_post->have_posts()): $world_post->the_post() ?>
          <?php get_template_part('content/content-cat-world') ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="col-md-6">
      <?php if($design_post->have_posts()) : ?>
      <?php while($design_post->have_posts()): $design_post->the_post() ?>
          <?php get_template_part('content/content-cat-design') ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        <?php bloginfo('description') ?>
      </h3>
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
              <?php get_template_part('content/content') ?>
            <?php endwhile; ?>
        <?php endif; ?>

    </div><!-- /.blog-main -->

<?php get_footer(); ?>

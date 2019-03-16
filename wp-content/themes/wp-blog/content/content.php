<div class="blog-post">
    <h2 class="blog-post-title"><?php the_title(); ?></h2>
    <p class="blog-post-meta"><?php the_time('F j, F g:i a') ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
    <?php if(has_post_thumbnail()): ?>
        <?php the_post_thumbnail('small',array(
            'class' => 'w-100 h-auto'
        )) ?>
    <?php endif; ?>

    <p><?php the_excerpt(); ?></p>
    <a href="<?php the_permalink() ?>" class="btn btn-primary">See More ..</a>
</div><!-- /.blog-post -->
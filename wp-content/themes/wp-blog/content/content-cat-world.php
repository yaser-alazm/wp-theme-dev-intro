<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
    <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-primary"><?php echo get_the_category()[0]->name ?></strong>
        <h3 class="mb-0"><?php the_title() ?></h3>
        <div class="mb-1 text-muted">Nov 12</div>
        <p class="card-text mb-auto"><?php echo substr(get_the_excerpt(), 0, 90); ?></p>
        <a href="<?php the_permalink() ?>" class="stretched-link">Continue reading</a>
    </div>
    <div class="col d-block">
        <?php if(has_post_thumbnail()): ?>
        <?php the_post_thumbnail('cat_thumb', array(
            'class' => 'w-100 h-auto'
        )) ?>
        <?php endif; ?>
    </div>
</div>
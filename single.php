<?php get_header(); ?>
<div class="wrap">
<div class="container content">
    <?php if(have_posts()) : ?>
           <?php while(have_posts()) : the_post() ?>

    <div class="post">
        <div class="post-meta">
            <h1 class="post-title"><?php the_title(); ?></h1>
            <div class="published">
                   <?php the_date('d M Y'); ?> on <?php
                                            $category = get_the_category();
                                            echo $category[0]->cat_name;
                                        	?>
            </div>
        </div>
			<?php the_content(); ?>

<?php get_footer(); ?>

 </div>
  <?php endwhile; ?>
            <?php else : ?>
            	<p><?php __('No Posts Found'); ?></p>
            <?php endif; ?>
</div>
</div>

        <?php wp_footer(); ?>

<?php get_header(); ?>

<div class="wrap">
    <div class="container content">
        <div class="page ">
            <h1 class="page-title">Archive</h1>
                            <?php if(have_posts()) : ?>

            <ul class="posts">
                    <?php while(have_posts()) : the_post(); ?>
                <li class="post">
                    <h3 class="post-title">
                    <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                    </a>
                </h3>
                    <span class="post-date">
                    <?php echo get_the_date('d M Y'); ?> on <?php
                                            $category = get_the_category();
                                            echo $category[0]->cat_name;
                                        ?>
                    </span>
                </li>
                    <?php endwhile; ?>
                <ul>
            <?php else : ?>
                <p><?php __('No Posts Found'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
    <?php wp_footer(); ?>

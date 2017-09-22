<?php
/*
Template Name: Archive Page
*/
?>

<?php get_header(); ?>



<div class="wrap">
    <div class="container content">
        <div class="page ">
            <h1 class="page-title">Archive</h1>
            <?php    $args=array('order'=> 'DESC', 'posts_per_page' =>'1000');

                $query=new WP_Query($args); ?>
                            <?php if($query->have_posts()) : ?>

            <ul class="posts">
                    <?php while($query->have_posts()) : $query->the_post(); ?>
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

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="<?php language_attributes(); ?>">

<head>
    <link href="//gmpg.org/xfn/11" rel="profile">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title>
        <?php bloginfo('name'); ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title() ?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href='//fonts.googleapis.com/css?family=Roboto|Roboto+Slab' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>

<body>
    <div class="wrap">
        <div class="masthead">
            <div class="container">
<!--                 <ul class="masthead-navigation">
 -->                  <!--   <li>
                        Home
                    </li>
                    <li>
                        <a href='/archive'>Archive</a>
                    </li>
                    <li>
                        <a href='/feed.xml'>RSS</a>
                    </li> -->
                <?php
    wp_nav_menu( array(
        'theme_location' => 'primary-menu',
        'menu_class'     => 'masthead-navigation',
        'before' => ' '
         ) );
?>

 <!-- 
                </ul> -->
            </div>
            <div class="clear"></div>
        </div>
    </div>
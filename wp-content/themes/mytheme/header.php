<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 3/24/17
 * Time: 3:45 PM
 */
?>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <title><?php bloginfo('name')?> <?php wp_title('|')?></title>
    <meta name="description" content="<?php bloginfo('description')?>"
    <?php wp_head();?>
    
</head>
<body <?php body_class() ?>>
    
    <nav class="navbar  navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="collapsed navbar-toggle"
                        data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-6"
                        aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">MyTheme</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-6">
                <?php wp_nav_menu([
                    'theme_location' => 'main_menu',
                    'container' => false,
                    'menu_class' => 'nav navbar-nav',
                ]) ?>
            </div>
        </div>
    </nav>


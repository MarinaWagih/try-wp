<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 3/26/17
 * Time: 5:36 PM
 * Template Name: layout
 */

?>
<!DOCTYPE html>
<?php get_header();?>
<div class="container">
    <h1> ygui6ygvuyu</h1>
    <?php if( have_posts()):
        while(have_posts()):the_post();
            ?>
            <h3><?php the_title();?></h3>
            <small><?php the_category()?></small>
            <small>on :<?php the_time('F j,Y')?> at <?php the_time('g:i a');?></small>
            <p><?php the_excerpt();?></p>
            <hr>
        <?php
        endwhile;
    endif;
    ?>
    <?php ?>
 
</div>
 <?php get_footer();?>
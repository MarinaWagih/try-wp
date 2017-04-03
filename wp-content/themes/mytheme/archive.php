<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 3/24/17
 * Time: 3:45 PM
 */
?>
<!DOCTYPE html>
<?php get_header(); ?>
<div class="search-form-container">
    <?php get_search_form();?>
</div>
<div class="blog-content margin-top-51-bottom-5">
    <div class="row ">
        <div class="col-md-10">

        <?php
            if( have_posts() ): $i = 0;

                while( have_posts() ): the_post();
                    if($i==0):
                        $column = 12;
                        $class = '';
                    elseif($i > 0 && $i <= 2):
                        $column = 6;
                        $class = ' second-row-padding';
                    elseif($i > 2):
                        $column = 4;
                        $class = ' third-row-padding';
                    endif;
                   ?>
                    <div class="col-xs-<?php echo $column." ". $class; ?> blog-item">
                        <?php if( has_post_thumbnail() ):
                            $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
                        endif; ?>
                        <div class="blog-element" style="background-image: url(<?php echo $urlImg; ?>);">

                            <?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>

                            <small><?php the_category(' , '); ?></small>
                        </div>
                    </div>
        <?php

                    $i++;
                endwhile;
            endif;

        ?>
    </div>
        <div class="col-md-2 hidden-xs">
        <?php get_sidebar(); ?>
    </div>
    </div>
</div>

<?php get_footer(); ?>
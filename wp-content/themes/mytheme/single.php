<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 4/1/17
 * Time: 4:21 AM
 */
?>
<?php get_header(); ?>
<div class="container margin-top-51-bottom-5">
    <div class="row ">
        <div class="col-md-10">

            <?php
            if( have_posts() ): $i = 0;

                while( have_posts() ): the_post();

                         if( has_post_thumbnail() ):
                            $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
                        endif; ?>

                        <div class="text-center" >
                            <img src="<?php echo $urlImg?>" class="width-500px img-center">
                            <?php the_title(
                                sprintf('<h1 class="entry-title"><a href="%s">',
                                esc_url( get_permalink() ) ),'</a></h1>' ); ?>

                            <div><?php edit_post_link(); ?></div>
                            <small><?php the_category(' , ');?></small>
                            <br>
                            <small><?php the_tags(); ?></small>

                        </div>
                    <div> <?php the_content()?></div>
                    <?php

                    $i++;
                endwhile;
            endif;

            ?>
            <?php
                if(comments_open()):
                    comments_template();
                endif;
            ?>
        </div>
        <div class="col-md-2 hidden-xs">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
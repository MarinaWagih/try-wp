<?php

/* 
 * Template Name: custoom tempalte 
 */

?>
<?php get_header(); ?>
<div class="container">
    <div class="search-form-container">
        <?php get_search_form();?>
    </div>
    <h1 class="text-uppercase">Latest in categories</h1>
    <div class="row">
        <?php
       
                 $args = array(
                    'post_type'  => 'custoom',
                    'posts_per_page' => 2,
             
                );

                $lastBlog = new WP_Query($args);

                if ($lastBlog->have_posts()):

                    while ($lastBlog->have_posts()): $lastBlog->the_post(); ?>
                        <div>
                            <?php get_template_part('content', 'featured'); ?>
                        </div>


                    <?php endwhile;

                endif;
                wp_reset_postdata();

                ?>
            </div>
    </div>
<?php get_footer(); ?>
<!--index older version-->
<?php if (have_posts()):
    while (have_posts()):the_post();
        ?>
        <article id="post-<?php the_ID();?>" <?php post_class('col-md-12')?>>
            <?php get_template_part('content', get_post_format());?>
        </article>

    <?php
    endwhile;
endif;
?>
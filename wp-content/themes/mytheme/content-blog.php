<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 4/1/17
 * Time: 1:04 AM
 */
?>
<div class="col-xs-<?php echo $column." " . $class; ?> blog-item">
    <?php if( has_post_thumbnail() ):
        $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
    endif; ?>
    <div class="blog-element" style="background-image: url(<?php echo $urlImg; ?>);">

        <?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>

        <small><?php the_category(' '); ?></small>
        <p ></p>
    </div>
</div>

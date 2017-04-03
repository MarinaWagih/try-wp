<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 3/30/17
 * Time: 3:24 AM
 */
?>
<div class="row">
<div class="image-thumbnail col-md-3">
    <?php the_post_thumbnail('thumbnail'); ?>
</div>
<header class="col-md-9">
    <?php
    the_title(sprintf("<h3><a href='%s'>",esc_url(get_permalink())),'</a></h3>');?>
    <small>on :<?php the_time('F j,Y')?> at <?php the_time('g:i a');?></small>
    <small><?php the_category()?></small>


</header>
</div>
<hr>
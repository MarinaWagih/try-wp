<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 3/30/17
 * Time: 3:24 AM
 */
?>

<header>
   <?php the_title(sprintf("<h3><a href='%s'>",esc_url(get_permalink())),'</a></h3>');?>
    <small><?php the_category()?></small>
    <small>on :<?php the_time('F j,Y')?>
        at <?php the_time('g:i a');?></small>
</header>

<!--<p>--><?php //the_content();?><!--</p>-->
<hr>
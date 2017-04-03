<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 3/30/17
 * Time: 3:24 AM
 */
?>
<header>
    <i class="fa fa-2x fa-quote-left text-danger"></i>
    <?php the_title(sprintf("<span class='h3'><a href='%s'>",esc_url(get_permalink())),'</a></span>');?>
    <i class="fa  fa-2x fa-quote-right text-danger"></i>
</header>
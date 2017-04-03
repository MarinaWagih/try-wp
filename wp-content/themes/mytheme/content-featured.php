<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 3/31/17
 * Time: 8:37 AM
 */
?>

<blockquote >
        <?php the_title(
            sprintf("<h3 class='text-capitalize height-50px'><a href='%s'>",
            esc_url(get_permalink())),'</a></h3>');?>
    <footer class="pull-right">
        on : <cite title="Source Title"><em><?php the_time('F j,Y')?></em></cite>
        at <cite title="Source Title"><em><?php the_time('g:i a');?></em></cite>
    </footer>
</blockquote>
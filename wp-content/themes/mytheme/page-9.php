<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 3/31/17
 * Time: 6:45 AM
 */
?>
<?php get_header(); ?>
<div class="margin-top-51-bottom-5">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php
            $bullets='';

            $lastBlog = new WP_Query(array(
                'type' => 'post',
                'posts_per_page' => 3,
            ));
            if ($lastBlog->have_posts()):
                $count=0;

                while ($lastBlog->have_posts()):$lastBlog->the_post();
                    $class=$count==0?'active':'';
                    ?>
                    <div class="slider-height item <?php echo $class?>">
                        <?php
                        $post_thumbnail_id = get_post_thumbnail_id();
                        $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
                        ?>
                        <img title="post image" alt="thumb image"
                             class="image-slider" src="<?php echo $post_thumbnail_url; ?>"
                             >
                        <div class="carousel-caption">
                            <?php
                            the_title(sprintf("<h3><a href='%s'>",esc_url(get_permalink())),'</a></h3>');?>
                              <p><?php the_excerpt();?></p>
                        </div>
                    </div>
                <?php
                    $bullets.='<li data-target="#carousel-example-generic"
                            data-slide-to="'.$count.'" class="'.$class.'"></li>';
                $count++;
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php echo $bullets?>
        </ol>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container">
    <div class="search-form-container">
        <?php get_search_form();?>
    </div>
    <h1 class="text-uppercase">Latest in categories</h1>
    <div class="row">
        <?php
        $args_cat = array(
            'include' => '6, 7, 8'
        );

        $categories = get_categories($args_cat);
        foreach ($categories as $category):?>
            <div class="col-md-4">
                <h3 class="text-danger"><?php echo $category->name?> </h3>
                <hr>
                <?php $args = array(
                    'type' => 'post',
                    'posts_per_page' => 1,
                    'category__in' => $category->term_id,
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
        <?php
        endforeach;

        ?>
    </div>
</div>

<?php get_footer(); ?>

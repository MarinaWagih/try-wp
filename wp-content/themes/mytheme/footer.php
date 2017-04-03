<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 3/24/17
 * Time: 3:45 PM
 */
?>
        <footer class="footer margin-top-51">
            <nav class="navbar-inverse">
                <div class="container-fluid">
                    <div class="" id="">
                        <?php wp_nav_menu([
                            'theme_location' => 'footer_menu',
                            'container' => false,
                            'menu_class' => 'nav nav-pills'
                        ]) ?>
                    </div>
                </div>
            </nav>
        <!--    --><?php //wp_nav_menu(['theme_location'=>'footer_menu']) ?>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
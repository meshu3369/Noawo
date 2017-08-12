<?php
/**
 * Created by Noawo.
 * developer: meshu
 * Date: 11/7/2016
 * Time: 11:11 PM
 */

?>


<!--
  footer
-->
<div class="container-fluid footer">
    <div class="container">
        <div class="row footer_row">
            <div class="footer_item">
                <h4>Connect With Us</h4>

                <div class="socia_link">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>

                <div class="search_form">
                    <h4>Search</h4>
                    <form action="">
                        <input type="text" name="bottom_search" placeholder="Search">
                    </form>

                </div>
            </div>

            <div class="footer_item">

                <h4>About</h4>
                <ul>
                    <?php
                    if (function_exists('ot_get_option')) {

                        $slides = ot_get_option('footer_two', array());

                        if (!empty($slides)) {
                            foreach ($slides as $slide) {?>

                                <li><a href="<?php echo $slide["page_url"]; ?>"><?php echo $slide["title"]; ?></a></li>

                            <?php
                            }
                        }

                    }

                    ?>
                </ul>


            </div>

            <div class="footer_item">
                <h4>Learn</h4>
                <ul>
                    <?php
                    if (function_exists('ot_get_option')) {

                        $slides = ot_get_option('footer_three', array());

                        if (!empty($slides)) {
                            foreach ($slides as $slide) {?>

                                <li><a href="<?php echo $slide["page_url"]; ?>"><?php echo $slide["title"]; ?></a></li>

                                <?php
                            }
                        }

                    }

                    ?>

                </ul>
            </div>

            <div class="footer_item">
                <h4>Inspiration</h4>
                <ul>
                    <?php
                    if (function_exists('ot_get_option')) {

                        $slides = ot_get_option('footer_four', array());

                        if (!empty($slides)) {
                            foreach ($slides as $slide) {?>

                                <li><a href="<?php echo $slide["page_url"]; ?>"><?php echo $slide["title"]; ?></a></li>

                                <?php
                            }
                        }

                    }

                    ?>

                </ul>
            </div>


            <div class="footer_item">
                <h4>Interview</h4>
                <ul>
                    <?php
                    if (function_exists('ot_get_option')) {

                        $slides = ot_get_option('footer_five', array());

                        if (!empty($slides)) {
                            foreach ($slides as $slide) {?>

                                <li><a href="<?php echo $slide["page_url"]; ?>"><?php echo $slide["title"]; ?></a></li>

                                <?php
                            }
                        }

                    }

                    ?>

                </ul>
            </div>

        </div>

        <!-- bottom footer -->
        <?php
        if ( function_exists( 'ot_get_option' ) ){
            $footer_copyright = ot_get_option( 'footer_copyright' );
        }

        ?>

        <div class="row bottom_footer">
            <div class="col-sm-4 footer_copyright">
                <p><?php echo $footer_copyright; ?></p>
            </div>
            <div class="col-sm-offset-2 col-sm-6">
                <div class="footer-menu">
                    <?php
                    if(function_exists('wp_nav_menu')){
                        wp_nav_menu( $args = array(
                            'theme_location' => 'bottom_menu',
                        ) );
                    }?>
                    <!--  <ul>
                          <li><a href="#">Privacy Policy</a></li>
                          <li><a href="#">|</a></li>
                          <li><a href="#">Terms of Service</a></li>
                          <li><a href="#">|</a></li>
                          <li><a href="#">Earnings Disclaimer</a></li>
                      </ul>-->
                </div>

            </div>
        </div>
    </div>
</div>


<?php wp_footer(); ?>
</body>
</html>

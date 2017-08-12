<?php
/*
 * Template Name: Tutorial Page
 * */
get_header();
?>
    <!--
      middle area : ::: Tutorial page
     -->
    <div class="container-fluid main_container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 tutorial">


                    <div class="also_read">
                        <h3>Latest Tutorial: </h3>
                        <?php


                        $args = array('post_type' => 'post', 'posts_per_page' => '1');

                        query_posts($args);
                        ?>


                        <?php if (have_posts()) : ?>

                            <!-- the loop -->
                            <?php while (have_posts()): the_post();

                                ?>
                                <!--post content of Tricks-->

                               <?php the_post_thumbnail('big-size') ?>


                                <div class="clearfix"></div>

                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <button class="btn btn-info"><i class="fa fa-download"></i>PDF</button>

                            <?php endwhile; ?>

                            <?php wp_reset_postdata(); ?>

                        <?php endif;

                        ?>

                    </div>


                    <div class="search_result">
                        <h2 class="title">All Tutorials</h2>


                        <ul>

                            <?php

                            $paged1 = (get_query_var('paged')) ? get_query_var('paged') : 1;

                            $args = array('post_type' => 'post', 'posts_per_page' => '-1', 'paged' => $paged1);

                            $the_query = new WP_Query($args);
                            ?>


                            <?php if ($the_query->have_posts()) : $pmonth='';$pyear=''?>

                                <!-- the loop -->
                                <?php while ($the_query->have_posts()): $the_query->the_post();
                                    ?>
                                    <!--post content of Tricks-->
                                    <?php
                                    $cmonth = get_the_time('m');
                                    $cyear = get_the_time('Y');

                                    if ($cyear != $pyear) {
                                        $pyear = $cyear;
                                        ?><li><span class=' year_of text-center'> <?php the_time('Y');?> </span></li><?php
                                    }

                                    if ($cmonth != $pmonth) {
                                         $pmonth = $cmonth;
                                        ?><li><span class='date'>  <?php the_time('F');?> </span></li><?php
                                    }

                                    ?>

                                    <li><span class="date"><?php the_time('d/m/Y'); ?></span> <span><a
                                                href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></li>


                                <?php endwhile; ?>


                                <?php wp_reset_postdata(); ?>


                            <?php else : ?>
                                <p><?php _e('Sorry, No post found..'); ?></p>
                            <?php endif;

                            ?>

                        </ul>

                    </div>


                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
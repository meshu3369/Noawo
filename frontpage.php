<?php
/*
 * Template Name: Home page
 * */
get_header(); ?>
    <!--
      middle area
     -->
    <div class="container-fluid main_container">
         <div class="container">
             <div class="row">
                   <h4 class="title">Latest Post</h4>



                 <!-- 1 -->
                 <?php


                 $args = array('post_type'=>'post','posts_per_page' => '8');
                 // the query

                 $the_query = new WP_Query( $args );

                 ?>


                 <?php if ( $the_query->have_posts() ) : $i=1; ?>

                     <!-- the loop -->
                     <?php while ( $the_query->have_posts() ) : $the_query->the_post();
                         $tweet = get_post_meta(get_the_ID(),'tweet',true);
                         ?>
                         <!--post content of freebies-->

                         <div class="col-sm-3 single_post_view">
                             <?php if(has_post_thumbnail()): ?>
                                 <?php the_post_thumbnail('index-size') ?>
                             <?php else: ?>
                               <img src="<?php echo get_template_directory_uri() ?>/img/5.jpg" class="img-responsive index_img" alt="">
                             <?php endif; ?>
                             <h4><a href="<?php the_permalink() ?>" target="blank"><?php the_title() ?></a></h4>
                         </div>
                         <?php if($i%4 == 0 ): ?>

                             </div>

                             <div class="row">

                                 <?php endif; ?>



                     <?php endwhile; ?>
                     <!-- end of the loop -->

                     <!-- pagination here -->


                     <?php wp_reset_postdata(); ?>


                 <?php else : ?>
                     <p><?php _e( 'Sorry, No post found..' ); ?></p>
                 <?php endif;

                 ?>

              </div>
             <!-- end of latest post -->


             <div class="row">
                 <p class="text-right latest_more_post"><a href="/blog/online-tricks/">More Posts</a></p>
             </div>

             <!-- inspiration -->

             <div class="row inspiration">
                 <h4 class="title">Inspiration</h4>

                 <div id="owl-inspiration" class="owl-carousel">



                     <?php


                     $args = array('post_type'=>'post','posts_per_page' => '8','category_name'=>'Inspiration');
                     // the query

                     $the_query = new WP_Query( $args );

                     ?>


                     <?php if ( $the_query->have_posts() ) : ?>

                         <!-- the loop -->
                         <?php while ( $the_query->have_posts() ) : $the_query->the_post();
                             $tweet = get_post_meta(get_the_ID(),'tweet',true);
                             ?>
                             <!--post content of freebies-->

                             <div class="single_post_view">
                                 <?php if(has_post_thumbnail()): ?>
                                     <?php the_post_thumbnail('index-size') ?>
                                 <?php else: ?>
                                     <img src="<?php echo get_template_directory_uri() ?>/img/5.jpg" class="img-responsive index_img" alt="">
                                 <?php endif; ?>
                                 <h4><a href="<?php the_permalink() ?>" target="blank"><?php the_title() ?></a></h4>
                             </div>




                         <?php endwhile; ?>
                         <!-- end of the loop -->

                         <!-- pagination here -->


                         <?php wp_reset_postdata(); ?>


                     <?php else : ?>
                         <p><?php _e( 'Sorry, No post found..' ); ?></p>
                     <?php endif;

                     ?>

                 </div>
             </div>

             <!-- Learn -->

             <div class="row learn">
                 <h4 class="title">Learn</h4>

                 <div id="owl-learn" class="owl-carousel">

                     <!-- query for owl -->


                     <?php


                     $args = array('post_type'=>'post','posts_per_page' => '8','category_name'=>'learn');
                     // the query

                     $the_query = new WP_Query( $args );

                     ?>


                     <?php if ( $the_query->have_posts() ) : ?>

                         <!-- the loop -->
                         <?php while ( $the_query->have_posts() ) : $the_query->the_post();
                             $tweet = get_post_meta(get_the_ID(),'tweet',true);
                             ?>
                             <!--post content of freebies-->

                             <div class="single_post_view">
                                 <?php if(has_post_thumbnail()): ?>
                                     <?php the_post_thumbnail('index-size') ?>
                                 <?php else: ?>
                                     <img src="<?php echo get_template_directory_uri() ?>/img/5.jpg" class="img-responsive index_img" alt="">
                                 <?php endif; ?>

                                 <h4><a href="<?php the_permalink() ?>" target="blank"><?php the_title() ?></a></h4>
                             </div>




                         <?php endwhile; ?>
                         <!-- end of the loop -->

                         <!-- pagination here -->


                         <?php wp_reset_postdata(); ?>


                     <?php else : ?>
                         <p><?php _e( 'Sorry, No post found..' ); ?></p>
                     <?php endif;

                     ?>







                 </div>
             </div>


             <!-- Sign up banner -->
             <div class="row bottom_banner">
                     <div class="col-sm-4 heading col-xs-12">
                         <h3>AwesomeWeb.com</h3>
                         <p>Find & Hire the Best Designer & Developers who could have started Yesterday</p>
                     </div>

                     <div class="col-sm-6 img_item col-xs-12">
                         <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/p1.jpg" alt="p1" class="img-responsive"></a>
                         <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/p1.jpg" alt="p2" class="img-responsive"></a>
                         <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/p1.jpg" alt="p3" class="img-responsive"></a>

                     </div>

                     <div class="col-sm-2 col-xs-12 my_btn">
                         <a href="#">sign up now!</a>
                     </div>

             </div>

         </div>
    </div>

<?php get_footer(); ?>

<?php get_header(); ?>
    <!--
      middle area
     -->
    <div class="container-fluid main_container">
         <div class="container">
             <div class="row">

                 <div class="col-sm-8 tricks_left_side">
                     <div class="row post_area">

                         <?php if ( have_posts() ) : ?>

                             <!-- the loop -->
                             <?php while ( have_posts() ) : the_post();
                                 $tweet = get_post_meta(get_the_ID(),'tweet',true);
                                 ?>
                                 <!--post content of freebies-->

                                 <div class="col-sm-12 single_post">
                                     <h3 class="post_title"><?php the_title(); ?></h3>
                                     <br>
                                     <?php the_post_thumbnail('post-thumbnail',array('class'=>'img-responsive')) ?>
                                     <div class="content_layer">

                                             <h5>Posted By <a href="#"><?php the_author(); ?></a></h5>
                                            <hr>
                                             <p>
                                                 <?php the_content(); ?>
                                             </p>

                                     </div>
                                 </div>



                             <?php endwhile; ?>
                             <!-- end of the loop -->

                             <!-- pagination here -->
                             
                             <?php wp_reset_postdata(); ?>

                         <?php else : ?>
                             <p><?php _e( 'Sorry, No post found..' ); ?></p>
                         <?php endif; ?>


                     </div> <!-- end of latest post -->


                  </div>



                 <div class="col-sm-4 freebies_right_side">
                     <?php
                     if(!dynamic_sidebar('freebies_sidebar')):
                         ?>

                         <div class="freebies_widget">
                             <img src="http://placehold.it/400x300" alt="adv1" class="img-responsive">
                         </div>

                         <div class="freebies_widget">
                             <img src="http://placehold.it/400x300" alt="adv1" class="img-responsive">
                         </div>

                         <div class="freebies_widget">
                             <img src="http://placehold.it/400x490" alt="adv1" class="img-responsive">
                         </div>

                         <div class="freebies_widget">
                             <img src="http://placehold.it/400x490" alt="adv1" class="img-responsive">
                         </div>

                         <?php
                     endif;
                     ?>

                 </div>


             </div>
         </div>
    </div>
<?php get_footer(); ?>
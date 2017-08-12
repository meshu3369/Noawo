  <?php
  /*
   * Template Name: Start Here template
   * */
  get_header();
  ?>


    <!--
      middle area
     -->
    <div class="container-fluid main_container">
         <div class="container">
             <div class="row">

                 <?php
                 $args = array('post_type'=>'start_here','posts_per_page'=>'-1','order'=>'ASC');
                 $the_query = new WP_Query( $args );
                 ?>


                 <?php if ( $the_query->have_posts()): ?>

                     <!-- the loop -->
                     <?php while ($the_query->have_posts()):
                         $the_query->the_post();
                         ?>

                         <div class="col-sm-12 start_post">
                             <h2 class="title"><?php the_title(); ?></h2>

                             <p class="block">
                                 <?php the_post_thumbnail('start-size'); ?>
                                 <?php the_content(); ?>

                             </p>
                         </div>




                     <?php endwhile; ?>


                     <?php wp_reset_postdata(); ?>

                 <?php endif; ?>


             </div>
         </div>
    </div>

<?php get_footer(); ?>
  <?php get_header(); ?>

    <!--
      middle area
     -->
    <div class="container-fluid main_container">
         <div class="container">
             <div class="row page_content">

                 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                     <?php the_content(); ?>
                     <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
                 <?php endwhile; endif; ?>


             </div>
         </div>
    </div>

<?php get_footer(); ?>
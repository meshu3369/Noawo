<?php
/*
  * Template Name: Faq page template
  * */
get_header();
?>
    <!--
      middle area : ::: Tutorial page
     -->
    <div class="container-fluid faq_content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <?php


                        $args = array('post_type'=>'faq','posts_per_page'=>'-1');

                        query_posts($args);
                        ?>


                        <?php if ( have_posts() ) : $i=0;?>


                            <!-- the loop -->
                            <?php while ( have_posts()): the_post();
                                ?>
                                <!--post content of Tricks-->




                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading<?php echo $i;?>">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i;?>" aria-expanded="false" aria-controls="collapse<?php echo $i;?>">
                                                <h4><?php the_title() ?></h4>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse<?php echo $i;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $i;?>">
                                        <div class="panel-body">
                                          <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>


                             <?php $i++; ?>


                            <?php endwhile; ?>
                            <!-- end of the loop -->



                            <?php wp_reset_postdata(); ?>


                        <?php else : ?>
                            <p><?php _e( 'Sorry, No Faq found..' ); ?></p>
                        <?php endif;

                        ?>






                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
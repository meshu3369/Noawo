<?php

get_header(); ?>
    <!--
      middle area
     -->
    <div class="container-fluid main_container">
         <div class="container">
             <div class="row">

                 <div class="col-sm-8 tricks_left_side">
                     <div class="row" style="font-weight: bold;">
                         <h3 class="text-center">404 error</h3>
                         <br>
                         <p class="text-center">Sorry nothing found</p>
                     </div> <!-- end of latest post -->
                 </div>


                 <div class="col-sm-4 tricks_right_side">
                     <?php if(!dynamic_sidebar('tricks-sidebar')): ?>
                         <div class="adv">
                             <h2>Join <a href="#">801,642</a> Shouters</h2>
                             <div class="join_button">
                                 <div class="single_btn" style="background: #5d82d1">
                                     <i class="fa fa-facebook"></i> <span>51,522</span> Fans
                                 </div>

                                 <div class="single_btn" style="background: #40bff5">
                                     <i class="fa fa-twitter"></i> <span>41,452</span> Followers
                                 </div>

                                 <div class="single_btn" style="background: #4883ae">
                                     <i class="fa fa-linkedin"></i> <span>51,092</span> Subscribers
                                 </div>

                                 <div class="single_btn" style="background: #ef4e41">
                                     <i class="fa fa-youtube-play"></i> <span>5,782</span> Subscribers
                                 </div>

                                 <div class="single_btn" style="background: #eb5e4c">
                                     <i class="fa fa-google-plus"></i> <span>7,342</span> Followers
                                 </div>

                                 <div class="single_btn" style="background: #e99800">
                                     <i class="fa fa-rss"></i> <span>22,002</span> Followers
                                 </div>

                                 <div class="single_btn" style="background: #fffc00;color: #000">
                                     <i class="fa fa-snapchat"></i> <span>522</span> Subscriber
                                 </div>

                                 <div class="single_btn" style="background: #b59682">
                                     <i class="fa fa-instagram"></i> <span>1,522</span> Followers
                                 </div>
                             </div>
                         </div>

                         <div class="adv topics">
                             <h2>Topics</h2>
                             <ul>
                                 <li><a href="#">Google Adsense account approval process</a></li>
                                 <li><a href="#">Google Adsense account approval process</a></li>
                                 <li><a href="#">Google Adsense account approval process</a></li>
                             </ul>
                         </div>


                         <div class="adv trend_post">
                             <h2>Tranding Posts</h2>
                             <ul>
                                 <li><a href="#">How I Build a Micro niche site editing $172/month from adSense</a></li>
                                 <li><a href="#">Google Adsense account approval process</a></li>
                                 <li><a href="#">Google Adsense account approval process</a></li>
                                 <li><a href="#">Google Adsense account approval process</a></li>
                             </ul>
                         </div>

                         <!-- recently updated-->

                         <div class="adv trend_post">
                             <h2>Recently Updated</h2>
                             <ul>
                                 <li><a href="#">Google Adsense account approval process</a></li>
                                 <li><a href="#">Google Adsense account approval process</a></li>
                                 <li><a href="#">Google Adsense account approval process</a></li>
                                 <li><a href="#">Google Adsense account approval process</a></li>
                             </ul>
                         </div>

                     <?php endif; ?>
                 </div>


             </div>
         </div>
    </div>
<?php get_footer(); ?>
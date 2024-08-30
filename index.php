<?php
    get_header( );
?>
    
    

    <!-- =======================================
          -----  Body Area -----
    ======================================== -->

    <section id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-9">

                    <?php 
                        if (have_posts()) : 
                            while (have_posts()) : the_post();
                        ?>
                    <div class="blog_area">
                        <div class="post_thumb">
                            <a href="the_permalink();"><?php  echo the_post_thumbnail('post-thumbnails') ?></a>
                        </div>
                        <div class="post-detels">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                            <?php the_excerpt() ?>
                        </div>
                        <!-- যদি পোস্টের কন্টেন্টে ম্যানুয়ালি সারাংশ (excerpt) সেট করা না থাকে, তাহলে the_excerpt() ফাংশন স্বয়ংক্রিয়ভাবে পোস্টের প্রথম 55টি শব্দ গ্রহণ করে এবং তারপরে [...] যোগ করে। -->
                        <?php # the_content(); ?>
                    </div>
                        <?php 
                            endwhile;
                            else:
                                _e('not Found');
                            endif;
                        ?>
                    
                </div>
                <div class="col-md-3">
                   <h2>This Is sidebar Area</h2>
                </div>
            </div>
        </div>
    </section>
    
     <?php get_footer(); ?>
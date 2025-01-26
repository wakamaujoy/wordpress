<?php 
get_header();?>
 <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri( "/images/school-main.jpg");?>)"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome!</h1>
        <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
        <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re interested in?</h3>
        <a href="#" <button type="button" class="btn btn-warning">Find  your Major</button></a>
      </div>
    </div>

    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>
          <?php
          $today = date('Ymd');
          $homePageEvents= new WP_Query(array(
            'posts_per_page'=>2,
            'post_type'=>"event",
            'meta_key'=>'event_date',
            'order'=>'ASC',
            'orderby'=>'meta_value_num',
            'meta_query'=>array(
              array(
                'key'=>'event_date',
                'compare'=>'>=',
                'value'=>$today, 
                'type'=>'numeric'
              )
            )

          ));
          while($homePageEvents->have_posts()){
            $homePageEvents->the_post();?>
            <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink();?>">
              <span class="event-summary__month"><?php 
              $date_string= new DateTime(get_field('event_date'));                  
              echo $date_string->format("M"); ?></span>
              <span class="event-summary__day"><?php echo $date_string->format('d');?></span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
              <p><?php if(has_excerpt()){
                 echo get_the_excerpt();  
              } else{
                echo wp_trim_words( get_the_content(), 18 )?><a href="<?php the_permalink();?>" class="nu gray">Read more</a></p>

              <?php
            }
            ?>
            </div>
          </div>

          <?php
          }          
          ?>          

          <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link("event")?>" <button type="button" class="btn btn-warning" style="color:white">View All Events</button></a></p>
        </div>
      </div>
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>
          <?php
          $homePagePost = new WP_Query(
            array(
              "posts_per_page"=> 2
            )
          );
          while($homePagePost->have_posts()){
            $homePagePost->the_post()?>
            <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink();?>">
              <span class="event-summary__month"><?php the_time( "M"); ?></span>
              <span class="event-summary__day"><?php the_time( "d"); ?></span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
              <p><?php if(has_excerpt()){
                 echo get_the_excerpt();  
              } else{
                echo wp_trim_words( get_the_content(), 18 )?><a href="<?php the_permalink();?>" class="nu gray">Read more</a></p>

              <?php
            }
            ?>
            </div>
          </div>

          <?php
          } wp_reset_postdata();
          ?>
          <p class="t-center no-margin"><a href="<?php echo site_url("/blog")?>" <button type="button" class="btn btn-warning"style="color:white">View Blog Posts</button></a></p>
        </div>
      </div>
    </div>
    <?php
echo do_shortcode('[smartslider3 slider="2"]');

?>

<?php
get_footer()
?>
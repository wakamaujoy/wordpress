<?php 
get_header();?>
<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri( "/images/ocean.jpg");?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">All Programs</h1>    
        <div class="page-banner__intro"><p>Here is What's going on, Have a look around</p></div>
      </div>
    </div>
    <div class="container container--narrow page-section">
      <?php 
      while(have_posts()){
        the_post();?>
    
    
         <div class="event-summary">
         <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink();?>">
              <span class="event-summary__month"><?php 
              $date_string= new DateTime(get_field('event_date'));                  
              echo $date_string->format("M"); ?></span>
              <span class="event-summary__day"><?php echo $date_string->format('d');?></span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
              <p><?php  echo wp_trim_words( get_the_content(), 60 )?><a href="<?php the_permalink();?>" class="nu gray">Read more</a></p>
            </div>
          </div> 
      <?php 
    }
    echo paginate_links( );
    ?>
    
  
    </div>
    




<?php get_footer();?>
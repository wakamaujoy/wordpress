<?php
function schoolfiles(){
    wp_enqueue_script("bootsrapjs", "//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js");
    wp_enqueue_script("myschool_js", get_theme_file_uri("/js/scripts.js"), NULL, microtime(), true);
    
    wp_enqueue_style("google_fonts","//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");
    wp_enqueue_style("font_awesome", "//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style("school_styles_main", get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_style("bootstrapcss", "//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css");
}
add_action("wp_enqueue_scripts", "schoolfiles");


function sch_features(){
    register_nav_menu( "headerMenu", "Menu Location");
    register_nav_menu( "footerOneMenu", "FooterOneLocation");
    register_nav_menu( "footerTwoMenu", "FooterTwoLocation");
    add_theme_support("title-tag");
}

add_action( "after_setup_theme", "sch_features");

 function schooleventarchive($query){
   
    if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()){
        $today = date('Ymd');
        $query -> set('meta_key', 'event_date');       
        $query -> set('orderby', 'meta_value_num');
        $query -> set('order', 'ASC');
        $query -> set('meta_query', array(
              array(
                'key'=>'event_date',
                'value'=>$today,
                'compare'=>'>=',              
                'type'=>'numeric'
              )
            ));
        
    }

 }
add_action ('pre_get_posts', 'schooleventarchive');
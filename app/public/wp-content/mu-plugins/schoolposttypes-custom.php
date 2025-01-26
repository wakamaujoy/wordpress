 <?php
function schPostTypes(){
    register_post_type( "event", array(
        "supports"=>array("title", "editor", "excerpt",),
        "rewrite"=>array("slug"=>"events"),
        "has_archive"=>true,
        "public"=>true,
        "labels"=>array(
            "name"=>"Events", 
            "add_new_item"=>"Add New Event", 
            "edit_item"=>"Edit Event",
            "all_items"=>"All Events",
            "singular_name"=>"Event"

        ),
        "menu_icon"=>"dashicons-calendar"


    ));
    register_post_type( "program", array(
        "supports"=>array("title", "editor"),
        "rewrite"=>array("slug"=>"programs"),
        "has_archive"=>true,
        "public"=>true,
        "labels"=>array(
            "name"=>"Program", 
            "add_new_item"=>"Add New Event", 
            "edit_item"=>"Edit Event",
            "all_items"=>"All Events",
            "singular_name"=>"Event"

        ),
        "menu_icon"=>"dashicons-welcome-learn-more"


    ));

}


    
add_action("init", "schPostTypes");
?>
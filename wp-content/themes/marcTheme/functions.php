<?php

    function addAssets()
    {
        wp_enqueue_style('bootstrap' , get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
        wp_enqueue_style('bootstrap' , get_template_directory_uri() . '/assets/css/main.css' );
        wp_enqueue_script('bootstrap' , get_template_directory_uri() . '/assets/js/bootstrap.min.js' , ['jquery']);
    }
    
    add_action("wp_enqueue_scripts" , "addAssets");


    add_theme_support("post-thumbnails");
    add_theme_support("menus");

    register_nav_menus(
        array(
            "main-menu" => "Main Menu",
            "footer-menu" => "Footer Menu"
        )
    );

    function addSkillsPostType()
    {
        register_post_type("skills" , array(
            "label" => "Skills",
            "public" => true,
            "menu_position" => 4,
            "supports" => [
                "title",
                "editor",
                "thumbnail"
            ],
            'taxonomies' => ['category'],
            "show_in_rest" => true,
            "has_archive" => true
        ));
    }

    function addWorkExpPostType()
    {
        register_post_type("work_experiences" , array(
            "label" => "Work Experiences",
            "public" => true,
            "menu_position" => 5,
            "supports" => [
                "title",
                "editor",
                "thumbnail"
            ],
            'taxonomies' => ['category'],
            "show_in_rest" => true,
            "has_archive" => true
        ));
    }

    function addEducationPostType()
    {
        register_post_type("education" , array(
            "label" => "Education",
            "public" => true,
            "menu_position" => 6,
            "supports" => [
                "title",
                "editor",
                "thumbnail"
            ],
            'taxonomies' => ['category'],
            "show_in_rest" => true,
            "has_archive" => true
        ));
    }

    add_action("init" , "addSkillsPostType");
    add_action("init" , "addWorkExpPostType");
    add_action("init" , "addEducationPostType");

?>
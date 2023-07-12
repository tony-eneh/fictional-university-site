<?php


add_action("init", function () {
    register_post_type(
        'event',
        array(
            "public" => true,
            "show_in_rest" => true,
            "supports" => array("title", "editor", "excerpt"),
            "has_archive" => true,
            "menu_icon" => "dashicons-calendar-alt",
            "rewrite" => array(
                "slug" => "events",
            ),
            "labels" => array(
                "name" => "Events",
                "singular_name" => "Event",
                "all_items" => "All Events",
                "add_new_item" => "Add New Event",
                "edit_item" => "Edit Event",
            ),
        )
    );
});
?>
<?php

//function create_plugin_database_table()
//    {
        global $table_prefix, $wpdb;
        require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );

        $tblname = 'coupon_codes';
        $wp_track_table = $table_prefix . "$tblname";
        $charset_collate = $wpdb->get_charset_collate();

        #Check to see if the table exists already, if not, then create it
        if($wpdb->get_var( "show tables like '$wp_track_table'" ) != $wp_track_table)
        {
            $sql = "CREATE TABLE " . $wp_track_table . " (
            id INT NOT NULL AUTO_INCREMENT, 
            name TEXT NOT NULL, 
            description TEXT NOT NULL, 
            city1 TEXT NOT NULL, 
            city2 TEXT NOT NULL,
            PRIMARY KEY  (id)
        ) ". $charset_collate .";";
            dbDelta($sql);
            update_option('tables_created', true);
        }
//    }

//register_activation_hook( __FILE__, 'create_plugin_database_table' );


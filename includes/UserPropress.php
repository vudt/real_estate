<?php

if( !defined('ABSPATH') ) exit(); // Exit if accessed directly

class UserPropress {

    function __construct() {}
    
    public function getLatLng($location, $tblName, $where){
        global $wpdb;
        $results =  $wpdb->get_row( 'SELECT location '
                                        . 'FROM ' . $wpdb->prefix.$tblName . ' '
                                        . 'WHERE ' . $where . ' = ' . $location );
        return $results;
    }
}



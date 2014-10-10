<?php

if( !defined('ABSPATH') ) exit(); // Exit if accessed directly

require_once 'UserPropress.php';

class UserInfo extends UserPropress{

    function __construct() {
        
    }
    
    public function getInfo(){
        $userObj = UserPropress::getInstance();
        return $userObj;
    }
    
    public function getLatLng($location, $tblName, $where){
        global $wpdb;
        $results =  $wpdb->get_row( 'SELECT location '
                                        . 'FROM ' . $wpdb->prefix.$tblName . ' '
                                        . 'WHERE ' . $where . ' = ' . $location );
        return $results;
    }
}



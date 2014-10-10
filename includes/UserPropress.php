<?php
if (!defined('ABSPATH')) exit(); // Exit if accessed directly

class UserPropress {

    private static $instance = null;

    private function __construct() {
        self::$instance = $this->Propress_User_Current();
    }
    
    static function getInstance(){
        if(self::$instance == null) {
            new self;
        }
        return self::$instance;
    }
    
    /**
     * Get user current
     * @return type
     */
    
    private function Propress_User_Current(){
        $user_current = wp_get_current_user();
        if($user_current) {
            $user_data = get_user_meta($user_current->ID, 'member_custom_fields');
            $user_current->meta_data = $user_data[0];
        }
        return $user_current;
    }
    
    /**
     * get latitude / longitude from location
     * @param type $location : id of location
     * @param type $tblName : table name
     * @param type $where : condition 
     */
    protected function Propress_getLatLng($location, $tblName, $where) {
        global $wpdb;
        $results =  $wpdb->get_row( 'SELECT location '
                                        . 'FROM ' . $wpdb->prefix.$tblName . ' '
                                        . 'WHERE ' . $where . ' = ' . $location );
        return $results;
    }

}

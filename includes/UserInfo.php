<?php
if (!defined('ABSPATH')) exit(); // Exit if accessed directly

class UserInfo {

    private static $instance = null;

    private function __construct() {
        self::$instance = $this->_user_Current();
    }
    
    static function getInstance(){
        if(self::$instance == null) {
            new self;
        }
        return self::$instance;
    }
   
    private function _user_Current(){
        $user_current = wp_get_current_user();
        if($user_current) {
            $user_data = get_user_meta($user_current->ID, 'member_custom_fields');
            $user_current->meta_data = $user_data[0];
        }
        return $user_current;
    }
}

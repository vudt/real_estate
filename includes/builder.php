<?php

if( !defined('ABSPATH') ) exit(); // Exit if accessed directly


class BuilderPropress {
    
    /** Gets things started **/
    public function __construct() {
        add_action('init', array($this, 'insert_post'));
    }
    
    public function insert_post(){
        if(isset($_POST['post_nonce_field']) && wp_verify_nonce($_POST['post_nonce_field'], 'post_nonce')) {
            echo '<pre>';
            print_R($_POST);
            echo '</pre>';
            exit;
        }
    }
    
}

$builder = new BuilderPropress();
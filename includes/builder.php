<?php

if( !defined('ABSPATH') ) exit(); // Exit if accessed directly


class BuilderPropress {
    
    /** Gets things started **/
    public function __construct() {
        add_action('wp_enqueue_scripts', array($this, 'register_scripts'));
        add_action('wp_ajax_cb_ajax', array($this, 'cb_ajax'));
        add_action('wp_ajax_nopriv_cb_ajax', array($this, 'cb_ajax'));
        add_action('init', array($this, 'insert_post'));
    }
    
    public function script_enqueuer(){
        wp_localize_script('common-scripts', 'ajaxObj', array('ajax_url' => admin_url('admin-ajax.php')));
    }
    
    public function cb_ajax(){
        if(!isset($_GET['type'])) return; 
        
        if($_GET['type'] == 'typeof') {
            $result = json_encode($this->get_child_categories($_GET['val']));
            echo $result;
            exit();
        }
    }
    
    private function get_child_categories($parent){
        $args = array(
            'hide_empty'    => 0,
            'parent'        => $parent
        );
        $result = get_categories($args);
        return $result;
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
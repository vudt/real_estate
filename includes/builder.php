<?php

if( !defined('ABSPATH') ) exit(); // Exit if accessed directly


class BuilderPropress {
    
    /** Gets things started **/
    public function __construct() {
        add_action('wp_enqueue_scripts', array($this, 'script_enqueuer'));
        add_action('wp_ajax_cb_ajax', array($this, 'cb_ajax'));
        add_action('wp_ajax_nopriv_cb_ajax', array($this, 'cb_ajax'));
        add_action('init', array($this, 'insert_post'));
    }
    
    public function script_enqueuer() {
        wp_localize_script('common-scripts', 'ajaxObj', array('ajax_url' => admin_url('admin-ajax.php')));
    }

    public function cb_ajax(){
        if(!isset($_POST['type'])) return; 
        
        switch($_POST['type']){
            case 'typeof':
                $result = $this->get_child_categories($_POST['val']);
                echo json_encode($result); exit();
                break;
            case 'province':
                $cols = array(
                    'name'      => 'name',
                    'value'     => 'districtid'
                );
                $result = $this->get_location_where($_POST['val'], 'districts', $cols, 'provinceid');
                echo json_encode($result); exit();
            case 'district':
                $cols = array(
                    'name'      => 'name',
                    'value'     => 'wardid',
                    'location'  => 'location'
                );
                $result = $this->get_location_where($_POST['val'], 'wards', $cols, 'districtid');
                echo json_encode($result); exit();
                break;
        }
    }
    
    private function get_location_where($id = null, $tblName, $cols, $where = null) {
        global $wpdb;
        $tbl = $wpdb->prefix . $tblName;
        
        $columns = '';
        foreach($cols as $key => $col) {
            $columns .= $col . ' AS ' . $key . ', ';
        }
        $columns = substr(trim($columns), 0, -1);

        if ($where == null) {
            $results = $wpdb->get_results("SELECT $columns FROM $tbl");
            return $results;
        }
        $results = $wpdb->get_results("SELECT $columns FROM $tbl WHERE $where = $id ");
        return $results;
    }
    
    /*
    private function get_location_where($id = null, $tblName, $col1, $col2, $where = null) {
        global $wpdb;
        $tbl = $wpdb->prefix . $tblName;
        if ($where == null) {
            $results = $wpdb->get_results("SELECT $col1 AS value, $col2 AS name FROM $tbl");
            return $results;
        }
        $results = $wpdb->get_results("SELECT $col1 AS value, $col2 AS name FROM $tbl WHERE $where = $id ");
        return $results;
    }*/
    
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
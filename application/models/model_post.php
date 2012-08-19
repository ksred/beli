<?php
class Model_post extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database("default", TRUE);
    }

    function get_categories () {
        
    }
    
    function add_category ($desc) {
        $result = $this->check_category($desc);
        if ($result->num_rows() == 0) {
            $data = array("name" => $desc);
            $result = $this->db->insert("categories", $data);
            return $result;
        } else {
            return FALSE;
        }
    }
    
    function check_category($name) {
        $this->db->select("*");
        $this->db->from("categories");
        $this->db->where("name", $name);
        $result = $this->db->get();
        return $result;
    }
    
    function list_all_categories() {
        $this->db->select("*");
        $this->db->from("categories");
        $result = $this->db->get();
        return $result;
    }
    
    function add_tag ($desc) {
        $result = $this->check_tag($desc);
        if ($result->num_rows() == 0) {
            $data = array("tag" => $desc);
            $result = $this->db->insert("tags", $data);
            return($result);
        } else {
            return FALSE;
        }
    }
    
    function check_tag($name) {
        $this->db->select("*");
        $this->db->from("tags");
        $this->db->where("tag", $name);
        $result = $this->db->get();
        return $result;
    }
    
    function list_all_tags() {
        $this->db->select("*");
        $this->db->from("tags");
        $result = $this->db->get();
        return $result;
    }
    
    function add_media ($data) {
            $result = $this->db->insert("media", $data);
            return $result;
    }
    
    function list_all_media() {
        $this->db->select("*");
        $this->db->from("media");
        $result = $this->db->get();
        return $result;
    }

    function upload() {
            $config['upload_path'] = UPLOAD_PATH."media/";
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']	= '2000';
            $config['max_width']  = '1920';
            $config['max_height']  = '1920';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload("media-picture"))
            {
                    $error = array('error' => $this->upload->display_errors());
                    //die(UPLOAD_PATH.var_dump($error));
                    return FALSE;
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());
                    return $data;
            }
    }    
}

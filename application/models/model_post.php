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
            $this->db->insert("categories", $data);
        }
    }
    
    function check_category($name) {
        $this->db->select("*");
        $this->db->from("categories");
        $this->db->where("name", $name);
        $result = $this->db->get();
        return $result;
    }
}

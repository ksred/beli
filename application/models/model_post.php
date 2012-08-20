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
    
    function add_post($data) {
        $data['tags'] = implode(',', $data['tags']);
        $data['categories'] = implode(',', $data['categories']);
        $result_post = $this->add_post_post($data['title'], $data['summary'], $data['body']);
        $post_id = $this->get_post_from_title($data['title']);
        $result_categories = $this->add_post_categories($post_id, $data['categories']);
        $result_tags = $this->add_post_tags($post_id, $data['tags']);
        if(($result_post == TRUE)&&($result_categories == TRUE)&&($result_tags == TRUE)) {
            $result = TRUE;
        } else {
            $result = FALSE;
        }
        return $result;
    }
    
    function add_post_post($title, $summary, $body) {
        $data = array(
            "title" => $title,
            "summary" => $summary,
            "body" => $body
        );
        $result = $this->db->insert("posts", $data);
        return $result;
    }
    
    function get_post_from_title($title) {
        $this->db->select("id");
        $this->db->from("posts");
        $this->db->where("title", $title);
        $this->db->limit(1);
        $this->db->order_by("id", "desc");
        $result = $this->db->get();
        $result = $result->result();
        if (!is_null($result)) {
            $id = $result[0]->id;
            return $id;
        } else {
            return FALSE;
        }
    }
    
    function add_post_tags($post_id, $tags) {
        $tags = array("post_id" => $post_id, "tag_id" => $tags);
        $result = $this->db->insert("post_tags", $tags);
        return $result;
    }
    
    function add_post_categories($post_id, $categories) {
        $categories = array("post_id" => $post_id, "category_id" => $categories);
        $result = $this->db->insert("post_categories", $categories);
        return $result;
    }
    
    function get_post_from_id($id) {
        $post = $this->get_post_body($id);
        $post_categories = $this->get_post_categories($id);
        $post_tags = $this->get_post_tags($id);
        $tags = explode(',', $post_tags);
        $categories = explode(',', $post_categories);
        $data = array($post, "tags" => $tags, "categories" => $categories);
        
        return $data;
    }
    
    function get_post_body($id) {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->where('id', $id);
        $result = $this->db->get();
        die(var_dump($result));
    }

    function get_all_posts() {
        $this->db->select("*");
        $this->db->from("posts");
        $result = $this->db->get();
        return $result;
    }
}

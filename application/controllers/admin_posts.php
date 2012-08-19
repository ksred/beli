<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_posts extends CI_Controller {
        
        function __construct () {
            parent::__construct();
	    $this->load->Model("Model_post");
        }
        
	public function index()
	{
                $role = $this->session->userdata("role");
                $data['title'] = "Beli :: Admin";
		$data['section'] = "posts";
		$data['subsection'] = "overview";
                
		$this->load->view("admin/posts/index", $data);
	}
	
	public function add () {
		$data['title'] = "Beli :: Admin";
		$data['section'] = "posts";
		$data['subsection'] = "add";
		$data['categories'] = $this->Model_post->list_all_categories();
		$data['tags'] = $this->Model_post->list_all_tags();
		$data['media'] = $this->Model_post->list_all_media();
                
		$this->load->view("admin/posts/add", $data);
	}
	
	public function list_all () {
		$data['title'] = "Beli :: Admin";
		$data['section'] = "posts";
		$data['subsection'] = "list";
                
		$this->load->view("admin/posts/list", $data);
	}
	
	public function d_add () {
		if(isset($_POST['title'])) $title = $_POST['title'];
		if(isset($_POST['summary'])) $summary = $_POST['summary'];
		if(isset($_POST['body'])) $body = $_POST['body'];
		if(isset($_POST['categories'])) $categories = $_POST['categories'];
		if(isset($_POST['tags'])) $tags = $_POST['tags'];
		
		$data = array (
			"title" => $title,
			"summary" => $summary,
			"body" => $body,
			"tags" => $tags,
			"categories" => $categories
		);
		$result = $this->Model_post->add_post($data);
		if($result== TRUE) {
			$success = TRUE;
		} else {
			$success = FALSE;
		}
		$data['success'] = $success;
		$this->load->view('/admin/posts/add', $data);
	}
        
	public function d_edit () {
		//used for data queries
	}
	
	public function d_delete () {
		//used for data queries
	}
}

/* End of file admin_posts.php */
/* Location: ./application/controllers/admin_posts.php */
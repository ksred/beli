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
                
		$this->load->view("admin/posts/add", $data);
	}
	
	public function list_all () {
		$data['title'] = "Beli :: Admin";
		$data['section'] = "posts";
		$data['subsection'] = "list";
                
		$this->load->view("admin/posts/list", $data);
	}
	
	public function _add () {
		//used for data queries
	}
        
	public function _edit () {
		//used for data queries
	}
	
	public function _delete () {
		//used for data queries
	}
}

/* End of file admin_posts.php */
/* Location: ./application/controllers/admin_posts.php */
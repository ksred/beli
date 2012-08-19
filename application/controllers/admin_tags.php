<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_tags extends CI_Controller {
        
        function __construct () {
            parent::__construct();
	    $this->load->Model("Model_post");
        }
        
	public function index()
	{
                $role = $this->session->userdata("role");
                $data['title'] = "Beli :: Admin";
		$data['section'] = "tags";
                
		$this->load->view("admin/tags/index", $data);                
		
	}
	
	public function add()
	{
                $role = $this->session->userdata("role");
                $data['title'] = "Beli :: Admin";
                $data['section'] = "tags";
		$data['subsection'] = "add";
		
		$this->load->view("admin/tags/add", $data);
	}
	
	public function list_all () {
		$data['title'] = "Beli :: Admin";
                $data['section'] = "tags";
		$data['subsection'] = "list";
		$data['categories'] = $this->Model_post->list_all_tags();
		
		$this->load->view("admin/categories/list", $data);
	}
	
	public function d_add () {
		$data['title'] = "Beli :: Admin";
                $data['section'] = "tags";
		$data['subsection'] = "add";
		if(isset($_POST['name'])) $name = $_POST['name'];
		$result = $this->Model_post->add_tag($name);
		if ($result == TRUE) {
			$data['success'] = TRUE;
		} else {
			$data['success'] = FALSE;
		}
		$this->load->view("admin/tags/add", $data);
	}
        
}

/* End of file admin_tags.php */
/* Location: ./application/controllers/admin_tags.php */
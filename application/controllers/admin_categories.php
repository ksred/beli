<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_categories extends CI_Controller {
        
        function __construct () {
		parent::__construct();
		$this->load->Model("Model_post");
        }
        
	public function index()
	{
                $role = $this->session->userdata("role");
                $data['title'] = "Beli :: Admin";
		$data['section'] = "categories";
                
		$this->load->view("admin/categories/index", $data);
	}
	
	public function add()
	{
                $role = $this->session->userdata("role");
                $data['title'] = "Beli :: Admin";
                $data['section'] = "categories";
		$data['subsection'] = "add";
		
		$this->load->view("admin/categories/add", $data);
	}
	
	public function list_all () {
		$data['title'] = "Beli :: Admin";
                $data['section'] = "categories";
		$data['subsection'] = "list";
		$data['categories'] = $this->Model_post->list_all_categories();
		
		$this->load->view("admin/categories/list", $data);
	}
	
	public function d_add () {
		$data['title'] = "Beli :: Admin";
                $data['section'] = "categories";
		$data['subsection'] = "add";
		if(isset($_POST['name'])) $name = $_POST['name'];
		$result = $this->Model_post->add_category($name);
		
		if ($result == TRUE) {
			$data['success'] = TRUE;
		} else {
			$data['success'] = FALSE;
		}		
	}
        
}

/* End of file admin_categories.php */
/* Location: ./application/controllers/admin_categories.php */
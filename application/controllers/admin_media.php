<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_media extends CI_Controller {
        
        function __construct () {
            parent::__construct();
	    $this->load->Model("Model_post");
        }
        
	public function index()
	{
                $role = $this->session->userdata("role");
                $data['title'] = "Beli :: Admin";
		$data['section'] = "media";
                
		$this->load->view("admin/media/index", $data);                
		
	}
	
	public function add()
	{
                $role = $this->session->userdata("role");
                $data['title'] = "Beli :: Admin";
                $data['section'] = "media";
		$data['subsection'] = "add";
		
		$this->load->view("admin/media/add", $data);
	}
	
	public function list_all () {
		$data['title'] = "Beli :: Admin";
                $data['section'] = "media";
		$data['subsection'] = "list";
		$data['categories'] = $this->Model_post->list_all_media();
		
		$this->load->view("admin/media/list", $data);
	}
	
	public function d_add () {
		if(isset($_POST['title'])) $title = $_POST['title'];
		if(isset($_POST['desc'])) $desc = $_POST['desc'];
		$picture = basename($_FILES['media-picture']['name']);
		$upload = $this->Model_post->upload();
		$picture = UPLOAD_PATH."media/".$upload["upload_data"]["file_name"];
		$picture = substr($picture, 1);
		$data = array (
			"title" => $title,
			"desc" => $desc,
			"url" => $picture
		);
		$result = $this->Model_post->add_media($data);
		
		if (($result == TRUE)&&($upload != FALSE)) {
			$data['success'] = TRUE;
		} else {
			$data['success'] = FALSE;
		}
		$data['title'] = "Beli :: Admin";
                $data['section'] = "media";
		$data['subsection'] = "add";
		$this->load->view("admin/media/add", $data);
	}
        
}

/* End of file admin_media.php */
/* Location: ./application/controllers/admin_media.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
        
        function __construct () {
            parent::__construct();
        }
        
	public function index()
	{
                $name = $this->session->userdata("name");
                $data['title'] = "Beli :: Admin";
                if ($name) {
                    $this->load->view('admin/index', $data);
                } else {
                    $this->load->view('admin/login', $data);
                }
		
	}
        
        public function login () {
            $data['title'] = "Beli :: Admin";
            if(isset($_POST['name'])) $name = $_POST['name'];
            if(isset($_POST['password'])) $password = md5($_POST['password']);
            $data = array("name" => $name, "password" => $password);
            
            $this->load->Model("Model_user");
            $result = $this->Model_user->login($data);
            
            if($result->num_rows() > 0) {
                $user_data = $result->result();
                $user_name = $user_data[0]->name;
                $user_role = $user_data[0]->role;
                $this->session->set_userdata("name", $user_name);
                $this->session->set_userdata("role", $user_role);
                
                header("Location: /admin/index");
            }
        }
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
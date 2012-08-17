<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_media extends CI_Controller {
        
        function __construct () {
            parent::__construct();
        }
        
	public function index()
	{
                $role = $this->session->userdata("role");
                $data['title'] = "Beli :: Admin";
                
		
	}
        
}

/* End of file admin_media.php */
/* Location: ./application/controllers/admin_media.php */
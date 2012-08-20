<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

        function __construct () {
            	parent::__construct();
        }

	public function index()
	{
		header("Location: /pages/about/");
	}
	
	
	public function about()
	{
		$data['title'] = "Awesomistguy :: About";
			
		$this->load->view('page/about', $data);
	}


	public function contact()
	{
		$data['title'] = "Awesomistguy :: contact";
			
		$this->load->view('page/contact', $data);
	}

/* End of file page.php */
/* Location: ./application/controllers/page.php */

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

        function __construct () {
            	parent::__construct();
	    	$this->load->Model("Model_post");
        }

	public function index()
	{
		$data['title'] = "Awesomistguy";
		$data['posts'] = $this->Model_post->get_all_posts();
			
		$this->load->view('front_page', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

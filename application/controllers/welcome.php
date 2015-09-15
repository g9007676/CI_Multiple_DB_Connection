<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        echo 'GET A db data <br>';
        //TODO GET A db data
        $this->load->model('member');
        $db1_data = $this->member->get_a_data();
        echo '<pre>';
        var_dump($db1_data);
        echo '================<br>';
        echo 'GET b db data <br>';
        $db2_data = $this->member->get_b_data();
        var_dump($db2_data);
        echo '</pre>';
        echo '<br>';




        echo '================<br>';
        echo 'GET ab db data <br>';
        echo '<pre>';
        $db_ab_data = $this->member->get_ab_data();
        var_dump($db_ab_data);
        echo '</pre>';
        exit;
        //TODO GET B db data
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
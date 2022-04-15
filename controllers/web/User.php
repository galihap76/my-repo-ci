<!--CONTROLLERS-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
    function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
	}
	public function index(){
		$data['user'] = $this->m_data->show_data()->result();
		$this->load->view('v_web/index.php',$data);
	}  
}
?>

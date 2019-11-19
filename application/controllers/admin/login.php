<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('dash');
	}

	public function index(){

		$data['ft'] = $this->dash->get();
		
		$data['index'] = $this->load->view('admin/login',$data,true);

		$this->load->view('main',$data);

	}

	public function view(){

		$this->load->library('form_validation');

		$this->form_validation->set_rules('name','name','required');

		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run()){

			//true
			$name = $this->input->post('name');

			$password = $this->input->post('password');

			if($this->dash->is_log($name,$password)){

				$session_data = array(
					'name' => $name
				);

				$this->session->set_userdata($session_data);

				redirect(base_url().'welcome');

			}else{

				$this->session->set_flashdata('error','Invalid Name & Password');

				redirect(base_url().'login');
			}

		}else{

			//false
			$this->index();
			// redirect(base_url().'admin-login');
		}

	}

	public function enter(){

		if($this->session->userdata('name') != ''){

			$data['ft'] = $this->dash->get();

			$data['index'] = $this->load->view('admin/welcome',$data,true);

			$this->load->view('main',$data);

		}else{

			redirect(base_url().'login');

		}

	}

	public function logout(){

		$this->session->unset_userdata('name');

		redirect(base_url().'login');

	}
	public function ck(){
		
		if($this->session->userdata('name') != ''){

			echo "string";

			exit();
		
		}else{

			redirect(base_url().'login');
		
		}
	}

}
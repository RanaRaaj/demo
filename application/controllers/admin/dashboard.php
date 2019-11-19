<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Dashboard extends CI_Controller
{
	
	function __construct()
	{

		parent::__construct();
		
		$this->load->model('dash');

	}

	public function index(){

		$data['fetch'] = $this->dash->get();

		$data['index'] = $this->load->view('admin/dashbor',$data,true);

		$this->load->view('main',$data);

	}

	public function add(){

		$data['fetch'] = $this->dash->get();

		$data['index'] = $this->load->view('admin/add',$data,true);

		$this->load->view('main',$data);

	}

	public function insert(){

		$config['upload_path'] = './images/';

		$config['allowed_types'] = 'jpg|png|gif';

		$this->load->library('upload',$config);

		if($this->upload->do_upload('image')){

		$file_name = $this->upload->data();

		$data = array(

			'name' => $this->input->post('name'),
			'image' => $file_name['file_name']

		);

		$this->dash->in($data);

		redirect('add');
	}else{
		echo "looser";
		exit();
	}

	}

}
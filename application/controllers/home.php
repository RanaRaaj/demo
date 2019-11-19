<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

	function __construct(){

		parent::__construct();

		$this->load->model('home_model');

	}

	public function index(){
		
		$data['fetch'] = $this->home_model->fist();

		$data['index'] = $this->load->view('pages/index',$data,true);

		$this->load->view('main',$data);

	}
}
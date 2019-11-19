<?php 
defined('BASEPATH') OR exit('No diret script access allowed');

/**
 * 
 */
class home_model extends CI_Model{
	
	function __construct()	{
		# code...
		parent::__construct();
	}

	public function fist(){

		$this->db->select('*')->from('login');
		$query = $this->db->get();
		return $query;

	}
}
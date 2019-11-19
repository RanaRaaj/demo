<?php 
/**
 * 
 */
class Dash extends CI_Model
{
	
	function __construct()
	{
		
		parent::__construct();

	}

	public function get(){

		$this->db->select('*')->from('login');
		$que = $this->db->get();
		return $que;
 
	}

	public function in($data){

		$this->db->insert('login',$data);

	}

	public function is_log($name,$password){

		$this->db->where('name',$name);
		$this->db->where('password',$password);
		$query = $this->db->get('login');

		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

}
<?php 
class Package_model extends CI_Model 
{

	


	public function check_user($where_array)
	{	
		$result = $this->db->get_where('tbl_agent',$where_array);
		return $result->row_array();
	}

	

	public function insert_agent($insert_agent)
	{
		$this->db->insert('tbl_agent',$insert_agent);
	}


	public function insert_customer($insert_customer)
	{
		$this->db->insert('tbl_customer',$insert_customer);
	}


	public function allcustomer($id)
	{	$this->db->where('agent_id',$id);
		$customer = $this->db->get('tbl_customer');
		return $customer->result_array();
	}


	



}


 ?>
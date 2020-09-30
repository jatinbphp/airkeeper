<?php
class house_model extends CI_model{

	function create($formArray)
	{
		$this->db->insert('house',$formArray);
		
	} 

	function all()
	{
		return $house = $this->db->get('house')->result_array();
	}

}

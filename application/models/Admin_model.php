<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	
	public function getData($t)
	{
		return $this->db->get($t);
	}
	public function register($table, $data)
	{
    return $this->db->insert($table, $data);
	}
	public function getDataId($t, $w)
	{
		$this->db->join('level', 'level.id_level = ' . $t . '.id_level', 	'left');
		$this->db->where($w);
		return $this->db->get($t);
	}
	
	public function ins($t, $object)
	{
		$this->db->insert($t, $object);
	}

}

/* End of file Login_model.php */


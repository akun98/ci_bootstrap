<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_Blog extends CI_Model {

	public function get_artikels(){
		$query = $this->db->get('biodata');
		return $query->result();
	}	

	public function get_single($id)
	{
		$query = $this->db->query('select * from biodata where id_blog='.$id);
		return $query->result();
	}
}
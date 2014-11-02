<?php
Class ServicesPages extends CI_Model
{
	function form_insert($data)
	{//echo "<pre>";print_r($data);die();
		$this->db->insert('pages', $data);
	}
	function form_update($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update('pages', $data);
	}
	
	function show_data()
	{
		$query =  $this->db->get('pages'); 
    	return $query->result() ;
	}
	function delete_id($id)
	{
		$this->db->delete('pages', array('id' => $id)); 
	}
	function get_page($id)
	{
		$this->db->where('id', $id);
        $query = $this->db->get('pages');
		
        return $query->row();
	}
	function get_page_names()
	{
		$this->db->select('id,name'); 
    	$this->db->from('pages'); 
		$this->db->where('Status','Yes');  
    return $this->db->get()->result();
	}

}
?>
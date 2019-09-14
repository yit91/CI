<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Md_biodata extends CI_Model{
  public function get_biodata(){
    return $this->db->get('biodata')->result_array();
    // return $this->db->query('SELECT * FROM biodata')->result_array();
  }
  public function tambah_data($data){
  return $this->db->insert('biodata',$data);

  }
  public function hapus_data($id){
    return $this->db->delete('biodata',$id);
  }
  public function get_ubah_data($id){
    $this->db->where('id',$id);
    return $this->db->get('biodata')->result_array();    
  }
  public function ubah_data($data,$id){
    $this->db->where('id', $id);
    return $this->db->update('biodata', $data);
  }

}

 ?>

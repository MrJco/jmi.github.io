<?php
class mod_mhs extends CI_Model {

    public function get_all(){
        $query=$this->db->query("SELECT * FROM tb_mahasiswa ORDER BY id desc");
        $data=$query->result();
        return $data;
     }

 public function get_data($id){
    $query=$this->db->query("SELECT * FROM tb_mahasiswa WHERE id='".$id."'");
    $data=$query->result();
    return $data;
 }
 
 public function input_data($mytable,$data){
    $this->db->insert($mytable,$data);
    return $data;
 }
    }
?>


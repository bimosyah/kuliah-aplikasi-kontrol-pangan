<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Komoditi extends CI_Model {
    
    public function save($nama){
        $query = $this->db->insert('komoditi', $nama);
        return $query;
    }

    public function delete($id){
        $query = $this->db->delete('komoditi');
        return $query;
    }

    public function get($id){
        $this->db->where('id', $id);
        $query = $this->db->get('komoditi');
        return $query->result();
    }

    public function getAll(){
        $query = $this->db->get('komoditi');
        return $query->result();
    }

    public function edit($id,$data){
        $this->db->where('id', $id);
        $query = $this->db->update('komoditi', $data);
        return $query;
    }
}

/* End of file Komoditi.php */

?>
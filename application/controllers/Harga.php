<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Harga extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mHarga','harga');
    }
    
    public function index()
    {
        $data['harga'] = $this->harga->getAll();
        echo "halo";
    }

    public function save(){
        $nama = $this->input->post('nama');
        $data = array("nama" =>$nama);
        $this->harga->save($data);
    }

    public function delete($id){
        $this->harga->delete($id);
    }

    public function edit($id){
        $this->harga->edit($id,$data);
    }

}

/* End of file Harga.php */

?>
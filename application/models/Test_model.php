<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Test_model extends CI_Model
{
    private $_table = "tests";

    public $id_pengguna;
    public $nama;
    public $alamat;
    public $resiko;
    public $y;
    

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],
            
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_pengguna = uniqid();
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->resiko = $post["resiko"];
        return $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_pengguna" => $id));
    }

}
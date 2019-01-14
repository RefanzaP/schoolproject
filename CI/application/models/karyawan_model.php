<?php defined('BASEPATH') OR exit('No direct script access allowed');

class karyawan_model extends CI_Model
{
    private $_table = "karyawan";

    public $karyawan_id;
    public $nama;
    public $alamat;
    public $telp;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'numeric'],

            ['field' => 'telp',
            'label' => 'Telp',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["karyawan_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->karyawan_id = uniqid();
        $this->karyawan = $post["karyawan"];
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->telp = $post["telp"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->karyawan_id = uniqid();
        $this->karyawan = $post["karyawan"];
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->telp = $post["telp"];
        $this->db->update($this->_table, $this, array('karyawan_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("karyawan_id" => $id));
    }
}

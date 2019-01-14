<?php defined('BASEPATH') OR exit('No direct script access allowed');

class supplier_model extends CI_Model
{
    private $_table = "supplier";

    public $supplier_id;
    public $supplier_name;
    public $supplier_address;



    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["supplier_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->supplier_id = uniqid();
        $this->supplier_name = $post["name"];
        $this->supplier_address = $post["address"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->supplier_id = $post["id"];
        $this->supplier_name = $post["name"];
        $this->supplier_address = $post["address"];

        $this->db->update($this->_table, $this, array('supplier_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("$supplier_id" => $id));
    }
}

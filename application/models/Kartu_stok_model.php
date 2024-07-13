<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kartu_stok_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function get_kartu_stok_by_barang_id($id_barang, $limit = 10, $offset = 0, $search = null)
  {
    $this->db->where('id_barang', $id_barang);
  
    if ($search) {
      $this->db->like('tipe_transaksi', $search);
    }
  
    $this->db->limit($limit, $offset);
    return $this->db->get('kartu_stok')->result();
  }
  
  public function get_kartu_stok_count_by_barang_id($id_barang, $search = null)
  {
    $this->db->where('id_barang', $id_barang);
  
    if ($search) {
      $this->db->like('tipe_transaksi', $search);
    } 
    return $this->db->count_all_results('kartu_stok');
  }
  

  public function insert_kartu_stok($data)
  {
    $this->db->insert('kartu_stok', $data);
    return $this->db->insert_id();
  }
}
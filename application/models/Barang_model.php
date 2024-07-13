<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function get_all_barang($limit, $offset, $search_kode = "", $search_nama = "")
{
    if (!empty($search_kode)) {
        $this->db->like('kode_barang', $search_kode);
    }
    if (!empty($search_nama)) {
        $this->db->like('nama_barang', $search_nama);
    }
    $query = $this->db->get('barang', $limit, $offset);
    return $query->result();
}

public function get_barang_count($search_kode = "", $search_nama = "")
{
    if (!empty($search_kode)) {
        $this->db->like('kode_barang', $search_kode);
    }
    if (!empty($search_nama)) {
        $this->db->like('nama_barang', $search_nama);
    }
    return $this->db->count_all_results('barang');
}

  public function get_barang_by_id($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->get('barang');
    return $query->row();
  }

  public function insert_barang($data)
  {
    $this->db->insert('barang', $data);
    return $this->db->insert_id();
  }

  public function update_barang($id, $data)
  {
    $this->db->where('id', $id);
    $this->db->update('barang', $data);
    return $this->db->affected_rows();
  }

  public function delete_barang($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('barang');
    return $this->db->affected_rows();
  }
  public function autocomplete_nama($term) {
    $this->db->like('nama_barang', $term);
    $query = $this->db->get('barang');
    return $query->result();
}

public function autocomplete_kode($term) {
    $this->db->like('kode_barang', $term);
    $query = $this->db->get('barang');
    return $query->result();
}
public function barang_tampil() {
  return $this->db->count_all('barang'); // Sesuaikan 'barang' dengan nama tabel barang Anda
}
}


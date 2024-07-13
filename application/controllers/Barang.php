<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Barang_model');
    $this->load->model('Kartu_stok_model');
    $this->load->library('pagination');
  }

  public function index()
  {
    // Get search keyword
    $search_kode = $this->input->get('search_kode');
    $search_nama = $this->input->get('search_nama');

    //tampil
    $data['barang_count'] = $this->Barang_model->barang_tampil();

    // Pagination configuration
    $config['base_url'] = site_url('barang/index');
    $row_per_page = 4;
    $row_no = $this->uri->segment(3);

    if ($row_no != 0) {
        $row_no = ($row_no - 1) * $row_per_page;
    }
    $config['total_rows'] = $this->Barang_model->get_barang_count($search_kode, $search_nama);
    $config['per_page'] = $row_per_page;
    $config['use_page_numbers'] = TRUE;

    // Bootstrap 4 Pagination fix
    $config['full_tag_open'] = '<nav><ul class="pagination">';
    $config['full_tag_close'] = '</ul></nav>';
    $config['first_link'] = 'First';
    $config['last_link'] = 'Last';
    $config['first_tag_open'] = '<li class="page-item">';
    $config['first_tag_close'] = '</li>';
    $config['prev_link'] = '&laquo';
    $config['prev_tag_open'] = '<li class="page-item">';
    $config['prev_tag_close'] = '</li>';
    $config['next_link'] = '&raquo';
    $config['next_tag_open'] = '<li class="page-item">';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li class="page-item">';
    $config['last_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</li>';
    $config['attributes'] = array('class' => 'page-link');

    $this->pagination->initialize($config);
    $data['barang'] = $this->Barang_model->get_all_barang($config['per_page'], $row_no, $search_kode, $search_nama);
    $data['pagination'] = $this->pagination->create_links();

    // Pass search keywords to view
    $data['search_kode'] = $search_kode;
    $data['search_nama'] = $search_nama;

    $this->load->view('barang/masuk', $data);
}
public function kartu_stok($id_barang)
{
  // Get search keyword, date range, and item transaction
  $search = $this->input->get('search');

  // Pagination configuration
  $config['base_url'] = site_url('barang/kartu_stok/'.$id_barang,);
  $row_per_page = 4;
  $row_no = $this->uri->segment(4, 0);

  if ($row_no != 0) {
      $row_no = ($row_no - 1) * $row_per_page;
  }
  $config['total_rows'] = $this->Kartu_stok_model->get_kartu_stok_count_by_barang_id($id_barang, $search);
  $config['per_page'] = $row_per_page;
  $config['use_page_numbers'] = TRUE;

  // Bootstrap 4 Pagination fix
  $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
  $config['full_tag_close'] = '</ul></nav>';
  $config['first_link'] = 'First';
  $config['last_link'] = 'Last';
  $config['first_tag_open'] = '<li class="page-item">';
  $config['first_tag_close'] = '</li>';
  $config['prev_link'] = '&laquo';
  $config['prev_tag_open'] = '<li class="page-item">';
  $config['prev_tag_close'] = '</li>';
  $config['next_link'] = '&raquo';
  $config['next_tag_open'] = '<li class="page-item">';
  $config['next_tag_close'] = '</li>';
  $config['last_tag_open'] = '<li class="page-item">';
  $config['last_tag_close'] = '</li>';
  $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
  $config['cur_tag_close'] = '</a></li>';
  $config['num_tag_open'] = '<li class="page-item">';
  $config['num_tag_close'] = '</li>';
  $config['attributes'] = array('class' => 'page-link');

  $this->pagination->initialize($config);

  // Get items with pagination
  $data['kartu_stok'] = $this->Kartu_stok_model->get_kartu_stok_by_barang_id($id_barang, $config['per_page'], $row_no, $search,);
  $data['pagination'] = $this->pagination->create_links();

  // Pass search keyword to view
  $data['search'] = $search;
  $data['barang'] = $this->Barang_model->get_barang_by_id($id_barang);

  $this->load->view('barang/kartu_stok', $data);
}

  

  public function tambah()
  {
    $this->load->view('barang/tambah');
  }

  public function simpan()
  {
    $data = [
      'kode_barang' => $this->input->post('kode_barang'),
      'nama_barang' => $this->input->post('nama_barang'),
      'harga_barang' => $this->input->post('harga_barang'),
      'qty' => $this->input->post('qty')
    ];
    $id_barang = $this->Barang_model->insert_barang($data);

    $data_kartu_stok = [
      'id_barang' => $id_barang,
      'tanggal' => date('Y-m-d'),
      'waktu' => date('H:i:s'),
      'tipe_transaksi' => 'MASUK',
      'qty' => $data['qty'],
      'saldo' => $data['qty']
    ];
    $this->Kartu_stok_model->insert_kartu_stok($data_kartu_stok);

    redirect('barang');
  }

  public function edit($id)
  {
    $data['barang'] = $this->Barang_model->get_barang_by_id($id);
    $this->load->view('barang/edit', $data);
  }

  public function update($id)
  {
    $data = [
      'kode_barang' => $this->input->post('kode_barang'),
      'nama_barang' => $this->input->post('nama_barang'),
      'harga_barang' => $this->input->post('harga_barang'),
      'qty' => $this->input->post('qty')
    ];
    $this->Barang_model->update_barang($id, $data);
    redirect('barang');
  }

  public function hapus($id)
  {
    $this->Barang_model->delete_barang($id);
    redirect('barang');
  }


  public function keluar($id_barang)
  {
    $data = [
      'id_barang' => $id_barang,
      'tanggal' => date('Y-m-d'),
      'waktu' => date('H:i:s'),
      'tipe_transaksi' => 'KELUAR',
      'qty' => $this->input->post('qty')
    ];

    $barang = $this->Barang_model->get_barang_by_id($id_barang);
    $data['saldo'] = $barang->qty - $data['qty'];

    if ($data['saldo'] >= 0) {
      $this->Barang_model->update_barang($id_barang, ['qty' => $data['saldo']]);
      $this->Kartu_stok_model->insert_kartu_stok($data);
      $this->session->set_flashdata('success', 'Barang berhasil dikeluarkan');
    } else {
      $this->session->set_flashdata('error', 'Stok barang tidak mencukupi');
    }

    redirect('barang/kartu_stok/'.$id_barang);
  }

  public function masuk($id_barang)
  {
    $data = [
      'id_barang' => $id_barang,
      'tanggal' => date('Y-m-d'),
      'waktu' => date('H:i:s'),
      'tipe_transaksi' => 'MASUK',
      'qty' => $this->input->post('qty')
    ];

    $barang = $this->Barang_model->get_barang_by_id($id_barang);
    $data['saldo'] = $barang->qty + $data['qty'];

    $this->Barang_model->update_barang($id_barang, ['qty' => $data['saldo']]);
    $this->Kartu_stok_model->insert_kartu_stok($data);

    $this->session->set_flashdata('success', 'Barang berhasil dimasukkan');

    redirect('barang/kartu_stok/'.$id_barang);
  }
  public function autocomplete_nama() {
    $term = $this->input->get('term');
    $this->load->model('Barang_model');
    $result = $this->Barang_model->autocomplete_nama($term);
    $response = [];
    foreach ($result as $row) {
        $response[] = ['label' => $row->nama_barang, 'value' => $row->nama_barang];
    }
    echo json_encode($response);
}

public function autocomplete_kode() {
    $term = $this->input->get('term');
    $this->load->model('Barang_model');
    $result = $this->Barang_model->autocomplete_kode($term);
    $response = [];
    foreach ($result as $row) {
        $response[] = ['label' => $row->kode_barang, 'value' => $row->kode_barang];
    }
    echo json_encode($response);
}

}

//jumlah barang

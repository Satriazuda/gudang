<?php
class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index() {
        $data['users'] = $this->User_model->get_all_users(); // Mendapatkan data semua user
        $data['user_count'] = count($data['users']); // Mendapatkan jumlah user
        $data['tampil'] = 'Data User'; // Contoh pengiriman variabel tampil
        $this->load->view('user', $data); // Menampilkan view dengan dat
    }

    public function tampil(){
        $data = [
            'Name' => $this->input->post('Name'), // Gunakan $this->input->post() untuk mengambil data POST
            'DateofBirth' => $this->input->post('DateofBirth'),
            'PlaceofBirth' => $this->input->post('PlaceofBirth'),
            'HomeAddress' => $this->input->post('HomeAddress'),
            'WorkAddress' => $this->input->post('PersonKey'),
        ];
        // Anda mungkin ingin menyimpan data ini ke database atau melakukan sesuatu dengannya
    }
}
?>

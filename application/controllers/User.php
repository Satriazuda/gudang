<?php
class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index() {
        $data['user_count'] = $this->User_model->get_user_count();
        $data['tampil'] = $this->User_model->get_all_users(); // Pastikan ada metode untuk mendapatkan semua pengguna
        $this->load->view('user', $data);
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

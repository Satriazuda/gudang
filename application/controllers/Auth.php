<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function login() {
        $this->load->view('auth/login_view');
    }

    public function login_action() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->Auth_model->check_user($email, $password);

        if ($user) {
            $this->session->set_userdata('user', $user);
            redirect('Home');
        } else {
            $this->session->set_flashdata('error', 'Invalid email or password');
            redirect('auth/login');
        }
    }

    public function logout() {
        $this->session->unset_userdata('user');
        redirect('auth/login');
    }

    public function register() {
        $this->load->view('auth/register_view');
    }

    public function register_action() {
        $name = $this->input->post('name');
        $date_of_birth = $this->input->post('date_of_birth');
        $place_of_birth = $this->input->post('place_of_birth');
        $home_address = $this->input->post('home_address');
        $work_address = $this->input->post('work_address');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Insert person data
        $person_key = $this->Auth_model->create_person($name, $date_of_birth, $place_of_birth, $home_address, $work_address);

        if ($person_key) {
            // Insert user data
            $this->Auth_model->create_user($person_key, $email, $hashed_password);
            $this->session->set_flashdata('success', 'Account created successfully');
            redirect('auth/login');
        } else {
            $this->session->set_flashdata('error', 'Failed to create account');
            redirect('auth/register');
        }
    }
}


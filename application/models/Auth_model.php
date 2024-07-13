<?php
class Auth_model extends CI_Model {
    // Fungsi untuk mengecek user login
    public function check_user($email, $password) {
        $this->db->where('Email', $email);
        $query = $this->db->get('user');

        if ($query->num_rows() == 1) {
            $user = $query->row();
            // Verifikasi password yang di-hash
            if (password_verify($password, $user->Password)) {
                return $user;
            }
        }
        return false;
    }

    // Fungsi untuk membuat data person
    public function create_person($name, $date_of_birth, $place_of_birth, $home_address, $work_address) {
        $data = array(
            'Name' => $name,
            'DateOfBirth' => $date_of_birth,
            'PlaceOfBirth' => $place_of_birth,
            'HomeAddress' => $home_address,
            'WorkAddress' => $work_address
        );
        $this->db->insert('person', $data);
        return $this->db->insert_id(); // Mengembalikan PersonKey yang baru dibuat
    }

    // Fungsi untuk membuat data user
    public function create_user($person_key, $email, $password) {
        $data = array(
            'PersonKey' => $person_key,
            'Email' => $email,
            'Password' => $password // Password sudah di-hash
        );
        return $this->db->insert('user', $data);
    }
}


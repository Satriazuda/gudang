<?php
class User_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_user_count() {
        return $this->db->count_all('person'); // Sesuaikan 'person' dengan nama tabel pengguna Anda
    }

    public function get_all_users() {
        $query = $this->db->get('person'); // Sesuaikan 'person' dengan nama tabel pengguna Anda
        return $query->result();
    }
}
?>

<?php

class Belanja_model extends CI_Model {

        public function get_data()
        {
                $query = $this->db->get('barang');
                return $query->result();
        }

        public function insert_belanja($data)
        {
                $this->db->insert('belanja', $data);
        }

}

?>
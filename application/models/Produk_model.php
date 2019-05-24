<?php

class Produk_model extends CI_Model {


		public function get_data_by_id($data)
		{
			$sql = "select * from barang where nama_barang = ? ";
			return $this->db->query($sql, $data)->row();
		}

        public function get_data()
        {
            $query = $this->db->get('barang');
            return $query->result();
        }

        public function insert_belanja($data)
        {
            $this->db->insert('belanja', $data);
        }

        public function update_stok_barang($id, $stok)
        {
        	$this->db->where('id_barang', $id);
        	$this->db->set('stok_barang', $stok);
    		$this->db->update('barang');
        }

}

?>
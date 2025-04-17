<?php
class Tamu_model extends CI_Model {
    public function insert($data) {
        $this->db->insert('buku_tamu', $data);
    }

    public function get_filtered($filter) {
        if (!empty($filter['start'])) {
            $this->db->where('waktu >=', $filter['start'] . ' 00:00:00');
        }
        if (!empty($filter['end'])) {
            $this->db->where('waktu <=', $filter['end'] . ' 23:59:59');
        }
        $this->db->order_by('waktu', 'DESC');
        return $this->db->get('buku_tamu')->result();
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('buku_tamu');
    }
}


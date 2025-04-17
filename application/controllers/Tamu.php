<?php
class Tamu extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Tamu_model');
    }

    public function index() {
        $this->load->view('tamu_form');
    }

    public function submit() {
        $nama = $this->input->post('nama');
        $instansi = $this->input->post('instansi');
        $keperluan = $this->input->post('keperluan');

        // Validasi manual
        if (empty($nama) || strlen($nama) < 3 || empty($keperluan)) {
            echo "Isi semua kolom dengan benar.";
            return;
        }

        $data = [
            'nama' => $nama,
            'instansi' => $instansi,
            'keperluan' => $keperluan,
            'waktu' => date('Y-m-d H:i:s')
        ];

        $this->Tamu_model->insert($data);
        echo "<script>alert('Terima kasih!'); window.location='".site_url()."';</script>";
    }
}
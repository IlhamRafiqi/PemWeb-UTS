<?php
class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Tamu_model');
    }

    public function index() {
        $filter = [
            'start' => $this->input->get('start'),
            'end' => $this->input->get('end')
        ];
        $data['tamu'] = $this->Tamu_model->get_filtered($filter);
        $this->load->view('admin_list', $data);
    }

    public function delete($id) {
        $this->Tamu_model->delete($id);
        redirect('admin');
    }
}

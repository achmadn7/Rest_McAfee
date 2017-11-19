<?php

require APPPATH . '/libraries/REST_Controller.php';

class tabungan extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    // show data tabungan user
    function index_get() {
        $id = $this->input->post('id_user');
        if ($id == '') {
            $tabungan = $this->db->get('tabungan')->result();
        }
        else {
          $this->db->where('id_user', $id);
          $tabungan = $this->db->get('tabungan')->result();
        }
        $this->response($tabungan, 200);
    }
}

<?php

require APPPATH . '/libraries/REST_Controller.php';

class produk extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    // show data produk
    function index_get() {
        $id = $this->get('id_produk');
        if ($id == '') {
            $produk = $this->db->get('produk')->result();
        } else {
            $this->db->where('id_produk', $id);
            $user = $this->db->get('produk')->result();
        }
        $this->response($produk, 200);
    }
}

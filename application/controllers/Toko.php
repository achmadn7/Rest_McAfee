<?php

require APPPATH . '/libraries/REST_Controller.php';

class toko extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    // show data toko
    function index_get() {
        $id = $this->get('id_toko');
        if ($id == '') {
            $toko = $this->db->get('toko')->result();
        } else {
            $this->db->where('id_toko', $id);
            $toko = $this->db->get('toko')->result();
        }
        $this->response($toko, 200);
    }
    // insert new data to toko
    function index_post() {
      $nama_toko   = $this->input->post('nama_toko');
      $alamat      = $this->input->post('alamat');
      if ($nama_toko == '' || $alamat == '') {
        $this->response(array('status' => 'fail','message' => 'form wajib diisi', 502));
      }
      else {
        $data = array('nama_toko'  => $this->input->post('nama_toko'),);
        $cek = $this->db->get_where('toko',$data);
        if ($cek->num_rows() > 0) {
          $this->response(array('status' => 'fail','message' => 'toko sudah ada', 502));
        }
        else {
          $a    		   = $this->db->count_all('toko')+1;
          $id_toko     = 't'.$a;
          $data = array(
                      'id_toko'       => $id_toko,
                      'nama_toko'     => $this->post('nama_toko'),
                      'alamat'        => $this->post('alamat'));
          $insert = $this->db->insert('toko', $data);
          if ($insert) {
              $this->response($data, 200);
          } else {
              $this->response(array('status' => 'fail', 502));
          }
        }
      }
    }
    // update data toko
    function index_put() {
      $id         = $this->input->post('id_toko');
      if ($id == '') {
        $this->response(array('status' => 'fail','message' => 'form wajib diisi', 502));
      }
      else {
        $data = array(
                    'id_toko'       => $id_toko,
                    'nama_toko'     => $this->post('nama_toko'),
                    'alamat'        => $this->post('alamat'));
        $this->db->where('id_toko', $id);
        $update = $this->db->update('toko', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
      }
    }

    // delete toko
    function index_delete() {
      $id         = $this->input->post('id_toko');
      if ($id == '') {
        $this->response(array('status' => 'fail','message' => 'form wajib diisi', 502));
      }
      else {
        $this->db->where('id_toko', $id);
        $delete = $this->db->delete('toko');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
      }
    }
}

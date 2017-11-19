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
    //insert new data produk
    function index_post(){
      $nama_produk = $this->input->post('nama_produk');
      $sn          = $this->input->post('serial_number');
      $qr          = $this->input->post('kode_scan');
      $poin        = $this->input->post('point');
      if ($nama_produk == '' || $sn == '' || $qr == '' || $poin == '') {
        $this->response(array('status' => 'fail','message' => 'form wajib diisi', 502));
      }
      else {
        $data = array('serial_number'  => $this->input->post('serial_number'),);
        $cek = $this->db->get_where('produk',$data);
        if ($cek->num_rows() > 0) {
          $this->response(array('status' => 'fail','message' => 'produk sudah ada', 502));
        }
        else {
          $mis = 'MIS';
          $mtp = 'MTP';
          $this->db->select('id_produk');
          $this->db->from('produk');
          $this->db->where('nama_produk', $mis);
          $a    	= $this->db->count_all_results()+1;
          $this->db->select('id_produk');
          $this->db->from('produk');
          $this->db->where('nama_produk', $mtp);
          $b    	= $this->db->count_all_results()+1;
          $id_mis = 'mis'.$a;
          $id_mtp = 'mtp'.$b;
          $nama_produk = $this->input->post('nama_produk');
          if ($nama_produk == 'MIS' || $nama_produk == 'mis') {
            $data = array(
                        'id_produk'     => $id_mis,
                        'nama_produk'   => $this->post('nama_produk'),
                        'serial_number' => $this->post('serial_number'),
                        'kode_scan'     => $this->post('kode_scan'),
                        'point'         => $this->post('point'));
            $insert = $this->db->insert('produk', $data);
            if ($insert) {
                $this->response($data, 200);
            } else {
                $this->response(array('status' => 'fail', 502));
            }
          }
          elseif ($nama_produk == 'MTP' || $nama_produk='mtp') {
            $data = array(
                        'id_produk'     => $id_mtp,
                        'nama_produk'   => $this->post('nama_produk'),
                        'serial_number' => $this->post('serial_number'),
                        'kode_scan'     => $this->post('kode_scan'),
                        'point'         => $this->post('point'));
            $insert = $this->db->insert('produk', $data);
            if ($insert) {
                $this->response($data, 200);
            } else {
                $this->response(array('status' => 'fail', 502));
            }
          }
          else {
            $this->response(array('status' => 'fail','message' => 'produk sementara hanya 2 : MIS dan MTP', 502));
          }
        }
      }
    }
    //update data produk
    function index_put(){
      $id         = $this->input->post('id_produk');
      if ($id == '') {
        $this->response(array('status' => 'fail','message' => 'form wajib diisi', 502));
      }
      else {
        # code...
      }
    }
    //delete data produk
    function index_delete(){
      $id         = $this->input->post('id_produk');
      if ($id == '') {
        $this->response(array('status' => 'fail','message' => 'form wajib diisi', 502));
      }
      else {
        $this->db->where('id_produk', $id);
        $delete = $this->db->delete('toko');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
      }
    }
}

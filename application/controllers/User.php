<?php

require APPPATH . '/libraries/REST_Controller.php';

class user extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    // show data user
    function index_get() {
        $ktp = $this->get('no_ktp');
        if ($ktp == '') {
            $user = $this->db->get('user')->result();
        } else {
            $this->db->where('no_ktp', $ktp);
            $user = $this->db->get('user')->result();
        }
        $this->response($user, 200);
    }

    // insert new data to user
    function index_post() {
      $ktp         = $this->input->post('no_ktp');
      $nama_user   = $this->input->post('nama_user');
      $telp        = $this->input->post('telp');
      $id_toko     = $this->input->post('id_toko');
      $email       = $this->input->post('email');
      $pass        = $this->input->post('password');
      $re_pass     = $this->input->post('re_password');
      if ($ktp == '' || $nama_user == '' || $telp == '' || $id_toko == '' || $email == '' || $pass == '' || $re_pass == '') {
        $this->response(array('status' => 'fail','message' => 'form wajib diisi', 502));
      }
      elseif ($pass !== $re_pass) {
        $this->response(array('status' => 'fail','message' => 'password tidak sama', 502));
      }
      else {
        $data = array('no_ktp'    => $this->input->post('no_ktp'));
        $cek = $this->db->get_where('user',$data);
        if ($cek->num_rows() > 0) {
          $this->response(array('status' => 'fail','message' => 'no. ktp sudah terpakai', 502));
        }
        else {
          $a    		   = $this->db->count_all('user')+1;
          $id_user     = 'u'.$a;
          $level = 'karyawan';
          $data = array(
                      'id_user'       => $id_user,
                      'no_ktp'        => $this->post('no_ktp'),
                      'nama_user'     => $this->post('nama_user'),
                      'telp'          => $this->post('telp'),
                      'id_toko'     => $this->post('id_toko'),
                      'email'         => $this->post('email'),
                      'password'      => md5($this->input->post('password')),
                      'level'         => $level);
          $insert = $this->db->insert('user', $data);
          if ($insert) {
              $this->response($data, 200);
          } else {
              $this->response(array('status' => 'fail', 502));
          }
        }
      }
    }

    // update data user
    function index_put() {
      $ktp         = $this->input->post('no_ktp');
      if ($ktp == '') {
        $this->response(array('status' => 'fail','message' => 'form wajib diisi', 502));
      }
      else {
        $data = array(
                    'no_ktp'        => $this->post('no_ktp'),
                    'nama_user'     => $this->post('nama_user'),
                    'telp'          => $this->post('telp'),
                    'nama_toko'     => $this->post('nama_toko'),
                    'email'         => $this->post('email'),
                    'password'      => md5($this->input->post('password')));
        $this->db->where('no_ktp', $ktp);
        $update = $this->db->update('user', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
      }
    }

    // delete user
    function index_delete() {
      $ktp         = $this->input->post('no_ktp');
      if ($ktp == '') {
        $this->response(array('status' => 'fail','message' => 'form wajib diisi', 502));
      }
      else {
        $this->db->where('no_ktp', $ktp);
        $delete = $this->db->delete('user');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
      }
    }

}

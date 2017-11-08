<?php

require APPPATH . '/libraries/REST_Controller.php';

class login extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    function index_post() {
        $email = $this->input->post('email');
        $pass  = md5($this->input->post('password'));
        if ($email == '' || $pass == '') {
            $this->response(array('status' => 'fail','message' => 'form wajib diisi', 502));
        }
        else {
          $data = array(
				                'email'    => $this->input->post('email'),
				                'password' => md5($this->input->post('password')));
          $cek = $this->db->get_where('user',$data);
          if ($cek->num_rows() == 1) {
        		$this->response(200);
        	}
        	else{
        		$this->response(array('status' => 'fail','message' => 'invalid username or password', 502));
        	}
        }
    }
}

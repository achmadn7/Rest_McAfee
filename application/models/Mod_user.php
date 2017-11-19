<?php
  /**
   *
   */
  class mod_user extends ci_model
  {

    function login($data)
    {
      $query= $this->db->get_where('user',$data);
      return $query;
    }
  }
 ?>

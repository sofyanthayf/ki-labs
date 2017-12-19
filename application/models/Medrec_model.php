<?php
class Medrec_model extends CI_Model {

    public function __construct() {
        parent::__construct();

    }

    public function getICD() {
      $query = $this->db->query( "SELECT * FROM mrconso" );
      if ( !empty( $query->result_array() ) ) {
          return $query->result_array();
      }
      return false;
    }

    public function getCBG() {
      $query = $this->db->query( "SELECT * FROM inacbg" );
      if ( !empty( $query->result_array() ) ) {
          return $query->result_array();
      }
      return false;
    }

}

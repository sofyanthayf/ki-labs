<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class K_api extends REST_Controller {

	public function __construct($config = 'rest') {

		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		parent::__construct();

		$this->load->model('medrec_model');

	}

	public function icd_get(){
		$data = $this->medrec_model->getICD();
		if( $data ){
			$this->response(  [ "icd" => $data ], 200  );
		} else {
			$this->response(  "No Data", 204  );
		}
	}

	public function cbg_get(){
		$data = $this->medrec_model->getCBG();
		if( $data ){
			$this->response(  [ "cbg" => $data ], 200  );
		} else {
			$this->response(  "No Data", 204  );
		}
	}

}

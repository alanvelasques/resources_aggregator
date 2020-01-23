<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aggregator extends CI_Controller {

	public function index()
	{
		$output = shell_exec('./dockerps.sh 2>&1');
		echo $output;
	}

	public function get_container(){
		$this->load->view('aggregator_return');
	}
}

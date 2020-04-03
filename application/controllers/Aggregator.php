<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aggregator extends CI_Controller {

	public function index()
	{
		$this->load->view('aggregator_return');
	}

	public function get_containers(){
		$output = shell_exec('/home/alan/projetos/mestrado/aggregator/dockerps.sh 2>&1');
		echo $output;
	}

	public function request_container(){
		$output = shell_exec('/home/alan/projetos/mestrado/aggregator/dockerrun.sh 2>&1');
		echo $output;
	}
}

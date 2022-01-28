<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SumFormulas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$this->load->model("TrianguleGet_model");
		$this->load->model("RetanguleGet_model");

		$t_area = 0;
		$r_area = 0;

		$t_return = $this->TrianguleGet_model->get_triangules();
		$r_return = $this->RetanguleGet_model->get_retangules();

		foreach($t_return as $triangule_area)
		{
			$t_area +=$triangule_area->area;
		}
		
		foreach($r_return as $retangule_area)
		{
			$r_area +=$retangule_area->area;
		}
		
		print_r($t_area + $r_area);
		die();
	}
}

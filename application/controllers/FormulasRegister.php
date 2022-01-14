<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormulasRegister extends CI_Controller {

	public function index(){
		return "ok";
	}

	public function TrianguleRegister()
	{
		$base = ($this->post->$_POST("base") != null ? $this->post->$_POST("base") : 0);
		$altura = ($this->post->$_POST("altura") != null ? $this->post->$_POST("altura") : 0);
		if(($base || $altura) == 0){
			return "Nenhum dos atributos podem ser nulos";
		}

		$this->load->model("TrianguleRegister_model");

		$area = ($base * $altura)/2;

		if($this->TrianguleRegister_model->create_triangule($area))
		{
			return "Fórmula Geométrica salva com sucesso";
		}else
		{
			return "Erro ao salvar";
		}

	}
	
	public function RetanguleRegister()
	{
		$base = $this->post->$_POST("base");
		if($base == null){
			return "Base nula";
		}
		$altura = $this->post->$_POST("altura");
		if($altura == null){
			return "Altura nula";
		}
		$this->load->model("RetanguleRegister_model");
		if($this->RetanguleRegister_model->create_retangule($base, $altura)){
			return "Fórmula Geométrica salva com sucesso";
		}else{
			return "Erro ao salvar";
		}
	}
	
	public function SumAreas()
	{
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
		
		return ($t_area + $r_area);

	}

}

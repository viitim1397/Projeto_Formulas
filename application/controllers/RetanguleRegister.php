<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RetanguleRegister extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$_POST = json_decode(file_get_contents('php://input'), true);
		$base = $_POST['base'] != null ? $_POST['base'] : 0;
		$altura = $_POST['altura'] != null ? $_POST['altura'] : 0;

		if($base == 0)
		{
			print_r("Base nula");
			die();
		}
		if($altura == 0)
		{
			print_r("Altura nula");
			die();
		}

		$this->load->model("RetanguleRegister_model");
		$area = ($base * $altura);

		if($this->RetanguleRegister_model->create_retangule($area))
		{
			print_r("Fórmula Geométrica salva com sucesso");
			die();
		}else
		{
			print_r("Erro ao salvar");
			die();
		}
	}
}

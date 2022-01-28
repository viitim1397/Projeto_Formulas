<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TrianguleRegister extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$_POST = json_decode(file_get_contents('php://input'), true);
		$base = $_POST['base'] != null ? $_POST['base'] : 0;
		$altura = $_POST['altura'] != null ? $_POST['altura'] : 0;
		
		if($base == 0 || $altura == 0)
		{
			print_r("Nenhum dos atributos podem ser nulos");
			die();
		}

		$this->load->model("TrianguleRegister_model");
		$area = ($base * $altura)/2;

		if($this->TrianguleRegister_model->create_triangule($area))
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

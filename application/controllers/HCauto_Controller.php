<?php 
class HCauto_Controller extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('servicesModel');
	}

// view index
	public function view(){
		$data = array(
			'headtitle' => 'Services',
		);
		$this->load->view('templates/head');
		$this->load->view('templates/navbar');
		$this->load->view('services');
		$this->load->view('templates/footer');
	}

// body index
	public function showBody(){
		$data = array(
			'headtitle' => 'Body',
		);
		$data["getData"] = $this->servicesModel->get_Body();
		$this->load->view('templates/head');
		$this->load->view('templates/navbar');
		$this->load->view('bodyIndex',$data);
		$this->load->view('templates/footer');
	}

	public function showDetail($bodyID){
		$data = array(
			'headtitle' => 'Body',
		);
		$data["getDataByID"] = $this->servicesModel->get_Data_by_ID($bodyID);
		$this->load->view('templates/head');
		$this->load->view('templates/navbar');
		$this->load->view("detailIndex",$data);
		$this->load->view('templates/footer');
	}

//car rescue index
	public function showCarRescue(){
		$data = array(
			'headtitle' => 'Body',
		);
		$data["getData"] = $this->servicesModel->get_CarRescue();
		$this->load->view('templates/head');
		$this->load->view('templates/navbar');
		$this->load->view("carRescueIndex",$data);
		$this->load->view('templates/footer');
	}

	public function showCarRescueDetail($rescueID){
		$data = array(
			'headtitle' => 'Body',
		);
		$data["getDataByID"] = $this->servicesModel->get_Data_by_ID($rescueID);
		// $this->load->view('templates/head');
		// $this->load->view('templates/navbar');
		$this->load->view("detailIndex",$data);
		// $this->load->view('templates/footer');
	}

//d2d index
	public function showD2D(){
		$data = array(
			'headtitle' => 'Body',
		);
		$data["getData"] = $this->servicesModel->get_D2D();
		$this->load->view('templates/head');
		$this->load->view('templates/navbar');
		$this->load->view("d2dIndex",$data);
		$this->load->view('templates/footer');
	}

	public function showD2DDetail($d2dID){
		$data = array(
			'headtitle' => 'Body',
		);
		$data["getDataByID"] = $this->servicesModel->get_Data_by_ID($d2dID);
		// $this->load->view('templates/head');
		// $this->load->view('templates/navbar');
		$this->load->view("detailIndex",$data);
		// $this->load->view('templates/footer');
	}

//electrical index
	public function showElectrical(){
		$data = array(
			'headtitle' => 'Body',
		);
		$data["getData"] = $this->servicesModel->get_Electrical();
		$this->load->view('templates/head');
		$this->load->view('templates/navbar');
		$this->load->view("electricalIndex",$data);
		$this->load->view('templates/footer');
	}

	public function showElectricalDetail($electricalID){
		$data = array(
			'headtitle' => 'Body',
		);
		$data["getDataByID"] = $this->servicesModelce->get_Data_by_ID($electricalID);
		// $this->load->view('templates/head');
		// $this->load->view('templates/navbar');
		$this->load->view("detailIndex",$data);
		// $this->load->view('templates/footer');
	}

//engine index
	public function showEngine(){
		$data = array(
			'headtitle' => 'Body',
		);
		$data["getData"] = $this->servicesModel->get_Engine();
		$this->load->view('templates/head');
		$this->load->view('templates/navbar');
		$this->load->view("engineIndex",$data);
		$this->load->view('templates/footer');
	}

	public function showEngineDetail($engineID){
		$data = array(
			'headtitle' => 'Body',
		);
		$data["getDataByID"] = $this->servicesModel->get_Data_by_ID($engineID);
		// $this->load->view('templates/head');
		// $this->load->view('templates/navbar');
		$this->load->view("detailIndex",$data);
		// $this->load->view('templates/footer');
	}
}
?>
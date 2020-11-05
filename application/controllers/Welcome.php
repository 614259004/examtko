<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->model('trainmodel','TM');
	}
	public function index()
	{
		$result['TM'] = $this->TM->select_all();
		$this->load->view('trainshow',$result);
	}
	public function home()
	{
		$this->load->view('home');
	}
	public function add_Train(){
		$tondata = array(
			'Ton_ID' => $this->input->post("tonidbox"),
			'Ton_Station' => $this->input->post("tonstationbox"),
			'Timeout' => $this->input->post("tontimeoutbox")
			
		);
		$kangdata = array(
			'Kang_ID' => $this->input->post("kangidbox"),
			'TongTime' => $this->input->post("kangtontimebox"),
			'Timeout' => $this->input->post("kangouttimebox")
		);
		$paydata = array(
			'Pay_ID'=> $this->input->post("payidbox"),
			'Pay_Station' => $this->input->post("paystationbox"),
			'TongTime' => $this->input->post("paytontimebox")
		);
		$traindata= array(
			'Train_ID'=> $this->input->post("trainidbox"),
			'Ton_ID' => $this->input->post("tonidbox"),
			'Kang_ID' => $this->input->post("kangidbox"),
			'Pay_ID' => $this->input->post("payidbox"),
			'Status' => $this->input->post("Statustrainbox")
		);
		
		if($this->input->post("tonidbox")!= "" && $this->input->post("payidbox")!== ""){
			$this->TM->regis_ton($tondata);
			$this->TM->regis_kang($kangdata);
			$this->TM->regis_pay($paydata);
			$this->TM->regis_train($traindata);
			$result['TM'] = $this->TM->select_all();
			$this->load->view('trainshow',$result);
		}else {
			echo "ไม่สามารถเพิ่มตารางรถไฟได้";
		}
	}

	public function showall()
	{
		$result['TM'] = $this->TM->select_all();
		$this->load->view('trainshow',$result);
	}

}

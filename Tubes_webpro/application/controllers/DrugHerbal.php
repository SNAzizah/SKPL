<?php 
class DrugHerbal extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_drugs');
	}

	public function index()
	{
		$data['title'] = 'Herbal Drugs';
		$data['drugs'] = $this->M_drugs->getDrugs();
		if ($this->input->post('search')) {
			$data['drugs'] = $this->M_drugs->searchDrugs();
		}
		$data['active'] = '';
		$data['active2'] = 'active';
		$this->load->view('templates/header', $data);
		$this->load->view('drugs/index', $data);
		$this->load->view('templates/footer');
	}

}
?>
<?php 
	class leaflet extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->model('m_leaflet');
			$this->load->model('m_varietas');
		}
		public function index(){
			$idjp = $this->m_leaflet->getIdJenis("Jarak Pagar");
			$data['leafletjp'] = $this->m_leaflet->getleaflet($idjp);
			$idjk = $this->m_leaflet->getIdJenis("Jarak Kepyar");
			$data['leafletjk'] = $this->m_leaflet->getleaflet($idjk);
			$idTb = $this->m_leaflet->getIdJenis("Tebu");
			$data['leaflettb'] = $this->m_leaflet->getleaflet($idTb);
			$idwj = $this->m_leaflet->getIdJenis("Wijen");
			$data['leafletwj'] = $this->m_leaflet->getleaflet($idwj);
			$idalsin = $this->m_leaflet->getIdJenis("Alat dan Mesin");
			$data['leafletalsin'] = $this->m_leaflet->getleaflet($idalsin);
			$data['varietas'] = $this->m_varietas->selectVarietasOnSide();
			$this->load->view('DetailLeafletSerat', $data);
			$this->load->view('Footer');
		}
	} 
?>
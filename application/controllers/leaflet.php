<?php 
	class leaflet extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->model('M_leaflet');
		}
		public function index(){
			$idjp = $this->M_leaflet->getIdJenis("Jarak Pagar");
			$data['leafletjp'] = $this->M_leaflet->getleaflet($idjp);
			$idjk = $this->M_leaflet->getIdJenis("Jarak Kepyar");
			$data['leafletjk'] = $this->M_leaflet->getleaflet($idjk);
			$idTb = $this->M_leaflet->getIdJenis("Tebu");
			$data['leaflettb'] = $this->M_leaflet->getleaflet($idTb);
			$idwj = $this->M_leaflet->getIdJenis("Wijen");
			$data['leafletwj'] = $this->M_leaflet->getleaflet($idwj);
			$idalsin = $this->M_leaflet->getIdJenis("Alat dan Mesin");
			$data['leafletalsin'] = $this->M_leaflet->getleaflet($idalsin);
			$this->load->view('DetailLeafletSerat', $data);

		}
	} 
?>
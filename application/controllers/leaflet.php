<?php 
	class leaflet extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->model('m_leaflet');
			$this->load->model('m_varietas');
		}
		public function halamanleaflet(){
			// pagination
			//jumlah jp
			$row=$this->m_leaflet->getJumlahLeaflet();
			// var_dump($row);

			$config['base_url'] = base_url('leaflet/halamanleaflet');
			$config['total_rows'] = $row;
			$config['per_page'] = 12;

			$config['num_links'] = $row;
		    $config['full_tag_open'] = "<ul class='pagination'>";
	        $config['full_tag_close'] ="</ul>";
	        $config['num_tag_open'] = '<li>';
	        $config['num_tag_close'] = '</li>';
	        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
	        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
	        $config['next_tag_open'] = "<li>";
	        $config['next_tagl_close'] = "</li>";
	        $config['prev_tag_open'] = "<li>";
	        $config['prev_tagl_close'] = "</li>";
	        $config['first_tag_open'] = "<li>";
	        $config['first_tagl_close'] = "</li>";
	        $config['last_tag_open'] = "<li>";
	        $config['last_tagl_close'] = "</li>";

	        $start = (!$this->uri->segment(3)) ? 0 : $this->uri->segment(3);


	       	$this->pagination->initialize($config);
			$link=$this->pagination->create_links();
			$data['link']= explode('&nbsp', $link);
			$data['varietas'] = $this->m_varietas->selectVarietasOnSide();
			$data['leafletsemua']=$this->m_leaflet->paginationAll($config['per_page'], $start);
			$this->load->view('Header');
			$this->load->view('DetailLeafletSerat', $data);
			$this->load->view('Footer');
		}
	} 
?>
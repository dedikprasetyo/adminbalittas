<?php 
	class Budidaya extends CI_Controller{

		public function __construct(){
			parent::__construct();
            $this->CI = & get_instance();
			$this->load->database();
			$this->load->model('m_budidaya');
			$this->load->model('m_varietas');
		}

		public function budidayaTanamanSerat($namaMonograf){
			//manggilid berdasarkan nama monograf di enkapsulasi
			$idMonograf=$this->m_budidaya->getIdByNamaMonograf(urldecode($namaMonograf));

			//manggil funsgi database jumlah data pada tabel
			$row=$this->m_budidaya->getJumlahBaris($idMonograf);	
			// var_dump($row);
			//ngasih pagination
			
			$config['base_url'] = base_url()."budidaya/budidayaTanamanSerat/$namaMonograf";
			$config['total_rows'] = $row;
			$config['per_page'] = 3;



			// $config['first_link'] = 'Pertama';
   //     		$config['last_link'] = 'Akhir';
   //     		$config['next_link'] = '&gt;';
   //     		$config['prev_link'] = '&lt;';
			//ngatur jumlah page yg tampil
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
			
	        //ori
			// $start=$this->uri->segment('4');
			$start = (!$this->uri->segment(4)) ? 0 : $this->uri->segment(4);

			$this->pagination->initialize($config);
			$link=$this->pagination->create_links();
			$data['link']= explode('&nbsp', $link);

			
			
			$dataHeader["JudulMono"]="Tester";
			//ori
			// $data['monograf']=$this->m_budidaya->getDetailMonograf($idMonograf);
			//test
			$data['budidayavarietas']=$this->m_budidaya->selectVarietasOnSide();       			
			$data['monograf']=$this->m_budidaya->getMonografIdVer2($idMonograf, $config['per_page'], $start);
			$this->load->view('Header', $dataHeader);
			$this->load->view('BudidayaSerat', $data);
			$this->load->view('Footer');
		}
	}
?>
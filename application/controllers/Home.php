<?php
class Home extends CI_Controller {
	protected $_model;
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('layout', 'layout_main');
		$this->load->database();
		$this->load->model('Utama_db');
		$this->load->library('pagination');
		error_reporting(1);
	}
	
	function index()
	{
		
		$config['base_url'] 		= $this->config->item('base_url').'/home/index/';
		$config['total_rows'] 		= $this->Utama_db->artikelDetailTotRow();
		#die($this->config->item('base_url'));
		$config['per_page'] 		= '6';
		
		$config['full_tag_open'] 	= '<ul id="pagination-digg">'; // <ul id="pagination-clean"> <ul id="pagination-flickr">
		$config['full_tag_close'] 	= '</ul>';
		
		$config['next_link'] 		= 'Next &raquo;';
		$config['next_tag_open'] 	= '<li class="next">';
		$config['next_tag_close'] 	= '</li>';
		
		$config['prev_link'] 		= '&laquo;Previous';
		$config['prev_tag_open'] 	= '<li class="previous-off">';
		$config['prev_tag_close'] 	= '</li>';
		
		$config['cur_tag_open'] 	= '<li class="active">'; //link aktif
		$config['cur_tag_close'] 	= '</li>';
		
		$config['num_tag_open'] 	= '<li>';//link non aktif
		$config['num_tag_close'] 	= '</li>';
		
		$this->pagination->initialize($config);
		
		#die($this->uri->segment(3));
		$fetch['query'] = $this->Utama_db->artikelKategory();
		$fetch['archives'] = $this->Utama_db->artikelArchives();
		$fetch['artikelDetail'] = $this->Utama_db->artikelDetail($config['per_page'], $this->uri->segment(3));
		$fetch['css']= $this->config->item('css');
		$fetch['js']= $this->config->item('js');
		$fetch['base_url']= $this->config->item('base_url');
		$fetch['libraries']= $this->config->item('libraries');
		$this->layout->view('depan/home',$fetch);
		
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
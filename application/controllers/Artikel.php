<?php
class Artikel extends CI_Controller {
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
	
	function get_ip_address()
	{
		foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key)
		{
			if (array_key_exists($key, $_SERVER) === true)
			{
				foreach (explode(',', $_SERVER[$key]) as $ip)
				{
					if (filter_var($ip, FILTER_VALIDATE_IP) !== false)
					{
						return $ip;
					}
				}
			}
		}
	}

	function idartikel()
	{		
		$datume= date("U");
		$datumex=$datume-600;
		
		#$tojvip=$_SERVER["REMOTE_ADDR"];
		$tojvip = $this->get_ip_address();
		#$this->Data_query->insert("artikel_hit_counter","(artikel_hit_ip,artikel_hit_id_artikel,artikel_hit_tanggal)","('$tojvip','".$this->uri->segment(3)."','".date('d-m-y')."')");		
				
		//die($this->uri->segment(3));
		$fetch['query'] = $this->Utama_db->artikelKategory();
		$fetch['archives'] = $this->Utama_db->artikelArchives();
		$fetch['artikelDetail'] = $this->Utama_db->artikelDetail('', $this->uri->segment(3));
		
		$fetch['css']= $this->config->item('css');
		$fetch['js']= $this->config->item('js');
		$fetch['base_url']= $this->config->item('base_url');
		$fetch['libraries']= $this->config->item('libraries');
		$this->layout->view('depan/artikel',$fetch);
	}
	
	function kategori()
	{		
		#die($this->uri->segment(3));
		$fetch['query'] = $this->Utama_db->artikelKategory();
		$fetch['archives'] = $this->Utama_db->artikelArchives();
		#$fetch['artikelDetail'] = $this->Utama_db->artikelDetail('', '',$this->uri->segment(3));
		$fetch['css']= $this->config->item('css');
		$fetch['js']= $this->config->item('js');
		$fetch['base_url']= $this->config->item('base_url');
		$fetch['libraries']= $this->config->item('libraries');
		$this->layout->view('depan/index',$fetch);
	}
	
	function archives()
	{
		#die($this->uri->segment(3));
		$fetch['query'] = $this->Utama_db->artikelKategory();
		$fetch['archives'] = $this->Utama_db->artikelArchives();
		$fetch['artikelDetail'] = $this->Utama_db->artikelDetail('', '','',$this->uri->segment(3));
		$fetch['css']= $this->config->item('css');
		$fetch['js']= $this->config->item('js');
		$fetch['base_url']= $this->config->item('base_url');
		$tch['libraries']= $this->config->item('libraries');
		$this->layout->view('depan/home',$fetch);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
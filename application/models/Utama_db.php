<?php
Class Utama_db extends CI_Model 
{
     protected $_artikel_master = "artikelmaster";
     protected $_kategori_artikel = "kategori_artikel";
     protected $_artikel_detail = "artikeldetail";
     
     function __construct(){
	  parent::__construct();
	  $this->load->database();
     }
        
     function artikelKategory(){	
	  /*$sql = "SELECT
	          IF(JUDUL<> '',JUDUL,(SELECT NAMA_KATEGORI FROM KATEGORI_ARTIKEL WHERE IDKATEGORI_ARTIKEL=A.IDKATEGORI_ARTIKEL)) AS JUDUL,
		  A.IDARTIKEL_MASTER
		  FROM ".$this->_artikel_master." A
		  ORDER BY A.JUDUL;";
	  */
	  $sql="SELECT * FROM ".$this->_kategori_artikel." A ORDER BY A.nama_kategori";
	  $query = $this->db->query($sql);
	  //die($sql);
	  return $query->result(); 
     }
     
      function insertartikelKategory($task){

	#$sql = "INSERT INTO kategori_artikel(nama_kategori) VALUES ($task)";
	#die(date('d-m-Y'));
	$data =array('isi'=>$task['isi'],'penulis'=>$task['penulis'],'idartikel_master'=>$task['group'],'idkategori_artikel'=>$task['kategori'],'judul_artikel'=>$task['judul_artikel'],'artikel_ringkasan'=>$task['ringkasan'],'tglposting'=>date('Y-m-d'));
	#die(print_r($data));
	$this->db->insert('artikeldetail',$data);
     }
     
     function updateArtikelKategory($task){
	#$data =array('isi'=>$task['isi'],'penulis'=>$task['penulis'],'idartikel_master'=>$task['kategori'],'judul_artikel'=>$task['judul_artikel'],'tglposting'=>date('Y-m-d'));
	$data =array('isi'=>$task['isi'],'penulis'=>$task['penulis'],'idartikel_master'=>$task['group'],'idkategori_artikel'=>$task['kategori'],'artikel_ringkasan'=>$task['ringkasan'],'judul_artikel'=>$task['judul_artikel']);
	#die(print_r($data));
	
	$where =array('id_artikel'=>$task['idArtikel']);
	$this->db->where($where);
	$this->db->update('artikeldetail',$data);
     }
     
    function artikelDetailTotRow()
    {
      
     $sql = "SELECT  count(penulis) AS ttl FROM artikeldetail";
    
    	$q = $this->db->query($sql);
    	$row = $q->row();
    	return $row->ttl;
    }
    
     function kategoryArtikel(){	
	  $sql="SELECT * FROM ".$this->_kategori_artikel;
	  $query = $this->db->query($sql);
	  #die($sql);
	  return $query->result(); 
     }
     function artikelMaster(){
	  $sql="SELECT * FROM ".$this->_artikel_master." A ORDER BY A.judul";
	  $query = $this->db->query($sql);
	  //die($sql);
	  return $query->result(); 
     }
     
     function artikelDetail($limit=0, $offset=0,$kategori=0,$archives=0){
	  #die("$offset");
	  $sql .="SELECT * FROM ".$this->_artikel_detail. " A " ;
	  if(!empty($limit)  and empty($kategori) and empty($archives))
	  {
	       if (empty($offset)){
	      $offset=0;}
	      
	       $sql.=" ORDER BY A.ID_ARTIKEL DESC limit $limit offset $offset";
	  }

	  if(empty($limit) and !empty($offset) and empty($kategori) and empty($archives))
	  {
	       $sql.=" where A.id_artikel='$offset'";
	  }
	  
	  if(empty($limit) and empty($offset) and !empty($kategori) and empty($archives))
	  {
	       $sql.=", ".$this->_artikel_master." B,".$this->_kategori_artikel." C WHERE
		    A.idartikel_master=B.idartikel_master
		    AND B.idkategori_artikel=C.idkategori_artikel AND C.idkategori_artikel='$kategori'";
	  }
	  if(empty($limit) and empty($offset) and empty($kategori) and !empty($archives))
	  {
	       $sql.=" WHERE DATE_FORMAT(A.tglposting,'%b_%Y')='$archives'";
	       #die("$sql");
	  }
	  #die("$sql");
	  $query = $this->db->query($sql);
	  return $query->result(); 
     }
     
     function artikelMasterKategori($kategori){
	//  $sql .="SELECT a.idartikel_master,a.judul
	//          FROM artikelmaster a,kategori_artikel b WHERE
	//	  a.idkategori_artikel=b.idkategori_artikel AND
	//	  b.idkategori_artikel='$kategori' group by a.idartikel_master,a.judul;" ;
	$sql = "SELECT a.idartikel_master,a.judul FROM
	        artikelmaster a,kategori_artikel b,artikeldetail c WHERE
		a.idartikel_master=c.idartikel_master 
	        AND b.idkategori_artikel=c.idkategori_artikel
	        AND c.idkategori_artikel='$kategori'
		group by a.idartikel_master;";
	
	  $query = $this->db->query($sql);
	  return $query->result(); 
     }
     
     function artikelDetailKategori($kategori,$detail){
	  $sql .="SELECT *
	          FROM ".$this->_artikel_detail. " WHERE
		  idkategori_artikel='$kategori' and idartikel_master='$detail'" ;
	
	  $query = $this->db->query($sql);
	  return $query->result(); 
     }
     
     function artikelArchives(){
	  $sql="SELECT DATE_FORMAT(tglposting,'%b %Y') AS tanggal FROM ".$this->_artikel_detail." GROUP BY DATE_FORMAT(tglposting,'%b %Y') ORDER BY DATE_FORMAT( tglposting, '%Y' ) DESC , DATE_FORMAT( tglposting, '%c' ) DESC";
	  #die($sql);
	  $query = $this->db->query($sql);
	  return $query->result(); 
     }
     
     function isiArtikel(){
	  $sql="SELECT
	       a.judul_artikel,
	       b.judul,
	       c.nama_kategori,
	       a.id_artikel,
	       a.penulis,
	       a.isi,
	       b.idartikel_master,
	       b.idkategori_artikel
	       from artikeldetail a, artikelmaster b, kategori_artikel c
	       WHERE
	       a.idartikel_master =  b.idartikel_master AND 
	       a.idkategori_artikel = c.idkategori_artikel ";
	  $sql .= "
	       ORDER BY
	       a.tglposting DESC
	       ";

	  $query = $this->db->query($sql);
	  return $query->result(); 
     }
     
     function isiPilihanArtikel($idArtikel){
	  $sql="SELECT
	       a.judul_artikel,
	       b.judul,
	       c.nama_kategori,
	       a.id_artikel,
	       a.penulis,
	       a.isi,
	       b.idartikel_master,
	       a.artikel_ringkasan,
	       b.idkategori_artikel
	       from artikeldetail a, artikelmaster b, kategori_artikel c
	       WHERE
	       a.idartikel_master =  b.idartikel_master AND 
	       a.idkategori_artikel = c.idkategori_artikel";

	       $sql .= " and id_artikel=$idArtikel";
	  
	  $sql .= "
	       ORDER BY
	       a.tglposting DESC
	       ";
	       #die($sql);
	  $query = $this->db->query($sql);
	  return $query->result(); 
     }
}
?>
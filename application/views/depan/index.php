<?php
$kategori = $this->Utama_db->artikelMasterKategori($this->uri->segment(3));
$s=1;
foreach ($kategori as $kateg)
{
?>
	<table
		<tr>
			<td><?=$kateg->judul?></td>
		</tr>
	</table>
	
	<table border="1" style="border-collapse:collapse">	
		<tr>
			<td width='55'  align='center'>No</td>
			<td width='350' align='center'>Judul</td>
			<td width='150' align='center'>Penulis</td>
			<td width='65'  align='center'>Hits</td>
		</tr>
		<?php
		$detail = $this->Utama_db->artikelDetailKategori($this->uri->segment(3),$kateg->idartikel_master);
		
		$s=1;
		foreach ($detail as $artikel)
		{
			#$hit = $this->Data_query->getRowDataArrMysql("count(artikel_hit_ip)","artikel_hit_counter","artikel_hit_id_artikel='".$artikel->id_artikel."'");		
		?>
		<tr>
			<td width='55'  align='center'><?=$s?></td>
			<td width='350' align='left'><a href="<?=$base_url?>/artikel/idartikel/<?=$artikel->id_artikel?>"><?=$artikel->judul_artikel?></a></td>
			<td width='150' align='center'><?=$artikel->penulis?></td>
			<td width='65'  align='center'><?=$hit[0]?></td>
		</tr>
		<?php
		$s++;
		}
		?>
	</table>
	<br><br>
<?php
	$s=1;
}
?>


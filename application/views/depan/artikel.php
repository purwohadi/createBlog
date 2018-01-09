
<div class="right"> 
<table border="0">
<?php foreach ($artikelDetail as $artikel) {?>
<tr><td>
<h3><font type="times" size="5"><a href="<?=$base_url?>/artikel/idartikel/<?=$artikel->id_artikel?>"><?=$artikel->judul_artikel?></a></font></h3>
<table><tr><td>
<strong>Sumber </strong></td><td>:</td><td> <?=$artikel->penulis?></td></tr>
<tr><td>
<strong>Tanggal Posting </strong>  </td><td>:</td><td><?=$artikel->tglposting?></td></tr>
</table>
<br>

<?php
echo $artikel->isi;
	
	?>
	<br>


<br></td></tr>
<?php }?>
</table>
<p align="center">
	<?= $this->pagination->create_links();?>
</p>
</div>


<div class="right"> 

<?php
$s=1;
foreach ($artikelDetail as $artikel) {
	if($s%2==0){
		echo "<table border='0' bgcolor='#C0C0C0' width='100%'>";
	}else {
		echo "<table border='0' width='100%'>";
	}
?>
	<tr>
		<td colspan="2">
			 <font type="times" size="5">
					<a href="<?=$base_url?>/artikel/idartikel/<?=$artikel->id_artikel?>">
					<?=$artikel->judul_artikel?></a>
			      </font>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<br>
		</td>		
	</tr>
	<tr>
		<td>
			<strong>Tanggal : <?=$artikel->tglposting?></strong>
		</td>
		<td align="right">
			<strong>Posted By : <?=$artikel->penulis?> </strong>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<br>
			<br>
		</td>		
	</tr>
	<tr>
		<td colspan="2">
			<?php
			$potong_konten = strtok($artikel->artikel_ringkasan, " ");
			for ($a = 1; $a <= 40; $a++)
			{
				echo $potong_konten;
				echo " ";
				$potong_konten = strtok(" ");
			} echo ' ....';
			?>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<a href="<?=$base_url?>/artikel/idartikel/<?=$artikel->id_artikel?>">Read More</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Comments</a>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<br>
		</td>		
	</tr>
</table>
<br><br>
<?php
$s++;
}?>
<br>

<p align="center">
	<?= $this->pagination->create_links();?>
</p>

</div>

<?php
header("Content-type: application/vnd-pdf");
header("Content-Disposition: attachment; filename=Data_Nasabah.doc");
?>
		<form action="" class="">
		<h3 style="text-align: center;">
		EFORM PENDAFTARAN TABUNGAN BIMA
		<hr>
		</h3>



<table class="table">
  <tbody>

    
  </tbody>
</table>

		&nbsp;
		<div align="right">
			Semarang,
			<?php  
			$namabulan = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"); 
			echo date("j")." ".$namabulan[date("n")]." ".date("Y");
			?>
			<br />
			Pemohon
			<br />
			&nbsp;
			<br />
			&nbsp;
			<br />
			&nbsp;
			<br />
			&nbsp;
			<br />
			&nbsp;
			...........................................................
		</div>
	</form>
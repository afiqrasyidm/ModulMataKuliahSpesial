@extends('layouts.layout_mahasiswa')

@section('title','Upload Dokumen TA')

@section('mainContent')

<?php


if($tugas_akhir == null){
	echo "<div class='col-md-3'></div>";
	echo "<div  class='col-md-9'>";
	echo "<div style='margin-top:225px;''>";
	echo "<h2 style='color:red;'>Harap mengambil Tugas Akhir terlebih dahulu!</h2>";
	echo "<p>Anda tidak dapat melakukan pengajuan permohonan sidang tugas akhir sebelum mengambil tugas akhir</p>";
 	echo "<p>Silahkan mengambil tugas akhir";
 	echo "<a href='";
 	echo route('mahasiswa/pengajuan-permohonan-ta');
 	echo "'/>";
 	echo " disini";
 	echo "</a></p>";
}

else if($pengajuan_sidang->status!=2){
	echo "<div class='col-md-3'></div>";
	echo "<div  class='col-md-9'>";
	echo "<div style='margin-top:225px;''>";
	echo "<h2 style='color:red;'>Harap menunggu persetujuan sidang!</h2>";
	echo "<p>Anda tidak diperkenankan melakukan upload dokumen sebelum diizinkan sidang oleh dosen pembimbing</p>";
 	
}
?>

@endsection
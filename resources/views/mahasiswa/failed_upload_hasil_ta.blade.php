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


else if($tugas_akhir->status_tugas_akhir!=6){
	echo "<div class='col-md-3'></div>";
	echo "<div  class='col-md-9'>";
	echo "<div style='margin-top:225px;''>";
	echo "<h2 style='color:red;'>Harap menyelesaikan proses pembuatan tugas akhir terlebih dahulu!</h2>";
	echo "<p>Anda tidak diperkenankan melakukan upload dokumen sebelum menyelesaikan bimbingan tugas akhir dan diizinkan sidang oleh dosen pembimbing </p>";
}

if($pengajuan_sidang== null){
	echo "<div class='col-md-3'></div>";
	echo "<div  class='col-md-9'>";
	echo "<div style='margin-top:225px;''>";
	echo "<h2 style='color:red;'>Harap melakukan pengajuan sidang terlebih dahulu!</h2>";
	echo "<p>Anda tidak dapat melakukan upload dokumen sebelum melakukan pengajuan sidang tugas akhir</p>";
 	echo "<p>Silahkan makelukan pengajuan sidang tugas akhir";
 	echo "<a href='";
 	echo route('mahasiswa/pengajuan-sidang-ta');
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
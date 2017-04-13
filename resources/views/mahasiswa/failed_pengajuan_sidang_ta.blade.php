@extends('layouts.layout_failed')

@section('title','Pengajuan Sidang TA')

@section('titleMainContent')
Anda Belum Dapat Melakukan Pengajuan Sidang TA

@endsection

@section('contentMainContent')



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
	echo "<h2 style='color:red;'>Harap menyelesaikan Bimbingan Tugas Akhir terlebih dahulu!</h2>";
	echo "<p>Anda tidak diperkenankan melakukan pengajuan permohonan sidang tugas akhir sebelum menyelesaikan bimbingan tugas akhir</p>";
 	//echo "<p>Silahkan mengajukan bimbingan TA <a href="{{route('mahasiswa/pengajuan-permohonan-ta')}}">disini</a></p>";
}
?>

@endsection
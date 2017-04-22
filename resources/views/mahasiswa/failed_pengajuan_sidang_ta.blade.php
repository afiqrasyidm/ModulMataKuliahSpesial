@extends('layouts.layout_failed')

@section('title','Pengajuan Sidang TA')

@section('titleMainContent')
Anda Belum Dapat Melakukan Pengajuan Sidang

@endsection

@section('contentMainContent')



<?php


if($tugas_akhir == null){
	
	echo "<b>Harap mengambil Tugas Akhir terlebih dahulu!</b>";
	echo " Anda tidak dapat melakukan pengajuan permohonan sidang tugas akhir sebelum mengambil tugas akhir";
	echo "<br><br>";
 	echo "<p>Silahkan mengambil tugas akhir";
 	echo "<a href='";
 	echo route('mahasiswa/pengajuan-permohonan-ta');
 	echo "'/>";
 	echo " disini";
 	echo "</a></p>";
}

else if($tugas_akhir->status_tugas_akhir!=11){
	echo "<b>Harap menyelesaikan Bimbingan Tugas Akhir terlebih dahulu!</b>";
	echo " Anda tidak diperkenankan melakukan pengajuan permohonan sidang tugas akhir sebelum menyelesaikan bimbingan tugas akhir";
 	//echo "<p>Silahkan mengajukan bimbingan TA <a href="{{route('mahasiswa/pengajuan-permohonan-ta')}}">disini</a></p>";
}
?>

@endsection
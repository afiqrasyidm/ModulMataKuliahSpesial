@extends('layouts.layout_failed')
@extends('layouts.layout_failed')

@section('title','Pengajuan Pembimbing TA')

@section('titleMainContent')
Anda Belum Dapat Melakukan Pengajuan Pembimbing

@endsection

@section('contentMainContent')



<?php


if($tugas_akhir == null){
	
	echo "<b>Harap mengambil topik Tugas Akhir terlebih dahulu!</b>";
	echo " Anda tidak dapat melakukan pengajuan pembimbing tugas akhir sebelum memilih topik tugas akhir";
	echo "<br><br>";
 	echo "<p>Silahkan mengambil topik tugas akhir";
 	echo "<a href='";
 	echo route('mahasiswa/pengajuan-topik');
 	echo "'/>";
 	echo " disini";
 	echo "</a></p>";
}

else if($tugas_akhir->status_tugas_akhir!=6){
	echo "<b>Harap menyelesaikan Bimbingan Tugas Akhir terlebih dahulu!</b>";
	echo " Anda tidak diperkenankan melakukan pengajuan permohonan sidang tugas akhir sebelum menyelesaikan bimbingan tugas akhir";
 	//echo "<p>Silahkan mengajukan bimbingan TA <a href="{{route('mahasiswa/pengajuan-permohonan-ta')}}">disini</a></p>";
}
?>

@endsection
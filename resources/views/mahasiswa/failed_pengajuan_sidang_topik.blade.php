@extends('layouts.layout_failed')

@section('title','Pengajuan Sidang Topik')

@section('titleMainContent')
Anda Belum Dapat Melakukan Pengajuan Sidang Topik

@endsection

@section('contentMainContent')



<?php


if($tugas_akhir == null){
	
	echo "<b>Harap mengambil Topik terlebih dahulu!</b>";
	echo " Anda tidak dapat melakukan pengajuan permohonan sidang topik sebelum mengambil topik yang akan disidangkan";
	echo "<br><br>";
 	echo "<p>Silahkan mengambil topik";
 	echo "<a href='";
 	echo route('/mahasiswa/pengajuan-topik');
 	echo "'/>";
 	echo " disini";
 	echo "</a></p>";
}

else if($tugas_akhir->status_tugas_akhir==4){
	echo "<b>Harap mengambil Topik kembali karena Topik Anda sebelumnya tidak disetujui</b>";
	echo "<br>";
	echo " Anda tidak diperkenankan melakukan pengajuan permohonan sidang topik sebelum topik Anda disetujui";
}

else if($tugas_akhir->status_tugas_akhir==3){
	echo "<b>Topik Anda masih dalam status menunggu persetujuan!</b>";
	echo "<br>";
	echo " Anda tidak diperkenankan melakukan pengajuan permohonan sidang topik sebelum topik anda disetujui";
}
?>

@endsection
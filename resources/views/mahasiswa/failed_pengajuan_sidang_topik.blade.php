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

else if($tugas_akhir->status_tugas_akhir==9){
	echo "<b>Harap menunggu persetujuan Dosen Pembimbing!</b>";
	echo "<br>";
	echo " Anda tidak diperkenankan melakukan pengajuan permohonan sidang topik sebelum mendapatkan Dosen Pembimbing";
}

else if($tugas_akhir->status_tugas_akhir==8){
	echo "<b>Harap mengajukan Dosen Pembimbing terlebih dahulu!</b>";
	echo "<br>";
	echo " Anda tidak diperkenankan melakukan pengajuan permohonan sidang topik sebelum mendapatkan Dosen Pembimbing";
}

else if($tugas_akhir->status_tugas_akhir==7){
	echo "<b>Harap menunggu verifikasi Permohonan Tugas Akhir terlebih dahulu!</b>";
	echo "<br>";
	echo " Anda tidak diperkenankan melakukan pengajuan permohonan sidang topik sebelum permohonan Tugas Akhir disetujui";
}

else if($tugas_akhir->status_tugas_akhir==6){
	echo "<b>Harap menunggu verifikasi Permohonan Tugas Akhir terlebih dahulu!</b>";
	echo "<br>";
	echo " Anda tidak diperkenankan melakukan pengajuan permohonan sidang topik sebelum permohonan Tugas Akhir disetujui";
}

else if($tugas_akhir->status_tugas_akhir==5){
	echo "<b>Harap mengajukan permohonan Tugas Akhir terlebih dahulu!</b>";
	echo "<br>";
	echo " Anda tidak diperkenankan melakukan pengajuan permohonan sidang topik sebelum mengambil Tugas Akhir";
}

else if($tugas_akhir->status_tugas_akhir==4){
	echo "<b>Topik Anda tidak disetujui, harap mengulang pengambilan topik kembali!</b>";
	echo "<br>";
	echo " Anda tidak diperkenankan melakukan pengajuan permohonan sidang topik sebelum topik anda disetujui";
}

else if($tugas_akhir->status_tugas_akhir==3){
	echo "<b>Topik Anda masih dalam status menunggu persetujuan!</b>";
	echo "<br>";
	echo " Anda tidak diperkenankan melakukan pengajuan permohonan sidang topik sebelum topik anda disetujui";
}

else if($tugas_akhir->status_tugas_akhir==2){
	echo "<b>Permohonan Tugas Akhir Anda ditolak!</b>";
	echo "<br>";
	echo " Anda tidak diperkenankan melakukan pengajuan permohonan sidang topik sebelum mengajukan permohonan tugas akhir";
}

else if($tugas_akhir->status_tugas_akhir==2){
	echo "<b>Permohonan Tugas Akhir Anda ditolak!</b>";
	echo "<br>";
	echo " Anda tidak diperkenankan melakukan pengajuan permohonan sidang topik sebelum mengajukan permohonan tugas akhir";
}
?>

@endsection
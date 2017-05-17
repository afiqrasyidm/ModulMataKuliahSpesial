@extends('layouts.layout_failed')

@section('title','Pengajuan Sidang TA')

@section('titleMainContent')
Anda Belum Dapat Melakukan Pengajuan Sidang

@endsection

@section('contentMainContent')



<?php
if($tugas_akhir == null){
	
	echo "<b>Harap mengambil Tugas Akhir terlebih dahulu!</b>";
	echo " Anda tidak dapat melakukan pengajuan permohonan sidang TA sebelum mengambil tugas akhir";
	echo "<br><br>";
 	echo "<p>Silahkan mengambil tugas akhir";
 	echo "<a href='";
 	echo route('mahasiswa/pengajuan-permohonan-ta');
 	echo "'/>";
 	echo " disini";
 	echo "</a></p>";
}

else if($tugas_akhir->status_tugas_akhir==10){
	echo "<b>Harap menyelesaikan Bimbingan Tugas Akhir terlebih dahulu!</b>";
	echo " Anda tidak diperkenankan melakukan pengajuan permohonan sidang TA tugas akhir sebelum menyelesaikan bimbingan tugas akhir";
}

else if($tugas_akhir->status_tugas_akhir==9){
	echo "<b>Harap menunggu persetujuan Dosen Pembimbing terlebih dahulu!</b>";
	echo " Anda tidak diperkenankan melakukan pengajuan permohonan sidang TA tugas akhir sebelum mendapatkan Dosen Pembimbing TA";
}

else if($tugas_akhir->status_tugas_akhir==8){
	echo "<b>Harap memilih Dosen Pembimbing TA terlebih dahulu!</b>";
	echo " Anda tidak diperkenankan melakukan pengajuan permohonan sidang TA tugas akhir sebelum mendapatkan Dosen Pembimbing TA";
}

else if($tugas_akhir->status_tugas_akhir==7){
	echo "<b>Harap menunggu verifikasi Tugas Akhir Anda oleh SBA!</b>";
	echo " Anda tidak diperkenankan melakukan pengajuan permohonan sidang TA sebelum pengajuan Tugas Akhir Anda diverifikasi oleh SBA";
}

else if($tugas_akhir->status_tugas_akhir==6){
	echo "<b>Harap menunggu verifikasi Tugas Akhir Anda oleh PA!</b>";
	echo " Anda tidak diperkenankan melakukan pengajuan permohonan sidang TA sebelum pengajuan Tugas Akhir Anda diverifikasi oleh PA";
}

else if($tugas_akhir->status_tugas_akhir==5){
	echo "<b>Harap mengambil Tugas Akhir terlebih dahulu!</b>";
	echo " Anda tidak dapat melakukan pengajuan permohonan sidang TA sebelum mengambil tugas akhir";
	echo "<br><br>";
 	echo "<p>Silahkan mengambil tugas akhir";
 	echo "<a href='";
 	echo route('mahasiswa/pengajuan-permohonan-ta');
 	echo "'/>";
 	echo " disini";
 	echo "</a></p>";
}

else if($tugas_akhir->status_tugas_akhir==4){
	echo "<b>Harap mengambil Topik kembali karena Topik Anda sebelumnya tidak disetujui</b>";
	echo "<br>";
	echo " Anda tidak diperkenankan melakukan pengajuan permohonan sidang TA sebelum topik Anda disetujui";
}

else if($tugas_akhir->status_tugas_akhir==3){
	echo "<b>Topik Anda masih dalam status menunggu persetujuan!</b>";
	echo "<br>";
	echo " Anda tidak diperkenankan melakukan pengajuan permohonan sidang TA sebelum topik anda disetujui";
}

else{
	echo "<b>Permohonan Tugas Akhir Anda ditolak!</b>";
	echo "<br>";
	echo " Anda tidak diperkenankan melakukan pengajuan permohonan sidang TA sebelum mengambil Tugas Akhir";
}
?>

@endsection
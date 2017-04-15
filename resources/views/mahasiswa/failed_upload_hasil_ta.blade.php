@extends('layouts.layout_failed')

@section('title','Upload Dokumen TA')

@section('titleMainContent')
Anda Belum Dapat Mengupload Dokumen TA

@endsection

@section('contentMainContent')


          
<?php


if($tugas_akhir == null){
	echo "<b>Harap ambil tugas akhir terlebih dahulu!</b>";
	echo " Anda tidak dapat melakukan pengajuan permohonan sidang tugas akhir sebelum mengambil tugas akhir";
	echo "<br><br>";
 	echo "<p>Silahkan mengambil tugas akhir";
 	echo "<a href='";
 	echo route('mahasiswa/pengajuan-permohonan-ta');
 	echo "'/>";
 	echo " disini";
 	echo "</a></p>";
}


else if($tugas_akhir->status_tugas_akhir!=6){
	echo "<b>Harap menyelesaikan proses pembuatan tugas akhir terlebih dahulu!</b>";
	echo " Anda tidak diperkenankan melakukan upload dokumen sebelum menyelesaikan bimbingan tugas akhir dan diizinkan sidang oleh dosen pembimbing";
}

else if($pengajuan_sidang == null){
	echo "<b>Harap melakukan pengajuan sidang terlebih dahulu!</b>";
	echo " Anda tidak dapat melakukan upload dokumen sebelum melakukan pengajuan sidang tugas akhir";
	echo "<br><br>";
 	echo "<p>Silahkan melakukan pengajuan sidang tugas akhir";
 	echo "<a href='";
 	echo route('mahasiswa/pengajuan-sidang-ta');
 	echo "'/>";
 	echo " disini";
 	echo "</a></p>";
}


else if($pengajuan_sidang->status!=2){
	echo "<b>Harap menunggu persetujuan sidang! </b>";
	echo " Anda tidak diperkenankan melakukan upload dokumen sebelum diizinkan sidang oleh dosen pembimbing";
}
?>






@endsection
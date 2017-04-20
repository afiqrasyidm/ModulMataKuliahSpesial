@extends('layouts.layout_failed')

@section('title','Upload Dokumen TA')

@section('titleMainContent')
Anda Belum Dapat Mengupload Dokumen TA

@endsection

@section('contentMainContent')

 
          
<?php


if($status_ta == null){
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


else if($status_ta->id_referensi_status_ta!=11){
	echo "<b>Harap menyelesaikan proses pembuatan tugas akhir terlebih dahulu!</b>";
	echo " Anda tidak diperkenankan melakukan upload dokumen saat tugas akhir anda dalam status '";
	echo $status_ta->status;
	echo "'. Sebagai panduan, lihat alur pengerjaan tugas akhir pada halaman utama.";
}

else if($status_sidang == null){
	echo "<b>Harap Melakukan Pengajuan Sidang Terlebih Dahulu!</b>";
	echo " Anda tidak dapat melakukan upload dokumen sebelum melakukan pengajuan sidang tugas akhir";
	echo "<br><br>";
 	echo "<p>Silahkan melakukan pengajuan sidang tugas akhir";
 	echo "<a href='";
 	echo route('mahasiswa/pengajuan-sidang-ta');
 	echo "'/>";
 	echo " disini";
 	echo "</a></p>";
}


else if($status_sidang->id_referensi_status_sidang!=2){

	echo "<b>Harap " ;
	echo $status_sidang->status;
	echo "!</b>";
	echo " Anda tidak diperkenankan melakukan upload dokumen sebelum pengajuan sidang selesai diverifikasi. Sebagai panduan, lihat alur pengerjaan tugas akhir pada halaman utama.";
}

else{
	echo $status_sidang;
	echo $status_ta;
}
?>






@endsection
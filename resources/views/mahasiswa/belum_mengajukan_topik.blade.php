@extends('layouts.layout_failed')

@section('title','Pengajuan Topik')

@section('titleMainContent')
Anda Belum Dapat Melakukan Pengajuan TA

@endsection

@section('contentMainContent')

			<b>Harap memilih topik terlebih dahulu!</b><br>
			Anda tidak diperkenankan melakukan pengisian formulir pengajuan tugas akhir sebelum memilih topik atau pemilihan topik belum diverifikasi
			<br><br>
			<p>Topik tugas akhir dapat dipilih <a href="{{route('mahasiswa/pengajuan-topik')}}">disini</a></p>
	
@endsection
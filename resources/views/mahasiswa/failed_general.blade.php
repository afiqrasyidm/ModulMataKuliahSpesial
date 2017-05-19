@extends('layouts.layout_failed')

@section('title','belum dapat melakukan proses')

@section('titleMainContent')
Anda Belum Dapat {{$action}}

@endsection

@section('contentMainContent')
@php
	$arrStatus = ['Permohonan TA Ditolak oleh Dosen Pembimbing', 'Permohonan TA Ditolak oleh PA', 'Menunggu Persetujuan Topik', 'Pengambilan Topik Tidak Disetujui', 'Pengambilan Topik Disetujui', 'Menunggu Persetujuan Permohonan TA oleh PA', 'Menunggu Verifikasi Permohonan TA oleh SBA', 'Menunggu Pengambilan Dosen Pembimbing', 'Menunggu Persetujuan Dosen Pembimbing', 'Mahasiswa Melakukan Bimbingan TA', 'Dosen Pembimbing Mengizinkan Sidang', 'Sidang Telah Dilakukan'];
@endphp

@if(isset($tugas_akhir))
	Anda belum bisa mengakses halaman ini karena status tugas akhir anda <strong>"{{$arrStatus[$tugas_akhir->status_tugas_akhir-1]}}"</strong>
	<br>
	Halaman ini dapat diakses setelah status tugas akhir anda <strong>"{{$arrStatus[$minimal_status-1]}}"</strong>
	<br>
	Informasi mengenai status dan alur tugas akhir dapat dilihat di <a href="{{route('homepage/mahasiswa')}}">disini</a>
@else
	Anda belum bisa mengakses halaman ini karena belum mengambil permohonan tugas akhir
	<br>
	Informasi mengenai status dan alur tugas akhir dapat dilihat di <a href="{{route('homepage/mahasiswa')}}">disini</a>
@endif

@endsection
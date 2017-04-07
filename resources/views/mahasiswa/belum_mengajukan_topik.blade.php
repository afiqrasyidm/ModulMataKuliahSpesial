@extends('layouts.layout_mahasiswa')

@section('title','Pengumuman')

@section('mainContent')
	<div class="col-md-3">
	</div>
	<div  class="col-md-9">
		<div style="margin-top:225px;">
			<h2 style="color:red;">Harap memilih topik terlebih dahulu!</h2>
			<p>Anda tidak diperkenankan melakukan pengisian formulir pengajuan tugas akhir sebelum memilih topik</p>
			<p>Topik tugas akhir dapat dipilih <a href="{{route('mahasiswa/pengajuan-topik')}}">disini</a></p>
		</div>
	</div>
@endsection
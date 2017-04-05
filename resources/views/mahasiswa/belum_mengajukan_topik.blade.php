@extends('layouts.layout_mahasiswa')

@section('title','Pengumuman')

@section('mainContent')
	<div class="col-md-3">
	</div>
	<div  class="col-md-9">
		<div style="margin-top:225px;">
			<h2>Harap memilih topik terlebih dahulu!</h2>
			<p>Anda tidak diperkenankan melakukan pengisian form sebelum memilih topik tugas akhir</p>
			<p>Topik tugas akhir dapat dipilih <a href="{{route('mahasiswa/pengajuan-topik-ta')}}">disini</a></p>
		</div>
	</div>
@endsection
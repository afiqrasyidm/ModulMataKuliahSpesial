@extends('layouts.layout_dosen_pa')

@section('title','Verifikasi Permohonan TA')

@section('mainContent')

<section class="content">
	<br><br>
	<div class="center-form">
		<div style="width: 100%;"><a href="{{route('dosen/PA/verifikasi-permohonan-ta')}}">Kembali ke: Daftar Tugas Akhir</a></div>
		<br>
		<div class=".col-md-11">
			<div class="box box-primary">
				<div class="box-header with-border">
			        <center><h1 class="header-title">Detail Pengajuan Permohonan TA</h1></center>
				</div><!-- /.box-header -->
					
			    <div class="box-body">
					<br/>
					<table class="table table-bordered">
					    <tbody>
							<tr>
					          <th bgcolor="#86b7e3">Nama</th>
					          <td bgcolor="#c0c5cc">{{ $tugas_akhir->nama_mahasiswa }}</td>
					        </tr>
					        <tr>
					          <th bgcolor="#86b7e3">NPM</th>
					          <td bgcolor="#c0c5cc">{{ $tugas_akhir->NPM }}</td>
					        </tr>
					       	<tr>
					          <th bgcolor="#86b7e3">Jurusan</th>
					          <td bgcolor="#c0c5cc">{{ $tugas_akhir->nama_prodi }}</td>
					        </tr>
					        <tr>
					          <th bgcolor="#86b7e3">Matakuliah</th>
					          <td bgcolor="#c0c5cc">
					          	@if ($tugas_akhir->jenjang=='S1')
					          		Skripsi
					          	@elseif($tugas_akhir->jenjang=='S2')
					          		Tesis
					          	@elseif($tugas_akhir->jenjang=='S3')
					          		Disertasi
					            @endif</td>
					        </tr>
					        <tr>
					          <th bgcolor="#86b7e3">Topik</th>
					          <td bgcolor="#c0c5cc">{{$tugas_akhir->topik_ta }}</td>
					        </tr>
					        <tr>
					          <th bgcolor="#86b7e3">Judul</th>
					          <td bgcolor="#c0c5cc">{{$tugas_akhir->judul_ta}}</td>
					        </tr>
					        <tr>
					          <th bgcolor="#86b7e3">Deskripsi</th>
					          <td bgcolor="#c0c5cc">{{$tugas_akhir->deskripsi}}</td>
					        </tr>
					        <tr>
					          <th bgcolor="#86b7e3">Status</th>
					          <td bgcolor="#c0c5cc"><strong>{{$tugas_akhir->status}}</strong></td>
					        </tr>
					    </tbody>
					</table>


					@if($tugas_akhir->status_tugas_akhir==6 || $tugas_akhir->status_tugas_akhir==2)
						@if($tugas_akhir->status_tugas_akhir==6)
							<div class="box-footer">
								<br>
								<center>
									<form method="post" action="">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<button class="btn btn-primary" type="submit" name="action" value="Setujui">Setujui</button>
										<button class="btn btn-danger" type="submit" name="action" value="Tolak">Tolak</button>
									</form>
								</center>
							</div>
						@endif

						<hr>
						<br>
						<div>
							<table>
								<tr>
									<form method="post" action="">
										<div><div class="col-md-1">
										</div>
										<div class="col-md-2">
											<strong>Komentar</strong>
										</div>
										<div class="col-md-7" style=" margin-left: 25px;">
				                    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<textarea class="textarea" style="width:100%; height: 100px; line-height: 18px; border: 2px solid #dddddd;" name="komentar"></textarea>
											<br>
										</div>
										<div class="col-md-1"><button class="btn btn-primary" type="submit" name="action" value="Komentar">Kirim</button></div>
									</form>
								</tr>

								<tr><td><br><hr></td></tr>
								<tr><td><br></td></tr>
							</table>
						</div>
						<br>
					@endif

					@if(count($komentars)>0)
						<br>
						<hr>
						<br>
						<div class="col-md-1"></div>
						<div class="col-md-11"><strong>Daftar Komentar:</strong></div>
						<br>
						<br>
						<table style="width:100%;">
							@foreach($komentars as $komentar)
								@if($komentar->role=='dosen')
								<tr>
									<td>
										<div class="col-md-1">
										</div>
										<div class="col-md-2">
											<strong>{{$komentar->nama_dosen}}</strong>
											<br>
											{{$komentar->tugas_akhir_created_at}}
										</div>
										<div class="col-md-8">
											<div class="box box-primary" style="background-color: #e8e8e8; min-height: 60px; padding:5px; margin-left: 25px; border-top-color: #222d32;">
												{{$komentar->komentar}}
											</div>
										</div>
										<div class="col-md-1"></div>
									</td>
								</tr>
								@else
								<tr>
									<td>
										<div class="col-md-1"></div>
										<div class="col-md-2">
											<strong>{{$komentar->nama_mahasiswa}}</strong>
											<br>
											{{$komentar->tugas_akhir_created_at}}
										</div>
										<div class="col-md-8">
											<div class="box box-primary" style="background-color: #e8e8e8; min-height: 60px; padding:5px;">
												{{$komentar->komentar}}
											</div>
										</div>
										<div class="col-md-1"></div>
									</td>
								</tr>
								@endif
							@endforeach
						</table>
					@endif		
		        </div><!-- /.box-body -->
		    </div><!-- /.box -->
		</div>
	</div><!--/.col (right) -->
</section>
@endsection
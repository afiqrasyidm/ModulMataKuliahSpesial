@extends('layouts.layout_dosen_pa')

@section('title','Verifikasi Permohonan TA')

@section('mainContent')

<section class="content">
	<br><br>
	<div class="center-form">
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
					    </tbody>
					</table>

					<div class="box-footer">
						<br>
						<form method="post" action="">
                    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<label class="col-sm-2 control-label">Komentar</label>
							<textarea class="textarea" style="width:100%; height: 200px; line-height: 18px; border: 2px solid #dddddd;" name="feedback"></textarea>
							<br>
							<br>
							<div class="col-md-10"></div>
							<div class="col-md-2">
								<button class="btn btn-primary" type="submit" name="action" value="Setujui">Setujui</button>
								<button class="btn btn-danger" type="submit" name="action" value="Tolak">Tolak</button>
							</div>
						</form>
					</div>		
		        </div><!-- /.box-body -->
		    </div><!-- /.box -->
		</div>
	</div><!--/.col (right) -->
</section>
@endsection
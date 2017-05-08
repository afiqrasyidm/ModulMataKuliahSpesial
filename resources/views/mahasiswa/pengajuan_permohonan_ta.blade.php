@extends('layouts.layout_mahasiswa')

@section('title','Pengajuan Permohonan TA')

@section('mainContent')

<section class="content">
	<br><br>
	<div class="center-form">
		<div class=".col-md-11">
		@php
		if (isset($_SESSION["pengajuan_permohonan_ta_berhasil"])) {
			echo 	"<div class='alert alert-success'> 
                   	<i class='icon fa fa-check'></i>Pengajuan permohonan TA anda berhasil
              		</div>";	
			unset($_SESSION["pengajuan_permohonan_ta_berhasil"]);
		}

		if (isset($_SESSION["perubahan_pengajuan_permohonan_ta_berhasil"])) {
			echo 	"<div class='alert alert-success'> 
                   	<i class='icon fa fa-check'></i>Pengajuan permohonan TA anda berhasil diubah
              		</div>";	
			unset($_SESSION["perubahan_pengajuan_permohonan_ta_berhasil"]);
		}
		@endphp
			<div class="box box-primary">  
				<div class="box-header with-border">
		        	<center><h1 class="header-title">Detail Pengajuan Permohonan TA</h1></center>
				</div><!-- /.box-header -->  
				<div class="box-body">
					<br/>
					@if($tugas_akhir->status_tugas_akhir>=6 || $tugas_akhir->status_tugas_akhir==2)
						<table class="table table-bordered">
						    <tbody>
								<tr>
						          <th bgcolor="#86b7e3">Nama</th>
						          <td bgcolor="#c0c5cc"><?php
					                  echo $_SESSION["user_login"]->name;
					                ?></td>
						        </tr>
						        <tr>
						          <th bgcolor="#86b7e3">NPM</th>
						          <td bgcolor="#c0c5cc"><?php
					                  echo $_SESSION["user_login"]->npm;
					                ?></td>
						        </tr>
						       	<tr>
						          <th bgcolor="#86b7e3">Jurusan</th>
						          <td bgcolor="#c0c5cc"><?php
					                  echo $_SESSION["user_login"]->study_program;
					                ?></td>
						        </tr>
						        <tr>
						          <th bgcolor="#86b7e3">Matakuliah</th>
						          <td bgcolor="#c0c5cc"><?php
							      		$jenjang = $_SESSION["mahasiswa"]->jenjang;
							      		if($jenjang=='S1') {
							      			echo 'Skripsi';
							      		} else if ($jenjang=='S2') {
							      			echo 'Tesis';
							      		} else if($jenjang=='S3') {
							      			echo 'Disertasi';
							      		}
						            ?></td>
						        </tr>
						        <tr>
						          <th bgcolor="#86b7e3">Topik</th>
						          <td bgcolor="#c0c5cc">{{ $topik }}</td>
						        </tr>
						        <tr>
						          <th bgcolor="#86b7e3">Judul</th>
						          <td bgcolor="#c0c5cc">{{$tugas_akhir->judul_ta}}</td>
						        </tr>
						        <tr>
						          <th bgcolor="#86b7e3">Status</th>
						          <td bgcolor="#c0c5cc"><strong>{{$tugas_akhir->status}}</strong></td>
						        </tr>
						    </tbody>
						</table>
						
						@if($tugas_akhir->status_tugas_akhir==6 || $tugas_akhir->status_tugas_akhir==2)
							<div class="box-footer">
								@if($tugas_akhir->status_tugas_akhir==2)
									<br>
									<center><a style="color:red;">Permohonan TA anda ditolak!
									<br>
									Harap ubah permohonan TA anda!</a></center>
								@endif
								<br>
								<center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Ubah</button></center>
							</div>

							<!-- Modal -->
							<div class="modal fade" id="myModal" role="dialog"">
								<div class="modal-dialog" style="margin-top: 15%;">
								  	<!-- Modal content-->
									<center>
									  	<div class="modal-content">
											<div class="modal-header">
										  		<button type="button" class="close" data-dismiss="modal">&times;</button>
										  		<h4 class="modal-title">Anda yakin ingin mengubah permohonan TA?</h4>
											</div>
											<div>
												<a href="{{route('mahasiswa/pengajuan-permohonan-ta-ubah')}}"   >
													<button  class="btn btn-primary" >Ya</button>
												</a>
												<button  class="btn btn-danger"  class="close" data-dismiss="modal">batal</button>
												<br>
												<br>
											</div>
									  	</div>
								  	</center>
								</div>
							</div>

							<hr>
							<br>
							<div>
								<table>
									<tr>
										<form method="post" action="{{route('mahasiswa/pengajuan-permohonan-ta-submit-komentar')}}">
											<div><div class="col-md-1">
											</div>
											<div class="col-md-2">
												<strong>Kirim Pesan ke PA</strong>
											</div>
											<div class="col-md-7" style=" margin-left: 25px;">
					                    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
												<textarea class="textarea" style="width:100%; height: 100px; line-height: 18px; border: 2px solid #dddddd;" name="komentar"></textarea>
												<br>
											</div>
											<div class="col-md-1"><button class="btn btn-primary" type="submit">Kirim</button></div>
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
								<div class="col-md-11"><strong>Pesan:</strong></div>
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
													{{$komentar->nama_dosen}}
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
										@else
										<tr>
											<td>
												<div class="col-md-1"></div>
												<div class="col-md-2">
													{{$komentar->nama_mahasiswa}}
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
										@endif
									@endforeach
								</table>
							@endif
					@else
						<form class="form-horizontal" method="post" action="">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							  <div class="form-group">
							    <label class="control-label col-sm-3">Nama :</label>
							    <div class="col-sm-6">
							      <input class="form-control" value="<?php
					                  echo $_SESSION["user_login"]->name;
					                ?>" disabled>
							    </div>
							  </div>
							  <div class="form-group">
							    <label class="control-label col-sm-3">NPM :</label>
							    <div class="col-sm-6">
							      <input class="form-control" value="<?php
					                  echo $_SESSION["user_login"]->npm;
					                ?>" disabled>
							    </div>
							  </div>
							  <div class="form-group">
							    <label class="control-label col-sm-3">Jurusan :</label>
							    <div class="col-sm-6">
							      <input class="form-control" value="<?php
					                  echo $_SESSION["user_login"]->study_program;
					                ?>" disabled>
							    </div>
							  </div>

							  <br/>

							  <div class="form-group">
							    <label class="control-label col-sm-3">Mata Kuliah :</label>
							    <div class="col-sm-6">
							      	<input class="form-control" value="<?php
							      		$jenjang = $_SESSION["mahasiswa"]->jenjang;
							      		if($jenjang=='S1') {
							      			echo 'Skripsi';
							      		} else if ($jenjang=='S2') {
							      			echo 'Tesis';
							      		} else if($jenjang=='S3') {
							      			echo 'Disertasi';
							      		}
						              
						            ?>" disabled>
							    </div>
							  </div>

							  <br/>

							  <div class="form-group">
							    <label class="control-label col-sm-3">Topik :</label>
							    <div class="col-sm-6">
							    	<?php echo $errors->first('username') ?>
							      	<input class="form-control" value="{{ $topik }}" disabled>
							    </div>
							  </div>

							  <div class="form-group">
							    <label class="control-label col-sm-3">Judul :</label>
							    <div class="col-sm-6">
							      <input class="form-control" name="judul_ta" placeholder="Masukan Judul">
							    </div>
							  </div>

							  <div class="box-footer">
							  <center><button class="btn btn-primary" type="submit">Ajukan TA</button></center>
							  </div>
						</form>
					@endif	
		        </div><!-- /.box-body -->
		    </div><!-- /.box -->
		</div>
	</div><!--/.col (right) -->
</section>
@endsection
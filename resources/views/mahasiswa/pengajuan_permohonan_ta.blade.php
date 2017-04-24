@extends('layouts.layout_mahasiswa')

@section('title','Pengajuan Permohonan TA')

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
						          <td bgcolor="#c0c5cc">{{$tugas_akhir->status}}</td>
						        </tr>
						    </tbody>
						</table>
						
						@if($tugas_akhir->status_tugas_akhir==6 || $tugas_akhir->status_tugas_akhir==2)
							<div class="box-footer">
								<br>
								<center><button class="btn btn-primary">Ubah</button></center>
							</div>

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
												<textarea class="textarea" style="width:100%; height: 100px; line-height: 18px; border: 2px solid #dddddd;" name="feedback"></textarea>
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

							<br>
							<hr>
							<br>
							<div class="col-md-1"></div>
							<div class="col-md-11"><strong>Daftar Komentar:</strong></div>
							<br>
							<br>
							<table>
								<tr>
									<td>
										<div><div class="col-md-1">
										</div>
										<div class="col-md-2">
											{{$tugas_akhir->nama_dosen}}
											<br>
											8 Maret 2017
										</div>
										<div class="col-md-8">
											<div class="box box-primary" style="background-color: #e8e8e8; min-height: 60px; padding:5px;">
												Lorem Ipsum Feedback Lorem Ipsum FeedbackLorem Ipsum FeedbackLoremLorem Ipsum Feedback Lorem Ipsum FeedbackLorem Ipsum FeedbackLorem Ipsum 
											</div>
										</div>
										<div class="col-md-1"></div>
									</td>
								</tr>
								
								<tr>
									<td>
										<div class="col-md-1"></div>
										<div class="col-md-2">
											{{$_SESSION["user_login"]->name}}
											<br>
											8 Maret 2017
										</div>
										<div class="col-md-8">
											<div class="box box-primary" style="background-color: #e8e8e8; min-height: 60px; padding:5px; margin-left: 25px; border-top-color: #222d32;">
												Lorem Ipsum Feedback Lorem Ipsum FeedbackLorem Ipsum FeedbackLoremLorem Ipsum Feedback Lorem Ipsum FeedbackLorem Ipsum FeedbackLorem Ipsum FeedbackLorem Ipsum FeedbackLorem Ipsum FeedbackLoremLorem Lorem Ipsum Feedback Lorem Ipsum Feedback Lorem Ipsum FeedbackLorem Ipsum Feedback Lorem
											</div>
										</div>
									</td>
								</tr>

								<tr>
									<td>
										<div><div class="col-md-1">
										</div>
										<div class="col-md-2">
											{{$tugas_akhir->nama_dosen}}
											<br>
											8 Maret 2017
										</div>
										<div class="col-md-8">
											<div class="box box-primary" style="background-color: #e8e8e8; min-height: 60px; padding:5px;">
												Lorem Ipsum Feedback Lorem Ipsum FeedbackLorem Ipsum FeedbackLoremLorem Ipsum Feedback Lorem Ipsum FeedbackLorem Ipsum FeedbackLorem Ipsum 
												backLoremLorem Ipsum Feedback Lorem Ipsum FeedbackLorem Ipsum FeedbackLorem Ipsum
											</div>
										</div>
										<div class="col-md-1"></div>
									</td>
								</tr>
							</table>
						

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
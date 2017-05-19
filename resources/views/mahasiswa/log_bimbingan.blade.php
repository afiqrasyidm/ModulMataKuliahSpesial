@extends('layouts.layout_mahasiswa')

@section('title','Log Bimbingan')

@section('mainContent')


<section class="content">
	<br><br>
	<div class="center-form">
		<div class=".col-md-11">
		@php
		if (isset($_SESSION["buat_log_bimbingan_berhasil"])) {
			echo 	"<div class='alert alert-success'> 
                   	<i class='icon fa fa-check'></i>Pembuatan log bimbingan berhasil
              		</div>";	
			unset($_SESSION["buat_log_bimbingan_berhasil"]);
		}
		@endphp
			<div class="box box-primary">  
				@if($tugas_akhir->status_tugas_akhir==10)
				<div class="box-header with-border">
		        	<center>
		        	<h1 class="header-title">
					
		        	Submit Log Bimbingan
		        	</h1></center>
				</div><!-- /.box-header -->
				@endif
				
				<div class="box-body">
					<br/>
					@if($tugas_akhir->status_tugas_akhir==10)
					<form class="form-horizontal" method="post" action="">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						  <div class="form-group">
						    <label class="control-label col-sm-3">Waktu Bimbingan : </label>
						    <div class="col-sm-6">
						      <div class="input-group date" data-provide="datepicker" data-date-autoclose="true"  data-date-format="yyyy-mm-dd">
								    <input type="text" class="form-control" name="tanggal">
								    <div class="input-group-addon">
								        <i class="fa fa-calendar"></i>
								    </div>
								</div>
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="control-label col-sm-3"></label>
						    <div class="col-sm-3">
						    	<strong>Mulai</strong>
						      <div class="input-group clockpicker" id="waktu_mulai" data-autoclose="true">
								    <input type="text" class="form-control" name="waktu_mulai">
								    <div class="input-group-addon">
								        <i class="fa fa-clock-o"></i>
								    </div>
								</div>
								<script type="text/javascript">
								jQuery(function($) {
							        $('#waktu_mulai').clockpicker();
							    });
								</script>
						    </div>
						    <div class="col-sm-3">
						   		<strong><strong>Selesai</strong></strong>
						      <div class="input-group clockpicker" id="waktu_selesai" data-autoclose="true">
								    <input type="text" class="form-control" name="waktu_selesai">
								    <div class="input-group-addon">
								        <i class="fa fa-clock-o"></i>
								    </div>
								</div>
								<script type="text/javascript">
								jQuery(function($) {
							        $('#waktu_selesai').clockpicker();
							    });
								</script>
						    </div>
						  </div>
						  <div class="form-group"><br></div>
						  <div class="form-group">
						    <label class="control-label col-sm-3">Deskripsi bimbingan : </label>
						    <div class="col-sm-6">
						      <textarea class="form-control" rows="5" name="deskripsi_log"></textarea>
						    </div>
						  </div>
							
						<div class="box-footer">
						  <br>
						  <center><button class="btn btn-primary" type="submit">Submit Log</button></center>
						</div>
					</form>
					@endif
					<hr>
					<br>
					<label>Daftar Log Bimbingan:</label>
					<br><br>
					<table class="table table-striped">
					    <thead>
					        <tr>
					        <th>Waktu Mulai</th>
					        <th>Waktu Selesai</th>
					        <th>Deskripsi</th>
					        <th>Status</th>
					      </tr>
					    </thead>
					    <tbody> 
					    	@foreach($log_bimbingan as $log)
					    		<tr>
					    			<td>{{$log->waktu_mulai}}</td>
					    			<td>{{$log->waktu_selesai}}</td>
					    			<td>{{$log->keterangan}}</td>
					    			<td>
					    				@if($log->status_bimbingan==0)
					    					belum diverifikasi
					    				@else
					    					<label style="color:green;">telah diverifikasi</label>
					    				@endif
					    			</td>
					    		</tr>
					    	@endforeach
					    </tbody>
					</table>
	        	</div><!-- /.box-body -->
		    </div><!-- /.box -->
		</div>
	</div><!--/.col (right) -->
</section>

@endsection

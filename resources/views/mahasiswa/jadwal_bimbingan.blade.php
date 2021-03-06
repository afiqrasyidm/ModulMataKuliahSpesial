@extends('layouts.layout_mahasiswa')

@section('title','Jadwal Bimbingan')

@section('mainContent')

<section class="content">
	<br><br>
	<div class="center-form">
		<div class=".col-md-11">
		@php
		if (isset($_SESSION["atur_jadwal_bimbingan_berhasil"])) {
			echo 	"<div class='alert alert-success'> 
                   	<i class='icon fa fa-check'></i>Pengaturan jadwal bimbingan berhasil
              		</div>";	
			unset($_SESSION["atur_jadwal_bimbingan_berhasil"]);
		}

		if (isset($_SESSION["ubah_jadwal_bimbingan_berhasil"])) {
			echo 	"<div class='alert alert-success'> 
                   	<i class='icon fa fa-check'></i>Pengaturan jadwal bimbingan berhasil
              		</div>";	
			unset($_SESSION["ubah_jadwal_bimbingan_berhasil"]);
		}
		@endphp
			<div class="box box-primary">  
				<div class="box-header with-border">
		        	<center><h1 class="header-title">Jadwal Bimbingan</h1></center>
					</div><!-- /.box-header -->
					@php
						$idx = 0;
					@endphp
					<div class="box-body">
						@if(isset($jadwal_dosen_taken)!=1)
							<div class="col-md-2"></div>
							<div class="col-md-8">
								<form action="" method="post">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">

									@if(count($jadwal_dosen)>0)
									<table class="table-striped" style="width:100%; table-layout: fixed">
										<tr>
											<th style="width:10%;">No.</th>
											<th>Hari</th>
											<th>Waktu</th>
											<th style="width:10%;">Pilih</th>
										</tr>
										@foreach($jadwal_dosen as $jadwal)
										@php
											$idx += 1;
										@endphp
										<tr>
											<td style="width:10%;">{{$idx}}</td>
											<td>{{$jadwal->nama_hari}}</td>
											<td>{{explode(":",$jadwal->waktu_mulai)[0]}}:{{explode(":",$jadwal->waktu_mulai)[1]}} - {{explode(":",($jadwal->waktu_mulai+'01:00:00'))[0]}}:{{explode(":",$jadwal->waktu_mulai)[1]}}</td>
											<td><input type="checkbox" name="pilih_jadwal[]" value="{{$jadwal->id_jadwal_dosen}}"></td>
										</tr>
									@endforeach
									</table>
									<br>
									*Pilih jadwal bimbingan anda. <br>
									Apabila tidak ada/belum ada jadwal yang sesuai, harap hubungi dosen pembimbing anda <br><br>
									<center><button class="btn btn-primary" type="submit">Simpan</button></center>
									@else
										<br>
										<center>Maaf, dosen pembimbing anda belum melakukan pengisian jadwal bimbingan</center><br>
									@endif
								</form>
							</div>
							<div class="col-md-2"></div>
						@else
							<!-- <div class="col-md-3"></div>
							<div class="col-md-6"><br>
								<table class="table-striped" style="width:100%; table-layout: fixed">
									<tr>
										<th style="width:10%;">No.</th>
										<th><center>Hari</center></th>
										<th><center>Waktu</center></th>
									</tr>
									@foreach($jadwal_dosen_taken as $jadwal)
									@php
										$idx += 1;
									@endphp
									<tr>
										<td style="width:10%;">{{$idx}}</td>
										<td><center>{{$jadwal->nama_hari}}</center></td>
										<td><center>{{explode(":",$jadwal->waktu_mulai)[0]}}:{{explode(":",$jadwal->waktu_mulai)[1]}} - {{explode(":",($jadwal->waktu_mulai+'01:00:00'))[0]}}:{{explode(":",$jadwal->waktu_mulai)[1]}}</center></td>
									</tr>
								@endforeach
								</table>
							</div>
							<div class="col-md-3"></div> -->

							@php
				    		$myArray = [];

				    		for($i = 0; $i <= 6; $i++) {
				    			$myArray[$i] = [];
				    			for($j = 0; $j <= 12; $j++) {
				    				$myArray[$i][$j] = 0;
				    			}
				    		}

				    		for($i = 0; $i < count($jadwal_dosen_taken); $i++) {
				    			$hari = $jadwal_dosen_taken[$i]->id_hari;
				    			$jam = $jadwal_dosen_taken[$i]->waktu_mulai;
								$myArray[$hari-1][(int)explode(':', $jam-8)[0]] = 1;
							}		    	

					    	@endphp
					    	<div class="col-md-12">
					    	<center><strong>Dosen Pembimbing: </strong>{{$nama_dosen}}</center>
					    		<div class="col-md-6">
					    			<table>
					    				<tr>
					    					<th style="background-color: #3c8dbc; min-width: 30px;"></th>

					    					<td style="padding-left: 10px;">: Jadwal bimbingan</td>
					    				</tr>
					    				<tr>
					    					<td><br></td>
					    				</tr>
					    			</table>
					    		</div>
					    	</div>
					    	<br>
					    	<br>
				    		<br>
				    		<div class="col-md-12" style="width:100%;">
					    		<table class="table-striped" style="width:100%; table-layout: fixed">
						    		<tr style="height:30px;">
						    			<th style="width:14%;""></th>
							    		<th>Senin</th>
							    		<th>Selasa</th>
							    		<th>Rabu</th>
							    		<th>Kamis</th>
							    		<th>Jumat</th>
							    		<th>Sabtu</th>
							    	</tr>
							    	@for($i = 8; $i <= 20; $i++)
							    	<tr style="height:30px;">
							    		<th style="">{{$i<10 ? '0'.$i: $i}}:00-{{$i+1<10 ? '0'.($i+1): ($i+1)}}:00</th>
							    		@for($j = 0; $j <= 5; $j++)
							    			@if($myArray[$j][$i-8]==1)
							    					<td style="background-color: #3c8dbc; color:#ffffff"><center>Bimbingan</center></td>
							    			@else
							    				<td></td>
							    			@endif
							    		@endfor
							    	</tr>
							    	@endfor
						    	</table>
						    	<br>
						    	<!-- div class="col-md-12">
						    		<center><button class="btn btn-primary" type="submit">Ubah Jadwal</button></center>
						    	</div-->
					    	</div>
						@endif
					</div>
					<br>
		        </div><!-- /.box-body -->
		    </div><!-- /.box -->
		</div>
	</div><!--/.col (right) -->
</section>
@endsection
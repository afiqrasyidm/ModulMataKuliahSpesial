@extends('layouts.layout_mahasiswa')

@section('title','Jadwal Bimingan')

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
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<form action="">
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
										<td><input type="checkbox" name="pilih_jadwal" value="{{$jadwal->id_jadwal_dosen}}"></td>
									</tr>
								@endforeach
								</table>
								<br>
							</form>
							*Pilih jadwal bimbingan anda. <br>
							Apabila tidak ada jadwal yang sesuai, harap hubungi dosen pembimbing anda <br>
						</div>
						<div class="col-md-2"></div>
					</div>
					<center><button class="btn btn-primary">Simpan</button></center>
					<br>
		        </div><!-- /.box-body -->
		    </div><!-- /.box -->
		</div>
	</div><!--/.col (right) -->
</section>
@endsection
@extends('layouts.layout_dosen_pembimbing')

@section('title','Atur Jadwal Bimbingan')

@section('mainContent')

<section class="content">
	<br><br>
	<div class="center-form">
		<div class=".col-md-11">
		@php
		if (isset($_SESSION["atur_jadwal_bimbingan_berhasil"])) {
			echo 	"<div class='alert alert-success'> 
                   	<i class='icon fa fa-check'></i>Alokasi jadwal bimbingan telah tersimpan
              		</div>";	
			unset($_SESSION["atur_jadwal_bimbingan_berhasil"]);
		}

		if (isset($_SESSION["ubah_jawdal_bimbingan_berhasil"])) {
			echo 	"<div class='alert alert-success'> 
                   	<i class='icon fa fa-check'></i>Alokasi jadwal bimbingan telah diubah
              		</div>";	
			unset($_SESSION["ubah_jawdal_bimbingan_berhasil"]);
		}
		@endphp
			<div class="box box-primary">
				<div class="box-header with-border">
			        <center><h1 class="header-title">Atur Jadwal Bimbingan</h1></center>
				</div><!-- /.box-header -->
					
			    <div class="box-body">
			    	@if(count($jadwals) < 1)
			    	
		    		<div class="col-md-4">
		    			<strong>*Pilih alokasi waktu bimbingan dengan mencentang kotak</strong>
		    		</div>
		    		<!--
		    		<div class="col-md-4">
		    			<input type="checkbox" name="jadwal[]" value="1|08:00:00">
		    			Jadwal Tidak Kosong
		    			</button>
		    			
		    		</div>
		    		<div class="col-md-4">
		    			<button class="btn btn-default" style="width:100%;">
		    			Jadwal Kosong
		    			</button>
		    		</div>
			    		-->
			    	<br>
			    	<br>
			    	<br>
			    	
			    	<form class="form-horizontal" method="post" action="">
			    		<input type="hidden" name="_token" value="{{ csrf_token() }}">

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
						    	<tr style="height:30px;">
						    		<th>08:00-09:00</th>
						    		<td><input type="checkbox" name="jadwal[]" value="1|08:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="2|08:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="3|08:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="4|08:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="5|08:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="6|08:00:00"></button></td>
						    	</tr>
						    	<tr style="height:30px;">
						    		<th>09:00-10:00</th>
						    		<td><input type="checkbox" name="jadwal[]" value="1|09:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="2|09:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="3|09:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="4|09:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="5|09:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="6|09:00:00"></button></td>
						    	</tr>
						    	<tr style="height:30px;">
						    		<th>10:00-11:00</th>
						    		<td><input type="checkbox" name="jadwal[]" value="1|10:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="2|10:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="3|10:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="4|10:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="5|10:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="6|10:00:00"></button></td>
						    	</tr>
						    	<tr style="height:30px;">
						    		<th>11:00-12:00</th>
						    		<td><input type="checkbox" name="jadwal[]" value="1|11:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="2|11:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="3|11:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="4|11:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="5|11:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="6|11:00:00"></button></td>
						    	</tr>
						    	<tr style="height:30px;">
						    		<th>12:00-13:00</th>
						    		<td><input type="checkbox" name="jadwal[]" value="1|12:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="2|12:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="3|12:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="4|12:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="5|12:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="6|12:00:00"></button></td>
						    	</tr>
						    	<tr style="height:30px;">
						    		<th>13:00-14:00</th>
						    		<td><input type="checkbox" name="jadwal[]" value="1|13:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="2|13:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="3|13:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="4|13:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="5|13:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="6|13:00:00"></button></td>
						    	</tr>
						    	<tr style="height:30px;">
						    		<th>14:00-15:00</th>
						    		<td><input type="checkbox" name="jadwal[]" value="1|14:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="2|14:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="3|14:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="4|14:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="5|14:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="6|14:00:00"></button></td>
						    	</tr>
						    	<tr style="height:30px;">
						    		<th>15:00-16:00</th>
						    		<td><input type="checkbox" name="jadwal[]" value="1|15:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="2|15:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="3|15:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="4|15:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="5|15:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="6|15:00:00"></button></td>
						    	</tr>
						    	<tr style="height:30px;">
						    		<th>16:00-17:00</th>
						    		<td><input type="checkbox" name="jadwal[]" value="1|16:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="2|16:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="3|16:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="4|16:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="5|16:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="6|16:00:00"></button></td>
						    	</tr>
						    	<tr style="height:30px;">
						    		<th>17:00-18:00</th>
						    		<td><input type="checkbox" name="jadwal[]" value="1|17:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="2|17:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="3|17:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="4|17:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="5|17:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="6|17:00:00"></button></td>
						    	</tr>
						    	<tr style="height:30px;">
						    		<th>18:00-19:00</th>
						    		<td><input type="checkbox" name="jadwal[]" value="1|18:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="2|18:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="3|18:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="4|18:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="5|18:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="6|18:00:00"></button></td>
						    	</tr>
						    	<tr style="height:30px;">
						    		<th>19:00-20:00</th>
						    		<td><input type="checkbox" name="jadwal[]" value="1|19:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="2|19:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="3|19:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="4|19:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="5|19:00:00"></button></td>
						    		<td><input type="checkbox" name="jadwal[]" value="6|19:00:00"></button></td>
						    	</tr>
					    	</table>
					    	<br>
					    	<div class="col-md-12">
					    		<center><button class="btn btn-primary" type="submit">Simpan Jadwal</button></center>
					    	</div>
				    	</div>		    		
			    	</form>
			    	@else
				    	@php
				    		$myArray = [];

				    		for($i = 0; $i <= 6; $i++) {
				    			$myArray[$i] = [];
				    			for($j = 0; $j <= 12; $j++) {
				    				$myArray[$i][$j] = 0;
				    			}
				    		}

				    		for($i = 0; $i < count($jadwals); $i++) {
				    			$hari = $jadwals[$i]->id_hari;
				    			$jam = $jadwals[$i]->waktu_mulai;
								$myArray[$hari-1][(int)explode(':', $jam-8)[0]] = [1, $jadwals[$i]->nama_mahasiswa];
							}		    	

				    	@endphp
				    	<div class="col-md-12">
				    		<div class="col-md-6">
				    			<table>
				    				<tr>
				    					<th style="background-color: #3c8dbc; min-width: 30px;"></th>
				    					
				    					<td style="padding-left: 10px;">: Alokasi jadwal untuk bimbingan belum diambil mahasiswa</td>
				    				</tr>
				    				<tr><td><br></td></tr>
				    				<tr>
				    					<th style="background-color: #222d32; min-width: 30px;"></th>

				    					<td style="padding-left: 10px;">: Jadwal sudah diambil mahasiswa</td>
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
				    		<input type="hidden" name="_token" value="{{ csrf_token() }}">

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
							    			@if($myArray[$j][$i-8][0]==1)
							    					@if($myArray[$j][$i-8][1]!=null)
							    						<td style="background-color: #222d32; color:#ffffff"><center>{{$myArray[$j][$i-8][1]}}</center></td>
							    					@else
							    						<td style="background-color: #3c8dbc; color:#ffffff"><center>Belum Diambil</center></td>
							    					@endif
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
			</div>
		</div>
	</div>
</section>
	
@endsection
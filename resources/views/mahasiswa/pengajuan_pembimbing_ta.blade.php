@extends('layouts.layout_mahasiswa')

@section('title','Pengajuan Pembimbing TA')

@section('mainContent')
<div class="col-md-1">
</div>
<div class="col-md-10">
	@if(isset($dosenpembimbing))

	<center><h2>Pengajuan Pembimbing TA</h2></center>
	<br/>
	<br>

	<form class="form-horizontal">
		  <div class="form-group">
		    <label class="control-label col-sm-3">Nama:</label>
		    <div class="col-sm-6">
		      <input class="form-control" value="<?php
                  echo $_SESSION["user_login"]->name;
                ?>" disabled>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="control-label col-sm-3">NPM:</label>
		    <div class="col-sm-6">
		      <input class="form-control" value="<?php
                  echo $_SESSION["user_login"]->npm;
                ?>" disabled>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="control-label col-sm-3">Jurusan:</label>
		    <div class="col-sm-6">
		      <input class="form-control" value="<?php
                  echo $_SESSION["user_login"]->study_program;
                ?>" disabled>
		    </div>
		  </div>

		  <br/>
			<form>
				<table class="table table-striped">
				    <thead>
				      <tr>
				        <th>Nama Dosen</th>
				        <th>Minat</th>
				      </tr>
				    </thead>
				    <tbody>

				@foreach ($dosenpembimbing as $dosenpembimbing)

				<tr>
					<td>
						<a href="/mahasiswa/pengajuan-pembimbing-ta/detail/{{$dosenpembimbing->id_dosen}}">
							{{$dosenpembimbing->nama_dosen}}
						</a>

					</td>

					<td>
						{{$dosenpembimbing->interest}}
					</td>
				</tr>


				@endforeach

			</tbody>
		</table>
  		<p><i>*Pilih salah satu</i></p>

			
		</form>


		@elseif($dosenpembimbings->status_dosen_pembimbing == 1)
			<section class="content">
				<div class="box box-primary">
		                <div class="box-header with-border">
		                  <center><h1 class="header-title">Detail Pengajuan Dosen Pembimbing</h1></center>
		                </div><!-- /.box-header -->
		                <div class="box-body">
		                 <br>
		              <table class="table table-bordered">

		              <tbody>
		                
						<tr>
		                <th width="20%" bgcolor="#86b7e3">Nama Dosen</th>
		                <td bgcolor="#dddddd">
							{{ $dosenpembimbings->nama_dosen }}
						</td>
						
						
						</tr><tr>
		                <th width="20%" bgcolor="#86b7e3">Interest</th>
		                <td bgcolor="#dddddd">
											{{ $dosenpembimbings->interest }}

		                
						
						</td>

		                </tr>
						        
						<tr>
		                <th bgcolor="#86b7e3">Pengalaman</th>
		                <td bgcolor="#dddddd"> Publikasi: <br>
		                	Computer Networks, co-authored with David J. Wetherall (1st ed. 1981, 2nd ed. 1994, 3rd ed. 1996, 4th ed. 2002, 5th ed. 2010)
							<br>Operating Systems: Design and Implementation, co-authored with Albert Woodhull
							<br>Modern Operating Systems
							<br>Distributed Operating Systems
							<br>Structured Computer Organization
							<br>Distributed Systems: Principles and Paradigms, co-authored with Maarten van Steen
		                </td>

		                </tr>
		                
				        <tr>
						
							<th bgcolor="#86b7e3"> Status Dosen Pembimbing</th>
							<td bgcolor="#dddddd">
								@if($dosenpembimbings->status_dosen_pembimbing == 1)
									Menunggu Persetujuan
								@elseif($dosenpembimbings->status_dosen_pembimbing == 2)
									Diterima
								@else
								    Ditolak
								@endif
								</td>

		                </tr>

		              </tbody>
		              </table>
		    <center><br><br>
		      </center></div>


		        </div>
			</section>

		@else 
<section class="content">
				<div class="box box-primary">
		                <div class="box-header with-border">
		                  <center><h1 class="header-title">Detail Pengajuan Dosen Pembimbing</h1></center>
		                </div><!-- /.box-header -->
		                <div class="box-body">
		                 <br>
		              <table class="table table-bordered">

		              <tbody>
		                
						<tr>
		                <th width="20%" bgcolor="#86b7e3">Nama Dosen</th>
		                <td bgcolor="#dddddd">
							{{ $dosenpembimbings->nama_dosen }}
						</td>
						
						
						</tr><tr>
		                <th width="20%" bgcolor="#86b7e3">Interest</th>
		                <td bgcolor="#dddddd">
											{{ $dosenpembimbings->interest }}

		                
						
						</td>

		                </tr>
						        
				        <tr>
						
							<th bgcolor="#86b7e3"> Status Dosen Pembimbing</th>
							<td bgcolor="#dddddd">
								@if($dosenpembimbings->status_dosen_pembimbing == 1)
									Menunggu Persetujuan
								@elseif($dosenpembimbings->status_dosen_pembimbing == 2)
									Diterima
								@else
								    Ditolak
								@endif
								</td>

		                </tr>

		              </tbody>
		              </table>
		    <center><br><br>
		      </center>
			  	@if($dosenpembimbings->status_dosen_pembimbing == 3)
			  	<a href="/mahasiswa/ubah-pengajuan-pembimbing/{{$dosenpembimbings->id}}">
							<button  class="btn btn-primary" type="submit">Ajukan Ulang</button>	
							</a>			
					@endif

			  </div>
				
		        </div>
			</section>

		@endif

</div>
<div class="col-md-1">
</div>
@endsection

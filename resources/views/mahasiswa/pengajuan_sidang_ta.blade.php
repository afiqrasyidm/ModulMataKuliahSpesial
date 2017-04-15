@extends('layouts.layout_mahasiswa')

@section('title','Pengajuan Sidang TA')

@section('mainContent')

<script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
</script>
@if(!isset($sidang))
<div class="col-md-12">
	<h1>Pengajuan Sidang TA</h1>
	<br/>
        <form class="form-horizontal" method="post" action="" role="form">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <div class="form-group">
		    <label class="control-label col-sm-3">Identitas Penulis</label>
		  </div>

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

          <div class="form-group">
		    <label class="control-label col-sm-3">Informasi Tugas Akhir</label>
		  </div>

		@if(isset($informasi_ta))
		  <div class="form-group">
		    <label class="control-label col-sm-3">Judul:</label>
		    <div class="col-sm-6">
		      <input class="form-control" value="{{$informasi_ta->judul_ta}}" disabled>
		    </div>
		  </div>

		  <div class="form-group">
		    <label class="control-label col-sm-3">Topik:</label>
		    <div class="col-sm-6">
		      <input class="form-control" value="{{$informasi_ta->topik_ta}}" disabled>
		    </div>
		  </div>
		@endif

		  <center><button class="btn btn-primary">Ajukan TA</button></center>
	</form>        
</div>

@else
<br>

<section class="content">
<div class="center-form">
<div class=".col-md-11">
          <section class="content">

              <h3><center>Bukti Pengajuan Sidang TA</h4>

                <br>

              <table class="table table-bordered">

              <tbody>
                <tr>
                <th width ="20%" bgcolor="#86b7e3">Judul TA</th>
                <td bgcolor="#c0c5cc">{{$informasi_ta->judul_ta}}</td>
                </tr>

                <tr>
                <th width ="20%" bgcolor="#86b7e3">Topik</th>
                <td bgcolor="#c0c5cc">{{$informasi_ta->topik_ta}}
				</td>
                </tr>


                <tr>
                <th width ="20%" bgcolor="#86b7e3">Dosen Pembimbing</th>
                <td bgcolor="#c0c5cc">
				Mischelle
				</td>
                </tr>

                <tr>
                <th width ="20%" bgcolor="#86b7e3">Dosen Penguji</th>
                <td bgcolor="#c0c5cc">
				Meilisa
				</td>
                </tr>

                <tr>
                <th width ="20%" bgcolor="#86b7e3">Waktu Sidang</th>
                <td bgcolor="#c0c5cc">
				Senin, 7 Maret 2017 - pk. 13.00 WIB
				</td>
                </tr>

                <tr>
                <th width ="20%" bgcolor="#86b7e3">Status</th>
                <td bgcolor="#c0c5cc">
                	@if ($informasi_sidang->status ==0)
						Menunggu persetujuan Dosen Pembimbing
					@else 
						Verified by Dosen Pembimbing
					@endif
				</td>
                </tr>
        
				</tbody>
			</table>


        </section>

         </div>
              </div>
              </div>
            </div>

</section>

@endif

@endsection


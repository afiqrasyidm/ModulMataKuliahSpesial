@extends('layouts.layout_mahasiswa')

@section('title','Pengajuan Sidang TA')

@section('mainContent')

<script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
</script>

<section class="content">
<div class="center-form">
<div class=".col-md-11">

                      
@if(!isset($sidang))
<div class="box box-primary">
    <div class="box-header with-border">
        <center><h1 class="header-title">Pengajuan Sidang TA</h1><br></center>
     </div><!-- /.box-header -->
     <div class="box-body">
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
<br>
		  <center><button class="btn btn-primary">Ajukan Sidang TA</button></center>
	</form>     <br>   
</div>

@else
<br>

 <div class="box box-primary">
    <div class="box-header with-border">
      <?php
        if (isset($_SESSION["mahasiswa_pengajuan_sidang"])) {
        echo"<div class='alert alert-success'>
                <i class='icon fa fa-check'></i>Pengajuan Sidang Berhasil 
            </div>";
        unset($_SESSION["mahasiswa_pengajuan_sidang"]);
        }
      ?>
         @if($tugas_akhir->status_tugas_akhir==12)
         <center><h1 class="header-title">Hasil Sidang TA</h1></center>
         @else
         <center><h1 class="header-title">Detail Pengajuan Sidang TA</h1></center>
         @endif

    </div>
    <div class="box-body">
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
				              {{$informasi_ta->nama_dosen}} 
				</td>
                </tr>
               

               @if($sidang->status>=2)  
                  @foreach($informasi_penguji as $informasi_penguji)
                    <tr>
                    <th width ="20%" bgcolor="#86b7e3">Dosen Penguji {{ $i++ }} </th>
                    <td bgcolor="#c0c5cc">{{ $informasi_penguji->nama_dosen }}</td>
                  </tr>
                  @endforeach
                @else
                  <tr>
                  <th width ="20%" bgcolor="#86b7e3">Dosen Penguji</th>
                  <td bgcolor="#c0c5cc" style ='color:#c43e11'><b> Dosen Penguji Belum Ditentukan </b></td>
                </tr>
                @endif
                
                <tr>
                <th width ="20%" bgcolor="#86b7e3">Waktu Sidang</th>
                    @if($sidang->waktu_sidang==null)
                     <td bgcolor="#c0c5cc" style ='color:#c43e11'> <b> Jadwal Sidang Belum Ditentukan </b> </td>
                    @else
                      <td bgcolor="#c0c5cc">{{$sidang->waktu_sidang}}</td>
                    @endif
				
                </tr>

                <tr>
                <th width ="20%" bgcolor="#86b7e3">Status</th>
                <td bgcolor="#c0c5cc"><b>{{$status->status}}</b></td>
                </tr>
        
                <th width ="20%" bgcolor="#86b7e3">Nilai Akhir</th>
                    @if($tugas_akhir->status_tugas_akhir==12)
                      <td bgcolor="#c0c5cc"> {{$tugas_akhir->nilai_ta}} </td>
                    @else
                     <td bgcolor="#c0c5cc" style ='color:#c43e11'><i><b>Kosong</b></i></td>
                    @endif
                </tr>       
				</tbody>
			</table>

      <table class="table table-bordered">
        <tbody>
            @if($tugas_akhir->status_tugas_akhir==12)
            <tr>
            <th width ="20%" bgcolor="#2e913d" style ='color:#ffffff'><b>Selamat telah menyelesaikan sidang TA!</b> <br><i>Silahkan mengunggah dokumen TA Anda</i></th>
            </tr>
          @endif
        </tbody>
      </table>
<br><br>



@endif

         </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
            </div><!--/.col (right) -->

</section>

@endsection


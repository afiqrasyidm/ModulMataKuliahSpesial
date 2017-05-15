@extends('layouts.layout_mahasiswa')

@section('title','Pengajuan Sidang Topik')

@section('mainContent')

<script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
</script>

<section class="content">
<div class="center-form">
<div class=".col-md-11">
@if(!isset($sidang_topik))
<div class="box box-primary">

    <div class="box-header with-border">
        <center><h1 class="header-title">Pengajuan Sidang Topik</h1><br></center>
     </div><!-- /.box-header -->
     <div class="box-body">
        <form class="form-horizontal" method="post" action="" role="form">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <div class="form-group">
        <label class="control-label col-sm-3">Identitas Mahasiswa</label>
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
        <label class="control-label col-sm-3">Topik yang Disidangkan </label>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3">Topik:</label>
        <div class="col-sm-6">
          <input class="form-control" value="{{$informasi_topik->topik_ta}}" disabled>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3">Latar Belakang Topik:</label>
        <div class="col-sm-6">
          <input class="form-control" value="{{$informasi_topik->deskripsi}}" disabled>
        </div>
      </div>
    
<br>
      <center><button class="btn btn-primary">Ajukan Sidang Topik</button></center>
  </form>     <br>   
</div>

@else
<br>
 <div class="box box-primary">
    <div class="box-header with-border">
      <?php
        if (isset($_SESSION["mahasiswa_pengajuan_sidang_topik"])) {
        echo"<div class='alert alert-success'>
                <i class='icon fa fa-check'></i>Pengajuan Sidang Topik Berhasil 
            </div>";
        unset($_SESSION["mahasiswa_pengajuan_sidang_topik"]);
        }
      ?>
         <center><h1 class="header-title">Detail Pengajuan Sidang Topik</h1></center>
    </div>
    <div class="box-body">
     <br>
              <table class="table table-bordered">

              <tbody>

                <tr>
                <th width ="20%" bgcolor="#86b7e3">Topik</th>
                <td bgcolor="#c0c5cc">{{$informasi_topik->topik_ta}}</td>
                </tr>
               
               @if($informasi_topik->nama_dosen==null)  
                <tr>
                <th width ="20%" bgcolor="#86b7e3">Dosen Pembimbing</th>
                <td bgcolor="#c0c5cc" style ='color:#c43e11'><b> Dosen Pembimbing Belum Diajukan </b></td>
                </tr>
                @else
                <tr>
                <th width ="20%" bgcolor="#86b7e3">Dosen Pembimbing</th>
                <td bgcolor="#c0c5cc">{{$informasi_topik->nama_dosen}}</td>
                </tr>
                @endif
               
               @if($informasi_sidang_topik->status==3)  
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
                    @if($informasi_sidang_topik->waktu_sidang==null)
                     <td bgcolor="#c0c5cc" style ='color:#c43e11'> <b> Jadwal Sidang Belum Ditentukan </b> </td>
                    @else
                      <td bgcolor="#c0c5cc">{{$informasi_sidang_topik->waktu_sidang}}</td>
                    @endif
                </tr>
                
                <tr>
                <th width ="20%" bgcolor="#86b7e3">Status</th>
                <td bgcolor="#c0c5cc"><b>{{$status->status}}</b></td>
                </tr>

                <tr>
                <th width ="20%" bgcolor="#86b7e3">Nilai Sidang Topik</th>
                    @if($informasi_sidang_topik->status==4)
                      <td bgcolor="#c0c5cc"> <b> {{$tugas_akhir->nilai_ta}} </b> </td>
                    @else
                     <td bgcolor="#c0c5cc" style ='color:#c43e11'><i><b>Kosong</b></i></td>
                    @endif
                </tr>
        
        </tbody>
      </table>
<br><br>





         </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
            </div><!--/.col (right) -->
@endif

</section>

@endsection


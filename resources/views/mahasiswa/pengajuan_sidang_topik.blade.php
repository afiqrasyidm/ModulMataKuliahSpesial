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
@if($sidang_topik->status == 1)
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
         @if($informasi_sidang_topik->status==4)
          <center><h1 class="header-title">Hasil Sidang Topik</h1></center>
         @else
         <center><h1 class="header-title">Detail Pengajuan Sidang Topik</h1></center>
         @endif

    </div>
    <div class="box-body">


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
               
               @if($informasi_sidang_topik->status>2)  
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
                    
                @if($informasi_sidang_topik->status==4)
                <tr>
                <th width ="20%" bgcolor="#86b7e3">Nilai Sidang Topik</th>
                      <td bgcolor="#c0c5cc"> {{$tugas_akhir->nilai_topik}} </td>
                </tr>
                @endif
        </tbody>
      </table>

      <table class="table table-bordered">
        <tbody>
            @if($informasi_sidang_topik->status==4)
            <tr>
            @if($tugas_akhir->nilai_topik=="D")
            <th width ="20%" bgcolor="#de4a37" style ='color:#ffffff'><b>Nilai Anda tidak mencukupi untuk melanjutkan bimbingan TA & sidang TA</b> <br><i>Silahkan melakukan bimbingan dan mengajukan sidang topik kembali</i></th>
            @elseif($tugas_akhir->nilai_topik=="E")
            <th width ="20%" bgcolor="#de4a37" style ='color:#ffffff'><b>Nilai Anda tidak mencukupi untuk melanjutkan bimbingan TA & sidang TA</b> <br><i>Silahkan melakukan bimbingan dan mengajukan sidang topik kembali</i></th>
            @else
            <th width ="20%" bgcolor="#2e913d" style ='color:#ffffff'><b>Selamat telah menyelesaikan sidang topik!</b> <br><i>Silahkan melanjutkan bimbingan Anda untuk menyelesaikan tugas akhir ini</i></th>
            @endif
            </tr>
          @endif
        </tbody>
      </table>
      <br>
                @if($informasi_sidang_topik->status==4)
                  @if($tugas_akhir->nilai_topik=="D")
                  <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Ajukan Sidang Topik Baru</button></center>
                  @endif

                  @if($tugas_akhir->nilai_topik=="E")
                  <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Ajukan Sidang Topik Baru</button></center>
                  @endif
                @endif


<br><br>
      <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Anda Yakin Ingin Mengajukan Sidang Topik Baru?</h4>
        </div>

        <div>
        <a href="{{ route('mahasiswa/pengajuan-sidang-topik-baru/', $tugas_akhir->id_tugas_akhir) }}">
              <button  class="btn btn-primary" >Iya</button>
            </a>
          
            <br>
            <br>
        </div>
        </div>




         </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
            </div><!--/.col (right) -->
@endif

</section>

@endsection


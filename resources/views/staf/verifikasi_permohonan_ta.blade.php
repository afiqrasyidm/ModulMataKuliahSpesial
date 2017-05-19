@extends('layouts.layout_staf')

@section('title','Verifikasi Pengajuan Tugas Akhir')

@section('mainContent')
<section class="content">
<div class="center-form">
<div class=".col-md-11">
@php
    if (isset($_SESSION["verifikasi_permohonan_ta_berhasil"])) {
      echo  "<div class='alert alert-success'> 
                    <i class='icon fa fa-check'></i>Verifikasi permohonan TA ".$_SESSION["verifikasi_permohonan_ta_berhasil"]." berhasil
                  </div>";  
      unset($_SESSION["verifikasi_permohonan_ta_berhasil"]);
    }
@endphp
<br><br>
    <div class="box box-primary">
      <div class="box-header with-border">
          <center><h1 class="header-title">Verifikasi Permohonan Tugas Akhir</h1><br></center>
      </div><!-- /.box-header -->
    <div class="box-body">
  <table class="table table-striped">
    <thead>
        <tr>
        <th>Nama Mahasiswa</th>
        <th>NPM</th>
        <th>Jurusan</th>
        <th>Matakuliah</th>
        <th>Topik</th>
        <th>Judul</th>
        <th>Detail</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody> 
      @php
        $idx = 0;
      @endphp  
      @foreach ($tugas_akhir as $ta)
      <tr>
        <td>{{$ta->nama_mahasiswa}}</td>
        <td>{{$ta->NPM}}</td>
        <td>{{$ta->nama_prodi}}</td>
        <td>
          @if($ta->jenjang=='S1')
            Skripsi
          @elseif($ta->jenjang=='S2')
            Tesis
          @elseif($ta->jenjang=='S3')
            Disertasi
          @endif
        </td>
        <td>{{$ta->topik_ta}}</td>
        <td>{{$ta->judul_ta}}</td>
        <td>
          <a href="{{route('staf/detail-permohonan-ta', $ta->id_tugas_akhir)}}">Detail</a>
        </td>
        <td> 
          @if($ta->status_tugas_akhir == 7)
            <button type="button" id="verifikasi-button" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{$idx}}">Verifikasi Sekarang</button>
          @elseif($ta->status_tugas_akhir > 7)
            <p><b>Telah Diverifikasi</b></p>
          @endif
        </td>

        <!-- Modal -->
        <div class="modal fade" id="myModal{{$idx}}" role="dialog"">
          <div class="modal-dialog" style="margin-top: 15%;">
              <!-- Modal content-->
            <center>
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Apakah anda yakin ingin melakukan verifikasi permohonan TA atas nama <br><strong>{{ $tugas_akhir[$idx]->nama_mahasiswa }}({{ $tugas_akhir[$idx]->NPM }})</strong> ?</h4>
                </div>
                <div>
                  <a href="{{route('staf/verifikasi-ta', $ta->id_tugas_akhir)}}"><button  class="btn btn-primary">Ya</button></a>
                  <button  class="btn btn-danger"  class="close" data-dismiss="modal">Batal</button>
                  <br>
                  <br>
                </div>
                </div>
              </center>
          </div>
        </div>
      </tr>
        @php
          $idx += 1;
        @endphp  
      @endforeach
    </tbody>
  </table>
  <br/>
</div></div></div></div></section>
@endsection

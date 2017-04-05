@extends('layouts.layout_mahasiswa')

@section('title','Pengajuan Sidang TA')

@section('mainContent')

 <div class="col-md-3">
 </div>
 <div  class="col-md-9">
  <div style="margin-top:225px;">
   <h2 style="color:red;">Harap mengambil Tugas Akhir terlebih dahulu!</h2>
   <p>Anda tidak diperkenankan melakukan melakukan pengajuan permohonan sidang tugas akhir sebelum mengambil tugas akhir</p>
   <p>Silahkan mengambil tugas akhir <a href="{{route('mahasiswa/pengajuan-permohonan-ta')}}">disini</a></p>
  </div>
 </div>

@endsection
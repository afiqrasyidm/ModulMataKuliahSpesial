

@extends('layouts.layout_dosen_pembimbing')

@section('title','Ubah Status Persidangan')


@section('mainContent')

<section class="content">
<div class="center-form">
<div class=".col-md-11">


<br><br> 
              <!-- general form elements disabled -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <center><h1 class="header-title">Ubah Status Persidangan</h1><br></center>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <?php
if (isset($_SESSION["izin_sidang"])) {
  
      echo"
      <div class='alert alert-success'>
                    
                   <i class='icon fa fa-check'></i>Berhasil Izinkan Sidang Mahasiswa Bimbingan
                   
              </div>
      ";
      
      
      unset($_SESSION["izin_sidang"]);
}
?>
<!-- test -->
@if(isset($ta))

      <section class="content">
              <table class="table table-bordered">
                  <thead>
                      <tr>
                        <th>Nama Mahasiswa</th>
                        <th>Judul TA</th>
                        <th>Status TA</th>
                       
                       
                      </tr>
                    </thead>
              <tbody>
    
               @foreach ($ta as $ta)

        
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
        @if($ta->jenjang == "S1" OR ($ta->jenjang != "S1" AND $ta->nilai_topik !=  Null))
              <tr>
                <td>
                     {{$ta->nama_mahasiswa}}
                        
                </td>
                <td>
                    {{$ta->judul_ta}}
                      
                </td>
             
                <td> 

                   @if($ta->status_tugas_akhir == 10)
                        <a href="{{ route('dosen/pembimbing/status-sidang/' ,$ta->id_tugas_akhir)}}">
                          <button  class="btn btn-primary" type="submit">Izinkan Sidang</button>
                        </a>
                       
                    @elseif($ta->status_tugas_akhir >10) 
                      <p><b>Siap Sidang</b></p>
                    @endif
                </td>
              </tr>
         @endif
  @endforeach
              

              </tbody>
              </table>
    <center>
       
    

        </section><!-- /.content -->
   
     
    @endif
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
            </div><!--/.col (right) -->

</section>

@endsection


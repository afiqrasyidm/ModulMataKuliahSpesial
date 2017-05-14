

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
<!-- blm diizinin -->
@if(isset($sidang_topik))

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
    
    @foreach ($sidang_topik as $sidang_topik1)

        
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <tr>
                <td>
                     {{$sidang_topik1->nama_mahasiswa}}
                        
                </td>
                <td>
                    {{$sidang_topik1->judul_ta}}
                      
                </td>
             
                <td>



      
      
          <a href="/dosen/pembimbing/status-sidang-topik/{{$sidang_topik1->id_tugas_akhir}}/{{$sidang_topik1->id_mahasiswa}}">
                      <button  class="btn btn-primary" type="submit">Izinkan Sidang</button>
                     </a>      
      
      
      
    @endforeach
@endif

<!-- udh di izinin -->
@if(isset($pengajuan))
    @foreach ($pengajuan as $pengajuan1)

        
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <tr>
                <td>
                     {{$pengajuan1->nama_mahasiswa}}
                        
                </td>
                <td>
                    {{$pengajuan1->judul_ta}}
                      
                </td>
             
                <td>

<!-- test -->

      
      
        <p><b>Siap Sidang</b></p> 
      
      
    @endforeach

                   
                </td>

              </tr>
  
              

              </tbody>
            </table>
  
       
    

    </section><!-- /.content -->
   
     
@endif
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
            </div><!--/.col (right) -->

</section>

@endsection


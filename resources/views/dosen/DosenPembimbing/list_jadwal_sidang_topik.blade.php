

@extends('layouts.layout_dosen_pembimbing')

@section('title','List Jadwal Persidangan Topik')


@section('mainContent')

<section class="content">
<div class="center-form">
<div class=".col-md-11">

 
<br><br>

              <!-- general form elements disabled -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <center><h1 class="header-title">List Sidang Topik</h1><br></center>
                </div><!-- /.box-header -->
                <div class="box-body">
<?php
if (isset($_SESSION["detail_sidang_submit_first"])) {
  
      echo"
      <div class='alert alert-success'>
                    
                   <i class='icon fa fa-check'></i> Sidang topik telah selesai dan nilai telah disubmit
                   
              </div>
      ";
      
      
      unset($_SESSION["detail_sidang_submit_first"]);
}
?>
<!-- test -->
@if(isset($sidang_topik))

    
              <table class="table table-bordered">
                  <thead>
                      <tr>
                        <th>Nama Mahasiswa</th>
                        <th>Jadwal Sidang</th>
                        <th>Detail Sidang</th>
                       
                       
                      </tr>
                    </thead>
              <tbody>
    
               @foreach ($sidang_topik as $sidang_topik)

        
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <tr>
                <td>
                     {{$sidang_topik->nama_mahasiswa}}
                        
                </td>
        
         <td>
                
                    {{$sidang_topik->waktu_sidang}}
                       
                </td>
             
             
       
                <td>
                @if( $sidang_topik->status == 4)
          
              <b>Sidang telah dilakukan </b>                           
                          
                          
                      
          @else
            <a href="{{ route('dosen/pembimbing/detail-sidang-topik/' ,$sidang_topik->id_tugas_akhir)}}">
              <button  class="btn btn-primary" type="submit">Detail</button>
            </a>
          @endif  
              
                 

                </td>

              </tr>
  @endforeach
              

              </tbody>
              </table>
    <center>
       
    

      
   
     
    @endif

                    </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
            </div><!--/.col (right) -->

</section>


@endsection


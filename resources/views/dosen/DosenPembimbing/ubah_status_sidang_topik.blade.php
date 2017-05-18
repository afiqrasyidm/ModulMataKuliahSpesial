

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
                  <center><h1 class="header-title">Perizinan Sidang Topik</h1><br></center>
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
                        <th><center>Nama Mahasiswa</center></th>
                        <th><center>Judul TA</center></th>
                        <th><center>Status TA</center></th>
                       
                       
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
                  <center>
                    <button  class="btn btn-primary"  data-toggle="modal" data-target="#myModal" >Izinkan Sidang</button>
                  </center>  


               <!-- Modal -->
                  <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog">
                  
                    <!-- Modal content-->
                    <div class="modal-content">
                    <div class="modal-header">
                   
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Apakah anda yakin ingin mengizinkan sidang topik atas nama <br><strong>{{$sidang_topik1->nama_mahasiswa}}</strong> ?</h4>
                    </div>
              <br>
                    <div>
                      <center>
                        <a href="{{ route('dosen/pembimbing/status-sidang-topik/', array('id_tugas_akhir' => $sidang_topik1->id_tugas_akhir, 'id_mahasiswa' => $sidang_topik1->id_mahasiswa)) }}">
                          <button  class="btn btn-primary" type="submit" >Ya</button> 
                        </a> 
                          <button  class="btn btn-danger"  class="close" data-dismiss="modal">Batal</button>
                        </center>
         
        
          <br>
          <br>
      </div>
      </div>
      
    </div>
    </div>
  <!--   end modal --> 

                </td>
    @endforeach
@endif
<!-- end -->
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
                    <p><b>Siap Sidang</b></p> 
                </td>
      
    @endforeach
<!-- end -->
                   
                

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


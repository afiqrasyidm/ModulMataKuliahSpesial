

@extends('layouts.layout_mahasiswa')

@section('title','Upload Hasil TA')


@section('mainContent')


<script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
    </script>
<section class="content">
<div class="center-form">
<div class=".col-md-11">


<br><br>
              <!-- general form elements disabled -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <center><h1 class="header-title">Upload Hasil TA</h1><br></center>
                </div><!-- /.box-header -->
                <div class="box-body">
                  
<!-- test -->
<?php
if (isset($_SESSION["mahasiswa_perubahan_dokumen"])) {
  
      echo"
      <div class='alert alert-success'>
                    
                   <i class='icon fa fa-check'></i> Dokumen Berhasil Diubah
                   
              </div>
      ";
      
      
      unset($_SESSION["mahasiswa_perubahan_dokumen"]);
}
?>
    
@if(isset($hasil_ta))


          <section class="content">

<?php
if (isset($_SESSION["detail_upload_submit_first"])) {
  
      echo"
      <div class='alert alert-success'>
                    
                   <i class='icon fa fa-check'></i> Dokumen Telah Di Upload
                   
              </div>
      ";
      
      
      unset($_SESSION["detail_upload_submit_first"]);
}
?>
           
              <table class="table table-bordered">

              <tbody>
                <tr>
                <th width ="20%" bgcolor="#86b7e3">Dokumen</th>
                <td bgcolor="#c0c5cc">
                 <a href="/files/{{$hasil_ta->dokumen}}" >{{$hasil_ta->dokumen}}</a></td>

                </tr>

                <tr>
                <th bgcolor="#86b7e3">Terakhir Diubah</th>
                <td bgcolor="#c0c5cc">{{$hasil_ta->created_at}}</td>

                </tr>

              </tbody>
              </table>
    <center>
       
       
          <button  class="btn btn-primary" data-toggle="modal" data-target="#myModal">Ubah dokumen</button>
        </a>
      </div>


   <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
      <div class="modal-header">
     
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Anda Yakin Ingin Mengubah Dokumen TA?</h4>
      </div>

      <div>
          <a href="/mahasiswa/ubah-dokumen-ta/{{$hasil_ta->id_tugas_akhir}}"   >
            <center><button  class="btn btn-primary" >Iya</button></center>
          </a>
        
          <br>
          <br>
      </div>
      </div>
      
    </div>
    </div>

        </section><!-- /.content -->


@else
    
      @if (count($errors) > 0)

      <div class="alert alert-danger">

        <strong>Whoops!</strong> Ada Masalah Dengan Input yang Dimasukkan.<br><br>

        <ul>

          @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

          @endforeach

        </ul>

      </div>

    @endif


    @if ($message = Session::get('success'))

    <div class="alert alert-success alert-block">

      <button type="button" class="close" data-dismiss="alert">×</button>

            <strong>{{ $message }}</strong>

    </div>

    @endif


    <form action="{{ url('mahasiswa/upload-hasil-ta') }}" enctype="multipart/form-data" method="POST">

      {{ csrf_field() }}

      
       <i><center>*Upload Dokumen dengan Format PDF</center><br></i>
        <div class="center-button text-resize">

           
          <input type="file" name="file" />
            
         <br><br>

       
         </div>
         <center>
          <button type="submit" class="btn btn-primary">Upload</button>

        </center>
 
    

    </form>


   

<!--   end -->
@endif
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
            </div><!--/.col (right) -->

</section>

@endsection




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

@if(isset($hasil_ta))


          <section class="content">

              <h3><center>Dokumen telah di upload</h4>

              <table class="table table-bordered">

              <tbody>
                <tr>
                <th width ="20%" bgcolor="#86b7e3">Dokumen</th>
                <td bgcolor="#c0c5cc">
                {{$hasil_ta->dokumen}} </td>

                </tr>

                <tr>
                <th bgcolor="#86b7e3">Di upload pada </th>
                <td bgcolor="#c0c5cc">{{$hasil_ta->created_at}}</td>

                </tr>

              </tbody>
              </table>
    <center>
       
       <a href="/mahasiswa/ubah-dokumen-ta/{{$hasil_ta->id_tugas_akhir}}"   >
          <button  class="btn btn-primary">Ubah dokumen</button>
        </a>
      </div>


        </section><!-- /.content -->


@else
    
      @if (count($errors) > 0)

      <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

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

      
      <center>Upload a file in PDF</center><br>
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

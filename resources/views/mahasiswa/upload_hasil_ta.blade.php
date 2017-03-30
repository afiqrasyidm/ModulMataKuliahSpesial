

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

                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
            </div><!--/.col (right) -->

</section>

@endsection


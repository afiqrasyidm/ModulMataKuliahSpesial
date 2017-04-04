

@extends('layouts.layout_dosen_pembimbing')

@section('title','Ubah Status Persidangan')


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
                  <center><h1 class="header-title">Ubah Status Persidangan</h1><br></center>
                </div><!-- /.box-header -->
                <div class="box-body">
                  
<!-- test -->


   

<!--   end -->

                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
            </div><!--/.col (right) -->

</section>

@endsection


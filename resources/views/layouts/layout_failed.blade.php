@extends('layouts.layout_mahasiswa')

@section('mainContent')

<section class="content">
<div class="center-form">
<div class=".col-md-11">


<br><br>
              <!-- general form elements disabled -->
              <div class="box box-default">
              
                <div class="box-header with-border">
                  <i class="fa fa-warning"></i>
                  <h3 class="box-title">Peringatan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">

                <div class="alert alert-danger">

                  <div class="title-alert">
                  <h3><i class="icon fa fa-ban"></i><b>@yield('titleMainContent')</b></div>
                  </h3><br>

                 <div class="text-alert">@yield('contentMainContent')</div>

                </div>


</div>
</div>
</div>
</div><!--/.col (right) -->
</section>

  
  
@endsection



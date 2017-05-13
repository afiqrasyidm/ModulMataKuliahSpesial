@extends('layouts.layout_mahasiswa')

@section('title','Home Page')

@section('mainContent')

<section class="content">
<div class="center-form">
<div class=".col-md-11">


 <div class="box box-primary">
      

        <div class="box-header with-border">
            <center><b><h2 class="title-index">Alur Pengerjaan Tugas Akhir</h2></b></center>
         
          </div><!-- /.box-header -->
          <div class="box-body">
          <center>
     <?php 
            if($_SESSION["mahasiswa"]->jenjang=="S1"){
              echo "<img src='";
              echo asset('img/s1.png');
              echo "' style='width: 75% ; height: auto'/>";
            }
            else{
              echo "<img src='";
              echo asset('img/s2.png');
              echo "' style='width: 75% ; height: auto'/>";
            }
          ?>
            </center>
          </div>


                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
            </div><!--/.col (right) -->

</section>
        
@endsection
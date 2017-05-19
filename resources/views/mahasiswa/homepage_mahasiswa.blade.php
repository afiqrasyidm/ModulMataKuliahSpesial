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
                
              if ($tugasakhir == ""){
              echo "<img src='";
              echo asset('img/S1/11.png');
              echo "' style='width: 100% ; height: auto'/>";
            }

            else if ($tugasakhir == "3" || $tugasakhir == "4" || $tugasakhir == "5" ){
              echo "<img src='";
              echo asset('img/S1/10.png');
              echo "' style='width: 100% ; height: auto'/>";
            }


            else if ($tugasakhir == "6" || $tugasakhir == "7"){
              echo "<img src='";
              echo asset('img/S1/9.png');
              echo "' style='width: 100% ; height: auto'/>";
            }

            else if ($tugasakhir == "7"){

              echo "<img src='";
              echo asset('img/S1/8.png');
              echo "' style='width: 100% ; height: auto'/>";
            }
           
           else if ($tugasakhir == "8"){
              echo "masuk sini bapak";
              echo "<img src='";
              echo asset('img/S1/8.png');
              echo "' style='width: 100% ; height: auto'/>";
            }

           else if ($tugasakhir == "9"){
              echo "<img src='";
              echo asset('img/S1/7.png');
              echo "' style='width: 100% ; height: auto'/>";
            }

            else if ($tugasakhir == "10"){
              echo "<img src='";
              echo asset('img/S1/6.png');
              echo "' style='width: 100% ; height: auto'/>";
            }

            else if ($tugasakhir == "11"){
              echo "<img src='";
              echo asset('img/S1/4.png');
              echo "' style='width: 100% ; height: auto'/>";
            }

            else if ($tugasakhir == "Sudah upload"){
              echo "<img src='";
              echo asset('img/S1/3.png');
              echo "' style='width: 100% ; height: auto'/>";
            }

            else if ($tugasakhir == "12"){
              echo "<img src='";
              echo asset('img/S1/2.png');
              echo "' style='width: 100% ; height: auto'/>";
            }

             else if ($tugasakhir == "Sudah upload final"){
              echo "<img src='";
              echo asset('img/S1/1.png');
              echo "' style='width: 100% ; height: auto'/>";
            }




          }

          
          //s2 punya
         else {
        
           if ($tugasakhir == ""){
              echo "<img src='";
              echo asset('img/S2/12.png');
              echo "' style='width: 100% ; height: auto'/>";
            }
            
            if ($tugasakhir == "3" || $tugasakhir == "4" || $tugasakhir == "5"){
              echo "<img src='";
              echo asset('img/S2/13.png');
              echo "' style='width: 100% ; height: auto'/>";
            }

            if ($tugasakhir == "6"){
              echo "<img src='";
              echo asset('img/S2/14.png');
              echo "' style='width: 100% ; height: auto'/>";
            }

            if ($tugasakhir == "7" || $tugasakhir =="8"){
              echo "<img src='";
              echo asset('img/S2/15.png');
              echo "' style='width: 100% ; height: auto'/>";
            }

            if ($tugasakhir == 9){
              echo "<img src='";
              echo asset('img/S2/16.png');
              echo "' style='width: 100% ; height: auto'/>";
            }

            if ($tugasakhir == 10){
              echo "<img src='";
              echo asset('img/S2/17.png');
              echo "' style='width: 100% ; height: auto'/>";
            }

            if ($tugasakhir == "Siap sidang topik"){
              echo "<img src='";
              echo asset('img/S2/18.png');
              echo "' style='width: 100% ; height: auto'/>";
            }

             if ($tugasakhir == "Done sidang topik"){
              echo "<img src='";
              echo asset('img/S2/19.png');
              echo "' style='width: 100% ; height: auto'/>";
            }

             if ($tugasakhir == "Bimbingan"){
				
              echo "<img src='";
              echo asset('img/S2/20.png');
              echo "' style='width: 100% ; height: auto'/>";
            }
			
			 if ($tugasakhir == 11){
				
              echo "<img src='";
              echo asset('img/S2/21.png');
              echo "' style='width: 100% ; height: auto'/>";
            }

             else if ($tugasakhir == 12){
              echo "<img src='";
              echo asset('img/S2/23.png');
              echo "' style='width: 100% ; height: auto'/>";
            }

            else if ($tugasakhir == "Sudah upload"){
              echo "<img src='";
              echo asset('img/S2/22.png');
              echo "' style='width: 100% ; height: auto'/>";
            }

             else if ($tugasakhir == "Sudah upload final"){
              echo "<img src='";
              echo asset('img/S2/24.png');
              echo "' style='width: 100% ; height: auto'/>";
            }

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
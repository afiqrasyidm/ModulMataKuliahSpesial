@extends('layouts.layout_mahasiswa')

@section('title','Home Page')

@section('mainContent')

<div class="col-md-12">
	<center>
		<h1>Alur Pengerjaan Tugas Akhir</h1>

		 <?php 
            if($_SESSION["mahasiswa"]->jenjang=="S1"){

              echo "<img src='";
              echo asset('img/s1.png');
              echo "' style='height: 400px'/>";
            }

            else{

              echo "<img src='";
              echo asset('img/s2.png');
              echo "' style='height: 400px'/>";
            }
          ?>
	</center>
</div>
        
@endsection
@extends('layouts.layout')

@section('contentSideBar')
<?php 
			if(!isset($_SESSION["role_user"])){
            	header( "refresh:0;/" );
				return "";
            }		
			else if($_SESSION["role_user"]!= "mahasiswa"){
	
				header( "refresh:0;/forbidden_access" );
				return "";
            }
?>

<ul class="sidebar-menu">
   
    <br>
  <li class="header">MAIN NAVIGATION</li>
  <li class="treeview">
    <a href="{{ asset ('#' )  }}">
      <i class="fa fa-edit"></i> <span>Tugas Akhir</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="{{ route('mahasiswa/pengajuan-topik') }}"><i class="fa fa-angle-right"></i>Pengajuan Topik</a></li>
      <li><a href="{{ route('mahasiswa/pengajuan-permohonan-ta') }}"><i class="fa fa-angle-right"></i>Pengajuan Permohonan</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="{{ asset ('#' )  }}">
      <i class="fa fa-user"></i> <span>Bimbingan</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="{{ route('mahasiswa/pengajuan-pembimbing-ta') }}"><i class="fa fa-angle-right"></i>Pengajuan Pembimbingan TA</a></li>
      <li><a href=""><i class="fa fa-angle-right"></i>Jadwal Bimbingan</a></li>
      <li><a href=""><i class="fa fa-angle-right"></i>Log Bimbingan</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="{{ asset ('#' )  }}">
      <i class="fa fa-graduation-cap"></i> <span>Sidang</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
        <?php 
            if($_SESSION["mahasiswa"]->jenjang!="S1"){
              echo '<li><a href=""><i class="fa fa-angle-right"></i>';
              echo "Pengajuan Sidang Topik";
              echo '</a></li>';
            }
          ?>

        <?php 
            if($_SESSION["mahasiswa"]->jenjang!=null){
              echo "<li><a href='";
              echo route('mahasiswa/pengajuan-sidang-ta');
              echo "'/>";
              echo "<i class='fa fa-angle-right'></i>";
              echo "Pengajuan Permohonan Sidang";
              echo "</a></li>";
            }
          ?>

      <li><a href=""><i class="fa fa-angle-right"></i>
        <?php 
            if($_SESSION["mahasiswa"]->jenjang!= null){
              echo "Jadwal Sidang";
            }
          ?>
      </a></li>

      <li><a href="{{ route('mahasiswa/upload-hasil-ta') }}"><i class="fa fa-angle-right"></i>
        <?php 
            if($_SESSION["mahasiswa"]->jenjang!= null){
              echo "Hasil Sidang";
            }
          ?>
        
      </a></li>
    </ul>
  </li>
  
  <li class="treeview">
    <a href="{{ route('mahasiswa/pengumuman') }}">
      <i class="fa fa-bullhorn"></i> <span>Pengumuman</span>
    </a>
  </li>
</ul>
@endsection
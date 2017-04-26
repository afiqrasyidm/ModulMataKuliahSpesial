@extends('layouts.layout')

@section('contentSideBar')


<?php 
			if(!isset($_SESSION["role_user"])){
            	header( "refresh:0;/" );
				return "";
            }
			else if($_SESSION["role_user"]!= "dosen"){
            	
				header( "refresh:0;/forbidden_access" );
				return "";
            }
?>


<ul class="sidebar-menu">
<br>
  <li class="header-nav"><a href="{{ route('dosen/PA/home') }}"><span>Dosen PA</span></a></li>
  <li class="treeview">
    <a href="{{ asset ('#' )  }}">
      <i class="fa fa-edit"></i> <span>Tugas Akhir</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="{{ route('dosen/PA/verifikasi-permohonan-ta') }}"
        ><i class="fa fa-angle-right"></i>Lihat Permohonan TA</a></li>
    </ul>
  </li>
  
  <li class="treeview">
    <a href="{{ route('dosen/PA/pengumuman') }}">
      <i class="fa fa-bullhorn"></i> <span>Pengumuman</span>
    </a>
  </li>
  
    <li class="treeview">
    <a href="{{ route('homepage/dosen')  }}">
      <i class="fa fa-chevron-circle-left"></i> <span>Kembali ke Homepage</span> 
    </a>
 
  </li>
  
</ul>
@endsection
@extends('layouts.layout')

@section('contentSideBar')


<?php 
			if(!isset($_SESSION["user_login_industri"]) && !isset($_SESSION["role_user"]) ){
            	header( "refresh:0;/" );
				return "";
            }
			else if($_SESSION["role_user"]!= "industri"){
            	
				header( "refresh:0;/forbidden_access" );
				return "";
            }
?>

<ul class="sidebar-menu">
  <li class="header">MAIN NAVIGATION</li>
  <li class="treeview">
    <a href="{{ asset ('#' )  }}">
      <i class="fa fa-edit"></i> <span>Tugas Akhir</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="{{ route('industri/pengajuan-topik-ta') }}"><i class="fa fa-angle-right"></i>Pengajuan Topik</a></li>
      <li><a href="{{ route('industri/lihat-hasil-ta') }}"><i class="fa fa-angle-right"></i>Lihat Hasil TA</a></li>
    </ul>
  </li>
  
  <li class="treeview">
    <a href="{{ route('industri/pengumuman') }}">
      <i class="fa fa-bullhorn"></i> <span>Pengumuman</span> 
    </a>
  
  </li>
</ul>
@endsection
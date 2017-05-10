@extends('layouts.layout')

@section('contentSideBar')


<?php 
			if(!isset($_SESSION["role_user"])){
            	header( "refresh:0;/" );
				return "";
            }
			else if($_SESSION["role_user"]!= "staf"){
            	
				header( "refresh:0;/forbidden_access" );
				return "";
            }
?>



<ul class="sidebar-menu"><br>
  <li class="header-nav"><a href="{{ route('homepage/staf') }}">Staf</a></li>
  <li class="treeview">
    <a href="{{ asset ('#' )  }}">
      <i class="fa fa-edit"></i> <span>Tugas Akhir</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="{{ route('staf/verifikasi-permohonan-ta') }}"><i class="fa fa-angle-right"></i>Verifikasi Pengajuan TA</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="{{ asset ('#' )  }}">
      <i class="fa fa-graduation-cap"></i> <span>Sidang</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="{{ route('staf/verifikasi-permohonan-sidang-topik') }}"><i class="fa fa-angle-right"></i>Permohonan Sidang Topik</a></li>
      <li><a href="{{ route('staf/verifikasi-permohonan-sidang') }}"><i class="fa fa-angle-right"></i>Permohonan Sidang TA</a></li>
      <li><a href="{{ route('mahasiswa/pengajuan-pembimbing-ta') }}"><i class="fa fa-angle-right"></i>Atur Jadwal Sidang</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="{{ asset ('#' )  }}">
      <i class="fa fa-bullhorn"></i> <span>Pengumuman</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="{{ route('staf/post-pengumuman') }}"><i class="fa fa-angle-right"></i>Post Pengumuman</a></li>
    </ul>
  </li>
</ul>	

@endsection

@section('roleUser')
STAF
@endsection
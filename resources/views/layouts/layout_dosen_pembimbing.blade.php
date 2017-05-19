
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
  <li class="header-nav"><a href="{{ route('dosen/pembimbing/home') }}"><span>Dosen Pembimbing</span></a></li>
  <li class="treeview">
    <a href="{{ asset ('#' )  }}">
      <i class="fa fa-user"></i> <span>Bimbingan</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="{{ route('dosen/pembimbing/verifikasi-bimbingan') }}"><i class="fa fa-angle-right"></i>Verifikasi Bimbingan</a></li>
      <li><a href="{{ route('dosen/pembimbing/atur-jadwal-bimbingan') }}"><i class="fa fa-angle-right"></i>Jadwal Bimbingan</a></li>
      <li><a href="{{ route('dosen/pembimbing/verifikasi-log-bimbingan') }}"><i class="fa fa-angle-right"></i>Verifikasi Log Bimbingan</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="{{ asset ('#' )  }}">
      <i class="fa fa-graduation-cap"></i> <span>Sidang</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
     <li><a href="#"><i class="fa fa-angle-right"></i>Sidang Topik</a>
        <ul class="treeview-menu">
          <li><a href="{{ route('dosen/pembimbing/ubah-status-sidang-topik') }}"><i class="fa fa-angle-right"></i>Perizinan Sidang Topik</a></li>
          <li><a href="{{ route('dosen/pembimbing/list-jadwal-sidang-topik') }}"><i class="fa fa-angle-right"></i>List Jadwal Sidang Topik</a></li>
        </ul>
      <li><a href="#"><i class="fa fa-angle-right"></i>Sidang TA</a>
        <ul class="treeview-menu">
          <li><a href="{{ route('dosen/pembimbing/ubah-status-sidang') }}"><i class="fa fa-angle-right"></i>Perizinan Sidang TA</a></li>
          <li><a href="{{ route('dosen/pembimbing/list-jadwal-sidang') }}"><i class="fa fa-angle-right"></i>List Jadwal Sidang TA</a></li>
        </ul>
      </li>
      <li><a href="{{ route('dosen/pembimbing/dokumen-ta') }}"><i class="fa fa-angle-right"></i>Download Dokumen TA</a>  
      </li>
    </ul>
  </li>
  
  
  
  
  <li class="treeview">
    <a href="{{ route('homepage/dosen')  }}">
      <i class="fa fa-chevron-circle-left"></i> <span>Kembali ke Homepage</span>
    </a>
 
  </li>
  
  
  
  
</ul>
@endsection

@section('roleUser')
DOSEN PEMBIMBING
@endsection
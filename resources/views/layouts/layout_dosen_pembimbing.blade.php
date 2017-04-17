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
  <div class="col-md-2" style="text-indent: 50px">
    <a href="#"><i>Login as Dosen Pembimbing</i></a>
  </div>
  <br>
  <li class="header">MAIN NAVIGATION</li>
  <li class="treeview">
    <a href="{{ asset ('#' )  }}">
      <i class="fa fa-edit"></i> <span>Tugas Akhir</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="{{ route('dosen/pengajuan-topik-ta') }}"><i class="fa fa-angle-right"></i>Pengajuan Topik</a></li>
      <li><a href="{{ route('dosen/verifikasi-pengambilan-topik-ta') }}"><i class="fa fa-angle-right"></i>Verifikasi Pemohonan TA</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="{{ asset ('#' )  }}">
      <i class="fa fa-user"></i> <span>Bimbingan</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href=""><i class="fa fa-angle-right"></i>Verifikasi Bimbingan</a></li>
      <li><a href=""><i class="fa fa-angle-right"></i>Atur Jadwal Bimbingan</a></li>
      <li><a href=""><i class="fa fa-angle-right"></i>Verifikasi Log Bimbingan</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="{{ asset ('#' )  }}">
      <i class="fa fa-graduation-cap"></i> <span>Sidang</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="{{ route('dosen/pembimbing/ubah-status-sidang') }}"><i class="fa fa-angle-right"></i>Ubah Status Persidang</a></li>
      <li><a href="{{ route('dosen/pembimbing/list-jadwal-sidang') }}"><i class="fa fa-angle-right"></i>List Jadwal Sidang</a></li>
      <li><a href=""><i class="fa fa-angle-right"></i>Hasil Sidang</a>
        <ul class="treeview-menu">
          <li><a href=""><i class="fa fa-angle-right"></i>Feedback Sidang</a></li>
          <li><a href=""><i class="fa fa-angle-right"></i>Download Hasil TA</a></li>
        </ul>  
      </li>
    </ul>
  </li>
</ul>
@endsection
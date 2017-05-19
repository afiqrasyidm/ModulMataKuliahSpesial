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
 <li class="header-nav"><a href="{{ route('dosen/penguji/home') }}"><span>Dosen Penguji</span></a></li>
  <li class="treeview">
    <a href="{{ asset ('#' )  }}">
      <i class="fa fa-graduation-cap"></i> <span>Sidang</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
<<<<<<< HEAD
      <li><a href="{{ route('dosen/penguji/list-jadwal-sidang-topik') }}"><i class="fa fa-angle-right"></i>List Jadwal Sidang Topik</a></li>
       <li><a href="{{ route('dosen/penguji/list-jadwal-sidang') }}"><i class="fa fa-angle-right"></i>List Jadwal Sidang</a></li>
      
      <li><a href="#"><i class="fa fa-angle-right"></i>Dokumen Sidang </a>
          <ul class="treeview-menu">
              <li><a href="{{ route('dosen/penguji/feedback-sidang') }}"><i class="fa fa-angle-right"></i>Feedback Sidang</a></li>
               <li><a href="{{ route('dosen/penguji/dokumen-ta') }}"><i class="fa fa-angle-right"></i>Download Dokumen TA</a></li>
          </ul>
      </li>
      
=======
      <li><a href="{{ route('dosen/penguji/list-jadwal-sidang') }}"><i class="fa fa-angle-right"></i>List Sidang</a></li>      
>>>>>>> 1fc05f2bef7e0f2309a8a49c2efc1b330b9ba39e
    </ul>
  </li>


  
  <li class="treeview">
    <a href="{{ route('dosen/penguji/pengumuman') }}">
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

@section('roleUser')
DOSEN PENGUJI
@endsection
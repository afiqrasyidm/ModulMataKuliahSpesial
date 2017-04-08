@extends('layouts.layout')


@section('contentSideBar')
<ul class="sidebar-menu">
   
    <br>
  <li class="header">MAIN NAVIGATION</li>
  
  <li class="treeview">
    <a href="{{ asset ('#' )  }}">
      <i class="fa fa-edit"></i> <span>Tugas Akhir</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="{{ route('dosen/pengajuan-topik-ta') }}"><i class="fa fa-angle-right"></i>Pengajuan Topik</a></li>
	  <li><a href="{{ route('dosen/verifikasi-pengambilan-topik-ta') }}"><i class="fa fa-angle-right"></i>Verifikasi Pengambilan Topik</a></li>
    </ul>
  </li>
  
  <li class="treeview">
    <a href="{{ route('homepage/dosen')  }}">
      <i class="fa fa-dashboard"></i> <span>Kembali</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
  </li>
  
  
 @endsection



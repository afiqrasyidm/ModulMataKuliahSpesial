@extends('layouts.layout')

@section('contentSideBar')
<ul class="sidebar-menu">
  <li class="header">MAIN NAVIGATION</li>
  <li class="treeview">
    <a href="{{ asset ('#' )  }}">
      <i class="fa fa-dashboard"></i> <span>Tugas Akhir</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="#"><i class="fa fa-angle-right"></i>Lihat Permohonan TA</a></li>
    </ul>
  </li>
  
  <li class="treeview">
    <a href="{{ asset ('#' )  }}">
      <i class="fa fa-dashboard"></i> <span>Pengumuman</span>
    </a>
  </li>
</ul>
@endsection
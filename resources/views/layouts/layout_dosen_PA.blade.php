@extends('layouts.layout')

@section('contentSideBar')
<ul class="sidebar-menu">
<div class="col-md-2" style="text-indent: 63px">
      <a href="#"><i>Login as Dosen PA</i></a>
    </div>
    <br>
  <li class="header">MAIN NAVIGATION</li>
  <li class="treeview">
    <a href="{{ asset ('#' )  }}">
      <i class="fa fa-edit"></i> <span>Tugas Akhir</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="#"><i class="fa fa-angle-right"></i>Lihat Permohonan TA</a></li>
    </ul>
  </li>
  
  <li class="treeview">
    <a href="{{ route('dosen/PA/pengumuman') }}">
      <i class="fa fa-bullhorn"></i> <span>Pengumuman</span>
    </a>
  </li>
</ul>
@endsection
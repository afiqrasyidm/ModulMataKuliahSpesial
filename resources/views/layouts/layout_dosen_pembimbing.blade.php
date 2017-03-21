@extends('layouts.layout')

@section('contentSideBar')
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
      <li><a href=""><i class="fa fa-angle-right"></i>Pengajuan Topik</a></li>
      <li><a href=""><i class="fa fa-angle-right"></i>Verifikasi Pemohonan TA</a></li>
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
      <li><a href=""><i class="fa fa-angle-right"></i>Verifikasi Permohonan Sidang</a></li>
      <li><a href=""><i class="fa fa-angle-right"></i>Atur Jadwal Sidang</a></li>
      <li><a href=""><i class="fa fa-angle-right"></i>Hasil Sidang</a></li>
    </ul>
  </li>
</ul>
@endsection
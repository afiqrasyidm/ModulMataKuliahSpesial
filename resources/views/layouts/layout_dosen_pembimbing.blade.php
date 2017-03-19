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
      <i class="fa fa-dashboard"></i> <span>Tugas Akhir</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href=""><i class="fa fa-angle-right"></i>Atur Jadwal Sidang</a></li>
      <li><a href="#"><i class="fa fa-angle-right"></i>Pengajuan Topik TA<i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
              <li><a href=""><i class="fa fa-angle-right"></i>Feedback Sidang</a></li>
              <li><a href=""><i class="fa fa-angle-right"></i>Download Hasil TA</a></li>
          </ul>
      </li>
      
    </ul>
  </li>

  <li class="treeview">
    <a href="{{ route('dosen/pembimbing/pengumuman') }}">
      <i class="fa fa-dashboard"></i> <span>Pengumuman</span>
    </a>
  </li>
</ul>
@endsection
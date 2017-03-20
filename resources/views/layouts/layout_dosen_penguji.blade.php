@extends('layouts.layout')

@section('contentSideBar')
<ul class="sidebar-menu">
<div class="col-md-2" style="text-indent: 50px">
      <a href="#"><i>Login as Dosen Penguji</i></a>
    </div>
    <br>
  <li class="header">MAIN NAVIGATION</li>
  <li class="treeview">
    <a href="{{ asset ('#' )  }}">
      <i class="fa fa-dashboard"></i> <span>Sidang</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="{{ route('dosen/penguji/atur-jadwal-sidang') }}"><i class="fa fa-angle-right"></i>Atur Jadwal Sidang</a></li>
      <li><a href="#"><i class="fa fa-angle-right"></i>Hasil Sidang </a>
          <ul class="treeview-menu">
              <li><a href="{{ route('dosen/penguji/feedback-sidang') }}"><i class="fa fa-angle-right"></i>Feedback Sidang</a></li>
               <li><a href="{{ route('dosen/penguji/hasil-ta') }}"><i class="fa fa-angle-right"></i>Download Hasil TA</a></li>
          </ul>
      </li>
      
    </ul>
  </li>


  
  <li class="treeview">
    <a href="{{ route('dosen/penguji/pengumuman') }}">
      <i class="fa fa-dashboard"></i> <span>Pengumuman</span>
    </a>
  </li>
</ul>
@endsection
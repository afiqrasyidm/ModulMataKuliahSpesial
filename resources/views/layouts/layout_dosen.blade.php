@extends('layouts.layout')

@section('contentSideBar')
<ul class="sidebar-menu">
  <li class="header">MAIN NAVIGATION</li>
  <li class="treeview">
    <a href="{{ asset ('#' )  }}">
      <i class="fa fa-dashboard"></i> <span>Sidang</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="{{ route('dosen/atur-jadwal-sidang') }}"><i class="fa fa-angle-right"></i>Atur Jadwal Sidang</a></li>
      <li><a href="#"><i class="fa fa-angle-right"></i>Hasil Sidang <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
              <li><a href="{{ route('dosen/feedback-sidang') }}"><i class="fa fa-angle-right"></i>Feedback Sidang</a></li>
               <li><a href="#"><i class="fa fa-angle-right"></i>Download Hasil TA</a></li>
          </ul>
      </li>
      
    </ul>
  </li>


  
  <li class="treeview">
    <a href="{{ asset ('#' )  }}">
      <i class="fa fa-dashboard"></i> <span>Pengumuman</span>
    </a>
  </li>
</ul>
@endsection
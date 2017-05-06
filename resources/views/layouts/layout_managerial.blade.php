@extends('layouts.layout')

@section('contentSideBar')
<?php 
			if(!isset($_SESSION["role_user"])){
            	header( "refresh:0;/" );
				return "";
            }		
			else if($_SESSION["role_user"]!= "managerial"){
	
				header( "refresh:0;/forbidden_access" );
				return "";
            }
?>

<ul class="sidebar-menu">
   
    <br>
  <li class="header-nav"><a href="{{ route('homepage/managerial') }}"><span>Dashboard</span></a></li>
</ul>
@endsection

@section('roleUser')
Managerial
@endsection
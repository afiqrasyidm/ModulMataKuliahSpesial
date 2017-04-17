<!DOCTYPE html>
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
<html>
    <head>
        

        <title>Pilih Role Dosen</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="" rel="stylesheet" type="text/css">
    </head>
    <body>
        <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pilih Role Dosen</title>

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css' )  }}">
    <link rel="stylesheet" href="{{ asset ('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' )  }}">
    <link rel="stylesheet" href="{{ asset ('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css' )  }}">
    <link rel="stylesheet" href="{{ asset ('dist/css/AdminLTE.min.css' )  }}">
    <link rel="stylesheet" href="{{ asset ('dist/css/skins/_all-skins.min.css' )  }}">
    <link rel="stylesheet" href="{{ asset ('plugins/iCheck/flat/blue.css' )  }}">
    <link rel="stylesheet" href="{{ asset ('plugins/morris/morris.css' )  }}">
    <link rel="stylesheet" href="{{ asset ('plugins/jvectormap/jquery-jvectormap-1.2.2.css' )  }}">
    <link rel="stylesheet" href="{{ asset ('plugins/datepicker/datepicker3.css' )  }}">
    <link rel="stylesheet" href="{{ asset ('plugins/daterangepicker/daterangepicker-bs3.css' )  }}">
    <link rel="stylesheet" href="{{ asset ('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css' )  }}">
<link rel="stylesheet" href="{{ asset ('css/layout.css' )  }}">

  
  </head>
 
  <body class="hold-transition skin-blue sidebar-mini" style="background-color: #ecf0f5;">
      
        <div class='container' style="margin-top: 60px; min-height:550px">
            <div class='col-md-2'></div>
            <div class='col-md-8'>
                <div>
                    <center>
                        <br/>
                        
                        <h2 class="header-title">Pilih Role Dosen</h2>
                        <br><br>
                     
                       <a href="{{ route('dosen/pembimbing/home') }}"><button type="button" class=" btn btn-default ">Dosen Pembimbing</button></a>
                       
                        <br/><br>
                        <a href="{{ route('dosen/penguji/home') }}"><button type="button" class=" btn btn-default ">Dosen Penguji</button></a>
                        <br/><br>
                         <a href="{{ route('dosen/PA/home') }}"><button type="button" class="btn btn-default ">PA</button></a>
                        <br/><br>
                        <br/>
                        <i><h5>Ingin Ajukan Topik?<a href="{{ route('dosen/pengajuan-topik-ta') }}"> ajukan</a></h5></i>
                   
                    </center>
                </div>
            </div>
            <div class='col-md-2'></div>
        </div>

        <footer class="footer">
            <center>
                <div class="container">
                    <p class="text-muted">© 2017 copyright Propensi A3</p>
                </div>      
            </center>
        </footer>
    </body>
</html>

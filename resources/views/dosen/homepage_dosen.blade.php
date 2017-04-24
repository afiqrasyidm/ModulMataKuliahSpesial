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
      
<section class="content">
<div class="center-form">
<div class=".col-md-11">

<br><br>

              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header with-border">
                  <center><b><h1 class="header-title">Pilih Role Dosen</h1></b></center>
                </div><!-- /.box-header -->
                <div class="box-body">

        
      <section class="content">
        <center>
                       
                    <div class="col-xs-4"> 
        
                       <a href="{{ route('dosen/pembimbing/home') }}"><img src="{{ asset('img/dospem.png') }}" style="width: 60% ; height: 50%"><br><br>
                            <button type="button" class="btn btn-default" style="background-color: #f5f5f5; color: #1e3c61">Dosen Pembimbing</button></a>
                    </div>
                        
                    <div class="col-xs-4">
                        <a href="{{ route('dosen/penguji/home') }}"><img src="{{ asset('img/dospeng.png') }}" style="width: 60% ; height: 50%"><br><br>
                            <button type="button" class="btn btn-default" style="background-color: #f5f5f5; color: #1e3c61">Dosen Penguji</button></a>
                    </div>
                    <div class="col-xs-4">
                         <a href="{{ route('dosen/PA/home') }}"><img src="{{ asset('img/dosPA.png') }}" style="width: 60% ; height: 50%"><br><br>
                            <button type="button" class="btn btn-default" style="background-color: #f5f5f5; color: #1e3c61">PA</button></a>
                    </div>
                       
                   

            </center>
        </section><!-- /.content -->


     

                </div><!-- /.box-body -->
                <div class="box-footer">
            <center><i><h5>Ingin Ajukan Topik?<a href="{{ route('dosen/pengajuan-topik-ta') }}"> Ajukan</a></h5></i></center>
            </div>
              </div><!-- /.box -->
              </div>
            </div><!--/.col (right) -->

</section>
    </body>
</html>

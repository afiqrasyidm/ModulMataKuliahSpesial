<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--
        <script type="text/javascript" src="{{ URL::asset('js/app.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
        <link rel="stylesheet" href="{{ URL::asset('css/AdminLTE.min.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/AdminLTE.min.css') }}" />
        <script src="dist/js/app.js" type="text/javascript"></script>  
        --> 

        <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery-ui.min.js') }}"></script>
    
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}" />
        

        <title>Modul Mata Kuliah Spesial</title>

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
    <title>Pengajuan Mata Kuliah Spesial</title>

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

    <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
    </script>
  </head>
 
  <body class="hold-transition skin-blue sidebar-mini" style="background-color: #ecf0f5; ">
        
        <div class='container' style="margin-top: 20px; min-height:550px">
            <div class='col-md-2'></div>
            <div class='col-md-8'>
                <div>
                    <center>
                        <br/>
                    
                        
                        <img src="{{ asset  ('dist/img/logomks.png') }}" style="width: 15% ; height: 15%"><br>
                        <h2 class="title-index" style="color: #1e3c61">Modul Mata Kuliah Spesial</h2><br>
                        
                        <br><br>
                        <div class="col-xs-6">
                         <a href="{{ route('login-sso') }}">
                            <img src="{{ asset  ('dist/img/ui.png') }}" style="width: 60% ; height: 40%"><br><br>
                           <button type="button" class="btn btn-default" style="background-color: #f5f5f5; color: #1e3c61; ">Login SSO</button></a>
                        </div>
                        <div class="col-xs-6">
                        <a href="{{ route('login') }}">
                            <img src="{{ asset  ('dist/img/industri.png') }}" style="width: 60% ; height: 40%"><br><br>
                            <button type="button" class="btn btn-default" style="background-color: #f5f5f5; color: #1e3c61">Login Industri</button></a>
                        </div>
                    </center>
                </div>
            </div>
            <div class='col-md-2'></div>
        </div>

        <footer class="footer">
            <center>
                <div class="container">
                <br><br>
                    <p class="text-muted">© 2017 copyright Propensi A3</p>
                </div>      
            </center>
        </footer>
    </body>
</html>

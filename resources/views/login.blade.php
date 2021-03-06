<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>

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
 
  <body class="hold-transition skin-blue sidebar-mini" style="background-color: #ecf0f5;">
       
        <div class='container' style=" min-height:550px">
            <div class='col-md-2'></div>
            <div class='col-md-8'>
                <br><br><br>
                <br><br><br>
                <center><h2 class="title-index">Login Industri</h2></center>
                <br/>

                <form class="form-horizontal"  method="post" action="">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group">
                        <label class="control-label col-sm-3">Username:</label>
                        <div class="col-sm-6">
                          <input class="form-control" name="username">
                        </div>
                        <div class='col-sm-3'>
                          <?php echo $errors->first('username') ?>
                          <?php echo $errors->first('wrong_username') ?>
						     <?php echo $errors->first('wrong_password') ?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-3">Password:</label>
                        <div class="col-sm-6">
                          <input class="form-control" type="password" name="password">
                        </div>
                        <div class='col-sm-3'>
                          <?php echo $errors->first('password') ?>
                       
                    </div>
                      </div>
                      <center><button class="btn btn-primary" type="submit">Login</button></center>
                </form>

                <center><i><h6>belum punya akun? daftar <a href="{{ route('registrasi') }}">disini</a></h6></i></center>
            </div>
           
        </div>

        <footer class="footer">
            <center>
                <div class="container"><br><br>
                    <p class="text-muted">© 2017 copyright Propensi A3</p>
                </div>      
            </center>
        </footer>
    </body>
</html>

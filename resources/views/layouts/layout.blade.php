<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{!! asset('favicon.ico') !!}"/>

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
 
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">MKS</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">Modul MKS</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="{{ asset ('#' )  }}" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="{{ asset ('#' )  }}" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{ asset  ('dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
  				  
        					<span class="hidden-xs">
                  
            					<?php
								
								//selain industri
                        if(isset($_SESSION["user_login"])) {
                            echo $_SESSION["user_login"]->name;
                            
                        }
						//berarti industri
                       else if(isset($_SESSION["user_login_industri"])){
								  echo $_SESSION["user_login_industri"]->nama_industri;
                        }
						
                      ?>
                  </span>
				        </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{ asset  ('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                    
                    <p>
                    
                    <?php
							//selain industri
							 if(isset($_SESSION["user_login"])) {
								echo $_SESSION["user_login"]->name;
							 }
							 //berarti industri
							 else if(isset($_SESSION["user_login_industri"])){
								  echo $_SESSION["user_login_industri"]->nama_industri;
								}
								
						?>
            <div class="role-user">@yield('roleUser')</div>
                
                    </p>
                  
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="{{ asset ('#' )  }}" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{ route('logout-sso') }}" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
    
      
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ asset  ('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>
              <div class="name-user">
                <?php
                 
					//selain industri
				   if(isset($_SESSION["user_login"])) {
								echo $_SESSION["user_login"]->name;
							 }
							//berarti industri
					else if(isset($_SESSION["user_login_industri"])){
								  echo $_SESSION["user_login_industri"]->nama_industri;
						}
                ?>
                </div>
              </p>
            </div>
          </div>
           @yield('contentSideBar')
        </section>
      </aside>
      <div class="content-wrapper">  
          @yield('mainContent')
      </div>
    </div>

    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery-ui.min.js') }}"></script>
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script src="{{ asset  ('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset  ('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js') }}"></script>
    <script src="{{ asset  ('plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset  ('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset  ('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset  ('plugins/knob/jquery.knob.js') }}"></script>
    <script src="{{ asset  ('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js') }}"></script>
    <script src="{{ asset  ('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset  ('plugins/datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset  ('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <script src="{{ asset  ('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset  ('plugins/fastclick/fastclick.min.js') }}"></script>
    <script src="{{ asset  ('dist/js/app.min.js') }}"></script>
    <script src="{{ asset  ('dist/js/demo.js') }}"></script>
  </body>
</html>
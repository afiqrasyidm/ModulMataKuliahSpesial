@extends('layouts.layout')

@section('contentSideBar')

<ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="{{ asset ('#' )  }}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="{{ asset ('index.html' )  }}"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                <li><a href="{{ asset ('index2.html' )  }}"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="{{ asset ('#' )  }}">
                <i class="fa fa-files-o"></i>
                <span>Layout Options</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ asset ('pages/layout/top-nav.html' )  }}"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                <li><a href="{{ asset ('pages/layout/boxed.html' )  }}"><i class="fa fa-circle-o"></i> Boxed</a></li>
                <li><a href="{{ asset ('pages/layout/fixed.html' )  }}"><i class="fa fa-circle-o"></i> Fixed</a></li>
                <li><a href="{{ asset ('pages/layout/collapsed-sidebar.html' )  }}"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
              </ul>
            </li>
            <li>
              <a href="{{ asset ('pages/widgets.html' )  }}">
                <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li>
            <li class="treeview">
              <a href="{{ asset ('#' )  }}">
                <i class="fa fa-pie-chart"></i>
                <span>Charts</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ asset ('pages/charts/chartjs.html' )  }}"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                <li><a href="{{ asset ('pages/charts/morris.html' )  }}"><i class="fa fa-circle-o"></i> Morris</a></li>
                <li><a href="{{ asset ('pages/charts/flot.html' )  }}"><i class="fa fa-circle-o"></i> Flot</a></li>
                <li><a href="{{ asset ('pages/charts/inline.html' )  }}"><i class="fa fa-circle-o"></i> Inline charts</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="{{ asset ('#' )  }}">
                <i class="fa fa-laptop"></i>
                <span>UI Elements</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ asset ('pages/UI/general.html' )  }}"><i class="fa fa-circle-o"></i> General</a></li>
                <li><a href="{{ asset ('pages/UI/icons.html' )  }}"><i class="fa fa-circle-o"></i> Icons</a></li>
                <li><a href="{{ asset ('pages/UI/buttons.html' )  }}"><i class="fa fa-circle-o"></i> Buttons</a></li>
                <li><a href="{{ asset ('pages/UI/sliders.html' )  }}"><i class="fa fa-circle-o"></i> Sliders</a></li>
                <li><a href="{{ asset ('pages/UI/timeline.html' )  }}"><i class="fa fa-circle-o"></i> Timeline</a></li>
                <li><a href="{{ asset ('pages/UI/modals.html' )  }}"><i class="fa fa-circle-o"></i> Modals</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="{{ asset ('#' )  }}">
                <i class="fa fa-edit"></i> <span>Forms</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ asset ('pages/forms/general.html' )  }}"><i class="fa fa-circle-o"></i> General Elements</a></li>
                <li><a href="{{ asset ('pages/forms/advanced.html' )  }}"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                <li><a href="{{ asset ('pages/forms/editors.html' )  }}"><i class="fa fa-circle-o"></i> Editors</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="{{ asset ('#' )  }}">
                <i class="fa fa-table"></i> <span>Tables</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ asset ('pages/tables/simple.html' )  }}"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                <li><a href="{{ asset ('pages/tables/data.html' )  }}"><i class="fa fa-circle-o"></i> Data tables</a></li>
              </ul>
            </li>
            <li>
              <a href="{{ asset ('pages/calendar.html' )  }}">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
                <small class="label pull-right bg-red">3</small>
              </a>
            </li>
            <li>
              <a href="{{ asset ('pages/mailbox/mailbox.html' )  }}">
                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                <small class="label pull-right bg-yellow">12</small>
              </a>
            </li>
            <li class="treeview">
              <a href="{{ asset ('#' )  }}">
                <i class="fa fa-folder"></i> <span>Examples</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ asset ('pages/examples/invoice.html' )  }}"><i class="fa fa-circle-o"></i> Invoice</a></li>
                <li><a href="{{ asset ('pages/examples/profile.html' )  }}"><i class="fa fa-circle-o"></i> Profile</a></li>
                <li><a href="{{ asset ('pages/examples/login.html' )  }}"><i class="fa fa-circle-o"></i> Login</a></li>
                <li><a href="{{ asset ('pages/examples/register.html' )  }}"><i class="fa fa-circle-o"></i> Register</a></li>
                <li><a href="{{ asset ('pages/examples/lockscreen.html' )  }}"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                <li><a href="{{ asset ('pages/examples/404.html' )  }}"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                <li><a href="{{ asset ('pages/examples/500.html' )  }}"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                <li><a href="{{ asset ('pages/examples/blank.html' )  }}"><i class="fa fa-circle-o"></i> Blank Page</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="{{ asset ('#' )  }}">
                <i class="fa fa-share"></i> <span>Multilevel</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ asset ('#' )  }}"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li>
                  <a href="{{ asset ('#' )  }}"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="{{ asset ('#' )  }}"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                      <a href="{{ asset ('#' )  }}"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="{{ asset ('#' )  }}"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="{{ asset ('#' )  }}"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="{{ asset ('#' )  }}"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>
            </li>
            <li><a href="{{ asset ('documentation/index.html' )  }}"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
            <li class="header">LABELS</li>
            <li><a href="{{ asset ('#' )  }}"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="{{ asset ('#' )  }}"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="{{ asset ('#' )  }}"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Staf
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{ asset ('#' )  }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
		
		@yield('content')
		
		
    <!-- jQuery 2.1.4 -->
    <script src="{{ asset  ('plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset  ('https://code.jquery.com/ui/1.11.4/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{ asset  ('js/bootstrap.min.js') }}"></script>
    <!-- Morris.js charts -->
    <script src="{{ asset  ('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js') }}"></script>
    <script src="{{ asset  ('plugins/morris/morris.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset  ('plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- jvectormap -->
    <script src="{{ asset  ('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset  ('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset  ('plugins/knob/jquery.knob.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset  ('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js') }}"></script>
    <script src="{{ asset  ('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- datepicker -->
    <script src="{{ asset  ('plugins/datepicker/bootstrap-datepicker.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset  ('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <!-- Slimscroll -->
    <script src="{{ asset  ('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset  ('plugins/fastclick/fastclick.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset  ('dist/js/app.min.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset  ('dist/js/pages/dashboard.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset  ('dist/js/demo.js') }}"></script>
  </body>
</html>

@endsection
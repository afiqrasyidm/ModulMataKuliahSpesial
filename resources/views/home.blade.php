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
        

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="" rel="stylesheet" type="text/css">
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top"></nav>

        <div class='container' style="margin-top: 60px; min-height:550px">
            <div class='col-md-2'></div>
            <div class='col-md-8'>
                <div>
                    <center>
                        Anda Login Sebagai:
                        <?php
                            echo $_SESSION["user_login"]->role;
                        ?>
                        <a href="{{ route('logout-sso') }}"><button>logout</button></a>
                    </center>
                </div>
            </div>
            <div class='col-md-2'></div>
        </div>

        <footer class="footer">
            <center>
                <div class="container">
                    <p class="text-muted">Copyright Propensi A3 2017</p>
                </div>      
            </center>
        </footer>
    </body>
</html>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{mix('/css/site.min.css')}}">
        <!-- Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
        <!-- jquery -->
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <!-- [/] jquery -->

        <!-- bootstrap -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        
        <script type="text/javascript" src="{{mix('/js/site.min.js')}}"></script>
    </head>
    <body>
        <!--header-->
        <nav role="navigation" class="navbar navbar-custom">
            <div class="container-fluid">
                @include('include.header')
            </div>
        </nav>
        <!--end header-->
        <div class="container-fluid">
            <div class="row row-offcanvas row-offcanvas-left">
                <div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
                    @include('include.navigation')
                </div>
                <div class="col-xs-12 col-sm-9 content">
                    @yield('content')
                </div>
            </div>
        </div>

        <!--footer-->
        <div class="site-footer">
            @include('include.footer')
        </div>
        <!--end footer-->
    </body>
</html>

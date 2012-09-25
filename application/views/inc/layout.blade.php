
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <?php echo Asset::container('bootstrapper')->styles(); ?>
    <!-- <link href="../assets/css/bootstrap.css" rel="stylesheet"> -->
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <!-- <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet"> -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="/">¿Qu&eacute; te late?</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              @section('nav')
              <li><a href="/question/random">¡Contesta!</a></li>
              <li><a href="/question/create">¡Pregunta!</a></li>              
              @yield_section
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <!-- successes -->
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">     
              <!-- BEGIN: Successes -->
                @if (isset($successes))
                  @foreach ($successes as $success)
                      {{ Alert::success($success, false) }}    
                  @endforeach
                @endif
            <!-- END: Successes -->
        </div>
      </div>
      <div class="row-fluid">
        <div class="span12">     
              <!-- BEGIN: Errors -->
                @if (isset($errors))
                  @foreach ($errors as $error)
                      {{ Alert::error($error, false) }}    
                  @endforeach
                @endif
            <!-- END: Errors -->
        </div>
      </div>
    </div>

    <!-- content -->
    @section('content')
    @yield_section
    <!-- end content -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>
    -->
    <?php echo Asset::container('bootstrapper')->scripts(); ?>

  </body>
</html>

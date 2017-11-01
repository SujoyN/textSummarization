<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Add New Post | Admin</title>
    <link rel="stylesheet" type="text/css" href="{{asset('public/fontEnd/css/reset.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/fontEnd/css/text.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/fontEnd/css/grid.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/fontEnd/css/layout.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/fontEnd/css/nav.css')}}" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
    <link href="{{asset('public/fontEnd/css/fancy-button/fancy-button.css')}}" rel="stylesheet" type="text/css" />
    <!--Jquery UI CSS-->
    <link href="{{asset('public/fontEnd/css/themes/base/jquery.ui.all.css')}}" rel="stylesheet" type="text/css" />
    <!-- BEGIN: load jquery -->
    <script src="{{asset('public/fontEnd/js/jquery-1.6.4.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('public/fontEnd/js/jquery-ui/jquery.ui.core.min.js')}}"></script>
    <script src="{{asset('public/fontEnd/js/jquery-ui/jquery.ui.widget.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/fontEnd/js/jquery-ui/jquery.ui.accordion.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/fontEnd/js/jquery-ui/jquery.effects.core.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/fontEnd/js/jquery-ui/jquery.effects.slide.min.js')}}" type="text/javascript"></script>
    <!-- END: load jquery -->
    <!--jQuery Date Picker-->
    <script src="{{asset('public/fontEnd/js/jquery-ui/jquery.ui.widget.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/fontEnd/js/jquery-ui/jquery.ui.datepicker.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/fontEnd/js/jquery-ui/jquery.ui.progressbar.min.js')}}" type="text/javascript"></script>
    <!-- jQuery dialog related-->
    <script src="{{asset('public/fontEnd/js/jquery-ui/external/jquery.bgiframe-2.1.2.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/fontEnd/js/jquery-ui/jquery.ui.mouse.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/fontEnd/js/jquery-ui/jquery.ui.draggable.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/fontEnd/js/jquery-ui/jquery.ui.position.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/fontEnd/js/jquery-ui/jquery.ui.resizable.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/fontEnd/js/jquery-ui/jquery.ui.dialog.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/fontEnd/js/jquery-ui/jquery.effects.core.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/fontEnd/js/jquery-ui/jquery.effects.blind.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/fontEnd/js/jquery-ui/jquery.effects.explode.min.js')}}" type="text/javascript"></script>
    <!-- jQuery dialog end here-->
    <script src="{{asset('public/fontEnd/js/jquery-ui/jquery.ui.accordion.min.js')}}" type="text/javascript"></script>
    <!--Fancy Button-->
    <script src="{{asset('public/fontEnd/js/fancy-button/fancy-button.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/fontEnd/js/setup.js')}}" type="text/javascript"></script>
    <!-- Load TinyMCE -->
    <script src="{{asset('public/fontEnd/js/tiny-mce/jquery.tinymce.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>
		<script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
		    setSidebarHeight();
        });
    </script>
    <!-- /TinyMCE -->
    <style type="text/css">
		#tinymce{font-size:20px !important;}
    </style>
</head>
<body>
    <div class="container_12">
       @include('fontEnd.include.header')
       @include('fontEnd.include.menu')
       @include('fontEnd.include.form')
       @yield('mainContentShow')

        
		 
    </div>
    <div class="clear">
    </div>
    <div id="site_info">
        <p>
         &copy; Copyright <a href="#">Text Summarizing Project</a>. All Rights Reserved.
        </p>
    </div>
</body>
</html>

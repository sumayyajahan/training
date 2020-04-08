<!DOCTYPE HTML>
<html>
<head>
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="{{ asset('/') }}admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{ asset('/') }}admin/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="{{ asset('/') }}admin/css/lines.css" rel='stylesheet' type='text/css' />
<link href="{{ asset('/') }}admin/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="{{ asset('/') }}admin/js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="{{ asset('/') }}admin/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('/') }}admin/js/metisMenu.min.js"></script>
<script src="{{ asset('/') }}admin/js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="{{ asset('/') }}admin/js/d3.v3.js"></script>
<script src="{{ asset('/') }}admin/js/rickshaw.js"></script>
<style>
  input[type=text] 
  {
       background-color: #a4b2a8;
       border: 1px solid black;
  }
</style>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        @include('admin.includes.nav')
        <div id="page-wrapper">
        @yield('body')
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/') }}admin/js/bootstrap.min.js"></script>
</body>
</html>

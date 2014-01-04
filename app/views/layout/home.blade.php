@extends('layout')

@section('content')
    <div class="navbar navbar-head navbar-fixed-top" role="navigation">
    	<div class="container">
    		<a class="judul-header" href="#">Lightning</a>
    		<ul class="nav menu-top">
    			<li class="active"><a href="#">Menu 1</a></li>
    			<li><a href="#">Menu 2 </a></li>
    			<li><a href="#">Menu 2 </a></li>
    			<li><a href="#">Menu 2 </a></li>
    			<li><a href="#">Menu 2 </a></li>
    			<li><a href="#">Menu 2 </a></li>
    		</ul>
    	</div>
    </div>
@stop

@section('head')
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	    {{HTML::script('js/bootstrap.min.js')}}
	    {{HTML::style('css/bootstrap.min.css')}}
	    {{HTML::style('css/bootstrap-theme.min.css')}}
	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	    <![endif]-->
    <!-- End Bootstrap -->
    <!-- Main CSS -->
    	{{HTML::style('css/main-style.css')}}
    <!-- End Main CSS -->
@stop
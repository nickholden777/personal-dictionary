<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="_token" content="{{ csrf_token() }}">

    <title>Personal Dictionary</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,400italic,700" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="/style.css">
		<script src="https://use.fontawesome.com/0ba3408366.js"></script>
</head>
<body>

@include('parts.nav')

<div class="container-fluid" id="content">
    @yield('content')
</div>

<footer>
	<p>Copyright 2016 &copy; MIT License</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
<script type="text/javascript" src="/main.js"></script>
</body>
</html>

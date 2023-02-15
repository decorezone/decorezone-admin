<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Master Admin Pannel</title>
   <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link href="{{ URL::to('admin/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::to('admin/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
  rel="stylesheet">
  <link href="{{ URL::to('admin/css/font-awesome.css') }}" rel="stylesheet">
  <link href="{{ URL::to('admin/css/style.css') }}" rel="stylesheet">
  <link href="{{ URL::to('admin/css/pages/dashboard.css') }}" rel="stylesheet">
  <link href="{{ URL::to('admin/css/pages/signin.css') }}" rel="stylesheet" type="text/css">
  
  <link href="{{ URL::to('SelectTwo/select2.min.css') }}" rel="stylesheet">
    @yield('css')

</head>
<body>

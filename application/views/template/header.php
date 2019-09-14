<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style media="screen" type="text/css">
    .jumbotron{
      margin-bottom: 0px;
      background-color: rgb(67, 3, 228);
      color: white;
    }
    p.footer {
  		text-align: right;
  		font-size: 11px;
  		border-top: 1px solid #D0D0D0;
  		line-height: 32px;
  		padding: 0 10px 0 10px;
  		margin: 20px 0 0 0;
  	}
    code {
      font-family: Consolas, Monaco, Courier New, Courier, monospace;
      font-size: 12px;
      background-color: #f9f9f9;
      border: 1px solid #D0D0D0;
      color: #002166;
      display: block;
      margin: 14px 0 14px 0;
      padding: 12px 10px 12px 10px;
    }
  </style>
</head>
<body>
<div class="jumbotron jumbotron-fluid text-center">
<h1>Judul</h1>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <a class="navbar-brand" href="<?php echo base_url() ?>"><i class="fa fa-home"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Data</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Laporan</a>
    </li>
    <!-- Dropdown -->
   <li class="nav-item dropdown">
     <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       Menu
     </a>
     <div class="dropdown-menu">
       <a class="dropdown-item" href="#">Menu 1</a>
       <a class="dropdown-item" href="#">Menu 2</a>
       <a class="dropdown-item" href="#">Menu 3</a>
     </div>
   </li>
  </ul>
</div>
</nav>
<div class="container">

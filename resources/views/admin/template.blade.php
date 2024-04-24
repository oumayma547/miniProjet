<!--<!DOCTYPE html>
<html>
<head>
    <title>Admin Universitaire</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        header {
            background-color: #81878b;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }
        nav {
            background-color: #ddd;
            padding: 10px 20px;
            border-bottom: 1px solid #ccc;
            text-align: center;
        }
        nav a {
            text-decoration: none;
            color: #333;
            margin-right: 20px;
            transition: color 0.3s;
        }
        nav a:hover {
            color: #5f656b;
        }
        .container {
            display: flex;
        }
        .sidebar {
            flex: 1;
            background-color: #ddd;
            padding: 20px;
            border-right: 1px solid #ccc;
        }
        .content {
            flex: 4;
            padding: 20px;
        }
        footer {
            background-color: #81878b;
            color: #fff;
            text-align: center;
            padding: 10px 20px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        /* Style pour le tableau */
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar li {
            background-color: #f8f9fa;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .sidebar li a {
            display: block;
            color: #333;
            text-decoration: none;
        }
        .sidebar li a:hover {
            color: #007bff;
        }
        /* Style pour le tableau Liste des Filières */
.content table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    margin-bottom: 20px;
}

.content th, .content td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

.content th {
    background-color: #f2f2f2;
}

.content tr:nth-child(even) {
    background-color: #f9f9f9;
}

.content tr:hover {
    background-color: #f1f1f1;
}

    </style>
</head>
<body>
    <header>
        <h1>Institut Supérieur des Sciences Appliquées et de Technologie de Sousse</h1>
    </header>
    <nav>
        <a href="#"><i class="fas fa-home"></i> Accueil</a>
        <a href="dashboard/admin/home.blade.php"><i class="fas fa-user-graduate"></i> Étudiants</a>

        <a href="#"><i class="fas fa-chalkboard-teacher"></i> Enseignants</a>
        <a href="#"><i class="fas fa-book"></i> Cours</a>
        <a href="login.blade.php"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
    </nav>
    <div class="container">
        <div class="sidebar">
            <h2>Menu</h2>
            <ul>
                <li><a href="#"><i class="fas fa-book"></i> Liste des groupes</a></li>
                <li><a href="#"><i class="fas fa-user-friends"></i> Gérer les étudiants</a></li>
                <li><a href="#"><i class="fas fa-chalkboard-teacher"></i> Gérer les enseignants</a></li>
                <li><a href="#"><i class="fas fa-user-friends"></i> Emploi du temps</a></li>
                <li><a href="#"><i class="fas fa-chalkboard-teacher"></i> Les demandes</a></li>
                <li><a href="#"><i class="fas fa-book"></i> Calendrier des examens </a></li>
                <li><a href="#"><i class="fas fa-book"></i> Calendrier des Délibérations </a></li>
                <li><a href="#"><i class="fas fa-book"></i> Notes</a></li>
            </ul>
        </div>
        <div class="content">
          <h1>Liste des Filières</h1>
          <table>
              <thead>
                  <tr>
                      <th>Filière</th>
                      <th>Niveau</th>
                      <th>Nombre d'Étudiants</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>Science Informatique</td>
                      <td>Licence </td>
                      <td>120</td>
                  </tr>
                  <tr>
                    <td>IOT</td>
                    <td>Licence</td>
                    <td>80</td>
                </tr>
                <tr>
                  <td>Génie Civil</td>
                  <td>Licence</td>
                  <td>80</td>
              </tr>
                <tr>
                  <td>Mécanique</td>
                  <td>Licence</td>
                  <td>120</td>
              </tr>
                  <tr>
                      <td>Génie Civil</td>
                      <td>Master </td>
                      <td>90</td>
                  </tr>
                  <tr>
                    <td>Intelligence Artificielle</td>
                    <td>Master </td>
                    <td>60</td>
                </tr>
                  <tr>
                      <td>Génie Logiciel</td>
                      <td>Cycle ingénieur</td>
                      <td>50</td>
                  </tr>
              </tbody>
          </table>
      </div>

    </div>
    <footer>
        <p>&copy; 2024 Université de Sousse</p>
    </footer>
</body>
</html>-->

@extends('welcome')
@section('content')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!--<div class="preloader flex-column justify-content-center align-items-center">
<img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
</div>-->

<nav class="main-header navbar navbar-expand navbar-white navbar-light">

<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu"  role="button"><i class="fas fa-bars"></i></a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="index3.html" class="nav-link">Home</a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="#" class="nav-link">Contact</a>
</li>
</ul>

<ul class="navbar-nav ml-auto">

<li class="nav-item">
<a class="nav-link" data-widget="navbar-search"  role="button">
<i class="fas fa-search"></i>
</a>
<div class="navbar-search-block">
<form class="form-inline">
<div class="input-group input-group-sm">
<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-navbar" type="submit">
<i class="fas fa-search"></i>
</button>
<button class="btn btn-navbar" type="button" data-widget="navbar-search">
<i class="fas fa-times"></i>
</button>
</div>
</div>
</form>
</div>
</li>

<li class="nav-item dropdown">
<a class="nav-link" data-toggle="dropdown" >
<i class="far fa-comments"></i>
<span class="badge badge-danger navbar-badge">3</span>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<a  class="dropdown-item">

<div class="media">
<img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
<div class="media-body">
<h3 class="dropdown-item-title">
Brad Diesel
<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">Call me whenever you can...</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>

</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">

<div class="media">
<img src="{{ asset('vendor/adminlte/dist/img/AdminLTELogo.png') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
<div class="media-body">
<h3 class="dropdown-item-title">
John Pierce
<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">I got your message bro</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>

</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">

<div class="media">
<img src="{{ asset('vendor/adminlte/dist/img/AdminLTELogo.png') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
<div class="media-body">
<h3 class="dropdown-item-title">
Nora Silvester
<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">The subject goes here</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>

</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
</div>
</li>

<li class="nav-item dropdown">
<a class="nav-link" data-toggle="dropdown" href="#">
<i class="far fa-bell"></i>
<span class="badge badge-warning navbar-badge">15</span>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<span class="dropdown-item dropdown-header">15 Notifications</span>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<i class="fas fa-envelope mr-2"></i> 4 new messages
<span class="float-right text-muted text-sm">3 mins</span>
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<i class="fas fa-users mr-2"></i> 8 friend requests
<span class="float-right text-muted text-sm">12 hours</span>
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<i class="fas fa-file mr-2"></i> 3 new reports
<span class="float-right text-muted text-sm">2 days</span>
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link" data-widget="fullscreen" href="#" role="button">
<i class="fas fa-expand-arrows-alt"></i>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
<i class="fas fa-th-large"></i>
</a>
</li>
</ul>
</nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="index3.html" class="brand-link">
<img src="{{ asset('/images/issat.jpeg') }}" alt=" Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<span class="brand-text font-weight-light">AdminLTE 3</span>
</a>

<div class="sidebar">

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="{{ asset('vendor/adminlte/dist/img/AdminLTELogo.png') }}" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
@if (Auth::check())
  <a class="d-block">{{ Auth::user()->name }}</a>
@else
    <p>Unknown</p>
@endif
</div>
</div>

<div class="form-inline">
<div class="input-group" data-widget="sidebar-search">
<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-sidebar">
<i class="fas fa-search fa-fw"></i>
</button>
</div>
</div>
</div>

<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

<li class="nav-item menu-open">
<a href="/admin/index" class="nav-link active">
<i class="nav-icon fas fa-tachometer-alt"></i>
<p>
Dashboard
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="/admin/index/student" class="nav-link active">
<i class="far fa-circle nav-icon"></i>
<p>Etudiants</p>
</a>
</li>

<li class="nav-item">
<a href="/admin/index/student/new" class="nav-link active">
<i class="far fa-circle nav-icon"></i>
<p>Nouveau Etudiants</p>
</a>
</li>
<li class="nav-item">
<a href="/admin/index/teachers" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Enseignants</p>
</a>
</li>
<li class="nav-item">
<a href="/admin/index/teachers/new" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Nouveau Enseignants</p>
</a>
</li>

<li class="nav-item">
<a href="/admin/index/classrooms" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Classe</p>
</a>
</li>
<li class="nav-item">
<a href="/admin/index/classrooms/new" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Nouveau Classe</p>
</a>
</li>


<li class="nav-item">
<a href="/admin/index/departments" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Département</p>
</a>
</li>
<li class="nav-item">
<a href="/admin/index/departments/create" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Nouveau Département</p>
</a>
</li>


<li class="nav-item">
<a href="/admin/index/departments" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Départements</p>
</a>
</li>

<li class="nav-item">
<a href="/admin/index/demandes" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Demandes</p>
</a>
</li>

<li class="nav-item">
<a href="/admin/index/resultats" class="nav-link">
<i class="nav-icon fas fa-copy"></i>
<p>
Résultat
<i class="fas fa-angle-left right"></i>
<span class="badge badge-info right">6</span>
</p>
</a>

</li>
</ul>
</li>
<li class="nav-item">
<a href="/admin/index/emplois" class="nav-link">
<i class="nav-icon fas fa-th"></i>
<p>
Emplois
</p>
</a>
</li>
























</ul>
</nav>

</div>

</aside>

@yield('home-content')
<!--
<div class="content-wrapper">

<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1 class="m-0">Dashboard</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Dashboard v1</li>
</ol>
</div>
</div>
</div>
</div>


<section class="content">
<div class="container-fluid">

<div class="row">
<div class="col-lg-3 col-6">

<div class="small-box bg-info">
<div class="inner">
<h3>150</h3>
<p>New Orders</p>
</div>
<div class="icon">
<i class="ion ion-bag"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-success">
<div class="inner">
<h3>53<sup style="font-size: 20px">%</sup></h3>
<p>Bounce Rate</p>
</div>
<div class="icon">
<i class="ion ion-stats-bars"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-warning">
<div class="inner">
<h3>44</h3>
<p>User Registrations</p>
</div>
<div class="icon">
<i class="ion ion-person-add"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-danger">
<div class="inner">
<h3>65</h3>
<p>Unique Visitors</p>
</div>
<div class="icon">
<i class="ion ion-pie-graph"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

</div>


<div class="row">

<section class="col-lg-7 connectedSortable">

<div class="card">
<div class="card-header">
<h3 class="card-title">
<i class="fas fa-chart-pie mr-1"></i>
Sales
</h3>
<div class="card-tools">
<ul class="nav nav-pills ml-auto">
<li class="nav-item">
<a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
</li>
</ul>
</div>
</div>
<div class="card-body">
<div class="tab-content p-0">

<div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
<canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
</div>
<div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
<canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
</div>
</div>
</div>
</div>


<div class="card direct-chat direct-chat-primary">
<div class="card-header">
<h3 class="card-title">Direct Chat</h3>
<div class="card-tools">
<span title="3 New Messages" class="badge badge-primary">3</span>
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
<i class="fas fa-comments"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>

<div class="card-body">

<div class="direct-chat-messages">

<div class="direct-chat-msg">
<div class="direct-chat-infos clearfix">
<span class="direct-chat-name float-left">Alexander Pierce</span>
<span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
</div>

<img class="direct-chat-img" src="{{ asset('vendor/adminlte/dist/img/AdminLTELogo.png') }}" alt="message user image">

<div class="direct-chat-text">
Is this template really for free? That's unbelievable!
</div>

</div>


<div class="direct-chat-msg right">
<div class="direct-chat-infos clearfix">
<span class="direct-chat-name float-right">Sarah Bullock</span>
<span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
</div>

<img class="direct-chat-img" src="{{ asset('vendor/adminlte/dist/img/AdminLTELogo.png') }}" alt="message user image">

<div class="direct-chat-text">
You better believe it!
</div>

</div>


<div class="direct-chat-msg">
<div class="direct-chat-infos clearfix">
<span class="direct-chat-name float-left">Alexander Pierce</span>
<span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
</div>

<img class="direct-chat-img" src="{{ asset('vendor/adminlte/dist/img/AdminLTELogo.png') }}" alt="message user image">

<div class="direct-chat-text">
Working with AdminLTE on a great new app! Wanna join?
</div>

</div>


<div class="direct-chat-msg right">
<div class="direct-chat-infos clearfix">
<span class="direct-chat-name float-right">Sarah Bullock</span>
<span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
</div>

<img class="direct-chat-img" src="{{ asset('vendor/adminlte/dist/img/AdminLTELogo.png') }}" alt="message user image">

<div class="direct-chat-text">
I would love to.
</div>

</div>

</div>


<div class="direct-chat-contacts">
<ul class="contacts-list">
<li>
<a href="#">
<img class="contacts-list-img" src="{{ asset('vendor/adminlte/dist/img/AdminLTELogo.png') }}" alt="User Avatar">
<div class="contacts-list-info">
<span class="contacts-list-name">
Count Dracula
<small class="contacts-list-date float-right">2/28/2015</small>
</span>
<span class="contacts-list-msg">How have you been? I was...</span>
</div>

</a>
</li>

<li>
<a href="#">
<img class="contacts-list-img" src="{{ asset('vendor/adminlte/dist/img/AdminLTELogo.png') }}" alt="User Avatar">
<div class="contacts-list-info">
<span class="contacts-list-name">
Sarah Doe
<small class="contacts-list-date float-right">2/23/2015</small>
</span>
<span class="contacts-list-msg">I will be waiting for...</span>
</div>

</a>
</li>

<li>
<a href="#">
<img class="contacts-list-img" src="{{ asset('vendor/adminlte/dist/img/AdminLTELogo.png') }}" alt="User Avatar">
<div class="contacts-list-info">
<span class="contacts-list-name">
Nadia Jolie
<small class="contacts-list-date float-right">2/20/2015</small>
</span>
<span class="contacts-list-msg">I'll call you back at...</span>
</div>

</a>
</li>

<li>
<a href="#">
<img class="contacts-list-img" src="dist/img/user5-128x128.jpg" alt="User Avatar">
<div class="contacts-list-info">
<span class="contacts-list-name">
Nora S. Vans
<small class="contacts-list-date float-right">2/10/2015</small>
</span>
<span class="contacts-list-msg">Where is your new...</span>
</div>

</a>
</li>

<li>
<a href="#">
<img class="contacts-list-img" src="dist/img/user6-128x128.jpg" alt="User Avatar">
<div class="contacts-list-info">
<span class="contacts-list-name">
John K.
<small class="contacts-list-date float-right">1/27/2015</small>
</span>
<span class="contacts-list-msg">Can I take a look at...</span>
</div>

</a>
</li>

<li>
<a href="#">
<img class="contacts-list-img" src="dist/img/user8-128x128.jpg" alt="User Avatar">
<div class="contacts-list-info">
<span class="contacts-list-name">
Kenneth M.
<small class="contacts-list-date float-right">1/4/2015</small>
</span>
<span class="contacts-list-msg">Never mind I found...</span>
</div>

</a>
</li>

</ul>

</div>

</div>

<div class="card-footer">
<form action="#" method="post">
<div class="input-group">
<input type="text" name="message" placeholder="Type Message ..." class="form-control">
<span class="input-group-append">
<button type="button" class="btn btn-primary">Send</button>
</span>
</div>
</form>
</div>

</div>


<div class="card">
<div class="card-header">
<h3 class="card-title">
<i class="ion ion-clipboard mr-1"></i>
To Do List
</h3>
<div class="card-tools">
<ul class="pagination pagination-sm">
<li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
<li class="page-item"><a href="#" class="page-link">1</a></li>
<li class="page-item"><a href="#" class="page-link">2</a></li>
<li class="page-item"><a href="#" class="page-link">3</a></li>
<li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
</ul>
</div>
</div>

<div class="card-body">
<ul class="todo-list" data-widget="todo-list">
<li>

<span class="handle">
<i class="fas fa-ellipsis-v"></i>
<i class="fas fa-ellipsis-v"></i>
</span>

<div class="icheck-primary d-inline ml-2">
<input type="checkbox" value name="todo1" id="todoCheck1">
<label for="todoCheck1"></label>
</div>

<span class="text">Design a nice theme</span>

<small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>

<div class="tools">
<i class="fas fa-edit"></i>
<i class="fas fa-trash-o"></i>
</div>
</li>
<li>
<span class="handle">
<i class="fas fa-ellipsis-v"></i>
<i class="fas fa-ellipsis-v"></i>
</span>
<div class="icheck-primary d-inline ml-2">
<input type="checkbox" value name="todo2" id="todoCheck2" checked>
<label for="todoCheck2"></label>
</div>
<span class="text">Make the theme responsive</span>
<small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
<div class="tools">
<i class="fas fa-edit"></i>
<i class="fas fa-trash-o"></i>
</div>
</li>
<li>
<span class="handle">
<i class="fas fa-ellipsis-v"></i>
<i class="fas fa-ellipsis-v"></i>
</span>
<div class="icheck-primary d-inline ml-2">
<input type="checkbox" value name="todo3" id="todoCheck3">
<label for="todoCheck3"></label>
</div>
<span class="text">Let theme shine like a star</span>
<small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
<div class="tools">
<i class="fas fa-edit"></i>
<i class="fas fa-trash-o"></i>
</div>
</li>
<li>
<span class="handle">
<i class="fas fa-ellipsis-v"></i>
<i class="fas fa-ellipsis-v"></i>
</span>
<div class="icheck-primary d-inline ml-2">
<input type="checkbox" value name="todo4" id="todoCheck4">
<label for="todoCheck4"></label>
</div>
<span class="text">Let theme shine like a star</span>
<small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
<div class="tools">
<i class="fas fa-edit"></i>
<i class="fas fa-trash-o"></i>
</div>
</li>
<li>
<span class="handle">
<i class="fas fa-ellipsis-v"></i>
<i class="fas fa-ellipsis-v"></i>
</span>
<div class="icheck-primary d-inline ml-2">
<input type="checkbox" value name="todo5" id="todoCheck5">
<label for="todoCheck5"></label>
</div>
<span class="text">Check your messages and notifications</span>
<small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
<div class="tools">
<i class="fas fa-edit"></i>
<i class="fas fa-trash-o"></i>
</div>
</li>
<li>
<span class="handle">
<i class="fas fa-ellipsis-v"></i>
<i class="fas fa-ellipsis-v"></i>
</span>
<div class="icheck-primary d-inline ml-2">
<input type="checkbox" value name="todo6" id="todoCheck6">
<label for="todoCheck6"></label>
</div>
<span class="text">Let theme shine like a star</span>
<small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
<div class="tools">
<i class="fas fa-edit"></i>
<i class="fas fa-trash-o"></i>
</div>
</li>
</ul>
</div>

<div class="card-footer clearfix">
<button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button>
</div>
</div>

</section>


<section class="col-lg-5 connectedSortable">

<div class="card bg-gradient-primary">
<div class="card-header border-0">
<h3 class="card-title">
<i class="fas fa-map-marker-alt mr-1"></i>
Visitors
</h3>

<div class="card-tools">
<button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
<i class="far fa-calendar-alt"></i>
</button>
<button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
<i class="fas fa-minus"></i>
</button>
</div>

</div>
<div class="card-body">
<div id="world-map" style="height: 250px; width: 100%;"></div>
</div>

<div class="card-footer bg-transparent">
<div class="row">
<div class="col-4 text-center">
<div id="sparkline-1"></div>
<div class="text-white">Visitors</div>
</div>

<div class="col-4 text-center">
<div id="sparkline-2"></div>
<div class="text-white">Online</div>
</div>

<div class="col-4 text-center">
<div id="sparkline-3"></div>
<div class="text-white">Sales</div>
</div>

</div>

</div>
</div>


<div class="card bg-gradient-info">
<div class="card-header border-0">
<h3 class="card-title">
<i class="fas fa-th mr-1"></i>
Sales Graph
</h3>
<div class="card-tools">
<button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>
<div class="card-body">
<canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
</div>

<div class="card-footer bg-transparent">
<div class="row">
<div class="col-4 text-center">
<input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC">
<div class="text-white">Mail-Orders</div>
</div>

<div class="col-4 text-center">
<input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC">
<div class="text-white">Online</div>
</div>

<div class="col-4 text-center">
<input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC">
<div class="text-white">In-Store</div>
</div>

</div>

</div>

</div>


<div class="card bg-gradient-success">
<div class="card-header border-0">
<h3 class="card-title">
<i class="far fa-calendar-alt"></i>
Calendar
</h3>

<div class="card-tools">

<div class="btn-group">
<button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
<i class="fas fa-bars"></i>
</button>
<div class="dropdown-menu" role="menu">
<a href="#" class="dropdown-item">Add new event</a>
<a href="#" class="dropdown-item">Clear events</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">View calendar</a>
</div>
</div>
<button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>

</div>

<div class="card-body pt-0">

<div id="calendar" style="width: 100%"></div>
</div>

</div>

</section>

</div>

</div>
</section>

</div>-->

<footer class="main-footer">
<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
All rights reserved.
<div class="float-right d-none d-sm-inline-block">
<b>Version</b> 3.2.0
</div>
</footer>

<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>


</body>
@endsection


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/custom.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  @include('templates.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('templates.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Acceuil</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">

      <router-view></router-view>

    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Version 1.0
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2018.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#76B56F;">
        <h5 class="modal-title" id="exampleModalLabel">Rendez-vous</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="exampleFormControlInput1">Ville</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>kenitra</option>
              <option>rabat</option>
              <option>casa</option>
              <option>agadir</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Medecin</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>ABDELLAH ZADNASS</option>
              <option>ABDELALI BENABDELLAH</option>
              <option>ABDELAZIZ LOUGTEB</option>
              <option>ADIL OUMAST</option>
            </select>
          </div>
          <div class="form-group">
            <label>Date range:</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-calendar"></i>
                </span>
              </div>
              <input type="text" class="form-control float-right active" id="reservation">
            </div>
            <!-- /.input group -->
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">fermer</button>
        <button type="button" class="btn btn-lock btn-outline-success">Prendre rendez-vous</button>
      </div>
    </div>
  </div>
</div>

<script src="/js/app.js"></script>
<script>
  $('#reservation').datepicker();
</script>
</body>
</html>

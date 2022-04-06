<?php
/**
* OUMAIMA SABI
* DATE:01/03/2022
*/
require_once '../Couche_Service/Service_etat.php';
require_once '../Couche_Service/Service_Projet.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tableau de Bord</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="Editor-2.0.7/css/editor.dataTables.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>H</b>Y</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Hydro</b>leader</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="assets/img/user.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Oumaima Sabi</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="assets/img/user.png" class="img-circle" alt="User Image">

                <p>
                  Oumaima Sabi - GIS Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="assets/img/user.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Oumaima Sabi</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <li>
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Tableau de bord</span>
          </a>
        </li>
        <li>
          <a href="projet_caterogie.php">
            <i class="fa fa-envelope"></i> <span>Projet par catégorie</span>
          </a>
        </li>
        <li>
          <a href="index.php">
            <i class="fa fa-envelope"></i> <span>Projet par Etat</span>
          </a>
        </li>
        <li>
          <a href="projet_type_prj.php">
            <i class="fa fa-envelope"></i> <span>Type Projet</span>
          </a>
        </li>
        <li>
          <a href="projet_type_ceau.php">
            <i class="fa fa-envelope"></i> <span>Type Cours d'eau</span>
          </a>
        </li>
        <li>
          <a href="projet_type_dossier.php">
            <i class="fa fa-envelope"></i> <span>Type Dossier</span>
          </a>
        </li>
        <li>
          <a href="projet_natureceau.php">
            <i class="fa fa-envelope"></i> <span>Nature Cours d'eau</span>
          </a>
        </li>
        <li>
          <a href="projet_type_origineaep.php">
            <i class="fa fa-envelope"></i> <span>Projet par Origine Aep</span>
          </a>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mode d'Assainissement</span>
          </a>
        </li>
        <li class="treeview menu-close">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Pr_STAH</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pr_stah.php"><i class="fa fa-circle-o"></i>STAH</a></li>
          </ul>
        </li>
        <li class="treeview menu-close">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Pr_SGDPH</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pr_sgdph.php"><i class="fa fa-circle-o"></i>SGDPH</a></li>
          </ul>
        </li>
        <li class="treeview menu-close">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Pr_ABHT</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pr_abht.php"><i class="fa fa-circle-o"></i>ABHT</a></li>
          </ul>
        </li>
        <li class="treeview menu-close">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Pr_SEPRE</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pr_sepre.php"><i class="fa fa-circle-o"></i>SEPRE</a></li>
            <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <li class="treeview menu-close">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>PR_SQE</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pr_sqe.php"><i class="fa fa-circle-o"></i>SQE</a></li>
            <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tableau de bord
        <small>ADMIN</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Projet</span>
              <?php $b = new Projet_Service();
                    $bb= $b->nombre();
                    foreach($bb as $row){
                      echo '<span class="info-box-number">'.$row[0].'</span>';
                    }
              ?>
              <a href="" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Projets en Cours</span>
              <?php $b = new Etat_Service();
                    $bb= $b->nbnew();
                    foreach($bb as $row){
                      echo '<span class="info-box-number">'.$row[0].'</span>';
                    }
              ?>
              <a href="projet_nouveau.php" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Projet Cloturé</span>
              <?php $b = new Etat_Service();
                    $bb= $b->nbclose();
                    foreach($bb as $row){
                      echo '<span class="info-box-number">'.$row[0].'</span>';
                    }
              ?>
              <a href="projet_cloture.php" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    <div class="row">
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-6">

          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Etat du Dossier</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChart" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>

        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-6">

          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Payement</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChart1" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>

    </div>
      <!-- /.row -->

    <div class="row">
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-8">

          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Charte </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="barchart" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>


    </div>

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Liste des Projets trié par durée de temps</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-wrench"></i></button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              <!-- </div>
              <div class="box-header">
                  <h3 class="box-title">Liste des Projets d'investissements</h3>
              </div> -->
              <div class="box-body" style="overflow-x:auto;">
                <table id="example" class="table table-bordered table-striped" >
                  <thead>
                    <tr>
                      <th>id_projet</th>
                      <th>numéro de dossier</th>
                      <th>commune</th>
                      <th>province</th>
                      <th>maitre_ouvrage</th>
                      <th>intitule_projet</th>
                      <th>la durée en jour</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id projet</th>
                      <th>Numéro de dossier</th>
                      <th>Commune</th>
                      <th>Province</th>
                      <th>Maitre d'ouvrage</th>
                      <th>Intitule de projet</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          <!-- /.box -->
          </div>
        <!-- /.col -->
        </div>
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Liste des Projets trié par durée de temps et leur etat</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-wrench"></i></button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              <!-- </div>
              <div class="box-header">
                  <h3 class="box-title">Liste des Projets d'investissements</h3>
              </div> -->
              <div class="box-body" style="overflow-x:auto;">
                <table id="example2" class="table table-bordered table-striped" >
                  <thead>
                    <tr>
                      <th>id_projet</th>
                      <th>numéro de dossier</th>
                      <th>commune</th>
                      <th>province</th>
                      <th>maitre_ouvrage</th>
                      <th>intitule_projet</th>
                      <th>la durée en jour</th>
                      <th>Etat du dossier </th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id projet</th>
                      <th>Numéro de dossier</th>
                      <th>Commune</th>
                      <th>Province</th>
                      <th>Maitre d'ouvrage</th>
                      <th>Intitule de projet</th>
                      <th>la durée en jour</th>
                      <th>Etat du dossier </th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          <!-- /.box -->
          </div>
        <!-- /.col -->
        </div>
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Liste des Projets d'investissements</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-wrench"></i></button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              <!-- </div>
              <div class="box-header">
                  <h3 class="box-title">Liste des Projets d'investissements</h3>
              </div> -->
              <div class="box-body" style="overflow-x:auto;">
                <table id="example1" class="table table-borderless" style="font-weight: bolder!important;" >
                
                  <thead style="font-weight:normal !important;">
                    <tr>
                      <th>id_projet</th>
                      <th>numéro de dossier</th>
                      <th>commune</th>
                      <th>province</th>
                      <th>maitre_ouvrage</th>
                      <th>intitule_projet</th>
                      <th>action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id projet</th>
                      <th>Numéro de dossier</th>
                      <th>Commune</th>
                      <th>Province</th>
                      <th>Maitre d'ouvrage</th>
                      <th>action</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          <!-- /.box -->
          </div>
        <!-- /.col -->
        </div>
      </div>
      <!-- /.row -->

    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->

      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- DataTables -->
<script src="https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<!-- Load Esri Leaflet from CDN -->
<script src="https://unpkg.com/esri-leaflet@3.0.7/dist/esri-leaflet.js" integrity="sha512-ciMHuVIB6ijbjTyEdmy1lfLtBwt0tEHZGhKVXDzW7v7hXOe+Fo3UA1zfydjCLZ0/vLacHkwSARXB5DmtNaoL/g==" crossorigin=""></script>
<!-- Load Esri Leaflet Vector from CDN -->
<script src="https://unpkg.com/esri-leaflet-vector@3.1.1/dist/esri-leaflet-vector.js" integrity="sha512-7rLAors9em7cR3/583gZSvu1mxwPBUjWjdFJ000pc4Wpu+fq84lXF1l4dbG4ShiPQ4pSBUTb4e9xaO6xtMZIlA==" crossorigin=""></script>
<script src="//cdn.datatables.net/plug-ins/1.11.5/api/row().show().js"></script>  

<script>
$(function () {
  // $('#example1').on('click', 'td.editor-edit', function (e) {  	
  //    window.location.replace("http://localhost/projectpfe/Vue/index.php?id=");
      
  // });   
  $('#example1').DataTable({
      "paging"   : true,
      "lengthChange": true,
      "searching "  : true,
      "ordering"    : true,
      "info  "      : true,
      "autoWidth"   : true,
      "scrollX": true,
      "sScrollX": '100%',
      ajax: {url: "http://localhost/projectpfe/data/data_prj.php",type: 'POST',dataSrc: 'data'},
      columns: [{ data:'id'},
                { data: 'numero_dossier' },
                { data: 'commune' },
                { data: 'province' },
                { data: 'maitre_ouvrage' },
                {data:'intitule_projet'},
                {
                  data: 'id',
                  className: "dt-center editor-edit",
                  render: function (data) {
                        return '<a href="http://localhost/projectpfe/Vue/prj_details.php?id='+ data+'"><i class="fa fa-fw fa-eye"/></a>'},
                  orderable: false,   
                },
              ],
  });

  $('#example').DataTable({
      "paging"   : true,
      "lengthChange": true,
      "searching "  : true,
      "ordering"    : true,
      "info  "      : true,
      "autoWidth"   : true,
      "scrollX": true,
      "sScrollX": '100%',
      ajax: {url: "http://localhost/projectpfe/data/data_prj_duree_projet.php",type: 'POST',dataSrc: 'data'},
      columns: [{ data:'id'},{ data: 'numero_dossier' },{ data: 'commune' },{ data: 'province' },{ data: 'maitre_ouvrage' },{data:'intitule_projet'},{data:'duree'}],
      select: true,
  });

  $('#example2').DataTable({
      "paging"   : true,
      "lengthChange": true,
      "searching "  : true,
      "ordering"    : true,
      "info  "      : true,
      "autoWidth"   : true,
      "scrollX": true,
      "sScrollX": '100%',
      ajax: {url: "http://localhost/projectpfe/data/data_prj_duree_etat_projet.php",type: 'POST',dataSrc: 'data'},
      columns: [{ data:'id'},{ data: 'numero_dossier' },{ data: 'commune' },{ data: 'province' },{ data: 'maitre_ouvrage' },{data:'intitule_projet'},{data:'duree'},{data:'etat_dossier'}],
      select: true,
  });

    $.ajax({
      url:"http://localhost/projectpfe/data/data_chart_etat.php",
      type:"GET",
      data:'data',
      // dataType:"json",
      // dataSrc: 'data',
      success:function(data){
        console.log(data);
        var d =JSON.parse(data);
        var d1= Object.keys(d.data).length;
        // console.log(d1);
        var nb= Object.keys(d.data[0])[0]; // return name of index1
        // console.log(d.data[2].nombre);

        var n = [];
				var e = [];
        var c=[];
        for(var count = 0; count <d1; count++)
				{
					console.log(n.push(d.data[count].nombre));
					e.push(d.data[count].etat);
          c.push(d.data[count].color);
				}
        // console.log(n);
        
        var ctxt=$("#pieChart").get(0).getContext('2d');
        var data2={
          labels : e,
          datasets : [
            {
              label : "etat",
              data: n,
              backgroundColor:c,
            }

          ]
        }

        var chart1= new Chart ( ctxt , {
          type:"doughnut",
          data: data2
        }
        );
      },
    });

    $.ajax({
			url:"http://localhost/projectpfe/data/data_chart_pay.php",
			type:"GET",
      data:'data',
      // dataType:"json",
      // dataSrc: 'data',
			
      success:function(data){
        console.log(data);
        var d =JSON.parse(data);
        var d1= Object.keys(d.data).length;
        // console.log(d1);
        var nb= Object.keys(d.data[0])[0]; // return name of index1
        // console.log(d.data[2].nombre);

        var n = [];
				var p = [];
        var c=[];
        for(var count = 0; count <d1; count++)
				{
					n.push(d.data[count].nombre);
          if(d.data[count].payement===false){
            p.push('non payé');
          }else {
            p.push('payé');
          }
          c.push(d.data[count].color);
				}
        // console.log(n);
        
        var ctxt=$("#pieChart1").get(0).getContext('2d');
        var data2={
          labels : p,
          datasets : [
            {
              label : "etat",
              data: n,
              backgroundColor:c,
            }

          ]
        }

        var chart1= new Chart ( ctxt , {
          type:"doughnut",
          data: data2
        }
        );
      },
    });
    
    $.ajax({
      url:"http://localhost/projectpfe/data/data_chart_mois.php",
      type:"GET",
        data:'data',
        // dataType:"json",
        // dataSrc: 'data',
			
        success:function(data){
            console.log(data);
            var d =JSON.parse(data);
            var d1= Object.keys(d.data).length;
            // console.log(d1);
            var nb= Object.keys(d.data[0])[0]; // return name of index1
            // console.log(d.data[2].nombre);

            var n = [];
            var p = [];
            var c=[];
            var e=[];
            var color=[];
            var ma=[];
            for(var count = 0; count <d1; count++){
                n.push(d.data[count].nombre);
                p.push(d.data[count].mois);
                c.push(d.data[count].annee);
                e.push(d.data[count].etat_dossier);
                color.push(d.data[count].color);
                ma.push(d.data[count].mois_annee);
                }
            // console.log(n);
        
            var ctxt=$("#barchart").get(0).getContext('2d');
            var data2={
                labels :ma,
                datasets : [
                {
                    data: n,
                    backgroundColor:color,
                },
                ]
            }
            

          var chart1= new Chart ( ctxt , {
            type:"bar",
            data: data2,
            options: {
              legend: { display: true },
              title: {
                display: true,
                text: 'Nombre des projets chaque année selon leur etat'
              }
            }
          });
        },
      });
});
</script>
</body>
</html>

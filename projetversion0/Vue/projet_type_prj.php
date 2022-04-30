<?php
/**
* OUMAIMA SABI
* DATE:23/02/2022
*/
require_once '../Couche_Service/Service_type_projet.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>prj</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

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
                  Oumaima Sabi- Gis Developer
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
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
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
        Listes des Grands Projets et Petit Projets 
        <small>Liste detaillée</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Grand Projet</span>
              <?php $b = new Type_projet_Service();
                    $bb= $b->nbprjgd();
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
              <span class="info-box-text">Petit Projet</span>
              <?php $b = new Type_projet_Service();
                    $bb= $b->nbprjpt();
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
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Liste detaillée des Grands Projets</h3>
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
            </div>
            
              <!-- </div>
            //.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Type de Projet</th>
                  <th>Id Projet</th>
                  <th>Numero de dossier</th>
                  <th>Commune</th>
                  <th>Province</th>
                  <th>Maitre d'ouvrage</th>
                  <th>Intitulé de projet</th>
                  
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th>Type de Projet</th>
                  <th>Id Projet</th>
                  <th>Numero de dossier</th>
                  <th>Commune</th>
                  <th>Province</th>
                  <th>Maitre d'ouvrage</th>
                  <th>Intitulé de projet</th>
                  
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Liste detaillée des Petits Projets</h3>
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
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Type de Projet</th>
                  <th>Id Projet</th>
                  <th>Numero de dossier</th>
                  <th>Commune</th>
                  <th>Province</th>
                  <th>Maitre d'ouvrage</th>
                  <th>Intitulé de projet</th>
                  
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th>Type de Projet</th>
                  <th>Id Projet</th>
                  <th>Numero de dossier</th>
                  <th>Commune</th>
                  <th>Province</th>
                  <th>Maitre d'ouvrage</th>
                  <th>Intitulé de projet</th>
                  
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
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
  <!-- <aside class="main-sidebar">
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
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
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
          <a href="pages/mailbox/mailbox.php">
            <i class="fa fa-envelope"></i> <span>Type Cours d'eau</span>
          </a>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.php">
            <i class="fa fa-envelope"></i> <span>Nature Cours d'eau</span>
          </a>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.php">
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
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
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
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
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
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
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
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
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
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside> -->
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
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable({
      "paging"   : true,
      "lengthChange": true,
      "searching "  : true,
      "ordering"    : true,
      "info  "      : true,
      "autoWidth"   : true,
      "scrollX": true,
      "sScrollX": '100%',
      ajax: {url: "http://localhost/projectpfe/data/data_prj_type_prjgd.php",type: 'POST',dataSrc: 'data'},
      columns: [{data:'type_projet'},{ data:'id'},{ data: 'numero_dossier' },{ data: 'commune' },{ data: 'province' },{ data: 'maitre_ouvrage' },{data:'intitule_projet'}]
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
      ajax: {url: "http://localhost/projectpfe/data/data_prj_type_prjpt.php",type: 'POST',dataSrc: 'data1'},
      columns: [{data:'type_projet'},{ data:'id'},{ data: 'numero_dossier' },{ data: 'commune' },{ data: 'province' },{ data: 'maitre_ouvrage' },{data:'intitule_projet'}],
    });
  })
</script>
</body>
</html>
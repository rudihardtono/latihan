<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" contet="noindex,nofollow">
    <title>CMS | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo asset_uri().'plugin/' ?>bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo asset_uri().'plugin/' ?>default/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo asset_uri().'plugin/' ?>default/css/skins/_all-skins.min.css">
    <!-- Custom CSS Page -->
    <link rel="stylesheet" href="<?php echo asset_uri(); ?>css/layout.css">

    <link rel="stylesheet" href="<?php echo asset_uri().'plugin/' ?>datatables/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo asset_uri().'plugin/' ?>datatables/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo asset_uri().'plugin/' ?>datatables/dataTables.bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo asset_uri().'plugin/' ?>jquery-validation/jquery-validate.css">

    <!-- var -->
    <script>
        var urlWeb='<?php echo base_url() ?>'
    </script>
    <script>
        var urlData='<?php echo base_url("$class") ?>'
    </script>
    <script>
        var mode='<?php echo $mode ?>'
    </script>

    <!-- jQuery 2.2.3 -->
    <script src="<?php echo asset_uri().'plugin/' ?>jQuery/jquery-2.2.3.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>C</b>MS</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>C</b>MS</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo asset_uri().'plugin/' ?>default/img/avatar.png" class="user-image" alt="User Image">
                                <span class="hidden-xs"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo asset_uri().'plugin/' ?>default/img/avatar.png" class="img-circle" alt="User Image">
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Change Password</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo base_url('logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
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
                        <img src="<?php echo asset_uri().'plugin/' ?>default/img/avatar.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>
                            <?php echo $this->session->userdata('name') ?>
                        </p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="<?php echo base_url(); ?>">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(" data "); ?>">
                            <i class="fa fa-user"></i> <span>Data</span>
                        </a>
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
                    <?php echo isset($title)?$title:'&nbsp;'; ?>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url() ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                </ol>
            </section>
            <!-- content -->
            <?php echo $content; ?>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.3.8
            </div>
            <strong>Copyright &copy; 2017-<?php echo date('Y') ?> <a href="#">Rudi H</a>.</strong> All rights reserved.
        </footer>

    </div>
    <!-- ./wrapper -->

    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo asset_uri().'plugin/' ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo asset_uri().'plugin/' ?>bootstrap/js/bootstrap-filestyle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo asset_uri().'plugin/' ?>default/js/app.min.js"></script>

    <script src="<?php echo asset_uri().'plugin/' ?>datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo asset_uri().'plugin/' ?>datatables/dataTables.bootstrap.js"></script>
    <script src="<?php echo asset_uri().'plugin/' ?>datatables/vfs_fonts.js"></script>
    <script src="<?php echo asset_uri().'plugin/' ?>datatables/dataTables.responsive.min.js"></script>
    <script src="<?php echo asset_uri().'plugin/' ?>datatables/responsive.bootstrap.min.js"></script>
    <script src="<?php echo asset_uri().'plugin/' ?>datatables/jquery.datatables.init.js"></script>

    <script src="<?php echo asset_uri().'plugin/' ?>jquery-validation/jquery.validate.min.js"></script>
    <script src="<?php echo asset_uri().'plugin/' ?>gaspare-sganga/loadingoverlay.min.js"></script>

    <script src="<?php echo asset_uri().'js/page/'.$class.'.js' ?>"></script>

    <script src="<?php echo asset_uri().'js/main.js' ?>"></script>
    <!-- Custom JS Page -->

</body>

</html>
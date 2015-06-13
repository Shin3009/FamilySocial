<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>FamilySocial | Home</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('lib'); ?>/css/bootstrap.min.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('lib'); ?>/css/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('lib'); ?>/css/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('lib'); ?>/css/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('lib'); ?>/css/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('lib'); ?>/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('lib'); ?>/css/AdminLTE.css">
    <!-- Mine style -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('lib'); ?>/css/mine-css/moneyManagement.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="pace-done skin-black fixed">
    <!-- header logo: style can be found in header.less -->
    <?php $this->load->view('layout/header'); ?>
    <div class="wrapper row-offcanvas row-offcanvas-left">
      <!-- Left side column. contains the logo and sidebar -->
      <?php $this->load->view('layout/navigator'); ?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <?php $this->load->view($show, $data = ''); ?>
    </div><!-- ./wrapper -->

    <!-- add new calendar event modal -->


    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Morris.js charts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?php echo base_url('lib'); ?>/js/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url('lib'); ?>/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url('lib'); ?>/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url('lib'); ?>/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url('lib'); ?>/js/plugins/jqueryKnob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url('lib'); ?>/js/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url('lib'); ?>/js/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url('lib'); ?>/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('lib'); ?>/js/plugins/iCheck/icheck.min.js"></script>

    <!-- AdminLTE App -->
    <script src="<?php echo base_url('lib'); ?>/js/AdminLTE/app.js"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url('lib'); ?>/js/AdminLTE/dashboard.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('lib'); ?>/js/AdminLTE/demo.js"></script>

  </body>
</html>

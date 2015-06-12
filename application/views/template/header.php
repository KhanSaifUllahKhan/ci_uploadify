<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mp3.com</title>
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/fontawesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/uploadify.css">
    <link href="<?php echo base_url();?>assets/css/jumbotron.css" rel="stylesheet">
        
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body style="height: 100%">
	<div class="container-fluid" style="height: 45px; background-color: black; width: 100%; padding: 0px; position: fixed; z-index: 999">
	  <div class="col-lg-2 col-md-3 col-sm-7 col-xs-3" style="padding-top: 5px; font-family: sans-serif; font-size: 22px ; color: #FFFFFF">
	  	<img src="<?php echo base_url();?>images/favicon.ico" alt="CI" class="img-circle" style='height: 35px' />
	  	<span class="hidden-xs">mp3.com</span>
	  </div>
	  <div class="col-lg-6 col-md-4 hidden-sm hidden-xs"></div>
	  <div class="col-lg-4 col-md-5 col-sm-5 col-xs-9" style="padding-top: 5px; height: 45px">
	  	<span style="float: right">
       <a href="<?php echo base_url();?>index.php" data-toggle="modal" class="btn btn-success" accesskey='v'><span class="hidden-sm hidden-xs"><u>V</u>iew Audio </span><i class="fa fa-music"></i></a>
       <a href="<?php echo base_url();?>index.php/uploadify/upload" data-toggle="modal" class="btn btn-info" accesskey='u'><span class="hidden-sm hidden-xs"><u>U</u>pload Audio </span><i class="fa fa-upload"></i></a>
	  	</span>
	  </div>
	</div>
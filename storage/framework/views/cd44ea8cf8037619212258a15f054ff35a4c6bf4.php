<!doctype html>
<html  lang="<?php echo e(app()->getLocale()); ?>">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="/assets/img/favicon.png">
		
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title> <?php echo e(config('app.name')); ?> <?php echo app('translator')->getFromJson('app.slogan'); ?></title>
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/core.css" rel="stylesheet" />
    <link href="/assets/css/bootstrap-extend.css" rel="stylesheet" />
    <link href="/assets/css/spinkit.css" rel="stylesheet" />
    <link href="/assets/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="/plugins/toastr/toastr.min.css" rel="stylesheet" />
    <link href="/plugins/sweetalert2/sweetalert2.min.css" rel="stylesheet" />

    
    <link rel="stylesheet" href="/assets/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="/assets/fonts/brand-icons/brand-icons.min.css">
    <link rel="stylesheet" href="/assets/fonts/flag-icon/flag-icon.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <!-- Inline -->
    <!--     Font Awesome     -->
    <link href="/assets/fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>


        <?php echo $__env->yieldContent('css'); ?>

  
</head>

<body>
    
        <?php echo $__env->yieldContent('header'); ?>

        <?php echo $__env->yieldContent('content'); ?>

    
</body>
    
    <!--   Core JS Files   -->
    <script src="/js/app.js"></script>
    <script src="/assets/js/jquery.slimscroll.js"></script>
    <script src="/assets/js/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="/assets/js/waves.js"></script>
    <script src="/assets/js/jquery.bootstrap-touchspin.min.js"></script>
    <script src="/plugins/toastr/toastr.min.js"></script>
    <script src="/plugins/sweetalert2/sweetalert2.min.js"></script>

    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/gsdk-checkbox.js"></script>
    <script src="/assets/js/gsdk-radio.js"></script>
    <script src="/assets/js/gsdk-bootstrapswitch.js"></script>
    <script src="/assets/js/get-shit-done.js"></script>
    <script src="/assets/js/custom.js"></script>

    <script src="/js/jquery.app.js"></script>
    <script src="/js/main.js"></script>
    <!--<script src="/assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>-->

    <?php echo $__env->yieldContent('js'); ?>

</html>
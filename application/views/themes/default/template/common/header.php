<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo asset_url('bootstrap/css/bootstrap.min.css'); ?>" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo asset_url('font-awesome/css/font-awesome.min.css'); ?>" />
    <!--// Online Font Awesome, incase you don't want to host it on your server
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
    //-->

    <!-- Custom css -->
    <link type="text/css" rel="stylesheet" media="screen" href="<?php echo asset_url('style.css'); ?>" />

    <!-- HTML 5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- [if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!-- Include all compile plugins below -->
    <script src="<?php echo asset_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo asset_url('common.js'); ?>"></script>

</head>
<body class="preload">
<div class="container">

<div id="header">
    <div class="navbar-header">
        <?php if (isset($logout)) { ?>
        <a type="button" id="button-menu">
            <i class="fa fa-indent fa-lg"></i>
        </a>
        <?php } ?>
        <a href="" class="logo">
            <img src="<?php echo asset_url('images/logo.png'); ?>" alt="" />
        </a>
        <a href="" class="title">Nama Perusahaan disini</a>
    </div>

    <?php if (isset($logout)) { ?>
    <ul class="nav pull-right">
        <li><a href="<?php echo $logout; ?>">Logout <i class="fa fa-sign-out fa-lg"></i></a></li>
    </ul>
    <?php } ?>
</div>

<?php if (isset($sidebar)) echo $sidebar; ?>
<div id="content">
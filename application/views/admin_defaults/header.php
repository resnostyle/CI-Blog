<?php echo doctype(); ?>

<head>
    <?php
    echo meta('Content-type', 'text/html; charset=utf-8', 'equiv');
    ?>
    <title>Transdmin Light</title>

    <!-- CSS -->
    <?php echo link_tag('assets/admin/css/transdmin.css'); ?>
    <link href="<?php //echo base_url(); ?>assets/admin/css/transdmin.css" rel="stylesheet" type="text/css" media="screen" />
    <!--[if IE 6]><?php echo link_tag('assets/admin/css/ie6.css'); ?><![endif]-->
    <!--[if IE 7]><?php echo link_tag('assets/admin/css/ie7.css'); ?><![endif]-->

    <!-- JavaScripts-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jNice.js"></script>
</head>
<body>
    <div id="wrapper">

        <!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->


        <h1><?php echo anchor('active','<span>Transdmin Light</span>') ?> </h1>
        <?php
        if(!isset ($is_logged_in) ) {
       $this->load->view('admin_defaults/mainNav.php');
        }
       
        ?>
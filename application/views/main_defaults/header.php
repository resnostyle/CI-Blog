<?php
echo doctype();
?>

<head>
    <?php
    echo meta('Content-type', 'text/html; charset=utf-8', 'equiv');
    ?>
    <title><?php //echo $title; ?> | Adriana's Site</title>
    <?php
    echo link_tag('assets/css.php?files=style.cssp');
    ?>
    <!-- JavaScripts-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery.js"></script>
    <!-- //JavaScripts-->
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <div id="logo">
            Adriana's Baby Blog
        </div>
        <div id="navigation">
            <?php echo anchor('home', 'Home'); ?> |
            <?php echo anchor('gallery', 'Photo Gallery'); ?> |
            <?php echo anchor('calendar', 'Calendar'); ?> |
            <?php echo anchor('videos', 'Videos'); ?>
        </div>
        </div>
        <div id="content">

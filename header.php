<?php

if (!isset($_SESSION['username']) && $index != true) {
    header('Location: index.php');
    exit();
}
// elseif (!isset($index)){
// echo "<input type='button' onclick='location.href=\"logout.php\"' value='logout'> This will be moved";     
// }
?><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>MySylla.bi</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
       
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>

<style type="text/css" title="currentStyle">
    @import "DataTables/media/css/demo_table.css";
</style>

<style type="text/css">
                @import "DataTables/examples_support/syntax/css/shCore.css";
            </style>
    <script type="text/javascript" language="javascript" src="DataTables/media/js/jquery.js"></script>

    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        
        <div id="main">

<div id="header">
<!--<form action="mainSearch.php" class="fRight">
        <input type="search" name="classSearch" class="mainSearch" placeholder="Search">
        <input type="submit">
    </form>

    <span class="title">MySylla.bi</span>
    <span class="tagline">Keeping schedule one class at a time.</span>

-->
    <div id="logodiv" onclick="location.href='home.php';">
        <div id="logo"></div>
        <div id="logoText">MySyllabi</div>

    </div>

   <div class="clearfix"></div>

</div><!-- end of header -->
<?php
include ("php/connect.php");
            include ("php/errors.php");
            include ("php/success.php");
            include ("php/functions.php");
            ?>
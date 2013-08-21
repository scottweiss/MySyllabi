<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        
        <div id="main">
            <?php
            include ("header.php");
            ?>


    <div id="mainContent">

        <div id="sideBar">

             <?php
            include ("php/login.php");
            ?>
            
        </div><!-- end of sidebar -->



        <div id="content" class="stiched">
            MySylla.bi is an application that allows students to share their class schedules and assignments with their classmates through crowd-sourcing for an interactive and collaborative way to stay on schedule. View your course content in an agenda, monthly, or weekly view. 
        </div><!-- end of content -->


        <div class="clearfix"></div>

    </div>

        <?php

            include ("footer.php");
        
        ?>

		</div>
		<!-- End site content -->
        <script src="js/vendor/jquery-1.9.1.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        
    </body>
</html>
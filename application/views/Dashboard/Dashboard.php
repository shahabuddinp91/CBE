<html>
    <head>
        <title>CBE</title>
        <link rel="stylesheet" href="<?php echo $baseurl; ?>asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $baseurl; ?>asset/css/datepicker.css">
        <link rel="stylesheet" href="<?php echo $baseurl; ?>asset/css/style.css">        

        <script type="text/javascript" src="<?php echo $baseurl; ?>asset/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo $baseurl; ?>/asset/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo $baseurl; ?>asset/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo $baseurl; ?>asset/js/jquery.min.js">< /script
                    < script type = "text/javascript" src = "<?php echo $baseurl; ?>asset/js/myscript.js" ></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top headertop">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand linka" href="#">China-Bangladesh Electronics Pvt. Ltd.</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <?php echo anchor('CbeController/index', 'Dashboard', array('class' => 'linka')); ?>
                        </li>
                        <li>
                            <?php echo anchor('', ' Logout', array('title' => 'Logout', 'class' => 'glyphicon glyphicon-log-out logout linka')); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <li class="active">
                            <?php echo anchor('CbeController/index', 'Dashboard', array('class' => '')); ?>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <footer class="footersection">
            <div class="container-fluid">
                <div class="row">

                </div>
            </div>
        </footer>
    </body>
</html>
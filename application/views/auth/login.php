<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../assets/paper_img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Login!</title>

    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />

    <link href="<?=base_url('assets')?>/css/bootstrap.css" rel="stylesheet" />
    <link href="<?=base_url('assets')?>/css/ct-paper.css" rel="stylesheet" />
    <link href="<?=base_url('assets')?>/css/demo.css" rel="stylesheet" />
    <link href="<?=base_url('assets')?>/css/examples.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

</head>

<body>
    <nav class="navbar navbar-ct-transparent navbar-fixed-top" role="navigation-demo" id="register-navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="javascript:;"><img src="<?=base_url('assets')?>/images/logo.png" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navigation-example-2">
                <!-- <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#" class="btn btn-simple">Components</a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-simple">Tutorial</a>
                    </li>
                    <li>
                        <a href="#" target="_blank" class="btn btn-simple"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#" target="_blank" class="btn btn-simple"><i class="fa fa-facebook"></i></a>
                    </li>
                </ul> -->
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-->
    </nav>

    <div class="wrapper">
        <div class="login-background">
            <div class="filter-black"></div>
            <div class="container">
                <div class="row">
                    <form action="<?=base_url('auth/login')?>" method="POST">
                        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 ">
                        <div class="login-card">
                            <h3 class="title">Login</h3>
                            <?php
                            if (isset($message)) {
                            ?>
                            <div class="alert alert-danger" id="infoMessage" style="color: #fff"><?php echo $message;?></div>
                            <?php
                            }
                            ?>
                            <form class="register-form">
                                <label>Email</label>
                                <input type="text" name="identity" class="form-control" placeholder="Email">

                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                <button type="submit" class="btn btn-danger btn-block">Login</button>
                            </form>
                            <div class="forgot">
                                <a href="<?=base_url('auth/create_user')?>" class="btn btn-simple btn-danger">Don't have an account? SIGN UP!</a>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> 
    <script type="text/javascript">
        $('#infoMessage').delay(3000).fadeOut(400);
    </script>
</body>

</html>
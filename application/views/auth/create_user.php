<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../assets/paper_img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Join Now!</title>

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
        <div class="register-background">
            <div class="filter-black"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12" style="margin: 0">
                        <div class="register-card">
                            <h3 class="title">Welcome</h3>
                            <?php
                            if (isset($message)) {
                            ?>
                            <div class="alert alert-danger" id="infoMessage" style="color: #fff"><?php echo $message;?></div>
                            <?php
                            }
                            ?>
                            
                            <form class="register-form" action="<?=base_url('auth/create_user')?>" method="POST">
                                <div class="row">
                                    <input type="hidden" class="form-control" name="company" value="1" placeholder="Email">
                                    <input type="hidden" class="form-control" name="group_id" value="2" placeholder="Email">
                                    <div class="col-sm-6">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" name="first_name" placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                                    </div>
                                    <div class="col-sm-12">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                        
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control" name="password_confirm" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <button class="btn btn-danger btn-block">Register</button>
                            </form>
                            <div class="forgot">
                                <a href="login.html" class="btn btn-simple btn-danger">Already have an Account? LOGIN!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> 
            <script type="text/javascript">
                $('#infoMessage').delay(3000).fadeOut(400);
            </script>
            <!-- <div class="footer register-footer text-center">
                <h6>&copy; 2015, made with <i class="fa fa-heart heart"></i> by Creative Tim</h6>
            </div> -->
        </div>
    </div>

</body>

</html>
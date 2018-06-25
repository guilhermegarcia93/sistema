<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Log in</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo asset_url();?>plugins/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo asset_url();?>plugins/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo asset_url();?>plugins/iCheck/square/blue.css">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Admin</b>LTE</a>
        </div>
        <!-- /.login-logo -->
        <?php if ($this->session->flashdata('error') == TRUE): ?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p><?php echo $this->session->flashdata('error'); ?></p>
            </div>
        <?php endif; ?>
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form method="post" action="<?=base_url('logar')?>" enctype="multipart/form-data">
                <div class="form-group has-feedback">
                    <input type="text" id="login" name="login" class="form-control" placeholder="Login">
                    <span class="fa fa-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" id="senha" name="senha" class="form-control" placeholder="Password">
                    <span class="fa fa-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">&nbsp;
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="#">I forgot my password</a><br>
            <a href="#" class="text-center">Register a new membership</a>

        </div>
        <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery 3 -->
        <script src="<?php echo asset_url();?>plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="<?php echo asset_url();?>plugins/bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="<?php echo asset_url();?>plugins/iCheck/icheck.min.js"></script>
        <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
        </script>
    </body>
</html>
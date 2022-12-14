<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet"
        href="<?= base_url();?>assets/login_register/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url();?>assets/login_register/css/style.css">

    <!-- sweetalert -->
    <script src="<?=base_url(); ?>node_modules/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
<?php if ($this->session->flashdata('success_log_out')){ ?>
    <script>
    swal({
        title: "success!",
        text: "Anda Telah Log Out !",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('register')){ ?>
    <script>
    swal({
        title: "success!",
        text: "Anda Telah Berhasil Register, Silahkan Login",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('loggin_err_no_user')){ ?>
    <script>
    swal({
        title: "error!",
        text: "Anda Belum Terdaftar, Silahkan Mendaftar !",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('loggin_err_no_password')){ 
        $message = $this->session->flashdata('loggin_err_no_password');
        ?>
    <script>
    swal({
        title: "error!",
        text: "<?=$message?>",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('loggin_err_no_access')){ 
        $message = $this->session->flashdata('loggin_err_no_access');
        ?>
    <script>
    swal({
        title: "error!",
        text: "<?=$message?>",
        icon: "error"
    });
    </script>
    <?php } ?>

    <div class="main">


        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?= base_url();?>assets/login_register/images/classico.png"
                                alt="sing up image"></figure>
                        <a href="<?= base_url();?>Register/index" class="signup-image-link">BUAT AKUN !</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Log in</h2>
                        <form action="<?= base_url();?>login/proses_login" method ="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Your Username" />
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" />
                            </div>
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                            </div>
                        </form>
                      
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?= base_url();?>assets/login_register/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url();?>assets/login_register/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
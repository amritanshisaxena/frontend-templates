<?php include './includes/header.php'?>
<section class="index-section mb-5" style="color: #5fbeaa !important; background-color: #313a43 !important;">
        <div class="page-content">
            <div class="mb-1 text-center">
                <h1 class="font-weight-bold">LOGIN</h1>
            </div>
        </div>

    </section>
    <section>
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 bg-light">
                    <label class="form-label col-label my-3" for="emailaddress_personal;">Email Address</label>
                    <input class="field__input border-dark" type="text" name="emailaddress_personal;" placeholder="joe.black@gmail.com" id="emailaddress_personal;">

                    <label class="form-label col-label my-3" for="new_pass">Password</label>
                    <input class="field__input border-dark" type="text" name="new_pass" placeholder="" id="new_pass">
                    <div class="form-group text-center my-3">
                        <a href="./userpanel_profile.php" class="col-label my-3">Forgot your password?</a><br>
                        <a href="./userpanel_profile.php" class="btn btn-outline-dark my-3" type="submit"><i class="fa fa-save mr-2"></i>Sign In</a><br>
                        <a href="./create account.php" class="col-label my-3">Create Account</a>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<?php include './includes/footer.php'?>
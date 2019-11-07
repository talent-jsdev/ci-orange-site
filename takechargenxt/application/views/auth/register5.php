<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->

<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>Take Charge NXT | Beta</title>
    <meta name="description" content="Login page example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

    <!--end::Fonts -->

    <!--begin::Page Custom Styles(used by this page) -->
    <link href="<?php echo base_url() ?>assets/css/pages/login/login-2.css" rel="stylesheet" type="text/css" />

    <!--end::Page Custom Styles -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="<?php echo base_url() ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/media/logos/favicon.ico" />
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body style="background-image: url(<?php echo base_url() ?>assets/media/demos/demo4/header.jpg); background-position: center top; background-size: 100% 350px;" class="kt-page--loading-enabled kt-page--loading kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-menu kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">

    <!-- begin::Page loader -->

    <!-- end::Page Loader -->

    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--ver kt-grid--root kt-page">
        <div class="kt-grid kt-grid--hor kt-grid--root kt-login kt-login--v2 kt-login--signin" id="kt_login">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(<?php echo base_url() ?>assets/media/bg/bg-1.jpg);">
                <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                    <div class="kt-login__container">
                        <div class="kt-login__logo">
                            <a href="<?php echo base_url() ?>">
                                <img src="<?php echo base_url() ?>assets/media/logos/logo-md.png">
                            </a>
                        </div>
                        <div class="kt-login__signin">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title">Sign Up Phase 2</h3>
                            </div>
                            <?php echo (isset($error))?$error:""; ?>
                            <?php echo validation_errors(); ?>
                            <?php echo form_open('user/signup5_post','class="kt-login__form kt-form"'); ?>
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Create Username" name="username">
                                </div>
                                <div class="input-group col-md-12">
                                    <input class="form-control" type="password" placeholder="Password" name="password">
                                </div>
                                <div class="input-group">
                                    <input class="form-control" type="password" placeholder="Confirm Password" name="rpassword">
                                </div>
                                <div class="input-group">
                                    <select class="form-control" name="security_question1" id="security_question1">
                                        <option value="">Select security question1</option>
                                        <option value="Your mother's maiden name">Your mother's maiden name</option>
                                        <option value="Your first pet's name">Your first pet's name</option>
                                        <option value="The name of your elementary school">The name of your elementary school</option>
                                        <option value="Your best friend's nickname">Your best friend's nickname</option>
                                        <option value="Your favorite sports team">Your favorite sports team</option>
                                        <option value="Your favorite writer">Your favorite writer</option>
                                        <option value="Your favorite actor">Your favorite actor</option>
                                        <option value="Your favorite singer">Your favorite singer</option>
                                        <option value="Your favorite song">Your favorite song</option>
                                        <option value="The name of the street you grew up on">The name of the street you grew up on</option>
                                        <option value="Make and model of your first car">Make and model of your first car</option>
                                        <option value="The city where you first met your spouse">The city where you first met your spouse</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Answer2" name="answer1">
                                </div>
                                <div class="input-group">
                                    <select class="form-control" name="security_question2" id="security_question2">
                                        <option value="">Select security question2</option>
                                        <option value="Your mother's maiden name">Your mother's maiden name</option>
                                        <option value="Your first pet's name">Your first pet's name</option>
                                        <option value="The name of your elementary school">The name of your elementary school</option>
                                        <option value="Your best friend's nickname">Your best friend's nickname</option>
                                        <option value="Your favorite sports team">Your favorite sports team</option>
                                        <option value="Your favorite writer">Your favorite writer</option>
                                        <option value="Your favorite actor">Your favorite actor</option>
                                        <option value="Your favorite singer">Your favorite singer</option>
                                        <option value="Your favorite song">Your favorite song</option>
                                        <option value="The name of the street you grew up on">The name of the street you grew up on</option>
                                        <option value="Make and model of your first car">Make and model of your first car</option>
                                        <option value="The city where you first met your spouse">The city where you first met your spouse</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Answer2" name="answer2">
                                </div>
                                <div class="input-group">
                                    <select class="form-control" name="security_question3" id="security_question3">
                                        <option value="">Select security question3</option>
                                        <option value="Your mother's maiden name">Your mother's maiden name</option>
                                        <option value="Your first pet's name">Your first pet's name</option>
                                        <option value="The name of your elementary school">The name of your elementary school</option>
                                        <option value="Your best friend's nickname">Your best friend's nickname</option>
                                        <option value="Your favorite sports team">Your favorite sports team</option>
                                        <option value="Your favorite writer">Your favorite writer</option>
                                        <option value="Your favorite actor">Your favorite actor</option>
                                        <option value="Your favorite singer">Your favorite singer</option>
                                        <option value="Your favorite song">Your favorite song</option>
                                        <option value="The name of the street you grew up on">The name of the street you grew up on</option>
                                        <option value="Make and model of your first car">Make and model of your first car</option>
                                        <option value="The city where you first met your spouse">The city where you first met your spouse</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Answer3" name="answer3">
                                </div>
                                <div class="row kt-login__extra">
                                    <div class="col kt-align-center">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="agree1">Read and accept the <a href="#" class="kt-link kt-login__link kt-font-bold">terms and conditions</a>.
                                            <span></span>
                                        </label>
                                        <span class="form-text text-muted"></span>
                                    </div>
                                    <div class="col kt-align-center">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="agree2">Read and accept the <a href="#" class="kt-link kt-login__link kt-font-bold">privacy policy</a>.
                                            <span></span>
                                        </label>
                                        <span class="form-text text-muted"></span>
                                    </div>
                                    <div class="col kt-align-center">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="agree3">Read and accept the <a href="#" class="kt-link kt-login__link kt-font-bold">acceptable use policy</a>.
                                            <span></span>
                                        </label>
                                        <span class="form-text text-muted"></span>
                                    </div>
                                </div>
                                <div class="kt-login__actions">
                                    <Button type="submit" class="btn btn-pill kt-login__btn-primary">Sign Up</Button>
                                    <a href="<?php echo site_url() ?>" style="height:auto;padding-top:13px;padding-bottom:12px;" id="kt_login_signup_cancel" class="btn btn-pill kt-login__btn-secondary">Cancel</a>
                                </div>

                            <?php echo form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end:: Page -->

    <!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#366cf3",
                    "light": "#ffffff",
                    "dark": "#282a3c",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
                },
                "base": {
                    "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                    "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
                }
            }
        };
    </script>

    <!-- end::Global Config -->

    <!--begin::Global Theme Bundle(used by all pages) -->
    <script src="<?php echo base_url() ?>assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/js/scripts.bundle.js" type="text/javascript"></script>

    <!--end::Global Theme Bundle -->

    <!--begin::Page Scripts(used by this page) -->
    <!-- <script src="<?php
                        // echo base_url() 
                        ?>assets/js/pages/custom/login/login-general.js" type="text/javascript"></script> -->

    <!--end::Page Scripts -->
    <!--begin::Page Scripts(used by this page) -->
    <!-- <script src=" -->
    <?php
    //  echo base_url() 
    ?>
    <!-- assets/js/pages/crud/file-upload/dropzonejs.js" type="text/javascript"></script> -->

    <!--end::Page Scripts -->

</body>

<!-- end::Body -->

</html>
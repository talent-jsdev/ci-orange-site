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
                                <h3 class="kt-login__title">Email Verificaton</h3>
                                <div class="kt-login__desc">Enter your code to verify your email:</div>
                            </div>
                            <?php echo (isset($code_error))?$code_error:""; ?>
                            <?php echo form_open('user/signup2_post','class="kt-login__form kt-form"'); ?>
                                <input type="hidden" name="randomid" value="<?php echo (isset($randomid))?$randomid:''; ?>" >
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Enter Code" name="email_code" id="email_code" autocomplete="off">
                                </div>

                                <div class="kt-login__actions">
                                    <a href="<?php echo base_url() ?>user/signup" style="height:auto;padding-top:13px;padding-bottom:12px;" id="signup2_back" class="btn btn-pill kt-login__btn-secondary">Back</a>&nbsp;&nbsp;
                                    <Button type="submit" class="btn btn-pill kt-login__btn-primary">Next</Button>
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
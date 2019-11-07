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
                                <h3 class="kt-login__title">ID Verificaton</h3>
                                <div class="kt-login__desc">Upload your ID card or Driver License:</div>
                            </div>
                            <form class="kt-login__form kt-form" action="" style="margin:0 auto">
                                <div class="input-group">
                                    <input class="form-control" type="file" placeholder="ID Card" name="id_card">
                                </div>


                                <img id="card_image" class="img-responsive" width="100%" src="<?php echo site_url() ?>assets/media/id_card/id_card_sample.png" alt="ID Card">

                                <div class="kt-login__actions">
                                    <a href="<?php echo base_url() ?>user/signup" style="height:auto;padding-top:13px;padding-bottom:12px;" id="signup3_back" class="btn btn-pill kt-login__btn-secondary">Back</a>&nbsp;&nbsp;
                                    <a href="<?php echo base_url()?>user/signup5" style="height:auto;padding-top:13px;padding-bottom:12px;" id="signup3_submit" class="btn btn-pill kt-login__btn-primary">Next</a>
                                </div>

                            </form>
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
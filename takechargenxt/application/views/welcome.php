<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->

<head>
	<base href="">
	<meta charset="utf-8" />
	<title>Take Charge NXT | Beta</title>
	<meta name="description" content="Latest updates and statistic charts">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--begin::Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

	<!--end::Fonts -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!--begin::Page Vendors Styles(used by this page) -->
	<link href="<?php echo base_url() ?>/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

	<!--end::Page Vendors Styles -->

	<!--begin::Global Theme Styles(used by all pages) -->
	<link href="<?php echo base_url() ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

	<!--end::Global Theme Styles -->

	<link href="<?php echo base_url() ?>assets/css/welcome_style.css" rel="stylesheet" type="text/css" />

	<!--begin::Layout Skins(used by all pages) -->

	<!--end::Layout Skins -->
	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/media/logos/favicon.ico" />
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body class="kt-page--loading-enabled kt-page--loading kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-menu kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">
	<!-- begin::Page loader -->

	<!-- end::Page Loader -->

	<!-- begin:: Page -->

	<!-- begin:: Header Mobile -->
	<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
		<div class="kt-header-mobile__logo">
			<a href="index.html">
				<img alt="Logo" src="<?php echo base_url() ?>assets/media/logos/logo-md.png" />
			</a>
		</div>
		<div class="kt-header-mobile__toolbar">
			<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
			<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>
		</div>
	</div>

	<!-- end:: Header Mobile -->
	<div class="kt-grid kt-grid--hor kt-grid--root">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

				<!-- begin:: Header -->
				<div id="kt_header" style="background:orange" class="kt-header  kt-header--fixed " data-ktheader-minimize="on">
					<div class="kt-container ">

						<!-- begin:: Brand -->
						<div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
							<a class="kt-header__brand-logo" href="?page=index">
								<img alt="Logo" src="<?php echo base_url() ?>assets/media/logos/logo-md.png" class="kt-header__brand-logo-default" />
								<img alt="Logo" src="<?php echo base_url() ?>assets/media/logos/logo-sm.png" class="kt-header__brand-logo-sticky" />
							</a>
						</div>

						<!-- end:: Brand -->


						<!-- begin:: Header Topbar -->
						<div class="kt-header__topbar kt-grid__item">

							<!--begin: Search -->
							<div class="kt-header__topbar-item kt-header__topbar-item--search dropdown" id="kt_quick_search_toggle">
								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
									<span class="kt-header__topbar-icon">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#ffffff" fill-rule="nonzero" opacity="0.3" />
												<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#ffffff" fill-rule="nonzero" />
											</g>
										</svg>

										<!--<i class="flaticon2-search-1"></i>-->
									</span>
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
									<div class="kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact" id="kt_quick_search_dropdown">
										<form method="get" class="kt-quick-search__form">
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
												<input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
												<div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
											</div>
										</form>
										<div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="325" data-mobile-height="200">
										</div>
									</div>
								</div>
							</div>

							<!--end: Search -->

							<!--begin: User bar -->
							<a href="<?php echo site_url() ?>user/signup" class="btn btn-brand" style="align-self:center">SignUp</a>&nbsp;
							<a href="<?php echo site_url() ?>user/login" class="btn btn-brand" style="align-self:center">SignIn(Admin)</a>&nbsp;
							<a href="<?php echo site_url() ?>user/login" class="btn btn-brand" style="align-self:center">SignIn(User)</a>

							<!--end: User bar -->
						</div>

						<!-- end:: Header Topbar -->
					</div>
				</div>
				<!-- end:: Header -->

				<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
					<div class="kt-content kt-content--fit-top  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

						<!-- begin:: Content -->
						<div class="kt-container  kt-grid__item kt-grid__item--fluid">
							<div class="banner" id="banner">
								<div class="row">
									<div id="banner_left" class="col-md-6">
										<h1>
											Earn Cash Paid Daily Selling Products!
										</h1>
										<aside>
											<a href="<?php echo base_url()?>video" id="video_button">
												<img width="100px" src="<?php echo site_url() ?>assets/media/video/play.png" alt="Play">
											</a>
											<p>
												See how in 15 seconds
											</p>
										</aside>
									</div>
									<div id="banner_right" class="col-md-6">
										<div class="row">
											<div class="col-md-2"></div>
											<div class="col-md-8">
												<div id="dynamicSignupBonus">
													<div id="dynamicSignupBonusInner">
														<span id="dynamicSignupBonusAmount"><sup>$</sup>1,000</span>
														<span id="dynamicSignupBonusWord">Bonus</span>
														<sup id="dynamicSignupBonusAsterisk">*</sup>
													</div>
												</div>
												<div class="kt-portlet">
													<div class="kt-portlet__body">
														<h4 id="join_free">Join for Free</h4>
														<a href="#" id="btn_signup_banner" class="btn btn-brand">Sign Up Now</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<section id="lpContentReason" style="background: white">
								<div class="sectionWrapper">
									<h3 style="color:black">Reasons To Join Take Charge NXT</h3>
									<div class="row">
										<div class="reason_item">
											<div class="reson_item_icon">
												<i class="fa fa-money-bill-alt"></i>
											</div>
											<p>
												Daily Payouts
											</p>
										</div>
										<div class="reason_item">
											<div class="reson_item_icon">
												<i class="fa fa-dollar-sign"></i>
											</div>
											<p>
												Uncapped Referral Bonuses
											</p>
										</div>
										<div class="reason_item">
											<div class="reson_item_icon">
												<i class="fa fa-gift"></i>
											</div>
											<p>
												Monthly Giveaways
											</p>
										</div>
										<div class="reason_item">
											<div class="reson_item_icon">
												<i class="fa fa-trophy"></i>
											</div>
											<p>
												Monthly Tournament Bonuses
											</p>
										</div>
										<div class="reason_item">
											<div class="reson_item_icon">
												<i class="fa fa-sort-amount-up"></i>
											</div>
											<p>
												Sales Growth Opportunities
											</p>
										</div>
									</div>
								</div>
							</section>
							<!-- <section id="lpContentAbout">
								<div class="sectionWrapper">
									<h2>Get <strong>Free</strong> Gift Cards &amp; Cash for the everyday things you do online. Here's how…</h2>
									<div id="lpContentAboutEarn" class="lpContentHalves">
										<h2>Earn Points</h2>
										<p>Shop online, Watch entertaining videos, Search the web, Answer
											surveys and find great deals to earn your points.</p>
									</div>
									<span id="lpContentAboutArrow"></span>
									<div id="lpContentAboutGC" class="lpContentHalves country_1 ">
										<h2>Get Free Gift Cards</h2>
										<p>Redeem your points for gift cards to your favorite retailers like Amazon and Walmart or get cash back from PayPal.</p>
									</div>
								</div>
							</section> -->
							<section id="lpContentBrag" style="background: white">
								<h2 id="lpContentBragTitle">Take Charge NXT pays out over </h2>
								<link rel="stylesheet" href="https://app4-cdn2.sbx-cdn.com/content/home-6/css/include-rewards-flipcounter.pmin.css?v=7033248-9c0a">
								<div id="flipCounterWrapper">
									$<div id="flipCounter">
										<span class="flipCounterFrame">
											<span class="flipCounterDigit">1</span>
										</span>
										<span class="flipCounterFrame">
											<span class="flipCounterDigit">0</span>
										</span>
										<span class="flipCounterFrame">
											<span class="flipCounterDigit">0</span>
										</span>,
										<span class="flipCounterFrame">
											<span class="flipCounterDigit">0</span>
										</span>
										<span class="flipCounterFrame">
											<span class="flipCounterDigit">0</span>
										</span>
										<span class="flipCounterFrame">
											<span class="flipCounterDigit">0</span>
										</span>
									</div>
								</div>
							</section>
							<section id="lpContentTestimonials">
								<div class="iconTestimonial row" id="testimonialA">
									<div class="col-md-4" id="testinomial_left">
										<img src="<?php echo site_url() ?>assets/media/users/300_20.jpg" class="rounded-circle" alt="Photo">
									</div>
									<div class="col-md-5" id="testinomial_right">
										<p class="testimonial">
											“My most rewarding moment with Charge NXT is using the gift cards I earn to buy gifts for my child's Christmas and February birthday.”<br>
											<span class="testimonialMeta">
												<span class="testimonialMetaName">Kim,</span>
												Member since 2019
											</span>
										</p>

									</div>
								</div>
							</section>
							<section id="lpContentGc" style="background: white">
								<span id="lpContentGcIcon"></span>
								<p id="lpContentGcCopy">
									Commissions Along with Free Gifts <em>Every Month</em>
								</p>
							</section>

							<section id="lpContentSignUp" style="background: #f4f6f6">
								<h2>Earn Cash Paid Daily Selling Products!</h2>
								<button id="lpContentSignUpCta" class="sbCta btn btn-brand">Sign Up Now</button>
							</section>
						</div>
					</div>
				</div>


				<!-- begin:: Footer -->
				<div class="kt-footer  kt-footer--extended  kt-grid__item" id="kt_footer" style="background-image: url('<?php echo base_url() ?>assets/media/bg/bg-2.jpg');">
					<div class="kt-footer__top">
						<div class="kt-container ">
							<div class="row">
								<div class="col-lg-4">
									<div class="kt-footer__section">
										<h3 class="kt-footer__title">About</h3>
										<div class="kt-footer__content">
											Lorem Ipsum is simply dummy text of the printing<br>
											and typesetting and typesetting industry has been the <br>
											industry's standard dummy text ever since the 1500s,<br>
											when an unknown printer took a galley of type.
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="kt-footer__section">
										<h3 class="kt-footer__title">Quick Links</h3>
										<div class="kt-footer__content">
											<div class="kt-footer__nav">
												<div class="kt-footer__nav-section">
													<a href="#">General Reports</a>
													<a href="#">Dashboart Widgets</a>
													<a href="#">Custom Pages</a>
												</div>
												<div class="kt-footer__nav-section">
													<a href="#">User Setting</a>
													<a href="#">Custom Pages</a>
													<a href="#">Intranet Settings</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="kt-footer__section">
										<h3 class="kt-footer__title">Get In Touch</h3>
										<div class="kt-footer__content">
											<form action="" class="kt-footer__subscribe">
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Enter Your Email">
													<div class="input-group-append">
														<button class="btn btn-brand" type="button">Join</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="kt-footer__bottom">
						<div class="kt-container ">
							<div class="kt-footer__wrapper">
								<div class="kt-footer__logo">
									<a class="kt-header__brand-logo" href="?page=index&amp;demo=demo2">
										<img alt="Logo" src="<?php echo base_url() ?>assets/media/logos/logo-4.png" class="kt-header__brand-logo-sticky">
									</a>
									<div class="kt-footer__copyright">
										2019&nbsp;&copy;&nbsp;
										<a href="http://keenthemes.com/metronic" target="_blank">Keenthemes</a>
									</div>
								</div>
								<div class="kt-footer__menu">
									<a href="http://keenthemes.com/metronic" target="_blank">Purchase Lisence</a>
									<a href="http://keenthemes.com/metronic" target="_blank">Team</a>
									<a href="http://keenthemes.com/metronic" target="_blank">Contact</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- end:: Footer -->
			</div>
		</div>
	</div>

	<!-- end:: Page -->

	<!-- begin::Quick Panel -->
	<div id="kt_quick_panel" class="kt-quick-panel">
		<a href="#" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>
		<div class="kt-quick-panel__nav">
			<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
				<li class="nav-item active">
					<a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_tab_notifications" role="tab">Notifications</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_logs" role="tab">Audit Logs</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_settings" role="tab">Settings</a>
				</li>
			</ul>
		</div>
		<div class="kt-quick-panel__content">
			<div class="tab-content">
				<div class="tab-pane fade show kt-scroll active" id="kt_quick_panel_tab_notifications" role="tabpanel">
					<div class="kt-notification">
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-line-chart kt-font-success"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New order has been received
								</div>
								<div class="kt-notification__item-time">
									2 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-box-1 kt-font-brand"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New customer is registered
								</div>
								<div class="kt-notification__item-time">
									3 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-chart2 kt-font-danger"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									Application has been approved
								</div>
								<div class="kt-notification__item-time">
									3 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-image-file kt-font-warning"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New file has been uploaded
								</div>
								<div class="kt-notification__item-time">
									5 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-drop kt-font-info"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New user feedback received
								</div>
								<div class="kt-notification__item-time">
									8 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-pie-chart-2 kt-font-success"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									System reboot has been successfully completed
								</div>
								<div class="kt-notification__item-time">
									12 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-favourite kt-font-danger"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New order has been placed
								</div>
								<div class="kt-notification__item-time">
									15 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item kt-notification__item--read">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-safe kt-font-primary"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									Company meeting canceled
								</div>
								<div class="kt-notification__item-time">
									19 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-psd kt-font-success"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New report has been received
								</div>
								<div class="kt-notification__item-time">
									23 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon-download-1 kt-font-danger"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									Finance report has been generated
								</div>
								<div class="kt-notification__item-time">
									25 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon-security kt-font-warning"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New customer comment recieved
								</div>
								<div class="kt-notification__item-time">
									2 days ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-pie-chart kt-font-warning"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New customer is registered
								</div>
								<div class="kt-notification__item-time">
									3 days ago
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="tab-pane fade kt-scroll" id="kt_quick_panel_tab_logs" role="tabpanel">
					<div class="kt-notification-v2">
						<a href="#" class="kt-notification-v2__item">
							<div class="kt-notification-v2__item-icon">
								<i class="flaticon-bell kt-font-brand"></i>
							</div>
							<div class="kt-notification-v2__itek-wrapper">
								<div class="kt-notification-v2__item-title">
									5 new user generated report
								</div>
								<div class="kt-notification-v2__item-desc">
									Reports based on sales
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification-v2__item">
							<div class="kt-notification-v2__item-icon">
								<i class="flaticon2-box kt-font-danger"></i>
							</div>
							<div class="kt-notification-v2__itek-wrapper">
								<div class="kt-notification-v2__item-title">
									2 new items submited
								</div>
								<div class="kt-notification-v2__item-desc">
									by Grog John
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification-v2__item">
							<div class="kt-notification-v2__item-icon">
								<i class="flaticon-psd kt-font-brand"></i>
							</div>
							<div class="kt-notification-v2__itek-wrapper">
								<div class="kt-notification-v2__item-title">
									79 PSD files generated
								</div>
								<div class="kt-notification-v2__item-desc">
									Reports based on sales
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification-v2__item">
							<div class="kt-notification-v2__item-icon">
								<i class="flaticon2-supermarket kt-font-warning"></i>
							</div>
							<div class="kt-notification-v2__itek-wrapper">
								<div class="kt-notification-v2__item-title">
									$2900 worth producucts sold
								</div>
								<div class="kt-notification-v2__item-desc">
									Total 234 items
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification-v2__item">
							<div class="kt-notification-v2__item-icon">
								<i class="flaticon-paper-plane-1 kt-font-success"></i>
							</div>
							<div class="kt-notification-v2__itek-wrapper">
								<div class="kt-notification-v2__item-title">
									4.5h-avarage response time
								</div>
								<div class="kt-notification-v2__item-desc">
									Fostest is Barry
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification-v2__item">
							<div class="kt-notification-v2__item-icon">
								<i class="flaticon2-information kt-font-danger"></i>
							</div>
							<div class="kt-notification-v2__itek-wrapper">
								<div class="kt-notification-v2__item-title">
									Database server is down
								</div>
								<div class="kt-notification-v2__item-desc">
									10 mins ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification-v2__item">
							<div class="kt-notification-v2__item-icon">
								<i class="flaticon2-mail-1 kt-font-brand"></i>
							</div>
							<div class="kt-notification-v2__itek-wrapper">
								<div class="kt-notification-v2__item-title">
									System report has been generated
								</div>
								<div class="kt-notification-v2__item-desc">
									Fostest is Barry
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification-v2__item">
							<div class="kt-notification-v2__item-icon">
								<i class="flaticon2-hangouts-logo kt-font-warning"></i>
							</div>
							<div class="kt-notification-v2__itek-wrapper">
								<div class="kt-notification-v2__item-title">
									4.5h-avarage response time
								</div>
								<div class="kt-notification-v2__item-desc">
									Fostest is Barry
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="tab-pane kt-quick-panel__content-padding-x fade kt-scroll" id="kt_quick_panel_tab_settings" role="tabpanel">
					<form class="kt-form">
						<div class="kt-heading kt-heading--sm kt-heading--space-sm">Customer Care</div>
						<div class="form-group form-group-xs row">
							<label class="col-8 col-form-label">Enable Notifications:</label>
							<div class="col-4 kt-align-right">
								<span class="kt-switch kt-switch--success kt-switch--sm">
									<label>
										<input type="checkbox" checked="checked" name="quick_panel_notifications_1">
										<span></span>
									</label>
								</span>
							</div>
						</div>
						<div class="form-group form-group-xs row">
							<label class="col-8 col-form-label">Enable Case Tracking:</label>
							<div class="col-4 kt-align-right">
								<span class="kt-switch kt-switch--success kt-switch--sm">
									<label>
										<input type="checkbox" name="quick_panel_notifications_2">
										<span></span>
									</label>
								</span>
							</div>
						</div>
						<div class="form-group form-group-last form-group-xs row">
							<label class="col-8 col-form-label">Support Portal:</label>
							<div class="col-4 kt-align-right">
								<span class="kt-switch kt-switch--success kt-switch--sm">
									<label>
										<input type="checkbox" checked="checked" name="quick_panel_notifications_2">
										<span></span>
									</label>
								</span>
							</div>
						</div>
						<div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
						<div class="kt-heading kt-heading--sm kt-heading--space-sm">Reports</div>
						<div class="form-group form-group-xs row">
							<label class="col-8 col-form-label">Generate Reports:</label>
							<div class="col-4 kt-align-right">
								<span class="kt-switch kt-switch--sm kt-switch--danger">
									<label>
										<input type="checkbox" checked="checked" name="quick_panel_notifications_3">
										<span></span>
									</label>
								</span>
							</div>
						</div>
						<div class="form-group form-group-xs row">
							<label class="col-8 col-form-label">Enable Report Export:</label>
							<div class="col-4 kt-align-right">
								<span class="kt-switch kt-switch--sm kt-switch--danger">
									<label>
										<input type="checkbox" name="quick_panel_notifications_3">
										<span></span>
									</label>
								</span>
							</div>
						</div>
						<div class="form-group form-group-last form-group-xs row">
							<label class="col-8 col-form-label">Allow Data Collection:</label>
							<div class="col-4 kt-align-right">
								<span class="kt-switch kt-switch--sm kt-switch--danger">
									<label>
										<input type="checkbox" checked="checked" name="quick_panel_notifications_4">
										<span></span>
									</label>
								</span>
							</div>
						</div>
						<div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
						<div class="kt-heading kt-heading--sm kt-heading--space-sm">Memebers</div>
						<div class="form-group form-group-xs row">
							<label class="col-8 col-form-label">Enable Member singup:</label>
							<div class="col-4 kt-align-right">
								<span class="kt-switch kt-switch--sm kt-switch--brand">
									<label>
										<input type="checkbox" checked="checked" name="quick_panel_notifications_5">
										<span></span>
									</label>
								</span>
							</div>
						</div>
						<div class="form-group form-group-xs row">
							<label class="col-8 col-form-label">Allow User Feedbacks:</label>
							<div class="col-4 kt-align-right">
								<span class="kt-switch kt-switch--sm kt-switch--brand">
									<label>
										<input type="checkbox" name="quick_panel_notifications_5">
										<span></span>
									</label>
								</span>
							</div>
						</div>
						<div class="form-group form-group-last form-group-xs row">
							<label class="col-8 col-form-label">Enable Customer Portal:</label>
							<div class="col-4 kt-align-right">
								<span class="kt-switch kt-switch--sm kt-switch--brand">
									<label>
										<input type="checkbox" checked="checked" name="quick_panel_notifications_6">
										<span></span>
									</label>
								</span>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- end::Quick Panel -->

	<!-- begin::Scrolltop -->
	<div id="kt_scrolltop" class="kt-scrolltop">
		<i class="fa fa-arrow-up"></i>
	</div>

	<!-- end::Scrolltop -->


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


	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->


	<!--begin::Global Theme Bundle(used by all pages) -->
	<script src="<?php echo base_url() ?>assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>assets/js/scripts.bundle.js" type="text/javascript"></script>

	<!--end::Global Theme Bundle -->

	<!--begin::Page Vendors(used by this page) -->
	<script src="<?php echo base_url() ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
	<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>assets/plugins/custom/gmaps/gmaps.js" type="text/javascript"></script>

	<!--end::Page Vendors -->

	<!--begin::Page Scripts(used by this page) -->
	<script src="<?php echo base_url() ?>assets/js/pages/dashboard.js" type="text/javascript"></script>

	<!--end::Page Scripts -->
</body>

<!-- end::Body -->

</html>
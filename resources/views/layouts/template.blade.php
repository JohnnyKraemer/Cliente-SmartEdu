<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SmartEdu" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>SmartEdu - @yield('title')</title>

	<!--begin::Web font -->
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
	WebFont.load({
		google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
		active: function () {
			sessionStorage.fonts = true;
		}
	});
	</script>

	<!--============================ Stylesheets ============================-->
	<link href="<?php echo asset('assets/vendors/base/vendors.bundle.css') ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo asset('assets/demo/default/base/style.bundle.css') ?>" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="<?php echo asset('assets/demo/default/media/img/logo/favicon.ico') ?>" /> @yield('stylesheets')
</head>

<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
	<!-- begin:: Page -->
	<div class="m-grid m-grid--hor m-grid--root m-page">
		<!-- BEGIN: Header -->
		<header class="m-grid__item    m-header " data-minimize-mobile="hide" data-minimize-offset="200" data-minimize-mobile-offset="200"
		data-minimize="minimize">
		<div class="m-container m-container--fluid m-container--full-height">
			<div class="m-stack m-stack--ver m-stack--desktop">
				<!-- BEGIN: Brand -->
				<div class="m-stack__item m-brand  m-brand--skin-dark ">
					<div class="m-stack m-stack--ver m-stack--general">
						<div class="m-stack__item m-stack__item--middle m-brand__logo">
							<a href="{{ url('/') }}" class="m-brand__logo-wrapper">
								<img alt="" src="<?php echo asset('assets/demo/default/media/img/logo/logo_default_dark.png') ?>"/>
							</a>
						</div>
						<div class="m-stack__item m-stack__item--middle m-brand__tools">
							<!-- BEGIN: Left Aside Minimize Toggle -->
							<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block m-brand__toggler--active">
							<span></span>
						</a>
						<!-- END -->
						<!-- BEGIN: Responsive Aside Left Menu Toggler -->
						<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
							<span></span>
						</a>
						<!-- END -->
						<!-- BEGIN: Responsive Header Menu Toggler -->
						<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
							<span></span>
						</a>
						<!-- END -->
						<!-- BEGIN: Topbar Toggler -->
						<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
							<i class="flaticon-more"></i>
						</a>
						<!-- BEGIN: Topbar Toggler -->
					</div>
				</div>
			</div>
			<!-- END: Brand -->
			<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
				<!-- BEGIN: Horizontal Menu -->
				<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
					<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
						<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" data-menu-submenu-toggle="click" aria-haspopup="true">
							<a href="#" class="m-menu__link m-menu__toggle">
								<i class="m-menu__link-icon flaticon-add"></i>
								<span class="m-menu__link-text">
									Relatórios
								</span>
								<i class="m-menu__hor-arrow la la-angle-down"></i>
								<i class="m-menu__ver-arrow la la-angle-right"></i>
							</a>
							<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
								<span class="m-menu__arrow m-menu__arrow--adjust"></span>
								<ul class="m-menu__subnav">
									<li class="m-menu__item " aria-haspopup="true">
										<a href="../../header/actions.html" class="m-menu__link ">
											<i class="m-menu__link-icon flaticon-file"></i>
											<span class="m-menu__link-text">
												Create New Post
											</span>
										</a>
									</li>
									<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
										<a href="../../header/actions.html" class="m-menu__link ">
											<i class="m-menu__link-icon flaticon-diagram"></i>
											<span class="m-menu__link-title">
												<span class="m-menu__link-wrap">
													<span class="m-menu__link-text">
														Generate Reports
													</span>
													<span class="m-menu__link-badge">
														<span class="m-badge m-badge--success">
															2
														</span>
													</span>
												</span>
											</span>
										</a>
									</li>
									<li class="m-menu__item  m-menu__item--submenu" data-menu-submenu-toggle="hover" aria-haspopup="true">
										<a href="#" class="m-menu__link m-menu__toggle">
											<i class="m-menu__link-icon flaticon-business"></i>
											<span class="m-menu__link-text">
												Manage Orders
											</span>
											<i class="m-menu__hor-arrow la la-angle-right"></i>
											<i class="m-menu__ver-arrow la la-angle-right"></i>
										</a>
										<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
											<span class="m-menu__arrow "></span>
											<ul class="m-menu__subnav">
												<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
													<a href="../../header/actions.html" class="m-menu__link ">
														<span class="m-menu__link-text">
															Latest Orders
														</span>
													</a>
												</li>
												<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
													<a href="../../header/actions.html" class="m-menu__link ">
														<span class="m-menu__link-text">
															Pending Orders
														</span>
													</a>
												</li>
												<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
													<a href="../../header/actions.html" class="m-menu__link ">
														<span class="m-menu__link-text">
															Processed Orders
														</span>
													</a>
												</li>
												<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
													<a href="../../header/actions.html" class="m-menu__link ">
														<span class="m-menu__link-text">
															Delivery Reports
														</span>
													</a>
												</li>
												<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
													<a href="../../header/actions.html" class="m-menu__link ">
														<span class="m-menu__link-text">
															Payments
														</span>
													</a>
												</li>
												<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
													<a href="../../header/actions.html" class="m-menu__link ">
														<span class="m-menu__link-text">
															Customers
														</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="m-menu__item  m-menu__item--submenu" data-menu-submenu-toggle="hover" aria-haspopup="true">
										<a href="#" class="m-menu__link m-menu__toggle">
											<i class="m-menu__link-icon flaticon-chat-1"></i>
											<span class="m-menu__link-text">
												Customer Feedbacks
											</span>
											<i class="m-menu__hor-arrow la la-angle-right"></i>
											<i class="m-menu__ver-arrow la la-angle-right"></i>
										</a>
										<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
											<span class="m-menu__arrow "></span>
											<ul class="m-menu__subnav">
												<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
													<a href="../../header/actions.html" class="m-menu__link ">
														<span class="m-menu__link-text">
															Customer Feedbacks
														</span>
													</a>
												</li>
												<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
													<a href="../../header/actions.html" class="m-menu__link ">
														<span class="m-menu__link-text">
															Supplier Feedbacks
														</span>
													</a>
												</li>
												<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
													<a href="../../header/actions.html" class="m-menu__link ">
														<span class="m-menu__link-text">
															Reviewed Feedbacks
														</span>
													</a>
												</li>
												<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
													<a href="../../header/actions.html" class="m-menu__link ">
														<span class="m-menu__link-text">
															Resolved Feedbacks
														</span>
													</a>
												</li>
												<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
													<a href="../../header/actions.html" class="m-menu__link ">
														<span class="m-menu__link-text">
															Feedback Reports
														</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
										<a href="../../header/actions.html" class="m-menu__link ">
											<i class="m-menu__link-icon flaticon-users"></i>
											<span class="m-menu__link-text">
												Register Member
											</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
				<!-- END: Horizontal Menu -->
				<!-- BEGIN: Topbar -->
				<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
					<div class="m-stack__item m-topbar__nav-wrapper">
						<ul class="m-topbar__nav m-nav m-nav--inline">
							<li class="
							m-nav__item m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-light	m-list-search m-list-search--skin-light"
							data-dropdown-toggle="click" data-dropdown-persistent="true" id="m_quicksearch" data-search-type="dropdown">
							<a href="#" class="m-nav__link m-dropdown__toggle">
								<span class="m-nav__link-icon">
									<i class="flaticon-search-1"></i>
								</span>
							</a>
							<div class="m-dropdown__wrapper">
								<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
								<div class="m-dropdown__inner ">
									<div class="m-dropdown__header">
										<form class="m-list-search__form">
											<div class="m-list-search__form-wrapper">
												<span class="m-list-search__form-input-wrapper">
													<input id="m_quicksearch_input" autocomplete="off" type="text" name="q" class="m-list-search__form-input" value="" placeholder="Search...">
												</span>
												<span class="m-list-search__form-icon-close" id="m_quicksearch_close">
													<i class="la la-remove"></i>
												</span>
											</div>
										</form>
									</div>
									<div class="m-dropdown__body">
										<div class="m-dropdown__scrollable m-scrollable" data-scrollable="true" data-max-height="300" data-mobile-max-height="200">
											<div class="m-dropdown__content"></div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width"
						data-dropdown-toggle="click" data-dropdown-persistent="true">
						<a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
							<span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
							<span class="m-nav__link-icon">
								<i class="flaticon-music-2"></i>
							</span>
						</a>
						<div class="m-dropdown__wrapper">
							<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
							<div class="m-dropdown__inner">
								<div class="m-dropdown__header m--align-center" style="background: url(<?php echo asset('assets/app/media/img/misc/notification_bg.jpg') ?>); background-size: cover;">
									<span class="m-dropdown__header-title">
										9 New
									</span>
									<span class="m-dropdown__header-subtitle">
										User Notifications
									</span>
								</div>
								<div class="m-dropdown__body">
									<div class="m-dropdown__content">
										<ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
											<li class="nav-item m-tabs__item">
												<a class="nav-link m-tabs__link active" data-toggle="tab" href="#topbar_notifications_notifications" role="tab">
													Alerts
												</a>
											</li>
											<li class="nav-item m-tabs__item">
												<a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_events" role="tab">
													Events
												</a>
											</li>
											<li class="nav-item m-tabs__item">
												<a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_logs" role="tab">
													Logs
												</a>
											</li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane active" id="topbar_notifications_notifications" role="tabpanel">
												<div class="m-scrollable" data-scrollable="true" data-max-height="250" data-mobile-max-height="200">
													<div class="m-list-timeline m-list-timeline--skin-light">
														<div class="m-list-timeline__items">
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
																<span class="m-list-timeline__text">
																	12 new users registered
																</span>
																<span class="m-list-timeline__time">
																	Just now
																</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge"></span>
																<span class="m-list-timeline__text">
																	System shutdown
																	<span class="m-badge m-badge--success m-badge--wide">
																		pending
																	</span>
																</span>
																<span class="m-list-timeline__time">
																	14 mins
																</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge"></span>
																<span class="m-list-timeline__text">
																	New invoice received
																</span>
																<span class="m-list-timeline__time">
																	20 mins
																</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge"></span>
																<span class="m-list-timeline__text">
																	DB overloaded 80%
																	<span class="m-badge m-badge--info m-badge--wide">
																		settled
																	</span>
																</span>
																<span class="m-list-timeline__time">
																	1 hr
																</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge"></span>
																<span class="m-list-timeline__text">
																	System error -
																	<a href="#" class="m-link">
																		Check
																	</a>
																</span>
																<span class="m-list-timeline__time">
																	2 hrs
																</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge"></span>
																<span class="m-list-timeline__text">
																	Production server down
																</span>
																<span class="m-list-timeline__time">
																	3 hrs
																</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge"></span>
																<span class="m-list-timeline__text">
																	Production server up
																</span>
																<span class="m-list-timeline__time">
																	5 hrs
																</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge"></span>
																<span href="" class="m-list-timeline__text">
																	New order received
																	<span class="m-badge m-badge--danger m-badge--wide">
																		urgent
																	</span>
																</span>
																<span class="m-list-timeline__time">
																	7 hrs
																</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
												<div class="m-scrollable" m-scrollabledata-scrollable="true" data-max-height="250" data-mobile-max-height="200">
													<div class="m-list-timeline m-list-timeline--skin-light">
														<div class="m-list-timeline__items">
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
																<a href="" class="m-list-timeline__text">
																	New order received
																</a>
																<span class="m-list-timeline__time">
																	Just now
																</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--state1-danger"></span>
																<a href="" class="m-list-timeline__text">
																	New invoice received
																</a>
																<span class="m-list-timeline__time">
																	20 mins
																</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
																<a href="" class="m-list-timeline__text">
																	Production server up
																</a>
																<span class="m-list-timeline__time">
																	5 hrs
																</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
																<a href="" class="m-list-timeline__text">
																	New order received
																</a>
																<span class="m-list-timeline__time">
																	7 hrs
																</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
																<a href="" class="m-list-timeline__text">
																	System shutdown
																</a>
																<span class="m-list-timeline__time">
																	11 mins
																</span>
															</div>
															<div class="m-list-timeline__item">
																<span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
																<a href="" class="m-list-timeline__text">
																	Production server down
																</a>
																<span class="m-list-timeline__time">
																	3 hrs
																</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
												<div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
													<div class="m-stack__item m-stack__item--center m-stack__item--middle">
														<span class="">
															All caught up!
															<br>
															No new logs.
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="m-nav__item m-topbar__quick-actions m-topbar__quick-actions--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light"
					data-dropdown-toggle="click">
					<a href="#" class="m-nav__link m-dropdown__toggle">
						<span class="m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide"></span>
						<span class="m-nav__link-icon">
							<i class="flaticon-share"></i>
						</span>
					</a>
					<div class="m-dropdown__wrapper">
						<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
						<div class="m-dropdown__inner">
							<div class="m-dropdown__header m--align-center" style="background: url(<?php echo asset('assets/app/media/img/misc/quick_actions_bg.jpg') ?>; background-size: cover;">
								<span class="m-dropdown__header-title">
									Quick Actions
								</span>
								<span class="m-dropdown__header-subtitle">
									Shortcuts
								</span>
							</div>
							<div class="m-dropdown__body m-dropdown__body--paddingless">
								<div class="m-dropdown__content">
									<div class="m-scrollable" data-scrollable="false" data-max-height="380" data-mobile-max-height="200">
										<div class="m-nav-grid m-nav-grid--skin-light">
											<div class="m-nav-grid__row">
												<a href="#" class="m-nav-grid__item">
													<i class="m-nav-grid__icon flaticon-file"></i>
													<span class="m-nav-grid__text">
														Generate Report
													</span>
												</a>
												<a href="#" class="m-nav-grid__item">
													<i class="m-nav-grid__icon flaticon-time"></i>
													<span class="m-nav-grid__text">
														Add New Event
													</span>
												</a>
											</div>
											<div class="m-nav-grid__row">
												<a href="#" class="m-nav-grid__item">
													<i class="m-nav-grid__icon flaticon-folder"></i>
													<span class="m-nav-grid__text">
														Create New Task
													</span>
												</a>
												<a href="#" class="m-nav-grid__item">
													<i class="m-nav-grid__icon flaticon-clipboard"></i>
													<span class="m-nav-grid__text">
														Completed Tasks
													</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
				data-dropdown-toggle="click">
				<a href="#" class="m-nav__link m-dropdown__toggle">
					<span class="m-topbar__userpic">
						<img src="<?php echo asset('assets/app/media/img/users/user4.jpg') ?>" class="m--img-rounded m--marginless m--img-centered" alt=""/>
					</span>
					<span class="m-topbar__username m--hide">
						Nick
					</span>
				</a>
				<div class="m-dropdown__wrapper">
					<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
					<div class="m-dropdown__inner">
						<div class="m-dropdown__header m--align-center" style="background: url(<?php echo asset('assets/app/media/img/misc/user_profile_bg.jpg') ?>; background-size: cover;">
							<div class="m-card-user m-card-user--skin-dark">
								<div class="m-card-user__pic">
									<img src="<?php echo asset('assets/app/media/img/users/user4.jpg') ?>" class="m--img-rounded m--marginless" alt=""
									/>
								</div>
								<div class="m-card-user__details">
									<span class="m-card-user__name m--font-weight-500">
										Mark Andre
									</span>
									<a href="" class="m-card-user__email m--font-weight-300 m-link">
										mark.andre@gmail.com
									</a>
								</div>
							</div>
						</div>
						<div class="m-dropdown__body">
							<div class="m-dropdown__content">
								<ul class="m-nav m-nav--skin-light">
									<li class="m-nav__section m--hide">
										<span class="m-nav__section-text">
											Section
										</span>
									</li>
									<li class="m-nav__item">
										<a href="../../header/profile.html" class="m-nav__link">
											<i class="m-nav__link-icon flaticon-profile-1"></i>
											<span class="m-nav__link-title">
												<span class="m-nav__link-wrap">
													<span class="m-nav__link-text">
														My Profile
													</span>
													<span class="m-nav__link-badge">
														<span class="m-badge m-badge--success">
															2
														</span>
													</span>
												</span>
											</span>
										</a>
									</li>
									<li class="m-nav__item">
										<a href="../../header/profile.html" class="m-nav__link">
											<i class="m-nav__link-icon flaticon-share"></i>
											<span class="m-nav__link-text">
												Activity
											</span>
										</a>
									</li>
									<li class="m-nav__item">
										<a href="../../header/profile.html" class="m-nav__link">
											<i class="m-nav__link-icon flaticon-chat-1"></i>
											<span class="m-nav__link-text">
												Messages
											</span>
										</a>
									</li>
									<li class="m-nav__separator m-nav__separator--fit"></li>
									<li class="m-nav__item">
										<a href="../../header/profile.html" class="m-nav__link">
											<i class="m-nav__link-icon flaticon-info"></i>
											<span class="m-nav__link-text">
												FAQ
											</span>
										</a>
									</li>
									<li class="m-nav__item">
										<a href="../../header/profile.html" class="m-nav__link">
											<i class="m-nav__link-icon flaticon-lifebuoy"></i>
											<span class="m-nav__link-text">
												Support
											</span>
										</a>
									</li>
									<li class="m-nav__separator m-nav__separator--fit"></li>
									<li class="m-nav__item">
										<a href="../../snippets/pages/user/login-1.html" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
											Logout
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li id="m_quick_sidebar_toggle" class="m-nav__item">
				<a href="#" class="m-nav__link m-dropdown__toggle">
					<span class="m-nav__link-icon">
						<i class="flaticon-grid-menu"></i>
					</span>
				</a>
			</li>
		</ul>
	</div>
</div>
<!-- END: Topbar -->
</div>
</div>
</div>
</header>
<!-- END: Header -->

<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
	<!-- BEGIN: Left Aside -->
	<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
		<!-- BEGIN: Aside Menu -->
		<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " data-menu-vertical="true"
		data-menu-scrollable="false" data-menu-dropdown-timeout="500">
		<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
			<li class="m-menu__item " aria-haspopup="true">
				<a href="{{ url('/') }}" class="m-menu__link ">
					<i class="m-menu__link-icon flaticon-line-graph"></i>
					<span class="m-menu__link-title">
						<span class="m-menu__link-wrap">
							<span class="m-menu__link-text">
								Instituição
							</span>
							<span class="m-menu__link-badge">
								<span class="m-badge m-badge--danger">
									2
								</span>
							</span>
						</span>
					</span>
				</a>
			</li>
			<li class="m-menu__item " aria-haspopup="true">
				<a href="{{ url('/') }}" class="m-menu__link ">
					<i class="m-menu__link-icon flaticon-line-graph"></i>
					<span class="m-menu__link-title">
						<span class="m-menu__link-wrap">
							<span class="m-menu__link-text">
								Campus
							</span>
							<span class="m-menu__link-badge">
								<span class="m-badge m-badge--danger">
									2
								</span>
							</span>
						</span>
					</span>
				</a>
			</li>
			<li class="m-menu__item " aria-haspopup="true">
				<a href="{{ url('/') }}" class="m-menu__link ">
					<i class="m-menu__link-icon flaticon-line-graph"></i>
					<span class="m-menu__link-title">
						<span class="m-menu__link-wrap">
							<span class="m-menu__link-text">
								Curso
							</span>
							<span class="m-menu__link-badge">
								<span class="m-badge m-badge--danger">
									2
								</span>
							</span>
						</span>
					</span>
				</a>
			</li>
			<li class="m-menu__item " aria-haspopup="true">
				<a href="{{ url('/') }}" class="m-menu__link ">
					<i class="m-menu__link-icon flaticon-line-graph"></i>
					<span class="m-menu__link-title">
						<span class="m-menu__link-wrap">
							<span class="m-menu__link-text">
								Aluno
							</span>
							<span class="m-menu__link-badge">
								<span class="m-badge m-badge--danger">
									2
								</span>
							</span>
						</span>
					</span>
				</a>
			</li>
			<li class="m-menu__section">
				<h4 class="m-menu__section-text">
					Components
				</h4>
				<i class="m-menu__section-icon flaticon-more-v3"></i>
			</li>
			<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" data-menu-submenu-toggle="hover">
				<a href="#" class="m-menu__link m-menu__toggle">
					<i class="m-menu__link-icon flaticon-share"></i>
					<span class="m-menu__link-text">
						Administrativo
					</span>
					<i class="m-menu__ver-arrow la la-angle-right"></i>
				</a>
				<div class="m-menu__submenu">
					<span class="m-menu__arrow"></span>
					<ul class="m-menu__subnav">
						<li class="m-menu__item " aria-haspopup="true">
							<a href="{{ url('admin/user') }}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									Usuários
								</span>
							</a>
						</li>
						<li class="m-menu__item " aria-haspopup="true">
							<a href="{{ url('admin/position') }}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									Cargos
								</span>
							</a>
						</li>
						<li class="m-menu__item " aria-haspopup="true">
							<a href="{{ url('admin/campus') }}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									Campus
								</span>
							</a>
						</li>
						<li class="m-menu__item " aria-haspopup="true">
							<a href="{{ url('admin/course') }}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									Cursos
								</span>
							</a>
						</li>
						<li class="m-menu__item " aria-haspopup="true">
							<a href="{{ URL::route('student') }}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									Alunos
								</span>
							</a>
						</li>
						<li class="m-menu__item " aria-haspopup="true">
							<a href="{{ url('admin/situation') }}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									Situação dos Alunos
								</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="m-menu__section">
				<h4 class="m-menu__section-text">
					Desenvolvedores
				</h4>
				<i class="m-menu__section-icon flaticon-more-v3"></i>
			</li>
			<li class="m-menu__item " aria-haspopup="true">
				<a href="{{ URL::route('classify') }}" class="m-menu__link ">
					<i class="m-menu__link-icon flaticon-line-graph"></i>
					<span class="m-menu__link-title">
						<span class="m-menu__link-wrap">
							<span class="m-menu__link-text">
								Classificar
							</span>
						</span>
					</span>
				</a>
			</li>
			<li class="m-menu__item " aria-haspopup="true">
				<a href="{{ URL::route('upload') }}" class="m-menu__link ">
					<i class="m-menu__link-icon flaticon-line-graph"></i>
					<span class="m-menu__link-title">
						<span class="m-menu__link-wrap">
							<span class="m-menu__link-text">
								Upload
							</span>
						</span>
					</span>
				</a>
			</li>
			<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" data-menu-submenu-toggle="hover">
				<a href="#" class="m-menu__link m-menu__toggle">
					<i class="m-menu__link-icon flaticon-share"></i>
					<span class="m-menu__link-text">
						Administrativo
					</span>
					<i class="m-menu__ver-arrow la la-angle-right"></i>
				</a>
				<div class="m-menu__submenu">
					<span class="m-menu__arrow"></span>
					<ul class="m-menu__subnav">
						<li class="m-menu__item " aria-haspopup="true">
							<a href="{{ URL::route('variable') }}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									Variaveis
								</span>
							</a>
						</li>
						<li class="m-menu__item " aria-haspopup="true">
							<a href="{{ URL::route('classifier') }}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									Classificadores
								</span>
							</a>
						</li>
						<li class="m-menu__item " aria-haspopup="true">
							<a href="{{ URL::route('upload') }}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									Upload
								</span>
							</a>
						</li>
						<li class="m-menu__item " aria-haspopup="true">
							<a href="{{ URL::route('upload') }}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									Socicons
								</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
		</ul>
	</div>
	<!-- END: Aside Menu -->
</div>
<!-- END: Left Aside -->


	<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body">
		<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver	m-container m-container--responsive m-container--xxl m-page__container">


		<!-- BEGIN: Subheader
	<div class="m-subheader ">
	<div class="d-flex align-items-center">
	<div class="mr-auto">
	<h3 class="m-subheader__title m-subheader__title--separator">
	@yield('title')
</h3>
<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
<li class="m-nav__item m-nav__item--home">
<a href="#" class="m-nav__link m-nav__link--icon">
<i class="m-nav__link-icon la la-home"></i>
</a>
</li>
<li class="m-nav__separator">
-
</li>
<li class="m-nav__item">
<a href="" class="m-nav__link">
<span class="m-nav__link-text">
Utils
</span>
</a>
</li>
<li class="m-nav__separator">
-
</li>
<li class="m-nav__item">
<a href="" class="m-nav__link">
<span class="m-nav__link-text">
Idle Timer
</span>
</a>
</li>
</ul>
</div>
<div>
<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover"
aria-expanded="true">
<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
<i class="la la-plus m--hide"></i>
<i class="la la-ellipsis-h"></i>
</a>
<div class="m-dropdown__wrapper">
<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
<div class="m-dropdown__inner">
<div class="m-dropdown__body">
<div class="m-dropdown__content">
<ul class="m-nav">
<li class="m-nav__section m-nav__section--first m--hide">
<span class="m-nav__section-text">
Quick Actions
</span>
</li>
<li class="m-nav__item">
<a href="" class="m-nav__link">
<i class="m-nav__link-icon flaticon-share"></i>
<span class="m-nav__link-text">
Activity
</span>
</a>
</li>
<li class="m-nav__item">
<a href="" class="m-nav__link">
<i class="m-nav__link-icon flaticon-chat-1"></i>
<span class="m-nav__link-text">
Messages
</span>
</a>
</li>
<li class="m-nav__item">
<a href="" class="m-nav__link">
<i class="m-nav__link-icon flaticon-info"></i>
<span class="m-nav__link-text">
FAQ
</span>
</a>
</li>
<li class="m-nav__item">
<a href="" class="m-nav__link">
<i class="m-nav__link-icon flaticon-lifebuoy"></i>
<span class="m-nav__link-text">
Support
</span>
</a>
</li>
<li class="m-nav__separator m-nav__separator--fit"></li>
<li class="m-nav__item">
<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
Submit
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- END: Subheader -->


	@yield('content')

</div>
</div>
</div>
<!-- end:: Body -->
<!-- begin::Footer -->
<footer class="m-grid__item		m-footer ">
	<div class="m-container m-container--fluid m-container--full-height m-page__container">
		<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
			<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
				<span class="m-footer__copyright">
					2017 &copy; Metronic theme by
					<a href="#" class="m-link">
						Keenthemes
					</a>
				</span>
			</div>
			<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
				<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
					<li class="m-nav__item">
						<a href="#" class="m-nav__link">
							<span class="m-nav__link-text">
								About
							</span>
						</a>
					</li>
					<li class="m-nav__item">
						<a href="#" class="m-nav__link">
							<span class="m-nav__link-text">
								Privacy
							</span>
						</a>
					</li>
					<li class="m-nav__item">
						<a href="#" class="m-nav__link">
							<span class="m-nav__link-text">
								T&C
							</span>
						</a>
					</li>
					<li class="m-nav__item">
						<a href="#" class="m-nav__link">
							<span class="m-nav__link-text">
								Purchase
							</span>
						</a>
					</li>
					<li class="m-nav__item m-nav__item">
						<a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
							<i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- end::Footer -->
</div>
<!-- end:: Page -->
<!-- begin::Quick Sidebar -->
<div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
	<div class="m-quick-sidebar__content m--hide">
		<span id="m_quick_sidebar_close" class="m-quick-sidebar__close">
			<i class="la la-close"></i>
		</span>
		<ul id="m_quick_sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
			<li class="nav-item m-tabs__item">
				<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_quick_sidebar_tabs_messenger" role="tab">
					Messages
				</a>
			</li>
			<li class="nav-item m-tabs__item">
				<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_settings" role="tab">
					Settings
				</a>
			</li>
			<li class="nav-item m-tabs__item">
				<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_logs" role="tab">
					Logs
				</a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active m-scrollable" id="m_quick_sidebar_tabs_messenger" role="tabpanel">
				<div class="m-messenger m-messenger--message-arrow m-messenger--skin-light">
					<div class="m-messenger__messages">
						<div class="m-messenger__message m-messenger__message--in">
							<div class="m-messenger__message-pic">
								<img src="<?php echo asset('assets/app/media/img/users/user3.jpg') ?>" alt="" />
							</div>
							<div class="m-messenger__message-body">
								<div class="m-messenger__message-arrow"></div>
								<div class="m-messenger__message-content">
									<div class="m-messenger__message-username">
										Megan wrote
									</div>
									<div class="m-messenger__message-text">
										Hi Bob. What time will be the meeting ?
									</div>
								</div>
							</div>
						</div>
						<div class="m-messenger__message m-messenger__message--out">
							<div class="m-messenger__message-body">
								<div class="m-messenger__message-arrow"></div>
								<div class="m-messenger__message-content">
									<div class="m-messenger__message-text">
										Hi Megan. It's at 2.30PM
									</div>
								</div>
							</div>
						</div>
						<div class="m-messenger__message m-messenger__message--in">
							<div class="m-messenger__message-pic">
								<img src="<?php echo asset('assets/app/media/img/users/user3.jpg') ?>" alt="" />
							</div>
							<div class="m-messenger__message-body">
								<div class="m-messenger__message-arrow"></div>
								<div class="m-messenger__message-content">
									<div class="m-messenger__message-username">
										Megan wrote
									</div>
									<div class="m-messenger__message-text">
										Will the development team be joining ?
									</div>
								</div>
							</div>
						</div>
						<div class="m-messenger__message m-messenger__message--out">
							<div class="m-messenger__message-body">
								<div class="m-messenger__message-arrow"></div>
								<div class="m-messenger__message-content">
									<div class="m-messenger__message-text">
										Yes sure. I invited them as well
									</div>
								</div>
							</div>
						</div>
						<div class="m-messenger__datetime">
							2:30PM
						</div>
						<div class="m-messenger__message m-messenger__message--in">
							<div class="m-messenger__message-pic">
								<img src="<?php echo asset('assets/app/media/img/users/user3.jpg') ?>" alt="" />
							</div>
							<div class="m-messenger__message-body">
								<div class="m-messenger__message-arrow"></div>
								<div class="m-messenger__message-content">
									<div class="m-messenger__message-username">
										Megan wrote
									</div>
									<div class="m-messenger__message-text">
										Noted. For the Coca-Cola Mobile App project as well ?
									</div>
								</div>
							</div>
						</div>
						<div class="m-messenger__message m-messenger__message--out">
							<div class="m-messenger__message-body">
								<div class="m-messenger__message-arrow"></div>
								<div class="m-messenger__message-content">
									<div class="m-messenger__message-text">
										Yes, sure.
									</div>
								</div>
							</div>
						</div>
						<div class="m-messenger__message m-messenger__message--out">
							<div class="m-messenger__message-body">
								<div class="m-messenger__message-arrow"></div>
								<div class="m-messenger__message-content">
									<div class="m-messenger__message-text">
										Please also prepare the quotation for the Loop CRM project as well.
									</div>
								</div>
							</div>
						</div>
						<div class="m-messenger__datetime">
							3:15PM
						</div>
						<div class="m-messenger__message m-messenger__message--in">
							<div class="m-messenger__message-no-pic m--bg-fill-danger">
								<span>
									M
								</span>
							</div>
							<div class="m-messenger__message-body">
								<div class="m-messenger__message-arrow"></div>
								<div class="m-messenger__message-content">
									<div class="m-messenger__message-username">
										Megan wrote
									</div>
									<div class="m-messenger__message-text">
										Noted. I will prepare it.
									</div>
								</div>
							</div>
						</div>
						<div class="m-messenger__message m-messenger__message--out">
							<div class="m-messenger__message-body">
								<div class="m-messenger__message-arrow"></div>
								<div class="m-messenger__message-content">
									<div class="m-messenger__message-text">
										Thanks Megan. I will see you later.
									</div>
								</div>
							</div>
						</div>
						<div class="m-messenger__message m-messenger__message--in">
							<div class="m-messenger__message-pic">
								<img src="<?php echo asset('assets/app/media/img/users/user3.jpg') ?>" alt="" />
							</div>
							<div class="m-messenger__message-body">
								<div class="m-messenger__message-arrow"></div>
								<div class="m-messenger__message-content">
									<div class="m-messenger__message-username">
										Megan wrote
									</div>
									<div class="m-messenger__message-text">
										Sure. See you in the meeting soon.
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="m-messenger__seperator"></div>
					<div class="m-messenger__form">
						<div class="m-messenger__form-controls">
							<input type="text" name="" placeholder="Type here..." class="m-messenger__form-input">
						</div>
						<div class="m-messenger__form-tools">
							<a href="" class="m-messenger__form-attachment">
								<i class="la la-paperclip"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane  m-scrollable" id="m_quick_sidebar_tabs_settings" role="tabpanel">
				<div class="m-list-settings">
					<div class="m-list-settings__group">
						<div class="m-list-settings__heading">
							General Settings
						</div>
						<div class="m-list-settings__item">
							<span class="m-list-settings__item-label">
								Email Notifications
							</span>
							<span class="m-list-settings__item-control">
								<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
									<label>
										<input type="checkbox" checked="checked" name="">
										<span></span>
									</label>
								</span>
							</span>
						</div>
						<div class="m-list-settings__item">
							<span class="m-list-settings__item-label">
								Site Tracking
							</span>
							<span class="m-list-settings__item-control">
								<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
									<label>
										<input type="checkbox" name="">
										<span></span>
									</label>
								</span>
							</span>
						</div>
						<div class="m-list-settings__item">
							<span class="m-list-settings__item-label">
								SMS Alerts
							</span>
							<span class="m-list-settings__item-control">
								<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
									<label>
										<input type="checkbox" name="">
										<span></span>
									</label>
								</span>
							</span>
						</div>
						<div class="m-list-settings__item">
							<span class="m-list-settings__item-label">
								Backup Storage
							</span>
							<span class="m-list-settings__item-control">
								<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
									<label>
										<input type="checkbox" name="">
										<span></span>
									</label>
								</span>
							</span>
						</div>
						<div class="m-list-settings__item">
							<span class="m-list-settings__item-label">
								Audit Logs
							</span>
							<span class="m-list-settings__item-control">
								<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
									<label>
										<input type="checkbox" checked="checked" name="">
										<span></span>
									</label>
								</span>
							</span>
						</div>
					</div>
					<div class="m-list-settings__group">
						<div class="m-list-settings__heading">
							System Settings
						</div>
						<div class="m-list-settings__item">
							<span class="m-list-settings__item-label">
								System Logs
							</span>
							<span class="m-list-settings__item-control">
								<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
									<label>
										<input type="checkbox" name="">
										<span></span>
									</label>
								</span>
							</span>
						</div>
						<div class="m-list-settings__item">
							<span class="m-list-settings__item-label">
								Error Reporting
							</span>
							<span class="m-list-settings__item-control">
								<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
									<label>
										<input type="checkbox" name="">
										<span></span>
									</label>
								</span>
							</span>
						</div>
						<div class="m-list-settings__item">
							<span class="m-list-settings__item-label">
								Applications Logs
							</span>
							<span class="m-list-settings__item-control">
								<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
									<label>
										<input type="checkbox" name="">
										<span></span>
									</label>
								</span>
							</span>
						</div>
						<div class="m-list-settings__item">
							<span class="m-list-settings__item-label">
								Backup Servers
							</span>
							<span class="m-list-settings__item-control">
								<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
									<label>
										<input type="checkbox" checked="checked" name="">
										<span></span>
									</label>
								</span>
							</span>
						</div>
						<div class="m-list-settings__item">
							<span class="m-list-settings__item-label">
								Audit Logs
							</span>
							<span class="m-list-settings__item-control">
								<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
									<label>
										<input type="checkbox" name="">
										<span></span>
									</label>
								</span>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane  m-scrollable" id="m_quick_sidebar_tabs_logs" role="tabpanel">
				<div class="m-list-timeline">
					<div class="m-list-timeline__group">
						<div class="m-list-timeline__heading">
							System Logs
						</div>
						<div class="m-list-timeline__items">
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
								<a href="" class="m-list-timeline__text">
									12 new users registered
									<span class="m-badge m-badge--warning m-badge--wide">
										important
									</span>
								</a>
								<span class="m-list-timeline__time">
									Just now
								</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
								<a href="" class="m-list-timeline__text">
									System shutdown
								</a>
								<span class="m-list-timeline__time">
									11 mins
								</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
								<a href="" class="m-list-timeline__text">
									New invoice received
								</a>
								<span class="m-list-timeline__time">
									20 mins
								</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
								<a href="" class="m-list-timeline__text">
									Database overloaded 89%
									<span class="m-badge m-badge--success m-badge--wide">
										resolved
									</span>
								</a>
								<span class="m-list-timeline__time">
									1 hr
								</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
								<a href="" class="m-list-timeline__text">
									System error
								</a>
								<span class="m-list-timeline__time">
									2 hrs
								</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
								<a href="" class="m-list-timeline__text">
									Production server down
									<span class="m-badge m-badge--danger m-badge--wide">
										pending
									</span>
								</a>
								<span class="m-list-timeline__time">
									3 hrs
								</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
								<a href="" class="m-list-timeline__text">
									Production server up
								</a>
								<span class="m-list-timeline__time">
									5 hrs
								</span>
							</div>
						</div>
					</div>
					<div class="m-list-timeline__group">
						<div class="m-list-timeline__heading">
							Applications Logs
						</div>
						<div class="m-list-timeline__items">
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
								<a href="" class="m-list-timeline__text">
									New order received
									<span class="m-badge m-badge--info m-badge--wide">
										urgent
									</span>
								</a>
								<span class="m-list-timeline__time">
									7 hrs
								</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
								<a href="" class="m-list-timeline__text">
									12 new users registered
								</a>
								<span class="m-list-timeline__time">
									Just now
								</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
								<a href="" class="m-list-timeline__text">
									System shutdown
								</a>
								<span class="m-list-timeline__time">
									11 mins
								</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
								<a href="" class="m-list-timeline__text">
									New invoices received
								</a>
								<span class="m-list-timeline__time">
									20 mins
								</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
								<a href="" class="m-list-timeline__text">
									Database overloaded 89%
								</a>
								<span class="m-list-timeline__time">
									1 hr
								</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
								<a href="" class="m-list-timeline__text">
									System error
									<span class="m-badge m-badge--info m-badge--wide">
										pending
									</span>
								</a>
								<span class="m-list-timeline__time">
									2 hrs
								</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
								<a href="" class="m-list-timeline__text">
									Production server down
								</a>
								<span class="m-list-timeline__time">
									3 hrs
								</span>
							</div>
						</div>
					</div>
					<div class="m-list-timeline__group">
						<div class="m-list-timeline__heading">
							Server Logs
						</div>
						<div class="m-list-timeline__items">
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
								<a href="" class="m-list-timeline__text">
									Production server up
								</a>
								<span class="m-list-timeline__time">
									5 hrs
								</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
								<a href="" class="m-list-timeline__text">
									New order received
								</a>
								<span class="m-list-timeline__time">
									7 hrs
								</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
								<a href="" class="m-list-timeline__text">
									12 new users registered
								</a>
								<span class="m-list-timeline__time">
									Just now
								</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
								<a href="" class="m-list-timeline__text">
									System shutdown
								</a>
								<span class="m-list-timeline__time">
									11 mins
								</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
								<a href="" class="m-list-timeline__text">
									New invoice received
								</a>
								<span class="m-list-timeline__time">
									20 mins
								</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
								<a href="" class="m-list-timeline__text">
									Database overloaded 89%
								</a>
								<span class="m-list-timeline__time">
									1 hr
								</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
								<a href="" class="m-list-timeline__text">
									System error
								</a>
								<span class="m-list-timeline__time">
									2 hrs
								</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
								<a href="" class="m-list-timeline__text">
									Production server down
								</a>
								<span class="m-list-timeline__time">
									3 hrs
								</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
								<a href="" class="m-list-timeline__text">
									Production server up
								</a>
								<span class="m-list-timeline__time">
									5 hrs
								</span>
							</div>
							<div class="m-list-timeline__item">
								<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
								<a href="" class="m-list-timeline__text">
									New order received
								</a>
								<span class="m-list-timeline__time">
									1117 hrs
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end::Quick Sidebar -->
<!-- begin::Scroll Top -->
<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
	<i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->

<!--begin::Base Scripts -->
<script src="<?php echo asset('assets/vendors/base/vendors.bundle.js') ?>" type="text/javascript"></script>
<script src="<?php echo asset('assets/demo/default/base/scripts.bundle.js') ?>" type="text/javascript"></script>
<!--end::Base Scripts -->
<!--begin::Page Snippets -->
<script src="<?php echo asset('assets/app/js/dashboard.js') ?>" type="text/javascript"></script>
<!--end::Page Snippets -->
<script src="<?php echo asset('js/notification.js') ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/my.functions.js') ?>" type="text/javascript"></script>
<script>
@if (Session::has('type'))
notification('{{ Session::get('message')}}', '{{ Session::get('type')}}');
@endif
</script>

@yield('scripts')
</body>

</html>

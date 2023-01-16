<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<?php if(url()->current() == route('front.index')): ?>
<title><?php echo $__env->yieldContent('hometitle'); ?></title>
<?php else: ?>
<title><?php echo e($setting->title); ?> -<?php echo $__env->yieldContent('title'); ?></title>
<?php endif; ?>

<!-- SEO Meta Tags-->
<?php echo $__env->yieldContent('meta'); ?>
<meta name="author" content="<?php echo e($setting->title); ?>">
<meta name="distribution" content="web">
<!-- Mobile Specific Meta Tag-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicon Icons-->
<link rel="icon" type="image/png" href="<?php echo e(asset('public/assets/images/'.$setting->favicon)); ?>">
<link rel="apple-touch-icon" href="<?php echo e(asset('public/assets/images/'.$setting->favicon)); ?>">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(asset('public/assets/images/'.$setting->favicon)); ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('public/assets/images/'.$setting->favicon)); ?>">
<link rel="apple-touch-icon" sizes="167x167" href="<?php echo e(asset('public/assets/images/'.$setting->favicon)); ?>">
<!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
<link rel="stylesheet" media="screen" href="<?php echo e(asset('public/assets/front/css/plugins.min.css')); ?>">

<?php echo $__env->yieldContent('styleplugins'); ?>

<link id="mainStyles" rel="stylesheet" media="screen" href="<?php echo e(asset('public/assets/front/css/styles.min.css')); ?>">

<link id="mainStyles" rel="stylesheet" media="screen" href="<?php echo e(asset('public/assets/front/css/responsive.css')); ?>">
<!-- Color css -->
<link href="<?php echo e(asset('public/assets/front/css/color.php?primary_color=').str_replace('#','',$setting->primary_color)); ?>" rel="stylesheet">

<!-- Modernizr-->
<script src="<?php echo e(asset('public/assets/front/js/modernizr.min.js')); ?>"></script>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<link href="<?php echo e(asset('resources/views/front/themes/custom-theme/custom-frontend.css')); ?>" rel="stylesheet">



<?php if(DB::table('languages')->where('is_default',1)->first()->rtl == 1): ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/front/css/rtl.css')); ?>">
<?php endif; ?>
<style>
    <?php echo e($setting->custom_css); ?>

</style>

<?php if($setting->is_google_adsense == '1'): ?>
    <?php echo $setting->google_adsense; ?>

<?php endif; ?>



<?php if($setting->is_google_analytics == '1'): ?>
    <?php echo $setting->google_analytics; ?>

<?php endif; ?>



<?php if($setting->is_facebook_pixel == '1'): ?>
    <?php echo $setting->facebook_pixel; ?>

<?php endif; ?>


</head>
<!-- Body-->
<body class="
<?php if($setting->theme == 'theme1'): ?>
body_theme1
<?php elseif($setting->theme == 'theme2'): ?>
body_theme2
<?php elseif($setting->theme == 'theme3'): ?>
body_theme3
<?php elseif($setting->theme == 'theme4'): ?>
body_theme4
<?php endif; ?>
">

<!-- Preloader Start -->
<?php if($setting->is_loader == 1): ?>
<div id="preloader">
    <img src="<?php echo e(asset('public/assets/images/'.$setting->loader)); ?>" alt="<?php echo e(__('Loading...')); ?>">
</div>
<?php endif; ?>

<!-- Preloader endif -->


<!-- Header-->
<header class="site-header">
	<nav class="navbar navbar-expand-lg" style="    display: flex!important;padding-top: 20px !important;background: #000 !important;padding-bottom: 20px !important;">
		<div class="container-fluid">
		  <div class="site-branding"><a class="site-logo align-self-center" href="<?php echo e(route('front.index')); ?>"><img src="<?php echo e(asset('public/assets/images/'.$setting->logo)); ?>" alt="<?php echo e($setting->title); ?>"></a></div>  
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon text-white"><i class="bi bi-list"></i></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ms-md-auto gap-2">
			  <li class="nav-item rounded">
				<a class="nav-link" aria-current="page" href="/">Home</a>
			  </li>
			  <li class="nav-item rounded">
				<a class="nav-link" href="/about-us">About Us</a>
			  </li>
			  <li class="nav-item dropdown rounded">
				<a class="nav-link dropdown-toggle" href="/AuroraExperiences/services.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
				<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
				  <li><a class="dropdown-item" href="/events">Events</a></li>
				  <li><a class="dropdown-item" href="<?php echo e(route('front.catalog')); ?>">Digital Products</a></li>
				  <li><a class="dropdown-item" href="#">Lesson Library</a></li>
				  <li><a class="dropdown-item" href="#">Podcast</a></li>
				  <li><a class="dropdown-item" href="#">Live broadcast</a></li>
				</ul>
			  </li>
			  <li class="nav-item dropdown rounded">
				  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Get Involved</a>
				  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="#">Feed</a></li>
					<li><a class="dropdown-item" href="#">Fund Raising</a></li>
					<li><a class="dropdown-item" href="<?php echo e(route('front.blog')); ?>">Blog</a></li>
					<li><a class="dropdown-item" href="/contacts">Contact Us</a></li>
				  </ul>
				</li>
				<li class="nav-item nav-signUp">
				  <a href="/signup" class="nav-link">
					  Donate/Subscribe
				  </a>
			  </li>
			  <li class="nav-item nav-signIn ml-3">
				  <div class="login-register ">
                            <?php if(!Auth::user()): ?>
                            <a class="track-order-link mr-0" href="<?php echo e(route('user.login')); ?>">
                            <?php echo e(__('Login/Register')); ?>

                            </a>
                            <?php else: ?>
                            <div class="t-h-dropdown">
                                <div class="main-link">
                                    <i class="icon-user pr-2"></i> <span class="text-label"><?php echo e(Auth::user()->first_name); ?></span>
                                </div>
                                <div class="t-h-dropdown-menu">
                                    <a href="<?php echo e(route('user.dashboard')); ?>"><i class="icon-chevron-right pr-2"></i><?php echo e(__('Dashboard')); ?></a>
                                    <a href="<?php echo e(route('user.logout')); ?>"><i class="icon-chevron-right pr-2"></i><?php echo e(__('Logout')); ?></a>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
			  </li>
              <li class="nav-item rounded">
				<?php if(Auth::check()): ?>
                        <div class="toolbar-item hidden-on-mobile"><a  class="nav-link" href="<?php echo e(route('user.wishlist.index')); ?>">
                            <div><span class="compare-icon"><i  style="font-size: 26px;"   class="icon-heart"></i><span class="count-label wishlist_count"><?php echo e(Auth::user()->wishlists->count()); ?></span></span></div>
                            </a>
                        </div>
                        <?php else: ?>
                        <div class="toolbar-item hidden-on-mobile"><a class="nav-link" href="<?php echo e(route('user.wishlist.index')); ?>">
                          <div><span class="compare-icon"><i style="font-size: 26px;" class="icon-heart"></i></span></div>
                          </a>
                      </div>
                        <?php endif; ?>
			  </li>
			  <li class="nav-item rounded">
				<div class="toolbar-item"><a class="nav-link" href="<?php echo e(route('front.cart')); ?>">
                            <div><span class="cart-icon"><i style="font-size: 26px;" class="icon-shopping-cart"></i><span class="count-label cart_count"><?php echo e(Session::has('cart') ? count(Session::get('cart')) : '0'); ?> </span></span></div>
                            </a>
                            <div class="toolbar-dropdown cart-dropdown widget-cart  cart_view_header" id="header_cart_load" data-target="<?php echo e(route('front.header.cart')); ?>">
                            <?php echo $__env->make('includes.header_cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
			  </li>
                        
                        

			</ul>
		  </div>
		</div>
	  </nav>
	</div>
</header>


<!--
<header class="site-header navbar-sticky">
    <div class="menu-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="t-m-s-a">
                        <a class="track-order-link" href="<?php echo e(route('front.order.track')); ?>"><i class="icon-map-pin"></i><?php echo e(__('Track Order')); ?></a>
                        <a class="track-order-link compare-mobile d-lg-none" href="<?php echo e(route('fornt.compare.index')); ?>"><?php echo e(__('Compare')); ?></a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="right-area">

                        <a class="track-order-link wishlist-mobile d-inline-block d-lg-none" href="<?php echo e(route('user.wishlist.index')); ?>"><i class="icon-heart"></i><?php echo e(__('Wishlist')); ?></a>
                        
                        <div class="t-h-dropdown ">
                            <a class="main-link" href="#"><?php echo e(__('Currency')); ?><i class="icon-chevron-down"></i></a>
                            <div class="t-h-dropdown-menu">
                                <?php $__currentLoopData = DB::table('currencies')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="<?php echo e(Session::get('currency') == $currency->id ? 'active' : ($currency->is_default == 1 && !Session::has('currency') ? 'active' : '')); ?>" href="<?php echo e(route('front.currency.setup',$currency->id)); ?>"><i class="icon-chevron-right pr-2"></i><?php echo e($currency->name); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>

                        <div class="login-register ">
                            <?php if(!Auth::user()): ?>
                            <a class="track-order-link mr-0" href="<?php echo e(route('user.login')); ?>">
                            <?php echo e(__('Login/Register')); ?>

                            </a>
                            <?php else: ?>
                            <div class="t-h-dropdown">
                                <div class="main-link">
                                    <i class="icon-user pr-2"></i> <span class="text-label"><?php echo e(Auth::user()->first_name); ?></span>
                                </div>
                                <div class="t-h-dropdown-menu">
                                    <a href="<?php echo e(route('user.dashboard')); ?>"><i class="icon-chevron-right pr-2"></i><?php echo e(__('Dashboard')); ?></a>
                                    <a href="<?php echo e(route('user.logout')); ?>"><i class="icon-chevron-right pr-2"></i><?php echo e(__('Logout')); ?></a>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- Topbar-->
    <!--<div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between">
                        <!-- Logo-->
                        <!--<div class="site-branding"><a class="site-logo align-self-center" href="<?php echo e(route('front.index')); ?>"><img src="<?php echo e(asset('public/assets/images/'.$setting->logo)); ?>" alt="<?php echo e($setting->title); ?>"></a></div>
                        <!-- Search / Categories-->
                        <!--<div class="search-box-wrap d-none d-lg-block d-flex">
                        <div class="search-box-inner align-self-center">
                            <div class="search-box d-flex">
                                <select name="category" id="category_select" class="categoris">
									<option value=""><?php echo e(__('All')); ?></option>
                                    <?php $__currentLoopData = DB::table('categories')->whereStatus(1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->slug); ?>"><?php echo e($category->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
                                <form class="input-group" id="header_search_form" action="<?php echo e(route('front.catalog')); ?>" method="get">
                                    <input type="hidden" name="category" value="" id="search__category">
                                    <span class="input-group-btn">
                                    <button type="submit"><i class="icon-search"></i></button>
                                    </span>
                                    <input class="form-control" type="text" data-target="<?php echo e(route('front.search.suggest')); ?>" id="__product__search" name="search" placeholder="<?php echo e(__('Search by product name')); ?>">
                                    <div class="serch-result d-none">
                                       
                                    </div>
                                </form>
                            </div>
                        </div>
                            <span class="d-block d-lg-none close-m-serch"><i class="icon-x"></i></span>
                        </div>
                        <!-- Toolbar-->
                        <!--<div class="toolbar d-flex">

                        <div class="toolbar-item close-m-serch visible-on-mobile"><a href="#">
                            <div>
                                <i class="icon-search"></i>
                            </div>
                            </a>
                        </div>
                        <div class="toolbar-item visible-on-mobile mobile-menu-toggle"><a href="#">
                            <div><i class="icon-menu"></i><span class="text-label"><?php echo e(__('Menu')); ?></span></div>
                            </a>
                        </div>

                        <div class="toolbar-item hidden-on-mobile"><a href="<?php echo e(route('fornt.compare.index')); ?>">
                            <div><span class="compare-icon"><i class="icon-repeat"></i><span class="count-label compare_count"><?php echo e(Session::has('compare') ? count(Session::get('compare')) : '0'); ?></span></span><span class="text-label"><?php echo e(__('Compare')); ?></span></div>
                            </a>
                        </div>
                        <?php if(Auth::check()): ?>
                        <div class="toolbar-item hidden-on-mobile"><a href="<?php echo e(route('user.wishlist.index')); ?>">
                            <div><span class="compare-icon"><i class="icon-heart"></i><span class="count-label wishlist_count"><?php echo e(Auth::user()->wishlists->count()); ?></span></span><span class="text-label"><?php echo e(__('Wishlist')); ?></span></div>
                            </a>
                        </div>
                        <?php else: ?>
                        <div class="toolbar-item hidden-on-mobile"><a href="<?php echo e(route('user.wishlist.index')); ?>">
                          <div><span class="compare-icon"><i class="icon-heart"></i></span><span class="text-label"><?php echo e(__('Wishlist')); ?></span></div>
                          </a>
                      </div>
                        <?php endif; ?>
                        <div class="toolbar-item"><a href="<?php echo e(route('front.cart')); ?>">
                            <div><span class="cart-icon"><i class="icon-shopping-cart"></i><span class="count-label cart_count"><?php echo e(Session::has('cart') ? count(Session::get('cart')) : '0'); ?> </span></span><span class="text-label"><?php echo e(__('Cart')); ?></span></div>
                            </a>
                            <div class="toolbar-dropdown cart-dropdown widget-cart  cart_view_header" id="header_cart_load" data-target="<?php echo e(route('front.header.cart')); ?>">
                            <?php echo $__env->make('includes.header_cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                        </div>

                        <!-- Mobile Menu-->
                        <!--<div class="mobile-menu">
                            <!-- Slideable (Mobile) Menu-->
                            <!--<div class="mm-heading-area">
                                <h4><?php echo e(__('Navigation')); ?></h4>
                                <div class="toolbar-item visible-on-mobile mobile-menu-toggle mm-t-two">
                                    <a href="#">
                                        <div> <i class="icon-x"></i></div>
                                    </a>
                                </div>
                            </div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation99">
                                  <span class="active" id="mmenu-tab" data-bs-toggle="tab" data-bs-target="#mmenu"  role="tab" aria-controls="mmenu" aria-selected="true"><?php echo e(__('Menu')); ?></span>
                                </li>
                                <li class="nav-item" role="presentation99">
                                  <span class="" id="mcat-tab" data-bs-toggle="tab" data-bs-target="#mcat"  role="tab" aria-controls="mcat" aria-selected="false"><?php echo e(__('Category')); ?></span>
                                </li>

                              </ul>
                              <div class="tab-content p-0" >
                                <div class="tab-pane fade show active" id="mmenu" role="tabpanel" aria-labelledby="mmenu-tab">
                                    <nav class="slideable-menu">
                                        <ul>
                                            <li class="<?php echo e(request()->routeIs('front.index') ? 'active' : ''); ?>"><a href="<?php echo e(route('front.index')); ?>"><i class="icon-chevron-right"></i><?php echo e(__('Home')); ?></a></li>
                                            <?php if($setting->is_shop == 1): ?>
                                            <li class="<?php echo e(request()->routeIs('front.catalog*')  ? 'active' : ''); ?>"><a href="<?php echo e(route('front.catalog')); ?>"><i class="icon-chevron-right"></i><?php echo e(__('Shop')); ?></a></li>
                                            <?php endif; ?>
                                            <?php if($setting->is_campaign == 1): ?>
                                            <li class="<?php echo e(request()->routeIs('front.campaign')  ? 'active' : ''); ?>"><a href="<?php echo e(route('front.campaign')); ?>"><i class="icon-chevron-right"></i><?php echo e(__('Campaign')); ?></a></li>
                                            <?php endif; ?>
                                            <?php if($setting->is_brands == 1): ?>
                                            <li class="<?php echo e(request()->routeIs('front.brand')  ? 'active' : ''); ?>"><a href="<?php echo e(route('front.brand')); ?>"><i class="icon-chevron-right"></i><?php echo e(__('Brand')); ?></a></li>
                                            <?php endif; ?>

                                            <?php if($setting->is_blog == 1): ?>
                                            <li class="<?php echo e(request()->routeIs('front.blog*') ? 'active' : ''); ?>"><a href="<?php echo e(route('front.blog')); ?>"><i class="icon-chevron-right"></i><?php echo e(__('Blog')); ?></a></li>
                                            <?php endif; ?>
                                            <li class="t-h-dropdown">
                                                <a class="" href="#"><i class="icon-chevron-right"></i><?php echo e(__('Pages')); ?> <i class="icon-chevron-down"></i></a>
                                                <div class="t-h-dropdown-menu">
                                                    <?php if($setting->is_faq == 1): ?>
                                                    <a class="<?php echo e(request()->routeIs('front.faq*') ? 'active' : ''); ?>" href="<?php echo e(route('front.faq')); ?>"><i class="icon-chevron-right pr-2"></i><?php echo e(__('Faq')); ?></a>
                                                    <?php endif; ?>
                                                    <?php $__currentLoopData = DB::table('pages')->wherePos(0)->orwhere('pos',2)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <a class="<?php echo e(request()->url() == route('front.page',$page->slug) ? 'active' : ''); ?> " href="<?php echo e(route('front.page',$page->slug)); ?>"><i class="icon-chevron-right pr-2"></i><?php echo e($page->title); ?></a>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </li>

                                        <?php if($setting->is_contact == 1): ?>
                                            <li class="<?php echo e(request()->routeIs('front.contact') ? 'active' : ''); ?>"><a href="<?php echo e(route('front.contact')); ?>"><i class="icon-chevron-right"></i><?php echo e(__('Contact')); ?></a></li>
                                        <?php endif; ?>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-pane fade" id="mcat" role="tabpanel" aria-labelledby="mcat-tab">
                                    <nav class="slideable-menu">
                                        <?php echo $__env->make('includes.mobile-category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    </nav>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- Navbar-->
  <!--<div class="navbar">
        <div class="container">
            <div class="row g-3 w-100">
                <div class="col-lg-3">
                    <?php echo $__env->make('includes.categories', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="col-lg-9 d-flex justify-content-between">
                    <div class="nav-inner">
                        <nav class="site-menu">
                            <ul>
                                <li class="<?php echo e(request()->routeIs('front.index') ? 'active' : ''); ?>"><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a></li>
                                <?php if($setting->is_shop == 1): ?>
                                <li class="<?php echo e(request()->routeIs('front.catalog*')  ? 'active' : ''); ?>"><a href="<?php echo e(route('front.catalog')); ?>"><?php echo e(__('Shop')); ?></a></li>
                                <?php endif; ?>
                                <?php if($setting->is_campaign == 1): ?>
                                <li class="<?php echo e(request()->routeIs('front.campaign')  ? 'active' : ''); ?>"><a href="<?php echo e(route('front.campaign')); ?>"><?php echo e(__('Campaign')); ?></a></li>
                                <?php endif; ?>
                                <?php if($setting->is_brands == 1): ?>
                                <li class="<?php echo e(request()->routeIs('front.brand')  ? 'active' : ''); ?>"><a href="<?php echo e(route('front.brand')); ?>"><?php echo e(__('Brand')); ?></a></li>
                                <?php endif; ?>
                                <?php if($setting->is_blog == 1): ?>
                                <li class="<?php echo e(request()->routeIs('front.blog*') ? 'active' : ''); ?>"><a href="<?php echo e(route('front.blog')); ?>"><?php echo e(__('Blog')); ?></a></li>
                                <?php endif; ?>

                                <li class="t-h-dropdown">
                                    <a class="main-link" href="#"><?php echo e(__('Pages')); ?> <i class="icon-chevron-down"></i></a>
                                    <div class="t-h-dropdown-menu">
                                        <?php if($setting->is_faq == 1): ?>
                                        <a class="<?php echo e(request()->routeIs('front.faq*') ? 'active' : ''); ?>" href="<?php echo e(route('front.faq')); ?>"><i class="icon-chevron-right pr-2"></i><?php echo e(__('Faq')); ?></a>
                                        <?php endif; ?>
                                        <?php $__currentLoopData = DB::table('pages')->wherePos(0)->orwhere('pos',2)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a class="<?php echo e(request()->url() == route('front.page',$page->slug) ? 'active' : ''); ?> " href="<?php echo e(route('front.page',$page->slug)); ?>"><i class="icon-chevron-right pr-2"></i><?php echo e($page->title); ?></a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </li>

                              <?php if($setting->is_contact == 1): ?>
                                <li class="<?php echo e(request()->routeIs('front.contact') ? 'active' : ''); ?>"><a href="<?php echo e(route('front.contact')); ?>"><?php echo e(__('Contact')); ?></a></li>
                              <?php endif; ?>
                            </ul>
                        </nav>

                    </div>
                    <?php
                        $free_shipping = DB::table('shipping_services')->whereStatus(1)->whereIsCondition(1)->first()
                    ?>

                </div>
            </div>
        </div>
    </div>

</header>
---><?php /**PATH /home/nzocgvvlkplb/public_html/auroraexperiences.gigvie.com/resources/views/front/themes/custom-theme/header.blade.php ENDPATH**/ ?>
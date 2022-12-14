@php
    $global_setting = app\Models\GlobalSetting::all()->first();
    if(isset($normal)){
        $seo = $normal;
    }
    elseif(isset($job)){
        $seo = $job;
    }
@endphp
<!DOCTYPE html>
<html class="wide wow-animation scrollTo" lang="en">

<head>
       <!-----SEO--------->

  <title>{{$seo->page_titile ?? $global_setting->page_title}}</title>
  <meta name="title" content="{{$seo->page_titile ?? $global_setting->page_title}}">
  <meta name="description" content="{{$seo->page_description ?? $global_setting->page_description}}">
  <meta name="keywords" content="{{$seo->page_keyword ?? $global_setting->page_keyword}}">
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="English">
  <meta name="revisit-after" content="1 days">
  <meta name="author" content="{{$global_setting->site_name ?? ''}}">


  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{$global_setting->website_full_address ?? ''}}">
  <meta property="og:title" content="{{$seo->page_title ?? $global_setting->page_title}}">
  <meta property="og:description" content="{{$seo->page_description ?? $global_setting->page_description}}">
  <meta property="og:image" content="{{$seo->banner_image ?? '/uploads/icons/'.$global_setting->site_logo}}">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="{{$global_setting->website_full_address ?? ''}}">
  <meta property="twitter:title" content="{{$seo->page_title ?? $global_setting->page_title}}">
  <meta property="twitter:description" content="{{$seo->page_description ?? $global_setting->page_description}}">
  <meta property="twitter:image" content="{{$seo->banner_image ?? '/uploads/icons/'.$global_setting->site_logo}}">

<!-----END SEO------->
  <meta charset="utf-8" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="viewport"
    content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta name="keywords" content="intense web design multipurpose template" />
  <meta name="date" content="Dec 26" />
  <link rel="icon" type="image/png" sizes="56x56" href="{{$global_setting->favicon}}">
  <link rel="stylesheet" type="text/css"
    href="//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,700%7CMerriweather:400,300,300italic,400italic,700,700italic" />
  <link rel="stylesheet" href="/website/css/style.css" />
  <link rel="stylesheet" href="/website/css/gallery-page.css" />
  <link rel="stylesheet" href="/website/css/novi.css" />
   <link rel="stylesheet" href='https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css'>
  <!-- <link rel="stylesheet" href="assets/admin/css/contact.css" /> -->
  <!-- <link rel="stylesheet" href="assets/admin/css/bootstrap.min.css" /> -->
</head>

<body>
  <div class="page-loader">
    <div class="page-loader-body">
      <span class="cssload-loader">
        <span class="cssload-loader-inner"></span></span>
    </div>
  </div>
  <div class="page text-center">
    <header class="page-head">
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar novi-background rd-navbar-center" data-layout="rd-navbar-fixed"
          data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
          data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
          data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
          data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="220px" data-xl-stick-up-offset="220px"
          data-xxl-stick-up-offset="220px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-inner">

<!-------top header---->
            <div class="rd-navbar-panel">
              <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap">
                <span></span>
              </button>
              <button class="rd-navbar-top-panel-toggle" data-rd-navbar-toggle=".rd-navbar-top-panel">
                <span></span>
              </button>
              <div class="rd-navbar-top-panel">
                <div class="shell">
                  <div class="range range-10 range-md-center range-md-middle range-lg-around">
                    <div class="cell-md-3">
                      <div class="unit unit-horizontal unit-top unit-spacing-xs">
                        <div class="unit-left">
                          <span class="icon novi-icon mdi mdi-phone text-middle" style="color: #2c3591"></span>
                        </div>
                        <div class="unit-body">
                          <a class="reveal-block" href="tel:{{$global_setting->phone}}">{{$global_setting->phone}},</a><a href="tel:{{$global_setting->phone_ne}}">{{$global_setting->phone_ne}}</a>
                        </div>
                      </div>
                    </div>
                    <div class="cell-md-3 text-center">
                      <div class="rd-navbar-brand">
                        <a class="reveal-inline-block" href="/"><img src="/uploads/icons/{{$global_setting->site_logo}}" alt=""
                            width="191" height="80" /></a>
                      </div>
                    </div>
                    <div class="cell-md-4">
                      <div class="inset-md-left-50">
                        <div class="unit unit-horizontal unit-top unit-spacing-xs text-left">
                          <div class="unit-left">
                            <span class="icon novi-icon mdi mdi-map-marker text-middle"></span>
                          </div>
                          <div class="unit-body">
                            <a href="#">{{$global_setting->website_full_address}}</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<!-------top header end---->
<!--------navbar----------->
            <div class="rd-navbar-menu-wrap clearfix">
              <div class="rd-navbar-nav-wrap">
                <div class="rd-navbar-mobile-scroll">
                  <div class="rd-navbar-mobile-header-wrap">
                    <div class="rd-navbar-mobile-brand">
                      <a href="index.html"><img src="/website/images/logo-default-2-144x122-1.png" alt=""
                          srcset="images/logo-default-2-144x122-1.png 2x" /></a>
                    </div>
                  </div>
                  <ul class="rd-navbar-nav">
                    <!----start---->
                    <li><a href="/">Home</a></li>
                    @foreach($menus as $menu)
                      <li>
                        <a href="@if($menu->nav_name=='gallary') # @else /{{$menu->nav_name}} @endif">{{$menu->caption}}</a>
                           @if($menu->childs->count()>0)
                            <ul class="rd-navbar-dropdown">
                              @foreach($menu->childs as $submenu)
                                 <li><a href="{{route('subcategory',[$menu->nav_name,$submenu->nav_name])}}">{{$submenu->caption}}</a></li>
                              @endforeach
                            </ul>     
                           @endif                   
                      </li>
                    @endforeach   
                    <!-- <li><a href="/contact">Contact</a></li>                 -->
                  <!----end----->
                  </ul>
                  <div class="rd-navbar-search-mobile" id="rd-navbar-search-mobile">
                    <form class="rd-navbar-search-form search-form-icon-right rd-search" action="search-results.html"
                      method="GET">
                      <div class="form-group">
                        <label class="form-label" for="rd-navbar-mobile-search-form-control">Search...</label><input
                          class="rd-navbar-search-form-control form-control form-control-gray-lightest"
                          id="rd-navbar-mobile-search-form-control" type="text" name="s" autocomplete="off" />
                      </div>
                      <button class="icon fa-search rd-navbar-search-button" type="submit"></button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="rd-navbar-search">
                <a class="rd-navbar-search-toggle mdi" data-rd-navbar-toggle=".rd-navbar-search"
                  href="#"><span></span></a>
                <form class="rd-navbar-search-form search-form-icon-right rd-search" action="search-results.html"
                  data-search-live="rd-search-results-live" method="GET">
                  <div class="form-group">
                    <label class="form-label" for="rd-navbar-search-form-control">Search</label><input
                      class="rd-navbar-search-form-control form-control form-control-gray-lightest"
                      id="rd-navbar-search-form-control" type="text" name="s" autocomplete="off" />
                    <div class="rd-search-results-live" id="rd-search-results-live"></div>
                  </div>
                </form>
              </div>
            </div>
<!-------navbar end-------->
          </div>
        </nav>
      </div>
    </header>


    @yield('content')

<footer class="section page-footer">
      <div class="novi-background bg-cover bg-default">
        <div class="shell-wide">
          <div class="hr bg-gray-light"></div>
        </div>
        <div class="section-60">
          <div class="shell">
            <div class="range range-50 range-lg-justify range-xs-center">
              <div class="cell-xs-10 cell-md-8 cell-lg-4 text-lg-left">
                <a class="footerLogo" href="/">
                  <img src="/uploads/icons/{{$global_setting->site_logo}}" alt="" srcset="/uploads/icons/{{$global_setting->site_logo}}" /></a>
                <!-- <div class="text-subline"></div> -->
                <div class="offset-top-30 text-left">
                  <p>
                    {{$global_setting->page_description}}
                  </p>
                </div>
              </div>
              <div class="cell-xs-10 cell-md-5 cell-lg-4 text-lg-left">
                <h6 class="text-bold">Contact us</h6>
                <div class="text-subline"></div>
                <div class="offset-top-30">
                  <ul class="list-unstyled contact-info list">
                    <li>
                      <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                        <div class="unit-left">
                          <span class="icon novi-icon mdi mdi-phone text-middle icon-xs text-madison"></span>
                        </div>
                        <div class="unit-body">
                          <a class="text-dark" href="tel:{{$global_setting->phone}}">{{$global_setting->phone}},</a><a
                            class="reveal-block reveal-md-inline-block text-dark" href="tel:{{$global_setting->phone_ne}}">{{$global_setting->phone_ne}}</a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                        <div class="unit-left">
                          <span class="icon novi-icon mdi mdi-map-marker text-middle icon-xs text-madison"></span>
                        </div>
                        <div class="unit-body text-left">
                          <a class="text-dark" href="#">{{$global_setting->website_full_address}}
                          </a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                        <div class="unit-left">
                          <span class="icon novi-icon mdi mdi-email-open text-middle icon-xs text-madison"></span>
                        </div>
                        <div class="unit-body">
                          <a href="mailto:{{$global_setting->site_email}}">{{$global_setting->site_email}}</a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="cell-md-3 cell-lg-3">
                <h6 class="text-bold">Follow us</h6>
                <div class="offset-top-30 text-center">
                  <ul class="list-inline list-inline-xs list-inline-madison">
                    <li>
                      <a class="icon novi-icon icon-xxs fa-facebook icon-circle icon-gray-light-filled" href="{{$global_setting->facebook}}"></a>
                    </li>
                    <li>
                      <a class="icon novi-icon icon-xxs fa-twitter icon-circle icon-gray-light-filled" href="{{$global_setting->twitter}}"></a>
                    </li>
                    <li>
                      <a class="icon novi-icon icon-xxs fa-instagram icon-circle icon-gray-light-filled" href="{{$global_setting->other}}"></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section-5 bg-madison context-dark novi-background">
          <div class="shell text-md-left">
            <p class="">
              ?? <span class="copyright-year">2019</span> All Rights Reserved
              Terms of Use and <a href="privacy.html">Privacy Policy.</a><span> Design&nbsp;by Radiant InfoTech
                Nepal</span>
            </p>
          </div>
        </div>
      </div>
    </footer>
  </div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="/website/js/core.min.js"></script>
  <script src="/website/js/script.js"></script>
  <script src="/website/jquery.min.js"></script>
  <script src="/website/owlcarousel/owl.carousel.min.js"></script>
  <script>
    $('.universities-slider').owlCarousel({
      loop: true,
      margin: 10,
      nav: false,
      dots: true,
      margin: 10,
      autoplayTimeout: 2000,

      responsive: {
        0: {
          items: 2
        },
        600: {
          items: 3
        },
        1000: {
          items: 4
        }
      }
    })
  </script>


</body>

</html>
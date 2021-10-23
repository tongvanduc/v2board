<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicons -->
    <link href="{{ asset('frontend/img/logo.png') }}" rel="icon">
    <link href="{{ asset('frontend/img/logo.png') }}" rel="apple-touch-icon">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" >
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <title>网站</title>

    @yield('styles')
</head>
<body>
<header>
    <!-- Navbar Light -->
    <nav class="navbar navbar-expand-lg navbar-expand-xxl navbar-light bg-white z-index-3 py-3  shadow">
        <div class="container">
            <a class="navbar-brand" href="" rel="tooltip" title="Code by Minh Duc Designer" data-placement="bottom" target="_blank">
                <img src="{{ asset('frontend/img/logo/logo%202.svg') }}" alt="logo" class="logo img-fluid">
            </a>
            <button class="btn bg-gradient-green btn btn-sm   mb-0 ms-auto d-lg-none d-block mb-0 w-91">帮助</button>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav navbar-nav-hover ml-auto">
                    <li class="nav-item px-3">
                        <a href="{{ route('frontend.index') }}" class="nav-link">
                            首页
                        </a>
                    </li>

                    <li class="nav-item px-3">
                        <a class="nav-link" href="{{ route('frontend.supporting') }}">
                            支持的网站
                        </a>
                    </li>

                    <li class="nav-item px-3">
                        <a class="nav-link" href="{{ route('frontend.package') }}">
                            应用
                        </a>
                    </li>

                </ul>

                <ul class="navbar-nav ms-auto">
                    <button class="btn bg-gradient-green mb-0 rounded-pill w-91">帮助</button>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="#">
                            语言
                        </a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="{{ route('web.index') }}">
                            登录
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    @yield('header')
</header>

@yield('content')

<footer>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-8 col-xl-8 col-md-8 col-12 ">
                <div class="section-header text-center">
                    <h1>FIRE FLAY</h1>
                    <p>海外技术团队研发，高速，便捷，平价的外网加速器</p>
                </div>
                <div class="share text-center">
                    <ul class="nav share_icon">
                        <li class="nav-item px-3">
                            <a class="nav-link" target="_blank" href="">
                                <img src="{{ asset('frontend/img/share/Vector_2.svg') }}" class="img-fluid" alt="">
                            </a>
                        </li>

                        <li class="nav-item px-3">
                            <a class="nav-link" target="_blank" href="">
                                <img src="{{ asset('frontend/img/share/Vector.svg') }}" class="img-fluid" alt="">
                            </a>
                        </li>

                        <li class="nav-item px-3">
                            <a class="nav-link" target="_blank" href="">
                                <img src="{{ asset('frontend/img/share/Group%2019.svg') }}" class="img-fluid" alt="">
                            </a>
                        </li>

                        <li class="nav-item px-3">
                            <a class="nav-link" target="_blank" href="">
                                <img src="{{ asset('frontend/img/share/Vector_1.svg') }}" class="img-fluid" alt="">
                            </a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" target="_blank" href="">
                                <img src="{{ asset('frontend/img/share/icons8-bitcoin-300%204.svg') }}" class="img-fluid" alt="">
                            </a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" target="_blank" href="">
                                <img src="{{ asset('frontend/img/share/Vector_3.svg') }}" class="img-fluid" alt="">
                            </a>
                        </li>
                    </ul>

                    <ul class="nav  share_text">
                        <li class="nav-item px-3">
                            <a class="nav-link text-w" >
                                支持：
                            </a>
                        </li>

                        <li class="nav-item px-3" >
                            <a class="nav-link" >
                                快速链接
                            </a>
                        </li>

                        <li class="nav-item px-3">
                            <a class="nav-link">
                                帮助中心
                            </a>
                        </li>

                        <li class="nav-item px-3">
                            <a class="nav-link">
                                隐私政策
                            </a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link">
                                退款政策
                            </a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link">
                                共享政策
                            </a>
                        </li>
                    </ul>
                    <p>Copyright 2020 FIREFLYA Network,All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--&lt;!&ndash; Option 1: Bootstrap Bundle with Popper &ndash;&gt;-->
<!--<script src="js/bootstrap.bundle.min.js"></script>-->

<!-- Option 2: Separate Popper and Bootstrap JS -->
<script src="{{ asset('frontend/js/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}" type="text/javascript"></script>

@yield('scripts')
</body>
</html>

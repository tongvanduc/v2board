@extends('frontend.layouts.master')

@section('header')
    <div id="slider">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-item active">
                        <img src="{{ asset2('frontend/img/slider/2225%201.svg') }}" class="d-block w-100" alt="...">
                        <!--           Đã ẩn text             -->
                        <span class="bg-gradient-dark d-none"></span>
                        <div class="carousel-caption d-none">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 my-auto">
                                        <h1 class="text-white fadeIn2 fadeInBottom">开始使用之你与全球网络的距</h1>
                                        <h1 class="text-white fadeIn2 fadeInBottom">只需要一键就能点亮</h1>
                                        <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">
                                            他们手里的电子产品发出的光，像散落在各个角落的萤火虫，而这里是让他们自由飞舞的乐园</p>
                                        <button class="btn bg-gradient-green mb-0 rounded-pill w-25">开始使用之</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--            <div class="min-vh-75 position-absolute w-100 top-0">-->
            <!--                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">-->
            <!--                    <span class="carousel-control-prev-icon position-absolute bottom-50" aria-hidden="true"></span>-->
            <!--                    <span class="visually-hidden">Previous</span>-->
            <!--                </a>-->
            <!--                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">-->
            <!--                    <span class="carousel-control-next-icon position-absolute bottom-50" aria-hidden="true"></span>-->
            <!--                    <span class="visually-hidden">Next</span>-->
            <!--                </a>-->
            <!--            </div>-->
            <div class="app-info">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-6 mb-sm-2">
                            <span>支持平台:</span>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-6 mb-sm-2">
                            <div>
                                <img src="{{ asset2('frontend/img/slider/windows.svg') }}" class="img-fluid"
                                     alt="windows">
                                <span>Windows</span>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-6 mb-sm-2">
                            <div>
                                <img src="{{ asset2('frontend/img/slider/mac.svg') }}" class="img-fluid" alt="windows">
                                <span>macOS</span>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-6 mb-sm-2">
                            <div>
                                <img src="{{ asset2('frontend/img/slider/ios.svg') }}" class="img-fluid" alt="windows">
                                <span>iOS | iPhone | iPad</span>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-6 mb-sm-2">
                            <div>
                                <img src="{{ asset2('frontend/img/slider/andorid.svg') }}" class="img-fluid"
                                     alt="windows">
                                <span>Android</span>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-6 mb-sm-2">
                            <div>
                                <img src="{{ asset2('frontend/img/slider/liunx.svg') }}" class="img-fluid" alt="windows">
                                <span>Liunx</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section id="适用场景" class="bg-w">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                    <div class="section-header">
                        <h2>适用场景</h2>
                        <p>身处大陆，国外网站一筹莫展，追剧听歌，跨境电商，国外自媒体搬运，查询资料处处受限？ 使用萤火虫加速，一键点亮全球网诺！YouTube
                            4K秒开，NetFlix，HBO，港澳bilibili等流媒体地域解锁。</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <span><img src="{{ asset2('frontend/img/适用场景/icons8-discord-240.svg') }}" class="img-fluid"
                                   alt="share"></span>
                        <span><img src="{{ asset2('frontend/img/适用场景/icons8-facebook-240.svg') }}" class="img-fluid"
                                   alt="share"></span>
                        <span><img src="{{ asset2('frontend/img/适用场景/icons8-google-240.svg') }}" class="img-fluid"
                                   alt="share"></span>
                        <span><img src="{{ asset2('frontend/img/适用场景/icons8-instagram-240.svg') }}" class="img-fluid"
                                   alt="share"></span>
                        <span><img src="{{ asset2('frontend/img/适用场景/icons8-spotify-300.svg') }}" class="img-fluid"
                                   alt="share"></span>
                        <span><img src="{{ asset2('frontend/img/适用场景/icons8-tinder-400.svg') }}" class="img-fluid"
                                   alt="share"></span>
                        <span><img src="{{ asset2('frontend/img/适用场景/icons8-youtube-logo-240.svg') }}" class="img-fluid"
                                   alt="share"></span>
                        <span><img src="{{ asset2('frontend/img/适用场景/icons8-twitter-240.svg') }}" class="img-fluid"
                                   alt="share"></span>
                        <span><img src="{{ asset2('frontend/img/适用场景/icons8-tiktok-250.svg') }}" class="img-fluid"
                                   alt="share"></span>
                        <span><img src="{{ asset2('frontend/img/适用场景/icons8-netflix-500的副本.svg') }}" class="img-fluid"
                                   alt="share"></span>
                        <span><img src="{{ asset2('frontend/img/适用场景/icons8-hbo-250.svg') }}" class="img-fluid"
                                   alt="share"></span>
                        <span><img src="{{ asset2('frontend/img/适用场景/icons8-bbc-250.svg') }}" class="img-fluid"
                                   alt="share"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="我们的优势">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-8 col-12">
                    <div class="section-header">
                        <h2>我们的优势</h2>
                    </div>

                    <div class="row">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-12">
                            <div class="card">
                                <img src="{{ asset2('frontend/img/5.png') }}" class="card-img-top w-auto" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">全球流媒体解锁</h5>
                                </div>
                                <div class="card-img-overlay">
                                    <h3 class="card-title">全球流媒体解锁</h3>
                                    <p class="card-text">
                                        原生服务器IP，解锁当地媒体娱乐，让你一秒即达当地网络，免费提供流媒体账号，无需再次花钱去单独购买，包括iOS用户的美区ID
                                    </p>
                                    <!-- <p class="card-text">Last updated 3 mins ago</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-12">
                            <div class="card">
                                <img src="{{ asset2('frontend/img/7.png') }}" class="card-img-top w-auto" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">隧道加密中转</h5>
                                </div>
                                <div class="card-img-overlay">
                                    <h3 class="card-title">隧道加密中转</h3>
                                    <p class="card-text">
                                        骨干网中转，并且使用隧道加密，不仅保护了你的网络安全，而且让你的网速如巧克力般丝滑
                                    </p>
                                    <!-- <p class="card-text">Last updated 3 mins ago</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-12">
                            <div class="card">
                                <img src="{{ asset2('frontend/img/42.png') }}" class="card-img-top w-auto" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">快速响应客服</h5>
                                </div>
                                <div class="card-img-overlay">
                                    <h3 class="card-title">快速响应客服</h3>
                                    <p class="card-text">
                                        网页右下角24小时人工在线，随时为您待命，如果你需要可以帮你远程解决问题，不需要你动手，保姆式服务
                                    </p>
                                    <!-- <p class="card-text">Last updated 3 mins ago</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="无理由退款" class="bg-w">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 ms-auto col-md-6 col-xl-6 col-xxl-6 col-12">
                                    <div class="section-header">
                                        <p>当心会后悔？</p>
                                        <h2>无理由退款</h2>
                                        <span>我们承诺24小时以内，你随时可以穿起裤子离开，不 需要说任何理由，并且退还你的钱！</span>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4 col-xxl-4 col-xl-4 col-md-4 col-12 text-center">
                                    <!--                <div class="无理由退款_img"></div>-->
                                    <img src="{{ asset2('frontend/img/45322.png') }}" class="img-fluid" alt="d"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 ms-auto col-md-6 col-xl-6 col-xxl-6 col-12">
                                    <div class="section-header">
                                        <p>在国内平台观看节目需要充值会员？</p>
                                        <h2>我们能为您节省更多的钱</h2>
                                        <span>国内多家视频平台，（腾讯视频,爱奇艺,优酷）拥有不同的节目 版权需要你购买多个会员，但是在这里，你只需要购买一个基础 套餐，你就可以在YouTube免费观看国内各个平台的一切付费节 目，并且这是节目官方账号发布的高清视频</span>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4 col-xxl-4 col-xl-4 col-md-4 col-12 text-center">
                                    <img src="{{ asset2('frontend/img/5_plus.png') }}" class="img-fluid" alt="d"/>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="便捷的操作" class="">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4 col-xxl-4 col-xl-4 col-md-4 col-12">
                    <img src="{{ asset2('frontend/img/2.png') }}" class="img-fluid" alt="d"/>
                </div>
                <div class="col-lg-6 ms-auto col-md-6 col-xl-6 col-xxl-6 col-12">
                    <div class="section-header">
                        <p>我是小白懒人一族？</p>
                        <h2>便捷的操作</h2>
                        <span>无须操作复杂的第三方软件，我们有自己的专属软件，并 且适配多个设备，无论安卓，Windows，Mac只需要一个 按键就能启动，傻瓜式的操作！</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="免费提供会员账号" class="bg-w">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 ms-auto col-md-6 col-xl-6 col-xxl-6 col-12">
                    <div class="section-header">
                        <p>购买流媒体会员还要再次花钱？</p>
                        <h2>免费提供会员账号</h2>
                        <span>我们希望为您节省更多的钱，所以你无需再去额外购买Netflix 会员账号，包括iOS用户的美区ID，我们免费提供！</span>
                    </div>
                </div>
                <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4 col-xxl-4 col-xl-4 col-md-4 col-12">
                    <img src="{{ asset2('frontend/img/8.png') }}" class="img-fluid" alt="d"/>
                </div>
            </div>
        </div>
    </section>

    <section id="总有一个套餐适合你" class="">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4 col-xxl-4 col-xl-4 col-md-4 col-12">
                    <img src="{{ asset2('frontend/img/5_.png') }}" class="img-fluid" alt="d"/>
                </div>
                <div class="col-lg-6 ms-auto col-md-6 col-xl-6 col-xxl-6 col-12">
                    <div class="section-header">
                        <h2>总有一个套餐适合你</h2>
                        <span>我们有不同的大小功能的套餐来适配不同需求的用户</span>
                        <button class="btn bg-gradient-green mb-0  w-25">免费体验</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="俱乐部" class="bg-w">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-xl-8 col-md-8 col-lg-8 col-12">
                    <div class="section-header">
                        <h2>俱乐部</h2>
                        <p>我们提供的不仅仅是一个工具，而是生活方式，你可以加入我们的俱乐部，了解全球最新的娱乐，科技，新闻和有趣的事情等...</p>
                    </div>
                    <button class="btn bg-gradient-green mb-0 rounded-pill w-25">加入telegram</button>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('frontend.master')

@section('header')
    <div id="slider">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-item active">
                        <img src="{{ asset('frontend/img/slider/2225%201.svg') }}" class="d-block w-100" alt="...">
                        <!--           Đã ẩn text             -->
                        <span class="bg-gradient-dark d-none"></span>
                        <div class="carousel-caption d-none">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 my-auto">
                                        <h1 class="text-white fadeIn2 fadeInBottom">开始使用之你与全球网络的距</h1>
                                        <h1 class="text-white fadeIn2 fadeInBottom">只需要一键就能点亮</h1>
                                        <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">他们手里的电子产品发出的光，像散落在各个角落的萤火虫，而这里是让他们自由飞舞的乐园</p>
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
                                <img src="{{ asset('frontend/img/slider/windows.svg') }}" class="img-fluid" alt="windows">
                                <span>Windows</span>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-6 mb-sm-2">
                            <div>
                                <img src="{{ asset('frontend/img/slider/mac.svg') }}" class="img-fluid" alt="windows">
                                <span>macOS</span>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-6 mb-sm-2">
                            <div>
                                <img src="{{ asset('frontend/img/slider/ios.svg') }}" class="img-fluid" alt="windows">
                                <span>iOS | iPhone | iPad</span>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-6 mb-sm-2">
                            <div>
                                <img src="{{ asset('frontend/img/slider/andorid.svg') }}" class="img-fluid" alt="windows">
                                <span>Android</span>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-6 mb-sm-2">
                            <div>
                                <img src="{{ asset('frontend/img/slider/liunx.svg') }}" class="img-fluid" alt="windows">
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
                        <span><img src="{{ asset('frontend/img/适用场景/icons8-discord-240.svg') }}" class="img-fluid"
                                   alt="share"></span>
                        <span><img src="{{ asset('frontend/img/适用场景/icons8-facebook-240.svg') }}" class="img-fluid"
                                   alt="share"></span>
                        <span><img src="{{ asset('frontend/img/适用场景/icons8-google-240.svg') }}" class="img-fluid"
                                   alt="share"></span>
                        <span><img src="{{ asset('frontend/img/适用场景/icons8-instagram-240.svg') }}" class="img-fluid"
                                   alt="share"></span>
                        <span><img src="{{ asset('frontend/img/适用场景/icons8-spotify-300.svg') }}" class="img-fluid"
                                   alt="share"></span>
                        <span><img src="{{ asset('frontend/img/适用场景/icons8-tinder-400.svg') }}" class="img-fluid"
                                   alt="share"></span>
                        <span><img src="{{ asset('frontend/img/适用场景/icons8-youtube-logo-240.svg') }}" class="img-fluid"
                                   alt="share"></span>
                        <span><img src="{{ asset('frontend/img/适用场景/icons8-twitter-240.svg') }}" class="img-fluid"
                                   alt="share"></span>
                        <span><img src="{{ asset('frontend/img/适用场景/icons8-tiktok-250.svg') }}" class="img-fluid"
                                   alt="share"></span>
                        <span><img src="{{ asset('frontend/img/适用场景/icons8-netflix-500的副本.svg') }}" class="img-fluid"
                                   alt="share"></span>
                        <span><img src="{{ asset('frontend/img/适用场景/icons8-hbo-250.svg') }}" class="img-fluid"
                                   alt="share"></span>
                        <span><img src="{{ asset('frontend/img/适用场景/icons8-bbc-250.svg') }}" class="img-fluid"
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
                                <img src="{{ asset('frontend/img/5.png') }}" class="card-img-top w-auto" alt="...">
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
                                <img src="{{ asset('frontend/img/7.png') }}" class="card-img-top w-auto" alt="...">
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
                                <img src="{{ asset('frontend/img/42.png') }}" class="card-img-top w-auto" alt="...">
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
                                    <img src="{{ asset('frontend/img/45322.png') }}" class="img-fluid" alt="d"/>
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
                                <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4 col-xxl-4 col-xl-4 col-md-4 col-12 text-center">
                                    <img src="img/5_plus.png"  class="img-fluid" alt="d"/>
                                    <img src="{{ asset('frontend/img/5_plus.png') }}" class="img-fluid" alt="d"/>
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
                    <img src="{{ asset('frontend/img/2.png') }}" class="img-fluid" alt="d"/>
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
                    <img src="{{ asset('frontend/img/8.png') }}" class="img-fluid" alt="d"/>
                </div>
            </div>
        </div>
    </section>

    <section id="总有一个套餐适合你" class="">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4 col-xxl-4 col-xl-4 col-md-4 col-12">
                    <img src="{{ asset('frontend/img/5_.png') }}" class="img-fluid" alt="d"/>
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
    

<div class="modal fade" id="exampleModalToggle1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel"><strong>隐私政策</strong></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <h5>
                <strong>概述</strong>
            </h5>
            <p class="text">本隐私政策（“隐私政策”）阐述了 萤火虫VPN fire fly的隐私惯例，以下概述（统称为“我们”、“我们的”或“ 萤火虫 ”）并适用于萤火虫服务的用户（“用户”或“您”），其中包括萤火虫VPN服务“</p>
            
            <hr><h5>
                <strong>隐私条款</strong>
            </h5>
            <p class="text">
                1.你的隐私对我们很重要。无论您是浏览我们的网站还是使用我们的服务，我们都希望您了解我们收集了有关您的哪些信息以及如何使用这些信息。我们的主要原则是只收集提供我们服务所需的最少数据，并让我们的用户尽可能保持匿名。因此，我们的政策是不记录或存储有关我们用户的任何不必要的数据。因此，我们不会收集或存储您的活动日志，包括不记录浏览历史记录、流量目的地、连接时间戳、DNS 查询、IP 地址（既不是分配的 IP 也不是连接的 IP）、数据内容或带宽。
                <br>2.当你使用我们服务时，需要使用邮箱进行注册验证，但我们绝不会将您的个人邮箱以任何形式提供给第三方，包括出售或者分享泄漏。
                <br>3.你有权自行在官网删除自己的账号或者联系工作人员协助你清楚账号包括邮箱。
                <br>4.对于没有任何套餐服务的账号，我们有权在不通知你的情况下删除你的账号。
            </p>
        
            <hr><h5>
                <strong>禁止事项</strong>
            </h5>
            <p class="text">
                1.禁止用于不正当的、禁止的、违法、犯罪或者欺诈活动，包括但不限于端口扫描，发送垃圾邮件，发送选择接收的电子邮件，扫描开放中继或开放代理，发送未经请求的电子邮件或发送的任何版本或类型的电子邮件即使通过第三方服务器路由电子邮件，任何弹出窗口启动，使用被盗信用卡，信用卡欺诈，金融欺诈，加密货币欺诈，伪装，敲诈，勒索，绑架，强奸，谋杀，出售的信用卡被盗，出售被盗商品，提供或出售违禁，军事和双重用途商品，提供或出售受控物质，身份盗窃，黑客入侵，伪造，网络钓鱼，任何形式或规模的刮取，数字盗版，知识产权侵权和其他类似活动
                <br>2.禁止以任何方式剥削儿童，包括音频，视频，摄影，数字内容等。
                <br>3.禁止以任何方式上传或分发包含病毒，蠕虫，特洛伊木马，损坏的文件或任何其他可能损害他人计算机操作的类似软件或程序的文件。
                <br>4.禁止未从萤火虫官方网站正规购买萤火虫服务。
                <br>5.禁止转发或者分享传播讨论政治信息。
                <br>6.禁止长时间占用宽带进行下载导致服务器网络异常，影响到其他用户正常使用。
                <br>7.禁止以任何方式分享萤火虫服务给他人使用，否则造成损失自行承担。
                如不遵守者我们有权单方面删除你的账号停止向你提供服务，并且不进行任何赔偿与退款。
            </p>
        
            <hr><h5>
                <strong>适用法律</strong>
            </h5>
            <p class="text">本协议应受加拿大法律的管辖并根据其解释，但其法律冲突规则除外。</p>
        
            <hr><h5>
                <strong>服务条款的变更</strong>
            </h5>
            <p class="text">根据适用的法律和原则，我们可能会不时更改条款服务条款，恕不另行通知。您继续使用本网站或服务即表示您接受我们的隐私政策。</p>
        
            <hr><h5>
                <strong>使用协议</strong>
            </h5>
            <p class="text">
                使用我们的服务或浏览我们的网站，即表示您接受隐私政策和条款和条件，并同意遵守它们。如果您不同意它们，请谨慎考虑使用我们的服务。
                <br>最后更新：2020 年 10 月 26 日
            </p>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel"><strong>退款政策</strong></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p class="text">1.我们提供从你购买开始计算24小时内无理由退款服务，申请退款后3个工作日内原账户退回，（只包含你的实际支付金额，官方网站的任何活动方式赠送的金额除外）退款支付完整金额可原路退回，如与支付金额不符，只支持UDTD退回，请自行提供收币地址，退款后我们有权清理账号套餐包括账号停止提供服务，你可再次申请使用！</p>
            <p class="text">2.网站通过任何活动方式（包括邀请返利，合作商除外）充值赠送的金额均不能提现，只限制于本站购买服务使用</p>
            <p class="text">3.我们拒绝从购买起超过24小时以外用以下理由申请退款</p>
            <p class="text">节点少，感觉买贵了，有其他商家选择，没有你要的节点，某个节点失败，不可使用某个解锁，共享账号不可用，不会操作，出现外界不可抗力的因素导致短时间内不可用或者网速不理想（例如：自然灾害，地震，海啸，台风，火灾，大批量服务器封锁，网站，服务器，软件升级维护等）</p>
            <p class="text">以上问题我们会以最快的速度修复处理，如你遇到使用操作的问题，我们工作人员将会全力协助你解决问题，最终让用户有好的体验依然是我们追求的目标，但是我们拒绝购买后24小时以外无理的退款申请！</p>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel"><strong>共享政策</strong></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p class="text">为了用户体验，我们免费向付费用户提供某些平台付费账号共享（iOS:美区ID Netflix Spotify等不定账号</p>
            <p class="text">1.禁止更改账号密码以及任何信息</p>
            <p class="text">2.禁止以任何形式占为己有</p>
            <p class="text">3.禁止分享给他人使用</p>
            <p class="text">4.禁止iOS用户在设置登陆，否则后果自负 对以上用户我们有权在不经过你同意的情况下关闭共享功能，严重者直接删号处理，并且不做任何赔偿退款，请遵守使用规则</p>
        </div>
      </div>
    </div>
</div>


@endsection

@extends('frontend.layouts.master')

@section('content')
    <div class="container hero">
        <div class="row align-items-center banner-white">
            <div class="box banner-text">
                <h1 class="banner-h1"><strong>我们可以登录那些网站？</strong></h1>
                <p class="banner-p">全球各地 67 个国家的网站随心所欲查看<br></p>
            </div>
            <div class="col col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                <div class="three-box" onclick="window.open('http://www.google.com/')">
                    <div id="google" class="box-one"></div>
                    <h1 id="box-text">Google<br></h1>
                    <p class="box-three">Google搜索引擎主要的搜索服务有：网页，图片，音乐，视频，地图，新闻，问答。</p>
                </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                <div class="three-box" onclick="window.open('http://www.facebook.com/')">
                    <div id="facebook" class="box-one"></div>
                    <h1 id="box-text">Facebook<br></h1>
                    <p class="box-three">Facebook
                        是一个联系朋友的社交工具。大家可以通过它和朋友、同事、同学以及周围的人保持互动交流，分享无限上传的图片，发布链接和视频，更可以增进对朋友的 ...</p>
                </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                <div class="three-box" onclick="window.open('http://www.instagram.com/')">
                    <div id="instagram" class="box-one"></div>
                    <h1 id="box-text">instagram<br></h1>
                    <p class="box-three">
                        Instagram与朋友保持联系,分享自己的生活点滴,及时了解世界上发生的大事小事。在自己感兴趣的社群中自由探索,随心分享从普通日常到人生高光时刻...<br></p>
                </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                <div class="three-box" onclick="window.open('http://twitter.com/')">
                    <div id="twitter" class="box-one"></div>
                    <h1 id="box-text">Twitter<br></h1>
                    <p class="box-three">Twitter（通称推特）是一家美国社交网络及微博客服务的网站，是全球互联网上访问量最大的十个网站之一。是微博客的典型应用...</p>
                </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                <div class="three-box" onclick="window.open('http://netflix.com/')">
                    <div id="netflix" class="box-one"></div>
                    <h1 id="box-text">Netflix<br></h1>
                    <p class="box-three">Netflix(Nasdaq NFLX) 译为奈飞或网飞，是一家会员订阅制的流媒体播放平台
                        ，总部位于美国加利福尼亚州洛斯盖图。成立于1997年，曾经是一家在线DVD及蓝光租…</p>
                </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                <div class="three-box" onclick="window.open('http://www.vimeo.com/')">
                    <div id="vimeo" class="box-one"></div>
                    <h1 id="box-text">vimeo<br></h1>
                    <p class="box-three">
                        Vimeo是一个高清视频播客网站，与大多数类似的视频分享网站不同，Vimeo允许上传1280X700的高清视频，上传后Vimeo会自动转码为高清视频，源视频文件可以自由…</p>
                </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                <div class="three-box" onclick="window.open('http://www.youtube.com/')">
                    <div id="youtube" class="box-one"></div>
                    <h1 id="box-text">YouTube<br></h1>
                    <p class="box-three">在YouTube 上畅享您喜爱的视频和音乐,上传原创内容并与亲朋好友和全世界观众分享您的视频。</p>
                </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                <div class="three-box" onclick="window.open('http://tiktok.com/')">
                    <div id="tiktok" class="box-one"></div>
                    <h1 id="box-text">TikiTok<br></h1>
                    <p class="box-three">TikTok上更多都是年轻人的日常分享。<br>不过因为各个地方文化差异的区别，日韩港台地区的画风和国内的还是比较接近的，看韩国区是会感觉韩国人真心身材好会跳舞…
                    </p>
                </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                <div class="three-box" onclick="window.open('http://www.medium.com/')">
                    <div id="medium" class="box-one"></div>
                    <h1 id="box-text">Medium<br></h1>
                    <p class="box-three">Medium
                        是一个轻量级内容发行的平台，允许单一用户或多人协作，将自己创作的内容以主题的形式结集为专辑（Collection），分享给用户进行消费和阅读。</p>
                </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                <div class="three-box" onclick="window.open('http://www.pinterest.com/')">
                    <div id="pinterest" class="box-one"></div>
                    <h1 id="box-text">Pinterest<br></h1>
                    <p class="box-three">Pinterest是世界上最大的图片社交分享网站。网站允许用户创建和管理主题图片集合,例如事件、兴趣和爱好。</p>
                </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                <div class="three-box" onclick="window.open('http://www.dribbble.com/')">
                    <div id="dribbble" class="box-one"></div>
                    <h1 id="box-text">Dribbble<br></h1>
                    <p class="box-three">
                        Dribbble是一个面向创作家、艺术工作者、设计师等创意类作品的人群，提供作品在线服务，供网友在线查看已经完成的作品或者正在创作的作品的交流网站。</p>
                </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                <div class="three-box" onclick="window.open('http://www.behance.net/')">
                    <div id="behance" class="box-one"></div>
                    <h1 id="box-text">Behance</h1>
                    <p class="box-three">Behance是为那些专业艺术家,那些以艺术谋生或者将艺术作为一个非常严肃的爱好的人建立的。</p>
                </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                <div class="three-box" onclick="window.open('http://www.gmail.com/')">
                    <div id="gmail" class="box-one"></div>
                    <h1 id="box-text">Gmail</h1>
                    <p class="box-three">Gmail 是一款直观、高效、实用的电子邮件应用。免费提供15GB存储空间,垃圾邮件更少,而且支持移动访问。 一个帐户,畅享 Google所有服务!
                        登录即可继续使用 …</p>
                </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                <div class="three-box" onclick="window.open('http://tumblr.com/')">
                    <div id="tumblr" class="box-one"></div>
                    <h1 id="box-text">Tumblr<br></h1>
                    <p class="box-three">
                        Tumblr（中文名：汤不热）成立于2007年，是目前全球最大的轻博客网站，也是轻博客网站的始祖。Tumblr（汤不热）是一种介于传统博客和微博之间的全新媒体形…</p>
                </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                <div class="three-box" onclick="window.open('http://www.spotify.com/')">
                    <div id="spotify" class="box-one"></div>
                    <h1 id="box-text">Spotify<br></h1>
                    <p class="box-three">
                        Spotify(声田)是一个的正版流媒体音乐服务平台,2008年10月在瑞典首都斯德哥尔摩正式上线。Spotify提供免费和付费两种服务,免费用户在使用Spotify的服务时将被插播...</p>
                </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                <div class="three-box" onclick="window.open('http://www.pornhub.com/')">
                    <div id="pornhub" class="box-one"></div>
                    <h1 id="box-text">Pornhub<br></h1>
                    <p class="box-three">Pornhub是一个全球最大的色情影片分享网站之一。2007年，成立于加拿大蒙特利尔，是属于大型的色情视频分享类网站，被视为是“色情
                        2.0”的先驱<br></p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="box banner-text">
                <h1 id="three-h1" class="three-h1"><strong>更多精彩网站去探索...</strong></h1>
                <p class="three-p">还支持更多的设计专业平台访问<br></p>
            </div>
            <div class="col col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                <div class="three-box" onclick="window.open('http://www.figma.com/')">
                    <div id="figma" class="box-one"></div>
                    <h1 id="box-text">Figma<br></h1>
                    <p class="box-three">Figma 是一个 基于浏览器 的协作式 UI 设计工具,从推出至今越来越受到 UI 设计师的青睐,也有很多的设计团队投入了Figma
                        的怀抱,接下来我会带大家深入了解 Figma...<br></p>
                </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                <div class="three-box" onclick="window.open('http://www.zeplin.com/')">
                    <div id="zeplin" class="box-one"></div>
                    <h1 id="box-text">Zeplin<br></h1>
                    <p class="box-three">
                        Zeplin是一款为设计师和开发者提供设计图交接与沟通的高效平台,核心功能为标注。设计师可通过插件(目前仅支持PS和sketch)将已完成的设计图直接导入到Zeplin中,无需...<br>
                    </p>
                </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                <div class="three-box" onclick="window.open('http://www.framer.com/')">
                    <div id="framer" class="box-one"></div>
                    <h1 id="box-text">Framer<br></h1>
                    <p class="box-three">
                        Framer是一款支持用代码进行设计的设计软件,支持Photoshop、Sketch文件导入,可实时预览。它以CoffeeScript或React为基本语法格式,简单明了易上手。Framer
                        包含图层...<br></p>
                </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                <div class="three-box" onclick="window.open('http://www.invisionapp.com/')">
                    <div id="invision" class="box-one"></div>
                    <h1 id="box-text">inVision Studio</h1>
                    <p class="box-three">InVision Studio 不仅仅是一个界面设计工具,更是一个标准化的数字产品设计平台,具备前所未有的创造和协作功能 响应式设计
                        自适应布局引擎,轻松针对移...<br></p>
                </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="line-box"></div>
                <p class="line-p">欢迎提交更精彩的网址给到我们 <a href="#" class="__cf_email__">[email&#160;protected]</a>
                </p>
            </div>
        </div>
    </div>
    <div class="five-bg">
        <div class="container">
            <div class="row justify-content-center five-g">
                <div class="col col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding: 15px;">
                    <div class="box five-div"><img class="five-img" src="{{ asset2('frontend/img/4.png') }}"></div>
                </div>
                <div class="col col-md-6 three-g">
                    <div class="box three-text five-text three-g">
                        <h1 class="three-text2"><strong>看看哪个套餐更适合你？</strong><br></h1>
                        <p class="description" style="color: #919191;">立减 68% ！艳阳高照的季节，好好庆祝最后这几天。<br></p>
                        <div class="store-btndiv">
                            <button class="btn btn-primary store-btn" id="store-btn" type="button"
                                    onclick="window.location.href='#'">立即选购
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('style-libs')
    <link rel="stylesheet" href="{{ asset2('frontend/css/bootstrap_sp.min.css') }}">
    <link rel="stylesheet" href="{{ asset2('frontend/css/css.css') }}">
    <link rel="stylesheet" href="{{ asset2('frontend/css/styles.min.css') }}">
    <link rel="stylesheet" href="{{ asset2('frontend/css/index.min.css') }}">
@endsection

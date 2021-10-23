@extends('frontend.master')

@section('header')
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-xxl-8 col-xl-8 col-md-8 col-12">
                <div class="title-heading position-relative">
                    <h1 class="">选择最合适你的套餐</h1>
                    <div class="d-flex">
                        <p class="">
                            按月收费
                        </p>

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                            <label class="form-check-label" for="flexSwitchCheckChecked">按年收费</label>
                        </div>
                        <div class="text">年付6折</div>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section id="card">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-md-4 col-12 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>TH1.0小号</h5>
                        </div>
                        <img src="{{ asset('frontend/img/1_new.jpg') }}" class="card-img-top w-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">￥16/月</h5>
                            <p class="card-text">适合：偶尔看视频+图文的普通用户</p>
                            <a href="#" class="btn btn-info w-100">立即起飞</a>
                            <div class="">
                                <h3>套餐包含：</h3>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">每月流量100G（年付套餐按购买日每30天重置）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">200M带宽服务器（速度●●○○○）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">2台设备同时在线 （手机/电脑不限）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">技术支持，客服回响（7/24小时）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">流媒体解锁（可观看当地流媒体）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/user-x.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">流媒体共享账号（Netflix Spotify）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/user-x.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">VIP节点（CN2隧道加密中转节点）</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-md-4 col-12 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>TH2.0 中号</h5>
                        </div>
                        <!-- <img {{ asset('frontend/src="img') }}/Rectangle%205.svg" class="card-img-top w-auto" alt="..."> -->
                        <img src="{{ asset('frontend/img/2_new.jpg') }}" class="card-img-top w-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">￥28/月</h5>
                            <p class="card-text">适合：偶尔看视频+图文的普通用户</p>
                            <a href="#" class="btn bg-d w-100">立即起飞</a>
                            <div class="">
                                <h3>套餐包含：</h3>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">每月流量100G（年付套餐按购买日每30天重置）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">200M带宽服务器（速度●●○○○）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">2台设备同时在线 （手机/电脑不限）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">技术支持，客服回响（7/24小时）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">流媒体解锁（可观看当地流媒体）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">流媒体共享账号（Netflix Spotify）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/user-x.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">VIP节点（CN2隧道加密中转节点）</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-md-4 col-12 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>TH5.0 大号</h5>
                        </div>
                        <!-- <img {{ asset('frontend/src="img') }}/Rectangle%209.svg" class="card-img-top w-auto" alt="..."> -->
                        <img src="{{ asset('frontend/img/3_new.png') }}" class="card-img-top w-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">￥39/月</h5>
                            <p class="card-text">适合：偶尔看视频+图文的普通用户</p>
                            <a href="#" class="btn btn-info w-100">立即起飞</a>
                            <div class="">
                                <h3>套餐包含：</h3>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">每月流量100G（年付套餐按购买日每30天重置）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">200M带宽服务器（速度●●○○○）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">2台设备同时在线 （手机/电脑不限）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">技术支持，客服回响（7/24小时）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">流媒体解锁（可观看当地流媒体）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">流媒体共享账号（Netflix Spotify）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">VIP节点（CN2隧道加密中转节点）</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-4 col-xl-4 col-md-4 col-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h5>Mini S</h5>
                        </div>
                        <!-- <img {{ asset('frontend/src="img') }}/Rectangle%2040.svg" class="card-img-top w-auto" alt="..."> -->
                        <img src="{{ asset('frontend/img/1_new.jpg') }}" class="card-img-top w-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">￥56/年</h5>
                            <p class="card-text">适合：偶尔看视频+图文的普通用户</p>
                            <a href="#" class="btn btn-info w-100">立即起飞</a>
                            <div class="">
                                <h3>套餐包含：</h3>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">每月流量100G（年付套餐按购买日每30天重置）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">200M带宽服务器（速度●●○○○）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">2台设备同时在线 （手机/电脑不限）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">技术支持，客服回响（7/24小时）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">流媒体解锁（可观看当地流媒体）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/user-x.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">流媒体共享账号（Netflix Spotify）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/user-x.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">VIP节点（CN2隧道加密中转节点）</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-md-4 col-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h5>Mini M</h5>
                        </div>
                        <!-- <img {{ asset('frontend/src="img') }}/Rectangle%2041.svg" class="card-img-top w-auto" alt="..."> -->
                        <img src="{{ asset('frontend/img/1_new.jpg') }}" class="card-img-top w-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">￥66/年</h5>
                            <p class="card-text">适合：偶尔看视频+图文的普通用户</p>
                            <a href="#" class="btn btn-info w-100">立即起飞</a>
                            <div class="">
                                <h3>套餐包含：</h3>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">每月流量100G（年付套餐按购买日每30天重置）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">200M带宽服务器（速度●●○○○）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">2台设备同时在线 （手机/电脑不限）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">技术支持，客服回响（7/24小时）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">流媒体解锁（可观看当地流媒体）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/user-x.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">流媒体共享账号（Netflix Spotify）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/user-x.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">VIP节点（CN2隧道加密中转节点）</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-md-4 col-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h5>King</h5>
                        </div>
                        <!-- <img {{ asset('frontend/src="img') }}/Rectangle%2042.svg" class="card-img-top w-auto" alt="..."> -->
                        <img src="{{ asset('frontend/img/5_new.png') }}" class="card-img-top w-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">￥299/年</h5>
                            <p class="card-text">适合：偶尔看视频+图文的普通用户</p>
                            <a href="#" class="btn btn-info w-100">立即起飞</a>
                            <div class="">
                                <h3>套餐包含：</h3>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">每月流量100G（年付套餐按购买日每30天重置）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">200M带宽服务器（速度●●○○○）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">2台设备同时在线 （手机/电脑不限）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">技术支持，客服回响（7/24小时）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">流媒体解锁（可观看当地流媒体）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">流媒体共享账号（Netflix Spotify）</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('frontend/img/Vector.svg') }}" class="img-fluid" alt="check">
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">VIP节点（CN2隧道加密中转节点）</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <style>
        .container.text-center{
            padding-top: 130px;
            padding-bottom: 70px;
        }
        #card .card {
            height: 800px;
            background: #ffffff !important;
            border: 2px solid #ededec;
            border-radius: 20px;
            box-shadow: 0 6px 21px 4px rgba(0,0,0,0.04);
        }
        #card .card .card-body{
            border-top: 2px solid #ededec;
        }
        #card .card .card-header{
            background: initial;
            height: 75px;
        }
        #card .card .card-header h5{
            padding-top: 15px;
            padding-left: ​15px;
            font-size: 30px;
            font-family: PingFang SC, PingFang SC-Bold, sans-serif;
            font-weight: 700;
            text-align: LEFT;
            color: #2e2e2e;
        }
        #card .card h5.card-title{
            font-size: 25px;
            font-family: PingFang SC, PingFang SC-Bold, sans-serif;
            font-weight: 700;
            text-align: LEFT;
            color: #2e2e2e;
            margin-bottom: 17px;
        }
        #card .card p.card-text{
            font-size: 15px;
            font-family: PingFang SC, PingFang SC-Medium, sans-serif;
            font-weight: 500;
            text-align: LEFT;
            color: #bbbbbb;
            margin-bottom: 21px;
        }
        #card .card .card-body .btn-info{
            color: #000002;
            background: #72e8ab !important;
            border-radius: 14px;
        }
        #card .card .card-body .btn-info:hover{
            color: #fff !important;
            /* background: #29AB87 !important; */
            background: #058b6e !important;
        }
        #card .card .card-body h3{
            margin-top: 20px;
        }
        .bg-d{
            color: #fff;
            border-radius: 14px;
            background: #585858 !important;
        }
        .bg-d:hover{
            color: #fff !important;
            background: #000002 !important;
        }
        .ps-2 span{
            font-size: 14px;
            font-family: PingFang SC, PingFang SC-Medium, sans-serif;
            font-weight: 500;
            text-align: LEFT;
            color: #383838;
        }
        header p{
            margin-right: 30px;
        }
        .title-heading .form-switch #flexSwitchCheckChecked{
            width: 97px;
            height: 45px;
            border-radius: 66px;
            background-color: #72e8ab !important;
            border-color: #72e8ab !important;
            background-image: url("img/Ellipse 1.svg");
        }
        .title-heading .form-check-input:checked{
            width: 97px;
            height: 45px;
            border-radius: 66px;
            background-color: #72e8ab !important;
            border-color: #72e8ab !important;
        }
        .title-heading  .form-check label{
            font-size: 36px;
            font-family: PingFang SC, PingFang SC-Medium, sans-serif;
            font-weight: 500;
            text-align: LEFT;
            color: #72e8ab;
            margin-left: 30px;
        }

        .title-heading h1{
            font-size: 72px;
            font-family: PingFang SC, PingFang SC-Medium;
            font-weight: 500;
            color: #2e2e2e;
            margin-bottom: 64px;
        }
        .title-heading .d-flex p{
            font-size: 36px;
            font-family: PingFang SC, PingFang SC-Medium;
            font-weight: 500;
            text-align: LEFT;
            color: #2e2e2e;
            margin-right: 30px;
        }
        .title-heading .d-flex{
            width: 500px;
            margin: 0 auto;
        }
        .title-heading .d-flex .text{
            position: absolute;
            right: 106px;
            top: 107px;
            width: 87px;
            height: 34px;
            font-size: 24px;
            font-family: PingFang SC, PingFang SC-Medium;
            font-weight: 500;
            text-align: LEFT;
            color: #72e8ab;
        }
        .title-heading .d-flex span{
            position: absolute;
            right: 182px;
            background-image: url("img/Frame.svg");
            background-size: cover;
            width: 37px;
            height: 37px;
        }
        img.card-img-top.w-auto {
            padding: 40px;
        }
        @media only screen and (min-width: 374px) and (max-width: 424px){
            .container.text-center{
                padding: 44px 0;
            }
            .title-heading .d-flex{
                display: initial !important;
            }
            .title-heading .d-flex span{
                bottom: 15px;
                right: 11px;
            }
            .title-heading .d-flex .text{
                top: 247px;
                right: 0;
            }
        }

    </style>
@endsection

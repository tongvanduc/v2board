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
                            <a class="nav-link">
                                <img src="{{ asset2('frontend/img/share/Vector_2.svg') }}" class="img-fluid" alt="">
                            </a>
                        </li>

                        <li class="nav-item px-3">
                            <a class="nav-link">
                                <img src="{{ asset2('frontend/img/share/Vector.svg') }}" class="img-fluid" alt="">
                            </a>
                        </li>

                        <li class="nav-item px-3">
                            <a class="nav-link">
                                <img src="{{ asset2('frontend/img/share/Group%2019.svg') }}" class="img-fluid" alt="">
                            </a>
                        </li>

                        <li class="nav-item px-3">
                            <a class="nav-link">
                                <img src="{{ asset2('frontend/img/share/Vector_1.svg') }}" class="img-fluid" alt="">
                            </a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link">
                                <img src="{{ asset2('frontend/img/share/icons8-bitcoin-300%204.svg') }}" class="img-fluid" alt="">
                            </a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link">
                                <img src="{{ asset2('frontend/img/share/Vector_3.svg') }}" class="img-fluid" alt="">
                            </a>
                        </li>
                    </ul>

                    <ul class="nav  share_text">
                        <li class="nav-item px-3">
                            <a class="nav-link text-w" >
                                支持：
                            </a>
                        </li>

                        <li class="nav-item px-3">
                            <a class="nav-link" data-bs-toggle="modal" href="#exampleModalToggle1" role="button">
                                隐私政策
                            </a>
                        </li>

                        <li class="nav-item px-3">
                            <a class="nav-link" data-bs-toggle="modal" href="#exampleModalToggle2" role="button">
                                退款政策
                            </a>
                        </li>

                        <li class="nav-item px-3">
                            <a class="nav-link" data-bs-toggle="modal" href="#exampleModalToggle3" role="button">
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

@include('frontend.modals.modal-toggle-1')

@include('frontend.modals.modal-toggle-2')

@include('frontend.modals.modal-toggle-3')

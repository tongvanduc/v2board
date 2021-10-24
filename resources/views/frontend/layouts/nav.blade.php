<nav class="navbar navbar-expand-lg navbar-expand-xxl navbar-light bg-white z-index-3 py-3  shadow">
    <div class="container">
        <a class="navbar-brand" href="" rel="tooltip" title="Code by Minh Duc Designer" data-placement="bottom"
           target="_blank">
            <img src="{{ asset2('frontend/img/logo/logo%202.svg') }}" alt="logo" class="logo img-fluid">
        </a>
        <button class="btn bg-gradient-green btn btn-sm   mb-0 ms-auto d-lg-none d-block mb-0 w-91">帮助</button>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav navbar-nav-hover">
                <li class="nav-item px-3">
                    <a href="{{ route('frontend.index') }}"
                       class="nav-link {{ Route::currentRouteName() === 'frontend.index' ? 'active' : '' }}">
                        首页
                    </a>
                </li>

                <li class="nav-item px-3">
                    <a class="nav-link {{ Route::currentRouteName() === 'frontend.supporting' ? 'active' : '' }}"
                       href="{{ route('frontend.supporting') }}">
                        支持的网站
                    </a>
                </li>

                <li class="nav-item px-3">
                    <a class="nav-link {{ Route::currentRouteName() === 'frontend.package' ? 'active' : '' }}"
                       href="{{ route('frontend.package') }}">
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

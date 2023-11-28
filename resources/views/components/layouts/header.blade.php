<header class="site_header site_header_1 shadow-sm !py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col col-lg-3 col-5">
                <div class="site_logo">
                    <a wire:navigate class="site_link w-20" href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Hi Korean">
                    </a>
                </div>
            </div>
            <div class="col col-lg-9 col-2">
                <nav class="main_menu navbar navbar-expand-lg">
                    <div
                        class="remove-all main_menu_inner collapse navbar-collapse justify-content-center lg:!justify-end"
                        id="main_menu_dropdown">
                        <ul class="main_menu_list unordered_list_center">
                            <li @if(Route::currentRouteName() == 'about_us') class="active" @endif>
                                <a wire:navigate class="nav-link !font-bold uppercase" href="{{ route('about_us') }}">
                                    Về chúng tôi</a>
                            </li>
                            <li class="dropdown @if(Route::currentRouteName() == 'courses') active @endif">
                                <a class="nav-link !font-bold uppercase" id="home_submenu" role="button"
                                   onclick="window.location.href='{{ route('courses') }}'"
                                   data-bs-toggle="dropdown" aria-expanded="false">Khóa học</a>
                                <ul class="dropdown-menu" aria-labelledby="home_submenu">
                                    {{-- <li class="active"><a href="#">Học trực tiếp</a></li> --}}
                                    <li><a wire:navigate href="/courses/so-cap-1">Sơ cấp</a>
                                    </li>
                                    <li><a wire:navigate href="/courses/trung-cap-1">Trung cấp</a>
                                    </li>
                                    <li><a wire:navigate
                                           href="/courses/e-learning">Online</a></li>
                                    <li><a wire:navigate href="/courses/bien-phien-dich">Theo
                                            đối tượng</a>
                                    </li>
                                    <li><a wire:navigate
                                           href="/courses/topik-1-2">Luyện
                                            thi</a></li>
                                </ul>
                            </li>
                            <li class="@if(Route::currentRouteName() == 'media') active @endif"><a
                                    wire:navigate
                                    class="nav-link !font-bold uppercase"
                                    href="{{ route('media') }}">Hoạt động</a></li>
                            <li class="@if(Route::currentRouteName() == 'sales') active @endif">
                                <a class="nav-link !font-bold uppercase"
                                   wire:navigate
                                   href="{{ route('sales') }}">Ưu đãi</a></li>
                            <li class="@if(Route::currentRouteName() == 'news') active @endif">
                                <a class="nav-link !font-bold uppercase"
                                   wire:navigate
                                   href="{{ route('news') }}">Tin tức</a></li>
                            <li class="@if(Route::currentRouteName() == 'contact') active @endif">
                                <a class="nav-link !font-bold uppercase"
                                   wire:navigate
                                   href="{{ route('contact') }}">Liên hệ</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col col-lg-3 col-5 lg:hidden">
                <ul class="header_btns_group unordered_list_end">
                    <li>
                        <button class="mobile_menu_btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#main_menu_dropdown" aria-controls="main_menu_dropdown"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <i class="far fa-bars"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

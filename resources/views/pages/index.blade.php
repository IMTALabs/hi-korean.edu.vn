<?php

\Laravel\Folio\name('home');

$news = \Livewire\Volt\computed(fn() => \App\Models\Post::orderBy('updated_at', 'desc')->paginate(4));

?>

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/lightgallery@2.7.2/css/lightgallery-bundle.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@glidejs/glide@3.2.3/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@glidejs/glide@3.2.3/dist/css/glide.theme.min.css">

    <script src="https://cdn.jsdelivr.net/npm/hystmodal@1.0.1/dist/hystmodal.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/hystmodal@1.0.1/dist/hystmodal.min.css" rel="stylesheet">
@endpush

@push('scripts')
    <script src="https://unpkg.com/@glidejs/glide@3.6.0/dist/glide.min.js"></script>
    <script>
        new Glide(".glide").mount();
    </script>

    <script type="module">
        import lightGallery from "https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/+esm";
        import lgThumbnail from "https://unpkg.com/lightgallery@2.7.2/plugins/zoom/lg-zoom.es5.js";
        import lgZoom from "https://unpkg.com/lightgallery@2.7.2/plugins/thumbnail/lg-thumbnail.es5.js";

        lightGallery(document.getElementById("lightgallery"), {
            plugins: [lgZoom, lgThumbnail],
            speed: 500
        });
    </script>
@endpush

<x-layouts.app>
    @volt
    <main class="page_content">
        <!-- Banner Section - Start
        ================================================== -->
        <div class="glide">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide">
                        <section style="background-image: url('{{ asset('assets/images/banner/banner.png') }}')"
                                 class="hero_banner style_1">
                            <div class="container flex items-stretch">
                                <div class="flex w-full flex-col text-left lg:w-1/2">
                                    <div class="flex grow flex-col items-start justify-center">
                                        <span
                                            class="bg-alternative-darker text-[#3C1E1F] font-bold text-2xl px-6 py-1 rounded">
                                            Trung Tâm Tiếng Hàn
                                        </span>
                                        <h1 class="mt-8 uppercase md:!text-5xl text-orange-950 md:!leading-[4.5rem]">
                                            Toàn diện cho<br> ngưới mới bắt đầu
                                        </h1>
                                    </div>

                                    <div class="h-40"></div>
                                </div>
                                <img class="max-lg:hidden w-1/2"
                                     src="{{ asset('assets/images/banner/hero_banner_img_2.png') }}" alt="">
                            </div>
                        </section>
                    </li>
                    <li class="glide__slide">
                        <section style="background-image: url('{{ asset('assets/images/banner/banner.png') }}')"
                                 class="hero_banner style_1">
                            <div class="container flex items-stretch">
                                <div class="flex w-full flex-col text-left lg:w-1/2">
                                    <div class="flex grow flex-col items-start justify-center">
                                        <span
                                            class="bg-alternative-darker text-[#3C1E1F] font-bold text-2xl px-6 py-1 rounded">
                                            Trung Tâm Tiếng Hàn
                                        </span>
                                        <h1 class="mt-8 uppercase md:!text-5xl text-orange-950 md:!leading-[4.5rem]">
                                            Toàn diện cho<br> ngưới mới bắt đầu
                                        </h1>
                                    </div>

                                    <div class="h-40"></div>
                                </div>
                                <img class="max-lg:hidden w-1/2"
                                     src="{{ asset('assets/images/banner/hero_banner_img_2.png') }}" alt="">
                            </div>
                        </section>
                    </li>
                    <li class="glide__slide">
                        <section style="background-image: url('{{ asset('assets/images/banner/banner.png') }}')"
                                 class="hero_banner style_1">
                            <div class="container flex items-stretch">
                                <div class="flex w-full flex-col text-left lg:w-1/2">
                                    <div class="flex grow flex-col items-start justify-center">
                                        <span
                                            class="bg-alternative-darker text-[#3C1E1F] font-bold text-2xl px-6 py-1 rounded">
                                            Trung Tâm Tiếng Hàn
                                        </span>
                                        <h1 class="mt-8 uppercase md:!text-5xl text-orange-950 md:!leading-[4.5rem]">
                                            Toàn diện cho<br> ngưới mới bắt đầu
                                        </h1>
                                    </div>

                                    <div class="h-40"></div>
                                </div>
                                <img class="max-lg:hidden w-1/2"
                                     src="{{ asset('assets/images/banner/hero_banner_img_2.png') }}" alt="">
                            </div>
                        </section>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container mx-auto relative -mt-32 lg:-mt-72 max-md:pr-10">
            <div class="max-w-2xl z-[99999999] relative">
                <div class="mb-16 w-full lg:w-3/4">
                    <h2 class="text-xl">Sự kiện mới</h2>

                    <div class="pt-2 tabs_wrapper">
                        <div class="tab-content">
                            <div class="relative tab-pane fade show active" id="teb_hr"
                                 role="tabpanel">
                                <div
                                    class="flex flex-nowrap justify-center common_carousel_3col [&>button]:-top-8">
                                    <div class="pr-4">
                                        <img class="rounded border border-primary"
                                             src="https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/368239551_615154604121982_3252719131205198815_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEncRXfQrGT8GbKTrxb5w9-wTkEwumdt9fBOQTC6Z23121Fiq8hUlir3eQJHQ0sda9R8KuXKQWbjKP1_1bjGRKC&_nc_ohc=Py0pxPyGQ2cAX_NW7SA&_nc_ht=scontent.fhan14-1.fna&oh=00_AfDxiBpmHB2TyWcCKD94VpivfoqlP28aI-QSW0RVF-FZCg&oe=65696B70" alt="">
                                    </div>
                                    <div class="pr-4">
                                        <img class="rounded border border-primary"
                                             src="https://scontent.fhan14-4.fna.fbcdn.net/v/t39.30808-6/367426873_616206084016834_5526045535344941440_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGxUlA8VBAgWopb6JZtExeX4aaXORuBTM3hppc5G4FMzQoAcMPEJkn59OQCzanH6F7DGmqCnv2E9l3cFwVNnWQk&_nc_ohc=U8-JNw-rUz0AX-lFJ8U&_nc_ht=scontent.fhan14-4.fna&oh=00_AfCDGghO4k40CODsDfAI30iFh6SFRY9bnU0Mg88ToU3LZQ&oe=656A7CBC" alt="">
                                    </div>
                                    <div class="pr-4">
                                        <img class="rounded border border-primary"
                                             src="https://scontent.fhan14-3.fna.fbcdn.net/v/t39.30808-6/368212596_616206127350163_8417724170930565580_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeELZtLoucMhJQO2u9uo6FQ8dtwJJGhaNId23AkkaFo0h8KFR6Vb_jlF3-mfRYmSTnB4ok2F5lhGTWEBQIkoN20l&_nc_ohc=eBCdHg8X_lsAX_nEvIO&_nc_ht=scontent.fhan14-3.fna&oh=00_AfA1IKwodcaIAxSSxZJuZCxc3x1v4GqgyW5i3gu7kYyrrA&oe=656B4E22" alt="">
                                    </div>
                                    <div class="pr-4">
                                        <img class="rounded border border-primary"
                                             src="https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/368241235_616206157350160_5054740270367602422_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeG-XivYrcgcBKEAoYFqGP_Oc3WUiojj58RzdZSKiOPnxDRF_Xh_gltNnCjaWK6mellIndc2gYpyqmnqTImeRGvt&_nc_ohc=18apD1hw8j8AX-IKHSK&_nc_ht=scontent.fhan14-2.fna&oh=00_AfBsLssPMRcxXQPQwOEtrcpaGh83KV5imP9JAg0Ods0u5A&oe=656A9BCC" alt="">
                                    </div>
                                    <div class="pr-4">
                                        <img class="rounded border border-primary"
                                             src="https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/405277704_667893678848074_4168042183294063711_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGD1vt7RnRycZeDuzfMiGT_ltWnloGfpV2W1aeWgZ-lXXKfFlK0Au_K-mnoH8uCuj2GJY8V4qGEUph0r1yvddCr&_nc_ohc=5sUTLUKW9HUAX_tuteT&_nc_ht=scontent.fhan14-2.fna&oh=00_AfDux-IcxLUr0RAp_dVPKmXedQ1lFTEusBqdvTaODBz1_Q&oe=65697862" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Section - End
        ================================================== -->

        <!-- Courses Section - Start
        ================================================== -->
        <section class="pt-8 courses_section section_space_lg">
            <div class="container">
                <div class="section_heading">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col col-lg-6">
                            <h3 class="text-2xl !text-secondary">Tuyển Sinh</h3>
                            <h2 class="mb-0 uppercase heading_text">
                                các khóa học
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="max-lg:mt-24 tabs_wrapper">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="teb_hr" role="tabpanel">
                            <div class="flex-nowrap justify-center row common_carousel_3col">
                                <div class="overflow-visible col col-lg-4 carousel_item">
                                    <div class="overflow-visible course_card">
                                        <div class="item_image">
                                            <a class="border !border-gray-300"
                                               href="/courses/so-cap-1"
                                               data-cursor-text="View">
                                                <img
                                                    src="https://w.ladicdn.com/s900x650/62e3a03efac7530012145b9f/img_course_02-20221201133721-atuyu.jpg"
                                                    alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <h3 class="py-0 item_title">
                                                <a href="{{ route('courses') }}"
                                                   class="flex items-baseline gap-2">
                                                    <div class="w-3 h-3 rounded-full !bg-secondary shrink-0"></div>
                                                    <div class="truncate">SƠ CẤP</div>
                                                </a>
                                            </h3>
                                            <ul class="h-28 pt-2 line-clamp-4">
                                                <li>Sơ cấp 1</li>
                                                <li>Sơ cấp 2</li>
                                            </ul>
                                            <div class="flex items-center justify-between">

                                                <a class="px-2 py-2 btn btn_primary"
                                                   href="{{ route('courses') }}">
                                                    <span>
                                                        <small class="py-0">
                                                            Xem thêm
                                                        </small>
                                                        <small class="py-0">
                                                            Xem thêm
                                                        </small>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow-visible col col-lg-4 carousel_item">
                                    <div class="overflow-visible course_card">
                                        <div class="item_image">
                                            <a class="border !border-gray-300"
                                               href="/courses/so-cap-1"
                                               data-cursor-text="View">
                                                <img
                                                    src="https://w.ladicdn.com/s900x650/62e3a03efac7530012145b9f/img_course_02-20221201133721-atuyu.jpg"
                                                    alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <h3 class="py-0 item_title">
                                                <a href="{{ route('courses') }}"
                                                   class="flex items-baseline gap-2">
                                                    <div class="w-3 h-3 rounded-full !bg-secondary shrink-0"></div>
                                                    <div class="truncate">TRUNG CẤP</div>
                                                </a>
                                            </h3>
                                            <ul class="h-28 pt-2 line-clamp-4">
                                                <li>Trung cấp 1</li>
                                                <li>Trung cấp 2</li>
                                            </ul>
                                            <div class="flex items-center justify-between">

                                                <a class="px-2 py-2 btn btn_primary"
                                                   href="{{ route('courses') }}">
                                                    <span>
                                                        <small class="py-0">
                                                            Xem thêm
                                                        </small>
                                                        <small class="py-0">
                                                            Xem thêm
                                                        </small>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow-visible col col-lg-4 carousel_item">
                                    <div class="overflow-visible course_card">
                                        <div class="item_image">
                                            <a class="border !border-gray-300"
                                               href="/courses/so-cap-1"
                                               data-cursor-text="View">
                                                <img
                                                    src="https://w.ladicdn.com/s900x650/62e3a03efac7530012145b9f/img_course_02-20221201133721-atuyu.jpg"
                                                    alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <h3 class="py-0 item_title">
                                                <a href="{{ route('courses') }}"
                                                   class="flex items-baseline gap-2">
                                                    <div class="w-3 h-3 rounded-full !bg-secondary shrink-0"></div>
                                                    <div class="truncate">LUYỆN THI TOPIK</div>
                                                </a>
                                            </h3>
                                            <ul class="h-28 pt-2 line-clamp-4">
                                                <li>Luyện thi TOPIK 1-2</li>
                                                <li>Luyện thi TOPIK 3-4</li>
                                                <li>Luyện thi TOPIK 5-6</li>
                                            </ul>
                                            <div class="flex items-center justify-between">

                                                <a class="px-2 py-2 btn btn_primary"
                                                   href="{{ route('courses') }}">
                                                    <span>
                                                        <small class="py-0">
                                                            Xem thêm
                                                        </small>
                                                        <small class="py-0">
                                                            Xem thêm
                                                        </small>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow-visible col col-lg-4 carousel_item">
                                    <div class="overflow-visible course_card">
                                        <div class="item_image">
                                            <a class="border !border-gray-300"
                                               href="/courses/so-cap-1"
                                               data-cursor-text="View">
                                                <img
                                                    src="https://w.ladicdn.com/s900x650/62e3a03efac7530012145b9f/img_course_02-20221201133721-atuyu.jpg"
                                                    alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <h3 class="py-0 item_title">
                                                <a href="{{ route('courses') }}"
                                                   class="flex items-baseline gap-2">
                                                    <div class="w-3 h-3 rounded-full !bg-secondary shrink-0"></div>
                                                    <div class="truncate">HỌC THUẬT</div>
                                                </a>
                                            </h3>
                                            <ul class="h-28 pt-2 line-clamp-4">
                                                <li>Biên phiên dịch</li>
                                                <li>Du học</li>
                                            </ul>
                                            <div class="flex items-center justify-between">

                                                <a class="px-2 py-2 btn btn_primary"
                                                   href="{{ route('courses') }}">
                                                    <span>
                                                        <small class="py-0">
                                                            Xem thêm
                                                        </small>
                                                        <small class="py-0">
                                                            Xem thêm
                                                        </small>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow-visible col col-lg-4 carousel_item">
                                    <div class="overflow-visible course_card">
                                        <div class="item_image">
                                            <a class="border !border-gray-300"
                                               href="/courses/so-cap-1"
                                               data-cursor-text="View">
                                                <img
                                                    src="https://w.ladicdn.com/s900x650/62e3a03efac7530012145b9f/img_course_02-20221201133721-atuyu.jpg"
                                                    alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <h3 class="py-0 item_title">
                                                <a href="{{ route('courses') }}"
                                                   class="flex items-baseline gap-2">
                                                    <div class="w-3 h-3 rounded-full !bg-secondary shrink-0"></div>
                                                    <div class="truncate">ĐÀO TẠO</div>
                                                </a>
                                            </h3>
                                            <ul class="h-28 pt-2 line-clamp-4">
                                                <li>Đào tạo doanh nghiệp</li>
                                                <li>Đào tạo trong trường học</li>
                                            </ul>
                                            <div class="flex items-center justify-between">

                                                <a class="px-2 py-2 btn btn_primary"
                                                   href="{{ route('courses') }}">
                                                    <span>
                                                        <small class="py-0">
                                                            Xem thêm
                                                        </small>
                                                        <small class="py-0">
                                                            Xem thêm
                                                        </small>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Courses Section - End
        ================================================== -->

        <!-- Về chúng tôi - Start
        ================================================== -->
        <section class="expect_from_course section_space_lg bg-[#F8F2E6]">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-5">

                        <div class="section_heading">
                            <h3 class="text-2xl !text-secondary">Hi Korean</h3>
                            <h2 class="mb-0 uppercase heading_text">
                                về chúng tôi
                            </h2>
                            <p class="mt-10 mb-0 heading_description">
                                Tại Hi Korean, chúng tôi sẽ giúp bạn học tiếng Hàn với ý chí phấn đấu, tự tin để vững
                                tiến vào tương lai và tự tin bước vào các công ty Hàn Quốc để làm việc.
                            </p>
                        </div>

                        <!-- Button will hide on Mobile Device -->
                        <a wire:navigate class="border btn btn_primary border-primary" href="{{ route('about_us') }}">
                            <span>
                                <small>Tìm hiểu thêm</small>
                                <small>Tìm hiểu thêm</small>
                            </span>
                        </a>
                    </div>
                    <div class="col col-lg-7">
                        <div class="row">
                            <div class="col col-md-6">
                                <div class="border border-black service_item" data-magnetic>
                                    <div class="item_icon">
                                        <img src="assets/images/service/icon_academic_cap.svg"
                                             alt="Hi Korean">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">Giảng viên chuyên nghiệp</h3>
                                        <p class="mb-0">
                                            100% giảng viên đạt TOPIK 6, có >2 năm kinh nghiệm dạy tiếng Hàn và là giảng
                                            viên của Đại học Hà Nội, Đại học Ngoại ngữ.
                                        </p>
                                    </div>
                                </div>
                                <div class="mt-8 border border-black service_item" data-magnetic>
                                    <div class="item_icon">
                                        <img src="assets/images/service/icon_communication.svg"
                                             alt="Hi Korean">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">Đội ngũ chăm sóc học viên hỗ trợ 24/7</h3>
                                        <p class="mb-0">
                                            Gửi tài liệu, sắp xếp lịch học bù, bảo lưu chuyển lớp… học viên học liền
                                            mạch, không bị mất kiến thức.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="border border-black service_item" data-magnetic>
                                    <div class="item_icon">
                                        <img src="assets/images/service/icon_physics.svg"
                                             alt="Hi Korean">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">Phương pháp giảng dạy tích hợp</h3>
                                        <p class="mb-0">
                                            Đào tạo bài bản 4 kỹ năng Nghe - Nói - Đọc - Viết, kết hợp kiến thức ngôn
                                            ngữ và kiến thức chuyên ngành. Hạn chế sử dụng tiếng Việt trong giờ học, tạo
                                            điều kiện tối đa cho học viên sử dụng và tư duy bằng ngôn ngữ tiếng Hàn.
                                        </p>
                                    </div>
                                </div>
                                <div class="mt-8 border border-black service_item" data-magnetic>
                                    <div class="item_icon">
                                        <img src="assets/images/service/icon_diploma.svg"
                                             alt="Hi Korean">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">Giáo trình</h3>
                                        <p class="mb-0">
                                            Giáo trình Funfun Korea - Được biên soạn thành các ppt xinh đẹp + bộ chương
                                            trình ôn tập từ vựng qua các phần mềm dễ học và vui vẻ.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Về chúng tôi - End
        ================================================== -->

        <!-- Về CEO - Start
        ================================================== -->
        <section class="expect_from_course section_space_lg">
            <div class="container">
                <div class="items-center row">
                    <div class="pr-8 col col-lg-5">
                        <div class="section_heading">
                            <h3 class="text-2xl !text-secondary">Hi Korean</h3>
                            <h2 class="mb-0 uppercase heading_text">
                                CEO
                            </h2>
                            <h3 class="mt-8 text-4xl">Nguyễn Phương Thúy</h3>
                            <p class="mt-10 mb-0 heading_description">
                                <ul class="">
                                    <li>Tốt nghiệp loại giỏi Đại học Ngoại ngữ - ĐHQG Hà Nội</li>
                                    <li>Tốt nghiệp loại giỏi Đại học Quốc gia Pusan, Hàn Quốc</li>
                                    <li>Giám sát viên ngân hàng Shinhan Việt Nam</li>
                                    <li>Giảng viên khoa tiếng Hàn, Đại học Hà Nội</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="col col-lg-7 lg:pl-8">
                        <img class="aspect-square w-full rounded border object-cover border-primary"
                             src="https://media.licdn.com/dms/image/C5603AQGMMCRrFgFoGw/profile-displayphoto-shrink_800_800/0/1588748081403?e=1706745600&v=beta&t=e1yYjOKlIlm2kWZi6PgXb516zafV9z-DaN6s3bf85Q8" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- Về CEO - End
        ================================================== -->

        <!-- Giảng viên - Start
        ================================================== -->
        <section class="expect_from_course section_space_lg bg-alternative-lighter">
            <div class="container">
                <div class="row">
                    <div class="pr-8 col col-lg-4">
                        <div class="section_heading">
                            <h3 class="text-2xl !text-secondary">Đội ngũ</h3>
                            <h2 class="mb-0 uppercase heading_text">
                                giáo viên
                            </h2>
                            <p class="mt-10 mb-0 heading_description">
                                Chúng tôi tự hào là đơn vị đem lại một môi trường đào tạo tiếng Hàn chất lượng tốt nhất,
                                quan tâm đến người học, đến những đam mê và ước mơ của học viên.
                            </p>
                            <!-- Button will hide on Mobile Device -->
                            <a wire:navigate class="border btn btn_primary border-primary mt-8"
                               href="{{ route('about_us') }}#lectures">
                                <span>
                                    <small>Tìm hiểu thêm</small>
                                    <small>Tìm hiểu thêm</small>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col col-lg-8 lg:pl-8">
                        <div class="mt-28 flex-nowrap justify-center row common_carousel_2col">
                            <div class="overflow-visible col col-lg-4 carousel_item">
                                <div
                                    class="rounded-lg rounded-br-3xl border course_card border-primary hover:bg-alternative-darker hover:shadow-none">
                                    <div class="item_image">
                                        <a class="border !border-gray-300">
                                            <img class="aspect-square object-cover bg-top" src="{{ asset('assets/images/mentor/mentor_image_1.jpg') }}"
                                                 alt="Hi Korean">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <h3 class="py-0 item_title">
                                            <a class="flex items-baseline gap-2">
                                                <div
                                                    class="w-3 h-3 rounded-full !bg-secondary shrink-0"></div>
                                                <div class="truncate">CEO NGUYỄN PHƯƠNG THÚY</div>
                                            </a>
                                        </h3>
                                        <ul class="mb-0 pt-4">
                                            <li>Tốt nghiệp bằng Giỏi chuyên ngành Ngôn ngữ Hàn
                                            trường Đại học Ngoại ngữ - ĐHQGHN</li>
                                            <li>Tốt nghiệp Thạc sĩ chuyên ngành Kinh doanh và Quản lý
                                            tài chính trường Đại học Ngoại ngữ Busan</li>
                                            <li>Giáo viên giảng dạy tại ngành Ngôn ngữ Hàn, Trường Đại
                                            học Hà Nội.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="overflow-visible col col-lg-4 carousel_item">
                                <div
                                    class="rounded-lg rounded-br-3xl border course_card border-primary hover:bg-alternative-darker hover:shadow-none">
                                    <div class="item_image">
                                        <a class="border !border-gray-300">
                                            <img class="aspect-square object-cover bg-top" src="{{ asset('assets/images/mentor/mentor_image_3.jpg') }}"
                                                 alt="Hi Korean">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <h3 class="py-0 item_title">
                                            <a class="flex items-baseline gap-2">
                                                <div
                                                    class="w-3 h-3 rounded-full !bg-secondary shrink-0"></div>
                                                <div class="truncate">THẦY TRẦN QUANG ANH</div>
                                            </a>
                                        </h3>
                                        <ul class="mb-0 pt-4">
                                            <li>Tốt nghiệp ngành Ngôn ngữ và văn học Hàn Quốc tại Đại học Chonnam</li>
                                            <li>Tốt nghiệp Thạc sĩ ngành Hợp tác Quốc tế tại Đại học Yeungnam</li>
                                            <li>Nghiên cứu sinh Tiến sĩ ngành Phát triển cộng đồng và chính sách xã hội tại Đại học Yeungnam</li>
                                            <li>Giảng viên Khoa Tiếng Hàn, trường Đại học Phenikaa</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="overflow-visible col col-lg-4 carousel_item">
                                <div
                                    class="rounded-lg rounded-br-3xl border course_card border-primary hover:bg-alternative-darker hover:shadow-none">
                                    <div class="item_image">
                                        <a class="border !border-gray-300">
                                            <img class="aspect-square object-cover bg-top" src="{{ asset('assets/images/mentor/mentor_image_5.jpg') }}"
                                                 alt="Hi Korean">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <h3 class="py-0 item_title">
                                            <a class="flex items-baseline gap-2">
                                                <div
                                                    class="w-3 h-3 rounded-full !bg-secondary shrink-0"></div>
                                                <div class="truncate">THẦY YUN CHU SEOK</div>
                                            </a>
                                        </h3>
                                        <ul class="mb-0 pt-4">
                                            <li>Giảng viên khoa Hàn trường Đại học Đại Nam</li>
                                            <li>Tốt nghiệp thạc sỹ khoa tiếng Hàn trường Đại học Kyunghee Hàn quốc.</li>
                                            <li>Giáo viên dạy giao tiếp tại trung tâm tiếng Hàn Hi Korean.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Giảng viên - End
        ================================================== -->

        <!-- Popular Event Section - Start
        ================================================== -->
        <section class="popular_event_section section_space_lg decoration_wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col col-lg-7">
                        <div class="section_heading mb-lg-0">
                            <h3 class="text-2xl !text-secondary">Tuyển Sinh</h3>
                            <h2 class="mb-0 uppercase heading_text">
                                Lịch khai giảng
                            </h2>
                            <p class="mt-8 heading_description">
                                Với kinh nghiệm 6 năm trong lĩnh vực giảng dạy tiếng Hàn, HI KOREAN đã và đang là một
                                trong những trung tâm đào tạo tiếng Hàn uy tín và chất lượng.
                                Đặc biệt, chỉ trong tháng này, HI KOREAN sẽ áp dụng ưu đãi giảm giá lên đến 30% cho khoá
                                học. Đừng bỏ lỡ cơ hội mà hãy để lại thông tin để trung tâm có thể liên hệ và hỗ trợ bạn
                                nhanh nhất nhé!
                            </p>
                        </div>
                    </div>
                    <div class="col col-lg-5">
                        <div class="popular_event_list">
                            <h3 class="wrap_title">Các lớp học sắp tới</h3>
                            <ul class="unordered_list_block">
                                <li>
                                    <div class="column">
                                        <b class="day">29</b>
                                        <span class="month">Tháng 11<br>2023</span>
                                    </div>
                                    <div class="column">
                                        <h4 class="event_title">Lớp GT1K137ON</h4>
                                        <span class="event_name">
                                            <strong>Giảng viên:</strong> <small>Cô Minh Trang</small>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="column">
                                        <b class="day">29</b>
                                        <span class="month">Tháng 11<br>2023</span>
                                    </div>
                                    <div class="column">
                                        <h4 class="event_title">Lớp GT1K123OFF</h4>
                                        <span class="event_name">
                                            <strong>Giảng viên:</strong> <small>Cô Thùy Linh</small>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="column">
                                        <b class="day">27</b>
                                        <span class="month">Tháng 11<br>2023</span>
                                    </div>
                                    <div class="column">
                                        <h4 class="event_title">Lớp GT2K86ON</h4>
                                        <span class="event_name">
                                            <strong>Giảng viên:</strong> <small>Cô Hoàng Anh</small>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="column">
                                        <b class="day">27</b>
                                        <span class="month">Tháng 11<br>2023</span>
                                    </div>
                                    <div class="column">
                                        <h4 class="event_title">Lớp GT3K12ON</h4>
                                        <span class="event_name">
                                            <strong>Giảng viên:</strong> <small>Cô Hàn Lâm Anh</small>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="column">
                                        <b class="day">30</b>
                                        <span class="month">Tháng 11<br>2023</span>
                                    </div>
                                    <div class="column">
                                        <h4 class="event_title">Lớp GT3K04OFF</h4>
                                        <span class="event_name">
                                            <strong>Giảng viên:</strong> <small>Cô Minh Trang</small>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="column">
                                        <b class="day">28</b>
                                        <span class="month">Tháng 11<br>2023</span>
                                    </div>
                                    <div class="column">
                                        <h4 class="event_title">Lớp TOPIK34K93ON</h4>
                                        <span class="event_name">
                                            <strong>Giảng viên:</strong> <small>Cô Hoàng Anh</small>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="deco_item shape_img_1" data-parallax='{"y" : 130, "smoothness": 6}'>
                <img src="assets/images/shape/shape_img_3.png" alt="Collab – Online Learning Platform">
            </div>
            <div class="deco_item shape_img_2" data-parallax='{"x" : -130, "smoothness": 6}'>
                <img src="assets/images/shape/shape_img_3.png" alt="Collab – Online Learning Platform">
            </div>
            <div class="deco_item shape_img_3" data-parallax='{"y" : -130, "smoothness": 6}'>
                <img src="assets/images/shape/shape_img_3.png" alt="Collab – Online Learning Platform">
            </div>
        </section>
        <!-- Popular Event Section - End
        ================================================== -->

        <!-- Call To Action Section - Start
        ================================================== -->
        <section class="mt-24 calltoaction_section">
            <div
                class="boxed_wrapper pb-4 pt-12 bg-[#FDD561] border border-primary rounded-3xl decoration_wrap bg-center bg-cover bg-blend-multiply"
                style="background-image: url('{{ asset('assets/images/banner/page_banner_image.png') }}')">
                <div class="row align-items-center">
                    <div class="w-full md:w-5/12">
                        <div class="section_heading">
                            <h2 class="mb-0 heading_text">
                                Đăng ký tham gia
                            </h2>
                            <h3 class="text-base font-medium">
                                Điền thông tin, chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất
                            </h3>

                            <form action="{{ route('contact.store') }}" method="post"
                                  class="mt-8 grid grid-cols-2 gap-4 relative">
                                @csrf
                                <input type="text" class="col-span-1 border border-primary px-4 py-2 rounded-lg"
                                       placeholder="Họ tên" name="name">
                                <input type="text" class="col-span-1 border border-primary px-4 py-2 rounded-lg"
                                       placeholder="Số điện thoại" name="phone_number">
                                <input type="email" class="col-span-full border border-primary px-4 py-2 rounded-lg"
                                       placeholder="Email" name="email">
                                <textarea class="col-span-full border border-primary px-4 py-2 rounded-lg"
                                          placeholder="Lời nhắn" name="message"></textarea>
                                <button type="submit"
                                        class="uppercase px-10 py-2 bg-black text-alternative-darker rounded-lg font-bold absolute -bottom-14">
                                    Gửi form
                                </button>
                            </form>

                            @if(session()->has('message'))
                                <script>
                                    alert("{{ session()->get('message') }}")
                                </script>
                            @endif
                        </div>
                    </div>
                    <div class="hidden md:block md:w-7/12">
                        <svg width="294" height="261" viewBox="0 0 294 261" fill="none"
                             xmlns="http://www.w3.org/2000/svg" class="ml-auto block">
                            <path
                                d="M49 207C196.569 188.497 207.706 81.1818 158.052 74.7059C94.9741 66.479 111.647 169.855 173.83 157.043C240.282 143.351 260.298 69.3093 262 34"
                                stroke="#B67222" stroke-dasharray="10 10"/>
                            <g clip-path="url(#clip0_2512_2794)">
                                <path d="M0.737305 220.436L96.2633 175.733L33.3859 228.043L0.737305 220.436Z"
                                      fill="white" stroke="#E6BE8F" stroke-width="1.2" stroke-miterlimit="10"
                                      stroke-linejoin="round"/>
                                <path d="M41.8737 229.802L33.251 260.231L52.1425 236.444L41.8737 229.802Z"
                                      fill="#FFEF9E" stroke="#E6BE8F" stroke-width="1.2" stroke-miterlimit="10"
                                      stroke-linejoin="round"/>
                                <path d="M96.2628 175.733L41.873 229.802L77.703 252.99L96.2628 175.733Z" fill="white"
                                      stroke="#E6BE8F" stroke-width="1.2" stroke-miterlimit="10"
                                      stroke-linejoin="round"/>
                                <path d="M33.251 228.324V260.267L42.1563 230.192L95.7845 176.758L33.251 228.324Z"
                                      fill="#FEFFDD" stroke="#E6BE8F" stroke-width="1.2" stroke-miterlimit="10"
                                      stroke-linejoin="round"/>
                                <path d="M23.7314 218.433L33.951 212.731" stroke="#E6BE8F" stroke-width="0.5"
                                      stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M29.4668 219.459L33.5325 217.054" stroke="#E6BE8F" stroke-width="0.5"
                                      stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <g clip-path="url(#clip1_2512_2794)">
                                <path d="M226.517 31.6995L293.483 0.511108L249.404 37.0069L226.517 31.6995Z"
                                      fill="white" stroke="#E6BE8F" stroke-width="1.2" stroke-miterlimit="10"
                                      stroke-linejoin="round"/>
                                <path d="M255.354 38.2336L249.31 59.4632L262.553 42.868L255.354 38.2336Z" fill="#FFEF9E"
                                      stroke="#E6BE8F" stroke-width="1.2" stroke-miterlimit="10"
                                      stroke-linejoin="round"/>
                                <path d="M293.483 0.511108L255.354 38.2337L280.472 54.4114L293.483 0.511108Z"
                                      fill="white" stroke="#E6BE8F" stroke-width="1.2" stroke-miterlimit="10"
                                      stroke-linejoin="round"/>
                                <path d="M249.31 37.2029V59.4889L255.552 38.5064L293.147 1.22681L249.31 37.2029Z"
                                      fill="#FEFFDD" stroke="#E6BE8F" stroke-width="1.2" stroke-miterlimit="10"
                                      stroke-linejoin="round"/>
                                <path d="M242.636 30.3024L249.8 26.324" stroke="#E6BE8F" stroke-width="0.5"
                                      stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M246.657 31.018L249.507 29.3397" stroke="#E6BE8F" stroke-width="0.5"
                                      stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2512_2794">
                                    <rect width="97" height="86" fill="white" transform="translate(0 175)"/>
                                </clipPath>
                                <clipPath id="clip1_2512_2794">
                                    <rect width="68" height="60" fill="white" transform="translate(226)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
                <div class="deco_item shape_img_3" data-parallax='{"y" : 130, "smoothness": 6}'>
                    <img src="assets/images/shape/shape_img_3.png" alt="Collab – Online Learning Platform">
                </div>
                <div class="deco_item shape_img_4" data-parallax='{"y" : -130, "smoothness": 6}'>
                    <img src="assets/images/shape/shape_img_3.png" alt="Collab – Online Learning Platform">
                </div>
                <div class="deco_item shape_img_5" data-parallax='{"y" : 130, "smoothness": 6}'>
                    <img src="assets/images/shape/shape_img_3.png" alt="Collab – Online Learning Platform">
                </div>
            </div>
        </section>
        <!-- Call To Action Section - End
        ================================================== -->

        <!-- Testimonial Section - Start
        ================================================== -->
        <section class="pt-16 pb-48 bg-[#FDD561] mt-24 testimonial_section section_space_lg">
            <div class="container">
                <div class="section_heading">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col col-lg-6">
                            <h3 class="text-2xl !text-secondary">Cảm Nhận</h3>
                            <h2 class="mb-0 uppercase heading_text">
                                Học viên
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="max-lg:mt-24 row testimonial_carousel">
                    <div class="flex flex-nowrap col common_carousel_3col" data-cursor-text="Drag">
                        <div class="mr-4 rounded-lg border bg-white p-4 carousel_item border-primary">
                            <img src="https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/400389959_659294459707996_8034000912485917994_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFKM-jO9qpa6Yx1ZvN4h3FLbDJtLqeUa0NsMm0up5RrQwQUxLFfOJ_qk9VqA0f9EKssW7QqTDOZyXagPrvnXeG5&_nc_ohc=HFmp5BFC1c0AX9OjlRe&_nc_ht=scontent.fhan14-2.fna&oh=00_AfBzwp5eORRDrr2FnINu4hphFxRwzDm8ap8y1mIrYK22Nw&oe=6569D81A" alt="">
                        </div>
                        <div class="mr-4 rounded-lg border bg-white p-4 carousel_item border-primary">
                            <img src="https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/399929648_659294466374662_3511432874369090873_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFjz8MTY9UjHEBdWAbTL1sOyAJpHj7Im8PIAmkePsibw9rp03MSypBlCe_ZrD-al0DT9pTmAlzl0XszjVLC715d&_nc_ohc=yxMzbuLlm6wAX9CJPz3&_nc_ht=scontent.fhan14-2.fna&oh=00_AfAKUncaPWgluiz4vCm_0hZv3W5uVV-PSLNMOUfmOngoDA&oe=656972C6" alt="">
                        </div>
                        <div class="mr-4 rounded-lg border bg-white p-4 carousel_item border-primary">
                            <img src="https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/399907733_659294436374665_3331235845276078063_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFOGX2lniHYmkKoTJ27LNbAtAzjKjJYcta0DOMqMlhy1uXi0E_sWaTIP8utyYkGCG9M-tdFI9Ke1klGIAAe3qIy&_nc_ohc=rEyvImUWjbYAX8IQ5bS&_nc_oc=AQnYdZFb_ehIqxfXLTdwl7fQ4AhdMsgQFpF0CAtr0RPONvzzlaryWCUTJacDkt8i8r0&_nc_ht=scontent.fhan14-1.fna&oh=00_AfDZYOUb5LSdJVEBV7r-scY5mcv32lke4LgmiMZU89AJ0A&oe=656A88DD" alt="">
                        </div>
                        <div class="mr-4 rounded-lg border bg-white p-4 carousel_item border-primary">
                            <img src="https://scontent.fhan14-3.fna.fbcdn.net/v/t39.30808-6/400334248_659294463041329_1064569239083497676_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFF5P2QBaGBpn3gIVjXL6IM7BoIz1Rum3jsGgjPVG6beDAGARVYN6WF8RP834hrVYawM54Y6pKPIq35IF9fIJs1&_nc_ohc=Hban43rmBVoAX9xo68f&_nc_ht=scontent.fhan14-3.fna&oh=00_AfCv7ADZC1pVqZSO6muHNmIA9Q1p8UFxKXLjpIag9P9bEA&oe=656AF847" alt="">
                        </div>
                    </div>
                </div>

                <div class="mt-16 row">
                    <lite-youtube class="mx-auto max-w-2xl rounded-2xl" videoid="TKc90DXpmQc"
                                  playlabel="HiKorean"></lite-youtube>
                </div>
            </div>
        </section>
        <!-- Testimonial Section - End
        ================================================== -->

        <!-- Counter Section - Start
        ================================================== -->
        <section class="container -mt-28 rounded-2xl bg-white shadow-2xl">
            <div class="flex max-lg:flex-col flex-nowrap items-center">
                <div class="col col-lg-3 col-md-6">
                    <div class="border-0 p-4 counter_item">
                        <div
                            class="max-lg:mx-auto w-20 h-20 rounded-full bg-[#FDD561] flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                      d="M5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V3q0-.425.288-.713T7 2q.425 0 .713.288T8 3v1h8V3q0-.425.288-.713T17 2q.425 0 .713.288T18 3v1h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10ZM5 8h14V6H5v2Zm0 0V6v2Zm7 6q-.425 0-.713-.288T11 13q0-.425.288-.713T12 12q.425 0 .713.288T13 13q0 .425-.288.713T12 14Zm-4 0q-.425 0-.713-.288T7 13q0-.425.288-.713T8 12q.425 0 .713.288T9 13q0 .425-.288.713T8 14Zm8 0q-.425 0-.713-.288T15 13q0-.425.288-.713T16 12q.425 0 .713.288T17 13q0 .425-.288.713T16 14Zm-4 4q-.425 0-.713-.288T11 17q0-.425.288-.713T12 16q.425 0 .713.288T13 17q0 .425-.288.713T12 18Zm-4 0q-.425 0-.713-.288T7 17q0-.425.288-.713T8 16q.425 0 .713.288T9 17q0 .425-.288.713T8 18Zm8 0q-.425 0-.713-.288T15 17q0-.425.288-.713T16 16q.425 0 .713.288T17 17q0 .425-.288.713T16 18Z"/>
                            </svg>
                        </div>
                        <h3 class="whitespace-nowrap max-lg:text-center counter_value">
                            <span class="text-4xl counter_value_text">5</span><span class="text-4xl">&nbsp;năm</span>
                        </h3>
                        <p class="mb-0 line-clamp-2 min-h-[3rem]">
                            Hoạt động & Phát triển
                        </p>
                    </div>
                </div>
                <div class="max-lg:hidden h-20 bg-gray-300 w-0.5"></div>
                <div class="col col-lg-3 col-md-6">
                    <div class="border-0 p-4 counter_item">
                        <div
                            class="max-lg:mx-auto w-20 h-20 rounded-full bg-[#FDD561] flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                      d="M5.85 17.1q1.275-.975 2.85-1.538T12 15q1.725 0 3.3.563t2.85 1.537q.875-1.025 1.363-2.325T20 12q0-3.325-2.337-5.663T12 4Q8.675 4 6.337 6.337T4 12q0 1.475.488 2.775T5.85 17.1ZM12 13q-1.475 0-2.488-1.012T8.5 9.5q0-1.475 1.012-2.488T12 6q1.475 0 2.488 1.012T15.5 9.5q0 1.475-1.012 2.488T12 13Zm0 9q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22Zm0-2q1.325 0 2.5-.388t2.15-1.112q-.975-.725-2.15-1.113T12 17q-1.325 0-2.5.388T7.35 18.5q.975.725 2.15 1.113T12 20Zm0-9q.65 0 1.075-.425T13.5 9.5q0-.65-.425-1.075T12 8q-.65 0-1.075.425T10.5 9.5q0 .65.425 1.075T12 11Zm0-1.5Zm0 9Z"/>
                            </svg>
                        </div>
                        <h3 class="whitespace-nowrap max-lg:text-center counter_value">
                            <span class="text-4xl counter_value_text">125000</span><span class="text-4xl">+</span>
                        </h3>
                        <p class="mb-0 line-clamp-2 min-h-[3rem]">
                            Học viên theo học
                        </p>
                    </div>
                </div>
                <div class="max-lg:hidden h-20 bg-gray-300 w-0.5"></div>
                <div class="col col-lg-3 col-md-6">
                    <div class="border-0 p-4 counter_item">
                        <div
                            class="max-lg:mx-auto w-20 h-20 rounded-full bg-[#FDD561] flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                      d="M4 11.333L0 9l12-7l12 7v8.5h-2v-7.333l-2 1.166v6.678l-.223.275A9.983 9.983 0 0 1 12 22a9.983 9.983 0 0 1-7.777-3.714L4 18.011v-6.678ZM6 12.5v4.792A7.979 7.979 0 0 0 12 20a7.978 7.978 0 0 0 6-2.708V12.5L12 16l-6-3.5ZM3.97 9L12 13.685L20.03 9L12 4.315L3.97 9Z"/>
                            </svg>
                        </div>
                        <h3 class="whitespace-nowrap max-lg:text-center counter_value">
                            <span class="text-4xl counter_value_text">88000</span>
                        </h3>
                        <p class="mb-0 line-clamp-2 min-h-[3rem]">
                            Học viên đỗ Topik trên 4.0
                        </p>
                    </div>
                </div>
                <div class="max-lg:hidden h-20 bg-gray-300 w-0.5"></div>
                <div class="col col-lg-3 col-md-6">
                    <div class="border-0 p-4 counter_item">
                        <div
                            class="max-lg:mx-auto w-20 h-20 rounded-full bg-[#FDD561] flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                      d="M12 20.325q-.35 0-.713-.125t-.637-.4l-1.725-1.575q-2.65-2.425-4.788-4.813T2 8.15Q2 5.8 3.575 4.225T7.5 2.65q1.325 0 2.5.562t2 1.538q.825-.975 2-1.538t2.5-.562q2.35 0 3.925 1.575T22 8.15q0 2.875-2.125 5.275T15.05 18.25l-1.7 1.55q-.275.275-.637.4t-.713.125ZM11.05 6.75q-.725-1.025-1.55-1.562t-2-.538q-1.5 0-2.5 1t-1 2.5q0 1.3.925 2.763t2.213 2.837q1.287 1.375 2.65 2.575T12 18.3q.85-.775 2.213-1.975t2.65-2.575q1.287-1.375 2.212-2.837T20 8.15q0-1.5-1-2.5t-2.5-1q-1.175 0-2 .537T12.95 6.75q-.175.25-.425.375T12 7.25q-.275 0-.525-.125t-.425-.375Zm.95 4.725Z"/>
                            </svg>
                        </div>
                        <h3 class="whitespace-nowrap max-lg:text-center counter_value">
                            <span class="text-4xl counter_value_text">75</span><span class="text-4xl">%</span>
                        </h3>
                        <p class="mb-0 line-clamp-2 min-h-[3rem]">
                            Học viên hài lòng
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Counter Section - End
        ================================================== -->

        <!-- Blog Section - Start
        ================================================== -->
        <section class="py-20 brands_section section_space_lg">
            <div class="container">
                <div class="section_heading">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col col-lg-6">
                            <h3 class="text-2xl !text-secondary">Blog</h3>
                            <h2 class="mb-0 uppercase heading_text">
                                Tin tức nổi bật
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="grid gap-16 lg:grid-cols-2">
                    <div class="col-span-1 flex aspect-square items-end rounded-lg bg-cover bg-center bg-no-repeat p-4 border"
                         style="background-image: url('{{ Storage::url($this->news->first()->image) }}')">
                        <div class="bg-[#FDD561] p-4 rounded-lg">
                            <a class="text-xl font-bold text-primary" href="{{ route('news.show', ['id' => $this->news->first()->id]) }}">
                                {{ $this->news->first()->title }}
                            </a>
                            <span>{{ $this->news->first()->created_at->format('d/m/Y') }}</span>
                        </div>
                    </div>
                    <div class="col-span-1 space-y-8">
                        @foreach($this->news->skip(1) as $new)
                            <div class="flex items-center gap-4 md:gap-8">
                                <img class="w-1/3 rounded-lg" src="{{ Storage::url($new->image) }}"
                                     alt="">
                                <div class="flex flex-col">
                                    <a class="md:text-xl font-bold line-clamp-2 md:line-clamp-3 text-primary">
                                        {{ $new->title }}
                                    </a>
                                    <span>{{ $new->created_at->format('d/m/Y') }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Section - End
        ================================================== -->

        <!-- Brands Section - Start
        ================================================== -->
        <section class="py-20 brands_section section_space_lg bg-right bg-cover"
                 style="background-image: url('{{ asset('assets/images/banner/img.png') }}')">
            <div class="container">
                <div class="section_heading">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col col-lg-6">
                            <h3 class="text-2xl !text-[#B67222]">Doanh Nghiệp</h3>
                            <h2 class="mb-0 uppercase heading_text">
                                HỢP TÁC ĐÀO TẠO
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="bg-white px-2 md:px-16 py-4 rounded-lg shadow-xl">
                    <img src="{{ asset('assets/images/brands/img.png') }}" alt="">
                </div>
            </div>
        </section>
        <!-- Brands Section - End
        ================================================== -->

        <!-- Brands Section - Start
        ================================================== -->
        <section class="py-20 brands_section section_space_lg">
            <div class="container">
                <div class="section_heading">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col col-lg-6">
                            <h3 class="text-2xl !text-secondary">Cơ Sở</h3>
                            <h2 class="mb-0 uppercase heading_text">
                                Vật chất
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 pswp-gallery pswp-gallery--single-column lg:grid-cols-4"
                     id="lightgallery">
                    <a href="{{ asset('assets/images/CSVC/3f360c6a3808737270157d827656df078830a572.jpg') }}"
                       {{--data-lg-size="1600-2400"--}}
                       target="_blank"
                       class="col-span-1 rounded-lg image"
                    >
                        <img
                            src="{{ asset('assets/images/CSVC/3f360c6a3808737270157d827656df078830a572.jpg') }}"
                            alt=""/>
                    </a>
                    <a href="{{ asset('assets/images/CSVC/446c3bf83d159ebd4934d35af52125fec1210dc0.jpg') }}"
                       {{--data-lg-size="1600-2400"--}}
                       target="_blank"
                       class="col-span-1 rounded-lg image"
                    >
                        <img
                            src="{{ asset('assets/images/CSVC/446c3bf83d159ebd4934d35af52125fec1210dc0.jpg') }}"
                            alt=""/>
                    </a>
                    <a href="{{ asset('assets/images/CSVC/40888eca2804b32856ddc91ce8d6452f5206942c.jpg') }}"
                       {{--data-lg-size="1600-2400"--}}
                       target="_blank"
                       class="col-span-1 rounded-lg image"
                    >
                        <img
                            src="{{ asset('assets/images/CSVC/40888eca2804b32856ddc91ce8d6452f5206942c.jpg') }}"
                            alt=""/>
                    </a>
                    <a href="{{ asset('assets/images/CSVC/đẹp.jpg') }}"
                       {{--data-lg-size="1600-2400"--}}
                       target="_blank"
                       class="col-span-1 rounded-lg image"
                    >
                        <img
                            src="{{ asset('assets/images/CSVC/đẹp.jpg') }}"
                            alt=""/>
                    </a>
                    <a href="{{ asset('assets/images/CSVC/80ca7cb658a81bc6ff6e06643bd639cbd7cf7d09.jpg') }}"
                       {{--data-lg-size="1600-2400"--}}
                       target="_blank"
                       class="col-span-1 rounded-lg image"
                    >
                        <img
                            src="{{ asset('assets/images/CSVC/80ca7cb658a81bc6ff6e06643bd639cbd7cf7d09.jpg') }}"
                            alt=""/>
                    </a>
                    <a href="{{ asset('assets/images/CSVC/473eb183aa75916deabff3f12798dc649a919825.jpg') }}"
                       {{--data-lg-size="1600-2400"--}}
                       target="_blank"
                       class="col-span-1 rounded-lg image"
                    >
                        <img
                            src="{{ asset('assets/images/CSVC/473eb183aa75916deabff3f12798dc649a919825.jpg') }}"
                            alt=""/>
                    </a>
                    <a href="{{ asset('assets/images/CSVC/2023-06-22 14.55.37.jpg') }}"
                       {{--data-lg-size="1600-2400"--}}
                       target="_blank"
                       class="col-span-1 rounded-lg image"
                    >
                        <img
                            src="{{ asset('assets/images/CSVC/2023-06-22 14.55.37.jpg') }}"
                            alt=""/>
                    </a>
                </div>
            </div>
        </section>
        <!-- Brands Section - End
        ================================================== -->

        <div class="hystmodal z-[9999999999999]" id="myModal" aria-hidden="true">
            <div class="hystmodal__wrap">
                <div class="hystmodal__window max-w-xs  lg:max-w-7xl rounded-lg" role="dialog" aria-modal="true">
                    <button data-hystclose class="hystmodal__close">Закрыть</button>
                    <section class="pricing_section p-8 scale-50">
                        <div class="container decoration_wrap">
                            <div class="section_heading text-center">
                                <h1 class="heading_text mb-0 text-sm lg:text-2xl">
                                    Ưu đãi nổi bật
                                </h1>
                            </div>

                            <div class="pricing_cards_wrapper row align-items-center">
                                <div class="col">
                                    <div class="pricing_card text-center bg_dark tilt">
                                        <div class="card_badge">Nổi bật</div>
                                        <h3 class="card_heading text-lg md:text-2xl">Đăng ký 4 khóa học</h3>
                                        <div class="pricing_wrap">
                                            <span class="price_value text-sm md:text-2xl">Tặng 2.000.000</span>
                                        </div>
                                        <div class="btn_wrap pb-0">
                                            <a class="btn btn_primary" href="{{ route('sales') }}">
                                                <span>
                                                    <small class="max-md:text-xs">Đăng ký ngay</small>
                                                    <small class="max-md:text-xs">Đăng ký ngay</small>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="deco_item shape_img_1" data-parallax='{"y" : 130, "smoothness": 6}'>
                                <img src="assets/images/shape/shape_img_4.png" alt="Collab – Online Learning Platform">
                            </div>
                            <div class="deco_item shape_img_2" data-parallax='{"y" : -130, "smoothness": 6}'>
                                <img src="assets/images/shape/shape_img_5.png" alt="Collab – Online Learning Platform">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <div id="trigger-popup" data-hystmodal="#myModal"></div>
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const myModal = new HystModal({
                    linkAttributeName: "data-hystmodal"
                });
                myModal.open();

                let isShow = false;
                let firstPos = window.scrollY;
                window.addEventListener("scroll", (e) => {
                    const currentPos = window.scrollY;
                    if (Math.abs(currentPos - firstPos) > 500) {
                        if (!isShow) {
                            isShow = true;
                            document.querySelector("#trigger-popup").click();
                        }
                    }
                });
            });
        </script>
    </main>
    @endvolt
</x-layouts.app>

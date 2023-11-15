<?php

\Laravel\Folio\name('home');

\Artesaos\SEOTools\Facades\SEOMeta::setTitle('Hi Korean');
\Artesaos\SEOTools\Facades\SEOMeta::setDescription('TRUNG TÂM TIẾNG HÀN HI KOREAN');
\Artesaos\SEOTools\Facades\SEOMeta::setCanonical(url()->current());

\Artesaos\SEOTools\Facades\OpenGraph::setDescription('TRUNG TÂM TIẾNG HÀN HI KOREAN');
\Artesaos\SEOTools\Facades\OpenGraph::setTitle('Hi Korean');
\Artesaos\SEOTools\Facades\OpenGraph::setUrl(url()->current());
\Artesaos\SEOTools\Facades\OpenGraph::addProperty('type', 'articles');
\Artesaos\SEOTools\Facades\OpenGraph::addImage(asset('assets/images/banner/banner.png'));

\Artesaos\SEOTools\Facades\JsonLd::setTitle('Hi Korean');
\Artesaos\SEOTools\Facades\JsonLd::setDescription('TRUNG TÂM TIẾNG HÀN HI KOREAN');
\Artesaos\SEOTools\Facades\JsonLd::addImage(asset('assets/images/banner/banner.png'));

$data    = \Livewire\Volt\computed(fn() => \Statamic\Facades\GlobalSet::findByHandle('home')?->inCurrentSite()?->data());
$aboutUs = \Livewire\Volt\computed(fn() => \Statamic\Facades\GlobalSet::findByHandle('ve_chung_toi')?->inCurrentSite()?->data());
$courses = \Livewire\Volt\computed(fn() => \Statamic\Facades\Entry::whereCollection('khoa_hoc'));

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
        <div class="container mx-auto relative -mt-32 lg:-mt-64 max-md:pr-10">
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
                                             src="https://placehold.co/160x110" alt="">
                                    </div>
                                    <div class="pr-4">
                                        <img class="rounded border border-primary"
                                             src="https://placehold.co/160x110" alt="">
                                    </div>
                                    <div class="pr-4">
                                        <img class="rounded border border-primary"
                                             src="https://placehold.co/160x110" alt="">
                                    </div>
                                    <div class="pr-4">
                                        <img class="rounded border border-primary"
                                             src="https://placehold.co/160x110" alt="">
                                    </div>
                                    <div class="pr-4">
                                        <img class="rounded border border-primary"
                                             src="https://placehold.co/160x110" alt="">
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
                                @foreach($this->courses as $course)
                                    <div class="overflow-visible col col-lg-4 carousel_item">
                                        <div class="overflow-visible course_card @if($loop->odd) mt-8 @endif">
                                            <div class="item_image">
                                                <a class="border !border-gray-300"
                                                   href="{{ route('courses.show', ['id' => 'offline']) }}"
                                                   data-cursor-text="View">
                                                    <img
                                                        src="{{ $course->hinh_anh[0]->url }}"
                                                        alt="Hi Korean">
                                                </a>
                                            </div>
                                            <div class="item_content">
                                                <h3 class="py-0 item_title">
                                                    <a href="{{ route('courses.show', ['id' => 'offline']) }}"
                                                       class="flex items-baseline gap-2">
                                                        <div class="w-3 h-3 rounded-full !bg-secondary shrink-0"></div>
                                                        <div class="truncate">{{ $course->title }}</div>
                                                    </a>
                                                </h3>
                                                <p class="h-28 pt-2 line-clamp-4">
                                                    {{ $course->mo_ta }}
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-start gap-1 font-bold text-gray-500">
                                                        <svg class="h-5 w-5" viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                  d="m8.85 17.825l3.15-1.9l3.15 1.925l-.825-3.6l2.775-2.4l-3.65-.325l-1.45-3.4l-1.45 3.375l-3.65.325l2.775 2.425l-.825 3.575Zm3.15.45l-4.15 2.5q-.275.175-.575.15t-.525-.2q-.225-.175-.35-.438t-.05-.587l1.1-4.725L3.775 11.8q-.25-.225-.312-.513t.037-.562q.1-.275.3-.45t.55-.225l4.85-.425l1.875-4.45q.125-.3.388-.45t.537-.15q.275 0 .537.15t.388.45l1.875 4.45l4.85.425q.35.05.55.225t.3.45q.1.275.038.563t-.313.512l-3.675 3.175l1.1 4.725q.075.325-.05.588t-.35.437q-.225.175-.525.2t-.575-.15l-4.15-2.5Zm0-5.025Z"/>
                                                        </svg>
                                                        {{ round($course->danh_gia / 10, 1) }}
                                                        -
                                                        {{ $course->so_buoi }} buổi
                                                    </div>

                                                    <a class="px-2 py-2 btn btn_primary"
                                                       href="{{ route('courses.show', ['id' => 'offline']) }}">
                                                        <span>
                                                            <small class="py-0">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                                     height="32" viewBox="0 0 24 24">
                                                                    <path fill="currentColor"
                                                                          d="M16.15 13H5q-.425 0-.713-.288T4 12q0-.425.288-.713T5 11h11.15L13.3 8.15q-.3-.3-.288-.7t.288-.7q.3-.3.713-.313t.712.288L19.3 11.3q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.575 4.575q-.3.3-.712.288t-.713-.313q-.275-.3-.288-.7t.288-.7L16.15 13Z"/>
                                                                </svg>
                                                            </small>
                                                            <small class="py-0">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                                     height="32" viewBox="0 0 24 24">
                                                                    <path fill="currentColor"
                                                                          d="M16.15 13H5q-.425 0-.713-.288T4 12q0-.425.288-.713T5 11h11.15L13.3 8.15q-.3-.3-.288-.7t.288-.7q.3-.3.713-.313t.712.288L19.3 11.3q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.575 4.575q-.3.3-.712.288t-.713-.313q-.275-.3-.288-.7t.288-.7L16.15 13Z"/>
                                                                </svg>
                                                            </small>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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
                                {{ $this->aboutUs['gioi_thieu'] }}
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
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto at, commodi cum
                            distinctio dolor dolores eligendi eveniet impedit in ipsam maiores maxime nemo officia
                            tempora tempore ullam vero, voluptas, voluptatibus?
                            </p>
                        </div>
                    </div>
                    <div class="col col-lg-7 lg:pl-8">
                        <img class="aspect-square w-full rounded border object-cover border-primary"
                             src="http://hikorean.edu.vn/wp-content/uploads/2023/08/649543a7cc3b9.png" alt="">
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
                               href="{{ route('about_us') }}">
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
                                            <img src="https://placehold.co/320x320"
                                                 alt="Hi Korean">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <h3 class="py-0 item_title">
                                            <a class="flex items-baseline gap-2">
                                                <div
                                                    class="w-3 h-3 rounded-full !bg-secondary shrink-0"></div>
                                                <div class="truncate">Cô Thùy Dương</div>
                                            </a>
                                        </h3>
                                        <ul class="mb-0 pt-4">
                                            <li>Thạc sĩ giỏi Đại học Nữ sinh Ewha</li>
                                            <li>Tốt nghiệp loại giỏi ĐH Ngoại ngữ - ĐHQGHN</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="overflow-visible col col-lg-4 carousel_item">
                                <div
                                    class="rounded-lg rounded-br-3xl border course_card border-primary hover:bg-alternative-darker hover:shadow-none">
                                    <div class="item_image">
                                        <a class="border !border-gray-300">
                                            <img src="https://placehold.co/320x320"
                                                 alt="Hi Korean">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <h3 class="py-0 item_title">
                                            <a class="flex items-baseline gap-2">
                                                <div
                                                    class="w-3 h-3 rounded-full !bg-secondary shrink-0"></div>
                                                <div class="truncate">Cô Thùy Dương</div>
                                            </a>
                                        </h3>
                                        <ul class="mb-0 pt-4">
                                            <li>Thạc sĩ giỏi Đại học Nữ sinh Ewha</li>
                                            <li>Tốt nghiệp loại giỏi ĐH Ngoại ngữ - ĐHQGHN</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="overflow-visible col col-lg-4 carousel_item">
                                <div
                                    class="rounded-lg rounded-br-3xl border course_card border-primary hover:bg-alternative-darker hover:shadow-none">
                                    <div class="item_image">
                                        <a class="border !border-gray-300">
                                            <img src="https://placehold.co/320x320"
                                                 alt="Hi Korean">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <h3 class="py-0 item_title">
                                            <a class="flex items-baseline gap-2">
                                                <div
                                                    class="w-3 h-3 rounded-full !bg-secondary shrink-0"></div>
                                                <div class="truncate">Cô Thùy Dương</div>
                                            </a>
                                        </h3>
                                        <ul class="mb-0 pt-4">
                                            <li>Thạc sĩ giỏi Đại học Nữ sinh Ewha</li>
                                            <li>Tốt nghiệp loại giỏi ĐH Ngoại ngữ - ĐHQGHN</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="overflow-visible col col-lg-4 carousel_item">
                                <div
                                    class="rounded-lg rounded-br-3xl border course_card border-primary hover:bg-alternative-darker hover:shadow-none">
                                    <div class="item_image">
                                        <a class="border !border-gray-300">
                                            <img src="https://placehold.co/320x320"
                                                 alt="Hi Korean">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <h3 class="py-0 item_title">
                                            <a class="flex items-baseline gap-2">
                                                <div
                                                    class="w-3 h-3 rounded-full !bg-secondary shrink-0"></div>
                                                <div class="truncate">Cô Thùy Dương</div>
                                            </a>
                                        </h3>
                                        <ul class="mb-0 pt-4">
                                            <li>Thạc sĩ giỏi Đại học Nữ sinh Ewha</li>
                                            <li>Tốt nghiệp loại giỏi ĐH Ngoại ngữ - ĐHQGHN</li>
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
                                        <b class="day">26</b>
                                        <span class="month">Tháng 12<br>2023</span>
                                    </div>
                                    <div class="column">
                                        <h4 class="event_title">Lớp HKSC-24</h4>
                                        <span class="event_name">
                                            <strong>Giảng viên:</strong> <small>Cô Thùy Dương</small>
                                            <strong class="block text-sm">Thứ 3 & Thứ 5 (7h30’-9h00)</strong>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="column">
                                        <b class="day">26</b>
                                        <span class="month">Tháng 12<br>2023</span>
                                    </div>
                                    <div class="column">
                                        <h4 class="event_title">Lớp HKSC-24</h4>
                                        <span class="event_name">
                                            <strong>Giảng viên:</strong> <small>Cô Thùy Dương</small>
                                            <strong class="block text-sm">Thứ 3 & Thứ 5 (7h30’-9h00)</strong>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="column">
                                        <b class="day">26</b>
                                        <span class="month">Tháng 12<br>2023</span>
                                    </div>
                                    <div class="column">
                                        <h4 class="event_title">Lớp HKSC-24</h4>
                                        <span class="event_name">
                                            <strong>Giảng viên:</strong> <small>Cô Thùy Dương</small>
                                            <strong class="block text-sm">Thứ 3 & Thứ 5 (7h30’-9h00)</strong>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="column">
                                        <b class="day">26</b>
                                        <span class="month">Tháng 12<br>2023</span>
                                    </div>
                                    <div class="column">
                                        <h4 class="event_title">Lớp HKSC-24</h4>
                                        <span class="event_name">
                                            <strong>Giảng viên:</strong> <small>Cô Thùy Dương</small>
                                            <strong class="block text-sm">Thứ 3 & Thứ 5 (7h30’-9h00)</strong>
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

                            <form action="#" class="relative mt-8 grid grid-cols-2 gap-4">
                                <input type="text" class="col-span-1 rounded-lg border px-4 py-2 border-primary"
                                       placeholder="Họ tên">
                                <input type="text" class="col-span-1 rounded-lg border px-4 py-2 border-primary"
                                       placeholder="Số điện thoại">
                                <input type="email" class="col-span-full rounded-lg border px-4 py-2 border-primary"
                                       placeholder="Email">
                                <textarea class="col-span-full rounded-lg border px-4 py-2 border-primary"
                                          placeholder="Lời nhắn"></textarea>
                                <button type="submit"
                                        class="absolute -bottom-14 rounded-lg bg-black px-10 py-2 font-bold uppercase text-alternative-darker">
                                    Gửi form
                                </button>
                            </form>
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
                            <div class="flex items-center gap-4">
                                <img class="h-14 w-14 rounded-full"
                                     src="https://www.gravatar.com/avatar/467aa3e023c15104d8dd3b5063d7f2ea?s=64&d=identicon&r=PG"
                                     alt="">
                                <div>
                                    <h3 class="mb-0 text-lg">Nguyen Thi Mai</h3>
                                    <span class="text-sm text-secondary">Khóa sơ cấp K12</span>
                                </div>
                            </div>
                            <p class="mt-4 text-justify">
                                Mình được luyện phản xạ mỗi buổi học, nên đối với mình chương trình học thật sự phù hợp
                                và mình tự tin giao tiếp dù chưa giỏi. Mình học lớp thầy Tuấn.
                            </p>
                        </div>
                        <div class="mr-4 rounded-lg border bg-white p-4 carousel_item border-primary">
                            <div class="flex items-center gap-4">
                                <img class="h-14 w-14 rounded-full"
                                     src="https://www.gravatar.com/avatar/467aa3e023c15104d8dd3b5063d7f2ea?s=64&d=identicon&r=PG"
                                     alt="">
                                <div>
                                    <h3 class="mb-0 text-lg">Nguyen Thi Mai</h3>
                                    <span class="text-sm text-secondary">Khóa sơ cấp K12</span>
                                </div>
                            </div>
                            <p class="mt-4 text-justify">
                                Mình được luyện phản xạ mỗi buổi học, nên đối với mình chương trình học thật sự phù hợp
                                và mình tự tin giao tiếp dù chưa giỏi. Mình học lớp thầy Tuấn.
                            </p>
                        </div>
                        <div class="mr-4 rounded-lg border bg-white p-4 carousel_item border-primary">
                            <div class="flex items-center gap-4">
                                <img class="h-14 w-14 rounded-full"
                                     src="https://www.gravatar.com/avatar/467aa3e023c15104d8dd3b5063d7f2ea?s=64&d=identicon&r=PG"
                                     alt="">
                                <div>
                                    <h3 class="mb-0 text-lg">Nguyen Thi Mai</h3>
                                    <span class="text-sm text-secondary">Khóa sơ cấp K12</span>
                                </div>
                            </div>
                            <p class="mt-4 text-justify">
                                Mình được luyện phản xạ mỗi buổi học, nên đối với mình chương trình học thật sự phù hợp
                                và mình tự tin giao tiếp dù chưa giỏi. Mình học lớp thầy Tuấn.
                            </p>
                        </div>
                        <div class="mr-4 rounded-lg border bg-white p-4 carousel_item border-primary">
                            <div class="flex items-center gap-4">
                                <img class="h-14 w-14 rounded-full"
                                     src="https://www.gravatar.com/avatar/467aa3e023c15104d8dd3b5063d7f2ea?s=64&d=identicon&r=PG"
                                     alt="">
                                <div>
                                    <h3 class="mb-0 text-lg">Nguyen Thi Mai</h3>
                                    <span class="text-sm text-secondary">Khóa sơ cấp K12</span>
                                </div>
                            </div>
                            <p class="mt-4 text-justify">
                                Mình được luyện phản xạ mỗi buổi học, nên đối với mình chương trình học thật sự phù hợp
                                và mình tự tin giao tiếp dù chưa giỏi. Mình học lớp thầy Tuấn.
                            </p>
                        </div>
                        <div class="mr-4 rounded-lg border bg-white p-4 carousel_item border-primary">
                            <div class="flex items-center gap-4">
                                <img class="h-14 w-14 rounded-full"
                                     src="https://www.gravatar.com/avatar/467aa3e023c15104d8dd3b5063d7f2ea?s=64&d=identicon&r=PG"
                                     alt="">
                                <div>
                                    <h3 class="mb-0 text-lg">Nguyen Thi Mai</h3>
                                    <span class="text-sm text-secondary">Khóa sơ cấp K12</span>
                                </div>
                            </div>
                            <p class="mt-4 text-justify">
                                Mình được luyện phản xạ mỗi buổi học, nên đối với mình chương trình học thật sự phù hợp
                                và mình tự tin giao tiếp dù chưa giỏi. Mình học lớp thầy Tuấn.
                            </p>
                        </div>
                        <div class="mr-4 rounded-lg border bg-white p-4 carousel_item border-primary">
                            <div class="flex items-center gap-4">
                                <img class="h-14 w-14 rounded-full"
                                     src="https://www.gravatar.com/avatar/467aa3e023c15104d8dd3b5063d7f2ea?s=64&d=identicon&r=PG"
                                     alt="">
                                <div>
                                    <h3 class="mb-0 text-lg">Nguyen Thi Mai</h3>
                                    <span class="text-sm text-secondary">Khóa sơ cấp K12</span>
                                </div>
                            </div>
                            <p class="mt-4 text-justify">
                                Mình được luyện phản xạ mỗi buổi học, nên đối với mình chương trình học thật sự phù hợp
                                và mình tự tin giao tiếp dù chưa giỏi. Mình học lớp thầy Tuấn.
                            </p>
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
                    <div class="col-span-1 flex aspect-square items-end rounded-lg bg-cover bg-center bg-no-repeat p-4"
                         style="background-image: url('{{ asset('assets/images/blog/Rectangle 73.png') }}')">
                        <div class="bg-[#FDD561] p-4 rounded-lg">
                            <a class="text-xl font-bold text-primary">
                                [2023] Lộ trình và Điều kiện du học Hàn Quốc thay đổi gì?
                            </a>
                            <span>12.02.2022</span>
                        </div>
                    </div>
                    <div class="col-span-1 space-y-8">
                        <div class="flex items-center gap-4 md:gap-8">
                            <img class="w-1/3 rounded-lg" src="{{ asset('assets/images/blog/Rectangle 73.png') }}"
                                 alt="">
                            <div class="flex flex-col">
                                <a class="md:text-xl font-bold line-clamp-2 md:line-clamp-3 text-primary">
                                    [2023] Lộ trình và Điều kiện du học Hàn Quốc thay đổi gì?
                                </a>
                                <span>12.02.2022</span>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 md:gap-8">
                            <img class="w-1/3 rounded-lg" src="{{ asset('assets/images/blog/Rectangle 73.png') }}"
                                 alt="">
                            <div class="flex flex-col">
                                <a class="md:text-xl font-bold line-clamp-2 md:line-clamp-3 text-primary">
                                    [2023] Lộ trình và Điều kiện du học Hàn Quốc thay đổi gì?
                                </a>
                                <span>12.02.2022</span>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 md:gap-8">
                            <img class="w-1/3 rounded-lg" src="{{ asset('assets/images/blog/Rectangle 73.png') }}"
                                 alt="">
                            <div class="flex flex-col">
                                <a class="md:text-xl font-bold line-clamp-2 md:line-clamp-3 text-primary">
                                    [2023] Lộ trình và Điều kiện du học Hàn Quốc thay đổi gì?
                                </a>
                                <span>12.02.2022</span>
                            </div>
                        </div>
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
                    <a href="https://plus.unsplash.com/premium_photo-1696879454010-6aed21c32fc5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80"
                       {{--data-lg-size="1600-2400"--}}
                       target="_blank"
                       class="col-span-1 rounded-lg image"
                    >
                        <img
                            src="https://plus.unsplash.com/premium_photo-1696879454010-6aed21c32fc5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80"
                            alt=""/>
                    </a>
                    <a href="https://plus.unsplash.com/premium_photo-1696879454010-6aed21c32fc5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80"
                       {{--data-lg-size="1600-2400"--}}
                       target="_blank"
                       class="col-span-1 rounded-lg image"
                    >
                        <img
                            src="https://plus.unsplash.com/premium_photo-1696879454010-6aed21c32fc5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80"
                            alt=""/>
                    </a>
                    <a href="https://plus.unsplash.com/premium_photo-1696879454010-6aed21c32fc5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80"
                       {{--data-lg-size="1600-2400"--}}
                       target="_blank"
                       class="col-span-1 rounded-lg image"
                    >
                        <img
                            src="https://plus.unsplash.com/premium_photo-1696879454010-6aed21c32fc5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80"
                            alt=""/>
                    </a>
                    <a href="https://plus.unsplash.com/premium_photo-1696879454010-6aed21c32fc5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80"
                       {{--data-lg-size="1600-2400"--}}
                       target="_blank"
                       class="col-span-1 rounded-lg image"
                    >
                        <img
                            src="https://plus.unsplash.com/premium_photo-1696879454010-6aed21c32fc5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80"
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
                                        <div class="card_badge">recommended</div>
                                        <h3 class="card_heading text-lg md:text-2xl">Luyện thi TOPIK</h3>
                                        <div class="pricing_wrap">
                                            <span class="price_value text-sm md:text-2xl">1.500.000</span>
                                            <small class="d-block text-decoration-line-through text-sm">3.000.000đ</small>
                                        </div>
                                        <div class="btn_wrap pb-0">
                                            <a class="btn btn_primary" href="#!">
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
                    linkAttributeName: "data-hystmodal",
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

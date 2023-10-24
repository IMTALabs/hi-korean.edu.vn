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
@endpush

@push('scripts')
    <script type="module">
        import lightGallery from "https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/+esm";
        import lgThumbnail from "https://unpkg.com/lightgallery@2.7.2/plugins/zoom/lg-zoom.es5.js";
        import lgZoom from "https://unpkg.com/lightgallery@2.7.2/plugins/thumbnail/lg-thumbnail.es5.js";

        lightGallery(document.getElementById("lightgallery"), {
            plugins: [lgZoom, lgThumbnail],
            speed: 500,
        });
    </script>
@endpush

<x-layouts.app>
    @volt
    <main class="page_content">
        <!-- Banner Section - Start
        ================================================== -->
        <section style="background-image: url('{{ asset('assets/images/banner/banner.png') }}')"
                 class="hero_banner style_1">
            <div class="container flex items-stretch">
                <div class="flex w-1/2 flex-col text-left">
                    <div class="flex grow flex-col items-start justify-center">
                        <span class="bg-alternative-darker text-[#3C1E1F] font-bold text-2xl px-6 py-1 rounded">
                            Trung Tâm Tiếng Hàn
                        </span>
                        <h1 class="mt-8 uppercase !text-5xl text-orange-950 !leading-[4.5rem]">
                            Toàn diện cho<br> ngưới mới bắt đầu
                        </h1>
                    </div>

                    <div class="mb-16 w-3/4">
                        <h2 class="text-xl">Sự kiện mới</h2>

                        <div class="pt-2 tabs_wrapper">
                            <div class="tab-content">
                                <div class="relative tab-pane fade show active" id="teb_hr" role="tabpanel">
                                    <div
                                        class="absolute top-0 right-0 h-full w-16 bg-[linear-gradient(270deg,_#F7F5EF_6%,_rgba(247,_245,_239,_0)_100%)] z-[99999]"></div>
                                    <div class="flex flex-nowrap justify-center common_carousel_3col [&>button]:-top-8">
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
                <img class="w-1/2" src="{{ asset('assets/images/banner/hero_banner_img_2.png') }}" alt="">
            </div>
        </section>
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

                <div class="tabs_wrapper">
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
                    <div class="pl-8 col col-lg-7">
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
                        </div>
                    </div>
                    <div class="pl-8 col col-lg-8">
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
                            <div class="pb-0 btn_wrap">
                                <a class="btn btn_primary border border-primary" href="event.html">
                                    <span>
                                        <small>Tìm hiểu thêm</small>
                                        <small>Tìm hiểu thêm</small>
                                    </span>
                                </a>
                            </div>
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
                            <h2 class="heading_text mb-0">
                                Đăng ký tham gia
                            </h2>
                            <h3 class="font-medium text-base">
                                Điền thông tin, chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất
                            </h3>

                            <form action="#" class="mt-8 grid grid-cols-2 gap-4 relative">
                                <input type="text" class="col-span-1 border border-primary px-4 py-2 rounded-lg"
                                       placeholder="Họ tên">
                                <input type="text" class="col-span-1 border border-primary px-4 py-2 rounded-lg"
                                       placeholder="Số điện thoại">
                                <input type="email" class="col-span-full border border-primary px-4 py-2 rounded-lg"
                                       placeholder="Email">
                                <textarea class="col-span-full border border-primary px-4 py-2 rounded-lg"
                                          placeholder="Lời nhắn"></textarea>
                                <button type="submit"
                                        class="uppercase px-10 py-2 bg-black text-alternative-darker rounded-lg font-bold absolute -bottom-14">
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

                <div class="row testimonial_carousel">
                    <div class="col common_carousel_3col flex flex-nowrap" data-cursor-text="Drag">
                        <div class="mr-4 carousel_item border border-primary bg-white rounded-lg p-4">
                            <div class="flex items-center gap-4">
                                <img class="w-14 h-14 rounded-full"
                                     src="https://www.gravatar.com/avatar/467aa3e023c15104d8dd3b5063d7f2ea?s=64&d=identicon&r=PG"
                                     alt="">
                                <div>
                                    <h3 class="text-lg mb-0">Nguyen Thi Mai</h3>
                                    <span class="text-sm text-secondary">Khóa sơ cấp K12</span>
                                </div>
                            </div>
                            <p class="mt-4 text-justify">
                                Mình được luyện phản xạ mỗi buổi học, nên đối với mình chương trình học thật sự phù hợp
                                và mình tự tin giao tiếp dù chưa giỏi. Mình học lớp thầy Tuấn.
                            </p>
                        </div>
                        <div class="mr-4 carousel_item border border-primary bg-white rounded-lg p-4">
                            <div class="flex items-center gap-4">
                                <img class="w-14 h-14 rounded-full"
                                     src="https://www.gravatar.com/avatar/467aa3e023c15104d8dd3b5063d7f2ea?s=64&d=identicon&r=PG"
                                     alt="">
                                <div>
                                    <h3 class="text-lg mb-0">Nguyen Thi Mai</h3>
                                    <span class="text-sm text-secondary">Khóa sơ cấp K12</span>
                                </div>
                            </div>
                            <p class="mt-4 text-justify">
                                Mình được luyện phản xạ mỗi buổi học, nên đối với mình chương trình học thật sự phù hợp
                                và mình tự tin giao tiếp dù chưa giỏi. Mình học lớp thầy Tuấn.
                            </p>
                        </div>
                        <div class="mr-4 carousel_item border border-primary bg-white rounded-lg p-4">
                            <div class="flex items-center gap-4">
                                <img class="w-14 h-14 rounded-full"
                                     src="https://www.gravatar.com/avatar/467aa3e023c15104d8dd3b5063d7f2ea?s=64&d=identicon&r=PG"
                                     alt="">
                                <div>
                                    <h3 class="text-lg mb-0">Nguyen Thi Mai</h3>
                                    <span class="text-sm text-secondary">Khóa sơ cấp K12</span>
                                </div>
                            </div>
                            <p class="mt-4 text-justify">
                                Mình được luyện phản xạ mỗi buổi học, nên đối với mình chương trình học thật sự phù hợp
                                và mình tự tin giao tiếp dù chưa giỏi. Mình học lớp thầy Tuấn.
                            </p>
                        </div>
                        <div class="mr-4 carousel_item border border-primary bg-white rounded-lg p-4">
                            <div class="flex items-center gap-4">
                                <img class="w-14 h-14 rounded-full"
                                     src="https://www.gravatar.com/avatar/467aa3e023c15104d8dd3b5063d7f2ea?s=64&d=identicon&r=PG"
                                     alt="">
                                <div>
                                    <h3 class="text-lg mb-0">Nguyen Thi Mai</h3>
                                    <span class="text-sm text-secondary">Khóa sơ cấp K12</span>
                                </div>
                            </div>
                            <p class="mt-4 text-justify">
                                Mình được luyện phản xạ mỗi buổi học, nên đối với mình chương trình học thật sự phù hợp
                                và mình tự tin giao tiếp dù chưa giỏi. Mình học lớp thầy Tuấn.
                            </p>
                        </div>
                        <div class="mr-4 carousel_item border border-primary bg-white rounded-lg p-4">
                            <div class="flex items-center gap-4">
                                <img class="w-14 h-14 rounded-full"
                                     src="https://www.gravatar.com/avatar/467aa3e023c15104d8dd3b5063d7f2ea?s=64&d=identicon&r=PG"
                                     alt="">
                                <div>
                                    <h3 class="text-lg mb-0">Nguyen Thi Mai</h3>
                                    <span class="text-sm text-secondary">Khóa sơ cấp K12</span>
                                </div>
                            </div>
                            <p class="mt-4 text-justify">
                                Mình được luyện phản xạ mỗi buổi học, nên đối với mình chương trình học thật sự phù hợp
                                và mình tự tin giao tiếp dù chưa giỏi. Mình học lớp thầy Tuấn.
                            </p>
                        </div>
                        <div class="mr-4 carousel_item border border-primary bg-white rounded-lg p-4">
                            <div class="flex items-center gap-4">
                                <img class="w-14 h-14 rounded-full"
                                     src="https://www.gravatar.com/avatar/467aa3e023c15104d8dd3b5063d7f2ea?s=64&d=identicon&r=PG"
                                     alt="">
                                <div>
                                    <h3 class="text-lg mb-0">Nguyen Thi Mai</h3>
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
            </div>
        </section>
        <!-- Testimonial Section - End
        ================================================== -->

        <!-- Counter Section - Start
        ================================================== -->
        <section class="container bg-white shadow-2xl rounded-2xl -mt-28">
            <div class="flex flex-nowrap items-center">
                <div class="col col-lg-3 col-md-6">
                    <div class="counter_item border-0 p-4">
                        <h3 class="counter_value">
                            <span class="counter_value_text">500</span>
                            <span>+</span>
                        </h3>
                        <p class="mb-0 line-clamp-3 min-h-[4.5rem]">
                            Giờ học đã diễn ra
                        </p>
                    </div>
                </div>
                <div class="w-0.5 h-20 bg-primary"></div>
                <div class="col col-lg-3 col-md-6">
                    <div class="counter_item border-0 p-4">
                        <h3 class="counter_value">
                            <span class="counter_value_text">1500</span>
                            <span>+</span>
                        </h3>
                        <p class="mb-0 line-clamp-3 min-h-[4.5rem]">
                            Học viên hoàn thành chương trình học và có việc làm
                        </p>
                    </div>
                </div>
                <div class="w-0.5 h-20 bg-primary"></div>
                <div class="col col-lg-3 col-md-6">
                    <div class="counter_item border-0 p-4">
                        <h3 class="counter_value">
                            <span class="counter_value_text">10</span>
                        </h3>
                        <p class="mb-0 line-clamp-3 min-h-[4.5rem]">
                            Khóa học đang được vận hành
                        </p>
                    </div>
                </div>
                <div class="w-0.5 h-20 bg-primary"></div>
                <div class="col col-lg-3 col-md-6">
                    <div class="counter_item border-0 p-4">
                        <h3 class="counter_value">
                            <span class="counter_value_text">40</span>
                            <span>+</span>
                        </h3>
                        <p class="mb-0 line-clamp-3 min-h-[4.5rem]">
                            Giảng viên với kinh nghiệm tiếng Hàn tối thiểu 2 năm giảng dạy tiếng Hàn
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Counter Section - End
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
                    </a><a href="https://hikorean.edu.vn/wp-content/uploads/2023/08/647b10d30ca2d-768x512.jpeg"
                           {{--data-lg-size="1600-2400"--}}
                           target="_blank"
                           class="col-span-1 rounded-lg image"
                    >
                        <img src="https://hikorean.edu.vn/wp-content/uploads/2023/08/647b10d30ca2d-768x512.jpeg"
                             alt=""/>
                    </a><a href="https://hikorean.edu.vn/wp-content/uploads/2023/08/647b10d30ca2d-768x512.jpeg"
                           {{--data-lg-size="1600-2400"--}}
                           target="_blank"
                           class="col-span-1 rounded-lg image"
                    >
                        <img src="https://hikorean.edu.vn/wp-content/uploads/2023/08/647b10d30ca2d-768x512.jpeg"
                             alt=""/>
                    </a><a href="https://hikorean.edu.vn/wp-content/uploads/2023/08/647b10d30ca2d-768x512.jpeg"
                           {{--data-lg-size="1600-2400"--}}
                           target="_blank"
                           class="col-span-1 rounded-lg image"
                    >
                        <img src="https://hikorean.edu.vn/wp-content/uploads/2023/08/647b10d30ca2d-768x512.jpeg"
                             alt=""/>
                    </a>
                </div>
            </div>
        </section>
        <!-- Brands Section - End
        ================================================== -->

        <!-- Intro Video Section - Start
        ================================================== -->
        <section class="overflow-hidden section_space_lg bg-alternative-lighter decoration_wrap">
            <div class="container position-relative">
                <div class="text-center section_heading">
                    <h2 class="mb-0 heading_text">
                        Lộ trình học
                    </h2>
                </div>
                <div class="intro_video">
                    <div class="video_wrap tilt">
                        <lite-youtube class="mx-auto" videoid="TKc90DXpmQc"
                                      playlabel="Play: Keynote (Google I/O '18)"></lite-youtube>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-lg-3 col-md-6 col-sm-6">
                        <div class="iconbox_item">
                            <div class="title_wrap">
                                <div class="item_icon">
                                    <i class="fas fa-signal-1"></i>
                                </div>
                                <h3 class="mb-0 item_title">
                                    <span class="d-block">Step 1</span>
                                </h3>
                            </div>
                            <p class="mb-0">
                                Adipiscing bibendum est ultricies integer. Magnis dis parturient montes nascetur
                                ridiculus mus mauris
                            </p>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-6">
                        <div class="iconbox_item">
                            <div class="title_wrap">
                                <div class="item_icon">
                                    <i class="fas fa-signal-2"></i>
                                </div>
                                <h3 class="mb-0 item_title">
                                    <span class="d-block">Step 2</span>
                                </h3>
                            </div>
                            <p class="mb-0">
                                Facilisi nullam vehicula ipsum a arcu cursus vitae. Interdum velit laoreet id donec
                                ultrices tincidunt arcu
                            </p>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-6">
                        <div class="iconbox_item">
                            <div class="title_wrap">
                                <div class="item_icon">
                                    <i class="fas fa-signal-3"></i>
                                </div>
                                <h3 class="mb-0 item_title">
                                    <span class="d-block">Step 3</span>
                                </h3>
                            </div>
                            <p class="mb-0">
                                Lectus magna fringilla urna porttitor rhoncus dolor purus non. Orci dapibus ultrices in
                                iaculis
                            </p>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-6">
                        <div class="iconbox_item">
                            <div class="title_wrap">
                                <div class="item_icon">
                                    <i class="fas fa-signal-4"></i>
                                </div>
                                <h3 class="mb-0 item_title">
                                    <span class="d-block">Step 4</span>
                                </h3>
                            </div>
                            <p class="mb-0">
                                Elementum facilisis leo vel fringilla est ullamcorper eget nulla facilisi. Imperdiet
                                proin fermentum leo vel orc
                            </p>
                        </div>
                    </div>
                </div>

                <div class="deco_item shape_img_1" data-parallax='{"y" : 130, "smoothness": 6}'>
                    <img src="assets/images/shape/shape_img_7.png" alt="Collab – Online Learning Platform">
                </div>
                <div class="deco_item shape_img_2" data-parallax='{"y" : -130, "smoothness": 6}'>
                    <img src="assets/images/shape/shape_img_7.png" alt="Collab – Online Learning Platform">
                </div>
            </div>
            <div class="deco_item shape_img_3" data-parallax='{"y" : -130, "smoothness": 6}'>
                <img src="assets/images/shape/shape_img_7.png" alt="Collab – Online Learning Platform">
            </div>
        </section>
        <!-- Intro Video Section - End
        ================================================== -->
    </main>
    @endvolt
</x-layouts.app>

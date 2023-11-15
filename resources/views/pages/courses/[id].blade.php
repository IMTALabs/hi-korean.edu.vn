<?php

\Laravel\Folio\name('courses.show');

\Artesaos\SEOTools\Facades\SEOMeta::setTitle('Hoạt động');
\Artesaos\SEOTools\Facades\SEOMeta::setDescription('TRUNG TÂM TIẾNG HÀN HI KOREAN');
\Artesaos\SEOTools\Facades\SEOMeta::setCanonical(url()->current());

\Artesaos\SEOTools\Facades\OpenGraph::setDescription('TRUNG TÂM TIẾNG HÀN HI KOREAN');
\Artesaos\SEOTools\Facades\OpenGraph::setTitle('Hoạt động');
\Artesaos\SEOTools\Facades\OpenGraph::setUrl(url()->current());
\Artesaos\SEOTools\Facades\OpenGraph::addProperty('type', 'articles');
\Artesaos\SEOTools\Facades\OpenGraph::addImage(asset('assets/images/banner/banner.png'));

\Artesaos\SEOTools\Facades\JsonLd::setTitle('Hoạt động');
\Artesaos\SEOTools\Facades\JsonLd::setDescription('TRUNG TÂM TIẾNG HÀN HI KOREAN');
\Artesaos\SEOTools\Facades\JsonLd::addImage(asset('assets/images/banner/banner.png'));

?>

<x-layouts.app>
    @volt
    <main class="page_content">
        <div class="container mx-auto">
            <div class="flex items-center py-10">
                <a href="{{ route('home') }}" class="text-gray-500">Trang chủ</a>
                <i class="mx-2 fas fa-chevron-right"></i>
                <span>Học offline sơ cấp</span>
            </div>
            <div class="grid gap-x-16 lg:grid-cols-2">
                <div class="lg:col-span-1">
                    <div class="flex grow flex-col items-start justify-center">
                        <span class="bg-alternative-darker text-[#3C1E1F] font-bold text-2xl px-6 py-1 rounded">
                            Khóa học
                        </span>
                        <h1 class="mt-8 uppercase !text-5xl text-black !leading-[4.5rem]">
                            Offline sơ cấp
                        </h1>
                        <ol class="mt-8 marker:text-3xl marker:font-bold">
                            <li class="pl-8">Khám phá bảng chữ cái tiếng Hàn và cách phát âm, biến âm, nối âm, ngữ điệu…
                                cơ bản.
                            </li>
                            <li class="pl-8">Làm quen với kỹ năng nghe – nói – đọc – viết bằng tiếng Hàn.</li>
                            <li class="pl-8">Chinh phục kỹ năng giao tiếp tự nhiên, đúng văn phong về 18 chủ đề trong
                                đời sống.
                            </li>
                        </ol>

                        <div
                            class="mt-8 whitespace-nowrap flex max-lg:flex-col w-full items-center gap-8 rounded-lg border px-8 py-4 border-primary shadow-[-5px_5px_0px_0px_black] bg-alternative">
                            <div class="grow max-lg:text-center">
                                <div class="flex items-center gap-2 max-lg:justify-center">
                                    <span class="text-3xl font-bold">4.5</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                              d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm3.23 15.39L12 15.45l-3.22 1.94a.502.502 0 0 1-.75-.54l.85-3.66l-2.83-2.45a.505.505 0 0 1 .29-.88l3.74-.32l1.46-3.45c.17-.41.75-.41.92 0l1.46 3.44l3.74.32a.5.5 0 0 1 .28.88l-2.83 2.45l.85 3.67c.1.43-.36.77-.74.54z"/>
                                    </svg>
                                </div>
                                <span>Đánh giá từ học viên</span>
                            </div>
                            <div class="h-16 w-px bg-primary max-lg:hidden"></div>
                            <div class="grow max-lg:text-center">
                                <div class="flex items-center gap-2">
                                    <span class="text-3xl font-bold">125000 +</span>
                                </div>
                                <span>Học viên theo học</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-1 max-lg:hidden">
                    <img class="w-full" src="{{ asset('assets/images/course/Group 11770.png') }}" alt="">
                </div>
            </div>
        </div>

        <!-- Courses Section - Start
        ================================================== -->
        <section class="pt-8 courses_section section_space_lg">
            <div class="container">
                <div class="section_heading">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col col-lg-6">
                            <h3 class="text-2xl !text-secondary">Tuyển Sinh</h3>
                            <h2 class="mb-0 uppercase heading_text">
                                Lịch khai giảng
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="tabs_wrapper max-lg:mt-24">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="teb_hr" role="tabpanel">
                            <div class="flex-nowrap justify-center row common_carousel_3col">
                                <div class="overflow-visible col col-lg-4 carousel_item">
                                    <div class="overflow-visible course_card border-primary">
                                        <div class="flex items-center gap-4">
                                            <img alt="" class="w-10 h-10 rounded-full"
                                                 src="{{ asset('assets/images/about/image 112.png') }}"/>
                                            <div>
                                                <h2 class="text-lg mb-0">Lớp HKSC-24</h2>
                                                <span class="text-secondary font-medium">1.800.000 đ</span>
                                            </div>
                                        </div>
                                        <ul class="mt-8 list-none pl-0 space-y-2">
                                            <li>Giảng viên: Cô Thùy Dương</li>
                                            <li>Lịch học: Thứ 3 & Thứ 5 (7h30' - 9h00)</li>
                                            <li>Khai giảng: <strong>26.12.2022</strong></li>
                                        </ul>
                                        <a wire:navigate class="border btn btn_primary border-primary w-full mt-8"
                                           href="{{ route('about_us') }}">
                                            <span>
                                                <small class="py-3">Đăng ký ngay</small>
                                                <small class="py-3">Đăng ký ngay</small>
                                            </span>
                                        </a>
                                        <div class="w-full text-center text-sm mt-2">Còn 2 chỗ trống</div>
                                    </div>
                                </div>
                                <div class="overflow-visible col col-lg-4 carousel_item">
                                    <div class="overflow-visible course_card border-primary">
                                        <div class="flex items-center gap-4">
                                            <img alt="" class="w-10 h-10 rounded-full"
                                                 src="{{ asset('assets/images/about/image 112.png') }}"/>
                                            <div>
                                                <h2 class="text-lg mb-0">Lớp HKSC-24</h2>
                                                <span class="text-secondary font-medium">1.800.000 đ</span>
                                            </div>
                                        </div>
                                        <ul class="mt-8 list-none pl-0 space-y-2">
                                            <li>Giảng viên: Cô Thùy Dương</li>
                                            <li>Lịch học: Thứ 3 & Thứ 5 (7h30' - 9h00)</li>
                                            <li>Khai giảng: <strong>26.12.2022</strong></li>
                                        </ul>
                                        <a wire:navigate class="border btn btn_primary border-primary w-full mt-8"
                                           href="{{ route('about_us') }}">
                                            <span>
                                                <small class="py-3">Đăng ký ngay</small>
                                                <small class="py-3">Đăng ký ngay</small>
                                            </span>
                                        </a>
                                        <div class="w-full text-center text-sm mt-2">Còn 2 chỗ trống</div>
                                    </div>
                                </div>
                                <div class="overflow-visible col col-lg-4 carousel_item">
                                    <div class="overflow-visible course_card border-primary">
                                        <div class="flex items-center gap-4">
                                            <img alt="" class="w-10 h-10 rounded-full"
                                                 src="{{ asset('assets/images/about/image 112.png') }}"/>
                                            <div>
                                                <h2 class="text-lg mb-0">Lớp HKSC-24</h2>
                                                <span class="text-secondary font-medium">1.800.000 đ</span>
                                            </div>
                                        </div>
                                        <ul class="mt-8 list-none pl-0 space-y-2">
                                            <li>Giảng viên: Cô Thùy Dương</li>
                                            <li>Lịch học: Thứ 3 & Thứ 5 (7h30' - 9h00)</li>
                                            <li>Khai giảng: <strong>26.12.2022</strong></li>
                                        </ul>
                                        <a wire:navigate class="border btn btn_primary border-primary w-full mt-8"
                                           href="{{ route('about_us') }}">
                                            <span>
                                                <small class="py-3">Đăng ký ngay</small>
                                                <small class="py-3">Đăng ký ngay</small>
                                            </span>
                                        </a>
                                        <div class="w-full text-center text-sm mt-2">Còn 2 chỗ trống</div>
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
        <section class="expect_from_course section_space_lg py-16 bg-[#F8F2E6]">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-5">
                        <div class="section_heading">
                            <h3 class="text-2xl !text-secondary">Khóa Sơ Cấp</h3>
                            <h2 class="mb-0 uppercase heading_text">
                                Giới thiệu khóa học
                            </h2>
                        </div>
                    </div>
                    <div class="col col-lg-7">
                        <div class="row">
                            <div class="col">
                                <div class="accordion space-y-8" id="faq_accordion_1">
                                    <div class="accordion-item bg-white px-8 py-4 rounded-xl">
                                        <div class="accordion-button text-lg relative" role="button" data-bs-toggle="collapse"
                                             data-bs-target="#collapse_one" aria-expanded="true">
                                            <div
                                                class="px-4 py-1 bg-alternative text-primary font-bold rounded lg:mr-4 lg:-ml-12 max-lg:absolute max-lg:-top-10">
                                                Giai đoạn 1 (9 buổi)
                                            </div>
                                            Giới thiệu bản thân
                                        </div>
                                        <div id="collapse_one" class="accordion-collapse collapse show"
                                             data-bs-parent="#faq_accordion_1">
                                            <div class="accordion-body">
                                                <ul class="space-y-4 pl-4">
                                                    <li>Danh sách 1: (giáo trình 레시피 + hot Topik) - học theo kiểu
                                                        short-term memory, thông qua các app từ vựng. + liên từ (부사- đầu
                                                        câu), từ cảm xúc (lọc từ các đề), động từ hành động nói (lọc từ
                                                        đề).
                                                    </li>
                                                    <li>Danh sách 2: (xây dựng dựa trên sơ đồ tư duy từ vựng) - Ngọc
                                                        chuẩn bị - học theo kiểu long - term memory, áp dụng phương pháp
                                                        Goldist method.
                                                    </li>
                                                    <li>Ngữ pháp: (ngữ pháp trung cấp) (3 tuần: 9 buổi, 7 ngữ pháp/ 1
                                                        buổi)
                                                    </li>
                                                    <li>Giáo trình ngữ pháp trung cấp master topik (Việt hóa lại) (xem
                                                        video trước)
                                                    </li>
                                                    <li>Phương thức giảng dạy: Đưa ra 3 điểm ngữ pháp thông qua 1 hội
                                                        thoại → phân tích từng ngữ pháp. (bỏ qua nếu không có hội thoại)
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item bg-white px-8 py-4 rounded-xl">
                                        <div class="accordion-button text-lg relative" role="button" data-bs-toggle="collapse"
                                             data-bs-target="#collapse_two" aria-expanded="true">
                                            <div
                                                class="px-4 py-1 bg-alternative text-primary font-bold rounded lg:mr-4 lg:-ml-12 max-lg:absolute max-lg:-top-10">
                                                Sinh hoạt hàng ngày
                                            </div>
                                            Đọc và Nghe. Giới thiệu dạng bài thông qua bài...
                                        </div>
                                        <div id="collapse_two" class="accordion-collapse collapse"
                                             data-bs-parent="#faq_accordion_1">
                                            <div class="accordion-body">
                                                <ul class="space-y-4 pl-4">
                                                    <li>Danh sách 1: (giáo trình 레시피 + hot Topik) - học theo kiểu
                                                        short-term memory, thông qua các app từ vựng. + liên từ (부사- đầu
                                                        câu), từ cảm xúc (lọc từ các đề), động từ hành động nói (lọc từ
                                                        đề).
                                                    </li>
                                                    <li>Danh sách 2: (xây dựng dựa trên sơ đồ tư duy từ vựng) - Ngọc
                                                        chuẩn bị - học theo kiểu long - term memory, áp dụng phương pháp
                                                        Goldist method.
                                                    </li>
                                                    <li>Ngữ pháp: (ngữ pháp trung cấp) (3 tuần: 9 buổi, 7 ngữ pháp/ 1
                                                        buổi)
                                                    </li>
                                                    <li>Giáo trình ngữ pháp trung cấp master topik (Việt hóa lại) (xem
                                                        video trước)
                                                    </li>
                                                    <li>Phương thức giảng dạy: Đưa ra 3 điểm ngữ pháp thông qua 1 hội
                                                        thoại → phân tích từng ngữ pháp. (bỏ qua nếu không có hội thoại)
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item bg-white px-8 py-4 rounded-xl">
                                        <div class="accordion-button text-lg relative" role="button" data-bs-toggle="collapse"
                                             data-bs-target="#collapse_three" aria-expanded="true">
                                            <div
                                                class="px-4 py-1 bg-alternative text-primary font-bold rounded lg:mr-4 lg:-ml-12 max-lg:absolute max-lg:-top-10">
                                                Giai đoạn 3 (11 buổi)
                                            </div>
                                            Nước rút
                                        </div>
                                        <div id="collapse_three" class="accordion-collapse collapse"
                                             data-bs-parent="#faq_accordion_1">
                                            <div class="accordion-body">
                                                <ul class="space-y-4 pl-4">
                                                    <li>Danh sách 1: (giáo trình 레시피 + hot Topik) - học theo kiểu
                                                        short-term memory, thông qua các app từ vựng. + liên từ (부사- đầu
                                                        câu), từ cảm xúc (lọc từ các đề), động từ hành động nói (lọc từ
                                                        đề).
                                                    </li>
                                                    <li>Danh sách 2: (xây dựng dựa trên sơ đồ tư duy từ vựng) - Ngọc
                                                        chuẩn bị - học theo kiểu long - term memory, áp dụng phương pháp
                                                        Goldist method.
                                                    </li>
                                                    <li>Ngữ pháp: (ngữ pháp trung cấp) (3 tuần: 9 buổi, 7 ngữ pháp/ 1
                                                        buổi)
                                                    </li>
                                                    <li>Giáo trình ngữ pháp trung cấp master topik (Việt hóa lại) (xem
                                                        video trước)
                                                    </li>
                                                    <li>Phương thức giảng dạy: Đưa ra 3 điểm ngữ pháp thông qua 1 hội
                                                        thoại → phân tích từng ngữ pháp. (bỏ qua nếu không có hội thoại)
                                                    </li>
                                                </ul>
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
        <!-- Về chúng tôi - End
        ================================================== -->

        <!-- Giảng viên - Start
        ================================================== -->
        <section class="expect_from_course section_space_lg py-16">
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

        <!-- Về chúng tôi - Start
        ================================================== -->
        <section class="expect_from_course section_space_lg py-16 bg-[#F8F2E6]">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-5">
                        <div class="section_heading">
                            <h3 class="text-2xl !text-secondary">Khóa Sơ Cấp</h3>
                            <h2 class="mb-0 uppercase heading_text">
                                Đề cương
                            </h2>
                        </div>
                    </div>
                    <div class="col col-lg-7">
                        <div class="row">
                            <div class="col">
                                <div class="accordion space-y-8" id="faq_accordion_1">
                                    <div class="accordion-item bg-white px-8 py-4 rounded-xl">
                                        <div class="accordion-button text-lg relative" role="button" data-bs-toggle="collapse"
                                             data-bs-target="#collapse_one" aria-expanded="true">
                                            Bài 01 - Bảng chữ cái tiếng Hàn
                                            <span class="max-lg:hidden ml-4 bg-[#FEF2D0] text-secondary text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">1 buổi</span>
                                        </div>
                                        <span class="lg:hidden bg-[#FEF2D0] text-secondary text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">1 buổi</span>
                                        <div id="collapse_one" class="accordion-collapse collapse show"
                                             data-bs-parent="#faq_accordion_1">
                                            <div class="accordion-body">
                                                <ul class="space-y-4 pl-4">
                                                    <li>Danh sách 1: (giáo trình 레시피 + hot Topik) - học theo kiểu
                                                        short-term memory, thông qua các app từ vựng. + liên từ (부사- đầu
                                                        câu), từ cảm xúc (lọc từ các đề), động từ hành động nói (lọc từ
                                                        đề).
                                                    </li>
                                                    <li>Danh sách 2: (xây dựng dựa trên sơ đồ tư duy từ vựng) - Ngọc
                                                        chuẩn bị - học theo kiểu long - term memory, áp dụng phương pháp
                                                        Goldist method.
                                                    </li>
                                                    <li>Ngữ pháp: (ngữ pháp trung cấp) (3 tuần: 9 buổi, 7 ngữ pháp/ 1
                                                        buổi)
                                                    </li>
                                                    <li>Giáo trình ngữ pháp trung cấp master topik (Việt hóa lại) (xem
                                                        video trước)
                                                    </li>
                                                    <li>Phương thức giảng dạy: Đưa ra 3 điểm ngữ pháp thông qua 1 hội
                                                        thoại → phân tích từng ngữ pháp. (bỏ qua nếu không có hội thoại)
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item bg-white px-8 py-4 rounded-xl">
                                        <div class="accordion-button text-lg relative" role="button" data-bs-toggle="collapse"
                                             data-bs-target="#collapse_one" aria-expanded="true">
                                            Bài 01 - Bảng chữ cái tiếng Hàn
                                            <<span class="max-lg:hidden ml-4 bg-[#FEF2D0] text-secondary text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">1 buổi</span>
                                        </div>
                                        <span class="lg:hidden bg-[#FEF2D0] text-secondary text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">1 buổi</span>
                                        <div id="collapse_one" class="accordion-collapse collapse"
                                             data-bs-parent="#faq_accordion_1">
                                            <div class="accordion-body">
                                                <ul class="space-y-4 pl-4">
                                                    <li>Danh sách 1: (giáo trình 레시피 + hot Topik) - học theo kiểu
                                                        short-term memory, thông qua các app từ vựng. + liên từ (부사- đầu
                                                        câu), từ cảm xúc (lọc từ các đề), động từ hành động nói (lọc từ
                                                        đề).
                                                    </li>
                                                    <li>Danh sách 2: (xây dựng dựa trên sơ đồ tư duy từ vựng) - Ngọc
                                                        chuẩn bị - học theo kiểu long - term memory, áp dụng phương pháp
                                                        Goldist method.
                                                    </li>
                                                    <li>Ngữ pháp: (ngữ pháp trung cấp) (3 tuần: 9 buổi, 7 ngữ pháp/ 1
                                                        buổi)
                                                    </li>
                                                    <li>Giáo trình ngữ pháp trung cấp master topik (Việt hóa lại) (xem
                                                        video trước)
                                                    </li>
                                                    <li>Phương thức giảng dạy: Đưa ra 3 điểm ngữ pháp thông qua 1 hội
                                                        thoại → phân tích từng ngữ pháp. (bỏ qua nếu không có hội thoại)
                                                    </li>
                                                </ul>
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
        <!-- Về chúng tôi - End
        ================================================== -->

        <!-- Testimonial Section - Start
        ================================================== -->
        <section class="py-16 bg-[#FDD561] testimonial_section section_space_lg">
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

                <div class="row testimonial_carousel max-lg:mt-24">
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

        <!-- Courses Section - Start
        ================================================== -->
        <section class="pt-8 courses_section section_space_lg mt-8">
            <div class="container">
                <div class="section_heading">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col col-lg-6">
                            <h2 class="mb-0 uppercase heading_text">
                                các khóa học khác
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="tabs_wrapper max-lg:mt-24">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="teb_hr" role="tabpanel">
                            <div class="flex-nowrap justify-center row common_carousel_3col">
                                <div class="overflow-visible col col-lg-4 carousel_item">
                                    <div class="overflow-visible course_card">
                                        <div class="item_image">
                                            <a class="border !border-gray-300"
                                               href="{{ route('courses.show', ['id' => 'offline']) }}"
                                               data-cursor-text="View">
                                                <img
                                                    src="https://w.ladicdn.com/s900x650/62e3a03efac7530012145b9f/img_course_02-20221201133721-atuyu.jpg"
                                                    alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <h3 class="py-0 item_title">
                                                <a href="{{ route('courses.show', ['id' => 'offline']) }}"
                                                   class="flex items-baseline gap-2">
                                                    <div class="w-3 h-3 rounded-full !bg-secondary shrink-0"></div>
                                                    <div class="truncate">KHÓA LUYỆN THI TOPIK 3-4 ( 48 BUỔI)</div>
                                                </a>
                                            </h3>
                                            <p class="h-28 pt-2 line-clamp-4">
                                                - Hướng dẫn phương pháp giải đề với 3 kỹ năng Nghe – Đọc – Viết
                                                - Ôn tập ngữ pháp, từ vựng
                                                - Luyện và giải đề
                                            </p>
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-start gap-1 font-bold text-gray-500">
                                                    <svg class="h-5 w-5" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                              d="m8.85 17.825l3.15-1.9l3.15 1.925l-.825-3.6l2.775-2.4l-3.65-.325l-1.45-3.4l-1.45 3.375l-3.65.325l2.775 2.425l-.825 3.575Zm3.15.45l-4.15 2.5q-.275.175-.575.15t-.525-.2q-.225-.175-.35-.438t-.05-.587l1.1-4.725L3.775 11.8q-.25-.225-.312-.513t.037-.562q.1-.275.3-.45t.55-.225l4.85-.425l1.875-4.45q.125-.3.388-.45t.537-.15q.275 0 .537.15t.388.45l1.875 4.45l4.85.425q.35.05.55.225t.3.45q.1.275.038.563t-.313.512l-3.675 3.175l1.1 4.725q.075.325-.05.588t-.35.437q-.225.175-.525.2t-.575-.15l-4.15-2.5Zm0-5.025Z"/>
                                                    </svg>
                                                    4.9
                                                    -
                                                    14 buổi
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Courses Section - End
        ================================================== -->
    </main>
    @endvolt
</x-layouts.app>

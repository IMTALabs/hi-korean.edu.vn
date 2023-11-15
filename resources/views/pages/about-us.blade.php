<?php

\Laravel\Folio\name('about_us');

?>

<x-layouts.app>
    @volt
    <main class="page_content">
        <!-- Page Section - Start
        ================================================== -->
        <section class="aspect-video bg-cover bg-center bg-no-repeat page_banner"
                 style="background-image: url('{{ asset('assets/images/banner/about.png') }}')"></section>
        <!-- Page Section - End
        ================================================== -->

        <div class="container mx-auto">
            <div class="flex items-center py-10">
                <a href="{{ route('home') }}" class="text-gray-500">Trang chủ</a>
                <i class="mx-2 fas fa-chevron-right"></i>
                <span>Giới thiệu</span>
            </div>
            <div class="grid gap-x-16 lg:grid-cols-2">
                <div class="lg:col-span-1">
                    <div class="flex grow flex-col items-start justify-center">
                        <span class="bg-alternative-darker text-[#3C1E1F] font-bold text-2xl px-6 py-1 rounded">
                            Trung Tâm Tiếng Hàn
                        </span>
                        <h1 class="mt-8 uppercase !text-5xl text-black !leading-[4.5rem]">
                            Toàn diện cho<br> ngưới mới bắt đầu
                        </h1>
                    </div>
                </div>
                <div class="lg:col-span-1">
                    Hoạt động trong lĩnh vực giáo dục nhiều năm, Hi Korean hiểu rõ tầm quan trọng của đạo đức nghề
                    nghiệp trong quá trình xây dựng và phát triển thương hiệu.<br><br>
                    Không đặt mục đích lợi nhuận lên hàng đầu, Hi Korean hướng tới cái đích vừa đảm bảo quyền lợi cho
                    học viên, vừa khẳng định được uy tín của một đơn vị đào tạo top đầu. <br><br>
                    Kim chỉ nam đó cũng chính là bí quyết giúp Hi Korean tồn tại và phát triển trong lĩnh vực giáo dục
                    cạnh tranh và đào thải khốc liệt, ngày càng nhận được nhiều sự yêu quý và tín nhiệm của các bạn học
                    viên.
                </div>
            </div>

            <div class="mt-16 grid items-start gap-8 lg:grid-cols-3">
                <div
                    class="lg:col-span-1 border border-primary rounded-md bg-[#F8F2E6] flex flex-col items-center gap-4 p-4">
                    <h2 class="mb-0 text-lg">Tầm nhìn</h2>
                    <div class="flex h-20 w-20 items-center justify-center rounded-full bg-alternative-darker">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                               stroke-width="2">
                                <path d="M11 12a1 1 0 1 0 2 0a1 1 0 1 0-2 0"/>
                                <path d="M12 7a5 5 0 1 0 5 5"/>
                                <path d="M13 3.055A9 9 0 1 0 20.941 11"/>
                                <path d="M15 6v3h3l3-3h-3V3zm0 3l-3 3"/>
                            </g>
                        </svg>
                    </div>
                    <p class="mb-0 text-center">
                        Bằng sự đam mê và chuyên nghiệp, Hi Korean phấn đấu trở thành Trung tâm tiếng Hàn số 1 Việt Nam,
                        đào tạo và cung cấp nhân sự chất lượng cao tiếng Hàn cho cá nhân và tổ chức trong nước và quốc
                        tế.
                    </p>
                </div>
                <div
                    class="lg:col-span-1 border border-primary rounded-md bg-[#F8F2E6] flex flex-col items-center gap-4 p-4">
                    <h2 class="mb-0 text-lg">Sứ mệnh</h2>
                    <div class="flex h-20 w-20 items-center justify-center rounded-full bg-alternative-darker">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                  d="M4 11.333L0 9l12-7l12 7v8.5h-2v-7.333l-2 1.166v6.678l-.223.275A9.983 9.983 0 0 1 12 22a9.983 9.983 0 0 1-7.777-3.714L4 18.011v-6.678ZM6 12.5v4.792A7.979 7.979 0 0 0 12 20a7.978 7.978 0 0 0 6-2.708V12.5L12 16l-6-3.5ZM3.97 9L12 13.685L20.03 9L12 4.315L3.97 9Z"/>
                        </svg>
                    </div>
                    <p class="mb-0 text-center">
                        Hi Korean cam kết liên tục cập nhật các công nghệ, phương pháp đào tạo tiếng Hàn hiệu quả và
                        hiện đại hơn cho cá nhân và tổ chức, truyền cảm hứng học tập và thay đổi tư duy giúp cho mỗi học
                        viên không chỉ giỏi tiếng Hàn mà còn sống thành công và hạnh phúc hơn.
                    </p>
                </div>
                <div
                    class="lg:col-span-1 border border-primary rounded-md bg-[#F8F2E6] flex flex-col items-center gap-4 p-4">
                    <h2 class="mb-0 text-lg">Giá trị cốt lõi</h2>
                    <div class="flex h-20 w-20 items-center justify-center rounded-full bg-alternative-darker">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                  d="M12 11a1 1 0 1 0 1 1a1 1 0 0 0-1-1Zm7.62 1l.11-.14C21.08 10 21.4 8.29 20.66 7S18.26 5.14 16 5.37h-.18C14.91 3.3 13.56 2 12 2S9.09 3.3 8.19 5.4L8 5.37C5.74 5.14 4.08 5.71 3.34 7s-.42 3 .93 4.86l.11.14l-.11.14C2.92 14 2.6 15.71 3.34 17C4 18.1 5.27 18.68 7 18.68c.31 0 .63 0 1-.05h.18C9.09 20.7 10.44 22 12 22s2.91-1.3 3.81-3.4h.18c.34 0 .66.05 1 .05c1.77 0 3.07-.58 3.7-1.68c.74-1.29.42-3-.93-4.86ZM5.07 8c.25-.44 1-.68 2-.68h.49a14.78 14.78 0 0 0-.35 1.87a15 15 0 0 0-1.45 1.25C5 9.44 4.78 8.5 5.07 8Zm0 8c-.29-.5 0-1.44.67-2.47a15 15 0 0 0 1.45 1.25a14.94 14.94 0 0 0 .35 1.88c-1.24.08-2.18-.16-2.47-.66ZM12 4c.56 0 1.23.66 1.8 1.83a17.6 17.6 0 0 0-1.8.63a17.6 17.6 0 0 0-1.8-.63C10.77 4.66 11.44 4 12 4Zm0 16c-.56 0-1.23-.66-1.8-1.83a17.6 17.6 0 0 0 1.8-.63a17.6 17.6 0 0 0 1.8.63C13.23 19.34 12.56 20 12 20Zm2.93-6.31c-.46.32-.93.62-1.43.91s-1 .55-1.5.78q-.75-.35-1.5-.78c-.5-.29-1-.59-1.43-.91C9 13.15 9 12.59 9 12s0-1.15.07-1.69c.46-.32.93-.62 1.43-.91s1-.55 1.5-.78q.75.35 1.5.78c.5.29 1 .59 1.43.91c0 .54.07 1.1.07 1.69s0 1.15-.07 1.69Zm4 2.31c-.29.5-1.23.75-2.47.66a14.94 14.94 0 0 0 .35-1.88a15 15 0 0 0 1.45-1.25c.74 1.03.96 1.97.67 2.47Zm-.67-5.53a15 15 0 0 0-1.45-1.25a14.78 14.78 0 0 0-.35-1.87h.49c1 0 1.73.24 2 .68s.05 1.41-.69 2.44Z"/>
                        </svg>
                    </div>
                    <p class="mb-0 text-center">
                        Đồng sức đồng lòng Khách hàng là trọng tâm Đam mê, nhiệt huyết Học hỏi và sáng tạo Gieo hạt
                    </p>
                </div>
            </div>
        </div>

        <section class="pt-16 pb-8 bg-[#FDD561] mt-24 testimonial_section section_space_lg">
            <div class="container">
                <div class="section_heading">
                    <div class="row align-items-start justify-content-lg-between">
                        <div class="col col-lg-6">
                            <h3 class="text-2xl !text-[#B67222]">Hi Korean</h3>
                            <h2 class="mb-0 uppercase heading_text">
                                Lịch sử hình thành
                            </h2>
                            <p class="mt-8 mb-0">
                                Mang trong mình đam mê mãnh liệt với đất nước Hàn Quốc, một khao khát được lan tỏa niềm
                                cảm hứng yêu tiếng Hàn đó tới hàng triệu người Việt, giúp mọi người tự tin giao tiếp
                                tiếng Hàn mà nữ trung tâm tiếng Hàn – Nguyễn Phương Thúy đã sáng lập ra thương hiệu
                                Tiếng Hàn Hi Korean.<br><br>
                                Từ những ngày đầu thành lập với nhiều khó khăn, Hi Korean luôn sẵn sàng với tâm thế
                                đương đầu để tạo nên một Trung tâm giáo dục có tâm, có tầm, có sức ảnh hưởng. Trải qua 5
                                năm trưởng thành, đến nay Hi Korean đã gặt hái những thành tích đáng tự hào, khẳng định
                                thương hiệu giáo dục uy tín trên địa bàn Hà Nội.
                            </p>
                        </div>
                        <div class="col col-lg-6">
                            <div class="rounded-2xl bg-white px-6 py-10 shadow">
                                <div class="flex items-center justify-between">
                                    <span class="text-4xl font-bold text-secondary">
                                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.7056 2.09216C13.9712 0.703305 11.9134 0 9.54869 0C6.88821 0 4.63195 0.872028 2.77807 2.59477C0.926023 4.31574 0 6.45052 0 8.99911C0 11.5477 0.926023 13.6825 2.77807 15.4052C4.63011 17.128 6.88637 18 9.54685 18C12.2073 18 14.4397 17.128 16.2917 15.4052C17.8223 14.0004 18.7207 12.3203 19 10.3666L11.1803 8.70429L15.7056 2.09216Z"
                                                fill="#FAA819"/>
                                        </svg>
                                        2017
                                    </span>
                                    <span class="text-2xl font-bold">Thành lập</span>
                                </div>
                                <p class="mt-8 mb-0">
                                    Ra đời từ 2017, Hi Korean đã trải qua 5 năm với nhiều thăng trầm khó khăn để giữ
                                    vững là một trong những thương hiệu Tiếng Hàn giao tiếp hàng đầu với tổng số học
                                    viên lên tới hàng nghìn trên toàn Việt Nam.
                                </p>
                            </div>
                            <div class="mt-8 rounded-2xl bg-white px-6 py-10 shadow">
                                <div class="flex max-lg:flex-col max-lg:gap-4 items-center justify-between">
                                    <span class="text-4xl font-bold text-secondary">
                                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.7056 2.09216C13.9712 0.703305 11.9134 0 9.54869 0C6.88821 0 4.63195 0.872028 2.77807 2.59477C0.926023 4.31574 0 6.45052 0 8.99911C0 11.5477 0.926023 13.6825 2.77807 15.4052C4.63011 17.128 6.88637 18 9.54685 18C12.2073 18 14.4397 17.128 16.2917 15.4052C17.8223 14.0004 18.7207 12.3203 19 10.3666L11.1803 8.70429L15.7056 2.09216Z"
                                                fill="#FAA819"/>
                                        </svg>
                                        2017 - Nay
                                    </span>
                                    <span class="text-2xl font-bold">Phát triển</span>
                                </div>
                                <p class="mt-8 mb-0">
                                    5 năm - 1 chặng đường - đồng hành cùng hơn 10.000 giấc mơ tiếng Hàn, không chỉ là
                                    trung tâm ngoại ngữ, Hi Korean còn là những người truyền cảm hứng. Thông qua đó, các
                                    học viên có thể tự tin bước ra khỏi "vùng an toàn" và tự tin khẳng định bản thân.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container mx-auto">
            <div class="row">
                <div class="col col-lg-6">
                    <img src="{{ asset('assets/images/about/image 110.png') }}" alt="" class="w-full mt-4 lg:-mt-48">
                    <h2 class="mb-0 text-lg mt-16">Quy trình dạy và học cụ thể</h2>
                    <div class="relative mt-8 rounded-xl border p-4 pt-8 border-primary">
                        <span class="absolute -top-4 left-8 -translate-y-1/2 px-4 py-1 font-bold bg-[#FDD561] rounded">
                            Trước buổi học
                        </span>
                        Giáo viên gửi video bài giảng tổng quan trước 15p để các bạn xem và ghi nhớ lần 1
                    </div>
                    <div class="relative mt-8 rounded-xl border p-4 pt-8 border-primary">
                        <span class="absolute -top-4 left-8 -translate-y-1/2 px-4 py-1 font-bold bg-[#FDD561] rounded">
                            Trong buổi học
                        </span>.

                        Giáo viên hệ thống lại toàn bộ kiến thức, giảng kĩ những phần kiến thức khó và
                        dành thời gian luyện phản xạ nghe nói cùng học viên
                    </div>
                    <div class="relative mt-8 rounded-xl border p-4 pt-8 border-primary">
                        <span class="absolute -top-4 left-8 -translate-y-1/2 px-4 py-1 font-bold bg-[#FDD561] rounded">
                            Sau buổi học
                        </span>
                        Giáo viên hỗ trợ sửa kỹ năng nghe nói cho từng bạn bằng cách ghi âm và viết bài
                        gửi cho GV.
                    </div>
                    <div class="relative mt-8 rounded-xl border p-4 pt-8 border-primary">
                        <span class="absolute -top-4 left-8 -translate-y-1/2 px-4 py-1 font-bold bg-[#FDD561] rounded">
                            Cuối cùng
                        </span>
                        Hệ thống kiến thức bằng các phần mềm dạng game để ôn luyện từ vựng, ngữ pháp để củng cố
                        kiến thức mà học không nhàm chán
                    </div>
                </div>
                <div class="col col-lg-6">
                    <h3 class="text-2xl !text-secondary mt-16">Phương Pháp</h3>
                    <h2 class="mb-0 uppercase heading_text">
                        Đào tạo
                    </h2>
                    <p class="mb-0 mt-8">
                        Hi Korean đào tạo theo phương pháp Flipped learning - phương pháp hiện đại nhất thế giới hiện
                        nay. Theo phương pháp này, học viên cần xem video bài giảng trước ít nhất 2-3 lần
                        để nắm được bài học trước khi vào. Như vậy, khi thực tế học trên lớp, học viên
                        sẽ được tiếp cận mở rộng nhiều kiến thức từ giáo viên, tiết kiệm thời gian ghi chép
                        so với phương pháp truyền thống.
                    </p>
                    <img class="w-full mt-8" src="{{ asset('assets/images/about/image 111.png') }}" alt="">
                </div>
            </div>
        </div>

        <!-- Giảng viên - Start
        ================================================== -->
        <section class="expect_from_course section_space_lg bg-[#F8F2E6] mt-16" id="lectures">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_heading">
                            <h3 class="text-2xl !text-secondary">Đội ngũ</h3>
                            <h2 class="mb-0 uppercase heading_text">
                                giáo viên
                            </h2>
                        </div>
                    </div>
                    <div class="col">
                        <div class="flex-nowrap justify-center row common_carousel_3col">
                            <div class="overflow-visible col col-lg-4 carousel_item">
                                <div
                                    class="rounded-lg rounded-br-3xl border course_card border-primary hover:bg-alternative-darker hover:shadow-none">
                                    <div class="item_image">
                                        <a class="border !border-gray-300">
                                            <img src="{{ asset('assets/images/img.png') }}"
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
                                            <img src="{{ asset('assets/images/img.png') }}"
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
                                            <img src="{{ asset('assets/images/img.png') }}"
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
                                            <img src="{{ asset('assets/images/img.png') }}"
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

        <!-- Testimonial Section - Start
        ================================================== -->
        <section class="pt-16 pb-48 bg-[#FDD561] testimonial_section section_space_lg">
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

                <div class="row testimonial_carousel mt-24">
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
            <div class="flex max-lg:flex-col flex-nowrap items-center">
                <div class="col col-lg-3 col-md-6">
                    <div class="counter_item border-0 p-4">
                        <div
                            class="max-lg:mx-auto w-20 h-20 rounded-full bg-[#FDD561] flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                      d="M5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V3q0-.425.288-.713T7 2q.425 0 .713.288T8 3v1h8V3q0-.425.288-.713T17 2q.425 0 .713.288T18 3v1h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10ZM5 8h14V6H5v2Zm0 0V6v2Zm7 6q-.425 0-.713-.288T11 13q0-.425.288-.713T12 12q.425 0 .713.288T13 13q0 .425-.288.713T12 14Zm-4 0q-.425 0-.713-.288T7 13q0-.425.288-.713T8 12q.425 0 .713.288T9 13q0 .425-.288.713T8 14Zm8 0q-.425 0-.713-.288T15 13q0-.425.288-.713T16 12q.425 0 .713.288T17 13q0 .425-.288.713T16 14Zm-4 4q-.425 0-.713-.288T11 17q0-.425.288-.713T12 16q.425 0 .713.288T13 17q0 .425-.288.713T12 18Zm-4 0q-.425 0-.713-.288T7 17q0-.425.288-.713T8 16q.425 0 .713.288T9 17q0 .425-.288.713T8 18Zm8 0q-.425 0-.713-.288T15 17q0-.425.288-.713T16 16q.425 0 .713.288T17 17q0 .425-.288.713T16 18Z"/>
                            </svg>
                        </div>
                        <h3 class="counter_value whitespace-nowrap max-lg:text-center">
                            <span class="counter_value_text text-4xl">5</span><span class="text-4xl">&nbsp;năm</span>
                        </h3>
                        <p class="mb-0 line-clamp-2 min-h-[3rem]">
                            Hoạt động & Phát triển
                        </p>
                    </div>
                </div>
                <div class="w-0.5 h-20 bg-gray-300 max-lg:hidden"></div>
                <div class="col col-lg-3 col-md-6">
                    <div class="counter_item border-0 p-4">
                        <div
                            class="max-lg:mx-auto w-20 h-20 rounded-full bg-[#FDD561] flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                      d="M5.85 17.1q1.275-.975 2.85-1.538T12 15q1.725 0 3.3.563t2.85 1.537q.875-1.025 1.363-2.325T20 12q0-3.325-2.337-5.663T12 4Q8.675 4 6.337 6.337T4 12q0 1.475.488 2.775T5.85 17.1ZM12 13q-1.475 0-2.488-1.012T8.5 9.5q0-1.475 1.012-2.488T12 6q1.475 0 2.488 1.012T15.5 9.5q0 1.475-1.012 2.488T12 13Zm0 9q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22Zm0-2q1.325 0 2.5-.388t2.15-1.112q-.975-.725-2.15-1.113T12 17q-1.325 0-2.5.388T7.35 18.5q.975.725 2.15 1.113T12 20Zm0-9q.65 0 1.075-.425T13.5 9.5q0-.65-.425-1.075T12 8q-.65 0-1.075.425T10.5 9.5q0 .65.425 1.075T12 11Zm0-1.5Zm0 9Z"/>
                            </svg>
                        </div>
                        <h3 class="counter_value whitespace-nowrap max-lg:text-center">
                            <span class="counter_value_text text-4xl">125000</span><span class="text-4xl">+</span>
                        </h3>
                        <p class="mb-0 line-clamp-2 min-h-[3rem]">
                            Học viên theo học
                        </p>
                    </div>
                </div>
                <div class="w-0.5 h-20 bg-gray-300 max-lg:hidden"></div>
                <div class="col col-lg-3 col-md-6">
                    <div class="counter_item border-0 p-4">
                        <div
                            class="max-lg:mx-auto w-20 h-20 rounded-full bg-[#FDD561] flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                      d="M4 11.333L0 9l12-7l12 7v8.5h-2v-7.333l-2 1.166v6.678l-.223.275A9.983 9.983 0 0 1 12 22a9.983 9.983 0 0 1-7.777-3.714L4 18.011v-6.678ZM6 12.5v4.792A7.979 7.979 0 0 0 12 20a7.978 7.978 0 0 0 6-2.708V12.5L12 16l-6-3.5ZM3.97 9L12 13.685L20.03 9L12 4.315L3.97 9Z"/>
                            </svg>
                        </div>
                        <h3 class="counter_value whitespace-nowrap max-lg:text-center">
                            <span class="counter_value_text text-4xl">88000</span>
                        </h3>
                        <p class="mb-0 line-clamp-2 min-h-[3rem]">
                            Học viên đỗ Topik trên 4.0
                        </p>
                    </div>
                </div>
                <div class="w-0.5 h-20 bg-gray-300 max-lg:hidden"></div>
                <div class="col col-lg-3 col-md-6">
                    <div class="counter_item border-0 p-4">
                        <div
                            class="max-lg:mx-auto w-20 h-20 rounded-full bg-[#FDD561] flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                      d="M12 20.325q-.35 0-.713-.125t-.637-.4l-1.725-1.575q-2.65-2.425-4.788-4.813T2 8.15Q2 5.8 3.575 4.225T7.5 2.65q1.325 0 2.5.562t2 1.538q.825-.975 2-1.538t2.5-.562q2.35 0 3.925 1.575T22 8.15q0 2.875-2.125 5.275T15.05 18.25l-1.7 1.55q-.275.275-.637.4t-.713.125ZM11.05 6.75q-.725-1.025-1.55-1.562t-2-.538q-1.5 0-2.5 1t-1 2.5q0 1.3.925 2.763t2.213 2.837q1.287 1.375 2.65 2.575T12 18.3q.85-.775 2.213-1.975t2.65-2.575q1.287-1.375 2.212-2.837T20 8.15q0-1.5-1-2.5t-2.5-1q-1.175 0-2 .537T12.95 6.75q-.175.25-.425.375T12 7.25q-.275 0-.525-.125t-.425-.375Zm.95 4.725Z"/>
                            </svg>
                        </div>
                        <h3 class="counter_value whitespace-nowrap max-lg:text-center">
                            <span class="counter_value_text text-4xl">75</span><span class="text-4xl">%</span>
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

        <div class="h-10"></div>

        <script>
            if (window.location.hash === "#lectures") {
                // Scroll to lectures section
                window.scrollTo(0, document.getElementById("lectures").offsetTop);
            }
        </script>
    </main>
    @endvolt
</x-layouts.app>


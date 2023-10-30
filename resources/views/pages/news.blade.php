<?php

\Laravel\Folio\name('news');

?>

<x-layouts.app>
    @volt
    <main class="page_content">
        <div class="container mx-auto">
            <div class="flex items-center py-10">
                <a href="{{ route('home') }}" class="text-gray-500">Trang chủ</a>
                <i class="mx-2 fas fa-chevron-right"></i>
                <span>Tin tức</span>
            </div>
            <div class="flex grow flex-col items-start justify-center">
                <h1 class="uppercase !text-5xl text-black !leading-[4.5rem]">
                    Tin tức nổi bật
                </h1>
            </div>
        </div>

        <!-- Về chúng tôi - Start
        ================================================== -->
        <section class="expect_from_course section_space_lg py-16 bg-[#F8F2E6]">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="w-full bg-white rounded-xl p-4 shadow-xl flex max-lg:flex-col lg:items-center">
                            <img src="{{ asset('assets/images/about/image 111.png') }}"
                                 class="w-full lg:w-1/3 max-lg:mb-8" alt="">
                            <div class="w-full lg:w-2/3 lg:px-8">
                                <a href="">
                                    <h2 class="text-3xl line-clamp-2">[2023] Lộ trình và Điều kiện du học Hàn Quốc thay
                                        đổi gì?</h2>
                                </a>
                                <div class="flex items-center gap-2 text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                              d="M5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10ZM5 8h14V6H5v2Zm0 0V6v2Z"/>
                                    </svg>
                                    20/12/2020
                                </div>
                                <p class="text-muted line-clamp-5 mt-4">
                                    Điều kiện du học Hàn Quốc 2023 là gì? Chắc hẳn tất cả các bạn du học sinh Việt Nam
                                    vô cùng quan tâm và muốn tìm hiểu thật kỹ để có những chuẩn bị tốt nhất trước khi du
                                    học Hàn Quốc: Điều kiện sức khỏe, điều kiện về học vấn
                                </p>
                                <a wire:navigate class="border btn btn_primary border-primary"
                                   href="{{ route('about_us') }}">
                                    <span>
                                        <small>ĐỌC THÊM</small>
                                        <small>ĐỌC THÊM</small>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Về chúng tôi - End
        ================================================== -->

        <div class="container">
            <div class="row">
                <div class="col py-16 grid lg:grid-cols-3 gap-8 pb-4">
                    <div class="overflow-visible course_card border-0 shadow-xl p-4 group">
                        <div class="item_image">
                            <a class=""
                               href="{{ route('courses.show', ['id' => 'offline']) }}"
                               data-cursor-text="View">
                                <img
                                    src="{{ asset('assets/images/about/image 110.png') }}"
                                    alt="Hi Korean">
                            </a>
                        </div>
                        <div class="item_content">
                            <h3 class="py-0 item_title">
                                <a href="{{ route('courses.show', ['id' => 'offline']) }}"
                                   class="flex items-baseline gap-2">
                                    <div
                                        class="line-clamp-3 group-hover:text-secondary transition-all min-h-[4.875rem]">
                                        20 mẫu câu phỏng vấn xin việc tiếng Hàn và câu trả lời ngành phiên dịch
                                    </div>
                                </a>
                            </h3>
                            <div class="flex items-center justify-between mt-8">
                                <div class="flex items-center gap-2 text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                              d="M5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10ZM5 8h14V6H5v2Zm0 0V6v2Z"/>
                                    </svg>
                                    20/12/2020
                                </div>

                                <a class="px-2 py-2 btn btn_primary border border-primary"
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
                    <div class="overflow-visible course_card border-0 shadow-xl p-4 group">
                        <div class="item_image">
                            <a class=""
                               href="{{ route('courses.show', ['id' => 'offline']) }}"
                               data-cursor-text="View">
                                <img
                                    src="{{ asset('assets/images/about/image 110.png') }}"
                                    alt="Hi Korean">
                            </a>
                        </div>
                        <div class="item_content">
                            <h3 class="py-0 item_title">
                                <a href="{{ route('courses.show', ['id' => 'offline']) }}"
                                   class="flex items-baseline gap-2">
                                    <div
                                        class="line-clamp-3 group-hover:text-secondary transition-all min-h-[4.875rem]">
                                        20 mẫu câu phỏng vấn
                                    </div>
                                </a>
                            </h3>
                            <div class="flex items-center justify-between mt-8">
                                <div class="flex items-center gap-2 text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                              d="M5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10ZM5 8h14V6H5v2Zm0 0V6v2Z"/>
                                    </svg>
                                    20/12/2020
                                </div>

                                <a class="px-2 py-2 btn btn_primary border border-primary"
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
                    <div class="overflow-visible course_card border-0 shadow-xl p-4 group">
                        <div class="item_image">
                            <a class=""
                               href="{{ route('courses.show', ['id' => 'offline']) }}"
                               data-cursor-text="View">
                                <img
                                    src="{{ asset('assets/images/about/image 110.png') }}"
                                    alt="Hi Korean">
                            </a>
                        </div>
                        <div class="item_content">
                            <h3 class="py-0 item_title">
                                <a href="{{ route('courses.show', ['id' => 'offline']) }}"
                                   class="flex items-baseline gap-2">
                                    <div
                                        class="line-clamp-3 group-hover:text-secondary transition-all min-h-[4.875rem]">
                                        20 mẫu câu phỏng vấn xin việc tiếng Hàn và câu trả lời ngành phiên dịch
                                    </div>
                                </a>
                            </h3>
                            <div class="flex items-center justify-between mt-8">
                                <div class="flex items-center gap-2 text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                              d="M5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10ZM5 8h14V6H5v2Zm0 0V6v2Z"/>
                                    </svg>
                                    20/12/2020
                                </div>

                                <a class="px-2 py-2 btn btn_primary border border-primary"
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
                    <div class="overflow-visible course_card border-0 shadow-xl p-4 group">
                        <div class="item_image">
                            <a class=""
                               href="{{ route('courses.show', ['id' => 'offline']) }}"
                               data-cursor-text="View">
                                <img
                                    src="{{ asset('assets/images/about/image 110.png') }}"
                                    alt="Hi Korean">
                            </a>
                        </div>
                        <div class="item_content">
                            <h3 class="py-0 item_title">
                                <a href="{{ route('courses.show', ['id' => 'offline']) }}"
                                   class="flex items-baseline gap-2">
                                    <div
                                        class="line-clamp-3 group-hover:text-secondary transition-all min-h-[4.875rem]">
                                        20 mẫu câu phỏng vấn xin việc tiếng Hàn và câu trả lời ngành phiên dịch
                                    </div>
                                </a>
                            </h3>
                            <div class="flex items-center justify-between mt-8">
                                <div class="flex items-center gap-2 text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                              d="M5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10ZM5 8h14V6H5v2Zm0 0V6v2Z"/>
                                    </svg>
                                    20/12/2020
                                </div>

                                <a class="px-2 py-2 btn btn_primary border border-primary"
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
                    <div class="overflow-visible course_card border-0 shadow-xl p-4 group">
                        <div class="item_image">
                            <a class=""
                               href="{{ route('courses.show', ['id' => 'offline']) }}"
                               data-cursor-text="View">
                                <img
                                    src="{{ asset('assets/images/about/image 110.png') }}"
                                    alt="Hi Korean">
                            </a>
                        </div>
                        <div class="item_content">
                            <h3 class="py-0 item_title">
                                <a href="{{ route('courses.show', ['id' => 'offline']) }}"
                                   class="flex items-baseline gap-2">
                                    <div
                                        class="line-clamp-3 group-hover:text-secondary transition-all min-h-[4.875rem]">
                                        20 mẫu câu phỏng vấn xin việc tiếng Hàn và câu trả lời ngành phiên dịch
                                    </div>
                                </a>
                            </h3>
                            <div class="flex items-center justify-between mt-8">
                                <div class="flex items-center gap-2 text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                              d="M5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10ZM5 8h14V6H5v2Zm0 0V6v2Z"/>
                                    </svg>
                                    20/12/2020
                                </div>

                                <a class="px-2 py-2 btn btn_primary border border-primary"
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
                    <div class="overflow-visible course_card border-0 shadow-xl p-4 group">
                        <div class="item_image">
                            <a class=""
                               href="{{ route('courses.show', ['id' => 'offline']) }}"
                               data-cursor-text="View">
                                <img
                                    src="{{ asset('assets/images/about/image 110.png') }}"
                                    alt="Hi Korean">
                            </a>
                        </div>
                        <div class="item_content">
                            <h3 class="py-0 item_title">
                                <a href="{{ route('courses.show', ['id' => 'offline']) }}"
                                   class="flex items-baseline gap-2">
                                    <div
                                        class="line-clamp-3 group-hover:text-secondary transition-all min-h-[4.875rem]">
                                        20 mẫu câu phỏng vấn xin việc tiếng Hàn và câu trả lời ngành phiên dịch
                                    </div>
                                </a>
                            </h3>
                            <div class="flex items-center justify-between mt-8">
                                <div class="flex items-center gap-2 text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                              d="M5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10ZM5 8h14V6H5v2Zm0 0V6v2Z"/>
                                    </svg>
                                    20/12/2020
                                </div>

                                <a class="px-2 py-2 btn btn_primary border border-primary"
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
                    <div class="overflow-visible course_card border-0 shadow-xl p-4 group">
                        <div class="item_image">
                            <a class=""
                               href="{{ route('courses.show', ['id' => 'offline']) }}"
                               data-cursor-text="View">
                                <img
                                    src="{{ asset('assets/images/about/image 110.png') }}"
                                    alt="Hi Korean">
                            </a>
                        </div>
                        <div class="item_content">
                            <h3 class="py-0 item_title">
                                <a href="{{ route('courses.show', ['id' => 'offline']) }}"
                                   class="flex items-baseline gap-2">
                                    <div
                                        class="line-clamp-3 group-hover:text-secondary transition-all min-h-[4.875rem]">
                                        20 mẫu câu phỏng vấn xin việc tiếng Hàn và câu trả lời ngành phiên dịch
                                    </div>
                                </a>
                            </h3>
                            <div class="flex items-center justify-between mt-8">
                                <div class="flex items-center gap-2 text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                              d="M5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10ZM5 8h14V6H5v2Zm0 0V6v2Z"/>
                                    </svg>
                                    20/12/2020
                                </div>

                                <a class="px-2 py-2 btn btn_primary border border-primary"
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
                    <div class="overflow-visible course_card border-0 shadow-xl p-4 group">
                        <div class="item_image">
                            <a class=""
                               href="{{ route('courses.show', ['id' => 'offline']) }}"
                               data-cursor-text="View">
                                <img
                                    src="{{ asset('assets/images/about/image 110.png') }}"
                                    alt="Hi Korean">
                            </a>
                        </div>
                        <div class="item_content">
                            <h3 class="py-0 item_title">
                                <a href="{{ route('courses.show', ['id' => 'offline']) }}"
                                   class="flex items-baseline gap-2">
                                    <div
                                        class="line-clamp-3 group-hover:text-secondary transition-all min-h-[4.875rem]">
                                        20 mẫu câu phỏng vấn xin việc tiếng Hàn và câu trả lời ngành phiên dịch
                                    </div>
                                </a>
                            </h3>
                            <div class="flex items-center justify-between mt-8">
                                <div class="flex items-center gap-2 text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                              d="M5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10ZM5 8h14V6H5v2Zm0 0V6v2Z"/>
                                    </svg>
                                    20/12/2020
                                </div>

                                <a class="px-2 py-2 btn btn_primary border border-primary"
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
                    <div class="overflow-visible course_card border-0 shadow-xl p-4 group">
                        <div class="item_image">
                            <a class=""
                               href="{{ route('courses.show', ['id' => 'offline']) }}"
                               data-cursor-text="View">
                                <img
                                    src="{{ asset('assets/images/about/image 110.png') }}"
                                    alt="Hi Korean">
                            </a>
                        </div>
                        <div class="item_content">
                            <h3 class="py-0 item_title">
                                <a href="{{ route('courses.show', ['id' => 'offline']) }}"
                                   class="flex items-baseline gap-2">
                                    <div
                                        class="line-clamp-3 group-hover:text-secondary transition-all min-h-[4.875rem]">
                                        20 mẫu câu phỏng vấn xin việc tiếng Hàn và câu trả lời ngành phiên dịch
                                    </div>
                                </a>
                            </h3>
                            <div class="flex items-center justify-between mt-8">
                                <div class="flex items-center gap-2 text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                              d="M5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10ZM5 8h14V6H5v2Zm0 0V6v2Z"/>
                                    </svg>
                                    20/12/2020
                                </div>

                                <a class="px-2 py-2 btn btn_primary border border-primary"
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

                <div class="col flex items-center justify-center gap-4 mb-16">
                    <a href="">1</a>
                    <a href="">2</a>
                    <a href="">3</a>
                    <a href="">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </main>
    @endvolt
</x-layouts.app>

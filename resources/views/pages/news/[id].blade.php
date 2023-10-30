<?php

\Laravel\Folio\name('news.show')

?>

<x-layouts.app>
    @volt
    <main class="page_content">
        <div class="container">
            <div class="row mt-16">
                <div class="col">
                    <h1 class="px-4 lg:px-32 text-center uppercase leading-[1.5]">
                        [2023] Lộ trình và Điều kiện du học Hàn Quốc thay đổi gì?
                    </h1>
                </div>
            </div>
        </div>

        <div class="row mt-16">
            <div class="col">
                <img src="{{ asset('assets/images/banner/banner.png') }}" class="w-full" alt="">
            </div>
        </div>

        <div class="container">
            <div class="row mt-8">
                <div class="col">
                    <div class="flex items-center gap-2 text-muted">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                  d="M5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10ZM5 8h14V6H5v2Zm0 0V6v2Z"/>
                        </svg>
                        20/12/2020
                    </div>

                    <p class="font-bold mt-2">Lộ trình và điều kiện du học Hàn Quốc 2022-2023 là gì ? Lý do bạn không
                        nên đi theo lối mòn khi
                        học đại học cao đẳng ở Việt Nam là gì? Sau đây Nhân Văn sẽ cung cấp thông tin về điều kiện và lộ
                        trình để bạn có thể hiểu được lý do tại sao không nên học đại học, cao đẳng ở Việt Nam.</p>

                    <article class="mt-8">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At dolor et eveniet id nulla odio
                        possimus similique suscipit veniam? Autem ipsum, voluptates. Doloribus esse eum itaque quaerat
                        quidem voluptatem voluptatibus?
                    </article>
                </div>

                <div class="col">
                    <h2 class="mt-24">BÀI VIẾT KHÁC</h2>
                </div>

                <div class="col py-16 grid lg:grid-cols-3 gap-8 pb-16 ">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                         viewBox="0 0 24 24">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                         viewBox="0 0 24 24">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                         viewBox="0 0 24 24">
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
            </div>
        </div>
    </main>
    @endvolt
</x-layouts.app>

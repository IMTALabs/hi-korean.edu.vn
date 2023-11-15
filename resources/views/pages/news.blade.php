<?php

\Laravel\Folio\name('news');

\Artesaos\SEOTools\Facades\SEOMeta::setTitle('Tin tức');
\Artesaos\SEOTools\Facades\SEOMeta::setDescription('TRUNG TÂM TIẾNG HÀN HI KOREAN');
\Artesaos\SEOTools\Facades\SEOMeta::setCanonical(url()->current());

\Artesaos\SEOTools\Facades\OpenGraph::setDescription('TRUNG TÂM TIẾNG HÀN HI KOREAN');
\Artesaos\SEOTools\Facades\OpenGraph::setTitle('Tin tức');
\Artesaos\SEOTools\Facades\OpenGraph::setUrl(url()->current());
\Artesaos\SEOTools\Facades\OpenGraph::addProperty('type', 'articles');
\Artesaos\SEOTools\Facades\OpenGraph::addImage(asset('assets/images/banner/banner.png'));

\Artesaos\SEOTools\Facades\JsonLd::setTitle('Tin tức');
\Artesaos\SEOTools\Facades\JsonLd::setDescription('TRUNG TÂM TIẾNG HÀN HI KOREAN');
\Artesaos\SEOTools\Facades\JsonLd::addImage(asset('assets/images/banner/banner.png'));

$news = \Livewire\Volt\computed(fn() => \App\Models\Post::orderBy('updated_at', 'desc')->paginate(10));

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
                            <img src="{{ Storage::url($this->news->first()->image) }}"
                                 class="w-full lg:w-1/3 max-lg:mb-8 object-cover" alt="">
                            <div class="w-full lg:w-2/3 lg:px-8">
                                <a href="{{ route('news.show', ['id' => $this->news->first()->id]) }}">
                                    <h2 class="text-3xl line-clamp-2">{{ $this->news->first()->title }}</h2>
                                </a>
                                <div class="flex items-center gap-2 text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                              d="M5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10ZM5 8h14V6H5v2Zm0 0V6v2Z"/>
                                    </svg>
                                    {{ $this->news->first()->created_at->format('d/m/Y') }}
                                </div>
                                <p class="text-muted line-clamp-5 mt-4">
                                    {{ $this->news->first()->description }}
                                </p>
                                <a wire:navigate class="border btn btn_primary border-primary"
                                   href="{{ route('news.show', ['id' => $this->news->first()->id]) }}">
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
                    @foreach($this->news->skip(1) as $new)
                        <div class="overflow-visible course_card border-0 shadow-xl p-4 group">
                            <div class="item_image">
                                <a class=""
                                   href="{{ route('news.show', ['id' => $new->id]) }}"
                                   data-cursor-text="View">
                                    <img
                                        src="{{ Storage::url($new->image) }}"
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
                    @endforeach
                </div>
            </div>
        </div>

        <div class="flex justify-center mx-auto py-8">
            {{ $this->news->links() }}
        </div>
    </main>
    @endvolt
</x-layouts.app>

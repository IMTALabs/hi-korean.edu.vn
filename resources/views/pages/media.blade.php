<?php

\Laravel\Folio\name('media');

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
            speed: 500
        });
    </script>
@endpush

<x-layouts.app>
    @volt
    <main class="page_content min-h-[calc(100vh-504px)]">
        <div class="grow">
            <section class="courses_section section_space_lg mt-12">
                <div class="container">
                    <div class="section_heading">
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col col-lg-6">
                                <h2 class="heading_text mb-0">
                                    Hoạt động
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="pswp-gallery pswp-gallery--single-column grid grid-cols-2 lg:grid-cols-4 gap-4"
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
                </div>
            </section>
        </div>
    </main>
    @endvolt
</x-layouts.app>

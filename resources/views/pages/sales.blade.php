<?php

\Laravel\Folio\name('sales');

\Artesaos\SEOTools\Facades\SEOMeta::setTitle('Ưu đãi');
\Artesaos\SEOTools\Facades\SEOMeta::setDescription('TRUNG TÂM TIẾNG HÀN HI KOREAN');
\Artesaos\SEOTools\Facades\SEOMeta::setCanonical(url()->current());

\Artesaos\SEOTools\Facades\OpenGraph::setDescription('TRUNG TÂM TIẾNG HÀN HI KOREAN');
\Artesaos\SEOTools\Facades\OpenGraph::setTitle('Ưu đãi');
\Artesaos\SEOTools\Facades\OpenGraph::setUrl(url()->current());
\Artesaos\SEOTools\Facades\OpenGraph::addProperty('type', 'articles');
\Artesaos\SEOTools\Facades\OpenGraph::addImage(asset('assets/images/banner/banner.png'));

\Artesaos\SEOTools\Facades\JsonLd::setTitle('Ưu đãi');
\Artesaos\SEOTools\Facades\JsonLd::setDescription('TRUNG TÂM TIẾNG HÀN HI KOREAN');
\Artesaos\SEOTools\Facades\JsonLd::addImage(asset('assets/images/banner/banner.png'));

?>

<x-layouts.app>
    @volt
    <main class="page_content">
        <!-- Pricing Section - Start
        ================================================== -->
        <section class="pricing_section section_space_lg pb-0">
            <div class="container decoration_wrap">
                <div class="section_heading text-center">
                    <h1 class="heading_text mb-0">
                        Ưu đãi nổi bật
                    </h1>
                </div>

                <div class="pricing_cards_wrapper row align-items-center">
                    <div class="col col-lg-4">
                        <div class="pricing_card text-center tilt">
                            <h3 class="card_heading">Offline Sơ Cấp</h3>
                            <div class="pricing_wrap">
                                <span class="price_value">1.500.000</span>
                                <small class="d-block text-decoration-line-through">3.000.000đ</small>
                            </div>
                            <div class="btn_wrap pb-0">
                                <a class="btn border_dark" href="{{ route('contact') }}">
                                    <span>
                                        <small>Đăng ký ngay</small>
                                        <small>Đăng ký ngay</small>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4">
                        <div class="pricing_card text-center bg_dark tilt">
                            <div class="card_badge">recommended</div>
                            <h3 class="card_heading">Luyện thi TOPIK</h3>
                            <div class="pricing_wrap">
                                <span class="price_value">1.500.000</span>
                                <small class="d-block text-decoration-line-through">3.000.000đ</small>
                            </div>
                            <div class="btn_wrap pb-0">
                                <a class="btn btn_primary" href="{{ route('contact') }}">
                                    <span>
                                        <small>Đăng ký ngay</small>
                                        <small>Đăng ký ngay</small>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4">
                        <div class="pricing_card text-center tilt">
                            <h3 class="card_heading">Online Sơ Cấp</h3>
                            <div class="pricing_wrap">
                                <span class="price_value">1.500.000</span>
                                <small class="d-block text-decoration-line-through">3.000.000đ</small>
                            </div>
                            <div class="btn_wrap pb-0">
                                <a class="btn border_dark" href="{{ route('contact') }}">
                                    <span>
                                        <small>Đăng ký ngay</small>
                                        <small>Đăng ký ngay</small>
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
        <!-- Pricing Section - End
        ================================================== -->

        <!-- FAQ Section - Start
        ================================================== -->
        <section class="faq_section section_space_lg">
            <div class="container">
                <div class="section_heading text-center mb-3">
                    <div class="row justify-content-center">
                        <div class="col col-lg-7">
                            <h2 class="heading_text">
                                Câu hỏi thường gặp khi lựa chọn khóa học
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col col-lg-6">
                        <div class="accordion" id="faq_accordion_1">
                            <div class="accordion-item">
                                <div class="accordion-button" role="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapse_one" aria-expanded="true">
                                    How Do I Select a Course?
                                </div>
                                <div id="collapse_one" class="accordion-collapse collapse show"
                                     data-bs-parent="#faq_accordion_1">
                                    <div class="accordion-body">
                                        <p class="mb-0">
                                            Dictum non consectetur a erat. Odio morbi quis commodo odio aenean. Blandit
                                            libero
                                            volutpat sed cras ornare arcu. Tempus urna et pharetra pharetra. Enim ut sem
                                            viverra
                                            aliquet. Nisl vel pretium lectus quam id. Augue eget arcu dictum varius duis
                                            at
                                            consectetur. Egestas dui id ornare arcu. Nec ullamcorper sit amet risus
                                            nullam
                                            eget
                                            felis eget nunc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapse_two" aria-expanded="false">
                                    How Do I Access My Course?
                                </div>
                                <div id="collapse_two" class="accordion-collapse collapse"
                                     data-bs-parent="#faq_accordion_1">
                                    <div class="accordion-body">
                                        <p class="mb-0">
                                            Dictum non consectetur a erat. Odio morbi quis commodo odio aenean. Blandit
                                            libero
                                            volutpat sed cras ornare arcu. Tempus urna et pharetra pharetra. Enim ut sem
                                            viverra
                                            aliquet. Nisl vel pretium lectus quam id. Augue eget arcu dictum varius duis
                                            at
                                            consectetur. Egestas dui id ornare arcu. Nec ullamcorper sit amet risus
                                            nullam
                                            eget
                                            felis eget nunc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapse_three" aria-expanded="false">
                                    Do I Receive Anything After I Complete a Course?
                                </div>
                                <div id="collapse_three" class="accordion-collapse collapse"
                                     data-bs-parent="#faq_accordion_1">
                                    <div class="accordion-body">
                                        <p class="mb-0">
                                            Dictum non consectetur a erat. Odio morbi quis commodo odio aenean. Blandit
                                            libero
                                            volutpat sed cras ornare arcu. Tempus urna et pharetra pharetra. Enim ut sem
                                            viverra
                                            aliquet. Nisl vel pretium lectus quam id. Augue eget arcu dictum varius duis
                                            at
                                            consectetur. Egestas dui id ornare arcu. Nec ullamcorper sit amet risus
                                            nullam
                                            eget
                                            felis eget nunc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapse_four" aria-expanded="false">
                                    When should I register?
                                </div>
                                <div id="collapse_four" class="accordion-collapse collapse"
                                     data-bs-parent="#faq_accordion_1">
                                    <div class="accordion-body">
                                        <p class="mb-0">
                                            Dictum non consectetur a erat. Odio morbi quis commodo odio aenean. Blandit
                                            libero
                                            volutpat sed cras ornare arcu. Tempus urna et pharetra pharetra. Enim ut sem
                                            viverra
                                            aliquet. Nisl vel pretium lectus quam id. Augue eget arcu dictum varius duis
                                            at
                                            consectetur. Egestas dui id ornare arcu. Nec ullamcorper sit amet risus
                                            nullam
                                            eget
                                            felis eget nunc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-lg-6">
                        <div class="accordion" id="faq_accordion_2">
                            <div class="accordion-item">
                                <div class="accordion-button" role="button" data-bs-toggle="collapse"
                                     data-bs-target="#a2_collapse_one" aria-expanded="true">
                                    How Does Online Learning Work?
                                </div>
                                <div id="a2_collapse_one" class="accordion-collapse collapse show"
                                     data-bs-parent="#faq_accordion_2">
                                    <div class="accordion-body">
                                        <p class="mb-0">
                                            Dictum non consectetur a erat. Odio morbi quis commodo odio aenean. Blandit
                                            libero
                                            volutpat sed cras ornare arcu. Tempus urna et pharetra pharetra. Enim ut sem
                                            viverra
                                            aliquet. Nisl vel pretium lectus quam id. Augue eget arcu dictum varius duis
                                            at
                                            consectetur. Egestas dui id ornare arcu. Nec ullamcorper sit amet risus
                                            nullam
                                            eget
                                            felis eget nunc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                     data-bs-target="#a2_collapse_two" aria-expanded="false">
                                    Can I Take More Than One Course at a Time?
                                </div>
                                <div id="a2_collapse_two" class="accordion-collapse collapse"
                                     data-bs-parent="#faq_accordion_2">
                                    <div class="accordion-body">
                                        <p class="mb-0">
                                            Dictum non consectetur a erat. Odio morbi quis commodo odio aenean. Blandit
                                            libero
                                            volutpat sed cras ornare arcu. Tempus urna et pharetra pharetra. Enim ut sem
                                            viverra
                                            aliquet. Nisl vel pretium lectus quam id. Augue eget arcu dictum varius duis
                                            at
                                            consectetur. Egestas dui id ornare arcu. Nec ullamcorper sit amet risus
                                            nullam
                                            eget
                                            felis eget nunc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                     data-bs-target="#a2_collapse_three" aria-expanded="false">
                                    Where can I go for help?
                                </div>
                                <div id="a2_collapse_three" class="accordion-collapse collapse"
                                     data-bs-parent="#faq_accordion_2">
                                    <div class="accordion-body">
                                        <p class="mb-0">
                                            Dictum non consectetur a erat. Odio morbi quis commodo odio aenean. Blandit
                                            libero
                                            volutpat sed cras ornare arcu. Tempus urna et pharetra pharetra. Enim ut sem
                                            viverra
                                            aliquet. Nisl vel pretium lectus quam id. Augue eget arcu dictum varius duis
                                            at
                                            consectetur. Egestas dui id ornare arcu. Nec ullamcorper sit amet risus
                                            nullam
                                            eget
                                            felis eget nunc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                     data-bs-target="#a2_collapse_four" aria-expanded="false">
                                    Convallis posuere morbi leo urna ?
                                </div>
                                <div id="a2_collapse_four" class="accordion-collapse collapse"
                                     data-bs-parent="#faq_accordion_2">
                                    <div class="accordion-body">
                                        <p class="mb-0">
                                            Dictum non consectetur a erat. Odio morbi quis commodo odio aenean. Blandit
                                            libero
                                            volutpat sed cras ornare arcu. Tempus urna et pharetra pharetra. Enim ut sem
                                            viverra
                                            aliquet. Nisl vel pretium lectus quam id. Augue eget arcu dictum varius duis
                                            at
                                            consectetur. Egestas dui id ornare arcu. Nec ullamcorper sit amet risus
                                            nullam
                                            eget
                                            felis eget nunc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ Section - End
        ================================================== -->
    </main>
    @endvolt
</x-layouts.app>

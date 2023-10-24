<?php

\Laravel\Folio\name('about_us');

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

?>

<x-layouts.app>
    @volt
    <main class="page_content">
        <!-- Page Section - Start
        ================================================== -->
        <section class="page_banner mt-40">
            <div class="container">
                <div class="content_wrapper"
                     style="background-image: url('assets/images/banner/page_banner_image.png');">
                    <div class="row align-items-center">
                        <div class="col col-lg-6">
                            <ul class="breadcrumb_nav unordered_list">
                                <li><a href="{{ route('home') }}">Trang chủ</a></li>
                                <li>Về chúng tôi</li>
                            </ul>
                            <h1 class="page_title">Hi Korean</h1>
                            <p class="page_description">
                                Với kinh nghiệm 6 năm trong lĩnh vực giảng dạy tiếng Hàn, HI KOREAN đã và đang là một
                                trong
                                những trung tâm đào tạo tiếng Hàn uy tín và chất lượng.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Section - End
        ================================================== -->

        <!-- Courses Info Section - Start
        ================================================== -->
        <section class="courses_info_section section_space_lg pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col col-lg-6 -mt-8">
                        <div class="image_widget">
                            <img src="http://127.0.0.1:8000/assets/images/about/about-usus.jpeg"
                                 alt="Collab – Online Learning Platform">
                        </div>
                    </div>
                    <div class="col col-lg-6">
                        <div class="content_wrap ps-lg-3">
                            <div class="section_heading">
                                <h2 class="heading_text">
                                    Toàn diện cho người mới bắt đầu
                                </h2>
                                <p class="heading_description mb-0">
                                    Hoạt động trong lĩnh vực giáo dục nhiều năm, Hi Korean hiểu rõ tầm quan trọng của
                                    đạo
                                    đức nghề nghiệp trong
                                    quá trình xây dựng và phát triển thương hiệu.<br><br>
                                    Không đặt mục đích lợi nhuận lên hàng đầu, Hi Korean hướng tới cái đích vừa đảm bảo
                                    quyền lợi cho học viên,
                                    vừa khẳng định được uy tín của một đơn vị đào tạo top đầu.<br><br>
                                    Kim chỉ nam đó cũng chính là bí quyết giúp Hi Korean tồn tại và phát triển trong
                                    lĩnh
                                    vực giáo dục cạnh tranh và
                                    đào thải khốc liệt, ngày càng nhận được nhiều sự yêu quý và tín nhiệm của các bạn
                                    học
                                    viên.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Courses Info Section - End
        ================================================== -->

        <!-- Policy Section - Start
        ================================================== -->
        <section class="policy_section section_space_lg">
            <div class="container position-relative">
                <div class="section_heading">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col">
                            <h2 class="heading_text mb-lg-0">
                                Quy trình dạy và học cụ thể
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-lg-3 col-md-6">
                        <div class="iconbox_item">
                            <div class="title_wrap">
                                <div class="item_icon bg_dark">
                                    <i class="fas fa-book-open"></i>
                                </div>
                                <h3 class="item_title mb-0">
                                    <span class="d-block">Trước buổi học</span>
                                </h3>
                            </div>
                            <p class="mb-0">
                                Giáo viên gửi video bài giảng tổng quan trước 15p để các bạn xem và ghi nhớ
                                lần 1
                            </p>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-6">
                        <div class="iconbox_item">
                            <div class="title_wrap">
                                <div class="item_icon bg_dark">
                                    <i class="fas fa-code-branch"></i>
                                </div>
                                <h3 class="item_title mb-0">
                                    <span class="d-block">Trong buổi học</span>
                                </h3>
                            </div>
                            <p class="mb-0">
                                Giáo viên hệ thống lại toàn bộ kiến thức, giảng kĩ những phần kiến thức
                                khó
                                và dành thời gian luyện phản xạ nghe nói cùng học viên
                            </p>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-6">
                        <div class="iconbox_item">
                            <div class="title_wrap">
                                <div class="item_icon bg_dark">
                                    <i class="fas fa-comment-smile"></i>
                                </div>
                                <h3 class="item_title mb-0">
                                    <span class="d-block">Sau buổi học</span>
                                </h3>
                            </div>
                            <p class="mb-0">
                                Giáo viên hỗ trợ sửa kỹ năng nghe nói cho từng bạn bằng cách ghi âm và
                                viết
                                bài gửi cho GV.
                            </p>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-6">
                        <div class="iconbox_item">
                            <div class="title_wrap">
                                <div class="item_icon bg_dark">
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                                <h3 class="item_title mb-0">
                                    <span class="d-block">Cuối cùng</span>
                                </h3>
                            </div>
                            <p class="mb-0">
                                Hệ thống kiến thức bằng các phần mềm dạng game để ôn luyện từ vựng, ngữ pháp để
                                củng cố kiến thức mà học không nhàm chán
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Policy Section - End
        ================================================== -->

        <!-- Counter Section - Start
        ================================================== -->
        <section class="counter_section bg-alternative section_space_md">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-3 col-md-6">
                        <div class="counter_item">
                            <h3 class="counter_value">
                                <span class="counter_value_text">500</span>
                                <span>+</span>
                            </h3>
                            <p class="mb-0 line-clamp-3 min-h-[4.5rem]">
                                Giờ học đã diễn ra
                            </p>
                        </div>
                    </div>

                    <div class="col col-lg-3 col-md-6">
                        <div class="counter_item">
                            <h3 class="counter_value">
                                <span class="counter_value_text">1500</span>
                                <span>+</span>
                            </h3>
                            <p class="mb-0 line-clamp-3 min-h-[4.5rem]">
                                Học viên hoàn thành chương trình học và có việc làm
                            </p>
                        </div>
                    </div>

                    <div class="col col-lg-3 col-md-6">
                        <div class="counter_item">
                            <h3 class="counter_value">
                                <span class="counter_value_text">10</span>
                            </h3>
                            <p class="mb-0 line-clamp-3 min-h-[4.5rem]">
                                Khóa học đang được vận hành
                            </p>
                        </div>
                    </div>

                    <div class="col col-lg-3 col-md-6">
                        <div class="counter_item">
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
            </div>
        </section>
        <!-- Counter Section - End
        ================================================== -->

        <!-- Testimonial Section - Start
        ================================================== -->
        <section class="testimonial_section section_space_lg py-8">
            <div class="container">
                <div class="section_heading">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col col-lg-6">
                            <h3 class="text-2xl !text-secondary">Cảm Nhận</h3>
                            <h2 class="heading_text mb-0 uppercase">
                                Học viên
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="testimonial_carousel">
                    <div class="common_carousel_1col" data-cursor-text="Drag" data-slick="{'dots': false}">
                        <div class="carousel_item">
                            <div class="testimonial_item_2">
                                <div class="testimonial_image ms-0 aspect-video"
                                     style="background-image: url('assets/images/shape/shape_img_6.svg');">
                                    <lite-youtube class="w-full h-full" videoid="ogfYd705cRs"
                                                  playlabel="Play: Keynote (Google I/O '18)"></lite-youtube>
                                </div>
                                <div class="testimonial_content">
                                    <div class="quote_icon">
                                        <img src="assets/images/icon/icon_quote.svg"
                                             alt="Collab – Online Learning Platform">
                                    </div>
                                    <h3 class="testimonial_title">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolore esse.
                                    </h3>
                                    <p>
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Et netus et malesuada fames ac turpis egestas
                                    </p>
                                    <div class="testimonial_admin">
                                        <div class="admin_image">
                                            <img src="assets/images/meta/testimonial_thumbnail_1.jpg"
                                                 alt="Collab – Online Learning Platform">
                                        </div>
                                        <div class="admin_content">
                                            <h5 class="testimonial_name">Nguyễn Văn A</h5>
                                            <span class="testimonial_designation">Học viên khóa ...</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel_item">
                            <div class="testimonial_item_2">
                                <div class="testimonial_image ms-0 aspect-video"
                                     style="background-image: url('assets/images/shape/shape_img_6.svg');">
                                    {{-- <img src="assets/images/testimonial/testimonial_img_3.png" alt="Collab – Online Learning Platform"> --}}
                                    <lite-youtube class="w-full h-full" videoid="ogfYd705cRs"
                                                  playlabel="Play: Keynote (Google I/O '18)"></lite-youtube>
                                </div>
                                <div class="testimonial_content">
                                    <div class="quote_icon">
                                        <img src="assets/images/icon/icon_quote.svg"
                                             alt="Collab – Online Learning Platform">
                                    </div>
                                    <h3 class="testimonial_title">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolore esse.
                                    </h3>
                                    <p>
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Et netus et malesuada fames ac turpis egestas
                                    </p>
                                    <div class="testimonial_admin">
                                        <div class="admin_image">
                                            <img src="assets/images/meta/testimonial_thumbnail_1.jpg"
                                                 alt="Collab – Online Learning Platform">
                                        </div>
                                        <div class="admin_content">
                                            <h5 class="testimonial_name">Nguyễn Văn A</h5>
                                            <span class="testimonial_designation">Học viên khóa ...</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel_item">
                            <div class="testimonial_item_2">
                                <div class="testimonial_image ms-0 aspect-video"
                                     style="background-image: url('assets/images/shape/shape_img_6.svg');">
                                    {{-- <img src="assets/images/testimonial/testimonial_img_3.png" alt="Collab – Online Learning Platform"> --}}
                                    <lite-youtube class="w-full h-full" videoid="ogfYd705cRs"
                                                  playlabel="Play: Keynote (Google I/O '18)"></lite-youtube>
                                </div>
                                <div class="testimonial_content">
                                    <div class="quote_icon">
                                        <img src="assets/images/icon/icon_quote.svg"
                                             alt="Collab – Online Learning Platform">
                                    </div>
                                    <h3 class="testimonial_title">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolore esse.
                                    </h3>
                                    <p>
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Et netus et malesuada fames ac turpis egestas
                                    </p>
                                    <div class="testimonial_admin">
                                        <div class="admin_image">
                                            <img src="assets/images/meta/testimonial_thumbnail_1.jpg"
                                                 alt="Collab – Online Learning Platform">
                                        </div>
                                        <div class="admin_content">
                                            <h5 class="testimonial_name">Nguyễn Văn A</h5>
                                            <span class="testimonial_designation">Học viên khóa ...</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel_item">
                            <div class="testimonial_item_2">
                                <div class="testimonial_image ms-0 aspect-video"
                                     style="background-image: url('assets/images/shape/shape_img_6.svg');">
                                    {{-- <img src="assets/images/testimonial/testimonial_img_3.png" alt="Collab – Online Learning Platform"> --}}
                                    <lite-youtube class="w-full h-full" videoid="ogfYd705cRs"
                                                  playlabel="Play: Keynote (Google I/O '18)"></lite-youtube>
                                </div>
                                <div class="testimonial_content">
                                    <div class="quote_icon">
                                        <img src="assets/images/icon/icon_quote.svg"
                                             alt="Collab – Online Learning Platform">
                                    </div>
                                    <h3 class="testimonial_title">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolore esse.
                                    </h3>
                                    <p>
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Et netus et malesuada fames ac turpis egestas
                                    </p>
                                    <div class="testimonial_admin">
                                        <div class="admin_image">
                                            <img src="assets/images/meta/testimonial_thumbnail_1.jpg"
                                                 alt="Collab – Online Learning Platform">
                                        </div>
                                        <div class="admin_content">
                                            <h5 class="testimonial_name">Nguyễn Văn A</h5>
                                            <span class="testimonial_designation">Học viên khóa ...</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel_item">
                            <div class="testimonial_item_2">
                                <div class="testimonial_image ms-0 aspect-video"
                                     style="background-image: url('assets/images/shape/shape_img_6.svg');">
                                    {{-- <img src="assets/images/testimonial/testimonial_img_3.png" alt="Collab – Online Learning Platform"> --}}
                                    <lite-youtube class="w-full h-full" videoid="ogfYd705cRs"
                                                  playlabel="Play: Keynote (Google I/O '18)"></lite-youtube>
                                </div>
                                <div class="testimonial_content">
                                    <div class="quote_icon">
                                        <img src="assets/images/icon/icon_quote.svg"
                                             alt="Collab – Online Learning Platform">
                                    </div>
                                    <h3 class="testimonial_title">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolore esse.
                                    </h3>
                                    <p>
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Et netus et malesuada fames ac turpis egestas
                                    </p>
                                    <div class="testimonial_admin">
                                        <div class="admin_image">
                                            <img src="assets/images/meta/testimonial_thumbnail_1.jpg"
                                                 alt="Collab – Online Learning Platform">
                                        </div>
                                        <div class="admin_content">
                                            <h5 class="testimonial_name">Nguyễn Văn A</h5>
                                            <span class="testimonial_designation">Học viên khóa ...</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Section - End
        ================================================== -->

        <!-- FAQ Section - Start
        ================================================== -->
        <section class="faq_section section_space_lg">
            <div class="container">
                <div class="section_heading text-center mb-3">
                    <div class="row justify-content-center">
                        <div class="col col-lg-7">
                            <h2 class="heading_text mb-0">
                                Câu hỏi thường gặp
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col col-lg-10">
                        <div class="accordion" id="faq_accordion">
                            <div class="accordion-item">
                                <div class="accordion-button" role="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapse_one" aria-expanded="true">
                                    What do Collab courses include?
                                </div>
                                <div id="collapse_one" class="accordion-collapse collapse show"
                                     data-bs-parent="#faq_accordion">
                                    <div class="accordion-body">
                                        <p class="mb-0">
                                            Dictum non consectetur a erat. Odio morbi quis commodo odio aenean. Blandit
                                            libero volutpat sed cras ornare arcu. Tempus urna et pharetra pharetra. Enim
                                            ut
                                            sem viverra aliquet. Nisl vel pretium lectus quam id. Augue eget arcu dictum
                                            varius duis at consectetur. Egestas dui id ornare arcu. Nec ullamcorper sit
                                            amet
                                            risus nullam eget felis eget nunc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapse_two" aria-expanded="false">
                                    Do I have to start my course at a certain time?
                                </div>
                                <div id="collapse_two" class="accordion-collapse collapse"
                                     data-bs-parent="#faq_accordion">
                                    <div class="accordion-body">
                                        <p class="mb-0">
                                            Dictum non consectetur a erat. Odio morbi quis commodo odio aenean. Blandit
                                            libero volutpat sed cras ornare arcu. Tempus urna et pharetra pharetra. Enim
                                            ut
                                            sem viverra aliquet. Nisl vel pretium lectus quam id. Augue eget arcu dictum
                                            varius duis at consectetur. Egestas dui id ornare arcu. Nec ullamcorper sit
                                            amet
                                            risus nullam eget felis eget nunc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapse_three" aria-expanded="false">
                                    How do I take a Collab course?
                                </div>
                                <div id="collapse_three" class="accordion-collapse collapse"
                                     data-bs-parent="#faq_accordion">
                                    <div class="accordion-body">
                                        <p class="mb-0">
                                            Dictum non consectetur a erat. Odio morbi quis commodo odio aenean. Blandit
                                            libero volutpat sed cras ornare arcu. Tempus urna et pharetra pharetra. Enim
                                            ut
                                            sem viverra aliquet. Nisl vel pretium lectus quam id. Augue eget arcu dictum
                                            varius duis at consectetur. Egestas dui id ornare arcu. Nec ullamcorper sit
                                            amet
                                            risus nullam eget felis eget nunc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapse_four" aria-expanded="false">
                                    Do I receive anything after I complete a course?
                                </div>
                                <div id="collapse_four" class="accordion-collapse collapse"
                                     data-bs-parent="#faq_accordion">
                                    <div class="accordion-body">
                                        <p class="mb-0">
                                            Dictum non consectetur a erat. Odio morbi quis commodo odio aenean. Blandit
                                            libero volutpat sed cras ornare arcu. Tempus urna et pharetra pharetra. Enim
                                            ut
                                            sem viverra aliquet. Nisl vel pretium lectus quam id. Augue eget arcu dictum
                                            varius duis at consectetur. Egestas dui id ornare arcu. Nec ullamcorper sit
                                            amet
                                            risus nullam eget felis eget nunc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapse_five" aria-expanded="false">
                                    Where can I go for help?
                                </div>
                                <div id="collapse_five" class="accordion-collapse collapse"
                                     data-bs-parent="#faq_accordion">
                                    <div class="accordion-body">
                                        <p class="mb-0">
                                            Dictum non consectetur a erat. Odio morbi quis commodo odio aenean. Blandit
                                            libero volutpat sed cras ornare arcu. Tempus urna et pharetra pharetra. Enim
                                            ut
                                            sem viverra aliquet. Nisl vel pretium lectus quam id. Augue eget arcu dictum
                                            varius duis at consectetur. Egestas dui id ornare arcu. Nec ullamcorper sit
                                            amet
                                            risus nullam eget felis eget nunc.
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

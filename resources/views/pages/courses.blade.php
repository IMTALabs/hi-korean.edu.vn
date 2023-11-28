<?php

\Laravel\Folio\name('courses');

?>

<x-layouts.app highlight="courses">
    @volt
    <main class="page_content">
        <!-- Courses Section - Start
        ================================================== -->
        <section class="courses_section section_space_lg mt-12">
            <div class="container">
                <div class="section_heading">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col col-lg-6">
                            <h2 class="heading_text mb-0">
                                Tuyển sinh các khóa học
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="tabs_wrapper">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="teb_hr" role="tabpanel">
                            <div class="row justify-center">
                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="{{ route('courses.detail', ['id' => 'so-cap-1']) }}"
                                               data-cursor-text="View">
                                                <img
                                                    src="{{ asset('assets/images/banner/hero_banner_img_2.png') }}"
                                                    alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Sơ cấp/Trung cấp</a></li>
                                                </ul>
                                            </div>
                                            <h3 class="item_title py-0">
                                                <a href="{{ route('courses.detail', ['id' => 'so-cap-1']) }}">
                                                    Sơ cấp 1
                                                </a>
                                            </h3>
                                            <p class="pt-2 line-clamp-3 h-[87px]">
                                                NGÔN NGỮ MỚI CƠ HỘI MỚI
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="{{ route('courses.detail', ['id' => 'so-cap-2']) }}"
                                               data-cursor-text="View">
                                                <img
                                                    src="{{ asset('assets/images/banner/hero_banner_img_2.png') }}"
                                                    alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Sơ cấp/Trung cấp</a></li>
                                                </ul>
                                            </div>
                                            <h3 class="item_title py-0">
                                                <a href="{{ route('courses.detail', ['id' => 'so-cap-2']) }}">
                                                    Sơ cấp 2
                                                </a>
                                            </h3>
                                            <p class="pt-2 line-clamp-3 h-[87px]">
                                                Khoá học dành cho những bạn muốn có được nền tảng tiếng Hàn vững chắc
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="{{ route('courses.detail', ['id' => 'topik-1-2']) }}"
                                               data-cursor-text="View">
                                                <img
                                                    src="{{ asset('assets/images/banner/hero_banner_img_2.png') }}"
                                                    alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Luyện thi TOPIK</a></li>
                                                </ul>
                                            </div>
                                            <h3 class="item_title py-0">
                                                <a href="{{ route('courses.detail', ['id' => 'topik-1-2']) }}">
                                                    Topik 1-2
                                                </a>
                                            </h3>
                                            <p class="pt-2 line-clamp-3 h-[87px]">
                                                Luyện thi Topik 1-2
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="{{ route('courses.detail', ['id' => 'trung-cap-1']) }}"
                                               data-cursor-text="View">
                                                <img
                                                    src="{{ asset('assets/images/banner/hero_banner_img_2.png') }}"
                                                    alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Sơ cấp/Trung cấp</a></li>
                                                </ul>
                                            </div>
                                            <h3 class="item_title py-0">
                                                <a href="{{ route('courses.detail', ['id' => 'trung-cap-1']) }}">
                                                    Trung cấp 1
                                                </a>
                                            </h3>
                                            <p class="pt-2 line-clamp-3 h-[87px]">
                                                Khoá học dành cho những bạn muốn có được nền tảng tiếng Hàn vững chắc
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="{{ route('courses.detail', ['id' => 'trung-cap-2']) }}"
                                               data-cursor-text="View">
                                                <img
                                                    src="{{ asset('assets/images/banner/hero_banner_img_2.png') }}"
                                                    alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Sơ cấp/Trung cấp</a></li>
                                                </ul>
                                            </div>
                                            <h3 class="item_title py-0">
                                                <a href="{{ route('courses.detail', ['id' => 'trung-cap-2']) }}">
                                                    Trung cấp 2
                                                </a>
                                            </h3>
                                            <p class="pt-2 line-clamp-3 h-[87px]">
                                                Khoá học dành cho những bạn muốn có được nền tảng tiếng Hàn vững chắc
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="{{ route('courses.detail', ['id' => 'topik-3-4']) }}"
                                               data-cursor-text="View">
                                                <img
                                                    src="{{ asset('assets/images/banner/hero_banner_img_2.png') }}"
                                                    alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Luyện thi TOPIK</a></li>
                                                </ul>
                                            </div>
                                            <h3 class="item_title py-0">
                                                <a href="{{ route('courses.detail', ['id' => 'topik-3-4']) }}">
                                                    Topik 3-4
                                                </a>
                                            </h3>
                                            <p class="pt-2 line-clamp-3 h-[87px]">
                                                Khoá học dành cho những bạn muốn có được nền tảng tiếng Hàn vững chắc
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="{{ route('courses.detail', ['id' => 'giao-tiep']) }}"
                                               data-cursor-text="View">
                                                <img
                                                    src="{{ asset('assets/images/banner/hero_banner_img_2.png') }}"
                                                    alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Giao tiếp</a></li>
                                                </ul>
                                            </div>
                                            <h3 class="item_title py-0">
                                                <a href="{{ route('courses.detail', ['id' => 'giao-tiep']) }}">
                                                    Giao tiếp
                                                </a>
                                            </h3>
                                            <p class="pt-2 line-clamp-3 h-[87px]">
                                                Người đi làm tại DN có yếu tố HQ, người đang học, làm, lấy chồng và sinh
                                                sống tại HQ
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="{{ route('courses.detail', ['id' => 'luyen-thi-topik-3-4']) }}"
                                               data-cursor-text="View">
                                                <img
                                                    src="{{ asset('assets/images/banner/hero_banner_img_2.png') }}"
                                                    alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Học thuật</a></li>
                                                </ul>
                                            </div>
                                            <h3 class="item_title py-0">
                                                <a href="{{ route('courses.detail', ['id' => 'luyen-thi-topik-3-4']) }}">
                                                    Luyện thi Topik 3-4
                                                </a>
                                            </h3>
                                            <p class="pt-2 line-clamp-3 h-[87px]">
                                                Học sinh, sinh viên, người có nhu cầu đi du học, người đi làm tại các DN
                                                có yếu tố HQ
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="{{ route('courses.detail', ['id' => 'luyen-thi-topik-5-6']) }}"
                                               data-cursor-text="View">
                                                <img
                                                    src="{{ asset('assets/images/banner/hero_banner_img_2.png') }}"
                                                    alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Học thuật</a></li>
                                                </ul>
                                            </div>
                                            <h3 class="item_title py-0">
                                                <a href="{{ route('courses.detail', ['id' => 'luyen-thi-topik-5-6']) }}">
                                                    Luyện thi Topik 5-6
                                                </a>
                                            </h3>
                                            <p class="pt-2 line-clamp-3 h-[87px]">
                                                Học sinh, sinh viên, người có nhu cầu đi du học, người đi làm tại các DN
                                                có yếu tố HQ
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="{{ route('courses.detail', ['id' => 'bien-phien-dich']) }}"
                                               data-cursor-text="View">
                                                <img
                                                    src="{{ asset('assets/images/banner/hero_banner_img_2.png') }}"
                                                    alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Học thuật</a></li>
                                                </ul>
                                            </div>
                                            <h3 class="item_title py-0">
                                                <a href="{{ route('courses.detail', ['id' => 'bien-phien-dich']) }}">
                                                    Biên phiên dịch
                                                </a>
                                            </h3>
                                            <p class="pt-2 line-clamp-3 h-[87px]">
                                                Sinh viên, người đi làm có nhu cầu theo ngành biên phiên dịch
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="{{ route('courses.detail', ['id' => 'du-hoc']) }}"
                                               data-cursor-text="View">
                                                <img
                                                    src="{{ asset('assets/images/banner/hero_banner_img_2.png') }}"
                                                    alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Học thuật</a></li>
                                                </ul>
                                            </div>
                                            <h3 class="item_title py-0">
                                                <a href="{{ route('courses.detail', ['id' => 'du-hoc']) }}">
                                                    Du học
                                                </a>
                                            </h3>
                                            <p class="pt-2 line-clamp-3 h-[87px]">
                                                Học sinh, sinh viên có dự định đi du học
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="{{ route('courses.detail', ['id' => 'dao-tao-doanh-nghiep']) }}"
                                               data-cursor-text="View">
                                                <img
                                                    src="{{ asset('assets/images/banner/hero_banner_img_2.png') }}"
                                                    alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Đặc thù</a></li>
                                                </ul>
                                            </div>
                                            <h3 class="item_title py-0">
                                                <a href="{{ route('courses.detail', ['id' => 'dao-tao-doanh-nghiep']) }}">
                                                    Đào tạo doanh nghiệp
                                                </a>
                                            </h3>
                                            <p class="pt-2 line-clamp-3 h-[87px]">
                                                Các doanh nghiệp có yếu tố HQ
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="{{ route('courses.detail', ['id' => 'dao-tao-trong-truong']) }}"
                                               data-cursor-text="View">
                                                <img
                                                    src="{{ asset('assets/images/banner/hero_banner_img_2.png') }}"
                                                    alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Đặc thù</a></li>
                                                </ul>
                                            </div>
                                            <h3 class="item_title py-0">
                                                <a href="{{ route('courses.detail', ['id' => 'dao-tao-trong-truong']) }}">
                                                    Đào tạo trong các trường
                                                </a>
                                            </h3>
                                            <p class="pt-2 line-clamp-3 h-[87px]">
                                                Các trường THCS, THPT đào tạo tiếng Hàn là ngoại ngữ thứ 2
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="{{ route('courses.detail', ['id' => 'e-learning']) }}"
                                               data-cursor-text="View">
                                                <img
                                                    src="{{ asset('assets/images/banner/hero_banner_img_2.png') }}"
                                                    alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">E-learning</a></li>
                                                </ul>
                                            </div>
                                            <h3 class="item_title py-0">
                                                <a href="{{ route('courses.detail', ['id' => 'e-learning']) }}">
                                                    E-learning
                                                </a>
                                            </h3>
                                            <p class="pt-2 line-clamp-3 h-[87px]">
                                                Tất cả tệp KH có nhu cầu học nhưng cần linh hoạt về thời gian và địa
                                                điểm học
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="{{ route('courses.detail', ['id' => 'eps-e9']) }}"
                                               data-cursor-text="View">
                                                <img
                                                    src="{{ asset('assets/images/banner/hero_banner_img_2.png') }}"
                                                    alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Luyện thi</a></li>
                                                </ul>
                                            </div>
                                            <h3 class="item_title py-0">
                                                <a href="{{ route('courses.detail', ['id' => 'eps-e9']) }}">
                                                    EPS - E9
                                                </a>
                                            </h3>
                                            <p class="pt-2 line-clamp-3 h-[87px]">
                                                Tiếng Hàn tiêu chuẩn EPS - TOPIK dành cho người Việt Nam (60 bài)
                                            </p>
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

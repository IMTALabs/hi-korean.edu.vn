<?php

\Laravel\Folio\name('courses');

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

@extends('layouts.app')

@section('content')
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
                                        <a href="{{ route('courses.show', ['id' => 'offline']) }}" data-cursor-text="View">
                                            <img
                                                src="https://hikorean.edu.vn/wp-content/uploads/2023/08/647b0f368c935-450x300.png"
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
                                            <a href="{{ route('courses.show', ['id' => 'offline']) }}">
                                                Học trực tiếp
                                            </a>
                                        </h3>
                                        <p class="pt-2">
                                            Khoá học dành cho những bạn muốn có được nền tảng tiếng Hàn vững chắc
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-4">
                                <div class="course_card">
                                    <div class="item_image">
                                        <a href="{{ route('courses.show', ['id' => 'offline']) }}" data-cursor-text="View">
                                            <img
                                                src="https://hikorean.edu.vn/wp-content/uploads/2023/08/647b0f368c935-450x300.png"
                                                alt="Hi Korean">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <ul class="item_category_list unordered_list">
                                                <li><a href="#!">Sơ cấp / Trung cấp</a></li>
                                            </ul>
                                        </div>
                                        <h3 class="item_title py-0">
                                            <a href="{{ route('courses.show', ['id' => 'offline']) }}">
                                                E-learning
                                            </a>
                                        </h3>
                                        <p class="pt-2">
                                            Khoá học dành cho những bạn muốn có được nền tảng tiếng Hàn vững chắc
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-4">
                                <div class="course_card">
                                    <div class="item_image">
                                        <a href="{{ route('courses.show', ['id' => 'offline']) }}" data-cursor-text="View">
                                            <img
                                                src="https://hikorean.edu.vn/wp-content/uploads/2023/08/647b0f368c935-450x300.png"
                                                alt="Hi Korean">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <ul class="item_category_list unordered_list">
                                                <li><a href="#!">Sơ cấp / Trung cấp</a></li>
                                            </ul>
                                        </div>
                                        <h3 class="item_title py-0">
                                            <a href="{{ route('courses.show', ['id' => 'offline']) }}">
                                                Online
                                            </a>
                                        </h3>
                                        <p class="pt-2">
                                            Khoá học dành cho những bạn muốn có được nền tảng tiếng Hàn vững chắc
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-4">
                                <div class="course_card">
                                    <div class="item_image">
                                        <a href="{{ route('courses.show', ['id' => 'offline']) }}" data-cursor-text="View">
                                            <img
                                                src="https://hikorean.edu.vn/wp-content/uploads/2023/08/647b0f368c935-450x300.png"
                                                alt="Hi Korean">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <ul class="item_category_list unordered_list">
                                                <li><a href="#!">Trẻ em / Người đi làm / Phiên dịch viên</a></li>
                                            </ul>
                                        </div>
                                        <h3 class="item_title py-0">
                                            <a href="{{ route('courses.show', ['id' => 'offline']) }}">
                                                Theo đối tượng
                                            </a>
                                        </h3>
                                        <p class="pt-2">
                                            Khoá học dành cho những bạn muốn có được nền tảng tiếng Hàn vững chắc
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-4">
                                <div class="course_card">
                                    <div class="item_image">
                                        <a href="{{ route('courses.show', ['id' => 'offline']) }}" data-cursor-text="View">
                                            <img
                                                src="https://hikorean.edu.vn/wp-content/uploads/2023/08/647b0f368c935-450x300.png"
                                                alt="Hi Korean">
                                        </a>
                                    </div>
                                    <div class="item_content">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <ul class="item_category_list unordered_list">
                                                <li><a href="#!">TOPIK / EPS - XKLD</a></li>
                                            </ul>
                                        </div>
                                        <h3 class="item_title py-0">
                                            <a href="{{ route('courses.show', ['id' => 'offline']) }}">
                                                Luyện thi
                                            </a>
                                        </h3>
                                        <p class="pt-2">
                                            Khoá học dành cho những bạn muốn có được nền tảng tiếng Hàn vững chắc
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
@endsection

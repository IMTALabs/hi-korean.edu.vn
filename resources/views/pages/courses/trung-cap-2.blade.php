<?php

\Laravel\Folio\name('courses.show');

?>

<x-layouts.app>
    @volt
    <main class="page_content">
        <div class="container mx-auto">
            <div class="flex items-center py-10">
                <a href="{{ route('home') }}" class="text-gray-500">Trang chủ</a>
                <i class="mx-2 fas fa-chevron-right"></i>
                <span>Trung cấp 2</span>
            </div>
            <div class="grid gap-x-16 lg:grid-cols-2">
                <div class="lg:col-span-1">
                    <div class="flex grow flex-col items-start justify-center">
                        <span class="bg-alternative-darker text-[#3C1E1F] font-bold text-2xl px-6 py-1 rounded">
                            Khóa học
                        </span>
                        <h1 class="mt-8 uppercase !text-5xl text-black !leading-[4.5rem]">
                            Trung cấp 2
                        </h1>
                        <ol class="mt-8 marker:text-3xl marker:font-bold">
                            <li>Tương đương Topik 4:</li>
                            <li>NÂNG CAO 60 ngữ pháp trung cấp, 500 từ vựng các vấn đề thường gặp trong cuộc sống.</li>
                            <li>GIAO TIẾP TỰ NHIÊN NHƯ NGƯỜI BẢN ĐỊA và Sử dụng THÀNH THẠO kính ngữ</li>
                            <li>TỰ TIN TRÌNH BÀY Ý KIẾN CÁ NHÂN mạch lạc, thuyết phục.</li>
                            <li>PHẢN XẠ NHANH khi được đặt câu hỏi.</li>
                            <li>KHẢ NĂNG VIẾT TRỌN VẸN 1 bài văn hoàn chỉnh về CHỦ ĐỀ XÃ HỘI, VĂN HOÁ</li>
                            <li>ĐỌC hiểu 60 - 70% BÁO HÀN QUỐC</li>
                        </ol>
                    </div>
                </div>
                <div class="lg:col-span-1 max-lg:hidden">
                    <img class="w-full" src="{{ asset('assets/images/course/Group 11770.png') }}" alt="">
                </div>
            </div>
        </div>

        <!-- Về chúng tôi - Start
        ================================================== -->
        <section class="expect_from_course section_space_lg py-16 bg-[#F8F2E6]">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-5">
                        <div class="section_heading">
                            <h3 class="text-2xl !text-secondary">Trung cấp 2</h3>
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
                                        <div class="accordion-button text-lg relative" role="button"
                                             data-bs-toggle="collapse"
                                             data-bs-target="#collapse_one" aria-expanded="true">
                                            <div
                                                class="px-4 py-1 bg-alternative text-primary font-bold rounded lg:mr-4 lg:-ml-12 max-lg:absolute max-lg:-top-10">
                                                30 buổi - 15 tuần
                                            </div>
                                            Chi tiết
                                        </div>
                                        <div id="collapse_one" class="accordion-collapse collapse show"
                                             data-bs-parent="#faq_accordion_1">
                                            <div class="accordion-body">
                                                <ul class="space-y-4 pl-4">
                                                    <li>Bài 1: Giới thiệu nhân vật. (Ngữ pháp đối lập, nguyên nhân, đồng thời xảy ra 2 hành động được dùng trong văn viết)</li>
                                                    <li>Bài 2: Thời tiết và cuộc sống (Ngữ pháp người nói từng trải nghiệm giờ đã thay đổi, so sánh, cho dù</li>
                                                    <li>Bài 3: Trao đổi. Hoán đổi (Ngữ pháp nguyên nhân, lý do)</li>
                                                    <li>Bài 4:  Cuộc sống thường nhật trong gia đình (Ngữ pháp không những ...mà còn, diễn tả hành động người nói đã cố thực hiện nhưng kết quả không được như mong đợi</li>
                                                    <li>Bài 5: Cuộc sống nơi làm việc.  (Ngữ pháp nói về suy nghĩ cá nhân, tường thuật lại lời gián tiếp)"</li>
                                                    <li>Bài 6: Ngôn ngữ và văn hoá. ( Ngữ pháp so sánh tương đồng; thành ngữ - tục ngữ Hàn Quốc)</li>
                                                    <li>Bài 7: Stress: nguyên nhân, triệu chứng, cách xả stress (Ngữ pháp: không chỉ... mà...; thêm vào đó...; hành động đang diễn ra và sắp kết thúc)</li>
                                                    <li>Bài 8: Kỷ niệm: nói về kỷ niệm thời thơ ấu, thời học sinh,v.v...(Ngữ pháp: thường...; vào thời điểm/ vào lúc...)</li>
                                                    <li>Bài 9: Du lịch: Nói và viết về kế hoạch du lịch, giới thiệu được những đặc điểm nổi bật của địa điểm du lịch, nêu cảm nhận về chuyến du lịch</li>
                                                    <li>Bài 10: Kết hôn: Nói suy nghĩ/ quan điểm hôn nhân. Phân tích và viết về bài thống kê dữ liệu kết hôn/ ly hôn.</li>
                                                    <li>Bài 11: Biểu diễn: Sử dụng các ngữ pháp để miêu tả lại một buổi biểu diễn mà bạn yêu thích.</li>
                                                    <li>Bài 12: Giáo dục: Trình bày quan điểm về giáo dục; Các hiện tượng giáo dục hiện nay</li>
                                                    <li>Bài 13: Môi trường: Thảo luận về hiện tượng ô nhiễm môi trường, đưa ra nguyên nhân giải pháp</li>
                                                    <li>Bài 14: Tai nạn - Thiên tai: Tường thuật về một tai nạn hoặc thiên tai. Các phương pháp phòng chống tai nạn/ thiên tai</li>
                                                    <li>Bài 15: Máy tính - mạng internet: So sánh được ưu và nhược điểm của internet, các vấn đề khi sử dụng máy tính</li>
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

        <!-- Về chúng tôi - Start
        ================================================== -->
        <section class="expect_from_course section_space_lg py-16">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-5">
                        <div class="section_heading">
                            <h3 class="text-2xl !text-secondary">Trung cấp 2</h3>
                            <h2 class="mb-0 uppercase heading_text">
                                Điểm mạnh
                            </h2>
                        </div>
                    </div>
                    <div class="col col-lg-7">
                        <div class="row">
                            <div class="col">
                                <div class="accordion space-y-8" id="faq_accordion_2">
                                    <div class="accordion-item bg-[#F8F2E6] px-8 py-4 rounded-xl">
                                        <div id="collapse_two" class="accordion-collapse collapse show"
                                             data-bs-parent="#faq_accordion_2">
                                            <div class="accordion-body">
                                                <ul class="space-y-4 pl-4">
                                                    <li>100% giáo viên có trình độ Topik 5-6, xuất thân từ các trường đại học có tiếng về chuyên ngành tiếng Hàn.</li>
                                                    <li>Giáo trình của trường đại học top 3 Hàn Quốc mạnh về kỹ năng nghe, nói. Ngoài ra các PPT được chuẩn bị riêng có xen kẽ các bài đọc, viết bổ trợ.</li>
                                                    <li>Lớp off: hoạt động trải nghiệm văn hóa đa dạng.</li>
                                                    <li>Tặng khóa giao tiếp với người Hàn 5 buổi.</li>
                                                    <li>Miễn phí dự các buổi hội thảo chia sẻ cách học, định hướng nghề nghiệp, việc làm, giới thiệu văn hóa Hàn Quốc</li>
                                                    <li>E-learning giáo viên chữa đề thi.</li>
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
    </main>
    @endvolt
</x-layouts.app>

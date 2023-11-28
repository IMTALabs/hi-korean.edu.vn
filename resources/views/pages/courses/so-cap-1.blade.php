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
                <span>Sơ cấp 1</span>
            </div>
            <div class="grid gap-x-16 lg:grid-cols-2">
                <div class="lg:col-span-1">
                    <div class="flex grow flex-col items-start justify-center">
                        <span class="bg-alternative-darker text-[#3C1E1F] font-bold text-2xl px-6 py-1 rounded">
                            Khóa học
                        </span>
                        <h1 class="mt-8 uppercase !text-5xl text-black !leading-[4.5rem]">
                            Sơ cấp 1
                        </h1>
                        <ol class="mt-8 marker:text-3xl marker:font-bold">
                            <li class="pl-8">Tương đương Topik 1</li>
                            <li class="pl-8">Nắm vững 4 kỹ năng NGHE - NÓI - ĐỌC - VIẾT với 50 ngữ pháp và 350 từ vựng
                            </li>
                            <li class="pl-8">Xoá tan nỗi lo PHÁT ÂM KHÔNG CHUẨN</li>
                            <li class="pl-8">CÓ KHẢ NĂNG GIAO TIẾP về 15 chủ đề gần gũi trong cuộc sống</li>
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
                            <h3 class="text-2xl !text-secondary">Sơ cấp 1</h3>
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
                                                33 buổi - 11 tuần
                                            </div>
                                            Chi tiết
                                        </div>
                                        <div id="collapse_one" class="accordion-collapse collapse show"
                                             data-bs-parent="#faq_accordion_1">
                                            <div class="accordion-body">
                                                <ul class="space-y-4 pl-4">
                                                    <li>Nhập môn 3 buổi: Bảng chữ cái (Học về nhận biết mặt chữ, nguyên
                                                        âm, phụ âm, học phát âm,...)
                                                    </li>
                                                    <li>Bài 1: Từ vựng, ngữ pháp về Chào hỏi, giới thiệu bản thân (tên,
                                                        quốc tịch, nghề nghiệp,...)
                                                    </li>
                                                    <li>Bài 2: Từ vựng, ngữ pháp về đời sống hàng ngày (học về động từ,
                                                        tính từ, một số danh từ,...).
                                                    </li>
                                                    <li>Bài 3: Từ vựng, ngữ pháp về mua sắm (số thứ tự, số đếm, cách hỏi
                                                        mua và giá tiền, đồ vật...).
                                                    </li>
                                                    <li>Bài 4: Từ vựng, ngữ pháp về đời sống hàng ngày (hoạt động, sở
                                                        thích, thời gian,...).
                                                    </li>
                                                    <li>Bài 5: Từ vựng, ngữ pháp về vị trí (các vị trí, một số đồ vật
                                                        khác,...).
                                                    </li>
                                                    <li>Bài 6: Từ vựng, ngữ pháp về ẩm thực (món ăn, mùi vị, ngữ pháp về
                                                        gọi món, rủ rê,..)
                                                    </li>
                                                    <li>Bài 7: Từ vựng, ngữ pháp về chủ đề hẹn hò, lời hứa (thời gian,
                                                        lời hứa, hẹn hò, ngữ pháp dùng để hẹn hò ở đâu đó, học cách nói
                                                        ngày tháng,...)
                                                    </li>
                                                    <li>Bài 8: Từ vựng, ngữ pháp về chủ đề thời tiết (thời tiết, hiện
                                                        tượng thời tiết, ngữ pháp để hỏi về hiện tượng thời tiết, miêu
                                                        tả các mùa, ...)
                                                    </li>
                                                    <li>Bài 9: Từ vựng, ngữ pháp về chủ đề hoạt động cuối tuần (hoạt
                                                        động cuối tuần, thư giãn, ngữ pháp dùng để áp dụng miêu tả việc
                                                        làm cuối tuần,....)
                                                    </li>
                                                    <li>Bài 10: Từ vựng, ngữ pháp về chủ đề giao thông (phương tiện giao
                                                        thông, một số địa danh, cách hỏi đường và chỉ đường,....)
                                                    </li>
                                                    <li>Bài 11: Từ vựng, ngữ pháp về chủ đề điện thoại (gọi điện thoại,
                                                        nhắn tin, cách hỏi số điện thoại, đọc số điện thoại, hội thoại
                                                        trong khi gọi điện,...)
                                                    </li>
                                                    <li>Bài 12: Sở thích (các hoạt động và sở thích, học cách nói thích
                                                        làm gì, ngữ pháp so sánh,...)
                                                    </li>
                                                    <li>Bài 13: Gia đình (các thành viên trong gia đình, học ngữ pháp
                                                        kính ngữ, hỏi và trả lời liên quan đến chủ đề gia đình,...)
                                                    </li>
                                                    <li>Bài 14: Bưu điện - Ngân hàng (ngân hàng, bưu điện, ngữ pháp lịch
                                                        sự dùng khi nói ở bưu điện, ngân hàng, luyện nói về cách giao
                                                        dịch ở ngân hàng, bưu điện,...)
                                                    </li>
                                                    <li>Bài 15: Hiệu thuốc (một số bệnh, một số loại thuốc, bộ phận cơ
                                                        thể người, một số ngữ pháp nên, không nên làm gì, kỹ năng nói
                                                        diễn tả bệnh và giao tiếp ở hiệu thuốc,...)"
                                                    </li>
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
                            <h3 class="text-2xl !text-secondary">Sơ cấp 1</h3>
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

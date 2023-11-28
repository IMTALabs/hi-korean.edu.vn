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
                <span>Trung cấp 1</span>
            </div>
            <div class="grid gap-x-16 lg:grid-cols-2">
                <div class="lg:col-span-1">
                    <div class="flex grow flex-col items-start justify-center">
                        <span class="bg-alternative-darker text-[#3C1E1F] font-bold text-2xl px-6 py-1 rounded">
                            Khóa học
                        </span>
                        <h1 class="mt-8 uppercase !text-5xl text-black !leading-[4.5rem]">
                            Trung cấp 1
                        </h1>
                        <ol class="mt-8 marker:text-3xl marker:font-bold">
                            <li>Tương đương Topik 3:</li>
                            <li>THÀNH THẠO 60 ngữ pháp trung cấp, 500 từ vựng các vấn đề thường gặp trong cuộc sống.</li>
                            <li>Củng cố và trau dồi từ vựng, ngữ pháp ở trình độ trung cấp, TỰ TIN GIAO TIẾP trong những tình huống phức tạp với tốc độ nói vừa phải (ngân hàng, bệnh viện, công ty, v.v...)</li>
                            <li>KỸ NĂNG VIẾT NHƯ NGƯỜI BẢN ĐỊA với các câu phức, sử dụng được các cấu trúc ngữ pháp trang trọng chuẩn HÀN</li>
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
                            <h3 class="text-2xl !text-secondary">Trung cấp 1</h3>
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
                                                    <li>Bài 1: Cuộc sống mới (Ngữ pháp mục đích, mặc dù, danh từ hoá. Kỹ năng biểu đạt cuộc sống mới )</li>
                                                    <li>Bài 2: Nấu ăn (nguyên liệu, cách chế biến; Ngữ pháp dùng biểu đạt khi nấu ăn, diễn tả hành động đang xảy ra và bị hành động khác chen vào, Diễn tả một hành động nào được hoàn thành và tiếp tục duy trì. Kỹ năng biểu đạt cách làm 1 món ăn Hàn Quốc</li>
                                                    <li>Bài 3: Tin đồn (Ngữ pháp gián tiếp)</li>
                                                    <li>Bài 4: Tính cách (tính cách; Ngữ pháp mang tính lựa chọn, xác nhận đính chính sự việc, diển tả hành động không thể thực hiện, mức độ của hành động, trạng thái; Kỹ năng nói về tính cách, ưu nhược điểm của bản thân</li>
                                                    <li>Bài 5: Lễ nghĩa trong cuộc sống (các phép tắc; Ngữ pháp xác nhận thông tin của người nói, diễn tả suy nghĩ, dự đoán khác so với thực tế, phỏng đoán, giả định, sai khiến./.. Kỹ năng diễn đạt lễ nghi trong cuộc sống như ăn uống,...)</li>
                                                    <li>Bài 6: Tiệm cắt tóc (các kiểu tóc, đặc điểm dáng tóc, tâm trạng;  Ngữ pháp biểu đạt về ngoại hình, thể hiện mức độ, phương thức của hành động, diễn tả sự hồi tưởng , bất quy tắc "ㅎ". Kỹ năng miêu tả dáng tóc, giới thiệu kiểu tóc thích hợp với khuôn mặt,....</li>
                                                    <li>Bài 7: Cuộc sống Hàn Quốc (đặc điểm của cuộc sống Hàn Quốc; Ngữ pháp diễn tả lý do không chắc chăn, thể hiện sự phỏng đoán, diễn tả lý do hoặc suy nghĩa, diễn tả 1 hành động có 2 hay nhiều mục đích; Kỹ năng biểu đạt đặc điểm cuộc sống mới ở Hàn Quốc</li>
                                                    <li>Bài 8: Đồ thất lạc (miêu tả đặc điểm của đồ vật bị thất lạc; Ngữ pháp diễn tả hành động ngay sau khi hành động khác kết thúc, thể hiện sự lựa chọn không phải tốt nhất, diễn tả kích thước số lượng của sự vật; Kỹ năng miêu tả và miêu tả đồ vật đã mất,...)</li>
                                                    <li>Bài 9: Yêu đương - Kết hôn (tình yêu, về cuộc sống hôn nhân; Ngữ pháp nhấn mạnh mức độ, diễn tả thời gian xảy ra hành động, diễn tả sự hồi tưởng hành động; Kỹ năng diễn tả ưu nhược điểm về cuộc sống hôn nhân,...)</li>
                                                    <li>Bài 10: Quà tặng (các món quà và những ngày đặc biệt có ý nghĩa; Ngữ pháp diễn tả dự định,  diễn tả việc biết hay không biết việc gì , diễn tả ý chí thực hiện hành động, mệnh lệnh, yêu cầu.</li>
                                                    <li>Bài 11: Sự cố - Tai nạn (các sự cố, nguyên nhân xảy ra sự cố, thiệt hại cho tai nạn; Ngữ pháp nguyên nhân, bị động. Kỹ năng diễn tả về 1 sự cố đã xảy ra,....)</li>
                                                    <li>Bài 12: Lỗi lầm, sự nuối tiếc (Ngữ pháp nguyên nhân, ""suýt chút nữa"", duy trì trạng thái, diễn tả sự hối hận</li>
                                                    <li>Bài 13: Công sở (Ngữ pháp giả thiết, lý do không chắc chắn, diễn tả kế quả vế sau trái với mong đợi</li>
                                                    <li>Bài 14: Kế hoạch du lịch (Ngữ pháp ""ngay sau khi"", diễn tả hành động có giá trị để thực hiện</li>
                                                    <li>Bài 15: Ngày lễ (Ngữ pháp cảm thán, mức độ)</li>
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
                            <h3 class="text-2xl !text-secondary">Trung cấp 1</h3>
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
                                                    <li>100% giảng viên khoa tiếng Hàn</li>
                                                    <li>Giáo trình của trường đại học top 3 Hàn Quốc mạnh về kỹ năng nghe, nói. Ngoài ra các PPT được chuẩn bị riêng có xen kẽ các bài đọc, viết bổ trợ.</li>
                                                    <li>Lớp off: hoạt động trải nghiệm văn hóa đa dạng.</li>
                                                    <li>Tặng khóa giao tiếp với người Hàn 5 buổi</li>
                                                    <li>Miễn phí dự các buổi hội thảo chia sẻ cách học, định hướng nghề nghiệp, việc làm, giới thiệu văn hóa Hàn Quốc</li>
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

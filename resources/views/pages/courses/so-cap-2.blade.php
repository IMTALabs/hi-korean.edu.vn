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
                <span>Sơ cấp 2</span>
            </div>
            <div class="grid gap-x-16 lg:grid-cols-2">
                <div class="lg:col-span-1">
                    <div class="flex grow flex-col items-start justify-center">
                        <span class="bg-alternative-darker text-[#3C1E1F] font-bold text-2xl px-6 py-1 rounded">
                            Khóa học
                        </span>
                        <h1 class="mt-8 uppercase !text-5xl text-black !leading-[4.5rem]">
                            Sơ cấp 2
                        </h1>
                        <ol class="mt-8 marker:text-3xl marker:font-bold">
                            <li>Tương đương Topik 2</li>
                            <li>Củng cố kiến thức cốt lõi và THÀNH THẠO 60 ngữ pháp và 350 từ vựng nâng cao</li>
                            <li>XÂY DỰNG NỀN TẢNG PHẢN XẠ tránh việc dịch từ Việt sang Hàn</li>
                            <li>TỰ TIN GIAO TIẾP về các tình huống liên quan tới đời sống thường ngày.</li>
                            <li>Mở rộng cấu trúc ngữ pháp, NÂNG CAO KỸ NĂNG VIẾT đoạn văn</li>
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
                            <h3 class="text-2xl !text-secondary">Sơ cấp 2</h3>
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
                                                    <li>Bài 1: Giới thiệu bản thân (mở rộng thêm như giới thiệu về chuyên ngành học, trường học, các ngữ pháp về thì hiện tại tiếp diễn, cảm thán, học được kĩ năng chắc hơn và đầy đủ hơn về giới thiệu bản thân,...)</li>
                                                    <li>Bài 2: Sở thích (phần 2) (mở rộng vốn từ vựng về sở thích, các ngữ pháp nói về thời gian rảnh, nói về khả năng làm được hay không, ngữ pháp về tần suất, kỹ năng nói về sở thích, tần suất thực hiện,...)</li>
                                                    <li>Bài 3: Thời tiết (hiện tượng thời tiết, ngữ pháp định ngữ, phỏng đoán, mở rộng thêm kỹ năng diễn tả thời tiết, ...)</li>
                                                    <li>Bài 4: Mua sắm (hoa quả, màu sắc, ngữ pháp về giá tiền, nguyên nhân lý do, kỹ năng nói về mua bán và hỏi giá,.....)</li>
                                                    <li>Bài 5: Hỏi đường (di chuyển, ngữ pháp diễn tả cách đi đường, kỹ năng nói về hỏi đường và chỉ đường, ...)</li>
                                                    <li>Bài 6: Thăm hỏi (hỏi thăm đến tình trạng, cuộc sống của bạn bè, về việc học tập, làm việc, chuyển công việc....; Ngữ pháp về cách nói suồng sã với bạn bè thân thiết; Kỹ năng hỏi thăm về cuộc sống của đối phương, viết email hỏi thăm....</li>
                                                    <li>Bài 7: Ngoại hình - Trang phục (ngoại hình bên ngoài, về cách sử dụng các từ vựng về trang phục trong tiếng Hàn; Ngữ pháp diễn tả ai đó thuộc kiểu người như thế nào, diễn tả sự việc tương tự với đối tượng nào đó, định ngữ quá khứ, bất quy tắc. Kỹ năng miêu tả ngoại hình</li>
                                                    <li>Bài 8: Giao thông (giao thông. Ngữ pháp đối chiếu, lời khuyên, hành động lặp lại, đối lập. Kỹ năng hỏi và chỉ đường...)</li>
                                                    <li>Bài 9: Tâm trạng - Cảm xúc (cảm xúc; Ngữ pháp bất quy tắc ㅡ, diễn tả hành động đồng thời xảy ra, phủ định, dự đoán...Kỹ năng miêu tả cảm xúc</li>
                                                    <li>Bài 10: Du lịch (địa điểm du lịch, các hoạt động du lịch; Ngữ pháp hoặc, diễn tả trải nghiệm,,...; Kỹ năng biểu đạt lịch trình, các câu hỏi về du lịch</li>
                                                    <li>Bài 11: Nhờ vả (Ngữ pháp diễn tả bối cảnh nhờ vả, biểu thị sự nhờ cậy,  thái độ khiêm tốn; Kỹ năng nhờ vả, cách từ chối</li>
                                                    <li>Bài 12: Cuộc sông Hàn Quốc. (cuộc sống thường ngày Hàn Quốc, Ngữ pháp về thời gian, về dự định, quyết tâm. Kỹ năng biểu đạt về cuộc sống sinh hoạt ở Hàn Quốc</li>
                                                    <li>Bài 13: Đô thị (phương hướng và cuộc sống sinh hoạt. Ngữ pháp về đuôi "다". Kỹ năng miêu tả thành phố Hàn Quốc </li>
                                                    <li>Bài 14: Chữa bệnh (vết thương và chữa trị. Ngữ pháp nguyên nhân, tương lai,..... Kỹ năng miêu tả về triệu chứng của bệnh</li>
                                                    <li>Bài 15: Tìm nhà (cấu trúc nhà và đặc điểm của ngôi nhà; Ngữ pháp so sánh, tương đồng, ước, dự định. Kỹ năng thuê nhà, mô tả ngôi nhà, tìm nhà....</li>
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
                            <h3 class="text-2xl !text-secondary">Sơ cấp 2</h3>
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

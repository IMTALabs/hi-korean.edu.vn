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
                <span>EPS - E9</span>
            </div>
            <div class="grid gap-x-16 lg:grid-cols-2">
                <div class="lg:col-span-1">
                    <div class="flex grow flex-col items-start justify-center">
                        <span class="bg-alternative-darker text-[#3C1E1F] font-bold text-2xl px-6 py-1 rounded">
                            Khóa học
                        </span>
                        <h1 class="mt-8 uppercase !text-5xl text-black !leading-[4.5rem]">
                            EPS - E9
                        </h1>
                        <ol class="mt-8 marker:text-3xl marker:font-bold">
                            <li>Tiếng Hàn tiêu chuẩn EPS - TOPIK dành cho người Việt Nam (60 bài)</li>
                            <li>50 bài- từ vựng liên quan đến các ngành nghề</li>
                            <li>Lớp offline: 4 tiếng/1 ngày (t2 đến t6) sáng 2 tiếng, chiều 2 tiếng</li>
                            <li>Lớp online: 3 tiếng/ 1 ngày (t2 đến t7) 19:30 - 22:30</li>
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
                            <h3 class="text-2xl !text-secondary">EPS - E9</h3>
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
                                                Tổng 240 giờ
                                            </div>
                                            Chi tiết
                                        </div>
                                        <div id="collapse_one" class="accordion-collapse collapse show"
                                             data-bs-parent="#faq_accordion_1">
                                            <div class="accordion-body">
                                                <ul class="space-y-4 pl-4">
                                                    <li class="font-bold">Giai đoạn 1: Nhập môn (10 bài)</li>
                                                    <li class="ml-8">Bài 1: Có các hiểu biết cơ bản về nguồn gốc, cấu
                                                        tạo bộ chữ Hàn, cách ghép chữ cái tạo thành âm tiết. Nắm được
                                                        cách viết và cách phát âm toàn bộ các nguyên âm trong bộ chữ
                                                        Hàn.
                                                    </li>
                                                    <li class="ml-8">Bài 2: Nắm được cách viết và cách phát âm toàn bộ
                                                        phụ âm. Ghép nguyên âm và phụ âm thành chữ hoàn chỉnh. Hiểu về
                                                        phụ âm cuối và cách phát âm. Biết một số từ vựng cơ bản.
                                                    </li>
                                                    <li class="ml-8">Bài 3: Nắm được từ vựng về người, đồ vật trong lớp
                                                        học. Thực hành được những cách biểu hiện thường dùng trong lớp
                                                        học.
                                                    </li>
                                                    <li class="ml-8">Bài 4+5: Biết cách chào hỏi và tạm biệt; cảm ơn và
                                                        xin lỗi.
                                                    </li>
                                                    <li class="ml-8">Bài 6: Nắm được các từ vựng về đất nước, nghề
                                                        nghiệp. Hiểu và sử dụng được ngữ pháp 입니다/ 입니까. Có thể giới
                                                        thiệu bản thân đơn giản: tên, quốc tịch, nghề nghiệp. Hiểu cách
                                                        chào hỏi trong văn hóa Hàn Quốc.
                                                    </li>
                                                    <li class="ml-8">Bài 7: Nắm được các từ vựng về địa điểm, đồ vật.
                                                        Hiểu và sử dụng được ngữ pháp 이/가, 이에요/예요. Biết cách giới thiệu
                                                        địa điểm và đồ vật.
                                                    </li>
                                                    <li class="ml-8">Bài 8: Nắm được các từ vựng về thời gian và hoạt
                                                        động trong ngày. Hiểu và sử dụng được ngữ pháp 아요/어요, 에(시간).
                                                        Nghe, nói được chủ đề thời gian, giờ giấc và những hoạt động đơn
                                                        giản diễn ra trong ngày.
                                                    </li>
                                                    <li class="ml-8">Bài 9: Nắm được các từ vựng về gia đình, ngoại
                                                        hình, tính cách. Hiểu và sử dụng được ngữ pháp 하고, 에 (장소). Biết
                                                        cách giới thiệu về gia đình. Nghe, nói được chủ đề về gia đình,
                                                        giới thiệu các thành viên trong gia đình. Hiểu văn hóa sử dụng
                                                        kính ngữ và cách nói thân mật của người Hàn Quốc.
                                                    </li>
                                                    <li class="ml-8">Bài 10: Nắm được các từ vựng về ngày tháng và thứ
                                                        trong tuần. Hiểu và sử dụng được ngữ pháp 았/었, 에서. Nghe và nói
                                                        được chủ đề ngày tháng, địa điểm và các hoạt động trong tuần.
                                                        Hiểu về các ngày nghỉ lễ của Hàn Quốc.
                                                    </li>
                                                    <li class="ml-8">Kiểm tra lần 1 (Bài 1- Bài 10) Online.</li>
                                                    <li class="font-bold">Giai đoạn 2: Củng cố (10 buổi)</li>
                                                    <li class="ml-8">Bài 11: Nắm được các từ vựng chủ đề mua hàng. Hiểu
                                                        và sử dụng được ngữ pháp주세요, 아/어 주세요. Nghe, nói được chủ đề về
                                                        mua bán hàng hóa cơ bản.
                                                    </li>
                                                    <li class="ml-8">Bài 12: Nắm được các từ vựng trong bài: động từ
                                                        chuyển động; vị trí và phương hướng; đường phố. Hiểu và sử dụng
                                                        được ngữ pháp (으)세요, (으)로. Nghe, nói được chủ đề về vị trí, tìm
                                                        đường.
                                                    </li>
                                                    <li class="ml-8">Bài 13: Nắm được các từ vựng về trạng thái trong
                                                        bài. Hiểu và sử dụng được ngữ pháp고 싶다, (으)ㄹ까요. Nghe, nói được
                                                        chủ đề về đặc điểm, trạng thái; mong muốn; đề xuất, gợi ý, rủ
                                                        rê.
                                                    </li>
                                                    <li class="ml-8">Bài 14: Nắm được các từ vựng về các món ăn, mùi vị
                                                        và quán ăn. Hiểu và sử dụng được ngữ pháp (으)ㄹ래요, 안. Biết cách
                                                        gọi đồ ăn trong quán ăn. Nghe, nói được chủ đề về đồ ăn, mùi vị
                                                        đồ ăn, gọi món ăn.
                                                    </li>
                                                    <li class="ml-8">Bài 15: Nắm được các từ vựng về chủ đề mùa và thời
                                                        tiết, tâm trạng, tình cảm.
                                                    </li>
                                                    Hiểu và sử dụng được ngữ pháp 네요, 아서/어서. Nghe, nói được chủ đề về
                                                    thời tiết, tâm trạng và tình cảm đơn giản. Biết về bốn mùa ở Hàn
                                                    Quốc.
                                                    <li class="ml-8">Bài 16: Nắm được các từ vựng về sở thích và các môn
                                                        thể thao. Hiểu và sử dụng được ngữ pháp (으)ㄹ때, (으)러 가다/오다. Nghe,
                                                        nói được về sở thích đơn giản. Biết thông tin về Chương trình hỗ
                                                        trợ các hoạt động sở thích của Hàn Quốc.
                                                    </li>
                                                    <li class="ml-8">Bài 17: Nắm được các từ vựng về địa điểm du lịch,
                                                        hoạt động và chuẩn bị cho chuyến du lịch. Hiểu và sử dụng được
                                                        ngữ pháp 아/어 보다, (으)ㄹ 거예요. Biết cách nói về kế hoạch và kinh
                                                        nghiệm du lịch. Nghe, nói được chủ đề về du lịch đơn giản. Biết
                                                        một số địa danh du lịch của Hàn Quốc.
                                                    </li>
                                                    <li class="ml-8">Bài 18: Nắm được các từ vựng về giao thông và di
                                                        chuyển. Hiểu và sử dụng được ngữ pháp (이)나, 에서 까지. Nghe, nói
                                                        được chủ đề về giao thông đơn giản. Biết về cách sử dụng các
                                                        phương tiện giao thông công cộng ở Hàn Quốc.
                                                    </li>
                                                    <li class="ml-8">Bài 19: Nắm được các từ vựng về chủ đề điện thoại,
                                                        internet. Hiểu và sử dụng được ngữ pháp 지요, 고. Nghe, nói được
                                                        chủ đề về điện thoại đơn giản. Biết các số điện thoại cần dung
                                                        trong sinh hoạt ở Hàn Quốc.
                                                    </li>
                                                    <li class="ml-8">Bài 20: Nắm được các từ vựng về chủ đề dọn dẹp,
                                                        việc nhà. Hiểu và sử dụng được ngữ pháp (으)ㄹ게요, 는 것. Nghe, nói
                                                        được chủ đề về dọn dẹp, việc nhà. Biết thông tin về phân loại
                                                        rác thải ở Hàn Quốc.
                                                    </li>
                                                    <li class="ml-8">Kiểm tra lần 2 (Bài 11- Bài 20) Online.</li>
                                                    <li class="font-bold">Giai đoạn 3: Tăng tốc</li>
                                                    <li class="ml-8">Bài 21: Nắm được các từ vựng về chủ đề Lời hứa, lời
                                                        mời. Hiểu và sử dụng được ngữ pháp는데/(으)ㄴ데, (으)ㄹ까요. Nghe, nói
                                                        được chủ đề về Lời hứa, lời mời. Biết thông tin về văn hóa quà
                                                        tân gia ở Hàn Quốc.
                                                    </li>
                                                    <li class="ml-8">Bài 22: Nắm được các từ vựng về chủ đề Cấm, Những
                                                        hành động không được làm. Hiểu và sử dụng được ngữ pháp (으)면 안
                                                        되다, (으)니까. Nghe, nói được chủ đề về Biển chỉ dẫn. Biết thông tin
                                                        về các biển chỉ dẫn tại nơi công cộng ở Hàn Quốc.
                                                    </li>
                                                    <li class="ml-8">Bài 23: Nắm được các từ vựng về chủ đề Kính ngữ,
                                                        Phép tắc sinh hoạt hàng ngày. Hiểu và sử dụng được ngữ pháp
                                                        (으)시, 아야/어야 되다/하다. Nghe, nói được chủ đề về Kính ngữ, Phép tắc
                                                        sinh hoạt hàng ngày. Biết thông tin về ý nghĩa của tuổi tác đổi
                                                        với người Hàn Quốc.
                                                    </li>
                                                    <li class="ml-8">Bài 24: Nắm được các từ vựng về chủ đề Học tập,
                                                        Giáo dục. Hiểu và sử dụng được ngữ pháp (으)면서, 기 쉽다/어렵다. Nghe,
                                                        nói được chủ đề về Học tập, Giáo dục. Biết thông tin về chương
                                                        trình giáo dục cho người lao động nước ngoài.
                                                    </li>
                                                    <li class="ml-8">Bài 25: Nắm được các từ vựng về chủ đề Tôn giáo,
                                                        Hoạt động tôn giáo. Hiểu và sử dụng được ngữ pháp 마다, 았으면/었으면
                                                        좋겠다. Nghe, nói được chủ đề về Tôn giáo, Hoạt động tôn giáo. Biết
                                                        thông tin về Sự kiện tôn giáo ở Hàn Quốc.
                                                    </li>
                                                    <li class="ml-8">Bài 26: Nắm được các từ vựng về chủ đề Thân thể,
                                                        Triệu chứng. Hiểu và sử dụng được ngữ pháp (으)ㄴ 후에, 지 마세요. Nghe,
                                                        nói được chủ đề về Thân thể, Triệu chứng. Biết thông tin về
                                                        Thuốc dùng khi khẩn cấp trong gia đình.
                                                    </li>
                                                    <li class="ml-8">Bài 27: Nắm được các từ vựng về chủ đề Bệnh viện,
                                                        Điều trị. Hiểu và sử dụng được ngữ pháp (으)면, ㅂ/습니까, ㅂ/습니다.
                                                        Nghe, nói được chủ đề về Bệnh viện, Điều trị. Biết thông tin về
                                                        Hướng dẫn chẩn đoán và điều trị ở Trung tâm người lao động ngước
                                                        ngoài.
                                                    </li>
                                                    <li class="ml-8">Bài 28: Nắm được các từ vựng về chủ đề Ngân hàng,
                                                        Nghiệp vụ ngân hàng, Máy rút chuyển tiền tự động ATM. Hiểu và sử
                                                        dụng được ngữ pháp (으)려고, (으)면 되다. Nghe, nói được chủ đề về Ngân
                                                        hàng, Nghiệp vụ ngân hàng, Máy rút chuyển tiền tự động ATM. Biết
                                                        thông tin về Dịch vụ tài chính chuyên dụng dành cho người lao
                                                        động người nước ngoài.
                                                    </li>
                                                    <li class="ml-8">Bài 29: Nắm được các từ vựng về chủ đề Bưu phẩm,
                                                        Bưu kiện/ Vận chuyển. Hiểu và sử dụng được ngữ pháp (으)로,
                                                        (으)십시오. Nghe, nói được chủ đề về Bưu phẩm, Bưu kiện/ Vận chuyển.
                                                        bBiết thông tin về Dịch vụ chuyển phát nhanh quốc tế EMS.
                                                    </li>
                                                    <li class="ml-8">Bài 30: Nắm được các từ vựng về chủ đề Giáo dục và
                                                        dịch vụ, Sử dụng Trung tâm hỗ trợ nguồn nhân lực người nước
                                                        ngoài. Hiểu và sử dụng được ngữ pháp (으)ㄹ 수 있다/없다, (으)려면. Nghe,
                                                        nói được chủ đề về Giáo dục và dịch vụ, Sử dụng Trung tâm hỗ trợ
                                                        nguồn nhân lực người nước ngoài. Biết thông tin về Cơ quan hỗ
                                                        trợ dành cho lao động người nước ngoài .
                                                    </li>
                                                    <li class="ml-8">Kiểm tra lần 3 (Bài 21 - Bài 30).</li>
                                                    <li class="font-bold">Giai đoạn 4: Nạp nhiên liệu (10 bài)</li>
                                                    <li class="ml-8">Bài 31: Nắm được các từ vựng về chủ đề Thời tiết,
                                                        Đặc trưng của thành phố. Hiểu và sử dụng được ngữ pháp 지만, 보다.
                                                        Nghe, nói được chủ đề về Thời tiết, Đặc trưng của thành phố.
                                                        Biết thông tin về Đơn vị hành chính của Hàn Quốc.
                                                    </li>
                                                    <li class="ml-8">Bài 32:</li>
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
                            <h3 class="text-2xl !text-secondary">EPS - E9</h3>
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
                                                    <li>Miễn phí dự các buổi hội thảo chia sẻ cách học, định hướng nghề
                                                        nghiệp, việc làm, giới thiệu văn hóa Hàn Quốc, các lễ nghi -
                                                        điều cần chú ý khi làm việc với người Hàn.
                                                    </li>
                                                    <li>Cam kết cho học lại miễn phí với học viên đáp ứng đủ điều kiện.
                                                        (chuyên cần, làm bài tập đầy đủ)
                                                    </li>
                                                    <li>Ký túc xác cho học viên offline: 500k/1 tháng.</li>
                                                    <li>Học phí hấp dẫn - Có hỗ trợ trả góp</li>
                                                    <li>Đào tạo tiếng Hàn bài bản</li>
                                                    <li>Ôn luyện cho kỳ thi EPS ngay tại nhà tiện lợi, tiết kiệm thời
                                                        gian
                                                    </li>
                                                    <li>100% Giáo viên Topik 5-6 có kinh nghiệm luyện thi EPS</li>
                                                    <li>Luyện thi trên hệ thống E-learning độc quyền chỉ có tại
                                                        HIKOREAN
                                                    </li>
                                                    <li>Hỗ trợ học viên danh sách các loại giấy tờ, form mẫu có sẵn để
                                                        đăng
                                                        ký thi (học viên tự điền hồ sơ và tự nộp)
                                                    </li>
                                                    <li>Liên kết với các trung tâm dạy nghề để gửi học viên đi học và ôn
                                                        thi tay nghề trên các tỉnh
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
    </main>
    @endvolt
</x-layouts.app>

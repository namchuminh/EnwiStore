<?php require(__DIR__.'/layouts/header.php'); ?>        
<!------------------------ Slide------------ -->
<section id="Slide">
    <div class="aspect-ratio-169">
        <img src="<?php echo base_url('uploads/banner1.jpg'); ?>">
        <img src="<?php echo base_url('uploads/banner2.jpg'); ?>">
        <img src="<?php echo base_url('uploads/banner.jpg'); ?>">
        <img src="<?php echo base_url('uploads/5184440.jpg'); ?>">
    </div>
    <div class="dot-container">
        <div class="dot active"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
</section>

<!---------------------------NEW PRODUCTS--------------->
<section class="brand_section layout_padding2">
    <div class="container">
        <div class="brand_heading">
            <h3 class="custom_heading">
                SẢN PHẨM MỚI
            </h3>
        </div>
    </div>
    <div class="container-fluid brand_item-container">
        <?php foreach ($result as $key => $value): ?>
            <div class="brand_item-box">
                <div class="brand_img-box  item-1" style="background-image: url(<?php echo base_url('uploads/'.$value['TenAnh']); ?>)">
                    <a href="<?php echo base_url('san-pham/'.$value['MaSP']); ?>">
                Xem Thêm
              </a>
                </div>
                <div class="brand_detail-box">
                    <h5>
                        <span> <?php echo number_format($value['GiaTien']); ?>đ</span>
                    </h5>
                    <h6 class="">
                        <a style="color: black;" href="<?php echo base_url('san-pham/'.$value['MaSP']); ?>"><?php echo $value['TenSP']; ?></a>
                    </h6>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>

<!------------------------------------------------- Services -->
<section class="service_section layout_padding">
    <div class="container">
        <h3 class="custom_heading" style="text-align: center; ">
            DỊCH VỤ
        </h3>
    </div>
    <div class="container ">
        <div class="row ">
            <div class="col-md-6 ">
                <div class="img_box ">
                    <img src="<?php echo base_url('uploads/service 1.png'); ?>" alt=" ">
                </div>
                <div class="detail_box ">
                    <h5>
                        KHÁM MẮT MIỄN PHÍ
                    </h5>
                    <p>
                        Enwi thực hiện đo khám mắt miễn phí cho khách hàng khi đặt lịch trước 24 tiếng. Với các bác sĩ chuyên khoa, trình độ chuyên môn cao. Tư vấn kính mắt phù với từng loại bệnh về mắt cho khách hàng
                    </p>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="img_box ">
                    <img src="<?php echo base_url('uploads/service 2.png'); ?>" alt=" ">
                </div>
                <div class="detail_box ">
                    <h5>
                        THU CŨ - ĐỔI MỚI
                    </h5>
                    <p>
                        Thay vì bỏ ra một số tiền lớn để mua kính mắt với dịch vụ “Thu Cũ Đổi Mới”- GIẢM 10%" đơn hàng kính mắt của Enwi, quý khách hàng sẽ được hỗ trợ thu lại kính mắt và tròng cũ với giá cực kỳ ưu đãi, tiết kiệm chi phí nhất có thể.
                    </p>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="img_box ">
                    <img src="<?php echo base_url('uploads/service 3.png'); ?>" alt=" ">
                </div>
                <div class="detail_box ">
                    <h5>
                        VỆ SINH VÀ BẢO QUẢN MẮT KÍNH
                    </h5>
                    <p>
                        Enwi đã nhận biết được vấn đề này của mọi người, vậy nên hôm nay Lily sẽ hướng dẫn bạn cách lau chùi, vệ sinh chiếc kính của bạn thật sạch sẽ mỗi ngày, để có một tầm mình thật sáng rõ và tươi mới.
                    </p>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="img_box ">
                    <img src="<?php echo base_url('uploads/service 4.png'); ?>" alt=" ">
                </div>
                <div class="detail_box ">
                    <h5>
                        CHÍNH SÁCH BẢO HÀNH
                    </h5>
                    <p>
                        Chúng tôi tự tin là đơn vị có chế độ hậu mãi tốt nhất Việt Nam khi áp dụng chính sách bảo hành một năm và đổi trả sản phẩm không cần lí do trong 30 ngày. Hệ thống dữ liệu được cập nhật liên tục và chính xác để dễ dàng tra cứu thông tin.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require(__DIR__.'/layouts/footer.php'); ?>    
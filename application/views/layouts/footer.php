    <!----------------------------------- footer section -->
    <!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <img src="<?php echo base_url('uploads/logo.jpg'); ?>">
                    <p class="text-justify">Công ty TNHH Thương mại và Dịch vụ Enwi Group Việt Nam <br> Mã số thuế: 0108858234 <br> Địa chỉ: Số 116a ngõ 72 Nguyễn Trãi, P. Thượng Đình, Q. Thanh xuân, HN <br> Email: contact.eyewear@gmail.com<br> Hotline: 1900 638 096</p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Sản phẩm</h6>
                    <ul class="footer-links">
                        <li><a href="">Gọng kính</a></li>
                        <li><a href="">Kính râm </a></li>
                        <li><a href="">Tròng kính</a></li>
                        <li><a href="">Phụ kiện</a></li>

                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Thông tin</h6>
                    <ul class="footer-links">
                        <li><a href="http://scanfcode.com/about/">Liên hệ</a></li>
                        <li><a href="http://scanfcode.com/contact/">Bảo hành</a></li>
                        <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Đổi trả</a></li>
                        <li><a href="http://scanfcode.com/privacy-policy/">Chính sách bảo mật</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <img src="<?php echo base_url('uploads/dangkybct.png'); ?>" width="140px">
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>
<script>
    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img ")
    const imgContainer = document.querySelector('.aspect-ratio-169')
    const dotItem = document.querySelectorAll(".dot")
    let imgNuber = imgPosition.length
    let index = 0
        //console.log(imgPosition)
    imgPosition.forEach(function(image, index) {
        image.style.left = index * 100 + "%"
        dotItem[index].addEventListener("click", function() {
            slider(index)
        })

    })

    function imgSlide() {
        index++;
        console.log(index)
        if (index >= imgNuber) {
            index = 0
        }
        slider(index)
    }

    function slider(index) {
        imgContainer.style.left = "-" + index * 100 + "%"
        const dotActive = document.querySelector('.active')
        dotActive.classList.remove("active")
        dotItem[index].classList.add("active")
    }
    setInterval(imgSlide, 5000)
</script>

</html>
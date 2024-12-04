<footer class="pt-15 pt-lg-20 pb-16 footer bg-section-4">
<div class="container container-xxl pt-4">
<div class="row">
<?php
$data = admin_get_contract();
foreach ($data as $value) {
    extract($value);
}?>
<div class="col-lg col-md-4 col-12 mb-11 mb-lg-0 fs-14px">
<h3 class="fs-5 mb-6 ">H2CL CLOTHING</h3>
<!-- <p class="pe-xl-18 lh-2">
Tên: <a class href="#"><u class="fw-medium"><?=$ten_doanh_nghiep?></u></a>
</p> -->
<p class="pe-xl-18 lh-2">
ĐỊA CHỈ: <a class href="#"><u class="fw-medium"><?=$dia_chi?></u></a>
</p>
<p class="mb-0 lh-2">LIÊN HỆ: <strong class="text-body-emphasis">+84 <?=$sdt?></strong>
<br>
EMAIL: <strong class="text-body-emphasis"><?=$email?></strong>
</p>
<p> GIỜ HOẠT ĐỘNG: <br> <strong class="text-body-emphasis">6:30 - 18:30 Hàng Ngày</strong> </p>
</div>
<div class="col-lg col-md-4 col-12 mb-11 mb-lg-0">
<h3 class="fs-5 mb-6 ">CHÍNH SÁCH</h3>
<ul class="list-unstyled mb-0 fw-medium ">
<!-- <li class="pt-3 mb-4">
<a href="index.php?act=gioithieu" title="Contact Us" class="text-body">Liên Hệ</a>
</li> -->
<li class="pt-3 mb-4">
<a href="index.php?act=gioithieu" title="Terms &amp; Conditions" class="text-body">ĐIỀU KIỆN MUA HÀNG</a>
</li>
<li class="pt-3 mb-4">
<a href="index.php?act=gioithieu" title="Privacy Policy" class="text-body">CHÍNH SÁCH BẢO MẬT</a>
</li>
<li class="pt-3 mb-4">
<a href="admin/admin.php" title="Privacy Policy" class="text-body">CÀI ĐẶT COOKIE</a>
</li>
</ul>
</div>
<div class="col-lg-5 col-12 mb-11 mb-lg-0">
<h3 class="mb-4 ">Nhận thông tin khuyến mãi</h3>
<p class="lh-2 ">Nhập Email Để Nhận Thông Tin Của Chúng Tôi.</p>
<form class=" pt-8">
<div class="input-group position-relative">
<input type="email" class="form-control bg-body rounded-left" placeholder="Nhập địa chỉ mail...">
<button type="submit" class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary ms-0">
Đăng Ký
</button>
</div>
</form>
</div>
</div>
<div class="row align-items-center mt-0 mt-lg-20 pt-lg-4">
<div class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-center order-2 order-lg-1 fs-6 mt-8 mt-lg-0">
<p class="mb-0">© H2CL Clothing 2024</p>
<ul class="list-inline fs-18px ms-6 mb-0">
<li class="list-inline-item me-8">
<a href="#"><i class="fab fa-twitter"></i></a>
</li>
<li class="list-inline-item me-8">
<a href="#"><i class="fab fa-facebook-f"></i></a>
</li>
<li class="list-inline-item me-8">
<a href="#"><i class="fab fa-instagram"></i></a>
</li>
<li class="list-inline-item">
<a href="#"><i class="fab fa-youtube"></i></a>
</li>
</ul>
</div>
</div>
</div>
</footer>
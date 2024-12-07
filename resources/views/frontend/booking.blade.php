@extends('frontend.main')
@section('content')
<section id="booking">
    <div class="container">
        <h1 class="title">Tổng Quan Về Chuyến Đi</h1>
        <h2 class="section-title">Thông Tin Liên Lạc</h2>
        <div class="form-container">
            <form action="/booking_add" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Họ và tên <span>*</span></label>
                        <input type="text" class="form-control" id="name" placeholder="Nhập Họ và tên" name="booking_ho_ten">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email <span>*</span></label>
                        <input type="email" class="form-control" id="email" placeholder="ex@gmail.com" name="booking_email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="phone">Số điện thoại <span>*</span></label>
                        <input type="text" class="form-control" id="phone" placeholder="Nhập số điện thoại liên hệ" name="booking_so_dien_thoai">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="address">Số hành khách<span>*</span></label>
                        <input type="number" class="form-control" id="address" placeholder="Nhập số lượng khách đi" name="booking_so_hanh_khach">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Ngày đi <span>*</span></label>
                        <input type="date" class="form-control" id="name" name="booking_ngay_di">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Giá</label>
                        <input type="text" class="form-control" id="" name="booking_gia" value="{{number_format($products->tour_gia_ban_giam_gia)}}" readonly>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-tour ">
                        <label for="name">Tên Tour</label>
                        <input type="text" value="{{$products->tour_ten}}" name="booking_ten_tour" class="form-control" id="name" readonly>
                    </div>
                </div>
                <button type="submit" class="btn btn-booking">Đặt Ngay</button>
                @csrf
            </form>
        </div>
</section>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const soHanhKhachInput = document.querySelector('input[name="booking_so_hanh_khach"]');
        const giaInput = document.querySelector('input[name="booking_gia"]');
        const giaMotKhach = parseFloat("{{ $products->tour_gia_ban_giam_gia }}".replace(/,/g, '')); // Lấy giá trị ban đầu và chuyển sang số

        soHanhKhachInput.addEventListener('input', function() {
            const soHanhKhach = parseInt(this.value) || 1; // Lấy số hành khách, mặc định là 1 nếu không hợp lệ
            const tongGia = soHanhKhach * giaMotKhach;
            giaInput.value = new Intl.NumberFormat('vi-VN', {
                style: 'decimal'
            }).format(tongGia); // Định dạng tiền tệ
        });
    });
</script>
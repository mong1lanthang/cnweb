@extends('frontend.main')
@section('content')
<section id="tour-detail" class="p-5">
    <div class="container">
        <div class="tour-detail__header">
            <div class="tour-detail__header-left">
                <h1>{{$products->tour_ten}}</h1>
            </div>
            <div class="tour-detail__header-right">
                <div class="top">
                    <span>{{number_format($products->tour_gia_ban_giam_gia)}}</span>
                    <span>VNĐ/người</span>
                </div>
                <div class="bottom">
                    <a href="/booking/{{$products->id}}"><button type="button" class="btn btn-style">Đặt Ngay</button></a>
                </div>
            </div>
        </div>

        <div class="gallery">
            <div class="row">
                @php
                $imgs = explode('*', $products -> tour_anh_chi_tiet);
                @endphp
                <div class="col-6 px-0">
                    <div class="img-tour">
                        <img src="{{asset($imgs[0])}}" alt="">
                    </div>
                </div>
                <div class="col-3 pe-0">
                    <div class="row">
                        <div class="img-tour">
                            <img src="{{asset($imgs[1])}}" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="img-tour">
                            <img src="{{asset($imgs[2])}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="row">
                        <div class="img-tour">
                            <img src="{{asset($imgs[3])}}" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="img-tour">
                            <img src="{{asset($imgs[4])}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Phần tử overlay -->
        <div id="overlay" class="overlay">
            <span class="close" onclick="closeOverlay()"><i class="fa-solid fa-xmark"></i></span>
            <img id="overlayImage" class="overlay-image" src="" alt="Zoomed Image">
            <button class="prev" onclick="prevImage()"><i class="fa-solid fa-angle-left"></i></button>
            <button class="next" onclick="nextImage()"><i class="fa-solid fa-angle-right"></i></button>
        </div>

        <div class="row">
            <div class="col-12 col-md-8">
                <div class="overview">
                    <h2>Tổng Quan</h2>
                    <div class="endow">
                        {!!$products->tour_tong_quan!!}
                    </div>
                </div>
                <div class="program">
                    <h2>Lịch Trình</h2>
                    <div class="schedule">
                        {!!$products->tour_chi_tiet_lich_trinh!!}
                    </div>
                </div>
                <div class="regulations">
                    <h2>Chính sách</h2>
                    <div class="policy">
                        {!!$products->tour_chinh_sach!!}
                    </div>
                </div>
                <div class="notes">
                    <h2>Ghi chú</h2>
                    <div class="notes_detail">
                        {!!$products->tour_ghichu!!}
                    </div>
                </div>
                <div class="tour-price-details">
                    <h2>Hình thức thanh toán</h2>
                    <div class="payment_method">
                        {!!$products->tour_hinh_thuc_thanh_toan!!}
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="box-buy-ticket">
                    <h4>Thông tin cơ bản</h4>
                    <ul>
                        <li>Nơi khởi hành: {{$products->tour_dia_diem}}</li>
                        <li>Phương tiện: {{$products->tour_phuong_tien}}</li>
                        <li>Thời lượng: {{$products->tour_thoi_luong}}</li>
                    </ul>
                    <div class="ticket-price">
                        <div class="ticket-price-detail">
                            <span>{{number_format($products->tour_gia_ban_giam_gia)}}</span>
                            <span>VNĐ/người</span>
                        </div>
                    </div>
                    <div class="ticket-botton">
                        <a href="/booking/{{$products->id}}"><button type="button" class="btn btn-style">Đặt Ngay</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
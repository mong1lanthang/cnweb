@extends('frontend.main')
@section('content')
<div style="padding-top: 40px;" class="order-confirmation-wrapper container" id="confirm-booking">
    <div class="order-confirmation">
        <p class="order-id">Xác nhận đơn hàng: <strong>{{session('booking_ho_ten')}}#{{session('booking_id')}}</strong></p>
        <div class="confirmation-box">
            <p>Đơn hàng của bạn đã được gửi <strong>Thành công!</strong></p>
            <p>Vui lòng check <strong>Email</strong> đã đăng ký để nhận và xác nhận Đơn hàng</p>
            <a href="/"><button class="btn btn-dark continue-btn">Quay về trang chủ</button></a>
        </div>
    </div>
</div>
@endsection
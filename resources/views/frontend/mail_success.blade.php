@extends('frontend.main')
@section('content')
<div style="padding-top: 40px;" class="order-confirmation-wrapper container" id="confirm-booking">
    <div class="order-confirmation">
        <p class="order-id">Xác Nhận Email Thành Công!</p>
        <div class="confirmation-box">
            <p>Đơn hàng của bạn đã xác nhận <strong>Thành công!</strong></p>
            <p>Cảm ơn bản đã chọn dịch vụ của chúng tôi</p>
            <a href="/"><button class="btn btn-dark continue-btn">Quay về trang chủ</button></a>
        </div>
    </div>
</div>
@endsection
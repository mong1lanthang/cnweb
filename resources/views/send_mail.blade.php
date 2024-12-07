<!DOCTYPE html>
<html>

<head>
    <title>Xác Nhận Đặt Tour</title>
</head>

<body>
    <h3 style="font-family: Arial, sans-serif; color: #333;">Xác Nhận Đặt Tour</h3>
    <p style="font-family: Arial, sans-serif; color: #333;">Xin chào {{ $booking->booking_ho_ten }},</p>
    <p style="font-family: Arial, sans-serif; color: #333;">Cảm ơn bạn đã đặt tour tại công ty chúng tôi. Dưới đây là
        thông tin chi tiết của tour bạn đã chọn:</p>

    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Tour</th>
            <td style="border: 1px solid #ddd; padding: 8px;">{{ $booking->booking_ten_tour }}</td>
        </tr>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Giá</th>
            <td style="border: 1px solid #ddd; padding: 8px;">{{$booking->booking_gia }} VNĐ</td>
        </tr>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Ngày Khởi Hành
            </th>
            <td style="border: 1px solid #ddd; padding: 8px;">{{$booking->booking_ngay_di }}</td>
        </tr>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Số Lượng Khách
            </th>
            <td style="border: 1px solid #ddd; padding: 8px;">{{ $booking->booking_so_hanh_khach }}</td>
        </tr>
        <!-- Thêm các trường thông tin khác tùy theo nhu cầu -->
    </table>
    <p style="font-family: Arial, sans-serif; color: #333;">Vui lòng click vào link dưới đây để xác nhận đặt tour:</p>
    <a href="{{ $confirmationUrl }}">Xác nhận đặt tour</a>
    
    <p style="font-family: Arial, sans-serif; color: #333;">Chúng tôi sẽ liên hệ với bạn qua email
        {{ $booking->booking_email }} hoặc số điện thoại {{$booking->booking_so_dien_thoai }} để hoàn tất thủ tục
        đặt tour.
    </p>

    <p style="font-family: Arial, sans-serif; color: #333;">Trân trọng,</p>
    <p style="font-family: Arial, sans-serif; color: #333;">Đội ngũ hỗ trợ khách hàng</p>
</body>
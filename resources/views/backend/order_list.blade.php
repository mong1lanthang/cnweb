@extends ('backend.main')
@section('content')
<div class="admin-content-main">
    <div class="admin-content-main-title">
        <h3>Danh sách vé</h3>
    </div>
    <div style="max-width: 1255px" class="admin-content-main-content">
        <div style="margin: 0;" class="booking-management-wrapper">
            <h2>Quản Lý Vé Đặt Tour</h2>
            <table class="booking-management-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Họ Tên</th>
                        <th>Email</th>
                        <th>Số Điện Thoại</th>
                        <th>Số Lượng Khách</th>
                        <th>Tên Tour</th>
                        <th>Ngày Đi</th>
                        <th>Giá</th>
                        <th>Trạng Thái</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                    <tr>
                        <td>{{$booking->id}}</td>
                        <td>{{$booking->booking_ho_ten}}</td>
                        <td>{{$booking->booking_email}}</td>
                        <td>{{$booking->booking_so_dien_thoai}}</td>
                        <td>{{$booking->booking_so_hanh_khach}}</td>
                        <td>{{$booking->booking_ten_tour}}</td>
                        <td>{{$booking->booking_ngay_di}}</td>
                        <td>{{$booking->booking_gia}}</td>
                        <td>
                            <div class="{{ $booking->booking_trang_thai == 1 ? 'confirmed' : 'unconfirmed' }}">
                                {{ $booking->booking_trang_thai == 1 ? 'Đã xác nhận' : 'Chưa xác nhận' }}
                            </div>
                        </td>
                        <td><a onclick="removeRow(product_id=<?php echo $booking->id ?>,url='/booking_delete')" href="#" style="color: red;">Xóa</a></td>
                    </tr>
                    @endforeach

                    <!-- Thêm các hàng khác nếu cần -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
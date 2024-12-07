@extends ('backend.main')
@section('content')
<div class="admin-content-main">
    <div class="admin-content-main-title">
        <h3>Danh sách Tour</h3>
    </div>
    <div class="admin-content-main-content">
        <div class="tour-list-wrapper">
            <h2>Danh Sách Tour</h2>
            <table class="tour-list-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên Tour</th>
                        <th>Thời Lượng</th>
                        <th>Phương Tiện</th>
                        <th>Giá</th>
                        <th>Ảnh bìa</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{$product -> id}}</td>
                        <td>{{$product -> tour_ten}}</td>
                        <td>{{$product -> tour_thoi_luong}}</td>
                        <td>{{$product -> tour_phuong_tien}}</td>
                        <td>{{number_format($product -> tour_gia_ban_giam_gia)}}</td>
                        <td><img style="width: 70px" src="{{asset($product->tour_anh_bia)}}" alt=""></td>
                        <td><a href="/admin/product_edit/{{$product->id}}" class="action-link link-edit">Sửa</a></td>
                        <td>
                            <a onclick="removeRow(product_id=<?php echo $product -> id?>,url='/admin/product_delete')" href="#" class="action-link link-delete">Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                    <!-- Thêm các hàng khác cho các tour khác -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
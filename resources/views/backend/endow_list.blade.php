@extends ('backend.main')
@section('content')
<div class="admin-content-main">
    <div class="admin-content-main-title">
        <h3>Danh Sách Ưu Đãi</h3>
    </div>
    <div class="admin-content-main-content">
        <div class="tour-list-wrapper">
            <h2>Danh Sách Ưu Đãi</h2>
            <table class="tour-list-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên Ưu Đãi</th>
                        <th>Ảnh Bìa</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($endows as $endow)
                    <tr>
                        <td>{{$endow->id}}</td>
                        <td>{{$endow->endow_ten}}</td>
                        <td><img style="width: 70px" src="{{asset($endow->endow_anh_bia)}}" alt=""></td>
                        <td><a href="/admin/endow_edit/{{$endow->id}}" class="action-link link-edit">Sửa</a></td>
                        <td>
                            <a onclick="removeRow(product_id=<?php echo $endow->id ?>, url='/admin/endow_delete')" href="#" class="action-link link-delete">Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

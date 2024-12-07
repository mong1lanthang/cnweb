@extends ('backend.main')
@section('content')
<div class="admin-content-main">
    <div class="admin-content-main-title">
        <h3>Danh Sách Ưu Đãi</h3>
    </div>
    <div class="admin-content-main-content">
        <div class="tour-list-wrapper">
            <h2>Danh Sách Tin Tức và Sự Kiện</h2>
            <table class="tour-list-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên Tin Tức Và Sự Kiện</th>
                        <th>Ảnh Bìa</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($new_events as $new_event)
                    <tr>
                        <td>{{$new_event->id}}</td>
                        <td>{{$new_event->new_event_ten}}</td>
                        <td><img style="width: 70px" src="{{asset($new_event->new_event_anh_bia)}}" alt=""></td>
                        <td><a href="/admin/new_event_edit/{{$new_event->id}}" class="action-link link-edit">Sửa</a></td>
                        <td>
                            <a onclick="removeRow(product_id=<?php echo $new_event->id ?>, url='/admin/new_event_delete')" href="#" class="action-link link-delete">Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

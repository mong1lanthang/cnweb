@extends ('backend.main')
@section('content')
<div class="admin-content-main">
    <div class="admin-content-main-title">
        <h3>Trang chủ Admin</h3>
    </div>
    <div class="admin-content-main-content">
        <div class="admin-info-wrapper">
            <h2>Thông Tin Quản Trị Viên</h2>
            <div class="admin-info-item">
                <label for="full-name">Họ và Tên:</label>
                <p id="full-name">{{ $admin->name }}</p>
            </div>
            <div class="admin-info-item">
                <label for="email">Email:</label>
                <p id="email">{{ $admin->email }}</p>
            </div>
            <div class="admin-info-item">
                <label for="role">Vai Trò:</label>
                <p id="role">Quản Trị Viên</p>
            </div>
            <div class="admin-info-item">
                <label for="date-joined">Ngày Tham Gia:</label>
                <p id="date-joined">{{$admin->created_at->format('d-m-Y')}}</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('nameAdmin')
{{ $admin->name }}
@endsection
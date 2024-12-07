@extends ('backend.main')
@section('content')
<div class="admin-content-main">
    <div class="admin-content-main-title">
        <h3>Thêm Ưu Đãi</h3>
    </div>
    <div class="admin-content-main-content">
        <!-- Wrapper cho tất cả các input -->
        <div class="admin-inputs-wrapper">
            <div class="admin-content-main-content-input">
                <label for="endow-name">Tên Ưu Đãi:</label>
                <input type="text" id="endow-name" placeholder="Nhập tên ưu đãi" name="endow_ten">
            </div>
        </div>

        <!-- Wrapper cho các trường CKEditor -->
        <div class="admin-textareas-wrapper">
            <div class="admin-content-main-content-textarea">
                <label for="endow-thumbnail">Ảnh Bìa:</label>
                <textarea id="endow-thumbnail" name="endow_anh_bia" rows="5"></textarea>
            </div>
            <div class="admin-content-main-content-textarea">
                <label for="endow-content">Nội Dung Ưu Đãi:</label>
                <textarea id="endow-content" name="endow_noi_dung" rows="5"></textarea>
            </div>
        </div>

        <!-- Nút Thêm Ưu Đãi -->
        <button type="button" class="btn btn-add-endow">Thêm Ưu Đãi</button>
    </div>
</div>
@endsection

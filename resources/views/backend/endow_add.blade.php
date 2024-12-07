@extends ('backend.main')
@section('content')
<div class="admin-content-main">
    <div class="admin-content-main-title">
        <h3>Thêm Ưu Đãi</h3>
    </div>
    <div class="admin-content-main-content">
        <form action="/admin/endow_add_" method="post">
            <!-- Wrapper cho tất cả các input -->
            <div class="admin-inputs-wrapper">
                <div class="admin-content-main-content-input">
                    <label for="endow-name">Tên Ưu Đãi:</label>
                    <input type="text" id="endow-name" placeholder="Nhập tên ưu đãi" name="endow_ten" value="{{old('endow_ten')}}">
                </div>
            </div>
            <!-- Wrapper cho các trường CKEditor -->
            <div class="admin-textareas-wrapper">
                <div class="admin-content-main-content-right">
                    <div class="admin-content-main-content-right-img">
                        <label for="file">Ảnh bìa</label>
                        <input id="file" type="file">
                        <input id="input-file-img-hiden" type="hidden" name="endow_anh_bia">
                        <div class="img-show" id="input-file-img">
                        </div>
                    </div>
                </div>
                <div class="admin-content-main-content-textarea">
                    <label for="endow-content">Nội Dung Ưu Đãi:</label>
                    <textarea id="policy" rows="5" name="endow_noi_dung">{{old('endow_noi_dung')}}</textarea>
                </div>
            </div>
            <!-- Nút Thêm Ưu Đãi -->
            <button type="submit" class="btn btn-add-tour mt-3">Thêm Ưu Đãi</button>
            @csrf
        </form>
    </div>
</div>
@endsection

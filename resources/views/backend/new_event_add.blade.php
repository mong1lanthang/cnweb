@extends ('backend.main')
@section('content')
<div class="admin-content-main">
    <div class="admin-content-main-title">
        <h3>Thêm Tin Tức và Sự Kiện</h3>
    </div>
    <div class="admin-content-main-content">
        <form action="/admin/new_event_add_" method="post">
            <!-- Wrapper cho tất cả các input -->
            <div class="admin-inputs-wrapper">
                <div class="admin-content-main-content-input">
                    <label for="new_event_ten">Tên Tin Tức và Sự Kiện:</label>
                    <input type="text" placeholder="Nhập tên" name="new_event_ten" value="{{old('new_event_ten')}}">
                </div>
            </div>
            <!-- Wrapper cho các trường CKEditor -->
            <div class="admin-textareas-wrapper">
                <div class="admin-content-main-content-right">
                    <div class="admin-content-main-content-right-img">
                        <label for="file">Ảnh bìa</label>
                        <input id="file" type="file">
                        <input id="input-file-img-hiden" type="hidden" name="new_event_anh_bia">
                        <div class="img-show" id="input-file-img">
                        </div>
                    </div>
                </div>
                <div class="admin-content-main-content-textarea">
                    <label for="endow-content">Nội Dung Tiêu Đề:</label>
                    <textarea id="" rows="5" name="new_event_tieu_de">{{old('new_event_tieu_de')}}</textarea>
                </div>
                <div class="admin-content-main-content-textarea">
                    <label for="endow-content">Nội Dung Tin Tức và Sự Kiện:</label>
                    <textarea id="policy" rows="5" name="new_event_noi_dung">{{old('new_event_noi_dung')}}</textarea>
                </div>
            </div>
            <!-- Nút Thêm Ưu Đãi -->
            <button type="submit" class="btn btn-add-tour mt-3">Thêm</button>
            @csrf
        </form>
    </div>
</div>
@endsection

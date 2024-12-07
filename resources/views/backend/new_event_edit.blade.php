@extends ('backend.main')
@section('content')
<div class="admin-content-main">
    <div class="admin-content-main-title">
        <h3>Sửa Tin Tức và Sự Kiện</h3>
    </div>
    <div class="admin-content-main-content">
        <form action="/admin/new_event_edit/{{$new_event->id}}" method="post">
            <!-- Wrapper cho tất cả các input -->
            <div class="admin-inputs-wrapper">
                <div class="admin-content-main-content-input">
                    <label for="new_event_ten">Tên Tin Tức và Sự Kiện:</label>
                    <input type="text" placeholder="Nhập tên" value="{{$new_event->new_event_ten}}" name="new_event_ten">
                </div>
            </div>
            <!-- Wrapper cho các trường CKEditor -->
            <div class="admin-textareas-wrapper">
                <div class="admin-content-main-content-right">
                    <div class="admin-content-main-content-right-img">
                        <label for="file">Ảnh bìa</label>
                        <input id="file" type="file">
                        <input id="input-file-img-hiden" type="hidden" name="new_event_anh_bia" value="{{$new_event->new_event_anh_bia}}">
                        <div class="img-show" id="input-file-img">
                            <img src="{{asset($new_event->new_event_anh_bia)}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="admin-content-main-content-textarea">
                    <label for="endow-content">Nội Dung Tiêu Đề:</label>
                    <textarea id="" rows="5" name="new_event_tieu_de">{{$new_event->new_event_tieu_de}}</textarea>
                </div>
                <div class="admin-content-main-content-textarea">
                    <label for="endow-content">Nội Dung Tin Tức và Sự Kiện:</label>
                    <textarea id="policy" rows="5" name="new_event_noi_dung">{{$new_event->new_event_noi_dung}}</textarea>
                </div>
            </div>
            <!-- Nút Thêm Ưu Đãi -->
            <button type="submit" class="btn btn-add-tour mt-3">Sửa</button>
            @csrf
        </form>
    </div>
</div>
@endsection

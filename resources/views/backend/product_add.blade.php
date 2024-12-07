@extends ('backend.main')
@section('content')
<div class="admin-content-main">
    <div class="admin-content-main-title">
        <h3>Thêm Tour</h3>
    </div>
    <div class="admin-content-main-content">
        <form action="/admin/product_add_" method="post">
            <!-- Wrapper cho tất cả các input -->
            <div class="admin-inputs-wrapper">
                <div class="admin-content-main-content-input">
                    <label for="tour-name">Tên Tour:</label>
                    <input type="text" id="tour-name" placeholder="Nhập tên tour" name="tour_ten" value="{{old('tour_ten')}}">
                </div>
                <!-- <div class="admin-content-main-content-input">
                <label for="thumbnail">Ảnh bìa:</label>
                <input type="text" id="thumbnail">
                <button type="button" class="btn btn-primary">Duyệt ảnh</button>
            </div> -->
                <div class="admin-content-main-content-right">
                    <div class="admin-content-main-content-right-img">
                        <label for="file">Ảnh bìa</label>
                        <input id="file" type="file">
                        <input id="input-file-img-hiden" type="hidden" name="tour_anh_bia">
                        <div class="img-show" id="input-file-img">
                        </div>
                    </div>
                </div>
                <div class="admin-content-main-content-right">
                    <div class="admin-content-main-content-right-img">
                        <label for="files">Ảnh chi tiết</label>
                        <input id="files" type="file" multiple>
                        <div class="img-show" id="input-file-imgs">
                        </div>
                    </div>
                </div>
                <div class="admin-content-main-content-input">
                    <label for="duration">Thời Lượng Tour:</label>
                    <input type="text" id="duration" placeholder="Nhập thời lượng tour" name="tour_thoi_luong" value="{{old('tour_thoi_luong')}}">
                </div>
                <div class="admin-content-main-content-input">
                    <label for="transport">Phương Tiện:</label>
                    <input type="text" id="transport" placeholder="Nhập phương tiện" name="tour_phuong_tien" value="{{old('tour_phuong_tien')}}">
                </div>
            </div>
            <!-- Wrapper cho tất cả các textarea -->
            <div class="admin-textareas-wrapper">
                <div class="admin-content-main-content-textarea">
                    <label for="">Tổng quan tour:</label>
                    <textarea id="tour-overview" rows="5" placeholder="Nhập tổng quan tour" name="tour_tong_quan" value="{{old('tour_tong_quan')}}"></textarea>
                </div>
                <div class="admin-content-main-content-textarea">
                    <label for="tour-schedule">Tour Chi Tiết Lịch Trình:</label>
                    <textarea id="tour-schedule" rows="5" placeholder="Nhập chi tiết lịch trình" name="tour_chi_tiet_lich_trinh" value="{{old('tour_chi_tiet_lich_trinh')}}"></textarea>
                </div>
                <div class="admin-content-main-content-textarea">
                    <label for="policy">Chính Sách:</label>
                    <textarea id="policy" rows="5" placeholder="Nhập chính sách" name="tour_chinh_sach" value="{{old('tour_chinh_sach')}}"></textarea>
                </div>
                <div class="admin-content-main-content-textarea">
                    <label for="notes">Ghi Chú:</label>
                    <textarea id="notes" rows="5" placeholder="Nhập ghi chú" name="tour_ghichu" value="{{old('tour_ghi_chu')}}"></textarea>
                </div>
                <div class="admin-content-main-content-textarea">
                    <label for="payment">Hình Thức Thanh Toán:</label>
                    <textarea id="payment" rows="5" placeholder="Nhập hình thức thanh toán" name="tour_hinh_thuc_thanh_toan" value="{{old('tour_hinh_thuc_thanh_toan')}}"></textarea>
                </div>
            </div>
            <!-- chi tiết giá -->
            <div class="price-container">
                <div class="price-inputs">
                    <div class="price-input">
                        <label for="group-price">Giá bán gốc:</label>
                        <input type="text" id="group-price" placeholder="Nhập giá bán gốc" name="tour_gia_ban_goc" value="{{old('tour_gia_ban_goc')}}">
                    </div>
                </div>
                <div class="price-textarea">
                    <label for="price-details">Giá bán ưu đãi:</label>
                    <input type="text" style="padding: 10px;
                                            border: 1px solid #ddd;
                                            border-radius: 4px;
                                            font-size: 16px;
                                            transition: border-color 0.3s;" placeholder="Nhập giá bán ưu đãi" name="tour_gia_ban_giam_gia" value="{{old('tour_gia_ban_giam_gia')}}">
                </div>
            </div>

            <!-- Wrapper cho tất cả các input SEO -->
            <div class="admin-seo-wrapper">
                <div class="admin-content-main-content-input">
                    <label for="location">Địa Điểm Tour:</label>
                    <input type="text" id="location" placeholder="Nhập địa điểm tour" name="tour_dia_diem" value="{{old('tour_dia_diem')}}">
                </div>
            </div>

            <!-- Nút Thêm Tour -->
            <button type="submit" class="btn btn-add-tour">Thêm Tour</button>
            @csrf
        </form>
    </div>
</div>
@endsection
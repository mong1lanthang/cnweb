@extends ('backend.main')
@section('content')
<div class="admin-content-main">
    <div class="admin-content-main-title">
        <h3>Thêm Tour</h3>
    </div>
    <div class="admin-content-main-content">
        <!-- Wrapper cho tất cả các input -->
        <div class="admin-inputs-wrapper">
            <div class="admin-content-main-content-input">
                <label for="tour-name">Tên Tour:</label>
                <input type="text" id="tour-name" placeholder="Nhập tên tour">
            </div>
            <div class="admin-content-main-content-input">
                <label for="thumbnail">Thumbnail:</label>
                <input type="text" id="thumbnail" placeholder="Nhập đường dẫn thumbnail">
                <button type="button" class="btn btn-primary">Duyệt ảnh</button>
            </div>
            <div class="admin-content-main-content-input">
                <label for="overview">Tổng Quan Tour:</label>
                <input type="text" id="overview" placeholder="Nhập tổng quan tour">
            </div>
            <div class="admin-content-main-content-input">
                <label for="duration">Thời Lượng Tour:</label>
                <input type="text" id="duration" placeholder="Nhập thời lượng tour">
            </div>
            <div class="admin-content-main-content-input">
                <label for="transport">Phương Tiện:</label>
                <input type="text" id="transport" placeholder="Nhập phương tiện">
            </div>
        </div>

        <!-- Wrapper cho tất cả các textarea -->
        <div class="admin-textareas-wrapper">
            <div class="admin-content-main-content-textarea">
                <label for="tour-schedule">Tour Chi Tiết Lịch Trình:</label>
                <textarea id="tour-schedule" rows="5" placeholder="Nhập chi tiết lịch trình"></textarea>
            </div>
            <div class="admin-content-main-content-textarea">
                <label for="policy">Chính Sách:</label>
                <textarea id="policy" rows="5" placeholder="Nhập chính sách"></textarea>
            </div>
            <div class="admin-content-main-content-textarea">
                <label for="notes">Ghi Chú:</label>
                <textarea id="notes" rows="5" placeholder="Nhập ghi chú"></textarea>
            </div>
            <div class="admin-content-main-content-textarea">
                <label for="payment">Hình Thức Thanh Toán:</label>
                <textarea id="payment" rows="5" placeholder="Nhập hình thức thanh toán"></textarea>
            </div>
        </div>
        <!-- chi tiết giá -->
        <div class="price-container">
            <div class="price-inputs">
                <div class="price-input">
                    <label for="individual-price">Giá bán lẻ 1 người:</label>
                    <input type="text" id="individual-price" placeholder="Nhập giá bán lẻ 1 người">
                </div>
                <div class="price-input">
                    <label for="group-price">Giá bán lẻ nhóm:</label>
                    <input type="text" id="group-price" placeholder="Nhập giá bán lẻ nhóm">
                </div>
            </div>
            <div class="price-textarea">
                <label for="price-details">Chi tiết giá tour:</label>
                <textarea id="price-details" rows="5" placeholder="Nhập chi tiết giá tour"></textarea>
            </div>
        </div>

        <!-- Wrapper cho tất cả các input SEO -->
        <div class="admin-seo-wrapper">
            <div class="admin-content-main-content-input">
                <label for="slug">Slug Đường Dẫn SEO:</label>
                <input type="text" id="slug" placeholder="Nhập slug SEO">
            </div>
            <div class="admin-content-main-content-input">
                <label for="seo-title">Tiêu Đề SEO:</label>
                <input type="text" id="seo-title" placeholder="Nhập tiêu đề SEO">
            </div>
            <div class="admin-content-main-content-input">
                <label for="seo-description">Mô Tả SEO:</label>
                <input type="text" id="seo-description" placeholder="Nhập mô tả SEO">
            </div>
            <div class="admin-content-main-content-input">
                <label for="search-category">Danh Mục Tìm Kiếm:</label>
                <input type="text" id="search-category" placeholder="Nhập danh mục tìm kiếm">
            </div>
            <div class="admin-content-main-content-input">
                <label for="location">Địa Điểm Tour:</label>
                <input type="text" id="location" placeholder="Nhập địa điểm tour">
            </div>
        </div>

        <!-- Nút Thêm Tour -->
        <button type="button" class="btn btn-add-tour">Cập Nhập Tour</button>
    </div>
    <footer class="footer">
        <p>KienTrucHau@ Nhóm 7 21CN1</p>
    </footer>
</div>
@endsection
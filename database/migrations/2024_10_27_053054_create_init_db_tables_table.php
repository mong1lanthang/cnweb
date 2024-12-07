<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_tour', function (Blueprint $table) {
            $table->id();
            $table->string('tour_ten')->nullable();
            $table->text('tour_anh_bia')->nullable();
            $table->text('tour_anh_chi_tiet')->nullable();
            $table->string('tour_thoi_luong')->nullable();
            $table->string('tour_phuong_tien')->nullable();
            $table->integer('tour_gia_ban_goc')->nullable();
            $table->integer('tour_gia_ban_giam_gia')->nullable();
            $table->text('tour_tong_quan')->nullable();
            $table->text('tour_chi_tiet_lich_trinh')->nullable();
            $table->text('tour_chinh_sach')->nullable();
            $table->text('tour_ghichu')->nullable();
            $table->text('tour_hinh_thuc_thanh_toan')->nullable();
            $table->text('tour_dia_diem')->nullable();
            $table->timestamps();
        });

        // table ưu đãi long bi
        Schema::create('tbl_endow', function (Blueprint $table) {
            $table->id();
            $table->string('endow_ten')->nullable();
            $table->text('endow_anh_bia')->nullable();
            $table->text('endow_noi_dung')->nullable();
            $table->timestamps();
        });

        Schema::create('tbl_booking', function (Blueprint $table) {
            $table->id();
            $table->string('booking_ten_tour')->nullable();
            $table->text('booking_gia')->nullable();
            $table->text('booking_ho_ten')->nullable();
            $table->text('booking_email')->nullable();
            $table->text('booking_ngay_di')->nullable();
            $table->text('booking_so_hanh_khach')->nullable();
            $table->text('booking_so_dien_thoai')->nullable();
            $table->integer('booking_trang_thai')->default(0);
            $table->text('booking_token')->nullable();
            $table->timestamps();
        });

        Schema::create('tbl_new_event', function (Blueprint $table) {
            $table->id();
            $table->text('new_event_ten')->nullable();
            $table->text('new_event_tieu_de')->nullable();
            $table->text('new_event_anh_bia')->nullable();
            $table->text('new_event_noi_dung')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_tour');
        // ưu đãi Longbi
        Schema::dropIfExists('tbl_endow');
        Schema::dropIfExists('tbl_booking');
        Schema::dropIfExists('tbl_new_event');
    }
};

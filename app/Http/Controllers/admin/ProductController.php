<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add_product()
    {
        return view('backend.product_add');
    }

    public function list_product()
    {
        $product = product::all();
        return view(
            'backend.product_list',
            [
                'products' => $product
            ]
        );
    }

    public function delete_product(Request $request)
    {
        product::find($request->product_id)->delete();
        return response()->json(
            [
                'success' => true
            ]
        );
    }

    public function edit_product(Request $request)
    {
        $product = product::find($request->id);
        return view('backend.product_edit', [
            'product' => $product
        ]);
    }

    public function update_product(Request $request)
    {
        $product = product::find($request->id);
        $product->tour_ten = $request->input('tour_ten');
        $product->tour_anh_bia = $request->input('tour_anh_bia');
        $product_tour_anh_chi_tiet = implode('*', $request->input('tour_anh_chi_tiet'));
        $product->tour_anh_chi_tiet = $product_tour_anh_chi_tiet;
        $product->tour_thoi_luong = $request->input('tour_thoi_luong');
        $product->tour_phuong_tien = $request->input('tour_phuong_tien');
        $product->tour_gia_ban_goc = $request->input('tour_gia_ban_goc');
        $product->tour_gia_ban_giam_gia = $request->input('tour_gia_ban_giam_gia');
        $product->tour_tong_quan = $request->input('tour_tong_quan');
        $product->tour_chi_tiet_lich_trinh = $request->input('tour_chi_tiet_lich_trinh');
        $product->tour_chinh_sach = $request->input('tour_chinh_sach');
        $product->tour_ghichu = $request->input('tour_ghichu');
        $product->tour_hinh_thuc_thanh_toan = $request->input('tour_hinh_thuc_thanh_toan');
        $product->tour_dia_diem = $request->input('tour_dia_diem');
        $product->save();
        return redirect('/admin/product_list');
    }
    public function insert_product(Request $request)
    {
        $product = new product();
        $product->tour_ten = $request->input('tour_ten');
        $product->tour_anh_bia = $request->input('tour_anh_bia');
        $product_tour_anh_chi_tiet = implode('*', $request->input('tour_anh_chi_tiet'));
        $product->tour_anh_chi_tiet = $product_tour_anh_chi_tiet;
        $product->tour_thoi_luong = $request->input('tour_thoi_luong');
        $product->tour_phuong_tien = $request->input('tour_phuong_tien');
        $product->tour_gia_ban_goc = $request->input('tour_gia_ban_goc');
        $product->tour_gia_ban_giam_gia = $request->input('tour_gia_ban_giam_gia');
        $product->tour_tong_quan = $request->input('tour_tong_quan');
        $product->tour_chi_tiet_lich_trinh = $request->input('tour_chi_tiet_lich_trinh');
        $product->tour_chinh_sach = $request->input('tour_chinh_sach');
        $product->tour_ghichu = $request->input('tour_ghichu');
        $product->tour_hinh_thuc_thanh_toan = $request->input('tour_hinh_thuc_thanh_toan');
        $product->tour_dia_diem = $request->input('tour_dia_diem');
        $product->save();
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\endow; // Đảm bảo rằng bạn đã định nghĩa model Endow
use Illuminate\Http\Request;

class EndowController extends Controller
{
    public function add_endow()
    {
        return view('backend.endow_add');
    }

    public function list_endow()
    {
        $endows = endow::all();
        return view(
            'backend.endow_list',
            [
                'endows' => $endows
            ]
        );
    }

    public function delete_endow(Request $request)
    {
        endow::find($request->product_id)->delete();
        return response()->json(
            [
                'success' => true
            ]
        );
    }

    public function edit_endow(Request $request)
    {
        $endow = endow::find($request->id);
        return view('backend.endow_edit', [
            'endow' => $endow
        ]);
    }

    public function update_endow(Request $request)
    {
        $endow = endow::find($request->id);
        $endow->endow_ten = $request->input('endow_ten');
        $endow->endow_anh_bia = $request->input('endow_anh_bia');
        $endow->endow_noi_dung = $request->input('endow_noi_dung');
        $endow->save();
        return redirect('/admin/endow_list');
    }

    public function insert_endow(Request $request)
    {
        $endow = new endow();
        $endow->endow_ten = $request->input('endow_ten');
        $endow->endow_anh_bia = $request->input('endow_anh_bia');
        $endow->endow_noi_dung = $request->input('endow_noi_dung');
        $endow->save();
        return redirect()->back();
    }
}

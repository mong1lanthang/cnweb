<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\new_event;
use Illuminate\Http\Request;

class NewEventController extends Controller
{
    //
    public function add_new_event()
    {
        return view('backend.new_event_add');
    }

    public function list_new_event()
    {
        $new_events = new_event::all();
        return view(
            'backend.new_event_list',
            [
                'new_events' => $new_events
            ]
        );
    }

    public function delete_new_event(Request $request)
    {
        new_event::find($request->product_id)->delete();
        return response()->json(
            [
                'success' => true
            ]
        );
    }

    public function edit_new_event(Request $request)
    {
        $new_event = new_event::find($request->id);
        return view('backend.new_event_edit', [
            'new_event' => $new_event
        ]);
    }

    public function update_new_event(Request $request)
    {
        $new_event = new_event::find($request->id);
        $new_event->new_event_ten = $request->input('new_event_ten');
        $new_event->new_event_tieu_de = $request->input('new_event_tieu_de');
        $new_event->new_event_anh_bia = $request->input('new_event_anh_bia');
        $new_event->new_event_noi_dung = $request->input('new_event_noi_dung');
        $new_event->save();
        return redirect('/admin/new_event_list');
    }

    public function insert_new_event(Request $request)
    {
        $new_event = new new_event();
        $new_event->new_event_ten = $request->input('new_event_ten');
        $new_event->new_event_tieu_de = $request->input('new_event_tieu_de');
        $new_event->new_event_anh_bia = $request->input('new_event_anh_bia');
        $new_event->new_event_noi_dung = $request->input('new_event_noi_dung');
        $new_event->save();
        return redirect()->back();
    }
}

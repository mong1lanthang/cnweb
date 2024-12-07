<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\Models\booking;
use App\Models\Endow;
use App\Models\new_event;
use App\Models\order;
use App\Models\product;
use App\Notifications\EmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class TourController extends Controller
{
    public function index()
    {
        $products = product::all();
        $endows = Endow::all();
        $new_events = new_event::all();
        // dd($products);
        return view('frontend.index', [
            'products' => $products,
            'endows' => $endows,
            'new_events' => $new_events
        ]);
    }

    public function contact()
    {
        return view('frontend.contact',);
    }
    public function booking(Request $request)
    {
        $products = product::find($request->id);
        return view('frontend.booking', [
            'products' => $products
        ]);
    }
    public function tour_detail(Request $request)
    {
        $products = product::find($request->id);
        return view('frontend.tour_detail', [
            'products' => $products
        ]);
    }
    public function endow_detail(Request $request)
    {
        $endows = Endow::find($request->id);
        return view('frontend.endow_detail', [
            'endows' => $endows
        ]);
    }

    public function order_list()
    {
        $bookings = order::all();
        return view(
            'backend.order_list',
            [
                'bookings' => $bookings
            ]
        );
    }

    public function new_event_detail(Request $request)
    {
        $new_events = new_event::find($request->id);
        return view('frontend.new_event_detail', [
            'new_events' => $new_events
        ]);
    }
    public function insert_booking(Request $request)
    {
        $token = Str::random(12);
        $booking = new booking();
        $booking->booking_ten_tour = $request->input('booking_ten_tour');
        $booking->booking_gia = $request->input('booking_gia');
        $booking->booking_ho_ten = $request->input('booking_ho_ten');
        $booking->booking_email = $request->input('booking_email');
        $booking->booking_ngay_di = $request->input('booking_ngay_di');
        $booking->booking_so_hanh_khach = $request->input('booking_so_hanh_khach');
        $booking->booking_so_dien_thoai = $request->input('booking_so_dien_thoai');
        $booking->booking_token = $token;
        $booking->save();
        Mail::to($booking->booking_email)->send(new SendMail($booking));
        Notification::route('mail', 'datdnk3@gmail.com')
            ->notify(new EmailNotification($booking));
        return redirect('/confirm_booking')->with('booking_ho_ten', $booking->booking_ho_ten)->with('booking_id', $booking->id);
    }
    public function delete_booking(Request $request)
    {
        order::find($request->product_id)->delete();
        return response()->json(
            [
                'success' => true
            ]
        );
    }

    public function confirmBooking($token)
    {
        $booking = Booking::where('booking_token', $token)->first();

        if ($booking) {
            $booking->booking_trang_thai = 1;
            $booking->save();

            return redirect('/confirm_booking_succcess')->with('success', 'Đặt tour đã được xác nhận!'); // Chuyển hướng và hiển thị thông báo
        } else {
            return redirect('/')->with('error', 'Link xác nhận không hợp lệ!'); // Xử lý trường hợp token không hợp lệ
        }
    }


    public function search(Request $request)
    {
        $query = $request->input("query");
        $tours = product::where("tour_ten", 'like', "%$query%")->get();
        $endows = Endow::all();
        $new_events = new_event::all();

        return view('frontend.index', [
            'products' => $tours,
            'endows' => $endows,
            'new_events' => $new_events
        ]);
    }
}

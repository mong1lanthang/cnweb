<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Endow;
use Illuminate\Http\Request;

class EndowController extends Controller
{

    public function endow_detail(Request $request){
        $endows = Endow::find($request->id);
        return view('frontend.endow_detail', [
            'endows' => $endows
        ]);
    }

}

<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Rate;
use App\Http\Requests\RateRequest;

class RatingController extends Controller
{
    public function sendRate(RateRequest $request){
        
        $rate = Rate::create([
            'userId'=> 1,
            'rate' => (int)$request->rate,
            'message' => $request->message,
        ]);
        return redirect()->back()->with('success', 'your message,here');   
    }
}

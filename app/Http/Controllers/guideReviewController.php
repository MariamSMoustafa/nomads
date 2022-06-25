<?php

namespace App\Http\Controllers;

use App\GuideReview;
use Illuminate\Http\Request;

class guideReviewController extends Controller
{
    //
    public function guideReview(){
        return view('auth.guideReview.guideReview');

    }
    public function storeGuideReview(Request $request)
    {
        GuideReview::create([
            'review' => $request->review,
            'rating' => $request -> rating,
        ]);

        return redirect('home');
    }
    protected function guirev(Request $request){

        $guirev=   GuideReview::create([

            'review' => $request['review'],
            'rating' => $request['rating'],
            'traveller_id'=> $request['traveller_id'],
            'guide_id'=> $request['guide_id'],

        ]);
        return response()->json($guirev,201);
    }
}

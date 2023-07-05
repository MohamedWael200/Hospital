<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Trait\UploadImageTrait;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //
    use UploadImageTrait;

    public function showFormReview(){
        return view('contact');
    }

    public function SaveReview(Request $request){
        $ima = $this->uploadReviewImage($request->revImage,'ReviewImage');
        Review::create([
           'Name' => $request->Name,
           'Email' => $request->Email,
            'Subject' => $request->Subject,
            'path' =>$ima,
            'Message' => $request->Message,
        ]);
    }
}

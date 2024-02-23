<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class ReviewController extends Controller
{
   public function index() {
      $reviews =  Reviews::all();
      return view('reviews.index', ['reviews' => $reviews]);
   }

   public function create() {
      return view('reviews.create');
   }

   public function store(Request $request){
       $data = $request->validate([
        'productName' => 'required',
        'reviewDetails' => 'required'
       ]);

       $newReview = Review::create($data);
       return redirect(route('review.index'));
   }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\DB;
class ReviewController extends Controller
{
    private $review;
    
    public function __construct(Review $review)
    {
        $this->review = $review;
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'product' => 'required',
            'rating' => 'required',
        ]);

        DB::transaction(function() use($request){
            $this->review->name = $request->name;
            $this->review->product = $request->product;
            $this->review->rating = $request->rating;
            $this->review->details = $request->details;
            $this->review->save();
            $images = [];
            foreach($request->image as $image){
                $images[] = [
                    'image' => 'data:image/' . $image->extension() . ';base64,' . base64_encode(file_get_contents($image))
                ];
            }
            $this->review->reviewImages()->createMany($images);
        }); 

        return response()->json($this->review, 201);
    }

    public function index()
    {
        $all_reviews = $this->review->latest()->get();

        return response()->json($all_reviews);
    }
}

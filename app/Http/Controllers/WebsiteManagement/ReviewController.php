<?php

namespace App\Http\Controllers\WebsiteManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Review;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Image;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    public function index(Request $request){
        $reviews = Review::latest()->where('status',1)->paginate(10);
        return view('admin.website.review.index',compact('reviews'));
    }

    public function add(Request $request)
    {
        return view('admin.website.review.add');
    }

    public function view(Request $request,$id){
        $data = Review::find($id);
        return view('admin.website.review.view',compact('data'));
    }

    public function edit(Request $request)
    {
        $data = Review::find($request->id);
        return view('admin.website.review.edit', compact('data'));
    }

    public function store(Request $request)
    {
        if (
            $request->name == ''||
            $request->description == ''||
            $request->star == ''
        ) {
            return response()->json([
                'error' => 'fill the required area',
                'name' => 'required',
                'description' => 'required',
                'star' => 'required',
            ]);
        }

        $review = new Review();
        $review->name = $request->name;
        $review->description = $request->description;
        $review->star = $request->star;
        $review->creator = Auth::user()->id;
        $review->created_at = Carbon::now()->toDateTimeString();
        $review->save();

        if($request->hasFile('banner')){
            $file = $request->file('banner');
            $path = Storage::put('uploads/review', $file);
            $review->banner = $path;
        }
        $review->slug = $review->id.uniqid(10);
        $review->save();

        $reviews = Review::where('status', 1)->latest()->paginate(10);
        $table_view = View('admin.website.review.table_data', ['reviews' => $reviews])->render();

        return response()->json([
            'data' => $reviews,
            'table' => $table_view,
            'error' => null,
        ]);
    }

    public function update(Request $request)
    {
        $review = Review::find($request->id);

        if (
            $request->name == ''||
            $request->description == ''||
            $request->star == ''
        ) {
            return response()->json([
                'error' => 'fill the required area',
                'name' => 'required',
                'description' => 'required',
                'star' => 'required',
            ]);
        }

        $review->name = $request->name;
        $review->description = $request->description;
        $review->star = $request->star;
        $review->save();

        if($request->hasFile('banner')){
            $file = $request->file('banner');
            $path = Storage::put('uploads/review', $file);
            $review->banner = $path;
        }

        $review->creator = Auth::user()->id;
        $review->updated_at = Carbon::now()->toDateTimeString();
        $review->save();

        $reviews = Review::where('status', 1)->latest()->paginate(10);
        $table_view = View('admin.website.review.table_data', ['reviews' => $reviews])->render();

        return response()->json([
            'data' => $reviews,
            'table' => $table_view,
            'error' => null,
        ]);
    }

    public function delete(Request $request, $id)
    {
        $review = Review::find($id);
        $review->status = 0;
        $review->save();
        return redirect()->back()->with('success', 'review deactivated successfully');
    }
}

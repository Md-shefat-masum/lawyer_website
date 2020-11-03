<?php

namespace App\Http\Controllers\WebsiteManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Banner;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Image;

class BannerController extends Controller
{
    public function index(Request $request){
        $banners = Banner::latest()->where('status',1)->paginate(10);
        return view('admin.website.banner.index',compact('banners'));
    }

    public function add(Request $request)
    {
        return view('admin.website.banner.add');
    }

    public function view(Request $request,$id){
        $data = Banner::find($id);
        return view('admin.website.banner.view',compact('data'));
    }

    public function edit(Request $request)
    {
        $data = Banner::find($request->id);
        return view('admin.website.banner.edit', compact('data'));
    }

    public function store(Request $request)
    {
        if (
            $request->heading_1 == '' ||
            $request->heading_2 == ''
        ) {
            return response()->json([
                'error' => 'fill the required area',
                'heading_1' => 'required',
                'heading_2' => 'required'
            ]);
        }

        if(!$request->hasFile('banner_image')){
            return response()->json([
                'error' => 'fill the required area',
                'banner_image' => 'required'
            ]);
        }

        $banner = new Banner();
        $banner->heading_1 = $request->heading_1;
        $banner->heading_2 = $request->heading_2;
        $banner->creator = Auth::user()->id;
        $banner->created_at = Carbon::now()->toDateTimeString();

        if ($request->hasFile('banner_image')) {
            $file = $request->file('banner_image');
            $image = Image::make($file);

            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $banner->banner_image = 'uploads/banner/' . $imageName;

            $image->fit(626, 417, function ($constraint) {
                $constraint->aspectRatio();
            });

            $img_canvas = Image::canvas(626, 417);
            $img_canvas->insert($image, 'center');
            $img_canvas->save(public_path('uploads/banner/' . $imageName));
        }

        $banner->save();
        $banner->slug = $banner->id.uniqid(10);
        $banner->save();

        $banners = Banner::where('status', 1)->latest()->paginate(10);
        $table_view = View('admin.website.banner.table_data', ['banners' => $banners])->render();

        return response()->json([
            'data' => $banners,
            'table' => $table_view,
            'error' => null,
        ]);
    }

    public function update(Request $request)
    {
        $banner = Banner::find($request->id);

        if (
            $request->heading_1 == '' ||
            $request->heading_2 == ''
        ) {
            return response()->json([
                'error' => 'fill the required area',
                'heading_1' => 'required',
                'heading_2' => 'required'
            ]);
        }

        // if(!$request->hasFile('banner_image')){
        //     return response()->json([
        //         'error' => 'fill the required area',
        //         'banner_image' => 'required'
        //     ]);
        // }

        $banner->heading_1 = $request->heading_1;
        $banner->heading_2 = $request->heading_2;
        $banner->creator = Auth::user()->id;
        $banner->updated_at = Carbon::now()->toDateTimeString();

        if ($request->hasFile('banner_image')) {
            $file = $request->file('banner_image');
            $image = Image::make($file);

            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $banner->banner_image = 'uploads/banner/' . $imageName;

            $image->fit(626, 417, function ($constraint) {
                $constraint->aspectRatio();
            });

            $img_canvas = Image::canvas(626, 417);
            $img_canvas->insert($image, 'center');
            $img_canvas->save(public_path('uploads/banner/' . $imageName));
        }

        $banner->save();
        $banner->slug = $banner->id.uniqid(10);
        $banner->save();

        $banners = Banner::where('status', 1)->latest()->paginate(10);
        $table_view = View('admin.website.banner.table_data', ['banners' => $banners])->render();

        return response()->json([
            'data' => $banners,
            'table' => $table_view,
            'error' => null,
        ]);
    }

    public function delete(Request $request, $id)
    {
        $banner = banner::find($id);
        $banner->status = 0;
        $banner->save();
        return redirect()->back()->with('success', 'banner deactivated successfully');
    }
}

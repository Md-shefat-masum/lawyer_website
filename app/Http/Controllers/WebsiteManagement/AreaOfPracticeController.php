<?php

namespace App\Http\Controllers\WebsiteManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Banner;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Image;
use App\AreaOfPractice;

class AreaOfPracticeController extends Controller
{
    public function index(Request $request){
        $area_of_practices = AreaOfPractice::latest()->where('status',1)->paginate(10);
        return view('admin.website.area_of_practice.index',compact('area_of_practices'));
    }

    public function add(Request $request)
    {
        return view('admin.website.area_of_practice.add');
    }

    public function view(Request $request,$id){
        $data = AreaOfPractice::find($id);
        return view('admin.website.area_of_practice.view',compact('data'));
    }

    public function edit(Request $request)
    {
        $data = AreaOfPractice::find($request->id);
        return view('admin.website.area_of_practice.edit', compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => ['required'],
            'icon' => ['required'],
            'description' => ['required'],
        ]);

        $area_of_practice = new AreaOfPractice();
        $area_of_practice->title = $request->title;
        $area_of_practice->description = $request->description;
        $area_of_practice->creator = Auth::user()->id;
        $area_of_practice->created_at = Carbon::now()->toDateTimeString();

        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $image = Image::make($file);

            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $area_of_practice->icon = 'uploads/icon/' . $imageName;

            $image->resize(128, 128, function ($constraint) {
                $constraint->aspectRatio();
            });

            $img_canvas = Image::canvas(128, 128);
            $img_canvas->insert($image, 'center');
            $img_canvas->save(public_path('uploads/icon/' . $imageName));
        }

        $area_of_practice->save();
        $area_of_practice->slug = $area_of_practice->id.uniqid(10);
        $area_of_practice->save();

        return redirect()->back()->with('success','new area of practice added succesfully.');
    }

    public function update(Request $request)
    {
        $area_of_practice = AreaOfPractice::find($request->id);

        $this->validate($request,[
            'title' => ['required'],
            'description' => ['required'],
        ]);

        // dd($area_of_practice, $request->request);
        $area_of_practice->title = $request->title;
        $area_of_practice->description = $request->description;
        $area_of_practice->creator = Auth::user()->id;
        $area_of_practice->created_at = Carbon::now()->toDateTimeString();

        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $image = Image::make($file);

            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $area_of_practice->icon = 'uploads/icon/' . $imageName;

            $image->resize(128, 128, function ($constraint) {
                $constraint->aspectRatio();
            });

            $img_canvas = Image::canvas(128, 128);
            $img_canvas->insert($image, 'center');
            $img_canvas->save(public_path('uploads/icon/' . $imageName));
        }

        $area_of_practice->save();
        $area_of_practice->slug = $area_of_practice->id.uniqid(10);
        $area_of_practice->save();

        return redirect()->back()->with('success','new area of practice updated succesfully.');
    }

    public function delete(Request $request, $id)
    {
        $area_of_practice = AreaOfPractice::find($id);
        $area_of_practice->status = 0;
        $area_of_practice->save();
        return redirect()->back()->with('success', 'Area deactivated successfully');
    }
}

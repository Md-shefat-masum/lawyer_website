<?php

namespace App\Http\Controllers\WebsiteManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DescriptiveAbout;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class DescriptiveAboutController extends Controller
{
    public function index(Request $request){
        $short_about = DescriptiveAbout::first();
        return view('admin.website.descriptive_about.index',compact('short_about'));
    }

    public function update(Request $request){
        if(DescriptiveAbout::where('id',1)->exists()){
            $inforamtion = DescriptiveAbout::find(1);
        }else{
            $inforamtion = new DescriptiveAbout();
        }

        $inforamtion->description = $request->description;
        $inforamtion->creator = Auth::user()->id;
        $inforamtion->created_at = Carbon::now()->toDateTimeString();

        if($request->hasFile('banner')){
            $file = $request->file('banner');
            $path = Storage::put('uploads/descriptive_about',$file);
            $inforamtion->banner = $path;
        }
        if($request->hasFile('image')){
            $file = $request->file('image');
            $path = Storage::put('uploads/descriptive_about',$file);
            $inforamtion->image = $path;
        }

        $inforamtion->save();
        return redirect()->back()->with('success','information updated successfullly.');
    }
}

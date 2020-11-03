<?php

namespace App\Http\Controllers\WebsiteManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ShortAbout;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class ShortAboutController extends Controller
{
    public function index(Request $request){
        $short_about = ShortAbout::first();
        return view('admin.website.short_about.index',compact('short_about'));
    }

    public function update(Request $request){
        if(ShortAbout::where('id',1)->exists()){
            $inforamtion = ShortAbout::find(1);
        }else{
            $inforamtion = new ShortAbout();
        }

        $inforamtion->description = $request->description;
        $inforamtion->creator = Auth::user()->id;
        $inforamtion->created_at = Carbon::now()->toDateTimeString();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $path = Storage::put('uploads/short_about',$file);
            $inforamtion->image = $path;
        }

        $inforamtion->save();
        return redirect()->back()->with('success','information updated successfullly.');
    }
}

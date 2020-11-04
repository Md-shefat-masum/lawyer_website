<?php

namespace App\Http\Controllers\WebsiteManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BasicInformation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class BasicInformationController extends Controller
{
    public function index(Request $request){
        $information = BasicInformation::first();
        return view('admin.website.basic_information.index',compact('information'));
    }

    public function update(Request $request){
        // dd($request);

        if(BasicInformation::where('id',1)->exists()){
            $inforamtion = BasicInformation::find(1);
        }else{
            $inforamtion = new BasicInformation();
        }

        $inforamtion->full_name = $request->full_name;
        $inforamtion->email_1 = $request->email_1;
        $inforamtion->email_2 = $request->email_2;
        $inforamtion->mobile_no_1 = $request->mobile_no_1;
        $inforamtion->mobile_no_2 = $request->mobile_no_2;
        $inforamtion->footer_short_about = $request->footer_short_about;
        $inforamtion->address = $request->address;
        $inforamtion->work_time = $request->work_time;
        $inforamtion->map = $request->map;
        $inforamtion->copy_right = $request->copy_right;

        $inforamtion->facebook = $request->facebook;
        $inforamtion->twitter = $request->twitter;
        $inforamtion->linkedin = $request->linkedin;
        $inforamtion->pinterest = $request->pinterest;
        $inforamtion->youtube = $request->youtube;
        $inforamtion->skype = $request->skype;

        $inforamtion->created_at = Carbon::now()->toDateTimeString();
        $inforamtion->save();

        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $path = Storage::put('uploads/logo', $file);
            $inforamtion->logo = $path;
            $inforamtion->save();
        }

        if($request->hasFile('profile_pic')){
            $file = $request->file('profile_pic');
            $path = Storage::put('uploads/profile_pic', $file);
            $inforamtion->profile_pic = $path;
            $inforamtion->save();
        }

        return redirect()->back()->with('success','informations updated successfully.');
    }
}

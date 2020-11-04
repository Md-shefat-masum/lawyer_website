<?php

namespace App\Http\Controllers\WebsiteManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\OurPrivilege;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class OurPrivilegeController extends Controller
{
    public function index(Request $request){
        $information = OurPrivilege::first();
        return view('admin.website.our_privilege.index',compact('information'));
    }

    public function update(Request $request){
        // dd($request);

        if(OurPrivilege::where('id',1)->exists()){
            $inforamtion = OurPrivilege::find(1);
        }else{
            $inforamtion = new OurPrivilege();
        }

        $inforamtion->description = $request->description;
        $inforamtion->created_at = Carbon::now()->toDateTimeString();
        $inforamtion->creator = Auth::user()->id;
        $inforamtion->save();

        return redirect()->back()->with('success','informations updated successfully.');
    }
}

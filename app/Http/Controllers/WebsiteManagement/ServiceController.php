<?php

namespace App\Http\Controllers\WebsiteManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ServiceDetais;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index(Request $request){
        $information = ServiceDetais::first();
        return view('admin.website.service.index',compact('information'));
    }

    public function update(Request $request){
        // dd($request);

        if(ServiceDetais::where('id',1)->exists()){
            $inforamtion = ServiceDetais::find(1);
        }else{
            $inforamtion = new ServiceDetais();
        }

        $inforamtion->description = $request->description;
        $inforamtion->created_at = Carbon::now()->toDateTimeString();
        $inforamtion->creator = Auth::user()->id;
        $inforamtion->save();

        return redirect()->back()->with('success','informations updated successfully.');
    }
}

<?php

namespace App\Http\Controllers\WebsiteManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TeamLead;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class TeamLeadController extends Controller
{
    public function index(Request $request){
        $information = TeamLead::first();
        return view('admin.website.team_lead.index',compact('information'));
    }

    public function update(Request $request){
        // dd($request);

        if(TeamLead::where('id',1)->exists()){
            $inforamtion = TeamLead::find(1);
        }else{
            $inforamtion = new TeamLead();
        }

        $inforamtion->description = $request->description;
        $inforamtion->created_at = Carbon::now()->toDateTimeString();
        $inforamtion->creator = Auth::user()->id;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $path = Storage::put('uploads/image', $file);
            $inforamtion->image = $path;
            $inforamtion->save();
        }
        $inforamtion->save();

        return redirect()->back()->with('success','informations updated successfully.');
    }
}

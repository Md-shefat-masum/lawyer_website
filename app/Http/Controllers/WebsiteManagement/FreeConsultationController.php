<?php

namespace App\Http\Controllers\WebsiteManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FreeConsultation;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Image;

class FreeConsultationController extends Controller
{
    public function index(Request $request){
        $free_consultations = FreeConsultation::latest()->where('status',1)->paginate(10);
        return view('admin.website.free_consultation.index',compact('free_consultations'));
    }

    public function add(Request $request)
    {
        return view('admin.website.free_consultation.add');
    }

    public function view(Request $request,$id){
        $data = FreeConsultation::find($id);
        return view('admin.website.free_consultation.view',compact('data'));
    }

    public function edit(Request $request)
    {
        $data = FreeConsultation::find($request->id);
        return view('admin.website.free_consultation.edit', compact('data'));
    }

    public function store(Request $request)
    {
        if (
            $request->name == ''||
            $request->email == ''||
            $request->phone == ''||
            $request->law_name == ''||
            $request->message == ''
        ) {
            return response()->json([
                'error' => 'fill the required area',
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'law_name' => 'required',
                'message' => 'required'
            ]);
        }

        $free_consultation = new FreeConsultation();
        $free_consultation->name = $request->name;
        $free_consultation->email = $request->email;
        $free_consultation->phone = $request->phone;
        $free_consultation->law_name = $request->law_name;
        $free_consultation->message = $request->message;
        $free_consultation->creator = Auth::user()->id;
        $free_consultation->created_at = Carbon::now()->toDateTimeString();
        $free_consultation->save();
        $free_consultation->slug = $free_consultation->id.uniqid(10);
        $free_consultation->save();

        $free_consultations = FreeConsultation::where('status', 1)->latest()->paginate(10);
        $table_view = View('admin.website.free_consultation.table_data', ['free_consultations' => $free_consultations])->render();

        return response()->json([
            'data' => $free_consultations,
            'table' => $table_view,
            'error' => null,
        ]);
    }

    public function update(Request $request)
    {
        $free_consultation = FreeConsultation::find($request->id);

        if (
            $request->name == ''||
            $request->email == ''||
            $request->phone == ''||
            $request->law_name == ''||
            $request->message == ''
        ) {
            return response()->json([
                'error' => 'fill the required area',
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'law_name' => 'required',
                'message' => 'required'
            ]);
        }

        $free_consultation->name = $request->name;
        $free_consultation->email = $request->email;
        $free_consultation->phone = $request->phone;
        $free_consultation->law_name = $request->law_name;
        $free_consultation->message = $request->message;
        $free_consultation->creator = Auth::user()->id;
        $free_consultation->updated_at = Carbon::now()->toDateTimeString();
        $free_consultation->save();

        $free_consultations = FreeConsultation::where('status', 1)->latest()->paginate(10);
        $table_view = View('admin.website.free_consultation.table_data', ['free_consultations' => $free_consultations])->render();

        return response()->json([
            'data' => $free_consultations,
            'table' => $table_view,
            'error' => null,
        ]);
    }

    public function delete(Request $request, $id)
    {
        $free_consultation = FreeConsultation::find($id);
        $free_consultation->status = 0;
        $free_consultation->save();
        return redirect()->back()->with('success', 'free_consultation deactivated successfully');
    }
}

<?php

namespace App\Http\Controllers\WebsiteManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LawList;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Image;

class LawListController extends Controller
{
    public function index(Request $request){
        $law_lists = LawLIst::latest()->where('status',1)->paginate(10);
        return view('admin.website.law_list.index',compact('law_lists'));
    }

    public function add(Request $request)
    {
        return view('admin.website.law_list.add');
    }

    public function view(Request $request,$id){
        $data = LawLIst::find($id);
        return view('admin.website.law_list.view',compact('data'));
    }

    public function edit(Request $request)
    {
        $data = LawLIst::find($request->id);
        return view('admin.website.law_list.edit', compact('data'));
    }

    public function store(Request $request)
    {
        if (
            $request->name == ''
        ) {
            return response()->json([
                'error' => 'fill the required area',
                'name' => 'required'
            ]);
        }

        $law_list = new LawLIst();
        $law_list->name = $request->name;
        $law_list->creator = Auth::user()->id;
        $law_list->created_at = Carbon::now()->toDateTimeString();
        $law_list->save();
        $law_list->slug = $law_list->id.uniqid(10);
        $law_list->save();

        $law_lists = LawLIst::where('status', 1)->latest()->paginate(10);
        $table_view = View('admin.website.law_list.table_data', ['law_lists' => $law_lists])->render();

        return response()->json([
            'data' => $law_lists,
            'table' => $table_view,
            'error' => null,
        ]);
    }

    public function update(Request $request)
    {
        $law_list = LawLIst::find($request->id);

        if (
            $request->name == ''
        ) {
            return response()->json([
                'error' => 'fill the required area',
                'name' => 'required'
            ]);
        }

        $law_list->name = $request->name;
        $law_list->creator = Auth::user()->id;
        $law_list->updated_at = Carbon::now()->toDateTimeString();
        $law_list->save();

        $law_lists = LawLIst::where('status', 1)->latest()->paginate(10);
        $table_view = View('admin.website.law_list.table_data', ['law_lists' => $law_lists])->render();

        return response()->json([
            'data' => $law_lists,
            'table' => $table_view,
            'error' => null,
        ]);
    }

    public function delete(Request $request, $id)
    {
        $law_list = LawLIst::find($id);
        $law_list->status = 0;
        $law_list->save();
        return redirect()->back()->with('success', 'law_list deactivated successfully');
    }
}

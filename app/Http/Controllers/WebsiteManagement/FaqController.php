<?php

namespace App\Http\Controllers\WebsiteManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FAQ;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Image;

class FaqController extends Controller
{
    public function index(Request $request){
        $faqs = FAQ::latest()->where('status',1)->paginate(10);
        return view('admin.website.faq.index',compact('faqs'));
    }

    public function add(Request $request)
    {
        return view('admin.website.faq.add');
    }

    public function view(Request $request,$id){
        $data = FAQ::find($id);
        return view('admin.website.faq.view',compact('data'));
    }

    public function edit(Request $request)
    {
        $data = FAQ::find($request->id);
        return view('admin.website.faq.edit', compact('data'));
    }

    public function store(Request $request)
    {
        if (
            $request->question == '' ||
            $request->answer == ''
        ) {
            return response()->json([
                'error' => 'fill the required area',
                'question' => 'required',
                'answer' => 'required'
            ]);
        }

        $faq = new FAQ();
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->creator = Auth::user()->id;
        $faq->created_at = Carbon::now()->toDateTimeString();
        $faq->save();
        $faq->slug = $faq->id.uniqid(10);
        $faq->save();

        $faqs = FAQ::where('status', 1)->latest()->paginate(10);
        $table_view = View('admin.website.faq.table_data', ['faqs' => $faqs])->render();

        return response()->json([
            'data' => $faqs,
            'table' => $table_view,
            'error' => null,
        ]);
    }

    public function update(Request $request)
    {
        $faq = FAQ::find($request->id);

        if (
            $request->question == '' ||
            $request->answer == ''
        ) {
            return response()->json([
                'error' => 'fill the required area',
                'question' => 'required',
                'answer' => 'required'
            ]);
        }

        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->creator = Auth::user()->id;
        $faq->updated_at = Carbon::now()->toDateTimeString();
        $faq->save();

        $faqs = FAQ::where('status', 1)->latest()->paginate(10);
        $table_view = View('admin.website.faq.table_data', ['faqs' => $faqs])->render();

        return response()->json([
            'data' => $faqs,
            'table' => $table_view,
            'error' => null,
        ]);
    }

    public function delete(Request $request, $id)
    {
        $faq = FAQ::find($id);
        $faq->status = 0;
        $faq->save();
        return redirect()->back()->with('success', 'faq deactivated successfully');
    }
}

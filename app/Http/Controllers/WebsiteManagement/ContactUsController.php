<?php

namespace App\Http\Controllers\WebsiteManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ContactUs;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Image;

class ContactUsController extends Controller
{
    public function index(Request $request){
        $contact_us_messages = ContactUs::latest()->where('status',1)->paginate(10);
        return view('admin.website.contact_us_message.index',compact('contact_us_messages'));
    }

    public function add(Request $request)
    {
        return view('admin.website.contact_us_message.add');
    }

    public function view(Request $request,$id){
        $data = ContactUs::find($id);
        return view('admin.website.contact_us_message.view',compact('data'));
    }

    public function edit(Request $request)
    {
        $data = ContactUs::find($request->id);
        return view('admin.website.contact_us_message.edit', compact('data'));
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

        $contact_us_message = new FreeConsultation();
        $contact_us_message->name = $request->name;
        $contact_us_message->email = $request->email;
        $contact_us_message->phone = $request->phone;
        $contact_us_message->law_name = $request->law_name;
        $contact_us_message->message = $request->message;
        $contact_us_message->creator = Auth::user()->id;
        $contact_us_message->created_at = Carbon::now()->toDateTimeString();
        $contact_us_message->save();
        $contact_us_message->slug = $contact_us_message->id.uniqid(10);
        $contact_us_message->save();

        $contact_us_messages = ContactUs::where('status', 1)->latest()->paginate(10);
        $table_view = View('admin.website.contact_us_message.table_data', ['contact_us_messages' => $contact_us_messages])->render();

        return response()->json([
            'data' => $contact_us_messages,
            'table' => $table_view,
            'error' => null,
        ]);
    }

    public function update(Request $request)
    {
        $contact_us_message = ContactUs::find($request->id);

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

        $contact_us_message->name = $request->name;
        $contact_us_message->email = $request->email;
        $contact_us_message->phone = $request->phone;
        $contact_us_message->law_name = $request->law_name;
        $contact_us_message->message = $request->message;
        $contact_us_message->creator = Auth::user()->id;
        $contact_us_message->updated_at = Carbon::now()->toDateTimeString();
        $contact_us_message->save();

        $contact_us_messages = ContactUs::where('status', 1)->latest()->paginate(10);
        $table_view = View('admin.website.contact_us_message.table_data', ['contact_us_messages' => $contact_us_messages])->render();

        return response()->json([
            'data' => $contact_us_messages,
            'table' => $table_view,
            'error' => null,
        ]);
    }

    public function delete(Request $request, $id)
    {
        $contact_us_message = ContactUs::find($id);
        $contact_us_message->status = 0;
        $contact_us_message->save();
        return redirect()->back()->with('success', 'contact_us_message deactivated successfully');
    }
}

<?php

namespace App\Http\Controllers\WebsiteManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subscriber;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Image;
use Illuminate\Support\Facades\Storage;

class SubscriberController extends Controller
{
    public function index(Request $request){
        $subscribers = Subscriber::latest()->where('status',1)->paginate(10);
        return view('admin.website.subscriber.index',compact('subscribers'));
    }

    public function add(Request $request)
    {
        return view('admin.website.subscriber.add');
    }

    public function view(Request $request,$id){
        $data = Subscriber::find($id);
        return view('admin.website.subscriber.view',compact('data'));
    }

    public function edit(Request $request)
    {
        $data = Subscriber::find($request->id);
        return view('admin.website.subscriber.edit', compact('data'));
    }

    public function store(Request $request)
    {
        if (
            $request->email == ''
        ) {
            return response()->json([
                'error' => 'fill the required area',
                'email' => 'required',
            ]);
        }

        $subscriber = new Subscriber();
        $subscriber->email = $request->email;
        $subscriber->creator = Auth::user()->id;
        $subscriber->created_at = Carbon::now()->toDateTimeString();
        $subscriber->save();
        $subscriber->slug = $subscriber->id.uniqid(10);
        $subscriber->save();

        $subscribers = Subscriber::where('status', 1)->latest()->paginate(10);
        $table_view = View('admin.website.subscriber.table_data', ['subscribers' => $subscribers])->render();

        return response()->json([
            'data' => $subscribers,
            'table' => $table_view,
            'error' => null,
        ]);
    }

    public function update(Request $request)
    {
        $subscriber = Subscriber::find($request->id);

        if (
            $request->email == ''
        ) {
            return response()->json([
                'error' => 'fill the required area',
                'email' => 'required'
            ]);
        }

        $subscriber->email = $request->email;
        $subscriber->save();

        $subscriber->creator = Auth::user()->id;
        $subscriber->updated_at = Carbon::now()->toDateTimeString();
        $subscriber->save();

        $subscribers = Subscriber::where('status', 1)->latest()->paginate(10);
        $table_view = View('admin.website.subscriber.table_data', ['subscribers' => $subscribers])->render();

        return response()->json([
            'data' => $subscribers,
            'table' => $table_view,
            'error' => null,
        ]);
    }

    public function delete(Request $request, $id)
    {
        $subscriber = Subscriber::find($id);
        $subscriber->status = 0;
        $subscriber->save();
        return redirect()->back()->with('success', 'subscriber deactivated successfully');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FreeConsultation;
use Carbon\Carbon;
use App\Subscriber;

class WebsiteController extends Controller
{
    public function index(Request $request){
        return view('website.index');
    }

    public function free_consultation_submit(Request $request){
        $this->validate($request,[
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'message' => ['required'],
        ]);

        $free_consultation = new FreeConsultation();
        $free_consultation->name = $request->name;
        $free_consultation->email = $request->email;
        $free_consultation->phone = $request->phone;
        $free_consultation->law_name = $request->law_name;
        $free_consultation->message = $request->message;
        $free_consultation->created_at = Carbon::now()->toDateTimeString();
        $free_consultation->save();
        $free_consultation->slug = $free_consultation->id.uniqid(10);
        $free_consultation->save();

        return redirect()->back()->with('success','Thanks for your request.');
    }

    public function subscriber_submit(Request $request){
        $this->validate($request,[
            'email' => ['required']
        ]);

        $subscriber = new Subscriber();
        $subscriber->email = $request->email;
        $subscriber->created_at = Carbon::now()->toDateTimeString();
        $subscriber->save();
        $subscriber->slug = $subscriber->id.uniqid(10);
        $subscriber->save();

        return redirect()->back()->with('success','subscribed successfully.');
    }

    public static function convert($mytime)
    {
        $engDATE = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 'Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        $bangDATE = array('১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০', 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার', 'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর');
        $convertedDATE = str_replace($engDATE, $bangDATE, $mytime);
        return $convertedDATE;
    }
}

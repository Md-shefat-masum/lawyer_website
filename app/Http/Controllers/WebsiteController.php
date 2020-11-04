<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FreeConsultation;
use Carbon\Carbon;
use App\Subscriber;
use App\ContactUs;

class WebsiteController extends Controller
{
    public function index(Request $request){
        return view('website.index');
    }

    public function contact(Request $request){
        return view('website.contact');
    }

    public function our_privilege(Request $request){
        return view('website.our_privilege');
    }

    public function team_lead(Request $request){
        return view('website.team_lead');
    }

    public function service(Request $request){
        return view('website.service');
    }

    public function about(Request $request){
        return view('website.about');
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

    public function contact_message_submit(Request $request){
        $this->validate($request,[
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'message' => ['required'],
        ]);

        $message = new ContactUs();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->website = $request->website;
        $message->message = $request->message;
        $message->created_at = Carbon::now()->toDateTimeString();
        $message->save();
        $message->slug = $message->id.uniqid(10);
        $message->save();
        return redirect()->back()->with('success','thanks for your valueable feedback.');
    }

    public static function convert($mytime)
    {
        $engDATE = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 'Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        $bangDATE = array('১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০', 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার', 'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর');
        $convertedDATE = str_replace($engDATE, $bangDATE, $mytime);
        return $convertedDATE;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FreeConsultation;
use Carbon\Carbon;
use App\Subscriber;
use App\ContactUs;
use App\AreaOfPractice;
use function GuzzleHttp\json_encode;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

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

    public function service_single(Request $request,$id,$name){
        $service = AreaOfPractice::findOrFail($id);
        return view('website.service_single',compact('service'));
    }

    public function about(Request $request){
        return view('website.about');
    }

    public function online_assesment(Request $request){
        return view('website.online-assesment');
    }

    public function free_consultation_submit(Request $request){
        // dd($request);
        $this->validate($request,[
            'name' => ['required'],
            'email' => ['required'],
            'subject' => ['required'],
            'phone' => ['required'],
            'message' => ['required'],
        ]);

        $free_consultation = new FreeConsultation();
        $free_consultation->name = $request->name;
        $free_consultation->email = $request->email;
        $free_consultation->phone = $request->phone;
        $free_consultation->subject = $request->subject;
        $free_consultation->law_name = $request->law_name;
        $free_consultation->message = $request->message;
        $free_consultation->created_at = Carbon::now()->toDateTimeString();
        $free_consultation->save();
        $free_consultation->slug = $free_consultation->id.uniqid(10);
        $free_consultation->save();

        Session::put('Consultation',$free_consultation);
        $subject = 'Free Consultation';
        $to = 'info@njahanlaw.ca';
        Mail::send('mail.consultation', ['content' => '', 'logo' =>'',' title' => '', 'branch_name' => ''],
        function ($message) use ($subject, $to){
            $message->from($to, 'N.Jahan LPC Free Consultation');
            $message->to('info@njahanlaw.ca');
            $message->subject($subject);
        });

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

        $cirtificate = [];
        $experience = [];

        $english_speak = [];
        $french_speak = [];
        $questions = [];

        foreach ($request->from_month_or_year as $key => $item) {
            if($item != null){
                $data = [
                    'from' => $request->from_month_or_year[$key],
                    'to' => $request->to_month_or_year[$key],
                    'name_of_institue' => $request->name_of_institution[$key],
                    'city_country' => $request->city_country[$key],
                    'certificate_degree' => $request->certificate_degree[$key],
                ];
                array_push($cirtificate,$data);
            }
        }

        foreach ($request->experience_from_month_or_year as $key => $item) {
            if($item != null){
                $data = [
                    'from' => $request->experience_from_month_or_year[$key],
                    'to' => $request->experience_to_month_or_year[$key],
                    'duties' => $request->experience_name_of_institution[$key],
                    'city' => $request->experience_city_country[$key],
                    'name' => $request->experience_certificate_degree[$key],
                ];
                array_push($experience,$data);
            }
        }

        array_push($english_speak,($request->english_speak));
        array_push($english_speak,($request->english_listen));
        array_push($english_speak,($request->english_read));
        array_push($english_speak,($request->english_write));

        array_push($french_speak,($request->french_date));
        array_push($french_speak,($request->french_speak));
        array_push($french_speak,($request->french_listen));
        array_push($french_speak,($request->french_read));
        array_push($french_speak,($request->french_write));

        array_push($questions,($request->question_date));
        array_push($questions,($request->question_1));
        array_push($questions,($request->question_2));
        array_push($questions,($request->question_3));
        array_push($questions,($request->question_4));
        array_push($questions,($request->question_5));
        array_push($questions,($request->question_6));
        array_push($questions,($request->question_7));
        array_push($questions,($request->question_8));
        array_push($questions,($request->question_9));
        array_push($questions,($request->question_from));

        // dd($request,json_encode($english_speak,JSON_PRETTY_PRINT),$experience);

        $this->validate($request,[
            'email' => ['required'],
            'phone' => ['required'],
            'message' => ['required'],
        ]);

        $message = new ContactUs();
        $message->first_name = $request->first_name;
        $message->middle_name = $request->middle_name;
        $message->last_name = $request->last_name;

        $message->spouse_first_name = $request->spouse_first_name;
        $message->spouse_middle_name = $request->spouse_middle_name;
        $message->spouse_last_name = $request->spouse_last_name;

        $message->gender = $request->gender;
        $message->date_of_birth = $request->date_of_birth;
        $message->marital_status = $request->marital_status;
        $message->number_of_children = $request->number_of_children;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->citizenship = $request->citizenship;
        $message->residential_address = $request->residential_address;
        $message->legal_status = $request->legal_status;
        $message->website = $request->website;
        $message->message = $request->message;

        $message->cirtificate = json_encode($cirtificate);
        $message->experience = json_encode($experience);
        $message->english_speak = json_encode($english_speak);
        $message->french_speak = json_encode($french_speak);
        $message->questions = json_encode($questions);

        $message->created_at = Carbon::now()->toDateTimeString();
        $message->save();
        $message->slug = $message->id.uniqid(10);
        $message->save();
        return redirect()->back()->with('success','thanks for your valueable response.');
    }

    public static function convert($mytime)
    {
        $engDATE = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 'Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        $bangDATE = array('১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০', 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার', 'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর');
        $convertedDATE = str_replace($engDATE, $bangDATE, $mytime);
        return $convertedDATE;
    }
}

<?php

namespace App\Http\Controllers\admin;
use Redirect;
use Response;
use App\Models\ContactUs;
use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('frontEnd.pages.contact');
    }
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ],
        [
            'name.required' => 'Please Fill The Name Field',
            'email.required' => 'Please Fill Email Field',
            'subject.required' => 'Please Fill The Subject Field',
            'message.required' => 'Please Fill The Message Field'
        ]);
        
        $data = array(
            'name_data' => $request->name,
            'email_date' => $request->email,
            'subject_deta' => $request->subject,  
            'message_data' => $request->message
        );

        // Mail::send('mail', $data, function($message) use($request){
        //     $message->to('azharraihan6969@gmail.com', 'DesignerCountry')
        //             ->subject('New Enquiry Received'. $request->name);
        //     $message->from($request->email,$request->name);
        // });
        Mail::to('azharraihan6969@gmail.com')->send(new ContactUsMail($data));
        ContactUs::create($request->all());
        Toastr::success('Your Message Send Successfully','success');
        return redirect()->back()->with('success', 'message has been sent');
    }

    public function contactAdmin()
    {
        $contacts = ContactUs::all();
        return view('admin.dashboard.contact',compact('contacts'));
    }

    public function contactShow($id)
    {
        $contact = ContactUs::findOrFail($id);
        return view('admin.dashboard.contact_show',compact('contact'));
    }

    public function contactDelete($id)
    {
        $contact = ContactUs::findOrFail($id);
        $contact->delete();
        return redirect()->back();
    }

    
}

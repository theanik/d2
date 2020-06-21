<?php

namespace App\Http\Controllers;

use App\Quote;
use App\Mail\QuoteMail;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Controller
{    
    /**
     * getQuote
     *
     * @return void
     */
    public function getQuote(){
        return view('frontEnd.pages.get_quote');
    }
        
    /**
     * storeQuote
     *
     * @param  mixed $req
     * @return void
     */
    public function storeQuote(Request $req)
    {
        // dd($req->all());
        $req->validate([
            "name" => "required",
            "email" => "required|email",
            "quantity" => "required",
            "details_instraction" => "required",
            "sellection" => "required"
        ],
        [
            'name.required' => 'Please Fill The Name Field',
            'email.required' => 'Please Fill Email Field',
            'quantity.required' => 'Please Quantity Field',
            'details_instraction.required' => 'Please Fill the details Field',
            'sellection.required' => 'Please fill duration Field'
        ]);

            
        if($req->hasAny(['clipping_path','multi_clipping_path','image_masking','photo_retouching',
        'ghost_mannequin','dropdown_shadow','reflection_shadow','color_variants','vactor_convartion',
        'brightness_enhencement','ecomerce_image_editing','image_restarted']))
        {
            $data = Quote::create($req->all());
            Mail::to('azharraihan6969@gmail.com')->send(new QuoteMail($data));
            session(['name' => $data->name]);
            Toastr::success('Your Data Update Successfully','success');
            return redirect()->route('get.quote.upload');
        }else{
            $data = [
                'msg'=>'Please Select Atleast One Service',
                'name' => $req->name,
                'email' => $req->email,
                'quantity' => $req->quantity,
                'details_instraction' => $req->details_instraction
            ];
            Toastr::warning('Please Select Atleast One Service','warning');
            return redirect()->back()->with($data);
        }

        

    }
    
}

<?php

namespace App\Http\Controllers\admin;
use App\Quote;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function dashboard(){
        return view('admin/dashboard/index');
    }
    public function service(){
        return view('admin/dashboard/service');
    }

    public function quote()
    {
        $quotes = Quote::all();
        return view('admin.dashboard.quote',compact('quotes'));
    }

    public function quoteShow($id)
    {
        $quote = Quote::findOrFail($id);
        return view('admin.dashboard.quote_show',compact('quote'));
    }

    public function quoteDelete($id)
    {
        $quote = Quote::findOrFail($id);
        $quote->delete();
        return redirect()->back();
    }

    public function profile()
    {
        return view('admin.dashboard.profile');
    }

    public function passwordUpdate(Request $req)
    {
        $req->validate([
            'oldpassword' => 'required',
            'password' => 'required'
        ]);
        $hashedPass = Auth::user()->password;
        if(Hash::check($req->oldpassword,$hashedPass)){
            if(!Hash::check($req->password,$hashedPass)){
                $user = User::findOrFail(Auth::id());
                $user->password = Hash::make($req->password);
                $user->save();

                return redirect()->back()->with('message','Password Updated Successflly');

            }else{
                return redirect()->back()->with('message','New password same to old password');
            }
        }else{
            return redirect()->back()->with('message','Old password dose not existst');
        }
    }

    public function profileUpdate(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $user = User::findOrFail(Auth::id());
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->save();

        return redirect()->back()->with('message','Information Updated Successflly');
    }
}

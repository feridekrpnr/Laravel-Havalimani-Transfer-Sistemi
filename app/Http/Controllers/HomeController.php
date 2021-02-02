<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Setting;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public static function categorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }
    public static function getSetting()
    {
        return Setting::first();
    }
     public function index()
     {
         return Setting::first();
         return view('home.index', ['setting'=>$setting]);
     }
    public function transfer($id)
    {
        $data = Transfer::find($id);
        print_r($data);
        exit();
    }
    public function aboutus()
    {
        $setting=Setting::first();
        return view('home.about', ['setting'=>$setting]);
    }


    public function vehicles()
    {
        return view('home.vehicles');
    }

    public function references()
    {
        $setting=Setting::first();
        return view('home.references', ['setting'=>$setting]);
    }
    public function faq()
    {
        return view('home.faq');
    }
    public function contact()
    {
        $setting=Setting::first();
        return view('home.contact', ['setting'=>$setting]);
    }
    public function sendmessage(Request $request)
    {
        $data= new Message;
        $data->name= $request->input('name');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');


        $data->save();
        return redirect()->route('contact');
    }
    public function login()
    {
        return view('admin.login');
    }
    public function logout(Request $request){
         Auth::logout();
         $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    /*public function test($id)
    {
        echo"Id Number :",$id;
    }
    */
    public function logincheck(Request $request)
    {

        if ($request->isMethod('post'))
        {

            $credentials = $request->only('email','password');
            if (Auth::attempt($credentials)){
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        else {
            return view('admin.login');
        }


    }

}


<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Location;
use App\Models\Message;
use App\Models\Review;
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
         $setting = Setting::first();
         $slider=Transfer::select('id','title','image','slug','category_id')->limit(4)->get();
         $daily = Transfer::select('id','title', 'image','category_id','slug','baseprice')->limit(3)->inRandomOrder()->get();
         $last= Transfer::select('id','title', 'image','category_id','slug','baseprice')->limit(3)->orderByDesc('id')->get();
         $picked = Transfer::select('id','title', 'image','category_id','slug','baseprice')->limit(3)->inRandomOrder()->get();

         $data = [
             'setting' => $setting,
             'slider'=>$slider,
             'daily'=>$daily,
             'last'=>$last,
             'picked'=>$picked,
             'page' => 'home'
         ];

         return view('home.index', $data);
     }
    public function gettransfer(Request $request)
    {
        $search=$request->input('search');

        $count=Transfer::where('title','like','%'.$search.'%')->get()->count();
        if($count==1)
        {
            $data=Transfer::where('title','like','%'.$search.'%')->first();
            return redirect()->route('transfer',['id'=>$data->id,'slug'=>$data->slug]);
        }
        else
        {
            return redirect()->route('transferlist',['search'=>$search]);
        }


    }
    public function search_page(){
        $setting=Setting::first();
        return view('home.search_page',['setting'=>$setting,'page'=>'home']);
    }

    public function transferlist($search){


        $datalist= Transfer::where('title','like','%'.$search.'%')->get();


        return view('home.search_transfers',['search'=>$search,'datalist'=>$datalist]);

    }
    public function transfer($id,$slug){

        $setting=Setting::first();
        $data=Transfer::find($id);
        $locations=Location::where('transfer_id',$id)->get();
        $reviews=Review::where('transfer_id',$id)->get();
        $datalist = Image::where('transfer_id',$id)->get();
        return view('home.transfer_detail',['setting'=>$setting,'data'=>$data,'datalist'=>$datalist,'locations'=>$locations,'reviews'=>$reviews]);

    }
    public function detay($id,$slug){
        $setting=Setting::first();
        $data= Transfer::find($id);
        $reviews=Review::where('transfer_id',$id)->get();

        $datalist = Image::where('transfer_id',$id)->get();
        // $datalist=Image::where('transfer_id',$id)->get();
        return view('home.transfer_detail',['setting'=>$setting,'data'=>$data,'datalist'=>$datalist,'reviews'=>$reviews]);

    }
    public function categorytransfers($id,$slug)
    {
        $datalist = Transfer::where('category_id',$id)->get();
        $data = Category::find($id);
        #print_r($data);
        #exit();
        return view('home.category_transfers', ['data'=>$data,'datalist'=>$datalist]);
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
    public function review()
    {
        $setting = Review::first();
        return view('home.review', ['setting' => $setting]);
    }
    public function sendreview(Request $request,$id)
    {
        $data = new Review;

        $data->user_id = Auth::id();
        $transfer = Transfer::find($id);
        $data->transfer_id=$id;
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->IP = $_SERVER['REMOTE_ADDR'];
        $data->rate = $request->input('rate');

        $data->save();

        return redirect()->route('transfer',['id'=>$transfer->id,'slug'=>$transfer->slug])->with('success','Yourumunuz kaydedilmiştir');
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

        return redirect()->route('contact')->with('info', 'Mesajınız başarılı bir şekilde kaydedilmiştir,Teşekkür ederiz.');
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


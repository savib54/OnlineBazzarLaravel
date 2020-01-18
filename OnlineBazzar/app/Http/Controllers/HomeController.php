<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\post;
use App\User;

use Carbon\Carbon;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        $post=  post::all()->toArray();
        $user=  User::all()->toArray();
        return view('/wpadmin/admin',compact('user'),compact('post'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($edit_id)
    {
         $data= post::where('id',$edit_id)->first();
         error_log($data);

        return view('crud/edit',compact('data'));
    }
    public function delete($post_id)
    {
        post::where('id',$post_id)->delete();
        return redirect('/home')->with('respond','delete succesfully');

    }

    public function index(){

        $user_id = Auth::user()->id;
        $data=  post::where(['user_id' => $user_id])->get(); 
    
        return view('home',compact('data'));
    }
    // public function index()
    // {
    //     return view('home');
    // }
    public function car()
    {
        $data=  post::all()->toArray();
        return view('item/car',compact('data'));
    }
    public function mobile()
    {
        $data=  post::all()->toArray();
        return view('item/mobile',compact('data'));
    }
    public function bikes()
    {
        $data=  post::all()->toArray();
        return view('item/bikes',compact('data'));
    }
    public function watch()
    {
        $data=  post::all()->toArray();
        return view('item/watch',compact('data'));
    }
    public function furniture()
    {
        $data=  post::all()->toArray();
        return view('item/furniture',compact('data'));
    }
    public function house()
    {
        $data=  post::all()->toArray();
        return view('item/house',compact('data'));
    }
    // public function profile()
    // {
    //     return view('profile');
    // }
}

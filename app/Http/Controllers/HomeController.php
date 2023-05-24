<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $post=Post::all();
        if(Auth::user()){
            $role=Auth::user()->usertype ?? 'default';
            if($role=='admin'){
                return view('admin.dashboard');
            }else{
                return view('dashboard');
            }
        }else{
            return view('home.index', compact('post'));
        }
    }

    public function upload(Request $request){
        $data = new Post;
        // dari database punya nama assign ke variable username kat sini
        $data->username=Auth::user()->name;
        // assign description dari table post kat sini dalam variable
        $data->description=$request->description;
        // inserting image part
        $image=$request->image;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('post',$imagename);
            $data->image=$imagename;
            // until here for image
        }
        $data->save();
        return redirect()->back();
    }

    public function view_post(){
        $name=Auth::user()->name;
        $post=Post::where('username','=', $name)->get();
        // 'post' here is refer to $post above
        return view('post_page', compact('post'));
    }

    public function delete_post($id){
        $data=post::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function update_post($id){
        $data=post::find($id);
        return view('updatepost', compact('data'));
    }

    public function confirm_update(Request $request, $id){
        $post=post::find($id);
        $post->description=$request->description;
        $image=$request->image;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            //store image in post folder
            $request->image->move('post',$imagename);
            $post->image=$imagename;
            // until here for image
        }
        $post->save();
        return redirect()->back();
    }

    public function addUser(Request $request){
        $data=new user;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=bcrypt($request->password);
        $data->usertype='user';
        $data->save();
        return redirect()->back();
    }

    public function User_menu(){
        if(Auth::user()){
            $role=Auth::user()->usertype ?? 'default';
            if($role=='admin'){
                return view('admin.userMenu');
            }
        }else {
            return redirect()->back();
        }
    }
}

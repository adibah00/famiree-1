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
                $users=User::all();
                return view('admin.dashboard', compact('users'));
            }else{
                return view('dashboard', compact('post'));
            }
        }else{
            return view('home.index', compact('post'));
        }
    }

    public function upload(Request $request){
        $data = new Post;
        // dari database punya nama assign ke variable username kat sini
        $data->username=Auth::user()->name;

        $this->validate($request, [
            'name' => 'required',
            'client_case' => 'required',
            'parent_id' => 'nullable',
            'description' => 'required',
            'document' => 'mimes:doc,docx,pdf,xls,xlsx,ppt,pptx',
        ]);

        // assign description dari table post kat sini dalam variable
        $data->name=$request->name;
        $data->client_case=$request->client_case;
        $data->parent_id=$request->parent_id;
        $data->description=$request->description;
        
        //inserting document part
        $document = $request->file('document');
        $documentname = 'FT' .date('Ymdhis').'.'.$request->file('document')->getClientOriginalExtension();
        $document->move('post',$documentname);
        $data->document=$documentname;
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

        $this->validate($request, [
            'document' => 'mimes:doc,docx,pdf,xls,xlsx,ppt,pptx',
        ]);

        $post->name=$request->name;
        $post->client_case=$request->client_case;
        $post->description=$request->description;
        $image=$request->image;

        $document = $request->file('document');
        $documentname = 'FT' .date('Ymdhis').'.'.$request->file('document')->getClientOriginalExtension();
        $document->move('post',$documentname);
        $post->document=$documentname;

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

    public function famtree(){
        $post=Post::all();
        $role=Auth::user()->usertype ?? 'default';
        $name=Auth::user()->name;
        $post=Post::where('username','=', $name)->get();

        $treeData = Post::with('children')->whereNull('parent_id')->get();

        if($role=='user'){
            return view('familytree', compact('post','treeData'));
        }
    }


    public function update_user($id){
        $data=User::find($id);
        return view('admin.updateuser', compact('data'));
    }

    public function confirm_updateUser(Request $request, $id){
        $data=User::find($id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=$request->password;
        $data->save();
        return redirect()->back();
    }

    public function delete_user($id){
        $data=User::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function search(Request $request){
        $search = $request->search;
        $post=Post::query()
        ->where('name', 'LIKE', "%{$search}%")
        ->orwhere('client_case', 'LIKE', "%{$search}%")
        ->orwhere('description', 'LIKE', "%{$search}%")
        ->get();
        return view('post_page',compact('post'));
    }
}

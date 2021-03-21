<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Image;

class ProfileController extends Controller
{
    public function index($id){
        $user = User::find($id);
        $users = User::all();
        return view('front_end.pages.profile',compact('user','users'));
    }

    public function create(){
        return view('front_end.pages.profile');
    }

    public function edit(int $id){
        $user = User::find($id);
        $users = User::all();
        return view('front_end.pages.edit_profile',compact('user','users'));
    }

    public function updatePicture(Request $request,int $id){
        $request->validate(
            [
                'image'=>'required',
            ]
        );

        $imageFilePath = '';
        if($request->hasFile('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $imageName = Auth::user()->name.rand().'.'.$extension;
            $imageFilePath = 'Users'.'/'.$imageName;
            $uplode = $request->file('image')->storeAs('public/Users',$imageName);
            //dd('ff');
        }
        
        // Image::make($request->file('image'))->save('storage/Comments/'.$imageName);
        // $imageFilePath = 'storage/Comments/'.$imageName;
        
        $users_image = User::find($id);
        
        if( $imageFilePath){
            $users_image->image = $imageFilePath;

            $post_user_image = DB::table('posts')->get();
            
            foreach ($post_user_image as $user) {
                if($user->user_id == $id){
                    $affected = DB::table('posts')
                    ->where('id', $user->id)
                    ->update(['user_image' => $imageFilePath]);

                    //dd($affected);
                }
            }
        }

        $users_image->update();
        return redirect()->back();
    }

    public function update(Request $request,int $id){

        //dd($id);
        //dd($request->all());

        //check validation
        $request->validate(
            [
                'name'=>'required',
            ]
        );
        
        try {

            $users = User::find($id);
            $users->name = $request->name;
            $users->gender = $request->gender;
            $users->location =$request->location;
            $users->about = $request->about;
            $users->country = $request->country;
            $users->update();
            return redirect()->back();

        } catch(\Illuminate\Database\QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == '1062'){
                dd('Duplicate Entry');
            }
        }
    }

    public function friendsList(){
        $users = User::all();
        return view('front_end.pages.friends',compact('users'));
    }

    public function photosList(int $id){
        $users = User::all();
        $user = User::find($id);
        $post = post::all();
        return view('front_end.pages.photos',compact('users','user','post'));
    }

    public function userDelete(int $id){
        $user = User::find($id);
        //$user->delete();
        return redirect()->back();
    }
}

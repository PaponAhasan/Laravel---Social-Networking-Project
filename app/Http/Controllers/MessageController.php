<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Message;

class MessageController extends Controller
{
    public function index(int $id){
        $messages = Message::all();
        $user = User::find($id);
        $users = User::all();
        return view('front_end.pages.message',compact('user','users','messages'));
     }

     public function store(Request $request)
    {
        // dd($request->all());
        if($request->body!=''){
            $request->validate([
                'body'=>'required',
            ]);
        }else{
            $request->validate([
                'image'=>'required',
            ]);
        }
    	
        
        $imageFilePath = '';
        if($request->hasFile('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $imageName = Auth::user()->name.rand().'.'.$extension;
            $imageFilePath = 'Messages'.'/'.$imageName;
            $uplode = $request->file('image')->storeAs('public/Messages',$imageName);
            
        }
        
        $array = [
            'user_id' => Auth::user()->id,
            'sender_id' => $request->sender_id,
            'body' => $request->body,
            'name' => Auth::user()->name,
            'image' => $imageFilePath,
            'user_image' => Auth::user()->image
        ];
        Message::create($array);
        return redirect()->back();
    }
 
}

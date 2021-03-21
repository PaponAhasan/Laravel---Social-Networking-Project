<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Comment;
use App\User;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        //dd($request->all());
    	$request->validate([
            'body'=>'required',
        ]);
        
        $imageFilePath = '';
        if($request->hasFile('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $imageName = Auth::user()->name.rand().'.'.$extension;
            $imageFilePath = 'Comments'.'/'.$imageName;
            $uplode = $request->file('image')->storeAs('public/Comments',$imageName);
            
        }
        
        $array = [
            'user_id' => Auth::user()->id,
            'post_id' => $request->post_id,
            'body' => $request->body,
            'image' => $imageFilePath,
            'user_image' => Auth::user()->image
            // 'parent_id' => $request->parent_id
        ];
        Comment::create($array);
        return redirect()->back();

        // $input = $request->all();
        // $input['user_id'] = auth()->user()->id;
    
        // Comment::create($input);
   
       // return back();
    }
    
    public function deleteComment(int $id){
        $posts = Comment::find($id);
        $posts->delete();
        return redirect()->back();
    }

    public function editComment(int $id){
        // $post = post::find($id);
        // return view('front_end.pages.editPost',compact('post'));
        
        $Comment = Comment::find($id);
        $Comments = Comment::all();
        $users = Comment::all();
        return view('front_end.pages.editComment',['Comment'=>$Comment, 'Comments'=>$Comments,'users'=>$users]);

        // $data =  array();
        // $data['post']  =  post::find($id);
        // $data['posts'] =  post::all();
        // return view('front_end.pages.editPost',compact("data"));

        //or return view('admin.categores.index',['$categories'=>$categories]);
    }

    public function updateComment(Request $request,int $id){
        $imageFilePath = '';
        if($request->hasFile('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $imageName = Auth::user()->name.rand().'.'.$extension;
            $imageFilePath = 'Comments'.'/'.$imageName;
            $uplode = $request->file('image')->storeAs('public/Comments',$imageName);
        }
        
        $Comment = Comment::find($id);
        $Comment->body = $request->body;
        if($imageFilePath){
            $Comment->image =  $imageFilePath;
        }
        // $post->update();
        // return redirect('home');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\Comment;
use App\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function indexPost(){
       $posts = post::all();
       //$posts = post::orderBy('created_at', 'DESC')->all();
       
       //dd($posts);
        //  foreach($posts as $category){
        //   echo "Name : {$category->post}"."<br>";
        // }

        //return $posts;
       return view('home',compact('posts'));
    }

    public function store(Request $request){
        //dd($request->all());

        $imageFilePath = '';
        if($request->hasFile('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $imageName = Auth::user()->name.rand().'.'.$extension;
            $imageFilePath = 'Posts'.'/'.$imageName;
            $uplode = $request->file('image')->storeAs('public/Posts',$imageName);
            //dd('ff');
        }

        $array = [
            'post' => $request->post,
            'user_id' => Auth::user()->id,
            'image' => $imageFilePath,
            'user_image' => Auth::user()->image
        ];
         // dd($array);
        post::create($array);
        return redirect()->back();
    }

    public function deletePost(int $id){
        $posts = post::find($id);
        $posts->delete();
        return redirect()->back();
    }

    public function editPost(int $id){
        // $post = post::find($id);
        // return view('front_end.pages.editPost',compact('post'));
        
        $post = post::find($id);
        $posts = post::all();
        $users = User::all();
        return view('front_end.pages.editPost',['post'=>$post, 'posts'=>$posts,'users'=>$users]);

        // $data =  array();
        // $data['post']  =  post::find($id);
        // $data['posts'] =  post::all();
        // return view('front_end.pages.editPost',compact("data"));

        //or return view('admin.categores.index',['$categories'=>$categories]);
    }

    public function updatePost(Request $request,int $id){
        $imageFilePath = '';
        if($request->hasFile('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $imageName = Auth::user()->name.rand().'.'.$extension;
            $imageFilePath = 'Posts'.'/'.$imageName;
            $uplode = $request->file('image')->storeAs('public/Posts',$imageName);
        }
        
        $post = post::find($id);
        $post->post = $request->post;
        if($imageFilePath){
            $post->image =  $imageFilePath;
        }
        $post->update();
        return redirect('home');
    }

    public function likePost(Request $request,int $id){
        $post = post::find($id);
        $var = $post->like;
        $post->like = $var+1;
        $post->update();
        return redirect('home');
    }
}

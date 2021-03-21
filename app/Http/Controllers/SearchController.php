<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    // public function search(Request $request){
        
    //     if($request->ajax()) {
          
    //         $data = User::where('name', 'LIKE', $request->name.'%')
    //             ->get();
           
    //         $output = '';
           
    //         if (count($data)>0) {
              
    //             $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
              
    //             foreach ($data as $row){
                   
    //                 $output .= '<li class="list-group-item">'.$row->name.'</li>';
    //             }
              
    //             $output .= '</ul>';
    //         }
    //         else {
             
    //             $output .= '<li class="list-group-item">'.'No results'.'</li>';
    //         }
            
    //         return $output;
    //     }
    // }

    function search(){

       
        // if( isset($_GET['query']) && strlen($_GET['query']) > 1){

        //     $search_text = $_GET['query'];
        //     $countries = DB::table('country')->where('Name','LIKE','%'.$search_text.'%')->paginate(2);
        //     // $countries->appends($request->all());
        //     return view('search',['countries'=>$countries]);
            
        // }else{
        //      return view('search');
        // }
        return view('home');
       
    }

    function find(Request $request){

            $request->validate([
              'query'=>'required|min:2'
           ]);
           
           $search_text = $request->input('query');
           $users = DB::table('users')
                      ->where('name','LIKE','%'.$search_text.'%')
                    //   ->orWhere('SurfaceArea','<', 10)
                    //   ->orWhere('LocalName','like','%'.$search_text.'%')
                      ->paginate(2);
             
           // dd($users);
            return view('front_end.pages.searchFriend',['users'=>$users]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;

class ProfileController extends Controller {
   public function Profile($id, Request $request) {
	   if($id===null)
	   {
		   return redirect("dashboard");
	   }else if($id==$request->session()->get('id'))
	   {
		   $users = DB::table('Users')->where('RRId', '=', $request->session()->get('id'))->first();
		   $array = json_decode(json_encode($users), true);
		   return view('profile', ['NickName'=> $array['NickName'], 'id'=>$array['RRId'], 'TG'=>$array['TG'], 'Rank'=>$array['Rank'], 'me'=>1]);
	   }else{

    $users = DB::table('Users')->where('RRId', '=', $id)->first();
		   $array = json_decode(json_encode($users), true);
		   return view('profile', ['NickName'=> $array['NickName'], 'id'=>$array['RRId'], 'TG'=>$array['TG'], 'Rank'=>$array['Rank']]);
	   }
   } 
   public function myProfile(Request $request) {
	   if($request->session()->has('nick'))
	   {
		   return redirect("profile/".$request->session()->get('id'));
		 
	   }else
		   {
			   return redirect("login");
		   }
    
   } 
}
?>
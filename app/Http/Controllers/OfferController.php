<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use DB;
class OfferController extends Controller
{


    public function premium(Request $request)
    {
		$check_month = DB::table('Offers')->where([
    ['Category', '=', 1],
    ['UserID', '=', $request->session()->get('website_rank')],
])->get();
		$check_six  = DB::table('Offers')->where([
    ['Category', '=', 2],
    ['UserID', '=', $request->session()->get('website_rank')],
])->get();

if($check_month===NULL and $request->input('month')!==0)
{
	
	DB::table('Offers')->insert([
    ['Active' => 1, 'UserID'=>$request->session()->get('website_rank'), 'Category'=> 1, 'Value'=>$request->input('month')],
]);
	//Insert
}else
{
	if($request->input('month')==0)
	{
		DB::table('Offers')->where([
    ['Category', '=', 1],
    ['UserID', '=', $request->session()->get('website_rank')],
])->delete();
		//Remove
	}else
	{
		DB::table('Offers')
           ->where([
    ['Category', '=', 1],
    ['UserID', '=', $request->session()->get('website_rank')],
	])
	->update(['Value'=>$request->input('month')]);
	echo "update";
	//Update
	}	
}
if($check_six===NULL and $request->input('six_months')!==0)
{
		DB::table('Offers')->insert([
    ['Active' => 1, 'UserID'=>$request->session()->get('website_rank'), 'Category'=> 2, 'Value'=>$request->input('six_months')],
]);
	//Insert
}else
{
	if($request->input('six_months')==0)
	{
				DB::table('Offers')->where([
    ['Category', '=', 2],
    ['UserID', '=', $request->session()->get('website_rank')],
])->delete();
		//Remove
	}else
	{
		DB::table('Offers')
           ->where([
    ['Category', '=', 2],
    ['UserID', '=', $request->session()->get('website_rank')],
	])
	->update(['Value'=>$request->input('six_months')]);
	//Update
	
}

//Return View/ success
    }
	echo "ok";
}
	
	public function gold(Request $request)
    {
    
    }
	
	public function resources(Request $request)
    {
    
    }
}

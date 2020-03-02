<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ResourceController extends Controller
{
	private $tab="resource";
public function oil()
  {
    $title="Oil offers.";
	
$offer_sell_db = DB::table('Offers')
            ->join('Users', 'Offers.UserID', '=', 'Users.id')           
            ->select('Offers.*', 'Users.RRId', 'Users.NickName')
			->where([
    ['Offers.Category', '=', 5],
    ['Offers.Active', '=', 1],
])->get();
		

   $offer_buy_db = DB::table('Offers')
            ->join('Users', 'Offers.UserID', '=', 'Users.id')           
            ->select('Offers.*', 'Users.RRId', 'Users.NickName')
			->where([
    ['Offers.Category', '=', 6],
    ['Offers.Active', '=', 1],
])->get();
	$offer_sell = json_decode(json_encode($offer_sell_db), true);
	$offer_buy = json_decode(json_encode($offer_buy_db), true);
    return view("premium_content", ["offer_sell"=>$offer_sell, "offer_buy"=>$offer_buy, "title"=>$title, "type"=>$this->tab]);
  }
  
    public function ore()
  {
    $title="Ore offers.";

$offer_sell_db = DB::table('Offers')
            ->join('Users', 'Offers.UserID', '=', 'Users.id')           
            ->select('Offers.*', 'Users.RRId', 'Users.NickName')
			->where([
    ['Offers.Category', '=', 7],
    ['Offers.Active', '=', 1],
])->get();
		

   $offer_buy_db = DB::table('Offers')
            ->join('Users', 'Offers.UserID', '=', 'Users.id')           
            ->select('Offers.*', 'Users.RRId', 'Users.NickName')
			->where([
    ['Offers.Category', '=', 8],
    ['Offers.Active', '=', 1],
])->get();
	$offer_sell = json_decode(json_encode($offer_sell_db), true);
	$offer_buy = json_decode(json_encode($offer_buy_db), true);
      return view("premium_content", ["offer_sell"=>$offer_sell, "offer_buy"=>$offer_buy, "title"=>$title, "type"=>$this->tab]);
  }
      public function diamond()
  {
    $title="Diamond offers.";

$offer_sell_db = DB::table('Offers')
            ->join('Users', 'Offers.UserID', '=', 'Users.id')           
            ->select('Offers.*', 'Users.RRId', 'Users.NickName')
			->where([
    ['Offers.Category', '=', 9],
    ['Offers.Active', '=', 1],
])->get();
		

   $offer_buy_db = DB::table('Offers')
            ->join('Users', 'Offers.UserID', '=', 'Users.id')           
            ->select('Offers.*', 'Users.RRId', 'Users.NickName')
			->where([
    ['Offers.Category', '=', 10],
    ['Offers.Active', '=', 1],
])->get();
	$offer_sell = json_decode(json_encode($offer_sell_db), true);
	$offer_buy = json_decode(json_encode($offer_buy_db), true);
       return view("premium_content", ["offer_sell"=>$offer_sell, "offer_buy"=>$offer_buy, "title"=>$title, "type"=>$this->tab]);
  }
        public function uranium()
  {
    $title="Uranium offers.";

$offer_sell_db = DB::table('Offers')
            ->join('Users', 'Offers.UserID', '=', 'Users.id')           
            ->select('Offers.*', 'Users.RRId', 'Users.NickName')
			->where([
    ['Offers.Category', '=', 11],
    ['Offers.Active', '=', 1],
])->get();
		

   $offer_buy_db = DB::table('Offers')
            ->join('Users', 'Offers.UserID', '=', 'Users.id')           
            ->select('Offers.*', 'Users.RRId', 'Users.NickName')
			->where([
    ['Offers.Category', '=', 12],
    ['Offers.Active', '=', 1],
])->get();
	$offer_sell = json_decode(json_encode($offer_sell_db), true);
	$offer_buy = json_decode(json_encode($offer_buy_db), true);
       return view("premium_content", ["offer_sell"=>$offer_sell, "offer_buy"=>$offer_buy, "title"=>$title, "type"=>$this->tab]);
  }
        public function cash()
  {
    $title="State cash offers.";
	
$offer_sell_db = DB::table('Offers')
            ->join('Users', 'Offers.UserID', '=', 'Users.id')           
            ->select('Offers.*', 'Users.RRId', 'Users.NickName')
			->where([
    ['Offers.Category', '=', 13],
    ['Offers.Active', '=', 1],
])->get();
		

   $offer_buy_db = DB::table('Offers')
            ->join('Users', 'Offers.UserID', '=', 'Users.id')           
            ->select('Offers.*', 'Users.RRId', 'Users.NickName')
			->where([
    ['Offers.Category', '=', 14],
    ['Offers.Active', '=', 1],
])->get();
	$offer_sell = json_decode(json_encode($offer_sell_db), true);
	$offer_buy = json_decode(json_encode($offer_buy_db), true);
       return view("premium_content", ["offer_sell"=>$offer_sell, "offer_buy"=>$offer_buy, "title"=>$title, "type"=>$this->tab]);
  }
          public function gold()
  {
    $title="State gold offers.";
		
$offer_sell_db = DB::table('Offers')
            ->join('Users', 'Offers.UserID', '=', 'Users.id')           
            ->select('Offers.*', 'Users.RRId', 'Users.NickName')
			->where([
    ['Offers.Category', '=', 15],
    ['Offers.Active', '=', 1],
])->get();
		

   $offer_buy_db = DB::table('Offers')
            ->join('Users', 'Offers.UserID', '=', 'Users.id')           
            ->select('Offers.*', 'Users.RRId', 'Users.NickName')
			->where([
    ['Offers.Category', '=', 16],
    ['Offers.Active', '=', 1],
])->get();
	$offer_sell = json_decode(json_encode($offer_sell_db), true);
	$offer_buy = json_decode(json_encode($offer_buy_db), true);
      return view("premium_content", ["offer_sell"=>$offer_sell, "offer_buy"=>$offer_buy, "title"=>$title, "type"=>$this->tab]);
  }
}

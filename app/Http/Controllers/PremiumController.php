<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PremiumController extends Controller
{
	private $type="premium";
  public function month()
  {

    $title="Premium account for one month.";
$offer_sell_db = DB::table('Offers')
            ->join('Users', 'Offers.UserID', '=', 'Users.id')           
            ->select('Offers.*', 'Users.RRId', 'Users.NickName')
			->where([
    ['Offers.Category', '=', 1],
    ['Offers.Active', '=', 1],
])->get();
		
   $offer_buy_db = DB::table('Offers')
            ->join('Users', 'Offers.UserID', '=', 'Users.id')           
            ->select('Offers.*', 'Users.RRId', 'Users.NickName')
			->where([
    ['Offers.Category', '=', 2],
    ['Offers.Active', '=', 1],
])->get();
	$offer_sell = json_decode(json_encode($offer_sell_db), true);
	$offer_buy = json_decode(json_encode($offer_buy_db), true);
	//print_r($offer_sell);
       return view("premium_content", ["offer_sell"=>$offer_sell, "offer_buy"=>$offer_buy, "title"=>$title, "type"=>$this->type]);
  }
  
    public function six_months()
  {
	//  $tab="premium";
    $title="Premium account for six months.";
    $offer_sell_db = DB::table('Offers')
            ->join('Users', 'Offers.UserID', '=', 'Users.id')           
            ->select('Offers.*', 'Users.RRId', 'Users.NickName')
			->where([
    ['Offers.Category', '=', 3],
    ['Offers.Active', '=', 1],
])->get();
		

   $offer_buy_db = DB::table('Offers')
            ->join('Users', 'Offers.UserID', '=', 'Users.id')           
            ->select('Offers.*', 'Users.RRId', 'Users.NickName')
			->where([
    ['Offers.Category', '=', 4],
    ['Offers.Active', '=', 1],
])->get();
	$offer_sell = json_decode(json_encode($offer_sell_db), true);
	$offer_buy = json_decode(json_encode($offer_buy_db), true);
               return view("premium_content", ["offer_sell"=>$offer_sell, "offer_buy"=>$offer_buy, "title"=>$title, "type"=>$this->type]);
  }
}

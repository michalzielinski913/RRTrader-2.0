<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GoldController extends Controller
{

  public function main_page()
  {

$offer_sell_db = DB::table('Offers')
            ->join('Users', 'Offers.UserID', '=', 'Users.id')           
            ->select('Offers.*', 'Users.RRId', 'Users.NickName')
			->where([
    ['Offers.Category', '=', 3],
    ['Offers.Active', '=', 1],
])->get();
		

	$offer_sell = json_decode(json_encode($offer_sell_db), true);


       return view("gold", ["offer_sell"=>$offer_sell]);
  }

}

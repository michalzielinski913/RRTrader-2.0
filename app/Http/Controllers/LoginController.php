<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller {
   public function CheckLogin(Request $request) {
      if($request->session()->has('nick'))
	  {
		  return redirect("me");
		  
   }
else
{
	return view("LOGREG.login");
}
	
}
   public function CheckRegister(Request $request) {
      if($request->session()->has('nick'))
	  {
		  return redirect("me");
		  
   }
else
{
	return view("LOGREG.register");
}
	
}
}
?>
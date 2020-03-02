<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SessionController extends Controller {
   public function accessSessionData(Request $request) {
      if($request->session()->has('my_name'))
	  {
		  echo $request->session()->get('m2y_name');
  echo $request->session()->get('my_name');
         echo $request->session()->get('my_na32me');
	  }
	  
      else
         echo 'No data in the session';
   }
   public function storeSessionData(Request $request) {
	  
	   $request->session()->put('nick','michalmaniak');
	  
      echo "Data has been added to session";
   }
   public function deleteSessionData(Request $request) {
      $request->session()->forget('my_name');
      echo "Data has been removed from session.";
   }
   

   
}
?>
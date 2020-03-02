<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GeneratorController extends Controller
{

  public function main_page(Request $request)
  {

$last_db = DB::table('RandomGenerator')
            ->join('Users', 'RandomGenerator.UserId', '=', 'Users.RRId')           
            ->select('RandomGenerator.*', 'Users.NickName')
		->orderBy('id', 'desc')
		->take(20)
		->get();
		

	$last = json_decode(json_encode($last_db), true);
if($request->session()->has('id'))
{
	return view("generator", ["last"=>$last, 'me'=>1]);
}else{
       return view("generator", ["last"=>$last]);
}
  }
  
     public function redirect(Request $request)
  {
	  if($request->input('id')===NULL)
{
	return redirect("generator");
}else
{
$id= preg_replace('/\D/', '', $request->input('id'));
}
		   return redirect("generator/search/".$id);
  }
public function id($id="")
{
	if($id==NULL)
{
	return redirect("generator");
}
	
	  		$last_db = DB::table('RandomGenerator')
            ->join('Users', 'RandomGenerator.UserId', '=', 'Users.RRId')           
            ->select('RandomGenerator.*', 'Users.NickName')
		->orderBy('id', 'desc')
		->where('UserId', '=', $id)
		->get();
		

	$last = json_decode(json_encode($last_db), true);
	return view("search_generator", ["last"=>$last]);

}
  
  
   public function unique($min, $max, $amount)
  {
  $array = range($min, $max);
for($x = 0; $x < $amount; $x++)
{
     $i = random_int(1, count($array))-1;
     $result[] = $array[$i];
     array_splice($array, $i, 1);
}
return $result;
  }
 
    public function add(Request $request)
    {
		$last_db = DB::table('RandomGenerator')
            ->join('Users', 'RandomGenerator.UserId', '=', 'Users.RRId')           
            ->select('RandomGenerator.*', 'Users.NickName')
		->orderBy('id', 'desc')
		->take(20)
		->get();
		

	$last = json_decode(json_encode($last_db), true);
    $result = array();
       $i=0;
        $captcha = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.env('NOCAPTCHA_SECRET', 'NOCAPTCHA_SECRET').'&response='.$request->input('g-recaptcha-response'));

  if (strpos($captcha, 'true') !== false) {
if(ctype_digit($request->input('min')) and ctype_digit($request->input('max')) and ctype_digit($request->input('amount')))
{
if($request->input('min')<$request->input('max'))
{
	if($request->input('amount')<=10 and $request->input('amount')>0 and $request->input('min')>0 and $request->input('max')>0)
	{
		$amount=$request->input('max')-$request->input('min');
		   if($request->input('unique')==true and $amount>=$request->input('amount'))
        {
			 $result=$this->unique($request->input('min'), $request->input('max'), $request->input('amount'));
        }
        else if($request->input('unique')==false)
        {     
        while($i<$request->input('amount'))
        {
			$result[]= random_int($request->input('min'), $request->input('max'));       
            $i++;
        }
		for ($i = 0; $i < count($result); $i++) {
	DB::table('RandomGenerator')->insert(
    ['UserId' => $request->session()->get('id'),
	'NumericalInterval' => "<".$request->input('min').", ".$request->input('max').">",
 'Value'=>$result[$i]]
);
}	
	return view("generator", ["last"=>$last, 'me'=>1, 'error'=>0]);
		}else
		{
			//too small range for unique
	return view("generator", ["last"=>$last, 'me'=>1, 'error'=>1]);
		}
	}else
	{
		//error/ more than 10 or min/max below 0
	return view("generator", ["last"=>$last, 'me'=>1, 'error'=>2]);
		
	}
	}else{
		//error, min>max
	return view("generator", ["last"=>$last, 'me'=>1, 'error'=>3]);
	}
	}else{
		//not int
	return view("generator", ["last"=>$last, 'me'=>1, 'error'=>4]);
	}
	}else
	{
	return view("generator", ["last"=>$last, 'me'=>1, 'error'=>5]);
		//captcha
	}
    }

}

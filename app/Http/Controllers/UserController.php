<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Redirect;
use Mail;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\DB;
class UserController extends Controller {

	public function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
	
	public function hyperlink($message)
{
$findme   = 'https://rivalregions.com/#slide/profile/';
$pos1 = strpos($message, $findme);
$findme   = 'http://rivalregions.com/#slide/profile/';
$pos2 = strpos($message, $findme);
$findme   = 'https://m.rivalregions.com/#slide/profile/';
$pos3 = strpos($message, $findme);
$findme   = 'http://m.rivalregions.com/#slide/profile/';
$pos4 = strpos($message, $findme);

if($pos1!==False || $pos2!==False || $pos3!==False || $pos4!==False ){
	return true;
}else
{
	return false;
}
}
public function converter($message)
{
return preg_replace('/\D/', '', $message);
}
public function login(Request $request)
{
	$email=$request->input('login');
$password=$request->input('password');
	 $check2 = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.env('NOCAPTCHA_SECRET', 'NOCAPTCHA_SECRET').'&response='.$request->input('g-recaptcha-response'));

	if (strpos($check2, 'true') !== false) {
		$check = DB::table('Users')->where([
    ['Email', '=', $email ],
])->get();

				if(!$check->isEmpty())
				{ 

$wynik = json_decode(json_encode($check), true);

					if(password_verify ($password, $wynik[0]['Password']))
					{
						$request->session()->put('nick',$wynik[0]['NickName']);
						$request->session()->put('id',$wynik[0]['RRId']);
						$request->session()->put('rank',$wynik[0]['Rank']);
						$request->session()->put('website_rank',$wynik[0]['Id']);
						return redirect('me');
					}else
						{
							return view('LOGREG.login', ['error'=>1]);
						}
				
				}else
				{
							   return view('LOGREG.login', ['error'=>1]);

				}
	}
	else
	{
		return view('LOGREG.login', ['error'=>2]);
	}
}
	
   public function register(Request $request) {
	   $email= $request->input('email');
	   $email_2 =$request->input('email_2');
	   $pass= $request->input('password');
	   $pass_2= $request->input('password_2');
	   $nick= $request->input('nick');
	   $url= $request->input('link');
	   $url= $request->input('link');
	   
 $captcha = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.env('NOCAPTCHA_SECRET', 'NOCAPTCHA_SECRET').'&response='.$request->input('g-recaptcha-response'));

	if (strpos($captcha, 'true') !== false) {
if(strlen($pass)<8)
{
	return view('LOGREG.register', ['error'=>9]);
}else
{
	if($email!=$email_2 or $pass!=$pass_2)
	{
				return view('LOGREG.register', ['error'=>3]);
	}else
		{
			$link=$this->hyperlink($url);
			if($link)
			{
				$rr_id=$this->converter($url);
			}else{

				return view('LOGREG.register', ['error'=>2]);
			}
			   $check = DB::table('Users')->where([
    ['Nickname', '=', $nick],
    ['Email', '=', $email],
	['RRId', '=', $rr_id],
])->get();


				
				if($check===null)
				{
$hash = password_hash($pass, PASSWORD_DEFAULT);
					
				$kod=$this->generateRandomString(15);
$id = DB::table('Users')->insertGetId(
    ['NickName' => $nick, 'Email' => $email, 'RRId'=> $rr_id, 'Password'=> $hash, 'Rank'=>0]
);
DB::table('Verify')->insert(
    ['UserId' => $id, 'Active' => 0, 'Code'=> $kod]
);
 $api = file_get_contents('http://email.michalmanirb.nazwa.pl/send.php?secret=Dlr2QBg4RK0idMpapY0R&email='.$email.'&token='.$kod);

  return view("LOGREG.register", ["error"=> 1]);
   
   
				}else
				{
				return view('LOGREG.register', ['error'=>5]);
				}
		}
	}
	}
else{

			return view('LOGREG.register', ['error'=>4]);
	}

}

public function logout(Request $request)
{
	$request->session()->forget(['nick', 'id', 'rank', 'website_rank']);
	return redirect('login');
}
}
?>
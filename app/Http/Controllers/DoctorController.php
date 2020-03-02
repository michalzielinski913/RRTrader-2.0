<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class DoctorController extends Controller
{


    public function index()
    {

      $users = User::where('type', 'Doctor')->get();

                return view('doctors.list',["doctorsList"=>$users,
                 "date"=>date("Y"),
                  "title"=>"Lekarze"]);
    }
}

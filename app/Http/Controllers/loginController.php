<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Validator;


class loginController extends Controller
{
    public function postlogin(Request $res){
        dd($res->all());
    }
   public function login(Request $res)
   {
    //    Sentinel::disableCheckpoint();
       $errorMsg=[];
    //    $validator=Validator::make($res->all(),[],$errorMsg);

   }
}

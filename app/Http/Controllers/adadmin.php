<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adadmin extends Controller
{
    public function see()
    {
        return view('adadmin');
    }
    public function see1()
    {
        return view('login');
    }
    public function Addata(Request $res){
        $First_name=$res->input('First_name');
        $Last_name=$res->input('Last_name');
        $Email=$res->input('Email');
        $Username=$res->input('Username');
        $password1=$res->input('password1');
        $password2=$res->input('password2');
        if($password1==$password2)
        {
            $hash_pass=password_hash($password1,PASSWORD_BCRYPT);
            DB::insert('insert into lava_admin1(First_name,Last_name,Email,Username,password) values(?,?,?,?,?)',
            [$First_name,$Last_name,$Email,$Username,$hash_pass]);
            return redirect('login')->with('success','Data saved');
        }
        else{
            return redirect('adadmin')->with('not success!','Data is not saved');

        }

    }
}

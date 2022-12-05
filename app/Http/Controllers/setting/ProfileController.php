<?php

namespace App\Http\Controllers\setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileUpdateRequest; // this thing must be imported
use Illuminate\Auth\Events\Validated;
use App\Http\Controllers\setting\Storage;


class ProfileController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function update(ProfileUpdateRequest $res)
    {
        $profileData=$res->Validated();
        //valildates from user model all need citcrie
        $profile=$res->user();
        //accpects data from another table like id
        if($res->hasFile('profile_picture')){ // checks wheather the image is  uploaded
            $picture=$res->profile_picture; //the actual image is here
            $filename="profile_picture.{$profile->id}.".$picture->getClientOriginalExtension();// give name for the file
            $picture->move(public_path('upload'),$filename);
            // $filename=Storage::putFile('upload',$picture);
            // put it in public folder after creation of the folder specfied on public_path the file name
            
            $profileData['profile_picture']=$filename;
//append the file name on validlited data
        }
       
      $res->user()->update($profileData); // thorw the data into the database server 
      return back()->with('message','Profile has been updated successfull');

     
    }
    public function edit()
    {
        return view('setting/profile',[
            'user'=>auth()->user()
                ]);
    }
}

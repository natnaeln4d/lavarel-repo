<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Company;


class CompaniesController extends Controller
{
    public function companyshow()
  {
    // $companies=Company::orderBy('name')->pluck('name','id','address','website');
    $companies=Company::orderBy('name')->pluck('name','id')->prepend('All Companies','');
    // $companies=new Company();

     return view('companies.showcompany',compact('companies'));
  }
}

<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Company;
use Illuminate\Http\Request;


class contactController extends Controller
{
  public function __construct() {
    $this->middleware(['auth', 'verified']); 
  }
  public function index()
  {
      // $contacts=Contact::orderBy('first_name','asc')->get();
      
    $companies=Company::orderBy('name')->pluck('name','id')->prepend('All Companies','');
      $contacts=Contact::orderBy('id','desc')->Filter()->paginate(5);
    return view('contacts.index',compact('contacts','companies'));
  }
  public function create()
  {
    $contact=new Contact();
    $companies=Company::orderBy('name')->pluck('name','id')->prepend('All Companies','');
    return view('contacts.create',compact('companies'));
  }
  public function update($id,Request $res)
  {
     // $res->validate([
    //   'first_name'=>'required',
    //   'last_name'=>'required',
    //   'email'=>'required|email',
    //   'address'=>'required',
    //   'company_id'=>'required|exits:compaines,id',
    // ]);
    // dd($res->except('first_name',';last_name'));
  
    $contact=Contact::findOrFail($id);
    $contact->update($res->all());
    return redirect()->route('contacts.index')->with('message','New contact Updated successfully');
  }
  public function show($id)
  {
    $contacts=Contact::find($id);
    return view('contacts.show',compact('contacts'));
  }
  public function edit($id)
  {
    $contact=Contact::findOrFail($id);
    $companies=Company::orderBy('name')->pluck('name','id')->prepend('All Companies','');
    return view('contacts.edit',compact('companies','contact'));
  }
  public function store(Request $res)
  {
    // $res->validate([
    //   'first_name'=>'required',
    //   'last_name'=>'required',
    //   'email'=>'required|email',
    //   'address'=>'required',
    //   'company_id'=>'required|exits:compaines,id',


    // ]);
    // dd($res->except('first_name',';last_name'));
    Contact::create($res->all());
    return redirect()->route('contacts.index')->with('message','New contact add successfully');
  }
  public function destory($id)
  {
    $contact=Contact::findOrFail($id);
  $contact->delete();
  return back()->with('message','New contact DELETED successfully');
  }
   public function update2($id,Request $res)
   {
       $OneContact=Contact::findOrFail($id);
       $OneContact->update($res->all());
   }


}

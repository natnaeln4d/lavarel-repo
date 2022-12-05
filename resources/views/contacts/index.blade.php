@extends('layouts.main')
@section('title','Contact App | All Contacts')
@section('content')
<!-- <h1> All contacts</h1> -->
<main class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header card-title">
                  <div class="d-flex align-items-center">
                    <h2 class="mb-0">All Contacts</h2>
                    <div class="ml-auto">
                      <a href="{{route('contacts.create')}}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                    </div>
                  </div>
                </div>
              <div class="card-body">
         @include('contacts._filter')
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Company</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
          @include('layouts.message')
                  @if($contacts->count())
                  @foreach($contacts as $index=>$contact)
                  <tr>
                      <th scope="row">{{$index+$contacts->firstItem()}}</th>
                      <td>{{$contact->first_name}}</td>
                      <td>{{$contact->last_name}}</td>
                      <td>{{$contact->email}}</td>
                      <td>{{$contact->company->name}}</td>
                      <td width="150">
                        <a href="{{route('contacts.show',$contact->id)}}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                        <a href="{{route('contacts.edit',$contact->id)}}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                        <a href="{{route('contacts.destory',$contact->id)}}" class="btn-delete btn btn-sm btn-circle btn-outline-danger" title="Delete"><i class="fa fa-times"></i></a>
                      </td>
                    </tr>
                  @endforeach
                  <form id="form-delete" action="" style="display: none;" method="post">
                  @csrf
                @method('DELETE')
                
                </form>
                  @endif

              
                  </tbody>
                </table> 
                {{$contacts->appends(request()->only('company_id'))->links()}}

                <nav class="mt-4">
               {{$contacts->links()}}
                  </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
<!-- <a href="{{route('contacts.index')}}">All contacts</a>
    <br>
    <a href="{{route('contacts.create')}}">create contacts</a>
    <br> <a href="{{route('contacts.show',1)}}">Show contacts</a> -->
@endsection
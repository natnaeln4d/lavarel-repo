@extends('layouts.main')
@section('title','Conatacts App | All company')
@section('content')
<!-- <main class="py-5"> -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header card-title">
                  <div class="d-flex align-items-center">
                    <h2 class="mb-0">All Companies</h2>
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
                      <th scope="col">Name</th>
                      <th scope="col">Address</th>
                      <th scope="col">Website</th>

                    </tr>
                  </thead>
                  <tbody>
          @include('layouts.message')
                  @if($companies=request('company_id'))
                  @foreach($companies as $id=>$name)
                  <tr>
                      <th scope="row">{{$index+$company->firstItem()}}</th>
                      <td>{{$company->name}}</td>
                      <td>{{$company->address}}</td>
                      <td>{{$company->website}}</td>
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
              

                <nav class="mt-4">
                    <ul class="pagination justify-content-center">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection
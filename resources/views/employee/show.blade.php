@extends('layouts.app')
@section('content')
<div class="col-md-10 offset-md-1">
  <div class="card">
    <div class="card-header"><h1>{{ $employee->first_name." ".$employee->last_name}}</h1></div>
      <a href="{{ url('employee') }}" >
        <button type="button" class="btn btn-sm btn-primary mt-3 mr-2"
                  style="position: absolute; top: 0; right: 50px" >
              Back
        </button>
      </a>
      <div class="card-body">
            <div class="card-body">
            <h5 class="card-title">First Name : {{ $employee->first_name }}</h5>
            <p class="card-text">Last Name : {{ $employee->last_name }}</p>
            <p class="card-text">Email : {{ $employee->email }}</p>
            <p class="card-text">Comapny Name : {{ $employee->company_id }}</p>
            <p class="card-text">Phone No : {{ $employee->phone }}</p>

      </div> 
      </hr>
    </div>
  </div>
</div>
@endsection
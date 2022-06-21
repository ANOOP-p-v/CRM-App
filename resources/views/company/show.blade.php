@extends('layouts.app')
@section('content')
<div class="col-md-10 offset-md-1">
  <div class="card">
    <div class="card-header"><h1>{{ $company->name}}</h1></div>
      <a href="{{ url('company') }}" >
        <button type="button" class="btn btn-sm btn-primary mt-3 mr-2"
                  style="position: absolute; top: 0; right: 50px" >
              Back
        </button>
      </a>
      <div class="card-body">
            <div class="card-body">
            <h5 class="card-title">Name : {{ $company->name }}</h5>
            <p class="card-text">Email : {{ $company->email }}</p>
            <p class="card-text">Logo : {{ $company->logo }}</p>
            <p class="card-text">Website : {{ $company->website }}</p>
      </div> 
      </hr>
    </div>
  </div>
</div>
@endsection
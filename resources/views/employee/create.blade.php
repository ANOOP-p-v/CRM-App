@extends('layouts.app')
@section('content')
<div class="col-md-10 offset-md-1">
  <div class="card">
    <div class="card-header"> Create New Employee</div>
    <div class="card-body">
        <form action="{{ url('employee') }}" method="post">
          {!! csrf_field() !!}
          <label>First Name</label></br>
          <input type="text" name="first_name" id="first_name" class="form-control" ></br>
          <label>Last Name</label></br>
          <input type="text" name="last_name" id="last_name" class="form-control" ></br>
          <label>Email</label></br>
          <input type="text" name="email" id="email" class="form-control"></br>
          <label>Company</label></br>
          <select name="Company" id="company" class="form-control" >
            <option value="">Select Company</option>
            @foreach($companies as $company)
              <option value="{{ $comapny->id }}" >{{ $company->name }}</option>
            @endforeach

         
          </select></br>
          <label>Phone No</label></br>
          <input type="phone_no" name="phone_no" id="logo" class="form-control"></br>
          <input type="submit" value="Save" class="btn btn-success"></br>
      </form>
    
    </div>
  </div>
</div>
@stop
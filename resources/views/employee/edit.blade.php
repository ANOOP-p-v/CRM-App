@extends('layouts.app')
@section('content')
<div class="col-md-10 offset-md-1">

<div class="card">
  <div class="card-header">Employee</div>
  <div class="card-body">
      
      <form action="{{ url('employee/' .$employee->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$employee->id}}" id="id" />
        <label>First Name</label></br>
        <input type="text" name="first_name" id="first_name" value="{{$employee->first_name}}" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="last_name" id="last_name" value="{{$employee->last_name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$employee->email}}" class="form-control"></br>
        <label>Company Name</label></br>
        <input type="text" name="company_id" id="company_id" value="{{$employee->company_id}}" class="form-control"></br>
        <label>Phone No</label></br>
        <input type="text" name="phone" id="phone" value="{{$employee->phone}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
  </div>
</div>

@stop
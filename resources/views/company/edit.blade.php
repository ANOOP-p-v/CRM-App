@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-header">Company</div>
  <div class="card-body">
      
      <form action="{{ url('company/' .$company->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$company->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$company->name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="address" id="address" value="{{$company->email}}" class="form-control"></br>
        <label>Logo</label></br>
        <input type="file" name="logo" id="logo" value="{{$company->logo}}" class="form-control"></br>
        <label>Website</label></br>
        <input type="text" name="website" id="website" value="{{$company->website}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
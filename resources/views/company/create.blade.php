@extends('layouts.app')
@section('content')
<div class="col-md-10 offset-md-1">
  <div class="card">
    <div class="card-header"> Add Company</div>
    <div class="card-body">
        <form action="{{ url('company') }}" method="post">
          {!! csrf_field() !!}
          <label>Name</label></br>
          <input type="text" name="name" id="name" class="form-control" ></br>
          <label>Email</label></br>
          <input type="text" name="email" id="email" class="form-control"></br>
          <label>Logo</label></br>
          <input type="file" name="logo" id="logo" class="form-control"></br>
          <label>Website</label>
          <input type="text" name="website" id="website" class="form-control"></br>
          <input type="submit" value="Save" class="btn btn-success"></br>
      </form>
    
    </div>
  </div>
</div>
@stop
@extends('lecturers.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Lecturer</div>
  <div class="card-body">
       
      <form action="{{ url('lecturer/' .$lecturers->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$lecturers->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$lecturers->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$lecturers->address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$lecturers->mobile}}" class="form-control"></br>
        <label>Department</label></br>
        <input type="text" name="department" id="department" value="{{$lecturers->department}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop
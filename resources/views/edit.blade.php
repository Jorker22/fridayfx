@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<div class="card-body">
<div class="row">
 <div class="col-md-12">
  <br />
  <h3>Edit Record</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif

  <form method="get" action="{{action('HomeController@update', $id)}}">
   {{csrf_field()}}
  
   <div class="form-group">
    <input type="text" name="userID" class="form-control" value="{{$users->userID}}" placeholder="Enter userID" />
   </div>
   <div class="form-group">
    <input type="text" name="status" class="form-control" value="{{$users->status}}" placeholder="Enter status" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Edit" />
   </div>
  </form>
 </div>
</div>

</div>

</div>
</div>
</div>
</div>

@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           facebook
           <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                    <a href="{{url('/redirect')}}" class="btn btn-primary">Login with Facebook</a>
                </div>
        </div>
        </div>
    </div>
</div>
@endsection

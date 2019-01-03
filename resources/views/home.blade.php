@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                    <thead>
                     <th>userID</th>
                    <th>Status</th>
                    <th></th>
                    </thead>
                    <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->userID }}</td>
                        <td>{{ $user->status}}</td>
                        <td><a href="{{action('HomeController@edit', $user->id)}}" class="btn btn-warning">Edit</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layout.main')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
                <table class="table table-hover" >
                   <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th></th>
                   </thead>
                <tbody>
                   <tr>
                    <td>{{ $LoggedUserInfo['name']}}</td>
                    <td>{{ $LoggedUserInfo['email']}}</td>
                    <td><a href="{{ route('profile.index')}}">Edit</a></td>
                   </tr>
                </tbody>
              </table>
         </div>
        </div>
    </div>
@endsection
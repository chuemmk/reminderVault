@extends('layout.main')

@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('profile.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Notification</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3 mt-5">
            <h4>Receive Notification</h4><hr>

            <form action="{{ route ('send.email')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name" value="{{old('name')}}">
                    @error('name') <span class="text-danger">{{$message}}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter your email" value="{{old('email')}}">
                    @error('email') <span class="text-danger">{{$message}}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter title" value="{{old('title')}}">
                    @error('title') <span class="text-danger">{{$message}}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" class="form-control" cols="4" rows="4" value="{{old('description')}}"></textarea>
                    @error('description') <span class="text-danger">{{$message}}</span> @enderror
                </div>

                <button class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
</div>
@endsection
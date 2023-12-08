@extends('layout.main')
@extends('profile.dashboard')
@section('content')

    <div class="container-fluid">
            <div class="card-body">
                <form action="{{route('profile.update', $profile->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{$profile->name}}">
                        <span class="text-danger">@error('name'){{$message}}@enderror</span>
                    </div>
                    </div>

                    <div class="form-group">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="{{$profile->email}}">
                            <span class="text-danger">@error('email'){{$message}}@enderror</span>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success mt-2" >Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
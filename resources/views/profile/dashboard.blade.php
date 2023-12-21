@extends('layout.main')

@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('profile.view')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        {{-- <div class="col-md-6 col-md-offset-3">
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
                    <td><a href="{{ route('profile.index')}}">View</a></td>
                   </tr>
                </tbody>
              </table>
        </div> --}}

        <div class="col-xl-4">

            <div class="card">

              <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
  
                <img src="{{ asset('import/assets/img/user.jpg')}}" alt="Profile" class="rounded-circle" width="100" height="100">
                <h2>{{ $loggedInUserInfo['name']}}</h2>
                <div class="social-links mt-2">
                  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>

              <div class="tab-pane fade show active profile-overview d-flex flex-column" style="padding: 10px" id="profile-overview">  
                <h5 class="card-title">Profile Details</h5>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Name</div>
                  <div class="col-lg-9 col-md-8">{{ $loggedInUserInfo['name']}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Email</div>
                  <div class="col-lg-9 col-md-8">{{ $loggedInUserInfo['email']}}</div>
                </div>

              </div>


            </div> 
        </div>

        <div class="col-xl-8">

            <div class="card">
              <div class="card-body pt-4">                
                    <form id="changePasswordform" action="{{route('update_password')}}" method="POST" novalidate>

                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                    
                         @csrf
                        <div class="row mb-3">
                            <label for="current_password" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                            <div class="col-md-8 col-lg-9">
                              <input type="password" name="current_password" class="form-control" required>
                              <div class="invalid-feedback">Please enter your current password!</div>
                            </div>
                          </div>
  
                      <div class="row mb-3">
                        <label for="new_password" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="new_password" type="password" class="form-control" id="new_password" required>
                          <div class="invalid-feedback">Please enter your new password!</div>
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="confirm_password" class="col-md-4 col-lg-3 col-form-label">Confirm Password</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="confirm_password" type="password" class="form-control" id="confirm_password" required>
                          <div class="invalid-feedback">Please re enter your new password!</div>           
                        </div>
                      </div>
  
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Change Password</button>
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
@extends('auth.layouts.index')

@section('title', 'Register')

@section('content')
  <!-- BEGIN: Content-->
  <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <!-- register section starts -->
        <section class="row flexbox-container">
          <div class="col-xl-8 col-10">
            <div class="card bg-authentication mb-0">
              <div class="row m-0">
                <!-- register section left -->
                <div class="col-md-6 col-12 px-0">
                  <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                    <div class="card-header pb-1">
                      <div class="card-title">
                        <h4 class="text-center mb-2">Sign Up</h4>
                      </div>
                    </div>
                    <div class="card-content">
                      <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                          @csrf
                          <div class="form-group mb-50">
                            <label class="text-bold-600" for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                          <div class="form-group mb-50">
                            <label class="text-bold-600" for="email">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                          <div class="form-group mb-50">
                            <label class="text-bold-600" for="password">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="new-password">

                            @error('password')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                          <div class="form-group mb-2">
                            <label class="text-bold-600" for="password-confirm">Confirm password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                          </div>
                          <button type="submit" class="btn btn-primary glow position-relative w-100">Sign up<i
                              id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                        </form>
                        <hr>
                        <div class="text-center"><small class="mr-25">Already have an account?</small><a
                            href="{{ route('login') }}"><small>Sign in</small> </a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- image section right -->
                <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
                  <img class="img-fluid" src="{{ asset('/app-assets/images/pages/register.png') }}" alt="branding logo">
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- register section endss -->
      </div>
    </div>
  </div>
  <!-- END: Content-->
@endsection

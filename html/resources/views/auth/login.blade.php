@extends('layouts.admin.app')

@section('content')

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{ asset('images/content/logo_page.png') }}" alt="logo">
              </div>
              <form action="{{ route('login') }}" class="pt-3" method="POST">
                @csrf
                <div class="form-group">
                    @error('email')
                        <p class="text-danger" role="alert">{{ $message }}</p>
                    @enderror
                    
                  <input name="email" type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" value="{{ old('email') }}">
                </div>
                <div class="form-group">

                    @error('password')
                        <p class="text-danger" role="alert">{{ $message }}</p>
                    @enderror
                    
                  <input name="password" type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN IN</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
@endsection

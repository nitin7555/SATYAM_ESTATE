@extends('layouts.main')
@section('main-section')
<div class="container-reset mt-4" style="color: white">
   <div class="card login-form login-form-reset">
      <div class="card-body">
         <h3 class="card-title card-title-reset text-center">Reset password</h3>
         <div class="card-text">
            <form class="reset-form" action="/reset-password" method="POST">
               @if(Session::has('success'))
               <div class="alert alert-success">{{ Session::get('success') }}</div>
               @endif
               @if(Session::has('fail'))
               <div class="alert alert-danger">{{ Session::get('fail') }}</div>
               @endif
               @csrf
               <input type="text" name="token" hidden value="{{ $token }}">
               <div class="form-group">
                  <label for="email" class="form-label">Enter your email address and we will send you a link to reset your password.</label>
                  <input type="email" name="email" class="form-control form-control-sm" placeholder="Enter your email address" value="{{ $resetRecord->email }}">
                  @error('email')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
               {{-- password --}}
               <div class="form-group">
                  <label for="newPassword" class="form-label">Enter New Password</label>
                  <input type="text" name="newPassword" class="form-control form-control-sm" placeholder="Enter New Password">
                  @error('newPassword')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
               <div class="form-group">
                  <label for="confirmPassword" class="form-label">Confirm New password</label>
                  <input type="text" name="confirmPassword" class="form-control form-control-sm" placeholder="Enter your email address">
                  @error('confirmPassword')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
               <button type="submit" class="btn reset-btn btn-primary btn-block" style="color: black">Reset Password</button>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection
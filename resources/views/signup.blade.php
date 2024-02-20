@extends('layouts.main')

@section('main-section')

<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form id="registrationForm" action="/signup" method="POST">
                @if(Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                @endif
                @csrf

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" name="name" class="form-control form-control-lg" value="{{ old('name') }}" required />
                  <label class="form-label" for="name">Your Name</label>
                  @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" name="email" class="form-control form-control-lg" value="{{ old('email') }}" required />
                  <label class="form-label" for="email">Your Email</label>
                  @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="password" name="password" class="form-control form-control-lg" required />
                  <label class="form-label" for="password">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="confirmPassword" name="confirm_password" class="form-control form-control-lg" required />
                  <label class="form-label" for="confirm_password">Confirm Password</label>
                  <span id="confirmPasswordError" class="error"></span>
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" required />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit_form"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="/login"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  // Get the password and confirm password input fields
  var passwordInput = document.getElementById("password");
  var confirmPasswordInput = document.getElementById("confirmPassword");
  var confirmPasswordError = document.getElementById("confirmPasswordError");

  // Add event listener to password input field
  passwordInput.addEventListener("input", validatePasswords);
  
  // Add event listener to confirm password input field
  confirmPasswordInput.addEventListener("input", validatePasswords);

  // Function to validate passwords
  function validatePasswords() {
    var password = passwordInput.value;
    var confirmPassword = confirmPasswordInput.value;
    var submitButton = document.querySelector('button[type="submit_form"]');

    if (password !== confirmPassword) {
      confirmPasswordError.textContent = "---Passwords do not match";
      submitButton.disabled = true;
    } else {
      confirmPasswordError.textContent = "";
      submitButton.disabled = false;
    }
  }

  // Form submission handler
  document.getElementById("registrationForm").addEventListener("submit", function(event) {
    // Validate passwords before submission
    if (passwordInput.value !== confirmPasswordInput.value) {
      // Prevent form submission
      event.preventDefault();
      // Show error message
      confirmPasswordError.textContent = "---Passwords do not match";
    }
  });
</script>


@endsection

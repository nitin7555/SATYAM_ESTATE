@extends('layouts.main')
@section('main-section')
<!-- SlideShow -->
<div id="carouselExample" class="carousel slide">
   <div class="carousel-inner">
      <div class="carousel-item active">
         <img
            src="{{ asset('images/banner.png') }}"
            class="d-block w-100"
            alt="..."
            />
      </div>
      <div class="carousel-item">
         <img
            src="{{ asset('images/banner.png') }}"
            class="d-block w-100"
            alt="..."
            />
      </div>
      <div class="carousel-item">
         <img
            src="{{ asset('images/banner.png') }}"
            class="d-block w-100"
            alt="..."
            />
      </div>
   </div>
   <button
      class="carousel-control-prev"
      type="button"
      data-bs-target="#carouselExample"
      data-bs-slide="prev"
      >
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="visually-hidden">Previous</span>
   </button>
   <button
      class="carousel-control-next"
      type="button"
      data-bs-target="#carouselExample"
      data-bs-slide="next"
      >
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="visually-hidden">Next</span>
   </button>
</div>
<!-- Listings -->
<div class="container mt-4">
   <div class="row">
      <!-- Left Side -->
      <div class="col-md-8 left-side">
         <hr />
         <h3>Send Enquiry</h3>
         <h6>
            <small class="text-body-secondary">Send Mail: <i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;<a href="mailto:Info@satyamrealty.com?subject=Enquiry">info@satyamrealty.com</a></small>
         </h6>
         <!-- cards -->
         <form action="/contact-us" method="post">
            @if(Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            @csrf
            <div class="row">
               <div class="mb-2 col-6">
                  <label for="name" class="form-label">Name: </label>
                  <input
                     type="text"
                     class="form-control"
                     name="name"
                     id="name"
                     placeholder="Name"
                     required
                     />
                  @error('name')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
               <div class="mb-2 col-6">
                  <label for="mobile" class="form-label">Mobile No: </label>
                  <input
                     type="text"
                     class="form-control"
                     name="mobile"
                     id="mobile"
                     placeholder="Enter 10 digit mobile no"
                     pattern="[0-9]{10}"
                     oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)"
                     required
                     />
                  @error('mobile')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
               <div class="mb-2">
                  <label for="email" class="form-label">Email: </label>
                  <input
                     type="email"
                     class="form-control"
                     name="email"
                     id="email"
                     placeholder="E-mail Id"
                     required
                     />
                  @error('email')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
               <div class="mb-2">
                  <label for="message" class="form-label">Message: </label>
                  <textarea
                     class="form-control"
                     name="message"
                     placeholder="Enter Your Comment Here"
                     required
                     ></textarea>
                  @error('message')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
            </div>
            <br>
            <button class="btn" type="submit" style="background-color: #006ac2 !important; color:white">Submit</button>
         </form>
      </div>
      <!-- Right Side -->
      <div class="col-lg-4">
         <br>
         <div class="container sticky-md-top" style="top: 100px">
            <h5 class="card-title contactUs">
               <i class="fa-solid fa-address-book"></i></i>&nbsp;&nbsp;Contact Us
            </h5>
            <div class="card user-card" style="width: 19rem">
               <div class="card-body">
                  <h5 class="card-title" style="color: #006ac2">
                     SATYAM  REALTY  SERVICES
                  </h5>
                  <hr />
                  <small><b>Office Address:-</b></small>
                  <br>  
                  <small style="font-weight: 500"><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;<a href="https://www.google.com/maps/dir//Satyam+Realty+Services+.,+UG+-+25,+Shopping+Arcade,+Sohna+Rd,+Malibu+Town,+Gurugram,+Haryana+122001/@28.4220009,76.7416817,11z/data=!4m18!1m8!3m7!1s0x390d1872f78ed90b:0x93512089f878a84!2sSatyam+Realty+Services+.!8m2!3d28.4220009!4d77.0465523!15sCh1zYXR5YW0gcmVhbHR5IGVzdGF0ZSBndXJ1Z3JhbZIBEnJlYWxfZXN0YXRlX2FnZW5jeeABAA!16s%2Fg%2F1tgcwfvz!4m8!1m0!1m5!1m1!1s0x390d1872f78ed90b:0x93512089f878a84!2m2!1d77.0465523!2d28.4220009!3e3?entry=ttu" style="text-decoration: none; color:black">UG-25, Shopping Arcade Malibu Towne, Sohna Road.Gurgaon - 122001 (Hr.), India</a></small>
                  <hr />
                  <small><b>Contact No:-</b></small>
                  <br>  
                  <p style="font-weight: 500; margin-bottom:5px"><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;<a href="tel:+919811849201" style="text-decoration: none;">98-118-49201</a></p>
                  <p style="font-weight: 500; margin-bottom:5px"><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;<a href="tel:+919811148201" style="text-decoration: none;">98-111-48201</a></p>
                  <p style="font-weight: 500; margin-bottom:5px"><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;<a href="tel:+919810003101" style="text-decoration: none;">98-100-03101</a></p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@extends('layouts.main')

@section('main-section')
  <!-- Listings -->
  <div class="container mt-4">
    <div class="row">
      <!-- Left Side -->
      <div class="col-md-8 left-side">
        <h3>Property For Sale</h3>
        <hr />
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1" style="margin-left:5px">
          @foreach($allListings as $listing)
          <a href="/listing/{{ $listing->listing_id }}" class="listing-link">
            <div class="card listing-card btn text-start" style="width: 16rem !important; height:">
              <img
                src="{{ $listing->image }}"
                class="card-img-top"
                alt="Listing Image"
              />
              <div class="card-body listing-card-body">
                <h6 class="card-text"><b>{{ $listing->title }}</b></h6>
                <h6 class="card-text">
                  <small class="text-body-secondary">{{ \Illuminate\Support\Str::words($listing->aboutproject, 10) }}</small>
                </h6>
                <p class="card-text">
                  <b>&#8377; {{ $listing->price }}</b>
                </p>
              </div>
            </div>
          </a>
          @endforeach
        </div>
        
      </div>

      <!-- Right Side -->

      <div class="col-md-4 right-card">
        <div class="container sticky-md-top" style="top: 100px">
            <h5 class="card-title" style="margin-left: 75px">
                <i class="fa-solid fa-address-book"></i></i>&nbsp;&nbsp;Contact Us
              </h5>
          <div class="card user-card" style="width: 18rem">
            
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
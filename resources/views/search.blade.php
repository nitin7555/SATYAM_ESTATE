@extends('layouts.main')
@section('main-section')
<!-- Listings -->
<div class="container mt-4">
   <div class="row">
      <!-- Left Side -->
      <div class="col-md-8 left-side">
         <hr />
         <h3>Search Here <i class="fa-solid fa-magnifying-glass"></i></h3>
         <br>
         <!-- cards -->
         <form action="#" method="get">
            <div class="row">
               <div>
                  {{-- property_type --}}
                  <small style="font-weight: 600">I am looking for : &nbsp;&nbsp;&nbsp;</small>
                  <label class="radio-inline">
                  <input type="radio" name="project_type" value="residential" checked>&nbsp;Residential Property
                  </label>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <label class="radio-inline">
                  <input type="radio" name="project_type" value="commercial">&nbsp;Commercial Property
                  </label>
               </div>
               <div class="mt-3">
                  {{-- property_type --}}
                  <small style="font-weight: 600">I Want to : &nbsp;&nbsp;&nbsp;</small>
                  <label class="radio-inline">
                  <input type="radio" name="property_want" value="buy" checked>&nbsp;Buy
                  </label>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <label class="radio-inline">
                  <input type="radio" name="property_want" value="rent">&nbsp;Rent
                  </label>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <label class="radio-inline">
                  <input type="radio" name="property_want" value="lease">&nbsp;Lease
                  </label>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="mt-3 row align-items-center">
                        <label for="property_type" class="col-sm-2 col-form-label" style="font-weight: 600">Property Type:</label>
                        <div class="col-sm-10">
                           <select class="form-select" name="property_type" aria-label="Property Type" required>
                           <option value="ALL RESIDENTIAL" style="font-weight: 700" @if(old('property_type') == 'ALL RESIDENTIAL') selected @endif>ALL RESIDENTIAL</option>
                           <option value="Multistorey Apartment" @if(old('property_type') == 'Multistorey Apartment') selected @endif>Multistorey Apartment</option>
                           <option value="Independent Builder Floor" @if(old('property_type') == 'Independent Builder Floor') selected @endif>Independent Builder Floor</option>
                           <option value="Residential House/Villa" @if(old('property_type') == 'Residential House/Villa') selected @endif>Residential House/Villa</option>
                           <option value="Residential Plot" @if(old('property_type') == 'Residential Plot') selected @endif>Residential Plot</option>
                           <option value="ALL COMMERCIAL" style="font-weight: 700" @if(old('property_type') == 'ALL COMMERCIAL') selected @endif>ALL COMMERCIAL</option>
                           <option value="Office in IT-Park" @if(old('property_type') == 'Office in IT-Park') selected @endif>Office in IT-Park</option>
                           <option value="Commercial Office Space" @if(old('property_type') == 'Commercial Office Space') selected @endif>Commercial Office Space</option>
                           <option value="Commercial Shop" @if(old('property_type') == 'Commercial Shop') selected @endif>Commercial Shop</option>
                           <option value="Commercial Show-Room" @if(old('property_type') == 'Commercial Show-Room') selected @endif>Commercial Show-Room</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="mt-3 row align-items-center">
                        <label for="city" class="col-sm-2 form-label" style="font-weight: 600">Select City:</label>
                        <div class="col-sm-10">
                           <select class="form-select" name="city" aria-label="City" required>
                           <option value="" @if(old('city') == '') selected @endif>Select</option>
                           <option value="Gurgoan" @if(old('city') == 'Gurgoan') selected @endif>Gurgoan</option>
                           <option value="Dharuhera" @if(old('city') == 'Dharuhera') selected @endif>Dharuhera</option>
                           <option value="Bhiwadi" @if(old('city') == 'Bhiwadi') selected @endif>Bhiwadi</option>
                           <option value="Others" @if(old('city') == 'Others') selected @endif>Others</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="mt-3 row align-items-center">
                     <label for="budget" class="col-sm-2 col-form-label" style="font-weight: 600">Budget:</label>
                     <div class="col-sm-10">
                        <select class="form-select" name="budget" aria-label="Budget">
                           <option value="all" selected>INR</option>
                           <option value="700000">Below 7 Lacs</option>
                           <option value="1000000">10 Lacs</option>
                           <option value="1500000">15 Lacs</option>
                           <option value="2000000">20 Lacs</option>
                           <option value="3000000">30 Lacs</option>
                           <option value="4000000">40 Lacs</option>
                           <option value="5000000">50 Lacs</option>
                           <option value="6000000">60 Lacs</option>
                           <option value="7500000">75 Lacs</option>
                           <option value="10000000">1 Crore</option>
                           <option value="15000000">1.5 Crore</option>
                           <option value="20000000">2 Crore</option>
                           <option value="30000000">3 Crore</option>
                           <option value="50000000">5 Crore</option>
                           <option value="100000000">10 Crore</option>
                           <option value="200000000">&gt;20 Crore</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <br>
            <button class="btn" style="background-color: #006ac2 !important; color:white">Search</button>
         </form>
         <hr>
         <h3>Search Results</h3>
         @if ($allListings->isEmpty())
         <p style="color: red; font-weight:600">No Match found!</p>
         @else
         <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1" style="margin-left:5px">
            @foreach($allListings as $listing)
            <a href="/listing/{{ $listing->listing_id }}" class="listing-link">
               <div class="card listing-card btn text-start" style="width: 16rem !important; height:">
                  <img src="{{ $listing->image }}" class="card-img-top" alt="Listing Image"/>
                  <div class="card-body listing-card-body">
                     <h6 class="card-text"><b>{{ $listing->title }}</b></h6>
                     <h6 class="card-text">
                        <small class="text-body-secondary">{{ \Illuminate\Support\Str::words($listing->aboutproject, 10) }}</small>
                     </h6>
                     <p class="card-text"><b>&#8377; {{ $listing->price }}</b></p>
                  </div>
               </div>
            </a>
            @endforeach
         </div>
         @endif
      </div>
      <!-- Right Side -->
      <div class="col-md-4">
         <br>
         <div class="container sticky-md-top" style="top: 100px">
            <h5 class="card-title">
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
@extends('layouts.main')
@section('main-section')
<!-- Listings -->
<div class="container mt-4">
   <div class="row">
      <!-- Left Side -->
      <div class="col-md-8 left-side">
         <hr />
         <h3 style="color: #006ac2; margin-bottom:10px">Post Requirement For Buying Property</h3>
         <h6>
            <small class="text-body-secondary">Didn't find the property you were looking for? Just fill the form below with your Requirements and Property advertisers will contact you soon. You will also receive alerts of properties matching your requirements.</small>
         </h6>
         <br>
         <!-- cards -->
         <form action="/post-requirement" method="post">
            @if(Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            @csrf
            <div class="row">
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
               <div class="col-md-6">
                  <div class="mt-3 row align-items-center">
                     <label for="property_type" class="col-sm-5 col-form-label" style="font-weight: 600;">Property Type:</label>
                     <div class="col-sm-7">
                        <select class="form-select" name="property_type" aria-label="Property Type" required>
                           <option value="">Select</option>
                           <optgroup label="ALL RESIDENTIAN">
                              <option value="Multistorey Apartment">Multistorey Apartment</option>
                              <option value="Independent Builder Floor">Independent Builder Floor</option>
                              <option value="Residential House/Villa">Residential House/Villa</option>
                              <option value="Residential Plot">Residential Plot</option>
                           </optgroup>
                           <optgroup label="ALL COMMERCIAL">
                              <option value="Office in IT-Park">Office in IT-Park</option>
                              <option value="Commercial Office Space">Commercial Office Space</option>
                              <option value="Commercial Shop">Commercial Shop</option>
                              <option value="Commercial Show-Room">Commercial Show-Room</option>
                           </optgroup>
                        </select>
                     </div>
                     @error('property_type')
                     <span class="text-danger">{{ $message }}</span>
                     @enderror
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="mt-3 row align-items-center">
                     <label for="city" class="col-sm-2 col-form-label" style="font-weight: 600">City:</label>
                     <div class="col-sm-10">
                        <select class="form-select" name="city" aria-label="City" required>
                           <option value="">Select</option>
                           <option value="Gurgoan">Gurgoan</option>
                           <option value="Dharuhera">Dharuhera</option>
                           <option value="Bhiwadi">Bhiwadi</option>
                           <option value="Others">Others</option>
                        </select>
                     </div>
                     @error('city')
                     <span class="text-danger">{{ $message }}</span>
                     @enderror
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="mt-3 row align-items-center">
                     <label for="locality" class="col-sm-5 col-form-label" style="font-weight: 600;">Locality:</label>
                     <div class="col-sm-7">
                        <select class="form-select" name="locality" aria-label="Locality" required>
                           <option value="">Select</option>
                           <option value="Sohna Road">Sohna Road</option>
                           <option value="Golf Course Road">Golf Course Road</option>
                           <option value="Golf Course Extn Road">Golf Course Extn Road</option>
                           <option value="Nirvana Country - 1">Nirvana Country - 1</option>
                           <option value="Nirvana Country - 2">Nirvana Country - 2</option>
                           <option value="Nirvana Country - 3">Nirvana Country - 3</option>
                           <option value="Others">Others</option>
                        </select>

                     </div>
                     @error('locality')
                     <span class="text-danger">{{ $message }}</span>
                     @enderror
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="mt-3 row align-items-center">
                     <label for="bhk" class="col-sm-4 col-form-label" style="font-weight: 600">Bedrooms/BHK:</label>
                     <div class="col-sm-8">
                        <select class="form-select" name="bhk" aria-label="Bhk">
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                        </select>
                     </div>
                     @error('bhk')
                     <span class="text-danger">{{ $message }}</span>
                     @enderror
                  </div>
               </div>
            </div>
            <br>
            <h6 style="color: #569B02">Property Area & Price</h6>
            <hr style="margin-top: 0px" class="col-3">
            <div class="mt-3 row align-items-center col-8">
               <label for="covered_area" class="col-sm-4 col-form-label" style="font-weight: 600">Covered Area:</label>
               <div class="col-sm-8">
                  <div class="row">
                     <div class="col">
                        <input type="text" class="form-control border-dark" name="covered_area[]" id="covered_area" required>
                     </div>
                     <div class="col">
                        <select class="form-select" name="covered_area[]" aria-label="Covered Area">
                           <option value="Sq-Feet">Sq-Feet</option>
                           <option value="Sq-Yards">Sq-Yards</option>
                           <option value="Sq-Meters">Sq-Meters</option>
                        </select>
                     </div>
                  </div>
               </div>
               @error('covered_area')
               <span class="text-danger">{{ $message }}</span>
               @enderror
            </div>
            <div class="mt-3 row align-items-center col-8">
               <label for="land_area" class="col-sm-4 col-form-label" style="font-weight: 600">Plot/Land Area:</label>
               <div class="col-sm-8">
                  <div class="row">
                     <div class="col">
                        <input type="text" class="form-control border-dark" name="land_area[]" id="land_area" required>
                     </div>
                     <div class="col">
                        <select class="form-select" name="land_area[]">
                           <option value="Sq-Feet">Sq-Feet</option>
                           <option value="Sq-Yards">Sq-Yards</option>
                           <option value="Sq-Meters">Sq-Meters</option>
                        </select>
                     </div>
                  </div>
               </div>
               @error('land_area')
               <span class="text-danger">{{ $message }}</span>
               @enderror
            </div>
            <div class="mt-3 row align-items-center col-8">
               <label for="budget" class="col-sm-4 col-form-label" style="font-weight: 600">Budget:</label>
               <div class="col-sm-8">
                  <div class="row">
                     <div class="col">
                        <input type="text" class="form-control border-dark" name="budget" id="budget">
                     </div>
                  </div>
               </div>
            </div>
            <div class="row mt-4">
               <div class="mb-2 col-6">
                  <label for="name" class="form-label"  style="font-weight: 600">Name: </label>
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
                  <label for="mobile" class="form-label"  style="font-weight: 600">Mobile No: </label>
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
                  <label for="email" class="form-label"  style="font-weight: 600">Email: </label>
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
                  <label for="message" class="form-label"  style="font-weight: 600">Message: </label>
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
            <button class="btn" style="background-color: #006ac2 !important; color:white">Submit</button>
         </form>
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
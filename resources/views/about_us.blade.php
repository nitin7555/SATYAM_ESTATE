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
         <h3>About Us</h3>
         <h6>
            <small class="text-body-secondary">Send Mail: <i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;<a href="mailto:Info@satyamrealty.com?subject=Enquiry">info@satyamrealty.com</a></small>
         </h6>
         <!-- cards -->
         <p>We Believe Footprints of time are not made by sitting down....     SATYAM Realty Services was conceived in the year 2005 and since then has been involved in real-estate business. The people behind infinite foundations & realty services have more than 12 years of experience in real-estate industry. We specialize in buying, selling, renting and leasing of residential and commercial properties. We are working as channel partners with Unitech Ltd, DLF, Vatika Ltd, Omaxe Ltd, Parsvnath Ltd, Malibu Estate Pvt Ltd, Vipul Ltd, Orris Infrastructure Pvt Ltd, JMD Ltd, Emmar MGF, IREO   to name few.</p>
         <p>Our Services include not only helping buyers to find the right property from among more new units but also managing the furnishing, upkeep and - in some cases - tenancy arrangement of the new property</p>
         <p>Every day, in markets around the globe, we apply our insight, experience, intelligence and resources to help clients make informed real estate decisions. We do not exist without our clients - and we never lose sight of this fact.</p>
         <p>Our mission is to deliver superior results to clients by: Putting the client first -- always.</p>
         <p>Collaborating across markets and services lines.</p>
         <p>Thinking innovatively, but acting practically.</p>
         <p>Providing a rewarding work environment.</p>
         <p>We help our clients to manage their valuable investments with our experienced Property Consultant Team. Our customer oriented services ensure satisfaction of client preferences and requirement.</p>
      </div>
      <!-- Right Side -->
      <div class="col-md-4">
         <div class="container sticky-md-top" style="top: 100px">
            <h5 class="card-title">
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
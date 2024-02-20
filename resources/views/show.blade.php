@extends('layouts.main')

@section('main-section')

<!-- Main Content -->
<div class="container mt-4">
    @if(Session::has('fail'))
            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
            @endif
    <div class="row">
        <!-- Left Side -->
        <div class="col-md-8 left-side">
            <!-- Show Property -->
            <h3>Recommended Property</h3>
            <hr>
            <div class="card show-card col-sm-8" style="margin-left: 10px">
                <h3 style="color: #006ac2">{{ $listing->title }}</h3>
                <br>
                <img class="card-img-top show-img" src="{{ $listing->image }}" alt="Property_Image" />
                <br>
                <p class="mb-0" style="font-size: x-large"><i>&#8377; {{ $listing->price }}</i></p>
                    <p style="padding: 0; margin: 0">
                        <i>Flat/Apartment for sale in</i>
                    </p>
                    <blockquote class="blockquote">
                        <p class="mb-0">{{ $listing->city }},&nbsp;{{ $listing->locality }}</p>
                    </blockquote>
                <div class="card-body" style="padding-left: 0">
                    <blockquote class="blockquote">
                        @if($listing->aboutproject)
                        <h5 style="color: #006ac2">About Project <hr></h5>
                        <p class="mb-0" style="font-size:medium">{!! nl2br($listing->aboutproject) !!}</p>
                        <br>
                        @endif
                        @if($listing->aboutbuilder)
                        <h5 style="color: #006ac2">About Builder <hr></h5>
                        <p class="mb-0" style="font-size:medium">{!! nl2br($listing->aboutbuilder) !!}</p>
                        <br>
                        @endif
                        
                        @if($listing->projectFeatures)
                        <h5 style="color: #006ac2">Project Features <hr></h5>
                        <p class="mb-0" style="font-size:medium">{!! nl2br($listing->projectFeatures) !!}</p>
                        <br>
                        @endif

                        @if($listing->sitePlan)
                        <h5 style="color: #006ac2">Site Plan <hr></h5>
                        <p class="mb-0" style="font-size:medium">{!! nl2br($listing->sitePlan) !!}</p>
                        <br>
                        @endif

                        @if($listing->locationPlan)
                        <h5 style="color: #006ac2">Location Plan <hr></h5>
                        <p class="mb-0" style="font-size:medium">{!! nl2br($listing->locationPlan) !!}</p>
                        <br>
                        @endif

                        @if($listing->floorPlan)
                        <h5 style="color: #006ac2">Floor Plan <hr></h5>
                        <p class="mb-0" style="font-size:medium">{!! nl2br($listing->floorPlan) !!}</p>
                        <br>
                        @endif
                    </blockquote>
                </div>
                @if(Session::has('loginId'))
                <div class="row">
                    <div class="col-md-3">
                        <a href="/listing/{{ $listing->listing_id }}/edit" class="btn add-btn">Edit Details</a>
                    </div>
                        <div class="col-md-3">
                        <form action="/listing/{{ $listing->listing_id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn add-btn">Delete Post</button>
                        </form>
                    </div>
                </div>
                @endif
            </div>
            <br /><br /><br />
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

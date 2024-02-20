@extends('layouts.main')
@section('main-section')
<div class="row">
<div class="col-6 offset-3">
   <br /><br />
   <h3>Edit your Property Details</h3>
   <form action="/listing/{{ $listing->listing_id }}" method="post"  enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-3">
         <label for="title" class="form-label" style="font-weight: 600">Title: </label>
         <input
            type="text"
            class="form-control"
            name="title"
            id="title"
            placeholder="Add a catchy title" value="{{ $listing->title }}"
            required
            />
         @error('title')
         <span class="text-danger">{{ $message }}</span>
         @enderror
      </div>
      {{-- About Project --}}
      <div class="mb-3">
         <label for="aboutproject" class="form-label" style="font-weight: 600">About Project: </label>
         <textarea
            name="aboutproject"
            class="form-control"
            id="aboutproject-textarea"
            placeholder="About this Project"
            >{!! nl2br($listing->aboutproject) !!}</textarea>
         @error('aboutproject')
         <span class="text-danger">{{ $message }}</span>
         @enderror
      </div>
      {{-- About Builder --}}
      <div class="mb-3">
         <label for="aboutbuilder" class="form-label" style="font-weight: 600">About Builder: </label>
         <textarea
            name="aboutbuilder"
            class="form-control ckeditor-textarea"
            id="aboutbuilder-textarea"
            placeholder="About Builder"
            >{!! nl2br($listing->aboutbuilder) !!}</textarea>
         @error('aboutbuilder')
         <span class="text-danger">{{ $message }}</span>
         @enderror
      </div>
      {{-- Project Features --}}
      <div class="mb-3">
         <label for="projectFeatures" class="form-label" style="font-weight: 600">Project Features: </label>
         <textarea
            name="projectFeatures"
            class="form-control ckeditor-textarea"
            id="projectFeatures-textarea"
            placeholder="Project Features"
            >{!! nl2br($listing->projectFeatures) !!}</textarea>
         @error('projectFeatures')
         <span class="text-danger">{{ $message }}</span>
         @enderror
      </div>
      {{-- Site Plan --}}
      <div class="mb-3">
         <label for="sitePlan" class="form-label" style="font-weight: 600">Site Plan: </label>
         <textarea
            name="sitePlan"
            class="form-control ckeditor-textarea"
            id="sitePlan-textarea"
            placeholder="Site Plan"
            >{!! nl2br($listing->sitePlan) !!}</textarea>
         @error('sitePlan')
         <span class="text-danger">{{ $message }}</span>
         @enderror
      </div>
      {{-- Location Plan --}}
      <div class="mb-3">
         <label for="locationPlan" class="form-label" style="font-weight: 600">Location Plan: </label>
         <textarea
            name="locationPlan"
            class="form-control ckeditor-textarea"
            id="locationPlan-textarea"
            placeholder="Location Plan"
            >{!! nl2br($listing->locationPlan) !!}</textarea>
         @error('locationPlan')
         <span class="text-danger">{{ $message }}</span>
         @enderror
      </div>
      {{-- Floor Plan --}}
      <div class="mb-3">
         <label for="floorPlan" class="form-label" style="font-weight: 600">Floor Plan: </label>
         <textarea
            name="floorPlan"
            class="form-control ckeditor-textarea"
            id="floorPlan-textarea"
            placeholder="Floor Plan"
            >{!! nl2br($listing->floorPlan) !!}</textarea>
         @error('floorPlan')
         <span class="text-danger">{{ $message }}</span>
         @enderror
      </div>
      <div class="mb-3">
         <div class="custom-file">
            <label class="custom-file-label" for="image" style="font-weight: 600">Upload Image : </label>
            <input type="file" name="image" class="custom-file-input" id="customFile">
            @error('image')
            <span class="text-danger">{{ $message }}</span>
            @enderror
         </div>
      </div>
      <div class="row">
         <div class="col-md-6">
            <div class="mb-3">
               <label for="price" class="form-label" style="font-weight: 600">Price: </label>
               <input
                  type="text"
                  class="form-control"
                  name="price"
                  id="price"
                  placeholder="125000" value="{{ $listing->price }}"
                  required
                  />
               @error('price')
               <span class="text-danger">{{ $message }}</span>
               @enderror
            </div>
         </div>
         <div class="col-md-6">
            <div class="mb-3">
               <label for="property_type" class="form-label" style="font-weight: 600">Property Type:</label>
               <select class="form-select" name="property_type" aria-label="Property Type" required>
               <option value="ALL RESIDENTIAL"  @if($listing->property_type == 'ALL RESIDENTIAL') selected @endif style="font-weight: 700">ALL RESIDENTIAL</option>
               <option value="Multistorey Apartment"  @if($listing->property_type == 'Multistorey Apartment') selected @endif>Multistorey Apartment</option>
               <option value="Independent Builder Floor" @if($listing->property_type == 'Independent Builder Floor') selected @endif>Independent Builder Floor</option>
               <option value="Residential House/Villa" @if($listing->property_type == 'Residential House/Villa') selected @endif>Residential House/Villa</option>
               <option value="Residential Plot" @if($listing->property_type == 'Residential Plot') selected @endif>Residential Plot</option>
               <option value="ALL COMMERCIAL" @if($listing->property_type == 'ALL COMMERCIAL') selected @endif style="font-weight: 700">ALL COMMERCIAL</option>
               <option value="Office in IT-Park" @if($listing->property_type == 'Office in IT-Park') selected @endif>Office in IT-Park</option>
               <option value="Commercial Office Space" @if($listing->property_type == 'Commercial Office Space') selected @endif>Commercial Office Space</option>
               <option value="Commercial Shop" @if($listing->property_type == 'Commercial Shop') selected @endif>Commercial Shop</option>
               <option value="Commercial Show-Room" @if($listing->property_type == 'Commercial Show-Room') selected @endif>Commercial Show-Room</option>
               </select>
               @error('property_type')
               <span class="text-danger">{{ $message }}</span>
               @enderror
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6">
            <div class="mb-3">
               <label for="city" class="form-label" style="font-weight: 600">City: </label>
               <select class="form-select" name="city" aria-label="City" required>
                  <option value="">Select</option>
                  <option value="Gurgoan" @if($listing->city == 'Gurgoan') selected @endif>Gurgoan</option>
                  <option value="Dharuhera" @if($listing->city == 'Dharuhera') selected @endif>Dharuhera</option>
                  <option value="Bhiwadi" @if($listing->city == 'Bhiwadi') selected @endif>Bhiwadi</option>
                  <option value="Others" @if($listing->city == 'Others') selected @endif>Others</option>
               </select>
               @error('city')
               <span class="text-danger">{{ $message }}</span>
               @enderror
            </div>
         </div>
         <div class="col-md-6">
            <div class="mb-3">
               <label for="locality" class="form-label" style="font-weight: 600">Locality: </label>
               <input
                  type="text"
                  class="form-control"
                  name="locality"
                  id="locality"
                  placeholder="Locality" value="{{ $listing->locality }}"
                  required
                  />
            </div>
         </div>
         <button type="submit" class="btn add-btn">Update</button>
   </form>
   </div>
</div>
@endsection
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquiryFormMail;
use App\Mail\PostRequirementMail;
use App\Models\Listing;

class NavbarController extends Controller
{
    public function contactUs(){
        return view('contact_us');
    }

    public function propertyForSale(){
        $allListings = Listing::all();

        $data = compact('allListings');
        return view('property_for_sale')->with($data);
    }

    // Enquiry Email from form
    public function enquiryMail(Request $request){
         
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|digits:10',
            'message' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'subject' => "Enquiry Mail",
            'message' => $request->message
        ];

        Mail::to('nitinsharma7555@gmail.com')->send(new EnquiryFormMail($data));


        return back()->with(['success' => 'Email successfully sent!']);
    }

    public function search(){
        
        if(request('property_type') && request('city')){

            $propertyType = request('property_type');
            $city = request('city');

            $allListings = Listing::where('property_type', $propertyType)
                ->orWhere('city', $city)
                ->get();
            $data = compact('allListings');
            return view('search')->with($data);
        }


        $allListings = Listing::all();
        $data = compact('allListings');
        return view('search')->with($data);
    }

    public function postRequirement(){
        return view('post_requirement');
    }

    public function postRequirementMail(Request $request){
        $request->validate([
            'property_want' => 'required',
            'property_type' => 'required',
            'city' => 'required',
            'locality' => 'required',
            'bhk' => 'required',
            'covered_area' => 'required|array',
            'covered_area.*' => 'required',
            'land_area' => 'required|array',
            'land_area.*' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|digits:10',
            'message' => 'required'
        ]);

        $data = [
            'property_want' => $request->property_want,
            'property_type' => $request->property_type,
            'city' => $request->city,
            'locality' => $request->locality,
            'bhk' => $request->bhk,
            'covered_area' => $request->input('covered_area'),
            'land_area' => $request->input('land_area'),
            'budget' => $request->budget,
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'message' => $request->message
        ];

        Mail::to('nitinsharma7555@gmail.com')->send(new PostRequirementMail($data));

        return back()->with(['success' => 'Email Successfully Sent!']);
    }

    public function aboutUs(){
        return view('about_us');
    }

    public function upload(Request $request){
        if($request->hasFile('upload')){
        $originName = $request->file('upload')->getClientOriginalName();
        $fileName = pathinfo($originName, PATHINFO_FILENAME);
        $extension = $request->file('upload')->getClientOriginalExtension();
        $fileName = $fileName.'_'.time().time().'.'.$extension;

        $request->file('upload')->move(public_path('media'), $fileName);
        $url = asset('media/'.$fileName);

        return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
    }
    }
}

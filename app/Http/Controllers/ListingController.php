<?php

namespace App\Http\Controllers;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\User;


class ListingController extends Controller
{
     public function __construct()
    {
        $this->middleware('isLoggedIn')->except('index', 'show');
        $this->middleware('check_user_authorization')->except('index', 'show', 'create','store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //
        $allListings = Listing::all();

        $data = compact('allListings');
        return view('index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
         $request->validate([
            'title' => 'required|string|max:50',
            'aboutproject' => 'nullable|string',
            'aboutbuilder' => 'nullable|string',
            'projectFeatures' => 'nullable|string',
            'sitePlan' => 'nullable|string',
            'locationPlan' => 'nullable|string',
            'floorPlan' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'price' => 'required|string|max:20',
            'property_type' => 'required|string',
            'city' => 'required|string',
            'locality' => 'required|string',
        ]);
        
        if($request->file('image')){
        $image = $request->file('image')->getRealPath();
        $uploadedImage = Cloudinary::upload($image, [
            'folder' => 'Satyam_Estate',
        ])->getSecurePath();
        }
        
            // Find the listing
            $listing = new Listing;
            $listing->title = $request['title'];
            if ($request->has('aboutproject')) {
                $listing->aboutproject = $request['aboutproject'];
                }
            if ($request->has('aboutbuilder')) {
                $listing->aboutbuilder = $request['aboutbuilder'];
                }
            if ($request->has('projectFeatures')) {
                $listing->projectFeatures = $request['projectFeatures'];
                }
            if ($request->has('sitePlan')) {
                $listing->sitePlan = $request['sitePlan'];
                }
            if ($request->has('locationPlan')) {
                $listing->locationPlan = $request['locationPlan'];
                }
            if ($request->has('floorPlan')) {
                $listing->floorPlan = $request['floorPlan'];
                }
            if($request->file('image')){
                $listing->image = $uploadedImage;
            }
            $listing->price = $request['price'];
            $listing->property_type = $request['property_type'];
            $listing->city = $request['city'];
            $listing->locality = $request['locality'];
            $listing->user_id = Session('loginId');

            $listing->save();

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listing = Listing::where('listing_id', $id)->first();
        
        $userID = session('loginId');
        $user = User::find($userID);

        $data = compact('listing','user');
        return view('show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listing = Listing::find($id);;
        $data = compact('listing');
        return view('edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:50',
            'aboutproject' => 'nullable|string',
            'aboutbuilder' => 'nullable|string',
            'projectFeatures' => 'nullable|string',
            'sitePlan' => 'nullable|string',
            'locationPlan' => 'nullable|string',
            'floorPlan' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'price' => 'required|string|max:20',
            'property_type' => 'required|string',
            'city' => 'required|string',
            'locality' => 'required|string',
        ]);
        
        $listing = Listing::find($id);

        if($request->file('image')){

        $publicId = $publicId = basename(parse_url($listing->image)['path'], '.' . pathinfo($listing->image, PATHINFO_EXTENSION));
        Cloudinary::destroy('Satyam_Estate/'.$publicId); 

        $image = $request->file('image')->getRealPath();
        $uploadedImage = Cloudinary::upload($image, [
            'folder' => 'Satyam_Estate',
        ])->getSecurePath();
        }
        
            // Find the listing
            
            $listing->title = $request['title'];
            if ($request->has('aboutproject')) {
                $listing->aboutproject = $request['aboutproject'];
                }
            if ($request->has('aboutbuilder')) {
                $listing->aboutbuilder = $request['aboutbuilder'];
                }
            if ($request->has('projectFeatures')) {
                $listing->projectFeatures = $request['projectFeatures'];
                }
            if ($request->has('sitePlan')) {
                $listing->sitePlan = $request['sitePlan'];
                }
            if ($request->has('locationPlan')) {
                $listing->locationPlan = $request['locationPlan'];
                }
            if ($request->has('floorPlan')) {
                $listing->floorPlan = $request['floorPlan'];
                }
            if($request->file('image')){
                $listing->image = $uploadedImage;
            }
            $listing->price = $request['price'];
            $listing->property_type = $request['property_type'];
            $listing->city = $request['city'];
            $listing->locality = $request['locality'];

            $listing->update();

        // Redirect or return response as needed
        return view('show')->with(compact('listing'));



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listing = Listing::find($id);

            $publicId = $publicId = basename(parse_url($listing->image)['path'], '.' . pathinfo($listing->image, PATHINFO_EXTENSION));
            
            Cloudinary::destroy('Satyam_Estate/'.$publicId);      
            $listing->delete();
            return redirect('/');
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

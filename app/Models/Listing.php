<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    protected $table = "listings";
    protected $primaryKey = "listing_id";


    protected $fillable = [
        'title',
        'aboutproject',
        'aboutbuilder',
        'projectFeatures',
        'sitePlan',
        'locationPlan',
        'floorPlan',
        'image',
        'price',
        'property_type',
        'city',
        'locality',
        'user_id',
    ];
}

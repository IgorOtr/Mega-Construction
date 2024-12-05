<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'p_title',
        'p_price',
        'p_address',
        'p_bedroom',
        'p_bathroom',
        'p_parking',
        'p_area',
        'p_description',
        'p_cover_img',
        'p_zillow_url',
        'p_category',
        'p_status',
        'p_slug'

    ];
}

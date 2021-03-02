<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    /** @var array */
    protected $fillable = ["title", "description", "price", "address_id", "lat", "lng"];
}

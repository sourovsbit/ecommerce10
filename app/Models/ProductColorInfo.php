<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class ProductColorInfo extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];

    
}

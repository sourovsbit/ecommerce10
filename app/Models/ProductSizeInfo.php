<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductSizeInfo extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];

    public function size()
    {
        return $this->belongsTo('App\Models\Size','size_id');
    }
}

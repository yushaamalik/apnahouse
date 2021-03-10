<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Architect;
use App\Models\ModificationRequest;
class Plan extends Model
{
    use HasFactory;

    public function architect()
    {
        # code...
        return $this->belongsTo('App\Models\Architect');
    }

    public function modificationRequest()
    {
        # code...
        return $this->hasMany('App\Models\ModificationRequest');
    }

}

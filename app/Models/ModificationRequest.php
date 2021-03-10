<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Plan;

class ModificationRequest extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function plan()
    {
        # code...
        return $this->belongsTo('App\Models\Plan');
    }
}

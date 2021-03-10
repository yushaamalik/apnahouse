<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Architect;
class ArchitectProfile extends Model
{
    use HasFactory;

    public function architect()
    {
        # code...
        return $this->belongsTo('App\Models\Architect');
    }
}

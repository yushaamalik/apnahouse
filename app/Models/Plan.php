<?php

namespace App\Models;

use App\Models\Architect;
use App\Models\PlanCategory;
use App\Models\Modification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function architect()
    {
        return $this->belongsTo(Architect::class);
    }

    public function modification()
    {
        return $this->hasMany(Modification::class);
    }

    public function planCategory()
    {
        return $this->belongsTo(PlanCategory::class);
    }

}

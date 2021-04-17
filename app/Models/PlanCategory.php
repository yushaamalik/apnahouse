<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanCategory extends Model
{
    use HasFactory;

    protected $table = 'plan_categories';

    protected $guarded = [];

    public function plans()
    {
        return $this->hasMany(Plan::class);
    }
}

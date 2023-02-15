<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $guarded = [];

    //relation ManytoMany
    public function competitions()
    {
        return $this->belongsToMany(Competition::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Competition extends Model
{
    use HasFactory;

    protected $guarded = [];

    //relation ManytoMany
    public function teams() {
        return $this->belongsToMany(Team::class);

    }
}

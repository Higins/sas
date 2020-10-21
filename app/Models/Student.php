<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'sex',
        'email',
        'place_of_birth',
        'date_of_birth'
    ];
    public function getPlaceAndDateAttribute() {
        return $this->place_of_birth . ', ' . $this->date_of_birth;
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class)->using(GroupStudent::class);
    }
}

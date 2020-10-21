<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'leader',
        'subject'
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class)->using(GroupStudent::class);
    }
}

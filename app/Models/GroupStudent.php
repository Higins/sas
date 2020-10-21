<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class GroupStudent extends Pivot
{
    protected $fillable = [
        'student_id',
        'group_id'
    ];
    public function student() {
        return $this->belongsTo(Student::class,'student_id');
    }
}

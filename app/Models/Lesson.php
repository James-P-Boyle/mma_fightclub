<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'lesson_name', 'lesson_time'
    ];

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}

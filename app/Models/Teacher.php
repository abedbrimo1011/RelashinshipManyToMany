<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Teacher extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        "name","email","phone",
    ] ;
    public function subjects()
    {
        return $this->belongsToMany(Subject::class,'teacher_subject');
    }
}

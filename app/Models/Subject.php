<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Subject extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'name'
    ] ;
    public function teachers(){
        return $this->belongsToMany(Teacher::class,'teacher_subject') ;
    }
}

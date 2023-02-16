<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    protected $guarded = [''];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function questionnaire()
    {
        return $this->hasMany(ComplaintQuestionnaire::class);
    }

    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }

    function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

}

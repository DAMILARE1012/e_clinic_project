<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $dates = [
        'start_time',
        'finish_time',
        'date'
    ];

    protected $fillable = [
        'start_time',
        'finish_time',
        'date'
    ];

    public function complaint()
    {
        return $this->belongsTo(Complaint::class);
    }
}

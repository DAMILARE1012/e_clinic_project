<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $dates = [
        'start_time',
        'finish_time'
    ];

    protected $fillable = [
        'start_time_1',
        'finish_time_1',
        'start_time_2',
        'finish_time_2',
        'start_time_3',
        'finish_time_3'
    ];

    public function complaints()
    {
        return $this->belongsTo(Complaint::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientSpecialist extends Model
{
    use HasFactory;
    
    protected $guarded = [''];

    public function specialist()
    {
        return $this->belongsTo(User::class, 'specialist_id');
    }

    public function patients()
    {
        return $this->belongsTo(User::class, 'patient_id');
    }

    public function complaints()
    {
        return $this->belongsTo(Complaint::class, 'complaint_id');
    }
}

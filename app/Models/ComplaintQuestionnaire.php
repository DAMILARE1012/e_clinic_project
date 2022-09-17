<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Questionnaire;

class ComplaintQuestionnaire extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function question($id)
    {
        return Questionnaire::where('id', $id)->get();
        // return $this->belongsTo(Questionnaire::class);
    }
}

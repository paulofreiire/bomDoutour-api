<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $table = 'consultations';

    protected $fillable = [
        'text'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}

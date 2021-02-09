<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $table = 'patients';

    protected $fillable = [
        'name',
        'gender',
        'dateBirt',
        'document'
    ];

    public function consultation()
    {
        return $this->hasMany(Consultation::class, 'patient_id', 'id');
    }
}

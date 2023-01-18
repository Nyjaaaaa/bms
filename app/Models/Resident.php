<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;

    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'birthdate',
        'birthplace',
        'age',
        'sex',
        'address',
        'contact',
        'civil_status',
        'blood_type',
        'occupation',
        'religion',
        'nationality',
    ];

    public function users(){
        
        return $this->belongsTo(User::class);
    }
}

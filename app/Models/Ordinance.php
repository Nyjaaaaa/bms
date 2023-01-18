<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordinance extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'introduced_by',
        'description',
        'date_enacted',
        'approved_by',
    ];

    public function users(){
        
        return $this->belongsTo(User::class);
    }
}

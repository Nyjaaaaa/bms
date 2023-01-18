<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Official extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'last_name',
        'first_name',
        'middle_name',
        'address',
        'contact',
        'term_start',
        'term_end',
        'status',
    ];

    public function users(){
        
        return $this->belongsTo(User::class);
    }
}

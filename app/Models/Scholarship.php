<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Scholarship extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'provider',
        'amount_monthly',
        'requirements',
        'start_period',
        'end_period',
        'deadline',
        'quota',
        'description',
        'status'
    ];

    public function applications()
    {
        return $this->hasMany(
            ScholarshipApplication::class
        );
    }
}
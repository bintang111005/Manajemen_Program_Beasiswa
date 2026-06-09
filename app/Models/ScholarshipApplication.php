<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ScholarshipApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'scholarship_id',
        'user_id',
        'nim',
        'major',
        'semester',
        'gpa',
        'family_income',
        'motivation_letter',
        'documents',
        'status',
        'reviewed_at'
    ];

    protected $casts = [
        'reviewed_at' => 'datetime',
    ];

    public function scholarship()
    {
        return $this->belongsTo(
            Scholarship::class
        );
    }

    public function user()
    {
        return $this->belongsTo(
            User::class
        );
    }
}
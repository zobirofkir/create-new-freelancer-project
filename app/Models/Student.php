<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'date_of_birth',
        'email',
        // Add more columns here as needed
    ];

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}

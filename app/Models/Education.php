<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = 'educations'; // এখানে 'educations' ঠিকমতো দিন

    protected $fillable = [
        'user_id',
        'type',
        'name',
        'institute',
        'enrolled_year',
        'passing_year',
        'grade'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

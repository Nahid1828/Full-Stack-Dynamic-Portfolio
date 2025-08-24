<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'user_id', 'name', 'description', 'github_url', 'demo_url',
        'images', 'type', 'reference', 'tools', 'keywords', 'status',
    ];

    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

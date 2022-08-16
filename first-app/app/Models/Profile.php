<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['title', 'body', 'username', 'user_id', 'image', 'slug', 'headerImage'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

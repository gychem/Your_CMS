<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    public $fillable = ['name', 'slug', 'body', 'created_by', 'last_updated_by'];
}

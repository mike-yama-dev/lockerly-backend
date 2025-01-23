<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserCollection extends Model
{
    use HasFactory, Searchable;
    protected $table = 'user_collections';
    protected $guarded = [];
}

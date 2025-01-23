<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Card extends Model
{
    use Searchable, HasFactory;
    protected $table = 'cards';
    protected $guarded = [];
}

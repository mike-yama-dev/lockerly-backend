<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rarity extends Model
{
    use HasFactory, Searchable;
    protected $table = 'rarities';
    protected $guarded = [];}
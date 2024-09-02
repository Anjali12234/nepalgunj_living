<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory, SoftDeletes
    ;
    protected $fillable = [
        'model_type',
        'model_id',
        'menu_id',
        'title',
        'title_en',
        'position',
        'status',
        'type',
        'slug',
    ];

}

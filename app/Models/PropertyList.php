<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyList extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = [
        'sub_category_id',
        'title',
        'refrence_no',
        'update_dates',
        'rate',
        'property_owner',
        'phone_no',
        'whats_app',
        'email',
        'description',
        'slug',
        'is_rent',
        'location',
        'position',
    ];

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title_en'
            ]
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($propertyList) {
            $propertyList->position = static::max('position') + 1;
        });
    }
}

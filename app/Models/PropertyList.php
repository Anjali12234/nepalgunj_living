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
        'registered_user_id',
        'sub_category_id',
        'title',
        'refrence_no',
        'update_dates',
        'rate',
        'description',
        'slug',
        'location',
        'position',
        'is_rent',
        'bed_room',
        'bathroom',
        'internet',
        'parking',
        'area',
        'kitchen_type',
        'deposit',
        'features',
        'status',
    ];

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function registeredUser()
    {
        return $this->belongsTo(RegisteredUser::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
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

    public function files()
    {
        return $this->morphMany(File::class, 'model');
    }
}

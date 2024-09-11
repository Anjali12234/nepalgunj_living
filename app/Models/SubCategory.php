<?php

namespace App\Models;

use App\Enums\CategoryTypeEnum;
use Attribute;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class SubCategory extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = [
        'title_en',
        'title_ne',
        'slug',
        'image',
        'position',
        'status',
        'category_type',
        'category_id'
    ];

    protected $casts=[
       'category_type' => CategoryTypeEnum::class
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function propertyLists()
    {
        return $this->hasMany(PropertyList::class);
    }
    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
    public function hospitals()
    {
        return $this->hasMany(Hospital::class);
    }

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('subCategory', 'public') : null,
        );
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

        static::creating(function ($subCategory) {
            $subCategory->position = static::max('position') + 1;
        });
    }
}

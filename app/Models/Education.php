<?php

namespace App\Models;

use App\HasReferenceNumber;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Education extends Model
{
    use HasFactory, SoftDeletes, Sluggable;
    use HasReferenceNumber;

    protected $fillable = [
        'registered_user_id',
        'education_category_id',
        'status',
        'slug',
        'position',
        'reference_no',
        'name',
        'details',
        'youtube_link',
        'website_link',
        'address',
        'map_url',
        'twitter_url',
        'facebook_url',
        'whats_app_no',
        'contact_number',
    ];

    public function educationCategory()
    {
        return $this->belongsTo(EducationCategory::class);
    }

    public function registeredUser()
    {
        return $this->belongsTo(RegisteredUser::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($education) {
            $education->position = static::max('position') + 1;
        });
    }


    // public function generateReferenceNumber()
    // {
    //     $randomNumber = rand(1000, 9999);
    //     return '' . $randomNumber ;
    // }


}

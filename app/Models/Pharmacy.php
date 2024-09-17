<?php

namespace App\Models;

use App\HasReferenceNumber;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pharmacy extends Model
{
    use HasFactory, SoftDeletes, Sluggable;
    use HasReferenceNumber;

    protected $fillable = [
        'sub_category_id',
        'registered_user_id',
        'pharmacy_name',
        'reference_no',
        'slug',
        'position',
        'opening_hours',
        'details',
        'youtube_link',
        'pharmacy_address',
        'map_url',
        'twitter_url',
        'facebook_url',
        'contact_number',
        'type',
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
                'source' => 'pharmacy_name'
            ]
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($pharmacy) {
            $pharmacy->position = static::max('position') + 1;
        });
    }

    public function files()
    {
        return $this->morphMany(File::class, 'model');
    }

    public function generateReferenceNumber()
    {
        $randomNumber = rand(1000, 9999);
        return 'PHA' . $randomNumber ;
    }

}

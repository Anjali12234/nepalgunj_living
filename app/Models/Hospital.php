<?php

namespace App\Models;

use App\HasReferenceNumber;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hospital extends Model
{
    use HasFactory, SoftDeletes, Sluggable;
    use HasReferenceNumber;

    protected $fillable = [
        'sub_category_id',
        'registered_user_id',
        'hospital_name',
        'reference_no',
        'slug',
        'position',
        'o_p_d_schedule',
        'details',
        'youtube_link',
        'hospital_address',
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
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'hospital_name'
            ]
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($hospital) {
            $hospital->position = static::max('position') + 1;
        });
    }

    public function files()
    {
        return $this->morphMany(File::class, 'model');
    }

    public function generateReferenceNumber()
    {
        $randomNumber = rand(1000, 9999);
        return 'HEA-' . $randomNumber . '-' . now()->format('Ymd');
    }

}

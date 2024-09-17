<?php

namespace App\Models;

use App\HasReferenceNumber;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Doctor extends Model
{
    use HasFactory, SoftDeletes, Sluggable;
    use HasReferenceNumber;

    protected $fillable = [
        'registered_user_id',
        'sub_category_id',
        'status',
        'slug',
        'position',
        'reference_no',
        'doctor_name',
        'department',
        'n_m_c_no',
        'qualification',
        'o_p_d_schedule',
        'details',
        'youtube_link',
        'clinic_address',
        'map_url',
        'twitter_url',
        'facebook_url',
        'type',
        'whats_app_no',
        'phone_number',
        'image'
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
                'source' => 'doctor_name'
            ]
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($doctor) {
            $doctor->position = static::max('position') + 1;
        });
    }

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('doctors', 'public') : null,
        );
    }

    public function generateReferenceNumber()
    {
        $randomNumber = rand(1000, 9999);
        return 'DOC' . $randomNumber ;
    }

}

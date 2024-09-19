<?php

namespace App\Models;

use App\HasReferenceNumber;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = [
        'news_category_id',
        'title',
        'slug',
        'position',
        'details',
        'status',
    ];

    public function newsCategory()
    {
        return $this->belongsTo(NewsCategory::class);
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

        static::creating(function ($news) {
            $news->position = static::max('position') + 1;
        });
    }

    public function files()
    {
        return $this->morphMany(File::class, 'model');
    }



}

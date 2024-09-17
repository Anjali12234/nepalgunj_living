<?php

namespace App;
use Illuminate\Support\Str;

trait HasReferenceNumber
{
    protected static function bootHasReferenceNumber()
    {
        static::creating(function ($model) {
            $model->reference_no = $model->generateReferenceNumber();
        });
    }


    public function generateReferenceNumber()
    {
        $title = strtoupper(Str::substr($this->title, 0, 3));
        $date = now()->format('ym');
        $referenceNumber = $title . $date;
        return Str::limit($referenceNumber, 10, '');
    }


}

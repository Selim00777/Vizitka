<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageBusinessCard extends Model
{
    use HasFactory;

    protected $table = 'image_business_cards';

    public function businessCard()
    {
        return $this->belongsTo(BusinessCard::class);
    }
}

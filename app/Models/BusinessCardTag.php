<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class BusinessCardTag extends Pivot
{
    use HasFactory;

    protected $fillable = [
        'business_card_id',
        'tag_id',
    ];
}

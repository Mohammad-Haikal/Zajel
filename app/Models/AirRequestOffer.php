<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirRequestOffer extends Model
{
    use HasFactory;
    protected $table = 'air_request_offer';

    protected $fillable = [
        'air_request_id',
        'company',
        'price',
        'total_price',
        'date_of_departure',
        'date_of_destination'
    ];

    public function airRequest()
    {
        return $this->belongsTo(AirRequest::class, 'air_request_id');
    }
}

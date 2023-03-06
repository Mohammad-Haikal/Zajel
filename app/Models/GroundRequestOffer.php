<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroundRequestOffer extends Model
{
    use HasFactory;
    protected $table = 'ground_request_offer';

    // protected $fillable = [
    //     'air_request_id',
    //     'company',
    //     'price',
    //     'total_price',
    //     'date_of_departure',
    //     'date_of_destination'
    // ];

    public function groundRequest()
    {
        return $this->belongsTo(GroundRequest::class, 'ground_request_id');
    }
}

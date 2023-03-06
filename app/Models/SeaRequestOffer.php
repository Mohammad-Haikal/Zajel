<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeaRequestOffer extends Model
{
    use HasFactory;
    protected $table = 'sea_request_offer';

    protected $fillable = [
        'sea_request_id',
        'company',
        'price',
        'total_price',
        'date_of_loading',
        'date_of_discharge'
    ];

    public function seaRequest()
    {
        return $this->belongsTo(SeaRequest::class, 'sea_request_id');
    }
}

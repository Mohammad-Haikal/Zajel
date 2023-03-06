<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeaRequest extends Model
{
    use HasFactory;
    protected $table = 'sea_request';

    protected $fillable = [
        'user_id',
        'shipper',
        'consignee',
        'notify_address',
        'carrier_reference',
        'swb_no',
        'vessel',
        'voyage_no',
        'port_of_loading',
        'port_of_discharge',
        'nos',
        'number_of_package',
        'gross_weight',
        'measurement',
        'date_of_shipment',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function offers()
    {
        return $this->hasMany(SeaRequestOffer::class, 'sea_request_id');
    }
}

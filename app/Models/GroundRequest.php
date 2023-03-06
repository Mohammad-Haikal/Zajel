<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroundRequest extends Model
{
    use HasFactory;
    protected $table = 'ground_request';

    // protected $fillable = [
    //     'user_id',
    //     'shipper_name',
    //     'shipper_address',
    //     'consignee_name',
    //     'consignee_address',
    //     'agent_name',
    //     'agent_city',
    //     'airport_of_departure',
    //     'airport_of_destination',
    //     'number_of_pieces',
    //     'number_of_package',
    //     'gross_weight',
    //     'date_of_shipment'
    //     'status'
    // ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function offers()
    {
        return $this->hasMany(GroundRequestOffer::class, 'ground_request_id');
    }
}

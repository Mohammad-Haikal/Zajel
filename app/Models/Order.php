<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order';


    protected $fillable = [
        'user_id',
        'shipment_id',
        'state'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function shipment()
    {
        return $this->belongsTo(Shipment::class, 'shipment_id');
    }
}

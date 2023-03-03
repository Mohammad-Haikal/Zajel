<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $table = 'shipment';


    protected $fillable = [
        'user_id',
        'contact_number',
        'user_name',
        'company_name',
        'company_email',
        'company_address',
        'from',
        'to',
        'receive_address',
        'city',
        'material',
        'weight',
        'size',
        'takingoff',
        'arrival',
        'method',
        'price',
        'image',
        'product_description',
        'is_ordered'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function order()
    {
        return $this->hasOne(Order::class, 'shipment_id');
    }
}

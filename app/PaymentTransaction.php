<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentTransaction extends Model
{
    protected $table = 'payment_transaction';

    protected $fillable = array(
        'user_id',
        'amount',
        'payer_id',
        'paypal_payment_id',
        'state',
        'create_time',
        'currency',
        'timestamp',
        'token',
    );
}

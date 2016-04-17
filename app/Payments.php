<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $table = 'payments';

    protected $fillable = array(
        'template_users_id',
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

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateUser extends Model
{
    //

    protected $fillable = array('content', 'user_id','template_id','changed');

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function template()
    {
        return $this->belongsTo('App\Template');
    }

    public function getPayment()
    {
        return $this->hasOne('App\Payments','template_users_id');

    }
}

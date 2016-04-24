<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateUser extends Model
{
    //

    protected $fillable = array('content', 'user_id','template_id');

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function template()
    {
        return $this->belongsTo('App\Template');
    }
}

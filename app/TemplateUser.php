<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateUser extends Model
{
    //

    protected $fillable = array('content', 'user_id','template_id');
}

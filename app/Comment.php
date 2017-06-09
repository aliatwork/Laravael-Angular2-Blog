<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    protected $visible = ['id', 'name', 'email', 'text'];

}

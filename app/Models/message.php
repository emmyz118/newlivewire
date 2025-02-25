<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    //

    protected $fillable=[
        "client_name",
        "client_tel",
        "address",
        "message"
    ];
}

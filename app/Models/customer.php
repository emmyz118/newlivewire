<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class customer extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    //
    protected $fillable = [
        'customer_name',
        'email',
        'address',
    ];
}

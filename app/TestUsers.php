<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestUsers extends Model
{
    protected $fillable = ['name', 'email', 'password', 'token', 'created_at', 'updated_at'];
}

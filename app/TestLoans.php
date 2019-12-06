<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestLoans extends Model
{
    protected $fillable = ['loan_id','start_date','due','city','end_date','created_at','updated_at'];
}

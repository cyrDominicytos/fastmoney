<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Payment extends Model
{
    protected $fillable = [ 'txid','addr','value','status'];

}

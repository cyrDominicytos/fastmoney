<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Invoice extends Model
{
    protected $fillable = [ 'code','address','price','status','offre','ip'];


}

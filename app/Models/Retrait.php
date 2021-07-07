<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Retrait extends Model
{
    protected $fillable = [ 'id_user','montant','txs_id','txs'];


}

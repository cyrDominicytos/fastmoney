<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Gain extends Model
{
    protected $fillable = [ 'montant','id_user','id_depot','type'];


}

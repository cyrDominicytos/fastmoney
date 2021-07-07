<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Offre extends Model
{
    protected $fillable = [ 'montant','pourcentage','statut'];


}

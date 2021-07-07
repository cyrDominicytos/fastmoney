<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Depot extends Model
{
    protected $fillable = [ 'id_user','id_offre','statut','dernier_paye','montant','pourcentage'];

}

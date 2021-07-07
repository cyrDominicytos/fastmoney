<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class BilanGain extends Model
{
    protected $fillable = [ 'solde','id_user','id_depot','type','pourcentage','montant_depot','statut','dernier_paye','montant_gain','pourcentage_atteint'];


}

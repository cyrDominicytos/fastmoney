<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Parrainage extends Model
{
    protected $fillable = [ 'id_user_parrain','id_user_filleul'];

    public function get_fieull_by_id($id) {
         return DB::table('parrainages')
         ->join('users', 'users.id', '=', 'parrainages.id_user_filleul')
         ->select(
         'users.id',
         'users.name',
         'users.email',
         'users.username',
         'users.pays',
         'users.created_at',
         
     )    ->where('parrainages.id_user_parrain', $id)
          ->get();
    }



}

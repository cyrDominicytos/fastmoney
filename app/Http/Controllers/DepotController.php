<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Offre;
use App\Models\User;
use App\Models\Gain;
use App\Models\Parametre;
use App\Models\Retrait;
use App\Models\Parrainage;
use App\Models\Depot;

class DepotController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $modelDepot = null;
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('web');
        $this->modelDepot = new Depot();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function depot()
    {
        $data = [];
        $depot = Depot::all();
        $data['depot'] = $this->modelDepot->where('id_user', Auth::user()->id)->get();
        return view('dashboard/depot',$data);
    }

    public function regle_offre(Request $request)
    {
        $data = [];
        $offre = Offre::find($request->id);
        $data['offre'] = $offre;
        return view('dashboard/regle_offre',  $data);
    }
    public function retrait()
    {
        
        return view('dashboard/retrait');
    }
}

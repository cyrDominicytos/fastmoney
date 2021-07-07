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




class DashController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $modelRetrait = null;
    protected $modelParrain = null;

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('web');
        $this->modelRetrait = new Retrait();
        $this->modelParrain = new Parrainage();

      

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function buy()
    {
        
        return view('dashboard/default_dash');
    } 

    public function myProfil()
    {
        return view('dashboard/profil');
       // return redirect('/dashboard')->with('warning', "Accès non autorisé !");
        
    }
    public function retirer()
    {
       if(Auth::user()->solde < 30)
            return redirect()->route('retrait')->with('error', "Le minimum de retrait est 30$!");
        return view('dashboard/retirer');
        
    }

   public function submit_retirer(Request $request)
    {
        $update = false;
        if(Auth::user()->portefeuille == "" || Auth::user()->portefeuille == null)
            return redirect()->route('retirer')->with('error2', "Veuillez mettre à jour votre addresse de reception!");

        if($request->input('montant') > Auth::user()->solde )
            return redirect()->route('retirer')->with('error2', "Votre solde est insuffusant pour retirer ce montant!");
/*
        //Okay     
        $guid = "5c1c88be-4859-41bc-9af5-efd7d16feafe" ; 
        $password = "Gold@2021" ; 

        // Create a new instance of Transaction object
        $tx = new Transaction();

        // Tx inputs
        $input = new \BlockCypher\Api\Input();
        $input->addAddress("C5vqMGme4FThKnCY44gx1PLgWr86uxRbDm");
        $tx->addInput($input);
        // Tx outputs
        $output = new \BlockCypher\Api\Output();
        $output->addAddress("C4MYFr4EAdqEeUKxTnPUF3d3whWcPMz1Fi");
        $tx->addOutput($output);
        // Tx amount
        $output->setValue(1000); // Satoshis

        $txClient = new TXClient($apiContext);
        $txSkeleton = $txClient->create($tx);

        dd($txSkeleton);
*/


  //
  $WalletID =$GLOBALS['wallet_id'];
  $amount = usd_satoshi($request->input('montant'));
  if(usd_satoshi(wallet_balance($WalletID)) >= ceil($amount)){
      $json_data =
      array ( 
      'transfer_key' => $GLOBALS['transfer_key'], 
      'destinations' => array (        
          array('address' => Auth::user()->portefeuille, 'amount' => ceil($amount)),
      ),
      'fee' => "normal",
      'subtract-fee-from-amount' => "true"
      );

      $api_endpoint = "https://apirone.com/api/v2/wallets/" .
        $WalletID . "/transfer";
      $curl = curl_init($api_endpoint);
      curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
      curl_setopt($curl, CURLOPT_POST, 1);
      curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($json_data));
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      $response = curl_exec($curl);
      $http_status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
      curl_close($curl);
     
      if ($http_status_code==200)
      {
        $decoded = json_decode($response, true);
        //$fee_rate = $decoded["fee-rate"];
        $amount_sent = $decoded["amount"];
        $txs =  $decoded["txs"][0];
        $id =  $decoded["id"];
        $retrait = $amount_sent;
        Retrait::create(['id_user'=>Auth::user()->id,'montant'=>$retrait,'txs_id'=>$id,'txs'=>$txs]);
        return redirect()->route('retrait')->with('succes', " Retrait éffectué avec succès !");
      } else {
        return redirect()->route('retirer')->with('error2', "Système temporairement inacessible, Veuillez réessayer plus tard, merci!");
      }

    }else{
      return redirect()->route('retirer')->with('error2', "Système temporairement inacessible, Veuillez réessayer plus tard, merci! : code: 0xNaN");
    }
 


    }


     public function submit_retirer2(Request $request)
    {
        $update = false;
        if(Auth::user()->portefeuille == "" || Auth::user()->portefeuille == null)
            return redirect()->route('retirer')->with('error2', "Veuillez mettre à jour votre addresse de reception!");

        if($request->input('montant') > Auth::user()->solde-5 )
            return redirect()->route('retirer')->with('error2', "Votre solde est insuffusant pour retirer ce montant!");

        //Okay     
        $guid = "5c1c88be-4859-41bc-9af5-efd7d16feafe" ; 
        $password = "Gold@2021" ; 

        //Amount checking
        //http: // localhost: 3000 / marchand / $ guid / balance? password = $ main_password
        $json_url = "https://blockchain.info/merchant/$guid/balance?password=$password" ; 
        $json_data = file_get_contents ($json_url);
        $json_feed = json_decode ($json_data);
        dd($json_feed);
        //end 

        // Convert price to satoshi for check
        $amount = USDtoBTC($request->input('montant'));
        $amount = $amount/100000000; 
        $address = Auth::user()->portefeuille ; 
        
        $json_url = "https://blockchain.info/merchant/$guid/payment?password=$password&to=$address&amount=$amount" ; 
        dd( $json_url);
        $json_data = file_get_contents ($json_url);

        $json_feed = json_decode ($json_data);

        $message = $json_feed->message ; 
        $txid = $json_feed->tx_hash ;

        echo $message;
        echo "OK";
        dd($txid);


    }

      

    public function profil_update(Request $request)
    {
        $update = false;
        if(!username_exist(trim($request->input('username'))))
            return redirect()->route('myProfil')->with('error2', "Le nom d'utilisataur ".$request->input('myProfil')." n'est pas le votre !");
       

        if(str_not_null($request->input('password_current')))
        {
            $user = username_exist(trim($request->input('username')));
             if($user){
                if(strcmp($user->password, bcrypt($request->input('password'))) == 0){
                  if(strcmp($request->input('password'), $request->input('password_confirmation'))== 0)
                    $data['password'] = bcrypt($request->input('password'));
                  else
                    return redirect()->route('myProfil')->with('error2', "Les deux mots de passe ne correspondent pas !");
                }else{
                   return redirect()->route('myProfil')->with('error2', "L'anncien mot de passe n'est pas correct !");                    
                }
             }   

            $data['portefeuille'] = trim($request->input('btc_address'));
            $update = true;
        }

        if(str_not_null($request->input('btc_address'))){
            $data['portefeuille'] = trim($request->input('btc_address'));
            $update = true;
        }

        if(str_not_null($request->input('name'))){
            $data['name'] = trim($request->input('name'));
            $update = true;
        }

        if($update){
            User::where('username',trim($request->input('username')))->update($data); 
            return redirect()->route('dashboard')->with('success', 'Vous informations personnelles ont été mis à jour avec succès !');      
        }else{
             return redirect()->route('myProfil')->with('success2', "Aucune informations n'a changée !");
        }

  }

    public function indication()
    {
        $data = [];
        $data['liste'] =  $this->modelParrain->get_fieull_by_id(Auth::user()->id);               
        return view('dashboard/indication', $data);
    }
    public function retrait()
    {
        $data = [];
        $data['retrait'] = $this->modelRetrait->where('id_user', Auth::user()->id)->get();
        return view('dashboard/retrait', $data);
    }
}

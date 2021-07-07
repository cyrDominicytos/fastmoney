<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

use App\Models\Offre;
use App\Models\User;
use App\Models\Gain;
use App\Models\Parametre;
use App\Models\Retrait;
use App\Models\Parrainage;
use App\Models\Depot;
use App\Models\Invoice;
use App\Models\Order;
use App\Models\Payment;

class OffreController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('web');


    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function ckecked($data)
    {
        //dd($data);
          $secretlocal = "Crypto2021Gold"; // Code in the callback, make sure this matches to what youve set
         // dd($data);
        // Get all these values
        $status = 0;
        $txid = $_GET['txid'];
        $value = $_GET['value'];
        $status = $_GET['status'];
        $addr = $_GET['addr'];
        $secret = $_GET['secret'];

        // Check all are set
        if(empty($txid) || empty($value) || empty($addr) || empty($secret)){

            exit();
        }

        if($secret != $secretlocal){
            exit();
        }

        Payment::create(['txid'=>$txid,'value'=>$value,'addr'=>$addr,'status'=>$status]);
        // Get invoice price
        $invoice = Invoice::firstWhere('address',$addr);
        if($invoice)
        {
             // Convert price to satoshi for check
            $price = USDtoBTC($invoice->price);
            $price = $price *100000000;

            // Expired
            if($status < 0){
                exit();
            }

            if($value >= round($price))
            {

            // Update invoice status
            Invoice::where('code', $code)->update(['status'=>$status]);
            //updateInvoiceStatus($code, $status);
                if($status == 2)
                {
                    // Correct amount paid and fully confirmed
                    // Do whatever you want here once payment is correct
                    //$invoice = getInvoice($addr);
                    Order::create(['invoice'=>$invoice->code, 'ip'=>$invoice->ip]);
                }
            }else 
            {
                // Buyer hasnt paid enough
               // updateInvoiceStatus($code, -2);
                Invoice::where('code', $code)->update(['status'=>-2]);

            }
        
    }
}




public function check3(Request $request)
{
    $secretlocal = $GLOBALS['secret']; // Code in the callback, make sure this matches to what 
    // Get all these values
    $status = 0;
    
    $txid =  Input::get('txid');
    $value = Input::get('txid');
    $status = Input::get('txid');
    $addr =Input::get('txid');
    $secret = Input::get('txid');
    // Check all are set
    if(empty($txid) || empty($value) || empty($addr) || empty($secret)){

        exit();
    }

    if($secret != $secretlocal){
        exit();
    }
          
}
public function check(Request $request)
{
    $secret = $_GET["secret"];
    dd($secret);
    $secretlocal = $GLOBALS['secret']; // Code in the callback, make sure this matches to what youve set
    $status = 0;
    $txid =  $request->input('txid');
    $value = $request->input('value');
    $status = $request->input('status');
    $addr =$request->input('addr');
    //echo $secret;
    //dd($request);
    // Check all are set
    if(empty($txid) || empty($value) || empty($addr) || empty($secret)){

        exit();
    }

    if($secret != $secretlocal){
        exit();
    } 

    Payment::create(['txid'=>$txid,'value'=>$value,'addr'=>$addr,'status'=>$status]); 
    $invoice = Invoice::firstWhere('address',$addr);
    if($invoice){

        // Convert price to satoshi for check
        $price = USDtoBTC($invoice->price);
        $price = $price *100000000;

        // Expired
        if($status < 0){
            exit();
        }

        if($value >= round($price)){
            // Update invoice status
            Invoice::where('address',$invoice->address)->update(['status'=>$status]);
            if($status == 2){
                // Correct amount paid and fully confirmed
                // Do whatever you want here once payment is correct
                Order::create(['invoice'=>$invoice->code,'ip'=>$invoice->ip]);
                createDeposit($invoice);
            }
        }else {
            // Buyer hasnt paid enough
            Invoice::where('address',$invoice->address)->update(['status'=>-2]);
        }

    }   
    
    }

    public function callback(Request $request)
    {
    $secretlocal = $GLOBALS['secret']; // Code in the callback, make sure this matches to what youve set
    $status = 0;
    /*$txid =  $request->input('txid');
    $value = $request->input('value');
    $status = $request->input('status');
    $addr =$request->input('addr');*/

    $addr = $_GET["input_address"];
    $secret = $_GET["secret"];
    $input_transaction_hash = $_GET["input_transaction_hash"];
    $transaction_hash = $_GET["transaction_hash"];
    $value_in_satoshi = $_GET["value"];
    $value_in_btc = $value_in_satoshi / 100000000;
    $status = $_GET["confirmations"];
 
    //echo $secret;
    //dd($request);
    // Check all are set
    if(empty($txid) || empty($value) || empty($addr) || empty($secret)){

        exit();
    }

    if($secret != $secretlocal){
        exit();
    } 

    Payment::create(['txid'=>$transaction_hash,'value'=>$value_in_btc,'addr'=>$addr,'status'=>$status]); 
    $invoice = Invoice::firstWhere('address',$addr);
    if($invoice){

        // Convert price to satoshi for check
        $price = USDtoBTC($invoice->price);
        $price = $price *100000000;

        // Expired
        if($status < 0){
            exit();
        }

        if($value_in_btc >= round($price)){
            // Update invoice status
            Invoice::where('address',$invoice->address)->update(['status'=>$status]);
            if($status >=3 )
            {
                // Correct amount paid and fully confirmed
                // Do whatever you want here once payment is correct
                Order::create(['invoice'=>$invoice->code,'ip'=>$invoice->ip]);
                createDeposit($invoice);
            }
        }else {
            // Buyer hasnt paid enough
            Invoice::where('address',$invoice->address)->update(['status'=>-2]);
        }

    }   
    
    }

    public function offre()
    {
        $data = [];
        $offre = Offre::all();
        $data['offre'] = $offre;
        return view('dashboard/offre',$data);
    }

   
    public function annuler_offre(Request $request)
    {
        //dd($request);
        Invoice::where('code',  $request->code)->delete();   
        return redirect()->route('offre')->with('success', 'Votre commande a été supprimée avec succès !');
    }

    public function regle_offre(Request $request)
    {
        
        $offre = Offre::find($request->id);
        if($request->mon_solde){
            if($offre->montant > Auth::user()->solde)
                    return redirect()->route('offre')->with('warning', 'Votre solde actuel est insuffisant pour effectuer cet achat !');
            $data = [];
            $data['offert'] = $offre;

            return view('dashboard/regle_offre_solde',  $data);              
        }else{

            $data = [];
            $code = createInvoice($offre->id, $offre->montant);
            $data['offre'] = $offre;
            $data['invoice'] = Invoice::firstWhere('code', $code);
            
            return view('dashboard/regle_offre',  $data);  
        }
       
    } 

    public function acheter(Request $request)
    {
        

        if($request->annuler){
            return redirect()->route('offre')->with('success', 'Votre commande a été annulée avec succès !');
        }else{
            $offre = Offre::find($request->id);
            if($offre)
            {
                if($offre->montant > Auth::user()->solde)
                    return redirect()->route('offre')->with('warning', 'Votre solde actuel est insuffisant pour effectuer cet achat !');
                 Depot::create(['id_user'=> Auth::user()->id,'montant'=> $offre->montant,'pourcentage'=> $offre->pourcentage,'statut'=> 0]);
                 User::where('id',Auth::user()->id)->update(['solde'=>Auth::user()->solde - $offre->montant]);
                 return redirect()->route('offre')->with('success', 'Votre achat a été effectué avec succès !'); 
            }else{
                return redirect()->route('offre')->with('error', "Action illégale, vous risquez d'être banni du système !");  
            }
           
        }
       
    }

    public function retrait()
    { 
        return view('dashboard/retrait');
    }
}

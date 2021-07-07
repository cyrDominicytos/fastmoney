
<?php
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Invoice;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Offre;
use App\Models\Depot;
use App\Models\Gain;
use App\Models\BilanGain;
use Carbon\Carbon;




if (!function_exists('getMonthList')) {
    function getMonthList()
{
  return ["01"=>"Janvier", "02"=>"Février","03"=>"Mars", "04"=>"Avril", "05"=>"Mai", "06"=>"Juin", "07"=>"Juillet", "08"=>"Août", "09"=>"Septembre", "10"=>"Octobre","11"=>"Novembre", "12"=>"Décembre"];
}
}

if (!function_exists('formater_date')){
    function formater_date($text)
 {
  $date=date_create($text);
  return  date_format($date,"d-m-Y");
 }
}

if (!function_exists('formater_datetime')) {
    function formater_datetime($text)
 {
  $date=date_create($text);
  return  date_format($date,"d-m-Y à H:i:s");
 }
}

if (!function_exists('str_not_null')) {
    function str_not_null($text)
 {
  return ($text!= null && trim($text) != "")? (true):(false);
 }
}

if (!function_exists('email_exist')) {
    function email_exist($text)
 {
    return User::firstWhere('email',$text);
 }
}

if (!function_exists('username_exist')) {
    function username_exist($text)
 {
    return User::firstWhere('username',$text);
 }
}

if (!function_exists('bct_dollar')) {
    function bct_dollar($text)
 {
  $currency = 'USD';
//get json response
$return = file_get_contents('http://data.mtgox.com/api/1/BTC'.$currency.'/ticker_fast');
//decode it (into an array rather than object [using 'true' parameter])
$info = json_decode($return, true);
//access the dollar value
$value = $info['return']['last_local']['value'];
 }
}












//API BLOCHONO?ID


//online
$GLOBALS['wallet_id'] =  "btc-47eb30e4817da4c74cb7cfa33d104f6c";
$GLOBALS['transfer_key'] =  "BpVaFjGa1k1p47r1xtF09YhMQSWSWLli";
//$GLOBALS['apikey'] =  "1Mq3G1uZw0XYXL02EtP1AcB7rK7G6a3pffaiOiUKSz4";
$GLOBALS['apikey'] =  "Xy1sfDyV6Q6vPEN8zo5VkCt7N16tSffthNydg3h1C08";

$GLOBALS['secret'] =  "Crypto2021Gold";
$GLOBALS['url'] =  "https://www.blockonomics.co/api/";
$GLOBALS['options'] = array( 
        'http' => array(
            'header'  => 'Authorization: Bearer '.$GLOBALS['apikey'],
            'method'  => 'POST',
            'content' => '',
            'ignore_errors' => true
        )   
    );

// Connection info
//$conn = mysqli_connect("localhost", "root", "", "bitcoin"); // enter your info


if (!function_exists('generateRandomString')) 
{
   function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }
}

if (!function_exists('generateAddress')) 
{
  function generateAddress(){
   /* 
    $options = array( 
        'http' => array(
            'header'  => 'Authorization: Bearer '.$GLOBALS['apikey'],
            'method'  => 'POST',
            'content' => '',
            'ignore_errors' => true
        )   
    );  
    
    $context = stream_context_create($GLOBALS['options']);
    $contents = file_get_contents($GLOBALS['url']."new_address", false, $context);
    $object = json_decode($contents);
    //dd( $object );
    // Check if address was generated successfully
    if (isset($object->address)) {
      $address = $object->address;
    } else {
      // Show any possible errors
      $address = $http_response_header[0]."\n".$contents;
    }
    return $address;
    */



    //
      $my_address = "3FShbnYDZmvB8z24sxnXm745e4ptpqczQ7";
     // $my_callback_url = "http://crypto-gold.uno/check/Crypto2021Gold";
    //$my_callback_url = "http://example.com/callback?invoice_id=1234&secret=7j0ap91o99cxj8k9";
      $my_callback_url = "http://crypto-gold.uno/callback?secret=Crypto2021Gold";
      $api_base = "https://apirone.com/api/v1/receive";
     
      $curl = curl_init();
      curl_setopt_array($curl, array(
          CURLOPT_RETURNTRANSFER => 1,
          CURLOPT_URL => $api_base . "?method=create&currency=btc&address=" . $my_address .
        "&callback=" . urlencode($my_callback_url)
      ));

      $response = curl_exec($curl);
      $http_status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
      curl_close($curl);
      if ($http_status_code == 200) {
          $decoded = json_decode($response, true);
          return $decoded["input_address"];
      } else {
          echo "Sorry, an error occurred: " . $response;
      }


    //
  }
   
}


if (!function_exists('createInvoice')) 
{
   function createInvoice($offre, $price)
   {
      $code = generateRandomString(25);
      $address = generateAddress();
      $status = -1;
      $ip = getIp();
      Invoice::create(['code'=> $code,'address'=> $address,'price'=> $price,'status'=> -1,'ip'=> $ip,'offre'=>$offre]);

      return $code;
   }
}

if (!function_exists('getProduct')) 
{
   function getProduct($id){
    global $conn;
    $sql = "SELECT * FROM `products` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        return $row['name'];
    }
  }
}

if (!function_exists('getPrice')) 
{
  function getPrice($id){
    global $conn;
    $sql = "SELECT * FROM `products` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        return $row['price'];
    }
}
   
}

if (!function_exists('getAddress')) 
{
   function getAddress($code){
    global $conn;
    $sql = "SELECT * FROM `invoices` WHERE `code`='$code'";
    $result = mysqli_query($conn, $sql);
    $address = "Error, try again";
    while($row = mysqli_fetch_assoc($result)){
        $address = $row['address'];
    }
    return $address;
}

}

if (!function_exists('getStatus')) 
{
   function getStatus($code){
    global $conn;
    $sql = "SELECT * FROM `invoices` WHERE `code`='$code'";
    $result = mysqli_query($conn, $sql);
    $status = "Error, try again";
    while($row = mysqli_fetch_assoc($result)){
        $status = $row['status'];
    }
    return $status;
}
}

if (!function_exists('getInvoiceProduct')) 
{
   function getInvoiceProduct($code){
    global $conn;
    $sql = "SELECT * FROM `invoices` WHERE `code`='$code'";
    $result = mysqli_query($conn, $sql);
    $product = "Error, try again";
    while($row = mysqli_fetch_assoc($result)){
        $product = $row['product'];
    }
    return $product;
  }
}

if (!function_exists('getInvoicePrice')) 
{
   function getInvoicePrice($code){
    global $conn;
    $sql = "SELECT * FROM `invoices` WHERE `code`='$code'";
    $result = mysqli_query($conn, $sql);
    $price = "Error, try again";
    while($row = mysqli_fetch_assoc($result)){
        $price = $row['price'];
    }
    return $price;
  }

}

if (!function_exists('GetCode')) 
{
   function GetCode($address){
    global $conn;
    $sql = "SELECT * FROM `invoices` WHERE `address`='$address'";
    $result = mysqli_query($conn, $sql);
    $code = "Error, try again";
    while($row = mysqli_fetch_assoc($result)){
        $code = $row['code'];
    }
    return $code;
}

}

if (!function_exists('getDescription')) 
{
   function getDescription($product){
    global $conn;
    $sql = "SELECT * FROM `products` WHERE `id`='$product'";
    $result = mysqli_query($conn, $sql);
    $description = "Error, try again";
    while($row = mysqli_fetch_assoc($result)){
        $description = $row['description'];
    }
    return $description;
}
}

if (!function_exists('updateInvoiceStatus')) 
{
  function updateInvoiceStatus($code, $status){
    global $conn;
    $sql = "UPDATE `invoices` SET `status`='$status' WHERE `code`='$code'";
    mysqli_query($conn, $sql);
  } 
}

if (!function_exists('getBTCPrice')) 
{
   function getBTCPrice($currency){
    $content = file_get_contents("https://www.blockonomics.co/api/price?currency=".$currency);
    $content = json_decode($content);
    $price = $content->price;
    return $price;
  }
}

if (!function_exists('BTCtoUSD')) 
{
  function BTCtoUSD($amount){
    $price = getBTCPrice("USD");
    return $amount * $price;
  }
}

if (!function_exists('USDtoBTC')) 
{
   
  function USDtoBTC($amount){
    $price = getBTCPrice("USD");
    return $amount/$price;
  }
}


if (!function_exists('getInvoice')) 
{
   function getInvoice($addr){
    global $conn;
    $sql = "SELECT * FROM `invoices` WHERE `address`='$addr'";
    $result = mysqli_query($conn, $sql);
    $invoice = "Error, try again";
    while($row = mysqli_fetch_assoc($result)){
        $invoice = $row['code'];
    }
    return $invoice;
  }
}


if (!function_exists('getIp')) 
{
  function getIp(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
  }
  
}


if (!function_exists('createOrder')) 
{
   function createOrder($invoice, $ip){
    global $conn;
    
    $sql = "INSERT INTO `orders` (`invoice`, `ip`) VALUES ('$invoice', '$ip')";
    mysqli_query($conn, $sql);
  }

}

if (!function_exists('getInvoiceIp')) 
{
   function getInvoiceIp($addr){
    global $conn;
    $sql = "SELECT * FROM `invoices` WHERE `address`='$addr'";
    $result = mysqli_query($conn, $sql);
    $ip = "Error, try again";
    while($row = mysqli_fetch_assoc($result)){
        $ip = $row['ip'];
    }
    return $ip;
  }
}











if (!function_exists('createDeposit')) 
{
   function createDeposit($invoice=null) 
   {
     if($invoice)
     {
        $offre = Offre::firstWhere('id', $invoice->offre);
        if($offre)
          Depot::create(['id_user'=> Auth::user()->id,'montant'=> $offre->montant,'pourcentage'=> $offre->pourcentage,'statut'=> 0]);
     }

  }
}

if (!function_exists('checkBenefit')) 
{
   function checkBenefit($user=null) 
   {
     if($user)
     {
        $depot = Depot::where('id_user', $user)->where('statut', 0)->get();
        if($depot) {
          foreach($depot as  $deposit) {
          if(check_purcentage($user, $deposit->id)['pourcentage_atteint'] >=300) die;
             $now = date('d-m-Y H:i:s');
             $start = ($deposit->dernier_paye) ? ($deposit->dernier_paye) : ($deposit->created_at);
             $start=date_create($start);
             $start = date_format($start,"d-m-Y H:i:s");

             $start=date_create($start);
             $now=date_create($now);
             $diff=date_diff($start,$now);
             $rest = $diff->format("%R%a");
             //ADD DATE
              $rest = (int) $rest;
              $dernier_paye = $start;
              
             // $dernier_paye->add(new DateInterval('P'.$rest.'D'));

             //END ADD DATE

              //TESTING
              $to_time = strtotime($start->format('Y-m-d H:i:s'));
              $from_time = strtotime($now->format('Y-m-d H:i:s'));
              $minutes = round(abs($to_time - $from_time) / 60,2);
             
              //TESTING
             // $rest > 0
             if($minutes > 5)
              {
                $nbr = $minutes/5;
                
                //echo  $dernier_paye->format('Y-m-d H:i:s').'<br>';
                //echo  $now->format('Y-m-d H:i:s').'<br>';
                $dernier_paye->add(new DateInterval('PT'.floor($nbr*5).'M'));
                //echo  $dernier_paye->format('Y-m-d H:i:s').'<br>';
                //dd(floor($nbr));
                //$gain = $deposit->montant * $rest * $deposit->pourcentage/100;
                $gain = $deposit->montant * floor($nbr) * $deposit->pourcentage / 100;
                 Gain::create(['id_user'=> Auth::user()->id,'montant'=>$gain ,'id_depot'=> $deposit->id,'type'=> 1]);
                 Depot::where('id_user',$user)->update(['dernier_paye'=>$dernier_paye]);
              }
            
            //dd();
          }
        }
       
     }

  }
}


if (!function_exists('check_purcentage')) {
    function check_purcentage($user, $deposit)
 {
  return  BilanGain::where('id_user',$user)
        ->where('id_depot', $deposit)
        ->first();
 }
}

if (!function_exists('formater_date')) {
    function formater_date($text)
 {
  $date=date_create($text);
  return  date_format($date,"d-m-Y");
 }
}

if (!function_exists('formater_datetime')) {
    function formater_datetime($text)
 {
  $date=date_create($text);
  return  date_format($date,"d-m-Y H:i:s");
 }
}

if (!function_exists('wallet_balance')) {
    function wallet_balance($wallet = "5484e54ec0bb35c95b79d7338399900f")
 {
    
    $data = file_get_contents("https://apirone.com/api/v2/wallets/".$wallet."/balance");
    $respond = json_decode($data,true);
    $total = $respond["total"];
    return  $total;
 }
}

if (!function_exists('usd_satoshi')) {
    function usd_satoshi($usd)
 {
    
   // Convert price to satoshi for check
        $amount = USDtoBTC($usd);
        $amount = $amount*100000000; 
        return $amount;
 }
}


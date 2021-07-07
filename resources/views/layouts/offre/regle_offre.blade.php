


<?php
/*
Payment page

This code is designed to be easily understandable at the expense of speed, 
for large productions this can be done with one sql request, instead of several

*/

// Check code
if(!isset($invoice->code)){
    exit();
}

//$code = mysqli_escape_string($conn, $_GET['code']);
// Get invoice information


// Status translation
$status = $invoice->status;
$statusval = $status;
$info = "";
if($status == 0){
    $status = "<span style='color: orangered' id='status'>PENDING</span>";
    $info = "<p>You payment has been received. Invoice will be marked paid on two blockchain confirmations.</p>";
}else if($status == 1){
    $status = "<span style='color: orangered' id='status'>PENDING</span>";
    $info = "<p>You payment has been received. Invoice will be marked paid on two blockchain confirmations.</p>";
}else if($status == 2){
    $status = "<span style='color: green' id='status'>PAID</span>";
}else if($status == -1){
    $status = "<span style='color: red' id='status'>UNPAID</span>";
}else if($status == -2){
    $status = "<span style='color: red' id='status'>Too little paid, please pay the rest.</span>";
}else {
    $status = "<span style='color: red' id='status'>Error, expired</span>";
}


?>
<div class="row justify-content-center">
    <div class="col-sm-6 mb-3">
        <form method="POST" action="/annuler_offre">
                     @csrf 
                      <input type="text" name="code" hidden="" value="{{$invoice->code}}">
                        <p class="h6 mb-2">
                            <input type="submit" class="btn btn-dark btn-sm" value="Annuler ma commande"/></p>
                        <div class="card shadow-lg">
            <div class="">
                
                <div class="p-t-30 p-b-10 text-center">
                    <?php
                        // QR code generation using google apis
                        $cht = "qr";
                        $chs = "300x300";
                        $chl = $invoice->address;
                        $choe = "UTF-8";

                        $qrcode = "https://chart.googleapis.com/chart?chs=300x300&choe=UTF-8&cht=qr&chl=bitcoin:".$invoice->address."?amount=".round(USDtoBTC($invoice->price), 8);
                        ?>
                        <div class="qr-hold">
                            <img src="<?php echo $qrcode ?>" alt="My QR code" style="width:250px;">
                        </div>

                    <h2 class="text-center p-t-10 "><?php echo round(USDtoBTC($invoice->price), 8); ?> Ƀ</h2>
                </div>
              <p style="display:block;width:100%;">Status: <?php echo $status; ?></p>
            <?php echo $info; ?>
                <div class="bg-dark rounded-bottom card-body text-white">
                                        <p class="opacity-75 text-center">
                           Acheter des</span> lingots d'or {{$offre->montant}}$
                                                Envoyer par l'adresse ou scannez le code QR                    </p>
                    
                    <input type="text" id="address" class="form-control form-control-lg mt-2 mb-2" value="{{$invoice->address}}" readonly>
                    <input type="button" value="COPIE" name="copy" id="copy" class="btn btn-primary btn-block btn-lg my-link-copy mb-2" data-clipboard-target="#address" /> 
                                        <div class="rounded p-3 bg-white-translucent">
                        
                        <p class="font-size-sm mb-0">
                            <span class="text-primary">ATTENTION</span> - S'il vous plaît envoyer Bitcoins avec des frais d'exploitation prioritaire, sinon il peut prendre beaucoup de temps pour confirmer le paiement.                        </p>
                    </div>

                </div>

            </div>
        </div>
        </form>
    </div>
</div>

<div class="row justify-content-center">
    <p class="h6 mb-2">
        Vous avez déjà envoyé le Bitcoin sans le recevoir via la plateforme ??
        <a class="btn btn-success btn-sm" href="mailto:cryptogoldonline001@gmail.com">Notifier</a></p>
</div>

<div class="row justify-content-center">
    <div class="col-sm-6 mb-3">
        <table class="table table-hover">
                <thead>
                                    <tr>
                                        <th>Nom Lingot</th>
                                        <th>Bonus quotidien</th>
                                        <th class="tx-right">Valeur</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    
                                    <td class="tx-nowrap"> Lingot d'or {{$offre->montant}}</td>
                                    <td>Jusqu'à {{$offre->pourcentage}}%</td>
                                    <td class="tx-right">${{$offre->montant}}</td>

                                                                    </tr>
                                </tbody>
            </table>
    </div>
</div>



<script>
        var status = <?php echo $invoice->status; ?>;
        //start copy
        var toCopy  = document.getElementById( 'address' ),
        btnCopy = document.getElementById( 'copy' );

        btnCopy.addEventListener( 'click', function(){
        toCopy.select();
          if ( document.execCommand( 'copy' ) ) {
              var temp = setInterval( function(){
                 btnCopy.style.backgroundColor = "green";
              }, 600 );
            
          } else {
            console.info( 'document.execCommand went wrong…' )
          }
          return false;
        } );
        //end copy
        // Create socket variables
        if(status < 2 && status != -2){
        var addr =  document.getElementById("address").innerHTML;
        var timestamp = Math.floor(Date.now() / 1000)-5;
        var wsuri2 = "wss://www.blockonomics.co/payment/"+ addr+"?timestamp="+timestamp;
        // Create socket and monitor
        var socket = new WebSocket(wsuri2, "protocolOne")
            socket.onmessage = function(event){
                console.log(event.data);
                response = JSON.parse(event.data);
                //Refresh page if payment moved up one status
                alert(response.status);
                if (response.status > status)
                  setTimeout(function(){ window.location=window.location }, 1000);
            }
        }
        
    </script>
<!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
                              
                       
                             
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">



<div class="container">
        <div class="card card-box mb-5">
            <div class="card-header">
                <h5 class="my-3">
                    Listes des Achats              </h5>
            </div>  
            <div class="card-body">
                <div class="table-responsive">

                    <table  class="table table-datatable table-striped table-hover" id="myTable">
                        <thead>
                            <tr>
                                <th>Date Achat</th>
                                <th>Montant Offre</th>
                                <th>Taux d'interêt</th>
                                <th>Validité</th>
                                <th>Dernier paiement</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($depot as $depots)
                            <tr  style="{{($depots->statut!=0)? ('background: rgba(200,10,10,0.2)') : ('background: rgba(10,200,10,0.2)')}}">
                                <td> {{formater_datetime($depots->created_at)}}</td>
                                <td> {{$depots->montant.' $'}}</td>
                                <td> {{$depots->pourcentage}}</td>
                                <td> {{($depots->statut!=0)? ("Expiré") : ("Actif")}}</td>
                                <td> {{formater_datetime($depots->dernier_paye)}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                           <tr>
                                <th>Date depôt</th>
                                <th>Montant Offre</th>
                                <th>Taux d'interêt</th>
                                <th>Validité</th>
                                <th>Dernier paiement</th>
                            </tr>
                        </tfoot>
                        </table>
                </div>
            </div>
        </div>
    </div>


<script>
    // Using `buttons` as an array
$('#myTable').DataTable( {
    buttons: [ 'copy', 'csv', 'excel' ]
} );

    // Using `buttons` as an array
$('#myTable').DataTable( {
    buttons: [ 'copy', 'csv', 'excel' ]
} );


   // var table = $('#myTable').DataTable();
 
//table.buttons( 'output:name', '.export' ).enable();



</script>
 <script type="text/javascript">
        
        
        setInterval(function() {
          window.location.reload();
        }, 30000);
    </script>
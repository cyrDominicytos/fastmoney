<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">



<div class="container">
        <div class="card card-box mb-5">
            <div class="card-header">
                <h5 class="my-3">
                    Listes des retraits              </h5>
            </div>  
            <div class="card-body">
                <div class="table-responsive">

                    <table  class="table table-datatable table-striped table-hover" id="myTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date retrait</th>
                                <th>Montant</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        @foreach($retrait as $retraits)
                            <tr>
                                <td>{{$i++}}</td>
                                <td> {{formater_datetime($retraits->created_at)}}</td>
                                <td> {{$retraits->montant.' $'}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Date retrait</th>
                                <th>Montant</th>
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

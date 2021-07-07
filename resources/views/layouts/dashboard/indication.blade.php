<div class="row">
    <div class="col-md-12">
        <div class="card card-box mb-5">
        	<div class="card-header">
                <h5 class="my-3">
                   Liste Fieulls               </h5>
        	</div>	
            <div class="card-body">
                <div class="table-responsive">
    				<table  class="table table-datatable table-striped table-hover" id="dataTableBuilder">
                        <thead>
                            <tr>
                                <th  >Date Parrainage</th>
                                <th  title="Nom">Nom</th>
                                <th  title="Nom d&#039;utilisateur">Nom d'utilisateur</th>
                                <th  title="Pays">Pays</th>                              
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($liste as $list)
                            <tr>
                                <td> {{formater_datetime($list->created_at)}}</td>
                                <td> {{$list->name}}</td>
                                <td> {{$list->username}}</td>
                                <td> {{$list->pays}}</td>                              
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                             <tr>
                                <th  >Date Parrainage</th>
                                <th  title="Nom">Nom</th>
                                <th  title="Nom d&#039;utilisateur">Nom d'utilisateur</th>
                                <th  title="Pays">Pays</th>                              
                            </tr>
                        </tfoot>
                    </table>
    			</div>
            </div>
        </div>
    </div>
</div>



 <script type="text/javascript">
        
        
        setInterval(function() {
          window.location.reload();
        }, 30000);
    </script>
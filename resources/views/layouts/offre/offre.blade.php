<div class="row">
  <div class="col-sm-12">
    <div class="card mb-5">
      <div class="card-header">
          <h5 class="my-3">
              Choisissez, payer et obtenir votre Lingot d'or          </h5>
      </div>
      <div class="card-body">
          <div class="row align-items-center justify-content-center">
               @foreach($offre as $offert)
              <!-- Start Plan -->
                        
              <div class="col-lg-4 col-md-4">
                <div class="card m-b-30">
                  <div class="card-body">
                    <form method="POST" action="/regle_offre">
                     @csrf 
                      <input type="number" name="id" hidden="" value="{{$offert->id}}">
                      <div class="text-center">
                          <div>
                              <img src="{{ asset('/assets2/images/gold6.png') }}" class="img-fluid" style="width: 100px;" alt="Lingot d'or 25" title="Lingot d'or 25">
                          </div>
                          <h3 class="p-t-10 searchBy-name">Lingot d'or {{$offert->montant.' $'}}</h3>
                      </div>
                      <div class="text-muted text-center m-b-10">
                          Gain du parrain <a class="btn btn-sm btn-white">+ {{$offert->pourcentage.' $'}}</a>

                      </div>
                      <div class="row text-center p-b-10 m-t-50">
                          <div class="col">
                              <a href="#">
                                  <div class="text-overline">Gains</div>
                                  <h3 class="mdi mdi-account-group"></h3>
                                  <div class="text-overline">Chaque 24h</div>

                              </a>
                          </div>
                          <div class="col">
                              <a href="#">
                                  <div class="text-overline">BONUS QUOTIDIEN</div>
                                  <h3 class="mdi mdi-calendar-multiple-check"></h3>
                                  <div class="text-overline">Jusqu'à {{$offert->pourcentage.' %'}}</div>

                              </a>

                          </div>
                      </div>

                      <div class="row text-center">

                        <div class="col-sm-12">
                          <div class="card bg-warning">
                          <h2 class="text-white mt-2">
                            {{$offert->montant.' $'}}
                          </h2>
                          </div>

                          <input type="submit" name="offert" class="btn btn-lg btn-block btn-primary mt-2" value="Acheter avec BTC" >
                          <input type="submit" name="mon_solde" class="btn btn-lg btn-block btn-success mt-33" value="Utiliser mon solde" >
                          
                        </div>
                      </div>
                       </form>
                  </div>
              </div>
            </div>
           
            <!-- End Plan -->
               @endforeach
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
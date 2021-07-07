<div class="row">
  <div class="col-sm-12">
    <div class="card mb-5">
      <div class="card-header">
          <h5 class="my-3 text-center">Confirmez l'achat de votre Lingot d'or</h5>
      </div>
      <div class="card-body">
          <div class="row align-items-center justify-content-center">
              <!-- Start Plan -->
                        
              <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 ">
                <div class="card m-b-30">
                  <div class="card-body">
                    <form method="POST" action="/acheter">
                     @csrf 
                      <input type="number" name="id" hidden="" value="{{$offert->id}}">
                      <div class="text-center">
                          <div>
                              <img src="{{ asset('/assets2/images/gold6.png') }}" class="img-fluid" style="width: 100px;" alt="Lingot d'or 25" title="Achat de lingot d'or  pour 25$">
                          </div>
                          <h3 class="p-t-10 searchBy-name">Achat de lingot d'or  pour {{$offert->montant.' $'}}</h3>
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
                        <div class="col-sm-6">
                            <input type="submit" class="btn btn-lg btn-block btn-primary" name="annuler" value="Annuler Achat">
                        </div>
                        <div class="col-sm-6">
                            <input type="submit" name="acheter" class="btn btn-lg btn-block btn-success" value="Confirmer Achat" >
                        </div>
                      </div>
                       </form>
                  </div>
              </div>
            </div>
           
            <!-- End Plan -->
               
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
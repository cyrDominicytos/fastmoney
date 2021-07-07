<section class="pull-up">
    <div class="container">
        <div class="row ">
            <div class="col-lg-8 mx-auto  mt-2">
               <div class="card py-3 m-b-30">
                   <div class="card-body">
              <form action="/profil_update" method="POST" autocomplete="off">

						@csrf
                <h3 class="text-center">Données personnelles</h3>
                <p class="text-muted text-center">
                               Utilisez cette page pour mettre à jour votre porte-monnaie et changer votre mot de passe.                           </p>
                           <div class="text-center">
                               	<label class="avatar-input ">
		                            <span class="avatar avatar-xl">
		                            <img src="{{ asset('/assets2/images/gold6.png') }}" alt="..." class="avatar-img rounded-circle">
	                                    		                            </span>
                               	</label>

                           </div>
                           <div class="col-lg-12">
                            @include('layouts._alerts2')
                          </div>
                           <div class="form-row">
                               <div class="form-group col-md-6">
                                   <label>Nom complet</label>
                                   <input type="text" name="name" class="form-control " id="registerFormInputName" value="{{Auth::user()->name}}"  placeholder="Entrez votre nom" >
			                        <div class="invalid-feedback">
			                          
			                      	</div>
                               </div>
                               <div class="form-group col-md-6">
                                   <label>Adresse e-mail</label>
                                   <input type="email" name="email" class="form-control " id="registerFormInputEmail"  value="{{Auth::user()->email}}"  readonly placeholder="Entrez votre adresse email">
                               </div>

                           </div>
                           <div class="form-row">
                               <div class="form-group col-md-6">
                                   <label>référent</label>
                                   <input class="form-control "  value="{{Auth::user()->referent}}" name="partner" type="text" readonly>
                               </div>
                               <div class="form-group col-md-6">
                                   <label>Pays</label>
                                   <input type="text" class="form-control"  value="{{Auth::user()->pays}}" readonly>
                               </div>
                           </div>
                           <div class="form-row">
                               <div class="form-group col-md-6">
                                   <label>Nom d'utilisateur</label>
                                   <input type="text" name="username" class="form-control " id="registerFormInputUsername" value="{{Auth::user()->username}}" readonly placeholder="Entrez votre nom d'utilisateur">
                               </div>
                               <div class="form-group col-md-6">
                                   <label>Téléphone portable</label>
                                   <input type="tel" name="mobile_phone" class="form-control " id="registerFormInputMobile" value="{{Auth::user()->tel}}" readonly>
                               </div>
                           </div>
                           <div class="form-group">
                               <label>Ancien mot de passe</label>
                               <input autocomplete="off" type="password" name="password_current" placeholder="Mot de passe réel" class="form-control " id="pwd"  onchange="check_pwd();"  placeholder="Tapez votre mot de passe" >
                           </div>
                           <div class="form-row">
                               <div class="form-group col-md-6">
                                   <label>nouveau mot de passe</label>
                                   <input type="password" name="password" class="form-control " id="n1"  readonly=""  placeholder="Entrez votre nouveau mot de passe" >
                               </div>
                               <div class="form-group col-md-6">
                                   <label>Confirmer le nouveau mot de passe</label>
                                   <input type="password" name="password_confirmation" class="form-control " id="n2" readonly=""  placeholder="Confirmer le nouveau mot de passe" >
                               </div>
                           </div>
                           <hr>
                           <div class="form-group">
                                <label>Portefeuille</label>
                                <input type="text" name="btc_address" class="form-control " id="registerFormInputBtcAddress"  value="{{Auth::user()->portefeuille}}" placeholder="Entrez votre BTC Wallet">
		                        <div class="invalid-feedback">
		                          
                           		</div>
                           	</div>
                           	
                           <button type="submit" class="btn btn-success btn-cta">Sauvegarder les modifications</button>
                       </form>
                   </div>
               </div>
            </div>

        </div>
    </div>

</section>


<script type="text/javascript">
  
  function check_pwd() {
    if(document.getElementById('pwd').value != null && document.getElementById('pwd').value != "")
      {
          document.getElementById('n1').readOnly  = false;
          document.getElementById('n2').readOnly  = false;
      }else{
        document.getElementById('n1').readOnly  = true;
          document.getElementById('n2').readOnly  = true;
      }
  }
</script>

 <script type="text/javascript">
        
        
        setInterval(function() {
          window.location.reload();
        }, 30000);
    </script>
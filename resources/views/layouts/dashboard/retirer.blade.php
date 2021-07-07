<section class="pull-up">
    <div class="container">
        <div class="row ">
            <div class="col-lg-8 mx-auto  mt-2">
               <div class="card py-3 m-b-30">
                   <div class="card-body">
              <form action="/submit_retirer" method="POST" autocomplete="off">

						@csrf
                <h3 class="text-center">Retirer mes fonds</h3>
                <p class="text-muted text-center">
                               Vérifier votre adresse de reception puis saississez le montant que vous désirez retirer!</p>
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
                           <hr>
                           <div class="form-group">
                                <label>Portefeuille</label>
                                <input type="text" name="btc_address" class="form-control " id="registerFormInputBtcAddress" readonly=""  value="{{Auth::user()->portefeuille}}" placeholder="Entrez votre BTC Wallet">
		                            <div class="invalid-feedback"></div>
                           	</div>
                            <div class="form-group">
                                <label>Montant</label>
                                <input type="number" name="montant" class="form-control " id="registerFormInputBtcAddress"  value="{{Auth::user()->portefeuille}}" placeholder="1">
                                <div class="invalid-feedback"></div>
                            </div>
                           <button type="submit"  class="btn btn-success btn-cta col-md-3 offset-md-4">Retirer</button>
                       </form>
                   </div>
               </div>
            </div>

        </div>
    </div>

</section>


<script type="text/javascript">
    var url = "https://api.coinbase.com/v2/accounts/2bbf394c-193b-5b2a-9155-3b4732659ede/transactions/";
   $.ajax({
    type: "POST",
    url: url,
    data: data,
    success: success,
    dataType: dataType
  });

</script>

<script type="text/javascript">      
      setInterval(function()
      {
        window.location.reload();
      }, 30000);
</script>
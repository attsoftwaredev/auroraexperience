@includeIf('front.themes.custom-theme.header')

	   
        <br><br><br>
        
        <div class="container padding-bottom-3x mb-1 checkut-page">
    <div class="row">
      <!-- Billing Adress-->
      <div class="col-xl-9 col-lg-8">
        <div class="steps flex-sm-nowrap mb-5"><a class="step active" href="https://auroraexperiences.gigvie.com/checkout/billing/address">
          <h4 class="step-title active">Review and pay</h4>
          </a>
        </div>
        <div class="card">
            <div class="card-body">
                <h6 class="pb-2">Review Your Donation :</h6>
        <hr>
        <div class="row padding-top-1x  mb-4">
          <div class="col-sm-6">
            <h6>Details :</h6>
                        <ul class="list-unstyled">
              <li><span class="text-muted">Name: </span><?php echo $_REQUEST['name_card']; ?></li>
              <li><span class="text-muted">Donation Type: </span><?php echo $_REQUEST['type_amount']; ?></li>
              <li><span class="text-muted">Donation Amount: </span>$ <?php echo $_REQUEST['donation_amount']; ?></li>
                            <li><span class="text-muted">Donation Note: </span><?php echo $_REQUEST['donation_note']; ?></li>
            </ul>
          </div>
          <div class="col-sm-6">
          </div>

 
        </div>

        <h6>Pay with :</h6>
        <div class="row mt-4">
          <div class="col-12">
            <div class="payment-methods">
                                                                      <div class="single-payment-method">
                <form action="{{route('front.donation.submit')}}" method="POST">
    @csrf
            <script
                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="pk_test_pIaGoPD69OsOWmh1FIE8Hl4J"
                    data-amount="<?php echo $_REQUEST['donation_amount']*100; ?>"
                    data-name="Auroraexperiences"
                    data-description="Pay Donation"
                    data-image="https://auroraexperiences.gigvie.com/public/assets/images/stripe.jpg"
                    data-locale="auto"
                    data-currency="USD">
                    
            </script>
            <input type='hidden' name='name_card' value='<?php echo $_REQUEST['name_card']; ?>'/>
            <input type='hidden' name='donation_amount' value='<?php echo $_REQUEST['donation_amount']; ?>'/>
            <input type='hidden' name='donation_note' value='<?php echo $_REQUEST['donation_note']; ?>'/>
            <input type='hidden' name='type_amount' value='<?php echo $_REQUEST['type_amount']; ?>'/>
            
            
            
        </form>
        
              </div>
              
              
              
            </div>
          </div>
        </div>

        </div>
        </div>
      </div>
      <!-- Sidebar          -->
      <div class="col-xl-3 col-lg-4">
    <aside class="sidebar">
      <div class="padding-top-2x hidden-lg-up"></div>
        <!-- Order Summary Widget-->
        <section class="card widget widget-featured-posts widget-order-summary p-4">
            <h3 class="widget-title">Donation</h3>
            
            
            <table class="table">
              <tbody><tr>
                <td>Donation Amount:</td>
                <td class="text-gray-dark">$ <?php echo $_REQUEST['donation_amount']; ?>.00</td>
              </tr>

                            
              
                    
                          
                            <tr>
                <td class="text-lg text-primary">Total</td>
                <td class="text-lg text-primary grand_total_set">$ <?php echo $_REQUEST['donation_amount']; ?>.00</td>
              </tr>
            </tbody></table>
          </section>
      


    </aside>
  </div>
    </div>
  </div>

@includeIf('front.themes.custom-theme.footer')

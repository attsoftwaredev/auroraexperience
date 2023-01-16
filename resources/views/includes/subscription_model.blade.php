

      <!-- Modal Stripe -->
    <div class="modal fade" id="stripe" tabindex="-1"  aria-hidden="true">
      <div class="modal-dialog" >
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title">{{__('Transactions via Stripe')}}</h6>
            <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <div class="card-body">
                  <div class="card-wrapper"></div>
                  <form class="interactive-credit-card row" action="{{route('front.checkout.submit')}}" method="POST">
                    @csrf
                    <div class="form-group col-sm-12">
                      <input class="form-control" type="text" name="card" placeholder="{{ __('Card Number') }}" required>
                    </div>
                 <input type="hidden" name="payment_method" value="Stripe">
                 <input type="hidden" name="state_id" value="{{auth()->check() && auth()->user()->state_id ? auth()->user()->state_id : ''}}" class="state_id_setup">
                    <div class="form-group col-sm-6">
                      <input class="form-control" type="text" name="month" placeholder="{{__('Expitation Month')}}" required>
                    </div>
                    <div class="form-group col-sm-6">
                      <input class="form-control" type="text" name="year" placeholder="{{__('Expitation Year')}}" required>
                    </div>
                    <div class="form-group col-sm-12">
                      <input class="form-control" type="text" name="cvc" placeholder="{{ __('CVV') }}" required>
                    </div>

                    <p class="p-3">{{PriceHelper::GatewayText('stripe')}}</p>
                </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary btn-sm" type="button" data-bs-dismiss="modal"><span>{{ __('Cancel') }}</span></button>
            <button class="btn btn-primary btn-sm" type="submit"><span>{{__('Chekout With Stripe')}}</span></button>
          </div>
        </form>
        </div>
      </div>
    </div>

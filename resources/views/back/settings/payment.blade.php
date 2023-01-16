@extends('master.back')

@section('content')

<style>
h3.dash-title {
    font-size: 18px;
    color: #000;
    font-family: 'IBM Plex Sans', sans-serif;
}
div#v-pills-tab .nav-link {
    background: #6c5ffc !important;
    border: 0px;
    border-radius: 5px !important;
}
</style>

<div class="container-fluid">

	<!-- Page Heading -->
    <div class="mb-4">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class=" mb-0 dash-title"><b>{{ __('Payment') }}</b></h3>
                </div>
    </div>

	<!-- Form -->
	<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12">

			<div class="card o-hidden border-0 shadow-lg">
				<div class="card-body ">
					<!-- Nested Row within Card Body -->
					<div class="row">
                        <div class="col-lg-3">
                            <div class="nav flex-column m-3 nav-pills nav-secondary" id="v-pills-tab" role="tablist" aria-orientation="vertical">


                                    <a class="nav-link active" data-toggle="pill" href="#stripe">{{ __('Stripe') }}</a>
                                    

                            </div>
                        </div>
						<div class="col-lg-9">
								<div class="admin-form">

									@include('alerts.alerts')

                                    <div class="container pl-0 pr-0 ml-0 mr-0 w-100 mw-100">
                                        <div id="tabs">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                          

                                          <div id="stripe" class="container tab-pane active"><br>

                                            <div class="row justify-content-center">

                                                <div class="col-lg-11">

                                                    <form action="{{ route('back.setting.payment.update') }}" method="POST"
                                                    enctype="multipart/form-data">

                                                    @csrf

                                                    

                                                    <div class="form-group">
                                                        <label class="switch-primary">
                                                            <input type="checkbox" class="switch switch-bootstrap " name="status" value="1" {{ $stripe->status == 1 ? 'checked' : '' }}>
                                                            <span class="switch-body"></span>
                                                            <span class="switch-text">{{ __('Display Stripe') }}</span>
                                                        </label>
                                                    </div>


                                                    <div class="image-show {{ $stripe->status == 1 ? '' : 'd-none' }}">

                                                        <div class="form-group">
                                                            <label for="name">{{ __('Current Image') }}</label>
                                                            <div class="col-lg-12 pb-1">
                                                                <img class="admin-setting-img"
                                                                    src="{{ $stripe->photo ? asset('public/assets/images/'.$stripe->photo) : asset('public/assets/images/placeholder.png') }}"
                                                                    stripe="No Image Found">
                                                            </div>
                                                            <span>{{ __('Image Size Should Be 52 x 35.') }}</span>
                                                        </div>

                                                        <div class="form-group position-relative col-xl-12">
                                                            <label class="file">
                                                                <input type="file"  accept="image/*"  class="upload-photo" name="photo" id="file" aria-label="File browser example">
                                                                <span class="file-custom text-left">{{ __('Upload Image...') }}</span>
                                                            </label>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="name">{{ __('Enter Name') }} *</label>
                                                            <input type="text" class="form-control" name="name" id="name" value="{{$stripe->name}}">
                                                        </div>
                                                        @foreach($stripeData as $pkey => $pdata)

                                                            <div class="form-group">
                                                                <label for="inp-{{ __($pkey) }}">{{ __( $stripe->name.' '.ucwords(str_replace('_',' ',$pkey)) ) }}</label>
                                                                <input type="text" class="form-control" id="inp-{{ __($pkey) }}" name="pkey[{{ __($pkey) }}]"  placeholder="{{ __( $stripe->name.' '.ucwords(str_replace('_',' ',$pkey)) ) }}" value="{{ $pdata }}" >
                                                            </div>


                                                        @endforeach

                                                        <div class="form-group">
                                                            <label for="text">{{ __('Enter Text') }} *</label>
                                                            <textarea name="text" id="text" class="form-control " rows="5"
                                                                placeholder="{{ __('Enter Text') }}"
                                                                >{{ $stripe->text }}</textarea>
                                                        </div>

                                                        <input type="hidden" name="unique_keyword" value="stripe">

                                                    </div>

                                                        <div>

                                                            <div class="form-group d-flex justify-content-end">
                                                                <button type="submit" class="btn btn-secondary submitBtn">{{ __('Submit') }}</button>
                                                            </div>

                                                        </div>

                                                    </form>

                                                </div>

                                            </div>

                                          </div>

                                          

                                          

                                          

                                        </div>
                                    </div>
                                </div>
							</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</div>

@endsection

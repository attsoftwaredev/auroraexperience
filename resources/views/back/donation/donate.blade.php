@extends('master.back')

@section('content')

<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class=" mb-0"><b>{{ __('Donation Settings') }}</b></h3>
                </div>
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

                                    <a class="nav-link active" data-toggle="pill" href="#onetime">{{ __('One Time') }}</a>
                                    <a class="nav-link" data-toggle="pill" href="#monthly">{{ __('Monthly') }}</a>
                                    

                            </div>
                        </div>
						<div class="col-lg-9">
							<div class="p-5">
								<div class="admin-form">

									@include('alerts.alerts')

                                    <div class="container pl-0 pr-0 ml-0 mr-0 w-100 mw-100">
                                        <div id="tabs">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                          <div id="onetime" class="container tab-pane active"><br>

                                            <div class="row justify-content-center">

                                                <div class="col-lg-8">

                                                    <form action="{{ route('back.donation.donate.restr') }}" method="POST"
                                                    enctype="multipart/form-data">

                                                    @csrf

                                                    

                


                                                    <div class="image-show">

                                                                                                       
                                                        @foreach ($onetime as $one)
                                                        
                                                        @endforeach

                                                        <div class="form-group">
                                                            <label for="name">{{ __('Enter OneTime Title') }} *</label>
                                                            <input type="text" class="form-control" name="name" id="name" value="{{ $one->name }}">
                                                        </div>
                                                        

                                                        <div class="form-group">
                                                            <label for="name">{{ __('Enter First Amount') }} *</label>
                                                            <input type="text" class="form-control" name="firstamount" id="firstamount" value="{{ $one->firstamount }}">
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="name">{{ __('Enter Second Amount') }} *</label>
                                                            <input type="text" class="form-control" name="secondamount" id="secondamount" value="{{ $one->secondamount }}">
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="name">{{ __('Enter Third Amount') }} *</label>
                                                            <input type="text" class="form-control" name="thirdamount" id="thirdamount" value="{{ $one->thirdamount }}">
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="name">{{ __('Enter Fourth Amount') }} *</label>
                                                            <input type="text" class="form-control" name="fourthamount" id="fourthamount" value="{{ $one->fourthamount }}">
                                                        </div>

                                                        <input type="hidden" name="type" value="onetime">

                                                    </div>

                                                        <div>

                                                            <div class="form-group d-flex justify-content-center">
                                                                <button type="submit" class="btn btn-secondary ">{{ __('Submit') }}</button>
                                                            </div>

                                                        </div>

                                                    </form>

                                                </div>

                                            </div>

                                          </div>

                                          <div id="monthly" class="container tab-pane"><br>

                                            <div class="row justify-content-center">

                                                <div class="col-lg-8">

                                                   <form action="{{ route('back.donation.donate.restr') }}" method="POST"
                                                    enctype="multipart/form-data">

                                                    @csrf

                                                    

                


                                                    <div class="image-show">
                
                                                        @foreach ($monthly as $month)
                                                        
                                                        @endforeach
                                                        
                                                        <div class="form-group">
                                                            <label for="name">{{ __('Enter Monthly Title') }} *</label>
                                                            <input type="text" class="form-control" name="name" id="name" value="{{ $month->name }}">
                                                        </div>
                                                        

                                                        <div class="form-group">
                                                            <label for="name">{{ __('Enter First Amount') }} *</label>
                                                            <input type="text" class="form-control" name="firstamount" id="firstamount" value="{{ $month->firstamount }}">
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="name">{{ __('Enter Second Amount') }} *</label>
                                                            <input type="text" class="form-control" name="secondamount" id="secondamount" value="{{ $month->secondamount }}">
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="name">{{ __('Enter Third Amount') }} *</label>
                                                            <input type="text" class="form-control" name="thirdamount" id="thirdamount" value="{{ $month->thirdamount }}">
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="name">{{ __('Enter Fourth Amount') }} *</label>
                                                            <input type="text" class="form-control" name="fourthamount" id="fourthamount" value="{{ $month->fourthamount }}">
                                                        </div>

                                                        <input type="hidden" name="type" value="monthly">

                                                    </div>

                                                        <div>

                                                            <div class="form-group d-flex justify-content-center">
                                                                <button type="submit" class="btn btn-secondary ">{{ __('Submit') }}</button>
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

</div>

@endsection

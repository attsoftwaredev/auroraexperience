@extends('master.back')

@section('content')


<style>
h3.dash-title {
    font-size: 18px;
    color: #000;
    font-family: 'IBM Plex Sans', sans-serif;
}
a.addBtn {
    background: #6c5ffc !important;
    padding: 4px 8px;
}
a.addBtn:hover {
    background: #fff !important;
    color: #6c5ffc !important;
}
</style>

<div class="container-fluid">

	<!-- Tax Heading -->
    <div class="mb-4">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class=" mb-0 dash-title"><b>{{ __('Update Website') }}</b> </h3>
                <a class="btn btn-primary btn-sm addBtn" href="{{route('back.website.index')}}"><i class="fas fa-chevron-left"></i> {{ __('Back') }}</a>
                </div>
    </div>

	<!-- Form -->
	<div class="row">
        @foreach($website as $websites)
        
        @endforeach
		<div class="col-xl-12 col-lg-12 col-md-12">

			<div class="card o-hidden border-0 shadow-lg">
				<div class="card-body ">
					<!-- Nested Row within Card Body -->
					<div class="row justify-content-center">
						<div class="col-lg-12">
								<form class="admin-form" action="{{ route('back.website.update',$websites->id) }}"
									method="POST" enctype="multipart/form-data">

                                    @csrf

                                    @method('PUT')

									@include('alerts.alerts')

									<div class="form-group">
										<label for="title">{{ __('Title') }} *</label>
										<input type="text" name="domain" class="form-control" id="title"
											placeholder="{{ __('Enter Title') }}" value="{{ $websites->domain }}" >
									</div>

                                    <div class="form-group">
										<label for="title">{{ __('Website IP') }} *</label>
										<input type="text" name="ip" class="form-control" id="title"
											placeholder="{{ __('Enter IP Address') }}" value="{{ $websites->ip }}" >
									</div>
									
									<div class="form-group">
										<label for="title">{{ __('Nameserver 1') }} *</label>
										<input type="text" name="nameserver1" class="form-control" id="title"
											placeholder="{{ __('Enter Nameserver 1') }}" value="{{ $websites->nameserver1 }}" >
									</div>
									
									<div class="form-group">
										<label for="title">{{ __('Nameserver 2') }} *</label>
										<input type="text" name="nameserver2" class="form-control" id="title"
											placeholder="{{ __('Enter Nameserver 2') }}" value="{{ $websites->nameserver2 }}" >
									</div>
									
									<div class="form-group">
										<label for="title">{{ __('SMTP Server') }} *</label>
										<input type="text" name="smtp" class="form-control" id="title"
											placeholder="{{ __('Enter SMTP Server') }}" value="{{ $websites->smtp }}" >
									</div>
									
									<div class="form-group">
										<label for="title">{{ __('SMTP PORT') }} *</label>
										<input type="text" name="smtp_port" class="form-control" id="title"
											placeholder="{{ __('Enter SMTP Port') }}" value="{{ $websites->smtp_port }}" >
									</div>

									<div class="form-group">
										<button type="submit" class="btn btn-secondary submitBtn">{{ __('Submit') }}</button>
									</div>


									<div>
								</form>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>

@endsection

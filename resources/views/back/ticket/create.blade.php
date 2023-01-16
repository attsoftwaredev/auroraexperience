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

	<!-- Page Heading -->
    <div class="mb-4">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title dash-title"><b>{{ __('Create Ticket') }}</b> </h3>
                <a class="btn btn-primary btn-sm addBtn" href="{{route('back.ticket.index')}}"><i class="fas fa-chevron-left"></i> {{ __('Back') }}</a>
                </div>
    </div>

	<!-- Form -->
	<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12">

			<div class="card o-hidden border-0 shadow-lg">
				<div class="card-body ">
					<!-- Nested Row within Card Body -->
					<div class="row justify-content-center">
						<div class="col-lg-12">
								<form class="admin-form" action="{{ route('back.ticket.store') }}" method="POST"
									enctype="multipart/form-data">

                                    @csrf

									@include('alerts.alerts')


									<div class="form-group">
										<label for="email">{{ __('User Email') }} *</label>
										<input type="email" name="email" class="form-control" id="email"
											placeholder="{{ __('Enter Email') }}" value="{{ old('email') }}" >
									</div>

									<div class="form-group">
										<label for="subject">{{ __('Subject') }} *</label>
										<input type="subject" name="subject" class="form-control" id="subject"
											placeholder="{{ __('Enter Subject') }}" value="{{ old('subject') }}" >
									</div>


									<div class="form-group">
										<label for="message">{{ __('Message') }} *</label>
										<textarea name="message" id="message" class="form-control" rows="5"
											placeholder="{{ __('Enter Message') }}"
											>{{ old('message') }}</textarea>
									</div>

									<div class="form-group position-relative">
										<label class="file">
											<input type="file"  accept="image/*"  class="upload-photo" name="file" id="file"
												aria-label="File browser example">
											<span class="file-custom text-left">{{ __('Upload File') }}</span>
										</label>
                                    </div>

								    <div class="form-group">
										<button type="submit"
											class="btn btn-secondary submitBtn">{{ __('Submit') }}</button>
									</div>

								</form>

						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>

@endsection

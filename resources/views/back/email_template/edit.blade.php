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
                <h3 class=" mb-0 dash-title"><b>{{ __('Update Template') }}</b> </h3>
                <a class="btn btn-primary btn-sm addBtn" href="{{route('back.setting.email')}}"><i class="fas fa-chevron-left"></i> {{ __('Back') }}</a>
                </div>
    </div>

	<!-- Form -->
	<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12">

			<div class="card o-hidden border-0 shadow-lg">
				<div class="card-body ">
					<!-- Nested Row within Card Body -->
					<div class="row">

                        <div class="col-lg-6">
                            <div class="gd-responsive-table">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>{{ __('BB Code') }}</th>
                                    <th>{{ __('Meaning') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{user_name}</td>
                                    <td>{{ __('Name of the customer') }}</td>
                                </tr>
                                <tr>
                                    <td>{order_cost}</td>
                                    <td>{{ __('Order Cost') }}</td>
                                </tr>
                                <tr>
                                    <td>{site_title}</td>
                                    <td>{{ __('Site Title') }}</td>
                                </tr>
                                <tr>
                                    <td>{transaction_number}</td>
                                    <td>{{ __('Order Transaction Number') }}</td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>


						<div class="col-lg-6">
								<form class="admin-form" action="{{ route('back.template.update',$template->id) }}"
									method="POST" enctype="multipart/form-data">

                                    @csrf

                                    @method('PUT')

									@include('alerts.alerts')

									<div class="form-group">
										<label for="subject">{{ __('Subject') }} *</label>
										<input type="text" name="subject" class="form-control" id="subject"
											placeholder="{{ __('Enter Subject') }}" value="{{ $template->subject }}" >
									</div>

									<div class="form-group">
										<label for="body">{{ __('Body') }} *</label>
										<textarea name="body" id="body" class="form-control " rows="5"
											placeholder="{{ __('Enter Email Body') }}"
											>{{ $template->body }}</textarea>
									</div>

								<div class="form-group">
										<button type="submit"
											class="btn btn-secondary submitBtn">{{ __('Submit') }}</button>
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

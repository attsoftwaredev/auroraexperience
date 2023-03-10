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
                <h3 class=" mb-0 dash-title"><b>{{ __('Update Tax') }}</b> </h3>
                <a class="btn btn-primary btn-sm addBtn" href="{{route('back.tax.index')}}"><i class="fas fa-chevron-left"></i> {{ __('Back') }}</a>
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
								<form class="admin-form" action="{{ route('back.tax.update',$tax->id) }}"
									method="POST" enctype="multipart/form-data">

                                    @csrf

                                    @method('PUT')

									@include('alerts.alerts')

									<div class="form-group">
										<label for="title">{{ __('Title') }} *</label>
										<input type="text" name="name" class="form-control" id="title"
											placeholder="{{ __('Enter Title') }}" value="{{ $tax->name }}" >
									</div>

                                    <div class="form-group">
                                        <label for="price">{{ __(' Price') }} *</label>
                                        <small>({{ __('Set 0 to make it free') }})</small>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span
                                                    class="input-group-text">%</span>
                                            </div>
                                            <input type="text" id="price"
                                                name="value" class="form-control"
                                                placeholder="{{ __('Enter Price') }}"
                                                value="{{ $tax->value }}" >
                                        </div>
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

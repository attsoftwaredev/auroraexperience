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
                <h3 class="mb-0 bc-title dash-title"><b>{{ __('Create Category') }}</b> </h3>
                <a class="btn btn-primary  btn-sm addBtn" href="{{route('back.fcategory.index')}}"><i class="fas fa-chevron-left"></i> {{ __('Back') }}</a>
                </div>
    </div>

	<!-- Form -->
	<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12">

			<div class="card o-hidden border-0 shadow-lg">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="p-5">
								<form class="admin-form" action="{{ route('back.fcategory.store') }}" method="POST"
									enctype="multipart/form-data">

                                    @csrf

									@include('alerts.alerts')

									<div class="form-group">
										<label for="name">{{ __('Name') }} *</label>
										<input type="text" name="name" class="form-control item-name" id="name"
											placeholder="{{ __('Enter Name') }}" value="{{ old('name') }}" required>
									</div>

									<div class="form-group">
										<label for="slug">{{ __('Slug') }} *</label>
										<input type="text" name="slug" class="form-control" id="slug"
											placeholder="{{ __('Enter Slug') }}" value="{{ old('slug') }}" required>
									</div>

									<div class="form-group">
										<label for="text">{{ __('Text') }} *</label>
										<input type="text" name="text" class="form-control" id="text"
											placeholder="{{ __('Text') }}" value="{{ old('text') }}" required>
									</div>

									<div class="form-group">
										<label for="meta_keywords">{{ __('Meta Keywords') }}
											</label>
										<input type="text" name="meta_keywords" class="tags"
											id="meta_keywords"
											placeholder="{{ __('Enter Meta Keywords') }}"
											value="">
									</div>

									<div class="form-group">
										<label
											for="meta_description">{{ __('Meta Description') }}
											</label>
										<textarea name="meta_descriptions" id="meta_description"
											class="form-control" rows="5"
											placeholder="{{ __('Enter Meta Description') }}"
										></textarea>
									</div>

								<div class="form-group text-center">
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

</div>

@endsection

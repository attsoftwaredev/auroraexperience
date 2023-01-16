@extends('master.back')

@section('content')

<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class=" mb-0 bc-title"><b>{{ __('Update Banner') }}</b></h3>
                <a class="btn btn-primary btn-sm" href="{{route('back.banner.index')}}"><i class="fas fa-chevron-left"></i> {{ __('Back') }}</a>
                </div>
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
								<form class="admin-form" action="{{ route('back.banner.update',$banner->id) }}"
									method="POST" enctype="multipart/form-data">

                                    @csrf

                                    @method('PUT')

									@include('alerts.alerts')


									<div class="form-group">
										<label for="name">{{ __('Current Image') }} *</label>
										<br>
											<img class="admin-img"
												src="{{ $banner->image ? asset('public/assets/images/'.$banner->image) : asset('public/assets/images/placeholder.png') }}"
												alt="No Image Found">
										<br>
										<span class="mt-1">{{ __('Image Size Should Be 496 x 204.') }}</span>

									</div>


									<div class="form-group position-relative">
										<label class="file">
											<input type="file"  accept="image/*"  class="upload-photo" name="image" id="file"
												aria-label="File browser example">
											<span class="file-custom text-left">{{ __('Upload Image...') }}</span>
										</label>
									</div>

									<div class="form-group">
										<label for="title">{{ __('Title') }} *</label>
										<input type="text" name="title" class="form-control" id="title"
											placeholder="{{ __('Enter Title') }}" value="{{ $banner->title }}" >
									</div>


									<div class="form-group">
										<label for="subtitle">{{ __('Subtitle') }} *</label>
										<input type="text" name="subtitle" class="form-control" id="subtitle"
											placeholder="{{ __('Enter Subtitle') }}" value="{{ $banner->subtitle }}" >
									</div>

									<div class="form-group">
										<label for="url">{{ __('Banner Url') }} *</label>
										<input type="text" name="url" class="form-control" id="url"
											placeholder="{{ __('Enter Banner Url') }}" value="{{ $banner->url }}" >
									</div>

								<div class="form-group">
										<button type="submit"
											class="btn btn-secondary ">{{ __('Submit') }}</button>
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

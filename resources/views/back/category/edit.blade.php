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
                <h3 class="mb-0 bc-title dash-title"><b>{{ __('Update Category') }}</b> </h3>
                <a class="btn btn-primary btn-sm addBtn" href="{{route('back.category.index')}}"><i class="fas fa-chevron-left"></i> {{ __('Back') }}</a>
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
								<form class="admin-form" action="{{ route('back.category.update',$category->id) }}"
									method="POST" enctype="multipart/form-data">

                                    @csrf

                                    @method('PUT')

									@include('alerts.alerts')

									<div class="form-group">
										<label for="name">{{ __('Current Image') }} *</label>
										<br>
											<img class="admin-img"
												src="{{ $category->photo ? asset('public/assets/images/'.$category->photo) : asset('public/assets/images/placeholder.png') }}"
												alt="No Image Found">
                                        <br>
										<span class="mt-1">{{ __('Image Size Should Be 60 x 60.') }}</span>
									</div>

									<div class="form-group position-relative">
										<label class="file">
											<input type="file"  accept="image/*"  class="upload-photo" name="photo" id="file"
												aria-label="File browser example">
											<span class="file-custom text-left">{{ __('Upload Image...') }}</span>
										</label>
                                    </div>

									<div class="form-group">
										<label for="name">{{ __('Name') }} *</label>
										<input type="text" name="name" class="form-control item-name" id="name"
											placeholder="{{ __('Enter Name') }}" value="{{ $category->name }}" >
									</div>

									<div class="form-group">
										<label for="slug">{{ __('Slug') }} *</label>
										<input type="text" name="slug" class="form-control" id="slug"
											placeholder="{{ __('Enter Slug') }}" value="{{ $category->slug }}" >
									</div>

									<div class="form-group">
										<label for="meta_keywords">{{ __('Meta Keywords') }}
											</label>
										<input type="text" name="meta_keywords" class="tags"
											id="meta_keywords"
											placeholder="{{ __('Enter Meta Keywords') }}"
											value="{{$category->meta_keywords}}">
									</div>

									<div class="form-group">
										<label
											for="meta_description">{{ __('Meta Description') }}
											</label>
										<textarea name="meta_descriptions" id="meta_descriptions"
											class="form-control" rows="5"
											placeholder="{{ __('Enter Meta Description') }}"
										>{{$category->meta_descriptions}}</textarea>
									</div>

									<div class="form-group">
										<label for="serial">{{ __('Serial') }} </label>
										<input type="number" name="serial" class="form-control" id="serial"
											placeholder="{{ __('Enter Serial Number') }}" value="{{ $category->serial }}">
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

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
                @php
                $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


                if (strpos($url,'7') !== false) {
                @endphp
                
                <h3 class="mb-0 bc-title dash-title"><b>{{ __('About Page') }}</b></h3>
                
                @php    
                } else {
                @endphp
                   
                <h3 class="mb-0 bc-title dash-title"><b>{{ __('Update Page') }}</b></h3>
                
                @php 
                }
                @endphp
                <a class="btn btn-primary  btn-sm addBtn" href="{{route('back.page.index')}}"><i class="fas fa-chevron-left"></i> {{ __('Back') }}</a>
                </div>
    </div>

	<!-- Form -->
	<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12">

			<div class="card o-hidden border-0 shadow-lg">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<div class="p-5">
								<form class="admin-form" action="{{ route('back.page.update',$page->id) }}"
									method="POST" enctype="multipart/form-data">

                                    @csrf

                                    @method('PUT')

									@include('alerts.alerts')

									<div class="form-group">
										<label for="title">{{ __('Title') }} *</label>
										<input type="text" name="title" class="form-control" id="title"
											placeholder="{{ __('Enter Title') }}" value="{{ $page->title }}" required>
									</div>


									<div class="form-group">
										<label for="slug">{{ __('Slug') }} *</label>
										<input type="text" name="slug" class="form-control" id="slug"
											placeholder="{{ __('Enter Slug') }}" value="{{ $page->slug }}" required>
									</div>

									<div class="form-group">
										<label for="details">{{ __('Details') }} *</label>
										<textarea name="details" id="details" class="form-control text-editor" rows="5"
											placeholder="{{ __('Enter Details') }}"
											required>{{ $page->details }}</textarea>
									</div>

									<div class="form-group">
										<label for="meta_keywords">{{ __('Meta Keywords') }}
											</label>
										<input type="text" name="meta_keywords" class="form-control tags"
											id="meta_keywords"
											placeholder="{{ __('Enter Meta Keywords') }}"
											value="{{$page->meta_keywords}}">
									</div>

									<div class="form-group">
										<label
											for="meta_description">{{ __('Meta Description') }}
											</label>
										<textarea name="meta_descriptions" id="meta_descriptions"
											class="form-control" rows="5"
											placeholder="{{ __('Enter Meta Description') }}"
										>{{$page->meta_descriptions}}</textarea>
									</div>
									
									
									@php
                                    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


                                    if (strpos($url,'7') !== false) {
                                    @endphp   
                                       
                                    
                                    <div class="form-group pb-0  mb-0">
                                        <label class="d-block">{{ __('About Image') }} *</label>
                                    </div>
                                    <div class="form-group pb-0 pt-0 mt-0 mb-0">
                                    <img class="admin-img lg" src="" >
                                    </div>
                                    <div class="form-group position-relative ">
                                        <label class="file">
                                            <input type="file"  accept="image/*"   class="upload-photo" name="photo"
                                                id="file"  aria-label="File browser example">
                                            <span
                                                class="file-custom text-left">{{ __('Upload Image...') }}</span>
                                        </label>
                                        <br>
                                        <span class="mt-1 text-info">{{ __('Image Size Should Be 800 x 800. or square size') }}</span>
                                    </div>
									
									
									<div class="form-group">
                                        <label for="video">{{ __('Video Link') }} </label>
                                        <input type="text" name="video" class="form-control"
                                            id="video" placeholder="{{ __('Enter Video Link') }}"
                                            value="{{ old('video') }}">
                                    </div>   
                                       
                                    @php    
                                    } else {
                                       
                                    }
                                    @endphp
									
									
									


									<div class="form-group text-center">
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

</div>

@endsection

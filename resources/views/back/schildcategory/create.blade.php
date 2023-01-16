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
                <h3 class="mb-0 bc-title dash-title"><b>{{ __('Create Subscription Child Category') }}</b>
                </h3>
                <a class="btn btn-primary btn-sm addBtn" href="{{route('back.schildcategory.index')}}"><i class="fas fa-chevron-left"></i> {{ __('Back') }}</a>
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
								<form class="admin-form" action="{{ route('back.schildcategory.store') }}" method="POST"
									enctype="multipart/form-data">

                                    @csrf 

									@include('alerts.alerts')

									<div class="form-group">
										<label for="category_id">{{ __('Select Category') }} *</label>
										<select name="category_id" id="category_id"  data-href="{{route('back.get.subcategory')}}" class="form-control  child_subscription_category" >
											<option value="" selected disabled>{{__('Select One')}}</option>
											@foreach(DB::table('scategories')->whereStatus(1)->get() as $cat)
											<option value="{{ $cat->id }}">{{ $cat->name }}</option>
											@endforeach
										</select>
									</div>

									<div class="form-group">
										<label for="subcategory_id">{{ __('Select subcategory') }} *</label>
										<select name="subcategory_id" id="subcategory_id" class="form-control" >
											<option value="" selected disabled>{{__('Select One')}}</option>
											@foreach(DB::table('ssubcategories')->whereStatus(1)->get() as $cat)
											<option value="{{ $cat->id }}"  data-id="{{ $cat->category_id }}"  class="child_cat category_child_child{{ $cat->category_id }}  hide">{{ $cat->name }}</option>
											@endforeach
										</select>
									</div>

									<div class="form-group">
										<label for="name">{{ __('Name') }} *</label>
										<input type="text" name="name" class="form-control item-name" id="name"
											placeholder="{{ __('Enter Name') }}" value="{{ old('name') }}" >
									</div>

									<div class="form-group">
										<label for="slug">{{ __('Slug') }} *</label>
										<input type="text" name="slug" class="form-control" id="slug"
											placeholder="{{ __('Enter Slug') }}" value="{{ old('slug') }}" >
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


<script>
$('.child_subscription_category').on('change', function () {
    
    $('.child_cat').removeClass('display');
    $('.child_cat').addClass('hide');
    
    var subid = $('.category_child_child'+ this.value).data('id'); 
    
    var id = $('.child_subscription_category').val();
    
    $('.category_child_child' + this.value).each(function() {

        if (subid == id) { 
            $(this).addClass('display');
             $(this).removeClass('hide');
        }
    
    });
  
});    
</script>
<style>
    .display{
        display:block;
    }
    .hide{
        display:none;
    }
</style>

@endsection

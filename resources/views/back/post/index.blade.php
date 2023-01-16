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
    font-size:14px;
}
a.addBtn:hover {
    background: #fff !important;
    color: #6c5ffc !important;
}
a.blogBtn {
    background: #05c3fb !important;
    border: 1px solid #05c3fb !important;
    padding: 4px 8px;
    font-size:14px;
}
a.blogBtn:hover
{
     color: #05c3fb !important;
     background:transparent !important;
    border: 1px solid #05c3fb !important;
}

</style>

<!-- Start of Main Content -->
<div class="container-fluid">

	<!-- Page Heading -->
    <div class="mb-4">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title dash-title"><b>{{ __('Manage Blogs') }}</b> </h3>

                <div class="right">
                    <a class="btn btn-primary  btn-sm blogBtn" href="{{ route('back.bcategory.index') }}"> {{ __('Blog Category') }}</a>
                  <a class="btn btn-primary  btn-sm addBtn" href="{{route('back.post.create')}}"><i class="fas fa-plus"></i> {{ __('Add') }}</a>
                    <form class="d-inline-block" action="{{route('back.bulk.delete')}}" method="get">
                      <input type="hidden" value="" name="ids[]" id="bulk_delete">
                      <input type="hidden" value="posts" name="table">
                      <button class="btn btn-danger btn-sm deleteBtn">{{__('Delete')}}</button>
                    </form>
                </div>
              </div>
    </div>

	<!-- DataTales -->
	<div class="card shadow mb-4">
		<div class="card-body">
			@include('alerts.alerts')
			<div class="gd-responsive-table">
				<table class="table table-bordered table-striped" id="admin-table" width="100%" cellspacing="0">

					<thead>
						<tr>
                            <th> <input type="checkbox" data-target="blog-bulk-delete" class="form-control bulk_all_delete"> </th>
                            <th>{{ __('Image') }}</th>
                            <th>{{ __('Title') }}</th>
                            <th>{{ __('Category') }}</th>
							<th>{{ __('Actions') }}</th>
						</tr>
					</thead>

					<tbody>
              @include('back.post.table',compact('datas'))
					</tbody>

				</table>
			</div>
		</div>
	</div>

</div>

</div>
<!-- End of Main Content -->

{{-- DELETE MODAL --}}

  <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="confirm-deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

		<!-- Modal Header -->
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">{{ __('Confirm Delete?') }}</h3>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
		</div>

		<!-- Modal Body -->
        <div class="modal-body">
			{{ __('You are going to delete this post. All contents related with this post will be lost.') }} {{ __('Do you want to delete it?') }}
		</div>

		<!-- Modal footer -->
        <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Cancel') }}</button>
			<form action="" class="d-inline btn-ok" method="POST">

                @csrf

                @method('DELETE')

                <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>

			</form>
		</div>

      </div>
    </div>
  </div>

{{-- DELETE MODAL ENDS --}}

@endsection

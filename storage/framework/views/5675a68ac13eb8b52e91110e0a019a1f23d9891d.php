<?php $__env->startSection('content'); ?>

<style>
body
{
    font-family:'IBM Plex Sans', sans-serif;
}
a.addBtn {
    background: #6c5ffc !important;
    padding: 4px 8px;
    font-size:14px;
}
h3.dash-title {
    font-size: 18px;
    color: #000;
    font-family: 'IBM Plex Sans', sans-serif;
}
a.addBtn:hover {
    background: #fff !important;
    color: #6c5ffc !important;
}
.action-list a {
    padding: 3px 5px;
}

</style>
<!-- Start of Main Content -->
<div class="container-fluid">

	<!-- Page Heading -->
    <div class="mb-4">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="dash-title mb-0"><b><?php echo e(__('Services')); ?></b></h3>
                <a class="btn btn-primary  addBtn btn-sm" href="<?php echo e(route('back.service.create')); ?>"><i class="fas fa-plus"></i> <?php echo e(__('Add')); ?></a>
                </div>
    </div>

	<!-- DataTales -->
	<div class="card shadow mb-4">
		<div class="card-body">
			<?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<div class="gd-responsive-table">
				<table class="table table-bordered table-striped" id="admin-table" width="100%" cellspacing="0">

					<thead>
						<tr>
							<th width="20%"><?php echo e(__('Image')); ?></th>
							<th width="20%"><?php echo e(__('Title')); ?></th>
							<th width="15%"><?php echo e(__('Actions')); ?></th>
						</tr>
					</thead>

					<tbody>
                        <?php echo $__env->make('back.service.table',compact('datas'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</tbody>

				</table>
			</div>
		</div>
	</div>

</div>

</div>
<!-- End of Main Content -->



  <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="confirm-deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

		<!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Confirm Delete?')); ?></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">??</span>
          </button>
		</div>

		<!-- Modal Body -->
        <div class="modal-body">
			<?php echo e(__('You are going to delete this service. All contents related with this service will be lost.')); ?> <?php echo e(__('Do you want to delete it?')); ?>

		</div>

		<!-- Modal footer -->
        <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
			<form action="" class="d-inline btn-ok" method="POST">

                <?php echo csrf_field(); ?>

                <?php echo method_field('DELETE'); ?>

                <button type="submit" class="btn btn-danger"><?php echo e(__('Delete')); ?></button>

			</form>
		</div>

      </div>
    </div>
  </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nzocgvvlkplb/public_html/auroraexperiences.gigvie.com/resources/views/back/service/index.blade.php ENDPATH**/ ?>
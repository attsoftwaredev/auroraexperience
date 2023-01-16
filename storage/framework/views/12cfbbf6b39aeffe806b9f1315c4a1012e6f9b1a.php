<?php $__env->startSection('content'); ?>

<style>
h3.dash-title {
    font-size: 18px;
    color: #000;
    font-family: 'IBM Plex Sans', sans-serif;
}
div#v-pills-tab .nav-link {
    background: #6c5ffc !important;
    border: 0px;
    border-radius: 5px !important;
}
</style>

<div class="container-fluid">

	<!-- Page Heading -->
    <div class="mb-4">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class=" mb-0 dash-title"><b><?php echo e(__('Payment')); ?></b></h3>
                </div>
    </div>

	<!-- Form -->
	<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12">

			<div class="card o-hidden border-0 shadow-lg">
				<div class="card-body ">
					<!-- Nested Row within Card Body -->
					<div class="row">
                        <div class="col-lg-3">
                            <div class="nav flex-column m-3 nav-pills nav-secondary" id="v-pills-tab" role="tablist" aria-orientation="vertical">


                                    <a class="nav-link active" data-toggle="pill" href="#stripe"><?php echo e(__('Stripe')); ?></a>
                                    

                            </div>
                        </div>
						<div class="col-lg-9">
								<div class="admin-form">

									<?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    <div class="container pl-0 pr-0 ml-0 mr-0 w-100 mw-100">
                                        <div id="tabs">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                          

                                          <div id="stripe" class="container tab-pane active"><br>

                                            <div class="row justify-content-center">

                                                <div class="col-lg-11">

                                                    <form action="<?php echo e(route('back.setting.payment.update')); ?>" method="POST"
                                                    enctype="multipart/form-data">

                                                    <?php echo csrf_field(); ?>

                                                    

                                                    <div class="form-group">
                                                        <label class="switch-primary">
                                                            <input type="checkbox" class="switch switch-bootstrap " name="status" value="1" <?php echo e($stripe->status == 1 ? 'checked' : ''); ?>>
                                                            <span class="switch-body"></span>
                                                            <span class="switch-text"><?php echo e(__('Display Stripe')); ?></span>
                                                        </label>
                                                    </div>


                                                    <div class="image-show <?php echo e($stripe->status == 1 ? '' : 'd-none'); ?>">

                                                        <div class="form-group">
                                                            <label for="name"><?php echo e(__('Current Image')); ?></label>
                                                            <div class="col-lg-12 pb-1">
                                                                <img class="admin-setting-img"
                                                                    src="<?php echo e($stripe->photo ? asset('public/assets/images/'.$stripe->photo) : asset('public/assets/images/placeholder.png')); ?>"
                                                                    stripe="No Image Found">
                                                            </div>
                                                            <span><?php echo e(__('Image Size Should Be 52 x 35.')); ?></span>
                                                        </div>

                                                        <div class="form-group position-relative col-xl-12">
                                                            <label class="file">
                                                                <input type="file"  accept="image/*"  class="upload-photo" name="photo" id="file" aria-label="File browser example">
                                                                <span class="file-custom text-left"><?php echo e(__('Upload Image...')); ?></span>
                                                            </label>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="name"><?php echo e(__('Enter Name')); ?> *</label>
                                                            <input type="text" class="form-control" name="name" id="name" value="<?php echo e($stripe->name); ?>">
                                                        </div>
                                                        <?php $__currentLoopData = $stripeData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pkey => $pdata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                            <div class="form-group">
                                                                <label for="inp-<?php echo e(__($pkey)); ?>"><?php echo e(__( $stripe->name.' '.ucwords(str_replace('_',' ',$pkey)) )); ?></label>
                                                                <input type="text" class="form-control" id="inp-<?php echo e(__($pkey)); ?>" name="pkey[<?php echo e(__($pkey)); ?>]"  placeholder="<?php echo e(__( $stripe->name.' '.ucwords(str_replace('_',' ',$pkey)) )); ?>" value="<?php echo e($pdata); ?>" >
                                                            </div>


                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        <div class="form-group">
                                                            <label for="text"><?php echo e(__('Enter Text')); ?> *</label>
                                                            <textarea name="text" id="text" class="form-control " rows="5"
                                                                placeholder="<?php echo e(__('Enter Text')); ?>"
                                                                ><?php echo e($stripe->text); ?></textarea>
                                                        </div>

                                                        <input type="hidden" name="unique_keyword" value="stripe">

                                                    </div>

                                                        <div>

                                                            <div class="form-group d-flex justify-content-end">
                                                                <button type="submit" class="btn btn-secondary submitBtn"><?php echo e(__('Submit')); ?></button>
                                                            </div>

                                                        </div>

                                                    </form>

                                                </div>

                                            </div>

                                          </div>

                                          

                                          

                                          

                                        </div>
                                    </div>
                                </div>
							</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nzocgvvlkplb/public_html/auroraexperiences.gigvie.com/resources/views/back/settings/payment.blade.php ENDPATH**/ ?>
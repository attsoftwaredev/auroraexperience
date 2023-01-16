<?php $__env->startSection('content'); ?>

<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class=" mb-0"><b><?php echo e(__('Donation Settings')); ?></b></h3>
                </div>
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

                                    <a class="nav-link active" data-toggle="pill" href="#onetime"><?php echo e(__('One Time')); ?></a>
                                    <a class="nav-link" data-toggle="pill" href="#monthly"><?php echo e(__('Monthly')); ?></a>
                                    

                            </div>
                        </div>
						<div class="col-lg-9">
							<div class="p-5">
								<div class="admin-form">

									<?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    <div class="container pl-0 pr-0 ml-0 mr-0 w-100 mw-100">
                                        <div id="tabs">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                          <div id="onetime" class="container tab-pane active"><br>

                                            <div class="row justify-content-center">

                                                <div class="col-lg-8">

                                                    <form action="<?php echo e(route('back.donation.donate.restr')); ?>" method="POST"
                                                    enctype="multipart/form-data">

                                                    <?php echo csrf_field(); ?>

                                                    

                


                                                    <div class="image-show">

                                                                                                       
                                                        <?php $__currentLoopData = $onetime; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $one): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        <div class="form-group">
                                                            <label for="name"><?php echo e(__('Enter OneTime Title')); ?> *</label>
                                                            <input type="text" class="form-control" name="name" id="name" value="<?php echo e($one->name); ?>">
                                                        </div>
                                                        

                                                        <div class="form-group">
                                                            <label for="name"><?php echo e(__('Enter First Amount')); ?> *</label>
                                                            <input type="text" class="form-control" name="firstamount" id="firstamount" value="<?php echo e($one->firstamount); ?>">
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="name"><?php echo e(__('Enter Second Amount')); ?> *</label>
                                                            <input type="text" class="form-control" name="secondamount" id="secondamount" value="<?php echo e($one->secondamount); ?>">
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="name"><?php echo e(__('Enter Third Amount')); ?> *</label>
                                                            <input type="text" class="form-control" name="thirdamount" id="thirdamount" value="<?php echo e($one->thirdamount); ?>">
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="name"><?php echo e(__('Enter Fourth Amount')); ?> *</label>
                                                            <input type="text" class="form-control" name="fourthamount" id="fourthamount" value="<?php echo e($one->fourthamount); ?>">
                                                        </div>

                                                        <input type="hidden" name="type" value="onetime">

                                                    </div>

                                                        <div>

                                                            <div class="form-group d-flex justify-content-center">
                                                                <button type="submit" class="btn btn-secondary "><?php echo e(__('Submit')); ?></button>
                                                            </div>

                                                        </div>

                                                    </form>

                                                </div>

                                            </div>

                                          </div>

                                          <div id="monthly" class="container tab-pane"><br>

                                            <div class="row justify-content-center">

                                                <div class="col-lg-8">

                                                   <form action="<?php echo e(route('back.donation.donate.restr')); ?>" method="POST"
                                                    enctype="multipart/form-data">

                                                    <?php echo csrf_field(); ?>

                                                    

                


                                                    <div class="image-show">
                
                                                        <?php $__currentLoopData = $monthly; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $month): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        
                                                        <div class="form-group">
                                                            <label for="name"><?php echo e(__('Enter Monthly Title')); ?> *</label>
                                                            <input type="text" class="form-control" name="name" id="name" value="<?php echo e($month->name); ?>">
                                                        </div>
                                                        

                                                        <div class="form-group">
                                                            <label for="name"><?php echo e(__('Enter First Amount')); ?> *</label>
                                                            <input type="text" class="form-control" name="firstamount" id="firstamount" value="<?php echo e($month->firstamount); ?>">
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="name"><?php echo e(__('Enter Second Amount')); ?> *</label>
                                                            <input type="text" class="form-control" name="secondamount" id="secondamount" value="<?php echo e($month->secondamount); ?>">
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="name"><?php echo e(__('Enter Third Amount')); ?> *</label>
                                                            <input type="text" class="form-control" name="thirdamount" id="thirdamount" value="<?php echo e($month->thirdamount); ?>">
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="name"><?php echo e(__('Enter Fourth Amount')); ?> *</label>
                                                            <input type="text" class="form-control" name="fourthamount" id="fourthamount" value="<?php echo e($month->fourthamount); ?>">
                                                        </div>

                                                        <input type="hidden" name="type" value="monthly">

                                                    </div>

                                                        <div>

                                                            <div class="form-group d-flex justify-content-center">
                                                                <button type="submit" class="btn btn-secondary "><?php echo e(__('Submit')); ?></button>
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

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nzocgvvlkplb/public_html/auroraexperiences.gigvie.com/resources/views/back/donation/donate.blade.php ENDPATH**/ ?>
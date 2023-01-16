<?php $__env->startSection('content'); ?>

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
                <?php
                $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


                if (strpos($url,'7') !== false) {
                ?>
                
                <h3 class="mb-0 bc-title dash-title"><b><?php echo e(__('About Page')); ?></b></h3>
                
                <?php    
                } else {
                ?>
                   
                <h3 class="mb-0 bc-title dash-title"><b><?php echo e(__('Update Page')); ?></b></h3>
                
                <?php 
                }
                ?>
                <a class="btn btn-primary  btn-sm addBtn" href="<?php echo e(route('back.page.index')); ?>"><i class="fas fa-chevron-left"></i> <?php echo e(__('Back')); ?></a>
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
								<form class="admin-form" action="<?php echo e(route('back.page.update',$page->id)); ?>"
									method="POST" enctype="multipart/form-data">

                                    <?php echo csrf_field(); ?>

                                    <?php echo method_field('PUT'); ?>

									<?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

									<div class="form-group">
										<label for="title"><?php echo e(__('Title')); ?> *</label>
										<input type="text" name="title" class="form-control" id="title"
											placeholder="<?php echo e(__('Enter Title')); ?>" value="<?php echo e($page->title); ?>" required>
									</div>


									<div class="form-group">
										<label for="slug"><?php echo e(__('Slug')); ?> *</label>
										<input type="text" name="slug" class="form-control" id="slug"
											placeholder="<?php echo e(__('Enter Slug')); ?>" value="<?php echo e($page->slug); ?>" required>
									</div>

									<div class="form-group">
										<label for="details"><?php echo e(__('Details')); ?> *</label>
										<textarea name="details" id="details" class="form-control text-editor" rows="5"
											placeholder="<?php echo e(__('Enter Details')); ?>"
											required><?php echo e($page->details); ?></textarea>
									</div>

									<div class="form-group">
										<label for="meta_keywords"><?php echo e(__('Meta Keywords')); ?>

											</label>
										<input type="text" name="meta_keywords" class="form-control tags"
											id="meta_keywords"
											placeholder="<?php echo e(__('Enter Meta Keywords')); ?>"
											value="<?php echo e($page->meta_keywords); ?>">
									</div>

									<div class="form-group">
										<label
											for="meta_description"><?php echo e(__('Meta Description')); ?>

											</label>
										<textarea name="meta_descriptions" id="meta_descriptions"
											class="form-control" rows="5"
											placeholder="<?php echo e(__('Enter Meta Description')); ?>"
										><?php echo e($page->meta_descriptions); ?></textarea>
									</div>
									
									
									<?php
                                    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


                                    if (strpos($url,'7') !== false) {
                                    ?>   
                                       
                                    
                                    <div class="form-group pb-0  mb-0">
                                        <label class="d-block"><?php echo e(__('About Image')); ?> *</label>
                                    </div>
                                    <div class="form-group pb-0 pt-0 mt-0 mb-0">
                                    <img class="admin-img lg" src="" >
                                    </div>
                                    <div class="form-group position-relative ">
                                        <label class="file">
                                            <input type="file"  accept="image/*"   class="upload-photo" name="photo"
                                                id="file"  aria-label="File browser example">
                                            <span
                                                class="file-custom text-left"><?php echo e(__('Upload Image...')); ?></span>
                                        </label>
                                        <br>
                                        <span class="mt-1 text-info"><?php echo e(__('Image Size Should Be 800 x 800. or square size')); ?></span>
                                    </div>
									
									
									<div class="form-group">
                                        <label for="video"><?php echo e(__('Video Link')); ?> </label>
                                        <input type="text" name="video" class="form-control"
                                            id="video" placeholder="<?php echo e(__('Enter Video Link')); ?>"
                                            value="<?php echo e(old('video')); ?>">
                                    </div>   
                                       
                                    <?php    
                                    } else {
                                       
                                    }
                                    ?>
									
									
									


									<div class="form-group text-center">
										<button type="submit" class="btn btn-secondary submitBtn"><?php echo e(__('Submit')); ?></button>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nzocgvvlkplb/public_html/auroraexperiences.gigvie.com/resources/views/back/page/edit.blade.php ENDPATH**/ ?>
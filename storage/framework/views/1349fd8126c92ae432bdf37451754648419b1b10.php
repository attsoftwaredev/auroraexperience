<?php $__env->startSection('content'); ?>

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
                <h3 class=" mb-0 bc-title dash-title"><b><?php echo e(__('Create Blog')); ?></b> </h3>
                <a class="btn btn-primary btn-sm addBtn" href="<?php echo e(route('back.post.index')); ?>"><i class="fas fa-chevron-left"></i> <?php echo e(__('Back')); ?></a>
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
								<form class="admin-form" action="<?php echo e(route('back.post.store')); ?>" method="POST"
									enctype="multipart/form-data">

                                    <?php echo csrf_field(); ?>

									<?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

									<div class="form-group">
										<label for="name"><?php echo e(__('Set Image')); ?> *</label>
										<br>
											<img class="admin-img" src="<?php echo e(asset('public/assets/images/placeholder.png')); ?>"
												alt="No Image Found">
										<br>
										<span class="mt-1"><?php echo e(__('Image Size Should Be 708 x 277.')); ?></span>
									</div>

									<div class="form-group position-relative ">
										<label class="file">
											<input type="file"  accept="image/*"  class="upload-photo" name="photo[]" multiple id="file"
												aria-label="File browser example" >
											<span class="file-custom text-left"><?php echo e(__('Upload Image...')); ?></span>
										</label>
									</div>
									<div class="form-group">
										<label for="title"><?php echo e(__('Title')); ?> *</label>
										<input type="text" name="title" class="form-control" id="title"
											placeholder="<?php echo e(__('Enter Title')); ?>" value="<?php echo e(old('title')); ?>" >
									</div>

									<div class="form-group">
										<label for="category_id"><?php echo e(__('Select Category')); ?> *</label>
										<select name="category_id" id="category_id" class="form-control" >
											<option value="" selected disabled><?php echo e(__('Select Category')); ?></option>
											<?php $__currentLoopData = DB::table('bcategories')->whereStatus(1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
									</div>

									<div class="form-group">
										<label for="details"><?php echo e(__('Details')); ?> *</label>
										<textarea name="details" id="details" class="form-control text-editor" rows="5"
											placeholder="<?php echo e(__('Enter Details')); ?>"
											><?php echo e(old('details')); ?></textarea>
									</div>

									<div class="form-group">
										<label for="tags"><?php echo e(__('Tags')); ?>

											</label>
										<input type="text" name="tags" class="tags"
											id="tags"
											placeholder="<?php echo e(__('Tags')); ?>"
											value="">
									</div>

                                    <div class="form-group">
                                        <label for="meta_keywords"><?php echo e(__('Meta Keywords')); ?>

                                            </label>
                                        <input type="text" name="meta_keywords" class="tags"
                                            id="meta_keywords"
                                            placeholder="<?php echo e(__('Enter Meta Keywords')); ?>"
                                            value="">
                                    </div>

                                    <div class="form-group">
                                        <label
                                            for="meta_description"><?php echo e(__('Meta Description')); ?>

                                            </label>
                                        <textarea name="meta_descriptions" id="meta_description"
                                            class="form-control" rows="5"
                                            placeholder="<?php echo e(__('Enter Meta Description')); ?>"
                                        ></textarea>
                                    </div>

								    <div class="form-group">
										<button type="submit"
											class="btn btn-secondary submitBtn"><?php echo e(__('Submit')); ?></button>
									</div>

								</form>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nzocgvvlkplb/public_html/auroraexperiences.gigvie.com/resources/views/back/post/create.blade.php ENDPATH**/ ?>
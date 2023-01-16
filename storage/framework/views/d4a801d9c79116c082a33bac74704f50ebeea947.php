<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/back/js/plugin/codemirror/codemirror.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/back/js/plugin/codemirror/monokai.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<style>
body
{
  font-family: 'IBM Plex Sans', sans-serif;  
}
h3.dash-title {
    font-size: 18px;
    color: #000;
    font-family: 'IBM Plex Sans', sans-serif;
}
.nav-pills.nav-secondary .nav-link:hover {
    background: #6c5ffc33;
}
.nav-pills.nav-secondary .nav-link.active {
    background: #6c5ffc;
    border: 0px;
}
.nav-pills.nav-secondary .nav-link
{
    font-family: 'IBM Plex Sans', sans-serif; 
}
.submitBtn {
    background: #6c5ffc !important;
    padding: 5px 20px;
    font-weight: 600;
    font-size: 12px;
}
</style>


<div class="container-fluid">

	<!-- Page Heading -->
    <div class="mb-4">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title dash-title"><b><?php echo e(__('Basic Information')); ?></b></h3>

                </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

	<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12">

			<div class="card o-hidden border-0 shadow-lg">
				<div class="card-body ">
					<!-- Nested Row within Card Body -->
                        <form class="admin-form" action="<?php echo e(route('back.setting.update')); ?>" method="POST"
									enctype="multipart/form-data">

                                    <?php echo csrf_field(); ?>


					        <div class="row">
                                <div class="col-xl-3 col-lg-3">
                                    <div class="nav flex-column m-3 nav-pills nav-secondary" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" data-toggle="pill" href="#basic"><?php echo e(__('Basic Information')); ?></a>
                                
                                            <a class="nav-link" data-toggle="pill" href="#media"><?php echo e(__('Media')); ?></a>
                                            <a class="nav-link" data-toggle="pill" href="#seo"><?php echo e(__('Seo')); ?></a>
                                            <a class="nav-link" data-toggle="pill" href="#links"><?php echo e(__('Menu')); ?></a>
                                            <a class="nav-link" data-toggle="pill" href="#custom_css" id="newcss"><?php echo e(__('Custom Css')); ?></a>
                                            <a class="nav-link" data-toggle="pill" href="#google_recaptcha"><?php echo e(__('Scripts')); ?></a>
                                            <a class="nav-link" data-toggle="pill" href="#shop"><?php echo e(__('Shop & Checkout Page')); ?></a>
                                            <a class="nav-link" data-toggle="pill" href="#footer"><?php echo e(__('Footer & Contact Page')); ?></a>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-9">


                                        <input type="hidden" name="is_validate" value="1">

                                        <div class="">
                                            <div id="tabs">
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                            <div id="basic" class="tab-pane active"><br>
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-11">
                                                        <div class="form-group">
                                                            <label for="title"><?php echo e(__('Web Name')); ?> *</label>
                                                            <input type="text" name="title" class="form-control" id="title"
                                                                placeholder="<?php echo e(__('Enter Website Title')); ?>" value="<?php echo e($setting->title); ?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-11">
                                                        <div class="form-group">
                                                            <label for="home_page_title"><?php echo e(__('Home Page Title')); ?> *</label>
                                                            <input type="text" name="home_page_title" class="form-control" id="home_page_title"
                                                                placeholder="<?php echo e(__('Enter Home Page Title')); ?>" value="<?php echo e($setting->home_page_title); ?>" >
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-11">
                                                        <div class="form-group">
                                                            <label for="primary_color"><?php echo e(__('Primary Colour Code')); ?> *</label>
                                                            <input type="text" data-jscolor="" name="primary_color" class="form-control" id="primary_color"
                                                                placeholder="<?php echo e(__('Enter Website Primary Colour Code')); ?>" value="<?php echo e($setting->primary_color); ?>" >
                                                        </div>
                                                    </div>

                                                    

                                                    <div class="col-lg-11">
                                                        <div class="form-group">
                                                            <label for="currency_direction"><?php echo e(__('Currency Direction')); ?> *</label>
                                                            <select name="currency_direction" id="currency_direction" class="form-control">
                                                                <option value="1" <?php echo e($setting->currency_direction == 1 ? 'selected' : ''); ?>><?php echo e(__('Left ($100.00)')); ?></option>
                                                                <option value="0" <?php echo e($setting->currency_direction == 0 ? 'selected' : ''); ?>><?php echo e(__('Right (100.00$)')); ?></option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    

                                                    

                                                </div>

                                            </div>

                                                

                                            <div id="media" class="tab-pane"><br>

                                                <div class="row justify-content-center">

                                                    <div class="col-lg-11">

                                                        <ul class="nav nav-pills nav-justified nav-secondary nav-pills-no-bd">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="pill" href="#logo"><?php echo e(__('Logo')); ?></a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="pill" href="#favicon"><?php echo e(__('Favicon')); ?></a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="pill" href="#loader"><?php echo e(__('Loader')); ?></a>
                                                            </li>
                                                        </ul>

                                                        <div class="tab-content">

                                                            <div id="logo" class="container tab-pane active"><br>
                                                            <div class="row justify-content-center">

                                                                <div class="col-lg-12 ">

                                                                    <div class="form-group">
                                                                        <label for="name"><?php echo e(__('Light Logo')); ?></label>
                                                                        <div class="col-lg-12 pb-1">
                                                                            <img class="admin-setting-img"
                                                                                src="<?php echo e($setting->logo ? asset('public/assets/images/'.$setting->logo) : asset('public/assets/images/placeholder.png')); ?>"
                                                                                alt="No Image Found">
                                                                        </div>
                                                                        <span><?php echo e(__('Image Size Should Be 140 x 40.')); ?></span>
                                                                    </div>

                                                                    <div class="form-group position-relative ">
                                                                        <label class="file">
                                                                            <input type="file"  accept="image/*"  class="upload-photo" name="logo" id="file" aria-label="File browser example">
                                                                            <span class="file-custom text-left"><?php echo e(__('Upload Image...')); ?></span>
                                                                        </label>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                            
                                        
                                        
                                        
                                        <div class="row justify-content-center">

                                                                <div class="col-lg-12 ">

                                                                    <div class="form-group">
                                                                        <label for="name"><?php echo e(__('Dark Logo')); ?></label>
                                                                        <div class="col-lg-12 pb-1">
                                                                            <img class="admin-setting-img"
                                                                                src="<?php echo e($setting->dark_logo ? asset('public/assets/images/'.$setting->dark_logo) : asset('public/assets/images/placeholder.png')); ?>"
                                                                                alt="No Image Found">
                                                                        </div>
                                                                        <span><?php echo e(__('Image Size Should Be 140 x 40.')); ?></span>
                                                                    </div>

                                                                    <div class="form-group position-relative ">
                                                                        <label class="file">
                                                                            <input type="file"  accept="image/*"  class="upload-photo" name="dark_logo" id="file" aria-label="File browser example">
                                                                            <span class="file-custom text-left"><?php echo e(__('Upload Image...')); ?></span>
                                                                        </label>
                                                                    </div>

                                                                </div>

                                                            </div>                    
                                        
                                        
                                        
                                                            
                                                            </div>

                                                            <div id="favicon" class="container tab-pane"><br>
                                                                <div class="row justify-content-center">

                                                                    <div class="col-lg-12">

                                                                        <div class="form-group">
                                                                            <label for="name"><?php echo e(__('Current Image')); ?></label>
                                                                            <div class="col-lg-12 pb-1">
                                                                                <img class="admin-setting-img my-mw-100"
                                                                                    src="<?php echo e($setting->favicon ? asset('public/assets/images/'.$setting->favicon) : asset('public/assets/images/placeholder.png')); ?>"
                                                                                    alt="No Image Found">
                                                                            </div>
                                                                            <span><?php echo e(__('Image Size Should Be 16 x 16.')); ?></span>
                                                                        </div>

                                                                        <div class="form-group position-relative ">
                                                                            <label class="file">
                                                                                <input type="file"  accept="image/*"  class="upload-photo" name="favicon" id="file" aria-label="File browser example">
                                                                                <span class="file-custom text-left"><?php echo e(__('Upload Image...')); ?></span>
                                                                            </label>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div id="loader" class="container tab-pane"><br>
                                                                <div class="row justify-content-center">

                                                                    <div class="col-lg-12">
                                                                        <div class="form-group">
                                                                            <label class="switch-primary">
                                                                            <input type="checkbox" class="switch switch-bootstrap " name="is_loader" value="1" <?php echo e($setting->is_loader == 1 ? 'checked' : ''); ?>>
                                                                            <span class="switch-body"></span>
                                                                            <span class="switch-text"><?php echo e(__('Display Loader')); ?></span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="name"><?php echo e(__('Current Image')); ?></label>
                                                                            <div class="col-lg-12 pb-1">
                                                                                <img class="admin-setting-img my-mw-100"
                                                                                    src="<?php echo e($setting->loader ? asset('public/assets/images/'.$setting->loader) : asset('public/assets/images/placeholder.png')); ?>"
                                                                                    alt="No Image Found">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group position-relative ">
                                                                            <label class="file">
                                                                                <input type="file"  accept="image/*"  class="upload-photo" name="loader" id="file" aria-label="File browser example">
                                                                                <span class="file-custom text-left"><?php echo e(__('Upload Image...')); ?></span>
                                                                            </label>
                                                                        </div>



                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div id="seo" class="tab-pane"><br>

                                                    <div class="row justify-content-center">

                                                        <div class="col-lg-11">



                                                            <div class="form-group">
                                                                <label for="meta_keywords"><?php echo e(__('Site Meta Keywords')); ?> *</label>
                                                                <input type="text" name="meta_keywords" class="tags" id="meta_keywords"
                                                                    placeholder="<?php echo e(__('Site Meta Keywords')); ?>" value="<?php echo e($setting->meta_keywords); ?>" >
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="meta_description"><?php echo e(__('Site Meta Description')); ?> *</label>
                                                                <textarea name="meta_description" id="meta_description" class="form-control" rows="5"
                                                                    placeholder="<?php echo e(__('Enter Site Meta Description')); ?>"
                                                                    ><?php echo e($setting->meta_description); ?></textarea>
                                                            </div>

                                                        </div>

                                                    </div>

                                            </div>

                                            <div id="custom_css" class="tab-pane">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-11">
                                                        <div class="form-group">
                                                            <label><?php echo e(__('Custom Css')); ?> *</label>
                                                            <textarea name="custom_css"  class="form-control" id="custom_css_area" placeholder="<?php echo e(__('Custom Css')); ?>"><?php echo e($setting->custom_css); ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="links" class="tab-pane"><br>

                                                <div class="row justify-content-center">

                                                    <div class="col-lg-6 offset-lg-3">
                                                        <div class="form-group">
                                                            <label class="switch-primary">
                                                            <input type="checkbox" class="switch switch-bootstrap status" name="is_shop" value="1" <?php echo e($setting->is_shop == 1 ? 'checked' : ''); ?>>
                                                            <span class="switch-body"></span>
                                                            <span class="switch-text"><?php echo e(__('Display Shop')); ?></span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 offset-lg-3">
                                                        <div class="form-group">
                                                            <label class="switch-primary">
                                                            <input type="checkbox" class="switch switch-bootstrap status" name="is_blog" value="1" <?php echo e($setting->is_blog == 1 ? 'checked' : ''); ?>>
                                                            <span class="switch-body"></span>
                                                            <span class="switch-text"><?php echo e(__('Display Blog')); ?></span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 offset-lg-3">
                                                        <div class="form-group">
                                                            <label class="switch-primary">
                                                            <input type="checkbox" class="switch switch-bootstrap status" name="is_faq" value="1" <?php echo e($setting->is_faq == 1 ? 'checked' : ''); ?>>
                                                            <span class="switch-body"></span>
                                                            <span class="switch-text"><?php echo e(__('Display Faq')); ?></span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 offset-lg-3">
                                                        <div class="form-group">
                                                            <label class="switch-primary">
                                                            <input type="checkbox" class="switch switch-bootstrap status" name="is_contact" value="1" <?php echo e($setting->is_contact == 1 ? 'checked' : ''); ?>>
                                                            <span class="switch-body"></span>
                                                            <span class="switch-text"><?php echo e(__('Display Contact')); ?></span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <div id="footer" class="tab-pane"><br>

                                                <div class="row justify-content-center">

                                                    <div class="col-lg-11">

                                                        <ul class="nav nav-pills nav-justified nav-secondary nav-pills-no-bd">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="pill" href="#footer_basic"><?php echo e(__('Basic')); ?></a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="pill" href="#footer_link"><?php echo e(__('Social Link')); ?></a>
                                                            </li>
                                                            <!-----<li class="nav-item">
                                                                <a class="nav-link" data-toggle="pill" href="#working_days"><?php echo e(__('Working Days')); ?></a>
                                                            </li>--->
                                                        </ul>

                                                        <div class="tab-content">

                                                            <div id="footer_basic" class="container tab-pane active"><br>
                                                            <div class="row justify-content-center">

                                                                <div class="col-lg-12">

                                                                        <div class="form-group">
                                                                            <label for="footer_address"><?php echo e(__('Store Address')); ?> *</label>
                                                                            <input type="text" name="footer_address" class="form-control" id="footer_address"
                                                                                placeholder="<?php echo e(__('Store Address')); ?>" value="<?php echo e($setting->footer_address); ?>" >
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="footer_phone"><?php echo e(__('Store Phone Number')); ?> *</label>
                                                                            <input type="text" name="footer_phone" class="form-control" id="footer_phone"
                                                                                placeholder="<?php echo e(__('Store Phone Number')); ?>" value="<?php echo e($setting->footer_phone); ?>" >
                                                                        </div>


                                                                        <div class="form-group">
                                                                            <label for="footer_email"><?php echo e(__('Store Email')); ?> *</label>
                                                                            <input type="email" name="footer_email" class="form-control" id="footer_email"
                                                                                placeholder="<?php echo e(__('Store Email')); ?>" value="<?php echo e($setting->footer_email); ?>" >
                                                                        </div>

                                                                    <div class="form-group">
                                                                        <label for="footer_gateway_img"><?php echo e(__('Current Gateway Image')); ?></label>
                                                                        <div class="col-lg-12 pb-1">
                                                                            <img class="admin-setting-img"
                                                                                src="<?php echo e($setting->footer_gateway_img ? asset('public/assets/images/'.$setting->footer_gateway_img) : asset('public/assets/images/placeholder.png')); ?>"
                                                                                alt="No Image Found">
                                                                        </div>
                                                                        <span><?php echo e(__('Image Size Should Be 324 x 31.')); ?></span>
                                                                    </div>

                                                                    <div class="form-group position-relative ">
                                                                        <label class="file">
                                                                            <input type="file"  accept="image/*"  class="upload-photo" name="footer_gateway_img" id="footer_gateway_img" aria-label="File browser example">
                                                                            <span class="file-custom text-left"><?php echo e(__('Upload Image...')); ?></span>
                                                                        </label>
                                                                    </div>

                                                                        <div class="form-group">
                                                                            <label for="copy_right"><?php echo e(__('Copyright')); ?> *</label>
                                                                            <textarea name="copy_right" id="copy_right" class="form-control" rows="3"
                                                                            placeholder="<?php echo e(__('Copyright')); ?>"
                                                                            ><?php echo e($setting->copy_right); ?></textarea>
                                                                        </div>


                                                                </div>

                                                            </div>
                                                            </div>

                                                            <div id="footer_link" class="container tab-pane"><br>
                                                                <div class="row justify-content-center">

                                                                    <div class="col-lg-12">
                                                                        <div id="social-section">
                                                                            <?php
                                                                            $links = json_decode($setting->social_link,true)['links'];
                                                                            $icons = json_decode($setting->social_link,true)['icons'];
                                                                            ?>
                                                                            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link_key => $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <div class="d-flex">
                                                                                <div>
                                                                                    <div class="form-group">
                                                                                        <button
                                                                                            class="btn btn-secondary social-picker"
                                                                                            name="social_icons[]"
                                                                                            data-icon="<?php echo e($icons[$link_key]); ?>">
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex-grow-1">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control"
                                                                                            name="social_links[]"
                                                                                            placeholder="<?php echo e(__('Social Link')); ?>" value="<?php echo e($link); ?>">
                                                                                        </div>
                                                                                </div>
                                                                                <div class="flex-btn">
                                                                                    <button type="button" class="btn btn-success add-social" data-text="<?php echo e(__('Social Link')); ?>"> <i class="fa fa-plus"></i> </button>
                                                                                </div>
                                                                            </div>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <!----<div id="working_days" class="container tab-pane"><br>
                                                                <div class="row justify-content-center">

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="friday_start"><?php echo e(__('Monday-Friday from')); ?> *</label>
                                                                                <input type="text" name="friday_start" class="form-control timepicker" id="friday_start"
                                                                                    placeholder="<?php echo e(__('Monday-Friday from')); ?>" value="<?php echo e($setting->friday_start); ?>" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="friday_end"><?php echo e(__('Till')); ?> *</label>
                                                                                <input type="text" name="friday_end" class="form-control timepicker" id="friday_end"
                                                                                    placeholder="<?php echo e(__('Till')); ?>" value="<?php echo e($setting->friday_end); ?>" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="satureday_start"><?php echo e(__('Saturday-Sunday from')); ?> *</label>
                                                                                <input type="text" name="satureday_start" class="form-control timepicker" id="satureday_start"
                                                                                    placeholder="<?php echo e(__('Saturday-Sunday from')); ?>" value="<?php echo e($setting->satureday_start); ?>" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="satureday_end"><?php echo e(__('Till')); ?> *</label>
                                                                                <input type="text" name="satureday_end" class="form-control timepicker" id="satureday_end"
                                                                                    placeholder="<?php echo e(__('Till')); ?>" value="<?php echo e($setting->satureday_end); ?>" >
                                                                            </div>
                                                                        </div>

                                                                </div>
                                                            </div>---->
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>


                                            <div id="google_recaptcha" class="tab-pane"><br>
                                                <div class="row justify-content-center">

                                                    <div class="col-lg-11">

                                                        <div class="form-group">
                                                            <label class="switch-primary">
                                                            <input type="checkbox" class="switch switch-bootstrap status" name="is_google_analytics"  value="1" <?php echo e($setting->is_google_analytics == 1 ? 'checked' : ''); ?>>
                                                            <span class="switch-body"></span>
                                                            <span class="switch-text"><?php echo e(__('Enable Google Analytics')); ?></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label ><?php echo e(__('Google Analytics')); ?> *</label>
                                                            <textarea name="google_analytics" class="form-control" id="" placeholder="<?php echo e(__('Google Analytics')); ?>"><?php echo e($setting->google_analytics); ?></textarea>
                                                        </div>

                                                        <hr>

                                                        

                                                        <div class="form-group">
                                                            <label class="switch-primary">
                                                            <input type="checkbox" class="switch switch-bootstrap status" name="recaptcha" value="1" <?php echo e($setting->recaptcha == 1 ? 'checked' : ''); ?>>
                                                            <span class="switch-body"></span>
                                                            <span class="switch-text"><?php echo e(__('Display Google Recaptcha')); ?></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="google_recaptcha_site_key"><?php echo e(__('Google Rechaptcha Site Key')); ?> *</label>
                                                            <input type="text" name="google_recaptcha_site_key" class="form-control" id="google_recaptcha_site_key"
                                                                placeholder="<?php echo e(__('Google Rechaptcha Site Key')); ?>" value="<?php echo e($setting->google_recaptcha_site_key); ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="google_recaptcha_secret_key"><?php echo e(__('Google Rechaptcha Secret Key')); ?></label>
                                                            <input type="text" name="google_recaptcha_secret_key" class="form-control" id="google_recaptcha_secret_key"
                                                                placeholder="<?php echo e(__('Google Rechaptcha Secret Key')); ?>" value="<?php echo e($setting->google_recaptcha_secret_key); ?>" >
                                                        </div>


                                                        <hr>



                                                        <div class="form-group">
                                                            <label class="switch-primary">
                                                            <input type="checkbox" class="switch switch-bootstrap status" name="is_facebook_pixel" value="1" <?php echo e($setting->is_facebook_pixel == 1 ? 'checked' : ''); ?>>
                                                            <span class="switch-body"></span>
                                                            <span class="switch-text"><?php echo e(__('Display Facebook Pixel')); ?></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><?php echo e(__('Facebook Pixel')); ?> *</label>
                                                            <textarea name="facebook_pixel" class="form-control" id="" placeholder="<?php echo e(__('Facebook Pixel')); ?>"><?php echo e($setting->facebook_pixel); ?></textarea>
                                                        </div>


                                                        

                                                       

                                                    </div>

                                                </div>
                                            </div>



                                            <div id="shop" class="tab-pane"><br>
                                                <div class="row justify-content-center">

                                                    <div class="col-lg-11">
                                                        <div class="form-group">
                                                            <label class="switch-primary">
                                                            <input type="checkbox" class="switch switch-bootstrap status" name="is_attribute_search"  value="1" <?php echo e($setting->is_attribute_search == 1 ? 'checked' : ''); ?>>
                                                            <span class="switch-body"></span>
                                                            <span class="switch-text"><?php echo e(__('Enable Filter By Attribute & Attribute Options')); ?></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="switch-primary">
                                                            <input type="checkbox" class="switch switch-bootstrap status" name="is_range_search"  value="1" <?php echo e($setting->is_range_search == 1 ? 'checked' : ''); ?>>
                                                            <span class="switch-body"></span>
                                                            <span class="switch-text"><?php echo e(__('Enable Filter By Price Range')); ?></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="view_product"><?php echo e(__('View Product')); ?> *</label>
                                                            <input type="text" name="view_product" class="form-control" id="view_product"
                                                                placeholder="<?php echo e(__('View Product')); ?>" value="<?php echo e($setting->view_product); ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="max_price"><?php echo e(__('Price Range Max')); ?> *</label>
                                                            <input type="text" name="max_price" class="form-control" id="max_price"
                                                                placeholder="<?php echo e(__('Price Range Max')); ?>" value="<?php echo e($setting->max_price); ?>" >
                                                        </div>

                                                        <hr>

                                                        <div class="form-group">
                                                            <label class="switch-primary">
                                                            <input type="checkbox" class="switch switch-bootstrap status" name="is_guest_checkout"  value="1" <?php echo e($setting->is_guest_checkout == 1 ? 'checked' : ''); ?>>
                                                            <span class="switch-body"></span>
                                                            <span class="switch-text"><?php echo e(__('Enable Guest Checkout')); ?></span>
                                                            </label>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="switch-primary">
                                                            <input type="checkbox" class="switch switch-bootstrap status" name="is_privacy_trams"  value="1" <?php echo e($setting->is_privacy_trams == 1 ? 'checked' : ''); ?>>
                                                            <span class="switch-body"></span>
                                                            <span class="switch-text"><?php echo e(__('Enable Privacy & Terms Conditions')); ?></span>
                                                            </label>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="policy_link"><?php echo e(__('Privacy Policy Link')); ?> *</label>
                                                            <input type="text" name="policy_link" class="form-control" id="policy_link"
                                                                placeholder="<?php echo e(__('Privacy Policy')); ?>" value="<?php echo e($setting->policy_link); ?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="terms_link"><?php echo e(__('Terms of Service Link')); ?> *</label>
                                                            <input type="text" name="terms_link" class="form-control" id="terms_link"
                                                                placeholder="<?php echo e(__('Terms of Service')); ?>" value="<?php echo e($setting->terms_link); ?>" >
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>



                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-11 form-group d-flex justify-content-end">
                                        <button type="submit" class="btn btn-secondary submitBtn"><?php echo e(__('Submit')); ?></button>
                                    </div>


                                </div>
						    </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('public/assets/back/js/plugin/codemirror/codemirror.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/back/js/plugin/codemirror/css.js')); ?>"></script>
    <script>

        $(document).ready(function () {
            var editor = CodeMirror.fromTextArea(document.getElementById("custom_css_area"), {
                mode: "text/css",
                matchBrackets: true,
                theme: "monokai"
            });
        });
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('master.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nzocgvvlkplb/public_html/auroraexperiences.gigvie.com/resources/views/back/settings/system.blade.php ENDPATH**/ ?>
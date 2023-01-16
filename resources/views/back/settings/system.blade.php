@extends('master.back')

@section('styles')
    <link rel="stylesheet" href="{{asset('public/assets/back/js/plugin/codemirror/codemirror.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/back/js/plugin/codemirror/monokai.css')}}">
@endsection


@section('content')

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
                <h3 class="mb-0 bc-title dash-title"><b>{{ __('Basic Information') }}</b></h3>

                </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            @include('alerts.alerts')
        </div>
    </div>

	<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12">

			<div class="card o-hidden border-0 shadow-lg">
				<div class="card-body ">
					<!-- Nested Row within Card Body -->
                        <form class="admin-form" action="{{ route('back.setting.update') }}" method="POST"
									enctype="multipart/form-data">

                                    @csrf


					        <div class="row">
                                <div class="col-xl-3 col-lg-3">
                                    <div class="nav flex-column m-3 nav-pills nav-secondary" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" data-toggle="pill" href="#basic">{{ __('Basic Information') }}</a>
                                
                                            <a class="nav-link" data-toggle="pill" href="#media">{{ __('Media') }}</a>
                                            <a class="nav-link" data-toggle="pill" href="#seo">{{ __('Seo') }}</a>
                                            <a class="nav-link" data-toggle="pill" href="#links">{{ __('Menu') }}</a>
                                            <a class="nav-link" data-toggle="pill" href="#custom_css" id="newcss">{{ __('Custom Css') }}</a>
                                            <a class="nav-link" data-toggle="pill" href="#google_recaptcha">{{ __('Scripts') }}</a>
                                            <a class="nav-link" data-toggle="pill" href="#shop">{{ __('Shop & Checkout Page') }}</a>
                                            <a class="nav-link" data-toggle="pill" href="#footer">{{ __('Footer & Contact Page') }}</a>
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
                                                            <label for="title">{{ __('Web Name') }} *</label>
                                                            <input type="text" name="title" class="form-control" id="title"
                                                                placeholder="{{ __('Enter Website Title') }}" value="{{ $setting->title }}" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-11">
                                                        <div class="form-group">
                                                            <label for="home_page_title">{{ __('Home Page Title') }} *</label>
                                                            <input type="text" name="home_page_title" class="form-control" id="home_page_title"
                                                                placeholder="{{ __('Enter Home Page Title') }}" value="{{ $setting->home_page_title }}" >
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-11">
                                                        <div class="form-group">
                                                            <label for="primary_color">{{ __('Primary Colour Code') }} *</label>
                                                            <input type="text" data-jscolor="" name="primary_color" class="form-control" id="primary_color"
                                                                placeholder="{{ __('Enter Website Primary Colour Code') }}" value="{{ $setting->primary_color }}" >
                                                        </div>
                                                    </div>

                                                    

                                                    <div class="col-lg-11">
                                                        <div class="form-group">
                                                            <label for="currency_direction">{{ __('Currency Direction') }} *</label>
                                                            <select name="currency_direction" id="currency_direction" class="form-control">
                                                                <option value="1" {{$setting->currency_direction == 1 ? 'selected' : ''}}>{{__('Left ($100.00)')}}</option>
                                                                <option value="0" {{$setting->currency_direction == 0 ? 'selected' : ''}}>{{__('Right (100.00$)')}}</option>
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
                                                                <a class="nav-link active" data-toggle="pill" href="#logo">{{ __('Logo') }}</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="pill" href="#favicon">{{ __('Favicon') }}</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="pill" href="#loader">{{ __('Loader') }}</a>
                                                            </li>
                                                        </ul>

                                                        <div class="tab-content">

                                                            <div id="logo" class="container tab-pane active"><br>
                                                            <div class="row justify-content-center">

                                                                <div class="col-lg-12 ">

                                                                    <div class="form-group">
                                                                        <label for="name">{{ __('Light Logo') }}</label>
                                                                        <div class="col-lg-12 pb-1">
                                                                            <img class="admin-setting-img"
                                                                                src="{{ $setting->logo ? asset('public/assets/images/'.$setting->logo) : asset('public/assets/images/placeholder.png') }}"
                                                                                alt="No Image Found">
                                                                        </div>
                                                                        <span>{{ __('Image Size Should Be 140 x 40.') }}</span>
                                                                    </div>

                                                                    <div class="form-group position-relative ">
                                                                        <label class="file">
                                                                            <input type="file"  accept="image/*"  class="upload-photo" name="logo" id="file" aria-label="File browser example">
                                                                            <span class="file-custom text-left">{{ __('Upload Image...') }}</span>
                                                                        </label>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                            
                                        
                                        
                                        
                                        <div class="row justify-content-center">

                                                                <div class="col-lg-12 ">

                                                                    <div class="form-group">
                                                                        <label for="name">{{ __('Dark Logo') }}</label>
                                                                        <div class="col-lg-12 pb-1">
                                                                            <img class="admin-setting-img"
                                                                                src="{{ $setting->dark_logo ? asset('public/assets/images/'.$setting->dark_logo) : asset('public/assets/images/placeholder.png') }}"
                                                                                alt="No Image Found">
                                                                        </div>
                                                                        <span>{{ __('Image Size Should Be 140 x 40.') }}</span>
                                                                    </div>

                                                                    <div class="form-group position-relative ">
                                                                        <label class="file">
                                                                            <input type="file"  accept="image/*"  class="upload-photo" name="dark_logo" id="file" aria-label="File browser example">
                                                                            <span class="file-custom text-left">{{ __('Upload Image...') }}</span>
                                                                        </label>
                                                                    </div>

                                                                </div>

                                                            </div>                    
                                        
                                        
                                        
                                                            
                                                            </div>

                                                            <div id="favicon" class="container tab-pane"><br>
                                                                <div class="row justify-content-center">

                                                                    <div class="col-lg-12">

                                                                        <div class="form-group">
                                                                            <label for="name">{{ __('Current Image') }}</label>
                                                                            <div class="col-lg-12 pb-1">
                                                                                <img class="admin-setting-img my-mw-100"
                                                                                    src="{{ $setting->favicon ? asset('public/assets/images/'.$setting->favicon) : asset('public/assets/images/placeholder.png') }}"
                                                                                    alt="No Image Found">
                                                                            </div>
                                                                            <span>{{ __('Image Size Should Be 16 x 16.') }}</span>
                                                                        </div>

                                                                        <div class="form-group position-relative ">
                                                                            <label class="file">
                                                                                <input type="file"  accept="image/*"  class="upload-photo" name="favicon" id="file" aria-label="File browser example">
                                                                                <span class="file-custom text-left">{{ __('Upload Image...') }}</span>
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
                                                                            <input type="checkbox" class="switch switch-bootstrap " name="is_loader" value="1" {{ $setting->is_loader == 1 ? 'checked' : '' }}>
                                                                            <span class="switch-body"></span>
                                                                            <span class="switch-text">{{ __('Display Loader') }}</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="name">{{ __('Current Image') }}</label>
                                                                            <div class="col-lg-12 pb-1">
                                                                                <img class="admin-setting-img my-mw-100"
                                                                                    src="{{ $setting->loader ? asset('public/assets/images/'.$setting->loader) : asset('public/assets/images/placeholder.png') }}"
                                                                                    alt="No Image Found">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group position-relative ">
                                                                            <label class="file">
                                                                                <input type="file"  accept="image/*"  class="upload-photo" name="loader" id="file" aria-label="File browser example">
                                                                                <span class="file-custom text-left">{{ __('Upload Image...') }}</span>
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
                                                                <label for="meta_keywords">{{ __('Site Meta Keywords') }} *</label>
                                                                <input type="text" name="meta_keywords" class="tags" id="meta_keywords"
                                                                    placeholder="{{ __('Site Meta Keywords') }}" value="{{ $setting->meta_keywords }}" >
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="meta_description">{{ __('Site Meta Description') }} *</label>
                                                                <textarea name="meta_description" id="meta_description" class="form-control" rows="5"
                                                                    placeholder="{{ __('Enter Site Meta Description') }}"
                                                                    >{{ $setting->meta_description }}</textarea>
                                                            </div>

                                                        </div>

                                                    </div>

                                            </div>

                                            <div id="custom_css" class="tab-pane">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-11">
                                                        <div class="form-group">
                                                            <label>{{ __('Custom Css') }} *</label>
                                                            <textarea name="custom_css"  class="form-control" id="custom_css_area" placeholder="{{ __('Custom Css') }}">{{ $setting->custom_css }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="links" class="tab-pane"><br>

                                                <div class="row justify-content-center">

                                                    <div class="col-lg-6 offset-lg-3">
                                                        <div class="form-group">
                                                            <label class="switch-primary">
                                                            <input type="checkbox" class="switch switch-bootstrap status" name="is_shop" value="1" {{ $setting->is_shop == 1 ? 'checked' : '' }}>
                                                            <span class="switch-body"></span>
                                                            <span class="switch-text">{{ __('Display Shop') }}</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 offset-lg-3">
                                                        <div class="form-group">
                                                            <label class="switch-primary">
                                                            <input type="checkbox" class="switch switch-bootstrap status" name="is_blog" value="1" {{ $setting->is_blog == 1 ? 'checked' : '' }}>
                                                            <span class="switch-body"></span>
                                                            <span class="switch-text">{{ __('Display Blog') }}</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 offset-lg-3">
                                                        <div class="form-group">
                                                            <label class="switch-primary">
                                                            <input type="checkbox" class="switch switch-bootstrap status" name="is_faq" value="1" {{ $setting->is_faq == 1 ? 'checked' : '' }}>
                                                            <span class="switch-body"></span>
                                                            <span class="switch-text">{{ __('Display Faq') }}</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 offset-lg-3">
                                                        <div class="form-group">
                                                            <label class="switch-primary">
                                                            <input type="checkbox" class="switch switch-bootstrap status" name="is_contact" value="1" {{ $setting->is_contact == 1 ? 'checked' : '' }}>
                                                            <span class="switch-body"></span>
                                                            <span class="switch-text">{{ __('Display Contact') }}</span>
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
                                                                <a class="nav-link active" data-toggle="pill" href="#footer_basic">{{ __('Basic') }}</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="pill" href="#footer_link">{{ __('Social Link') }}</a>
                                                            </li>
                                                            <!-----<li class="nav-item">
                                                                <a class="nav-link" data-toggle="pill" href="#working_days">{{ __('Working Days') }}</a>
                                                            </li>--->
                                                        </ul>

                                                        <div class="tab-content">

                                                            <div id="footer_basic" class="container tab-pane active"><br>
                                                            <div class="row justify-content-center">

                                                                <div class="col-lg-12">

                                                                        <div class="form-group">
                                                                            <label for="footer_address">{{ __('Store Address') }} *</label>
                                                                            <input type="text" name="footer_address" class="form-control" id="footer_address"
                                                                                placeholder="{{ __('Store Address') }}" value="{{ $setting->footer_address }}" >
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="footer_phone">{{ __('Store Phone Number') }} *</label>
                                                                            <input type="text" name="footer_phone" class="form-control" id="footer_phone"
                                                                                placeholder="{{ __('Store Phone Number') }}" value="{{ $setting->footer_phone }}" >
                                                                        </div>


                                                                        <div class="form-group">
                                                                            <label for="footer_email">{{ __('Store Email') }} *</label>
                                                                            <input type="email" name="footer_email" class="form-control" id="footer_email"
                                                                                placeholder="{{ __('Store Email') }}" value="{{ $setting->footer_email }}" >
                                                                        </div>

                                                                    <div class="form-group">
                                                                        <label for="footer_gateway_img">{{ __('Current Gateway Image') }}</label>
                                                                        <div class="col-lg-12 pb-1">
                                                                            <img class="admin-setting-img"
                                                                                src="{{ $setting->footer_gateway_img ? asset('public/assets/images/'.$setting->footer_gateway_img) : asset('public/assets/images/placeholder.png') }}"
                                                                                alt="No Image Found">
                                                                        </div>
                                                                        <span>{{ __('Image Size Should Be 324 x 31.') }}</span>
                                                                    </div>

                                                                    <div class="form-group position-relative ">
                                                                        <label class="file">
                                                                            <input type="file"  accept="image/*"  class="upload-photo" name="footer_gateway_img" id="footer_gateway_img" aria-label="File browser example">
                                                                            <span class="file-custom text-left">{{ __('Upload Image...') }}</span>
                                                                        </label>
                                                                    </div>

                                                                        <div class="form-group">
                                                                            <label for="copy_right">{{ __('Copyright') }} *</label>
                                                                            <textarea name="copy_right" id="copy_right" class="form-control" rows="3"
                                                                            placeholder="{{ __('Copyright') }}"
                                                                            >{{ $setting->copy_right }}</textarea>
                                                                        </div>


                                                                </div>

                                                            </div>
                                                            </div>

                                                            <div id="footer_link" class="container tab-pane"><br>
                                                                <div class="row justify-content-center">

                                                                    <div class="col-lg-12">
                                                                        <div id="social-section">
                                                                            @php
                                                                            $links = json_decode($setting->social_link,true)['links'];
                                                                            $icons = json_decode($setting->social_link,true)['icons'];
                                                                            @endphp
                                                                            @foreach ($links as $link_key => $link)
                                                                            <div class="d-flex">
                                                                                <div>
                                                                                    <div class="form-group">
                                                                                        <button
                                                                                            class="btn btn-secondary social-picker"
                                                                                            name="social_icons[]"
                                                                                            data-icon="{{$icons[$link_key]}}">
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex-grow-1">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control"
                                                                                            name="social_links[]"
                                                                                            placeholder="{{ __('Social Link') }}" value="{{$link}}">
                                                                                        </div>
                                                                                </div>
                                                                                <div class="flex-btn">
                                                                                    <button type="button" class="btn btn-success add-social" data-text="{{ __('Social Link') }}"> <i class="fa fa-plus"></i> </button>
                                                                                </div>
                                                                            </div>
                                                                            @endforeach



                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <!----<div id="working_days" class="container tab-pane"><br>
                                                                <div class="row justify-content-center">

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="friday_start">{{ __('Monday-Friday from') }} *</label>
                                                                                <input type="text" name="friday_start" class="form-control timepicker" id="friday_start"
                                                                                    placeholder="{{ __('Monday-Friday from') }}" value="{{ $setting->friday_start }}" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="friday_end">{{ __('Till') }} *</label>
                                                                                <input type="text" name="friday_end" class="form-control timepicker" id="friday_end"
                                                                                    placeholder="{{ __('Till') }}" value="{{ $setting->friday_end }}" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="satureday_start">{{ __('Saturday-Sunday from') }} *</label>
                                                                                <input type="text" name="satureday_start" class="form-control timepicker" id="satureday_start"
                                                                                    placeholder="{{ __('Saturday-Sunday from') }}" value="{{ $setting->satureday_start }}" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="satureday_end">{{ __('Till') }} *</label>
                                                                                <input type="text" name="satureday_end" class="form-control timepicker" id="satureday_end"
                                                                                    placeholder="{{ __('Till') }}" value="{{ $setting->satureday_end }}" >
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
                                                            <input type="checkbox" class="switch switch-bootstrap status" name="is_google_analytics"  value="1" {{ $setting->is_google_analytics == 1 ? 'checked' : '' }}>
                                                            <span class="switch-body"></span>
                                                            <span class="switch-text">{{ __('Enable Google Analytics') }}</span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label >{{ __('Google Analytics') }} *</label>
                                                            <textarea name="google_analytics" class="form-control" id="" placeholder="{{ __('Google Analytics') }}">{{ $setting->google_analytics }}</textarea>
                                                        </div>

                                                        <hr>

                                                        

                                                        <div class="form-group">
                                                            <label class="switch-primary">
                                                            <input type="checkbox" class="switch switch-bootstrap status" name="recaptcha" value="1" {{ $setting->recaptcha == 1 ? 'checked' : '' }}>
                                                            <span class="switch-body"></span>
                                                            <span class="switch-text">{{ __('Display Google Recaptcha') }}</span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="google_recaptcha_site_key">{{ __('Google Rechaptcha Site Key') }} *</label>
                                                            <input type="text" name="google_recaptcha_site_key" class="form-control" id="google_recaptcha_site_key"
                                                                placeholder="{{ __('Google Rechaptcha Site Key') }}" value="{{ $setting->google_recaptcha_site_key }}" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="google_recaptcha_secret_key">{{ __('Google Rechaptcha Secret Key') }}</label>
                                                            <input type="text" name="google_recaptcha_secret_key" class="form-control" id="google_recaptcha_secret_key"
                                                                placeholder="{{ __('Google Rechaptcha Secret Key') }}" value="{{ $setting->google_recaptcha_secret_key }}" >
                                                        </div>


                                                        <hr>



                                                        <div class="form-group">
                                                            <label class="switch-primary">
                                                            <input type="checkbox" class="switch switch-bootstrap status" name="is_facebook_pixel" value="1" {{ $setting->is_facebook_pixel == 1 ? 'checked' : '' }}>
                                                            <span class="switch-body"></span>
                                                            <span class="switch-text">{{ __('Display Facebook Pixel') }}</span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>{{ __('Facebook Pixel') }} *</label>
                                                            <textarea name="facebook_pixel" class="form-control" id="" placeholder="{{ __('Facebook Pixel') }}">{{ $setting->facebook_pixel }}</textarea>
                                                        </div>


                                                        

                                                       

                                                    </div>

                                                </div>
                                            </div>



                                            <div id="shop" class="tab-pane"><br>
                                                <div class="row justify-content-center">

                                                    <div class="col-lg-11">
                                                        <div class="form-group">
                                                            <label class="switch-primary">
                                                            <input type="checkbox" class="switch switch-bootstrap status" name="is_attribute_search"  value="1" {{ $setting->is_attribute_search == 1 ? 'checked' : '' }}>
                                                            <span class="switch-body"></span>
                                                            <span class="switch-text">{{ __('Enable Filter By Attribute & Attribute Options') }}</span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="switch-primary">
                                                            <input type="checkbox" class="switch switch-bootstrap status" name="is_range_search"  value="1" {{ $setting->is_range_search == 1 ? 'checked' : '' }}>
                                                            <span class="switch-body"></span>
                                                            <span class="switch-text">{{ __('Enable Filter By Price Range') }}</span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="view_product">{{ __('View Product') }} *</label>
                                                            <input type="text" name="view_product" class="form-control" id="view_product"
                                                                placeholder="{{ __('View Product') }}" value="{{ $setting->view_product }}" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="max_price">{{ __('Price Range Max') }} *</label>
                                                            <input type="text" name="max_price" class="form-control" id="max_price"
                                                                placeholder="{{ __('Price Range Max') }}" value="{{ $setting->max_price }}" >
                                                        </div>

                                                        <hr>

                                                        <div class="form-group">
                                                            <label class="switch-primary">
                                                            <input type="checkbox" class="switch switch-bootstrap status" name="is_guest_checkout"  value="1" {{ $setting->is_guest_checkout == 1 ? 'checked' : '' }}>
                                                            <span class="switch-body"></span>
                                                            <span class="switch-text">{{ __('Enable Guest Checkout') }}</span>
                                                            </label>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="switch-primary">
                                                            <input type="checkbox" class="switch switch-bootstrap status" name="is_privacy_trams"  value="1" {{ $setting->is_privacy_trams == 1 ? 'checked' : '' }}>
                                                            <span class="switch-body"></span>
                                                            <span class="switch-text">{{ __('Enable Privacy & Terms Conditions') }}</span>
                                                            </label>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="policy_link">{{ __('Privacy Policy Link') }} *</label>
                                                            <input type="text" name="policy_link" class="form-control" id="policy_link"
                                                                placeholder="{{ __('Privacy Policy') }}" value="{{ $setting->policy_link }}" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="terms_link">{{ __('Terms of Service Link') }} *</label>
                                                            <input type="text" name="terms_link" class="form-control" id="terms_link"
                                                                placeholder="{{ __('Terms of Service') }}" value="{{ $setting->terms_link }}" >
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>



                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-11 form-group d-flex justify-content-end">
                                        <button type="submit" class="btn btn-secondary submitBtn">{{ __('Submit') }}</button>
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

@endsection


@section('scripts')
    <script src="{{asset('public/assets/back/js/plugin/codemirror/codemirror.js')}}"></script>
    <script src="{{asset('public/assets/back/js/plugin/codemirror/css.js')}}"></script>
    <script>

        $(document).ready(function () {
            var editor = CodeMirror.fromTextArea(document.getElementById("custom_css_area"), {
                mode: "text/css",
                matchBrackets: true,
                theme: "monokai"
            });
        });
    </script>
@endsection


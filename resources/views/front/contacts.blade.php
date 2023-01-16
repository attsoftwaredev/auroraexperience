@includeIf('front.themes.custom-theme.header')
	
<section id="banner">
	<h1 class="text-center text-white">CONTACT US</h1>
</section>

<section id="contactformBlock">
<div class="container">
	<div class="row row-flex">
	  <div class="col-md-5 col-12 text-center pt-5 contactFormRight">
        <img src="{{ asset('resources/views/front/themes/custom-theme/images/white-envelope.png') }}" class="pt-5 pb-3">
		<p class="text-white text-center pt-3">If you have questions or just want to get in touch, use the form. We look forward to hearing from you!</p>
	  </div>
      <div class="col-md-7 col-12 contactForm">
		<h4 class="text-left">Send Us a Message</h4>
        <input type="text" class="form-control" placeholder="Enter Full Name" aria-label="Enter Full Name">
		<input type="email" class="form-control" placeholder="Enter Email Address" aria-label="Enter Email Address">
        <input type="text" class="form-control" placeholder="Enter Phone Number" aria-label="Enter Phone Number">
        <textarea type="text" class="form-control" placeholder="Message" aria-label="Message"></textarea>
		<button type="submit" class="btn btn-primary">Send</button>
		  <h3 class="text-center">Follow Us</h3>
 
		  <div class="row align-items-center" id="socialIcon">
            <div class="col socialIcon">
				<a href="#"><img src="{{ asset('resources/views/front/themes/custom-theme/images/facebook-icon.png') }}"></a>
			</div>	
			<div class="col socialIcon">
				<a href="#"><img src="{{ asset('resources/views/front/themes/custom-theme/images/twitter-icon.png') }}"></a>
			</div>	
			<div class="col socialIcon">
				<a href="#"><img src="{{ asset('resources/views/front/themes/custom-theme/images/google-icon.png') }}"></a>
			</div>	
			<div class="col socialIcon">
				<a href="#"><img src="{{ asset('resources/views/front/themes/custom-theme/images/ios-icon.png') }}"></a>
			</div>	
		  </div>
	  </div>
	</div>
</div>
</section>

<section>
  <div class="row">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14029559.808146235!2d-109.10594865574181!3d30.853481100132246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864070360b823249%3A0x16eb1c8f1808de3c!2sTexas!5e0!3m2!1sen!2sus!4v1667447995350!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>  
</section>



@includeIf('front.themes.custom-theme.footer')

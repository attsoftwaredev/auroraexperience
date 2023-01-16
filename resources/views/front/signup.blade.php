@includeIf('front.themes.custom-theme.header')

<section id="banner">
	<h1 class="text-center text-white">SIGN UP</h1>
</section>

<section id="formBlock">
<div class="container">
	<div class="row row-flex">
        <div class="col-md-6 col-12 loginForm">
                    <h2 class="text-center">PATTYON</h2>
                    <h4 class="text-center">Sign Up Your account </h4>
                    <input type="text" class="form-control" placeholder="Name" aria-label="Name">
                    <input type="email" class="form-control" placeholder="Email" aria-label="Email">
                    <input type="tel" class="form-control" placeholder="Phone" aria-label="Phone">
                    <input type="text" class="form-control" placeholder="Password" aria-label="Password">
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Remember me
                        </label>
                      </div>
                      <p>New to Pattyon?   <a href="#">SIGN IN</a></p>
                      <p>This page is protected by Google reCAPTCHA to ensure you're not a bot. </p>
                      <h3 class="text-center">Or Sign in with</h3>
             
                      <div class="row align-items-center" id="socialIcon">
                        <div class="col socialIcon">
                            <img src="{{ asset('resources/views/front/themes/custom-theme/images/facebook-icon.png') }}">
                        </div>	
                        <div class="col socialIcon">
                            <img src="{{ asset('resources/views/front/themes/custom-theme/images/twitter-icon.png') }}">
                        </div>	
                        <div class="col socialIcon">
                            <img src="{{ asset('resources/views/front/themes/custom-theme/images/google-icon.png') }}">
                        </div>	
                        <div class="col socialIcon">
                            <img src="{{ asset('resources/views/front/themes/custom-theme/images/ios-icon.png') }}">
                        </div>	
                      </div>
        </div>
        <div class="col-md-6 col-12 signUpFormRight">
          <h2 class="text-uppercase text-white">Patton Batter Succeed Togeter</h2>
          <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
  </div>   
</div>
</section>

@includeIf('front.themes.custom-theme.footer')

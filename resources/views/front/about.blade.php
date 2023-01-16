@includeIf('front.themes.custom-theme.header')
<section id="banner" class="aboutBanner">	
	<h1 class="text-white">The story of Pattyon</h1>
</section>

<section id="aboutUs" class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 py-5">
				<h2 class="text-center pt-5">About</h2>
				<h5 class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</h5>
				<p><strong>Welcome to Pattyon.com!</strong> Fusce varius tellus non orci semper, ac fringilla nulla sollicitudin. Aliquam eget mi finibus, pellentesque lacus id, lacinia tortor. Quisque non fringilla orci. Quisque urna leo, ornare id ligula sed, gravida cursus tellus. Ut interdum nibh et lobortis pretium. Vestibulum rutrum lectus turpis, eu dignissim orci dignissim eu.</p>
				<p>We cover everything related Sed auctor dictum semper. Proin consectetur urna orci, vel pellentesque sapien aliquam pulvinar. Suspendisse gravida sem ut imperdiet iaculis. Morbi rhoncus velit eu nulla posuere, in porta nibh mollis. Maecenas at justo eu arcu volutpat vehicula vel a turpis. Aenean quis ligula urna.</p>
			</div>
			<div class="col-md-6 py-5 text-center">
				<img src="{{ asset('resources/views/front/themes/custom-theme/images/about.png') }}" class="w-75">
			</div>		
		</div>	
	</div>	
</section>	

<section id="offerSection" class="py-5">
	<div class="container">
		<h3 class="text-center pt-5 pb-3">What we offer</h3>
		<p class="text-center pb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat mauris vel ligula vehicula</p>
		<div class="row">
			<div class="col-md-4">
				<div class="card text-center">
					<div class="card-img">
					<img src="{{ asset('resources/views/front/themes/custom-theme/images/schools.png') }}" class="card-img-top" alt="School">
					</div>
					<div class="card-body">
					  <h5 class="card-title">Schools</h5>
					  <p class="card-text">We help parents choose the right school for their kids. Find International and National Schools in more than 10 countries.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card text-center">
					<div class="card-img">
					<img src="{{ asset('resources/views/front/themes/custom-theme/images/plans.png') }}" class="card-img-top" alt="Plans">
					</div>
					<div class="card-body">
					  <h5 class="card-title">Plans</h5>
					  <p class="card-text">Fusce varius tellus non orci semper, ac fringilla nulla sollicitudin. Aliquam eget mi finibus, pellentesque lacus id, lacinia tortor. Quisque non fringilla orci.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card text-center">
					<div class="card-img">
					<img src="{{ asset('resources/views/front/themes/custom-theme/images/subscripition.png') }}" class="card-img-top" alt="Plans">
					</div>
					<div class="card-body">
					  <h5 class="card-title">Subscripition</h5>
					  <p class="card-text">Ut interdum nibh et lobortis pretium. Vestibulum rutrum lectus turpis, eu dignissim orci dignissim eu. Sed auctor dictum semper.</p>
					</div>
				</div>
			</div>	
		</div>	
		<div class="row">
			<div class="col-md-4">
				<div class="card text-center">
					<div class="card-img">
					<img src="{{ asset('resources/views/front/themes/custom-theme/images/fundraising.png') }}" class="card-img-top" alt="Plans">
					</div>
					<div class="card-body">
					  <h5 class="card-title">Fundraising</h5>
					  <p class="card-text">Ut interdum nibh et lobortis pretium. Vestibulum rutrum lectus turpis, eu dignissim orci dignissim eu. Sed auctor dictum semper.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card text-center">
					<div class="card-img">
					<img src="{{ asset('resources/views/front/themes/custom-theme/images/discussion.png') }}" class="card-img-top" alt="Plans">
					</div>
					<div class="card-body">
					  <h5 class="card-title">Q&A and Discussion Forum</h5>
					  <p class="card-text">Morbi rhoncus velit eu nulla posuere, in porta nibh mollis. Maecenas at justo eu arcu volutpat vehicula vel a turpis. Aenean quis ligula urna.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card text-center">
					<div class="card-img">
					<img src="{{ asset('resources/views/front/themes/custom-theme/images/reviews.png') }}" class="card-img-top" alt="Plans">
					</div>
					<div class="card-body">
					  <h5 class="card-title">Reviews</h5>
					  <p class="card-text">Sed mollis libero non placerat consectetur. Sed venenatis, est a vulputate cursus, leo tellus ullamcorper nibh, vel convallis lacus mauris id orci.</p>
					</div>
				</div>
			</div>	
		</div>
	</div>	
</section>	

@includeIf('front.themes.custom-theme.footer')

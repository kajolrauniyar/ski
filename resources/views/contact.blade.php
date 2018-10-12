@extends('layouts.frontend')
@section('content')
<!-- parallex-image start -->
<div class="contact-parallax" style="background-image: url('https://source.unsplash.com/1200x640/?mail');">
</div>

<!-- parallex image end -->
<!-- title start -->
<div class="container center">
	<h2>GET IN TOUCH</h2>
	<p><i>Contact us by email, phone or through our web form below.</i></p>
</div>
<!-- title end -->
<!-- form start -->
<section>
	<div class="container">
		<div class="row">
			<div class="col">
				<form>
					<div class="form-field col s12"">
						<label for="full_name">Full Name</label>
						<input type="text" id="full_name" required>
					</div>

					<div class="form-field col s12"">
						<label for="email">Email</label>
						<input type="email" id="email"  required>
					</div>
					<div class="form-field col s12"">
						<label for="number">Phone Number</label>
						<input type="text" id="number">
					</div>
					<div class="form-field col s12"">
						<label for="subject">Subject</label>
						<input type="text" id="subject" required>
					</div>

					<div class="form-field col s12"">
						<label for="message">Message</label>
						<textarea id="textarea1" class="materialize-textarea" cols="30" rows="10" required></textarea>
					</div>

					<div class="form-field">
						<button class="btn-small waves-effect scooter" >Contact</button>
					</div>
				</form>
			</div>

		</div>
	</section>
	<!-- form end -->
	<!-- google map start -->
	<div class="map-wrapper">
		<img src="https://source.unsplash.com/1000x400/?map" alt="" style="width: 100%;">
	</div>
	<!-- googlr map end -->
	@stop
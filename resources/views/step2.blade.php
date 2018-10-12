@extends('layouts.frontend')
@section('content')

<!-- steps start -->
<section class="grey lighten-4">
	<div class="title-wrapper">
		<h4 class="step-title center uk-margin">Book a Trip</h4>
	</div>
	<div class="row uk-margin-medium uk-margin-remove-horizontal">
		<div class="col s4 m4 l4">
			<div class="circle-text">
				<i class="medium material-icons">check</i>
			</div>
			<h2 class="center" style="font-size:14px;">Choose Your Trip</h2>
		</div>
		<div class="col s4 m4 l4">
			<div class="circle-text active-step">
				Step 2
			</div>
			<h2 class="center" style="font-size:14px;">Traveller's Details</h2>
		</div>
		<div class="col s4 m4 l4">
			<div class="circle-text">
				Step 3
			</div>
			<h2 class="center" style="font-size:14px;">Booking Complete</h2>
		</div>
	</div>
	
</section>
<!-- steps end -->
<!-- booking process start -->
<section class="white">	
	<div class="container">
		<div class="row">
			<div class="col m2 l2">
			</div>
			<div class="col s12 m8 l8">
				<h4 class="center-align">Lead Traveller</h4>
				<div class="row uk-margin-remove-bottom">
					<div class="input-field col s12 m2 l2">
						<select>
							<option value="" disabled selected></option>
							<option value="1">Mr.</option>
							<option value="2">Mrs.</option>
							<option value="3">Ms.</option>
						</select>						
					</div>

					<div class="input-field col s12 m5 l5">
						<input id="first_name" type="text" class="validate" placeholder="First Name">
					</div>
					<div class="input-field col s12 m5 l5">
						<input id="last_name" type="text" class="validate" placeholder="Last Name">
					</div>
				</div>				
				<div class="row uk-margin-remove-bottom">
					<div class="input-field col s12">
						<select>
							<option value="" disabled selected>Country</option>
							<option value="1">India</option>
							<option value="2">China</option>
							<option value="3">USA</option>
						</select>
						<label>No. of travellers</label>
					</div>
				</div>
				<div class="row uk-margin-remove-bottom">
					<div class="input-field col s12">
						<input id="email" type="email" class="validate">
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row uk-margin-remove-bottom">
					<div class="input-field col s12">
						<textarea id="address" cols="30" rows="10" class="materialize-textarea"></textarea>
						<label for="address">Address</label>
					</div>
				</div>
				<div class="row uk-margin-remove-bottom">
					<div class="input-field col s12">
						<input id="telephone" type="text" class="validate" placeholder="mobile">
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<i class="far fa-calendar-alt prefix"></i>
						<input id="dob" type="text" class="validate">
						<label for="dob">Date of Birth</label>
					</div>
				</div>
				<div class="row uk-margin-remove-bottom">
					<div class="input-field col s6">
						<i class="far fa-calendar-alt prefix"></i>
						<input id="exp" type="text" class="validate">
						<label for="exp">Passport Expiry</label>
					</div>
					<div class="input-field col s6">
						<input id="text" type="text" class="validate">
						<label for="text">Passport no.</label>
					</div>
				</div>

				<div class="row uk-margin-medium-bottom">
					<div class="input-field col s12 " >
						<label>
							<input type="checkbox" class="filled-in" checked="checked" />
							<span>By selecting to complete this booking I acknowledge that I have read and accept the terms & conditions, and privacy policy.</span>
						</label>
					</div>
				</div>
				<div class="row center-align">
					<div class="input-field col s12 " > 
						<button class="btn waves-effect waves-light" type="submit" name="action">Proceed Booking
							<i class="material-icons right">send</i>
						</button>
					</div>
				</div>				
			</div>
			<div class="col m2 l2">
			</div>
		</div>
	</div>
</section>
<!-- booking process end -->
@stop
@section('styles')
<link rel="stylesheet" href="{{asset('css/intlTelInput.min.css')}}">
@stop
@section('scripts')
<script src="{{asset('js/intlTelInput-jquery.min.js')}}"></script>
<script src="{{asset('js/intlTelInput.min.js')}}"></script>
<script>
	$(function(){
		$("#telephone").intlTelInput({
			allowDropdown: true,
		});
	});
</script>
@stop

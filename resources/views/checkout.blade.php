@extends('layouts.product-layout')

@section('content')
  @include('partials.header')
  @include('partials.nav')
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_2.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Checkout</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
						<form action="#" class="billing-form">
							<h3 class="mb-4 billing-heading">Billing Details</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">Firt Name</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Last Name</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
                </div>
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="country">State</label>
		            		<div class="select-wrap">
		                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                  <select name="" id="" class="form-control">
		                  	<option value="">Andhra Pradesh</option>
		                    <option value="">Arunachal Pradesh</option>
		                    <option value="">Assam</option>
		                    <option value="">Bihar</option>
		                    <option value="">Chhattisgarh</option>
							<option value="">Goa</option>
							<option value="">Gujarat</option>
		                    <option value="">Haryana</option>
		                    <option value="">Himachal Pradesh</option>
		                    <option value="">Jharkhand</option>
		                    <option value="">Karnataka</option>
							<option value="">Kerala</option>
							<option value="">Madhya Pradesh</option>
		                    <option value="">Maharashtra</option>
		                    <option value="">Manipur</option>
		                    <option value="">Meghalaya</option>
		                    <option value="">Mizoram</option>
							<option value="">Nagaland</option>
							<option value="">Odisha</option>
		                    <option value="">Punjab</option>
		                    <option value="">Rajasthan</option>
		                    <option value="">Sikkim</option>
		                    <option value="">Tamil Nadu</option>
							<option value="">Telangana</option>
							<option value="">Tripura</option>
		                    <option value="">Uttar Pradesh</option>
							<option value="">Uttarakhand</option>
							<option value="">West Bengal</option>
		                  </select>
		                </div>
		            	</div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="streetaddress">Street Address</label>
	                  <input type="text" class="form-control" placeholder="House number and street name">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                  <input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Town / City</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Postcode / ZIP *</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Phone</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
                </div>
                <!-- <div class="w-100"></div> -->
                <!-- <div class="col-md-12">
                	<div class="form-group mt-4">
						<div class="radio">
							<label class="mr-3"><input type="radio" name="optradio"> Create an Account? </label>
							<label><input type="radio" name="optradio"> Ship to different address</label>
						</div>
					</div>
                </div> -->
	            </div>
	          </form><!-- END -->
					</div>
					<div class="col-xl-5">
	          <div class="row mt-5 pt-3">
	          	<div class="col-md-12 d-flex mb-5">
	          		<div class="cart-detail cart-total p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Cart Total</h3>
	          			<p class="d-flex">
							<span>Subtotal</span>
							<span>${{Cart::getTotal()}}</span>
						</p>
						<p class="d-flex">
							<span>Delivery</span>
							<span>$0.00</span>
						</p>
						<p class="d-flex">
							<span>Discount</span>
							<span>$0.00</span>
						</p>
						<hr>
						<p class="d-flex total-price">
							<span>Total</span>
							<span>${{Cart::getTotal()}}</span>
						</p>
					</div>
	          	</div>
	          	<div class="col-md-12">
	          		<div class="cart-detail p-3 p-md-4">
						<form action="{{route('store')}}" id="payment-form" method="post">
							@csrf
							<h3 class="billing-heading mb-4">Payment Method</h3>
							<div class="form-group">
								<label for="card-element">Credit or debit card</label>
								<div id="card-element">
								<!-- A Stripe Element will be inserted here. -->
								</div>

								<!-- Used to display form errors. -->
								<div id="card-errors" role="alert"></div>
							</div>
							<button type="submit" class="btn btn-primary">Make Payment</button>
						</form>
						  
						<!-- <div class="form-group">
							<div class="col-md-12">
								<div class="radio">
									<label><input type="radio" name="optradio" class="mr-2"> Check Payment</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<div class="radio">
									<label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<div class="checkbox">
									<label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
								</div>
							</div>
						</div> -->
						
					</div>
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
	</section> 
	<!-- .section -->

	<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
@include('partials.footer')

@section('script')
<script>
	$(document).ready(function(){
		var quantitiy=0;
		$('.quantity-right-plus').click(function(e){

			// Stop acting like a button
			e.preventDefault();
			// Get the field name
			var quantity = parseInt($('#quantity').val());
			
			// If is not undefined
				
				$('#quantity').val(quantity + 1);
				
				// Increment
		});
		   
		$('.quantity-left-minus').click(function(e){
			// Stop acting like a button
			e.preventDefault();
			// Get the field name
			var quantity = parseInt($('#quantity').val());
			
			// If is not undefined
			
				// Increment
				if(quantity>0){
				$('#quantity').val(quantity - 1);
				}
		});
		    
	});

(function(){
	// Create a Stripe client.
var stripe = Stripe('pk_test_52naiYM8wAbjkm9WgbVoqhCV00o4Ga4HF8');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Poppins", Arial, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {
	style: style,
	hidePostalCode: true
});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});

// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
}
})();
	
</script>
    
@endsection
@endsection
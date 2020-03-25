@extends('layouts.product-layout')

@section('content')
  @include('partials.header')
  @include('partials.nav')

<!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url({{asset('images/bg_1.jpg')}});">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">My Cart</h1>
          </div>
        </div>
      </div>
    </div>

    	<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    				<div class="col-md-12 ftco-animate">
    					<div class="cart-list">
							@if(Cart::getContent()->count() == 0)
								<section class="ftco-section ftco-category ftco-no-pt">
									<div class="container">
										<div class="category-wrap-2 ftco-animate">
											<div class="text text-center">
												<h2>No items in your cart..</h2>
												<p><a href="{{route('home')}}" class="btn btn-primary">Shop now</a></p>
											</div>
										</div>
									</div>	
								</section>
						</div>
					</div>
				</div>
			</div>
		</section>
							@else
								<table class="table">
									<thead class="thead-primary">
									<tr class="text-center">
										<th>&nbsp;</th>
										<th>Product name</th>
										<th>Price</th>
										<th>Quantity</th>
										<th>Total</th>
										<th>&nbsp;</th>
									</tr>
									</thead>
									<tbody>
									@foreach(Cart::getContent() as $product)	
										<tr class="text-center">
											<td class="image-prod">
												<div class="img" style="background-image:url({{asset('storage/'.$product->model->image)}});"></div>
											</td>
											<td class="product-name">
												<h3>{{$product->name}}</h3>
											</td>
											<td class="price">${{$product->price}}</td>
											<td class="quantity">
												<form action="{{route('cart-update', $product->id)}}" method="post">
													@csrf
													@method('PUT')
													<div class="input-group d-flex">
														<!-- <span class="input-group-btn mr-2">
															<button type="submit" class="quantity-left-minus"  data-type="minus" data-field="">
																<i class="ion-ios-remove"></i>
															</button>
														</span> -->
														<input type="text" id="quantity" name="quantity" class="form-control input-number" value="{{$product->quantity}}" min="1" max="100">
														<!-- <span class="input-group-btn ml-2">
															<button type="submit" class="quantity-right-plus" data-type="plus" data-field="">
																<i class="ion-ios-add"></i>
															</button>
														</span> -->
													</div>
												</form>
											</td>
											<td class="total">${{$product->quantity * $product->model->price}}</td> 
											<td>
												<form action="{{route('remove-cart', $product->id)}}" method="post">
													@csrf
													@method('DELETE')
													<input type="submit" class="btn btn-primary" value="Delete">
												</form>
											</td>
										</tr>
									@endforeach
									</tbody>
								</table>
					  		</div>
    					</div>
    				</div>
    				<div class="row justify-content-center ">
    					<!-- <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    						<div class="cart-total mb-3">
    							<h3>Coupon Code</h3>
    							<p>Enter your coupon code if you have one</p>
  								<form action="#" class="info">
	              					<div class="form-group">
										<label for="">Coupon code</label>
										<input type="text" class="form-control text-left px-3" placeholder="">
									</div>
								</form>
    						</div>
    						<p><a href="#" class="btn btn-primary py-3 px-4">Apply Coupon</a></p>
    					</div> -->
    					<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    						<div class="cart-total mb-3">
    							<h3>Estimate shipping and tax</h3>
    							<p>Enter your destination to get a shipping estimate</p>
  								<form action="#" class="info">
	              					<div class="form-group">
										<label for="">Country</label>
										<input type="text" class="form-control text-left px-3" placeholder="">
									</div>
									<div class="form-group">
										<label for="country">State/Province</label>
										<input type="text" class="form-control text-left px-3" placeholder="">
									</div>
									<div class="form-group">
										<label for="country">Zip/Postal Code</label>
										<input type="text" class="form-control text-left px-3" placeholder="">
									</div>
								</form>
    						</div>
    						<!-- <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Estimate</a></p> -->
    					</div>
						<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
							<div class="cart-total mb-3">
								<h3>Cart Totals</h3>
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
    						<p><a href="{{route('checkout')}}" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
    					</div>
    				</div>
				</div>
			</section>
		@endif

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

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(id){
		        
		        // Stop acting like a button
		        // e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(id){
		        // Stop acting like a button
		        // e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
					$('#quantity').val(quantity - 1);
					
		            }
		    });
		    
		});
	</script>
@endsection
@endsection
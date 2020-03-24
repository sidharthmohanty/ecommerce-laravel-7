@extends('layouts.product-layout')

@section('content')
@include('partials.header')
@include('partials.nav')
	<!-- END nav -->
	
<div class="hero-wrap hero-bread" style="background-image: url('{{asset('storage/'.$singleProduct->image)}}');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Organic</a></span> <span class="mr-2"><a href="index.html">Product</a></span></p>
				<h1 class="mb-0 bread">{{$singleProduct->name}}</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section">
	<div class="container">
    	<div class="row">
    		<div class="col-lg-6 mb-5 ftco-animate">
    			<a href="images/product-1.jpg" class="image-popup"><img src="{{asset('storage/'.$singleProduct->image)}}" class="img-fluid" alt="Colorlib Template"></a>
    		</div>
    		<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    			<h3>{{$singleProduct->name}}</h3>
    			<div class="rating d-flex">
					<p class="text-left mr-4">
						<a href="#" class="mr-2">5.0</a>
						<a href="#"><span class="ion-ios-star-outline"></span></a>
						<a href="#"><span class="ion-ios-star-outline"></span></a>
						<a href="#"><span class="ion-ios-star-outline"></span></a>
						<a href="#"><span class="ion-ios-star-outline"></span></a>
						<a href="#"><span class="ion-ios-star-outline"></span></a>
					</p>
					<p class="text-left mr-4">
						<a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
					</p>
					<p class="text-left">
						<a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
					</p>
				</div>
    			<p class="price"><span>${{$singleProduct->price}}</span></p>
    			<p>{!! $singleProduct->description !!}</p>
				<div class="row mt-4">
					<div class="col-md-6">
					<!-- Form goes here-->
						<form action="{{route('add-cart')}}" method="post">
							@csrf
							<input type="hidden" name="product_id" value="{{$singleProduct->id}}">
							<div class="form-group d-flex">
								<div class="select-wrap">
									<div class="icon"><span class="ion-ios-arrow-down"></span></div>
									<select name="size" id="size" class="form-control">
										<option value="1">Small</option>
										<option value="1.3">Medium</option>
										<option value="1.7">Large</option>
										<option value="2">Extra Large</option>
									</select>
								</div>
							</div>
					</div>
					<div class="w-100"></div>
					<div class="input-group col-md-6 d-flex mb-3">
	             		<span class="input-group-btn mr-2">
	                		<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   			<i class="ion-ios-remove"></i>
	                		</button>
	            		</span>
						<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
						<span class="input-group-btn ml-2">
							<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
								<i class="ion-ios-add"></i>
							</button>
						</span>
	          		</div>
	          		<div class="w-100"></div>
	          		<div class="col-md-12">
	          			<p style="color: #000;">600 kg available</p>
	          		</div>
			  	</div>
							<input type="submit" name="submit" class="btn btn-black py-3 px-5" value="Add to Cart"> 
			  			</form>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Products</span>
            <h2 class="mb-4">Related Products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
                @foreach($products as $product)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid" src="{{asset('storage/'.$product->image)}}" alt="Colorlib Template">
                                <span class="status">30%</span>
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">{{$product->name}}</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">${{$product->price}}</span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span><i class="ion-ios-menu"></i></span>
                                        </a>
                                        <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span><i class="ion-ios-cart"></i></span>
                                        </a>
                                        <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                            <span><i class="ion-ios-heart"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
    		</div>
    	</div>
    </section>

	<!-- <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
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
    </section> -->

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
	</script>

@endsection
@endsection

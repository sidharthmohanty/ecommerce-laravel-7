@extends('layouts.product-layout')

@section('content')
  @include('partials.header')
  @include('partials.nav')

<!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url({{asset('images/bg_1.jpg')}});">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">E-kart</h1>
          </div>
        </div>
      </div>
    </div>
    	<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    				<div class="col-md-12 ftco-animate">
    					<div class="cart-list">
								<section class="ftco-section ftco-category ftco-no-pt">
									<div class="container">
										<div class="category-wrap-2 ftco-animate">
											<div class="text text-center">
												<h2>Thank you for your order..</h2>
												<p><a href="{{route('home')}}" class="btn btn-primary">Shop mpre</a></p>
											</div>
										</div>
									</div>	
								</section>
						</div>
					</div>
				</div>
			</div>
</section>

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
@endsection
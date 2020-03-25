<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{route('home')}}">E-kart</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
				@auth
					<li class="nav-item active"></li>
					<li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
								</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a href="{{route('dashboard')}}" class="dropdown-item">Dashboard</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
	
	
					<!-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
					<div class="dropdown-menu" aria-labelledby="dropdown04">
						<a class="dropdown-item" href="shop.html">Shop</a>
						<a class="dropdown-item" href="wishlist.html">Wishlist</a>
						<a class="dropdown-item" href="product-single.html">Single Product</a>
						<a class="dropdown-item" href="cart.html">Cart</a>
						<a class="dropdown-item" href="checkout.html">Checkout</a>
					</div>
					</li> -->
					<!-- <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
					<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li> -->
					<li class="nav-item cta cta-colored"><a href="{{route('cart')}}" class="nav-link"><span class="icon-shopping_cart"></span>[{{Cart::getContent()->count()}}]</a></li>
				@else
					<li class="nav-item active"><a href="{{route('register')}}" class="nav-link">Register</a></li>
					<li class="nav-item active"><a href="{{route('login')}}" class="nav-link">Login</a></li>
				@endauth
	          
	        </ul>
	      </div>
	    </div>
	  </nav>
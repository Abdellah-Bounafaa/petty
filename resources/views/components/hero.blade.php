 <div class="container">
     <div class="row">
         <div class="col-md-6 d-flex align-items-center">
             <p class="mb-0 phone pl-md-2">
                 <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567</a>
                 <a href="#"><span class="fa fa-paper-plane mr-1"></span> youremail@email.com</a>
             </p>
         </div>
         <div class="col-md-6 d-flex justify-content-md-end auth-btns">
             {{-- @if (auth()->check()) --}}
             @auth()
                 <form method="POST" action="/logout">
                     @csrf
                     <button type="submit">Logout</button>
                 </form> <button class="login-btn">
                     <a href="{{ route('profile') }}">Profile</a>
                 </button>
             @else
                 <button class="login-btn">
                     <a href="{{ route('login') }}">Sign In</a>
                 </button>
                 <button class="join-btn">
                     <a href="{{ route('register') }}">Join</a>
                 </button>
                 {{-- @endif --}}
             @endauth
             {{-- @php
                 dd(session('message'));
             @endphp --}}


             {{-- @auth


                 <form action="/logout" method="post">
                     @csrf
                     <button class="login-btn">
                         <a href="{{ route('/') }}">Logout</a>
                     </button>
                 </form>
             @else
                 <button class="login-btn">
                     <a href="{{ route('login') }}">Sign In</a>
                 </button>
                 <button class="join-btn">
                     <a href="{{ route('register') }}">Join</a>
                 </button>
             @endauth --}}

         </div>
     </div>
 </div>
 </div>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
     <div class="container">
         <a class="navbar-brand" href="/"><span class="flaticon-pawprint-1 mr-2"></span>Petty</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
             aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="fa fa-bars"></span> Menu
         </button>
         <div class="collapse navbar-collapse" id="ftco-nav">
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                 <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                 <li class="nav-item"><a href="{{ route('vet') }}" class="nav-link">Veterinarian</a></li>
                 <li class="nav-item"><a href="{{ route('services') }}" class="nav-link">Services</a></li>
                 <li class="nav-item"><a href="{{ route('gallery') }}" class="nav-link">Gallery</a></li>
                 <li class="nav-item"><a href="{{ route('pricing') }}" class="nav-link">Pricing</a></li>
                 <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
                 <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
             </ul>
         </div>
     </div>
 </nav>

 <div class="container">
     <div class="row">
         <div class="col-md-6 d-flex align-items-center">
             <p class="mb-0 phone pl-md-2">
                 <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567</a>
                 <a href="#"><span class="fa fa-paper-plane mr-1"></span> petty@gmail.com</a>
             </p>
         </div>
         <div class="col-md-6 d-flex justify-content-md-end auth-btns">
             @auth()
                 @php
                     if (auth()->user()->user_type == '1') {
                         $link = route('dash', auth()->user()->id);
                     } else {
                         $link = '/profile' . '/' . auth()->user()->id;
                     }
                 @endphp
                 <button class="login-btn">
                     <a href="{{ $link }}">Profile</a>
                 </button>
                 <form method="POST" action="/logout">
                     @csrf
                     <button type="submit" class="join-btn text-white">Logout</button>
                 </form>
             @else
                 <button class="login-btn">
                     <a href="{{ route('login') }}">Sign In</a>
                 </button>
                 <button class="join-btn">
                     <a href="{{ route('register') }}">Join</a>
                 </button>
             @endauth
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
         {{-- <div class="search">
             <input type="text" class="searchTerm" placeholder="What are you looking for?">
             <button type="submit" class="searchButton">
                 <i class="fa fa-search"></i>
             </button>
         </div> --}}


         <div class="collapse navbar-collapse" id="ftco-nav">
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                 <li class="nav-item"><a href="{{ route('donations') }}" class="nav-link">Donations</a></li>
                 <li class="nav-item"><a href="{{ route('blogs') }}" class="nav-link">Blogs</a></li>
                 <li class="nav-item"><a href="{{ route('orders') }}" class="nav-link">Orders</a></li>
                 <li class="nav-item"><a href="{{ route('requests') }}" class="nav-link">Requests</a></li>
                 <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">contact</a></li>
             </ul>
         </div>
     </div>
 </nav>

   @props(['page'])
   <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ url('images/Adopt.png') }}');"
       data-stellar-background-ratio="0.5">
       <div class="overlay"></div>
       <div class="container">
           <div class="row no-gutters slider-text align-items-end">
               <div class="col-md-9 ftco-animate pb-5">
                   <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home</a></span>
                       <span>{{ $page }}</span>
                   </p>
                   <h1 class="mb-0 bread">{{ $page }}</h1>
               </div>
           </div>
       </div>
   </section>

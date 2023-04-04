   @props(['page'])
   <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');"
       data-stellar-background-ratio="0.5">
       <div class="overlay"></div>
       <div class="container">
           <div class="row no-gutters slider-text align-items-end">
               <div class="col-md-9 ftco-animate pb-5">
                   <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home <i
                                   class="ion-ios-arrow-forward"></i></a></span> <span>{{ $page }}<i
                               class="ion-ios-arrow-forward"></i></span></p>
                   <h1 class="mb-0 bread">{{ $page }}</h1>
               </div>
           </div>
       </div>
   </section>
